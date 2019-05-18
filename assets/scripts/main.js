/* ========================================================================
 * DOM-based Routing
 * Based on http://goo.gl/EUTi53 by Paul Irish
 *
 * Only fires on body classes that match. If a body class contains a dash,
 * replace the dash with an underscore when adding it to the object below.
 *
 * .noConflict()
 * The routing is enclosed within an anonymous function so that you can
 * always reference jQuery with $, even when in .noConflict() mode.
 * ======================================================================== */

(function($) {

  // Use this variable to set up the common and page specific functions. If you
  // rename this variable, you will also need to rename the namespace below.
  var Sage = {
    // All pages
    'common': {
      init: function() {
        // JavaScript to be fired on all pages

        $('.mobile-toggle').on('click', function(){
          $('.menu-overlay').toggle(200)
        });

        
         $(window).on('scroll', function() {
            var scrollTop = $(this).scrollTop();
            
            if(scrollTop >= 80) {
              $('.nav').addClass('sticky');
            } else {
              $('.nav').removeClass('sticky');
            }

          });
       
        $('.grid-item:odd').addClass('fadeInLeftBig');
        $('.grid-item:even').addClass('fadeInRightBig');
       
        var $grid = $('.grid');

        $grid.outerWidth(true);

        $(document).ready(function() {

          $grid.imagesLoaded(function() {
              $grid.isotope({
                // set itemSelector so .grid-sizer is not used in layout
                itemSelector: '.grid-item',
                percentPosition: true,
                sortBy : 'original-order',
                resize:true,
                masonry: {
                // set to the element
                  columnWidth: '.grid-sizer'
                  }
              }).isotope('layout');
          });


        });

          
      },
      finalize: function() {
        // JavaScript to be fired on all pages, after page specific JS is fired
      }
    },
    // Home page
    'home': {
      init: function() {
        // JavaScript to be fired on the home page

        $('.nav-logo').hide();

         $(window).on('scroll', function() {
            var scrollTop = $(this).scrollTop();
            
            if(scrollTop >= 80) {
              $('.nav').addClass('sticky');
            } else {
              $('.nav').removeClass('sticky');
            }

            if(scrollTop >= 150) {
              $('.nav-logo').fadeIn(200);
            } else {
              $('.nav-logo').fadeOut(200);
            }

          });

      },
      finalize: function() {
        // JavaScript to be fired on the home page, after the init JS
      }
    },
    // About us page, note the change from about-us to about_us.
    'about_us': {
      init: function() {
        // JavaScript to be fired on the about us page
      }
    }
  };

  // The routing fires all common scripts, followed by the page specific scripts.
  // Add additional events for more control over timing e.g. a finalize event
  var UTIL = {
    fire: function(func, funcname, args) {
      var fire;
      var namespace = Sage;
      funcname = (funcname === undefined) ? 'init' : funcname;
      fire = func !== '';
      fire = fire && namespace[func];
      fire = fire && typeof namespace[func][funcname] === 'function';

      if (fire) {
        namespace[func][funcname](args);
      }
    },
    loadEvents: function() {
      // Fire common init JS
      UTIL.fire('common');

      // Fire page-specific init JS, and then finalize JS
      $.each(document.body.className.replace(/-/g, '_').split(/\s+/), function(i, classnm) {
        UTIL.fire(classnm);
        UTIL.fire(classnm, 'finalize');
      });

      // Fire common finalize JS
      UTIL.fire('common', 'finalize');
    }
  };

  // Load Events
  $(document).ready(UTIL.loadEvents);

})(jQuery); // Fully reference jQuery after this point.