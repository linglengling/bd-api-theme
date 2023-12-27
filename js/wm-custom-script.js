(function($){
    $(document).ready(function(){

        $('.anim-text-flow').html(function(i, html) {
          var chars = $.trim(html).split("");

          return '<span>' + chars.join('</span><span>') + '</span>';
      });
        
        if ($('.wm-competition').length){
            $('.wm-competition').slick({
                dots: false,
                infinite: false,
                speed: 500,
                swipe: true,
                centerMode: false,
                variableWidth: true,
                swipeToSlide: true,
                arrows: false
            });
        }

        if ($('.owl-carousel').length){
            $('.owl-carousel').owlCarousel({
                loop:true,
                margin:10,
                nav:false,
                dots:false,
                // autoplay:true,
                // autoplayTimeout:20000,
                responsiveClass:true,
                responsive:{
                    0:{
                        items:1,
                        nav:true
                    },
                    600:{
                        items:2,
                        nav:false
                    },
                    1000:{
                        items:2,
                        nav:true,
                        loop:false
                    }
                }
            })
        }
    });
})(jQuery);