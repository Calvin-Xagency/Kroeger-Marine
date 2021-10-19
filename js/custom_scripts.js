// Preloader
$(document).ready(function() {
  // window.onload = function() {

  // TEMP Kill Preloader after 2s
  setTimeout(function() {
    $(".preloader")
      .delay(0)
      .fadeOut(500, function() {
        $(".preloader").remove();
      });
  }, 2000);

  // }; // window.onload fn end
  // $("#covidPopup").modal("show");
});

// Hamburger Open
jQuery(document).ready(function() {
  $(".hamburger").click(function() {
    $(this).toggleClass("open");
  });

  $(".hamburger").click(function() {
    $(".navigation").toggleClass("open");
  });
});

// Carousels
$(document).ready(function() {
  // Home Slider
  $(".owl-one").owlCarousel({
    // navigation: true,
    items: 1,
    loop: true,
    animateOut: "fadeOut",
    animateIn: "fadeIn",
    autoplay: true,
    autoplayTimeout: 10000,
    autoplayHoverPause: false
  });
});
$(document).ready(function() {
  // Testimonial Slider
  $(".owl-two").owlCarousel({
    navigation: true,
    items: 1,
    center: true,
    loop: true,
    // animateOut: "fadeOut",
    // animateIn: "fadeIn",
    autoplay: true,
    smartSpeed: 1000,
    autoplayTimeout: 12000,
    autoplayHoverPause: true
  });
});
(function($) {
  // Owl carousel Counter
  $(".owl-carousel").on(
    "initialized.owl.carousel changed.owl.carousel",
    function(e) {
      if (!e.namespace) {
        return;
      }
      var carousel = e.relatedTarget;
      $(".counter-1").text(carousel.relative(carousel.current()) + 1);
      $(".counter-2").text(carousel.items().length);
    }
  );

  // Scoll navbar
  $(document).scroll(function() {
    var $nav = $(".navigation");
    $nav.toggleClass("scrolled", $(this).scrollTop() > 10);
  });
  // Scoll brand logo
  $(document).scroll(function() {
    var $nav = $(".navbar-brand-img");
    $nav.toggleClass("scrolled", $(this).scrollTop() > 10);
  });
})(jQuery);

$(".hotspot").each(function() {
  var $this = $(this),
    top = $this.data("top"),
    left = $this.data("left");

  $this
    .css({
      top: top + "%",
      left: left + "%"
    })
    .addClass("is-visible");
});

$(document).ready(function() {
  $(".jquery-background-video").bgVideo({
    fadeIn: 2000,
    showPausePlay: false
  });
});

// $(document).ready(function() {
//   var galleryFeed = new Instafeed({
//     get: "user",
//     userId: "2242727412",
//     clientId: "540158679929703",
//     accessToken: "2242727412.1677ed0.1002d88b13cb44cebcb7c9a7f7c275bb",
//     resolution: "standard_resolution",
//     template:
//       '<a href="{{link}}" target="_blank" id="{{id}}"><img src="{{image}}" /></a>',
//     sortBy: "most-recent",
//     limit: 12,
//     links: false,
//     target: "instafeed",
//     after: function() {
//       // disable button if no more results to load
//       if (!this.hasNext()) {
//         btnInstafeedLoad.setAttribute("disabled", "disabled");
//       }
//     }
//   });
//   galleryFeed.run();

//   var btnInstafeedLoad = document.getElementById("btn-instafeed-load");
//   btnInstafeedLoad.addEventListener("click", function() {
//     galleryFeed.next();
//   });
// });

$(document).ready(function() {
  // Tooltips
  $(".tooltips").tooltipster({
    delay: 100,
    maxWidth: 500,
    speed: 300,
    interactive: true,
    animation: "grow",
    trigger: "hover",
    theme: ["tooltipster-shadow", "tooltipster-shadow-customized"]
  });

  // Custom Cursor
  function fnCursor() {
    var $cursorWrapper = $(".custom-cursor");
    var $cursor = $("span.cursor--canvas", $cursorWrapper);
    var $link = $(
      "a:not(.slideshow-nav a, .nohover), button, button[type='submit'], button[type='button'], input[type='submit'], input[type='button']"
    );
    var showCursor = false;

    $link.hover(function(e) {
      $($cursorWrapper).toggleClass("hover-link");
    });

    $(document).mousemove(function(e) {
      var left = e.clientX;
      var top = e.clientY;

      $cursorWrapper.css("opacity", 1);
      showCursor = true;
      $cursor.css({
        top: top,
        left: left
      });
    });

    window.onmouseout = function(e) {
      $cursorWrapper.css("opacity", 0);
      showCursor = false;
    };
  }
  fnCursor();
});

new WOW().init();

jQuery(function($) {
  $(window).on("load", function() {
    // PARALLAX FUNCTIN CALL
    $(".parallax-object").paralmax();
  });
});

// $(document).ready(function() {
//
// });

jQuery(function($) {
  // Smooth Scroll to Anchor
  // Select all links with hashes
  $('a[href*="#"]')
    // Remove links that don't actually link to anything
    .not('[href="#"]')
    .not('[href="#0"]')
    .not('[href="#ncqa-text"]')
    .click(function(e) {
      // On-page links
      if (
        location.pathname.replace(/^\//, "") ==
          this.pathname.replace(/^\//, "") &&
        location.hostname == this.hostname
      ) {
        // Figure out element to scroll to
        var target = $(this.hash);
        target = target.length
          ? target
          : $("[name=" + this.hash.slice(1) + "]");
        // Does a scroll target exist?
        if (target.length) {
          // Only prevent default if animation is actually gonna happen
          e.preventDefault();
          $("html, body").animate(
            {
              scrollTop: target.offset().top - 300
            },
            1000,
            function() {
              // Callback after animation
              // Must change focus!
              var $target = $(target);
              $target.focus();
              if ($target.is(":focus")) {
                // Checking if the target was focused
                return false;
              } else {
                $target.attr("tabindex", "-1"); // Adding tabindex for elements not focusable
                $target.focus(); // Set focus again
              }
            }
          );
        }
      }
    });
});

// popup custom cookie
jQuery(function($) {
  /*function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for(var i = 0; i < ca.length; i++) {
      var c = ca[i];
      while (c.charAt(0) == ' ') {
        c = c.substring(1);
      }
      if (c.indexOf(name) == 0) {
        return c.substring(name.length, c.length);
      }
    }
    return "";
  }

  if ( getCookie("modalShown") == "true" || !$('body').hasClass("home") ) {
    $('.popup-custom:not(.lookbook-modal)').css("display", "none");
  } */

  $('.popup-custom:not(.lookbook-modal) .popup-custom-close').on('click tap', function() {
    /*var d = new Date();
    d.setTime(d.getTime() + (24*60*60*1000));
    var expires = "expires="+ d.toUTCString();
    document.cookie = "modalShown=true;" + expires;*/

    $('.popup-custom').css("opacity", "0");
    setTimeout(function() {
      $('.popup-custom').css("display", "none");
    }, 600);
  })
});

/*lookbook modal*/
jQuery(function($) {
  $('.btn-header.lookbook, #menu-item-3415').on('click tap', function(e) {
    e.preventDefault();

    if ( $('.navigation').hasClass('open') ) {
      $('.hamburger > a').click();
    }
    $('.lookbook-modal').css("opacity", 0);
    $('.lookbook-modal').css("display", "block");
    $("#exampleModal").removeClass('show');
    setTimeout(function() {
      $('.lookbook-modal').css("opacity", 1);
    }, 10);
    setTimeout(function() {
      $("#exampleModal").css("display", "none");
    }, 600);
  });

  $('.lookbook-modal .popup-custom-close').on('click tap', function() {
    $('.lookbook-modal').css("opacity", 0);
    setTimeout(function() {
      $('.lookbook-modal').css("display", "none");
    }, 600);
  });


});

/*newsletter modal*/
jQuery(function($) {
  $('#newsletter-modal-link').on('click tap', function(e) {
    e.preventDefault();

    if ( $('.navigation').hasClass('open') ) {
      $('.hamburger > a').click();
    }

    $('.newsletter-modal').css("opacity", 0);
    $('.newsletter-modal').css("display", "block");
    $("#exampleModal").removeClass('show');
    setTimeout(function() {
      $('.newsletter-modal').css("opacity", 1);
    }, 10);
    setTimeout(function() {
      $("#exampleModal").css("display", "none");
    }, 600);
  });

  $('.newsletter-modal .popup-custom-close').on('click tap', function() {
    $('.newsletter-modal').css("opacity", 0);
    setTimeout(function() {
      $('.newsletter-modal').css("display", "none");
    }, 600);
  });
});