$(document).ready(function() {
    /* Navigation scroll */
    $('a[href*="#"]:not([href="#"])').click(function() {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');

            if (target.length) {
                $('#body').animate({
                    scrollTop: target.get(0).offsetTop
                }, 700);
                return false;
            }
        }
    });

    // Hacky but at least it works on mobile...
    $('.js--section-about').waypoint(function(direction) {
        if (direction == "down") {
            $(".global-nav").show();
            $(".header-nav").hide();
        } else {
            $(".global-nav").hide();
            $(".header-nav").show();
        }
    }, {
        context: $('#body'),
        offset: '10%'
    });

    /* Image Onclick */

    function imgWindow() {
        window.open("image")
    }


    /* Animation on Scroll */
    $('.js--wp-1').waypoint(function(direction) {
        $('.js--wp-1').addClass('animated pulse');
        $('.js--main-nav>li>a').removeClass('active');

        if (direction == "down") {
            $('a[href="#about"]').addClass('active');
        }
    }, {
        context: $('#body'),
        offset: '20%'
    });

    $('.js--wp-2').waypoint(function(direction) {
        $('.js--wp-2').addClass('animated fadeIn');
        $('.js--main-nav>li>a').removeClass('active');

        if (direction == "down") {
            $('a[href="#projects"]').addClass('active');
        } else {
            $('a[href="#about"]').addClass('active');
        }
    }, {
        context: $('#body'),
        offset: '12%'
    });

    $('.js--wp-3').waypoint(function(direction) {
        $('.js--wp-3').addClass('animated bounceInUp');
        $('.js--main-nav>li>a').removeClass('active');

        if (direction == "down") {
            $('a[href="#contact"]').addClass('active');
        } else {
            $('a[href="#projects"]').addClass('active');
        }
    }, {
        context: $('#body'),
        offset: '30%'
    });

    /* Mobile Navigation */
    $('.js--nav-icon').click(function() {
        var nav = $('.js--main-nav');
        var icon = $('.js--nav-icon');

        nav.slideToggle(200);

        if (icon.hasClass('ion-navicon-round')) {
            icon.removeClass('ion-navicon-round');
            icon.addClass('ion-close-round');
        } else {
            icon.removeClass('ion-close-round');
            icon.addClass('ion-navicon-round');
        }
    });

    $(window).on('resize', function() {
        if (window.screen.availWidth >= 768)
            $('.js--main-nav').removeAttr('style');
    });
});

//Timeline..........;
document.addEventListener('scroll', timeline);

function timeline() {
    var threshold_position = window.scrollY + window.innerHeight;
    //compare scrolltop with scrolltop on each timeline event
    var timeline_events = document.querySelectorAll('.timeline li');
    for (i in timeline_events) {
        if (timeline_events[i].offsetTop < threshold_position) {
            timeline_events[i].classList.add('visible');
        } else {
            timeline_events[i].classList.remove('visible');
        }
    }
}
timeline();