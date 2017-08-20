$(document).ready(function () {
    // Activate isotope in container

    $(".portfolio-itms").isotope({
        itemSelector: '.single-project',
        layoutMode: 'fitRows',
    });

	 $( "#datepicker" ).datepicker();
    // Add isotope click function

    $('.portfolio_filter li').click(function () {
        $(".portfolio_filter li").removeClass("active");
        $(this).addClass("active");

        var selector = $(this).attr('data-filter');
        $(".portfolio-itms").isotope({
            filter: selector,
            animationOptions: {
                duration: 750,
                easing: 'linear',
                queue: false,
            }
        });
        return false;
    });
 
 
    //////////////////////
    //owlCarousel
    ///////////////////

    $(".testimonial").owlCarousel({
        autoPlay: 3000,
        slideSpeed: 300,
        paginationSpeed: 400,
        singleItem: true

        // "singleItem:true" is a shortcut for:
        // items : 1, 
        // itemsDesktop : false,
        // itemsDesktopSmall : false,
        // itemsTablet: false,
        // itemsMobile : false

    });
    $(window).scroll(function () {
        if ($(this).scrollTop() > 200) {
            $('.scrollup').fadeIn();
        } else {
            $('.scrollup').fadeOut();
        }
    });

    $('.scrollup').click(function () {
        $("html, body").animate({
            scrollTop: 0
        }, 600);
        return false;
    });

    new WOW().init();

    smoothScroll.init({
        speed: 2000,
    });

    $('body').srollspy({
        target: '.navbar-colllase',
        offset: 55
    });



    $(' .mainmenuul.nav .navbar-nav li a').click(function () {
        $('.navbar-collapse').removeClass('in');
    });


///calender 

   


});
