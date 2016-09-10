$('document').ready(function(){
    // $('.footer-nav-title.accordion-link').on('click', function() {
    //     var nextElement = $(this).next();
    //
    //     if ( nextElement.hasClass('open') ) {
    //         nextElement.removeClass('open');
    //         $(this).children('.icon-minus').attr('class', 'icon-plus');
    //     } else if ( !nextElement.hasClass('open') ) {
    //         nextElement.addClass('open');
    //         $(this).children('.icon-plus').attr('class', 'icon-minus');
    //     }
    //
    // });
    //
    // Rivers.breakpoint.enter('phone', function() {
    //     $('.featured-stones').slick({
    //         slidesToShow: 1,
    //         prevArrow: "<span class='previous-arrow'></span>",
    //         nextArrow: "<span class='next-arrow'></span>",
    //     });
    // }).leave('phone', function() {
    //     $('.featured-stones').slick('unslick');
    // });

    //Smooth Scrolling function for anchors
    $(function() {
      $('a[href*="#"]:not([href="#"])').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
          var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
          if (target.length) {
            $('html, body').animate({
              scrollTop: target.offset().top
            }, 1000);
            return false;
          }
        }
      });
    });

    var panel = $('.panel'),
        nav = $('#bullet-nav'),
        nav_height = nav.outerHeight();

    $(window).on('scroll', function () {
      var cur_pos = $(this).scrollTop();
      var half_window_height = $(this).outerHeight() / 2;

      panel.each(function() {
        var top = $(this).offset().top - half_window_height,
            bottom = top + $(this).outerHeight();

        if (cur_pos >= top && cur_pos <= bottom) {
          nav.find('a').removeClass('active');
          panel.removeClass('active');

          $(this).addClass('active');
          nav.find('a[href="#'+$(this).attr('id')+'"]').addClass('active');
        }
      });
    });

});
