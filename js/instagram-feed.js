/**
 * Instagram Feed
 *
 * @param {String} [data-username] - Instagram username
 * @param {Number} [data-limit] - (Optional up to 12) Number of photo URIs to return, defaults to 10 otherwise
 * @returns {HTML}
 * @param {String} [data-load-more-id] - [**NO LONGER SUPPORTED!**] (Optional) HTML ID of the node used to load more on click
 * 
 * Version 1.0.7 - (3/8/21) Updated to use Google Proxy Service due to IG protecting the graph endpoint via CORS, 'Load More' service no longer works...
 */
(function() {
	var script = document.getElementById('ig-feed');
	var username = script.getAttribute('data-username');
	var limit = Number( script.getAttribute('data-limit') ) || 10;
	var loadMoreSupport = Boolean( script.getAttribute('data-load-more-id') );

	// Get media from IG graphQL
	getIgMedia(username, limit, false);
	// Setup for load more
	if (loadMoreSupport) {
		window.onload = function() {
			var btnId = script.getAttribute('data-load-more-id');
			var $loadMoreBtn = document.getElementById(btnId);
			$loadMoreBtn.addEventListener('click', function() {
				getIgMedia(username, limit, true);
			});
		}
	}
})();

function getIgMedia(username, limit, isLoadMore) {
	// var url = isLoadMore ? 'https://instagram.com/graphql/query/?query_id=17888483320059182&id=' + window.igFeedId + '&first=' + limit + '&after=' + window.igFeedEndCursor : 'https://instagram.com/' + username + '/?__a=1'; // CORS Restricted now
		// Use Google Proxy service to avoid CORS policy errors
	var googleProxy = 'https://images' + ~~(Math.random() * 3333) + '-focus-opensocial.googleusercontent.com/gadgets/proxy?container=none&url=https://www.instagram.com/';
	var url = googleProxy + username + '/';
	var instaSrc = new XMLHttpRequest();

	instaSrc.onreadystatechange = function() {
		if (instaSrc.readyState == XMLHttpRequest.DONE) {
			// var json = JSON.parse(instaSrc.responseText); // CORS Restricted enpoint response JSON
			// Manually parse JSON from Shared Data JS object in HTML/plain-text response
			var responseTxt = instaSrc.responseText; 
			var sharedData = responseTxt.split("window._sharedData = ")[1].split("<\/script>")[0];
			var parsedData = JSON.parse(sharedData.substr(0, sharedData.length - 1));
      var json = parsedData.entry_data.ProfilePage[0] || parsedData.entry_data.TagPage[0] || parsedData.entry_data.LocationsPage[0];
			var photoList =[];
			var photoObj = {};
			// Can't use the paging endpoint due to CORS restrictions
			var dataRoot = 'graphql';
			// var dataRoot = isLoadMore ? 'data' : 'graphql';
			// window.igFeedId = isLoadMore ? window.igFeedId : json[dataRoot].user.id;
			// window.igFeedId = json[dataRoot].user.id;
			// window.igFeedEndCursor = json[dataRoot].user.edge_owner_to_timeline_media.page_info.end_cursor;

			for (var i=0; i < limit; i++) {
				photoObj = json[dataRoot].user.edge_owner_to_timeline_media.edges[i].node;
				photoList.push({
					shortcode: photoObj.shortcode,
					url: photoObj.display_url
				});
			}
			// Call for IG grid markup render
			renderIgHtml(photoList, username);
		}
	}
	instaSrc.open('GET', url, true);
	instaSrc.send(null);
}

function renderIgHtml(photoList, username) {
	var markup = '';
	// Build the grid markup
	photoList.forEach(function(photo) {
		markup += '<div class="instagram-grid__item">' + 
			'<a href="https://www.instagram.com/p/' + 
				photo.shortcode + 
			'/" style="background-image:url(' +
				photo.url + 
			');" target="_blank" rel="noopener">' +
				'<img class="sr-only" alt="view ' +
					username +
				' on instagram">' +
			'</a>' +
		'</div>';
	});
	// Render markup after building the content
	setTimeout(function() {
		var div = document.createElement('div');
  		document.getElementById('ig-feed').parentNode.appendChild(div);
  		div.outerHTML = markup;
	}, 0);
}