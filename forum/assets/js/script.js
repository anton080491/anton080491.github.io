$(document).ready(function(){

    $('.main-banner_border').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        prevArrow: '<button type="button" class="slick-prev"><img src="http://forum/wp-content/themes/forum/assets/icons/arrow-left.svg"></button>',
        nextArrow: '<button type="button" class="slick-next"><img src="http://forum/wp-content/themes/forum/assets/icons/arrow-right.svg"></button>',
        autoplay: true,
        autoplaySpeed: 2000
    });

    $('.our-clients_wrapper').slick({
        infinite: true,
        slidesToShow: 6,
        slidesToScroll: 1,
        prevArrow: '<button type="button" class="slick-prev"><img src="http://forum/wp-content/themes/forum/assets/icons/arrow-left_reviews.svg"></button>',
        nextArrow: '<button type="button" class="slick-next"><img src="http://forum/wp-content/themes/forum/assets/icons/arrow-right_reviews.svg"></button>',
        autoplay: true,
        autoplaySpeed: 2000,
        responsive: [
            {
                breakpoint: 1300,
                settings: {
                    slidesToShow: 5
                }
            },
            {
                breakpoint: 1050,
                settings: {
                    slidesToShow: 4
                }
            },
            {
                breakpoint: 900,
                settings: {
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 700,
                settings: {
                    slidesToShow: 2
                }
            }
        ]
    });

    $('.customer-reviews_wrapper').slick({
        infinite: true,
        slidesToShow: 2,
        slidesToScroll: 1,
        prevArrow: '<button type="button" class="slick-prev"><img src="http://forum/wp-content/themes/forum/assets/icons/arrow-left_reviews.svg"></button>',
        nextArrow: '<button type="button" class="slick-next"><img src="http://forum/wp-content/themes/forum/assets/icons/arrow-right_reviews.svg"></button>',
        // autoplay: true,
        // autoplaySpeed: 2000,
        responsive: [
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 1
                }
            }
        ]
    });

    $(window).scroll(function() {
        if ($(this).scrollTop() > 800) {
            $('.pageup').css('display','block');
        } else {
            $('.pageup').css('display','none');
        };
    });


    $('.conference-selection img').click(function(){
        $('.conference-selection__list').toggleClass('conference-selection__list_active'); 
    });

    $('.button_SUBSCRIBE').click(function(){
        $('.overflow').css('display','block'); 
    });

    $('.subscribe__close').click(function(){
        $('.overflow').hide(); 
    });

    $('.menu-gamburger').click(function(){
        $('.menu-gamburger').toggleClass('menu-gamburger__active'); 
        $('.menu-adaptiv').toggleClass('menu-adaptiv__active'); 
    });


    $(window).scroll(function() {
        if ($(this).scrollTop() > 100) {
            $('.pageup').fadeIn();
        } else {
            $('.pageup').fadeOut();
        };
    });



    $("a[href^='#']").click(function(){
        var _href = $(this).attr("href");
        $("html, body").animate({scrollTop: $(_href).offset().top+"px"});
        return false;
    });
    

    
    







});