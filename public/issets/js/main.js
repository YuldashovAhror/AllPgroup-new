$(window).on('load', () => {

    let rootFont = parseInt($(':root').css('font-size'))

    $('.preloader').delay(500).fadeOut(800)


    
    //______________HEADER_______________

    $('.header-mobile').click(function() {
        $(this).toggleClass('active')
        $('.mobile-menu').slideToggle(500)
    })


    $('.header-submenu').mouseenter(function() {
        $(this).find('.submenu').fadeIn(400)
    })

    $('.submenu').mouseleave(function() {
        $(this).fadeOut(400)
    })

    $('.submenu-open').click(function(e) {
        e.preventDefault()
        $(this).toggleClass('active')
        $(this).parents('li').find('.submenu').slideToggle(400)
    })
    

    //_______________MAIN________________


    $('.main-carousel').owlCarousel({
        animateIn: 'fadeInOwl',
        animateOut: 'fadeOutOwl',
        smartSpeed: 1000,
        dots: true,
        nav: false,
        items: 1,
        mouseDrag: false,
        loop: true,
        autoplay: true,
        autoplayTimeout: 5000,
    })

    $('.main__btn').hover(function() {
        $(this).parent().addClass('hover')
    }, function() {
        $(this).parent().removeClass('hover')
    })


    //_________________NUMBERS_________________

    let showCounter = true;
    $(window).on("scroll load resize", function () {
        if (!showCounter) return false; 
        let w_top = $(window).scrollTop()
        if (w_top >= $(window).height()/5) {
            
            $(".numbers-item__square span").each(function() {
            $(this).prop("col",0).animate({
                    counter:$(this).text()},{
                    duration: 3000,
                    easing: "swing",
                    step:function(now){
                        $(this).text(Math.ceil(now));
                    }
                });
            });
            showCounter = false;
        }

    })


    //_______________SERVICE________________


    $('.services-carousel').owlCarousel({
        animateIn: 'fadeInOwl',
        animateOut: 'fadeOutOwl',
        smartSpeed: 1000,
        dots: false,
        nav: false,
        items: 1,
        mouseDrag: false,
        loop: true,
        margin: 10,
    })


    $('.services-arrows .arrow-left').click(() => {
        $('.services-carousel').trigger('prev.owl.carousel', [700]);
    })

    $('.services-arrows .arrow-right').click(() => {
        $('.services-carousel').trigger('next.owl.carousel', [700]);
    })



    let sectionIds = $('.services-side__list li a');

    $(document).scroll(function(){
        sectionIds.each(function(){ 

            let container = $(this).attr('href')
            let containerOffset = $(container).offset().top
            let containerHeight = $(container).outerHeight()
            let containerBottom = containerOffset + containerHeight;
            let scrollPosition = $(document).scrollTop();

            if(scrollPosition < containerBottom - 6*rootFont && scrollPosition >= containerOffset - 6*rootFont){
                sectionIds.removeClass('current')
                $(this).addClass('current')
            } 


        });
    })

    $('.services-side__list li a').click(function(e) {
        e.preventDefault()
        let container = $(this).attr('href')
        let containerOffset = $(container).offset().top
        window.scrollTo({top: containerOffset - 6*rootFont, behavior: 'smooth'})
    })


    //_______________AREA________________


    $('.area-carousel').owlCarousel({
        smartSpeed: 1000,
        dots: false,
        nav: false,
        items: 1,
        margin: rootFont*2,
        mouseDrag: false,
        loop: true,
        responsive: {
            0: {
                items: 1,
                stagePadding: rootFont*2.5,
                margin: rootFont,
            },

            500: {
                items: 2,
            },
    
            992: {
                items: 3,
            },
        }
    })


    $('.area-arrows .arrow-left').click(() => {
        $('.area-carousel').trigger('prev.owl.carousel', [700]);
    })

    $('.area-arrows .arrow-right').click(() => {
        $('.area-carousel').trigger('next.owl.carousel', [700]);
    })


    if($(window).width() < 768) {
        $('.area-carousel').owlCarousel('destroy') 
        $('.area-carousel').removeClass('owl-carousel')
    }

    
    //_______________PROJECTS________________


    $('.projects-carousel').owlCarousel({
        smartSpeed: 1000,
        dots: false,
        nav: false,
        items: 1,
        margin: rootFont*2,
        mouseDrag: false,
        loop: true,
        responsive: {
            0: {
                items: 1,
                stagePadding: rootFont*2.5,
                margin: rootFont,
            },

            500: {
                items: 2,
            },
        }
    })


    $('.projects-arrows .arrow-left').click(() => {
        $('.projects-carousel').trigger('prev.owl.carousel', [700]);
    })

    $('.projects-arrows .arrow-right').click(() => {
        $('.projects-carousel').trigger('next.owl.carousel', [700]);
    })



    
    //______________ABOUT________________


    $('.about-provider__carousel').owlCarousel({
        smartSpeed: 1000,
        dots: false,
        nav: false,
        items: 1,
        margin: rootFont*2,
        mouseDrag: false,
        loop: true,
        responsive: {
            0: {
                items: 1,
                stagePadding: rootFont*2.5,
                margin: rootFont,
            },

            500: {
                items: 2,
            },
    
            992: {
                items: 3,
            },

            1200: {
                items: 4,
            },
        }
    })


    $('.about-arrows .arrow-left').click(() => {
        $('.about-provider__carousel').trigger('prev.owl.carousel', [700]);
    })

    $('.about-arrows .arrow-right').click(() => {
        $('.about-provider__carousel').trigger('next.owl.carousel', [700]);
    })




    // __________NEWS__________


    $('.news-choose li').click(function() {
        let index = $(this).index()
        $('.news-choose li').removeClass('current')
        $(this).addClass('current')
        $('.news-tab').removeClass('current')
        $('.news-tab').eq(index).addClass('current')
    })


    //_____________MAP________________

    let map = $('#map')[0]

    if(map) {
        ymaps.ready(init)
    }
    function init() {
        var myMap = new ymaps.Map("map", {
            center: [41.325310, 69.320423],
            zoom: 14,
        }, {
            searchControlProvider: 'yandex#search'
        },
    );
    myMap.geoObjects
    .add(new ymaps.Placemark([41.325310, 69.320423], {
    }, {
        iconLayout: 'default#image',
        iconImageHref: 'issets/img/marker.svg',
        iconImageSize: [34, 41],
    }))

        myMap.behaviors.disable('scrollZoom')


            
        
    }

    // __________GOTOP__________

    $('.footer-arrow').click((e) => {
        e.preventDefault()
        window.scrollTo({top: 0, behavior: 'smooth'})
    })

    //______________FORMS________________

    $('.customSelect').customSelect()

    $('.contact-head li').click(function() {
        let index = $(this).index()
        $('.contact-head li').removeClass('current')
        $(this).addClass('current')
        $('.contact-tab').removeClass('current')
        $('.contact-tab').eq(index).addClass('current')
    })
    
    $('.form_name').on('keydown', function(e) {
        const key = e.key;
        if (!/^[a-zA-Zа-яА-Я\s]*$/.test(key)) {
            e.preventDefault();
        }
    })

    //_____________INPUTMASK__________


    $('.form_tel').inputmask("+\\9\\98 99 999 99 99")

    $('.contact-done').click(function() {
        $(this).fadeOut(600)
    })


    //_____________FEEDBACK_________________


    $('.services-main__content button').click(e => {
        e.preventDefault()
        $('.feedback').fadeIn(600); 
    })

    $('.feedback-open').click(e => {
        e.preventDefault()
        $('.feedback').fadeIn(600); 
    })


    $('.feedback-done .feedback-form__btn').click(e => {
        e.preventDefault()
        $('.feedback').fadeOut(600); 
    })



    $('.feedback').click(e => {
        let div = $(".feedback-content");
        if (!div.is(e.target) 
            && div.has(e.target).length === 0) { 
            $('.feedback').fadeOut(600); 
        }
    })

    
    //__________WOW____________


    new WOW({
        offset: 50,
        mobile: false, 
    }).init();

})