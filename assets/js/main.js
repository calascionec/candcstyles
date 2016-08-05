$('document').ready(function(){
    $('.footer-nav-title.accordion-link').on('click', function() {
        var nextElement = $(this).next();

        if ( nextElement.hasClass('open') ) {
            nextElement.removeClass('open');
            $(this).children('.icon-minus').attr('class', 'icon-plus');
        } else if ( !nextElement.hasClass('open') ) {
            nextElement.addClass('open');
            $(this).children('.icon-plus').attr('class', 'icon-minus');
        }

    });

    Rivers.breakpoint.enter('phone', function() {
        $('.featured-stones').slick({
            slidesToShow: 1,
            prevArrow: "<i class='icon-slider-arrow-left'></i>",
            nextArrow: "<i class='icon-slider-arrow-right'></i>",
        });
    }).leave('phone', function() {
        $('.featured-stones').slick('unslick');
    });

});
