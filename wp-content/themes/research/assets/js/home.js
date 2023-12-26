jQuery(document).ready(function () {
    var windowWidth = $(window).width();
    var window_width = $(window).width();
    var TM = TweenMax;
    var tl = new TimelineMax();
    $('body').prepend('<div class="Overlay"></div><div class="form-overlay"></div>');
    let vh = window.innerHeight * 0.01;

    $('#browchure').modal('show');

    // Then we set the value in the --vh custom property to the root of the document
    document.documentElement.style.setProperty('--vh', `${vh}px`);


    $(window).scroll(function () {
        if (jQuery(window).scrollTop() > 2) {
            jQuery('.Header').addClass('ShowIt').addClass('Bg');
        } else {
            jQuery(".Header").removeClass("ShowIt").removeClass('Bg');
        }
    })


    //scrollto section

    var hash = window.location.hash;
    if (hash) {
        $('.nav-pills a[href="' + hash + '"]').tab('show');
    }

    // Update the URL hash when a tab is shown
    $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
        window.location.hash = e.target.hash;
    });

    $('#ScrollTo').click(function () {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') &&
            location.hostname == this.hostname) {
            var $target = $(this.hash);
            $target = $target.length && $target ||
                $('[name=' + this.hash.slice(1) + ']');
            if ($target.length) {
                var targetOffset = $target.offset()?.top;
                $('html,body')
                    .animate({scrollTop: targetOffset}, 1000);
                return false;
            }
        }
    });


    //------- menu hamburger animation
    var menuLine = gsap.timeline({
        paused: true
    })
    menuLine.to('.hamburger span:nth-child(2)', {opacity: 0, ease: 'power1.out'})
    menuLine.to('.hamburger span:nth-child(3)', {
        duration: .4,
        rotation: -48,
        transformOrigin: '3px -1px',
        ease: 'power1.out',
        width:'28px'
    }, "-=.3");
    menuLine.to('.hamburger span:nth-child(1)', {
        duration: .4,
        rotation: 45,
        transformOrigin: '0px 4px',
        ease: 'power1.out',
        width:'29px'
    }, "-=.3");
    menuLine.reversed(true);

    $('.hamburger').click(function () {
        $(this).toggleClass('menuToggle')
        menuLine.reversed(!menuLine.reversed())
        if (menuLine.reversed()) {
            menuLine.reverse()
        } else {
            menuLine.play()
        }

        $('body').toggleClass('no-border no-msg no-scroll menuOpened')
        $('.MenuItems').fadeToggle(500);


    })




    // menu click on mobile
    if(1005 > window_width){
        $('.MenuItems__top__single').each(function () {
            $this = $(this);
            if ($this.find('ul').length > 0) {
                $this.addClass('hasChild')
            }
        });

        $('.hasChild').on('click', function () {
            var $this_ul = $(this).find('ul'),
                $this = $(this);
            $('.hasChild ul').not($this_ul).slideUp()
            $('.hasChild').not($this).removeClass('active')
            $this_ul.slideToggle()
            $this.toggleClass('active')
        });
    }

    $('.MenuItems ,.Header').bind('mousewheel DOMMouseScroll hover touchmove', function(e) {
        var scrollTo = null;

        if (e.type == 'mousewheel') {
            scrollTo = (e.originalEvent.wheelDelta * -1);
        }
        else if (e.type == 'DOMMouseScroll') {
            scrollTo = 40 * e.originalEvent.detail;
        }

        if (scrollTo) {
            e.preventDefault();
            $(this).scrollTop(scrollTo + $(this).scrollTop());
        }
    });






    //------ form validation
    $('form .dynamic_submit_btn').click(function () {
        $('.form-overlay').addClass('doit');
    });

    $(document).on('click', '.form-overlay.doit,.ok-class', function () {
        $('.form-overlay.doit, .form-message-container').hide();
    });

    $('.btn , button').click(function () {
        $('.form-overlay.doit, .form-message-container').removeAttr('style');
    });

    $('.dynamic_submit_btn').on('click', function () {
        setTimeout(function () {
            $('.form-overlay.doit').hide();
        }, 15000);
    });
    //------ form validation


    if ($(".slider-content-init").length > 0) {
        $(".slider-content-init").slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            fade: true,
            draggable: true,
            pauseOnFocus: false,
            autoplay: false,
            pauseOnHover: false,
            arrows: true,
            prevArrow: $(".left-btn"),
            nextArrow: $(".right-btn"),
            asNavFor: ".slider-img-init",
        });
    }
    if ($(".slider-img-init").length > 0) {
        $(".slider-img-init").slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            asNavFor: ".slider-content-init",
            draggable: true,
            focusOnSelect: true,
            arrows: false,
            fade:true,
            pauseOnFocus: false,
            pauseOnHover: false,
        });
    }


    if ($(".key-person__slider-init").length > 0) {
        $(".key-person__slider-init").slick({
            slidesToShow: 3,
            slidesToScroll: 2,
            draggable: true,
            focusOnSelect: true,
            arrows: true,
            fade:false,
            pauseOnFocus: false,
            pauseOnHover: false,
            prevArrow: $(".key-left"),
            nextArrow: $(".key-right"),
        });
    }

    if ($(".mobile-key-person").length > 0) {
        $(".mobile-key-person").slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            draggable: true,
            focusOnSelect: true,
            arrows: true,
            fade:false,
            pauseOnFocus: false,
            pauseOnHover: false,
            prevArrow: $(".key-left-mobile"),
            nextArrow: $(".key-right-mobile"),
        });
    }





});//document.ready


//------------ Device Image
function deviceImage() {
    // window min width 1401 -- large screen
    var window_width = $(window).width();
    if (1400 < window_width) {
        $('.modify-bg').each(function () {
            var large = $(this).attr('data-image-large');
            $(this).css('background-image', "url(" + large + ")");
        });
    }
    // window max-width 1400 -- standard screen
    if (1400 >= window_width && 992 <= window_width) {
        $('.modify-bg').each(function () {
            var standard = $(this).attr('data-image-standard');
            $(this).css('background-image', "url(" + standard + ")");
        });
    }
    // window max-width 991 -- mobile device
    if (991 >= window_width) {
        $('.modify-bg').each(function () {
            var small = $(this).attr('data-image-small');
            $(this).css('background-image', "url(" + small + ")");
        });
    }
}

deviceImage();


