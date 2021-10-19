jQuery(document).ready(function($){
	$('img').each(function() {
		var src = $(this).attr("src");
		//var regex = /\/\/.*\/wp-content/; matches on ///wp-content/
		var regex = /.*\/wp-content/;

		if (src != "" && src != undefined) {
			$(this).attr("src", src.replace(regex, "https://kroegermarine.com/wp-content"));
			//console.log($(this).attr("src"));
		}
	});
	  
	$('*[style*=background-image]').each(function() {
		var src = $(this).attr("style");
		var regex = /\/\/.*\/wp-content/;
	
		$(this).attr("style", src.replace(regex, "https://kroegermarine.com/wp-content"));    
	});
});