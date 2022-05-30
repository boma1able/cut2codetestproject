(function ($) {
    $(document).ready(function() {
        
        // menu open
        $('.hamburger').on('click', function(){
            $(this).toggleClass('is-active');
            $('.header-inner nav').toggleClass('open');
            // $('.header-inner nav').toggleClass('close');
        });

        $('.header nav ul li a').on('click', function(){
            $('.hamburger').removeClass('is-active');
            $('.header-inner nav').removeClass('open');
            // $('.header-inner nav').toggleClass('close');
        });

        $('.hamburger').on('click', function(){
            $('.header-inner nav').addClass('close');
            $('.header-inner nav.open').removeClass('close');
        });

        //smooth scroll
        $('a[href^="#"]').on('click',function (e) {
            var target = this.hash,
                $target = $(target);
          
            $('html, body').stop().animate({
              'scrollTop': $target.offset().top - 80
            }, 900, 'swing', function () {
              window.location.hash = target;
            });
          });


        // FAQ accordion
        jQuery(document).ready(function($) {
            $('.acc__card:first-child .acc__panel').addClass('active');
            $('.acc__card:first-child .acc__title').addClass('active');

            $('.acc__title').on('click', function() {

                var dropDown = $(this).closest('.acc__card').find('.acc__panel');
                $(this).closest('.acc').find('.acc__panel').not(dropDown).slideUp();


                if ($(this).hasClass('active')) {
                    $('.acc__title').removeClass('active');
                } else {
                    $(this).closest('.acc').find('.acc__title.active').removeClass('active');
                    $(this).addClass('active');
                }

                dropDown.stop(false, true).slideToggle();
            });
        }, jQuery)


        // Counter
        var a = 0;
        $(window).scroll(function() {

        var oTop = $('.counter-wrap').offset().top - window.innerHeight;
        if (a == 0 && $(window).scrollTop() > oTop) {
            $('.counter-wrap .count').each(function() {
                $(this).prop('Counter', 0).animate({
                  Counter: $(this).data('count')
                }, {
                  duration: 1000,
                  easing: 'swing',
                  step: function(now) {
                    $(this).text(this.Counter.toFixed($(this).data('count') % 1 === 0 ? 0 : 1));
                  }
                });
              });
            a = 1;
        }

        });

    })

})(jQuery);


(function($){
  (function fadeNext(collection){
    collection.eq(0).fadeIn(1000, function(){
        (collection=collection.slice(1)).length && fadeNext(collection)
    });
  })($('.header nav.open ul li'))
})(jQuery)