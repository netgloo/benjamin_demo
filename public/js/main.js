Benjamin.on({
  
  /**
   * The page's DOM is ready.
   * Use this callback instead of JQuery's $( document ).ready().
   * This function is always executed before any other "page-specific" ready 
   * callback
   */
  'ready': function() {

    // Track the page with Google Analytics
    if (typeof ga !== 'undefined') {
      ga('set', { page: window.location.pathname, title: document.title });
      ga('send', 'pageview');
    }

    // Init sidebar toggle
    $('.sidebar-toggle').click(function() {
      $('body').toggleClass('sidebar-open');
      $('body').toggleClass('sidebar-collapse');
      return;
    });

    return;
  },


  /**
   * After a page is changed
   */
  'after': function(next) {
    return next();
  },


  /**
   * The page will be changed
   */
  'out': function(next) {
    return next();
  },
  

});

// ----------------------------------------------------------------------------
// Page /transitions
// ----------------------------------------------------------------------------

Benjamin.on('/transitions', {

  /**
   * After the page is changed
   */
  'after': function(next) {

    $(".content").velocity("transition.slideRightIn", {
      complete: function(elements) { 
        // Rememebr to call next() when the transition is finish!
        return next();
      }
    });

    return;
  },

});

// ----------------------------------------------------------------------------
// Page /transitions/one
// ----------------------------------------------------------------------------

Benjamin.on('/transitions/one', {

  /**
   * After the page is changed
   */
  'after': function(next) {

    $(".content").velocity("transition.bounceRightIn", {
      complete: function(elements) { 
        return next();
      }
    });

  },

});

// ----------------------------------------------------------------------------
// Page /transitions/two
// ----------------------------------------------------------------------------

Benjamin.on('/transitions/two', {

  /**
   * After the page is changed
   */
  'after': function(next) {

    $(".content .row").velocity("transition.expandIn", {
      complete: function(elements) { 
        return next();
      }
    });

  },

});


// ----------------------------------------------------------------------------
// Page /transitions/three
// ----------------------------------------------------------------------------

Benjamin.on('/transitions/three', {

  /**
   * After the page is changed
   */
  'after': function(next) {

    $(".content p.lead").velocity("transition.perspectiveUpIn", {
      complete: function(elements) { 
        return next();
      }
    });

  },


  /**
   * When this page is going to be replaced.
   */
  'out': function(next) {

    $(".content").velocity("transition.bounceOut", {
      complete: function(elements) { 
        return next();
      }
    });

  }

});
