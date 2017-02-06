(function (window, document) {
  var site = {
    init: function() {
      var self = this;

      /*Carousel init */
      var wallopEl = document.querySelector('.Wallop');
      if( wallopEl ) {
          var slider = new Wallop(wallopEl);
          setInterval(function() {
            slider.next();
          }, 5000);
      }
    }
  };


  window.onload = function() {
    site.init();
    window.site = site;
  };
})(window, document);
