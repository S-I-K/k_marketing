/* 한국마케팅진흥원 테마_2 */
$(()=>{
    /* =============================
    SWIPER
    ============================= */
    /* education swiper */
    var swiper = new Swiper("#main-education-swiper", {
        autoHeight: true,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
    /* 상단 메인 슬라이드 */
    var swiper = new Swiper("#main-slider", {
        autoHeight: true,
        effect: 'fade',
        speed: 2000,
        touchRatio: 0,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        on: {
            activeIndexChange: function(){
                /* 상단 메인 stroke text animation */
                const targets = gsap.utils.toArray(".split");
                targets.forEach((target) => {
                    let SplitClient = new SplitType(target, { type: "lines, words, chars" });
                    let lines = SplitClient.lines;
                    let words = SplitClient.words;
                    let chars = SplitClient.chars;
                
                    gsap.from(chars, {
                        yPercent: 100,
                        opacity: 0,
                        duration: 1,
                        ease: "circ.out",
                        stagger: {
                            amount: 1,
                            from: "random"
                        },
                    });
                });
            }
        },
    });
    /* service-slider */
    var swiper = new Swiper("#service-slider", {
        loop: true,
        centeredSlides: true,
        slidesPerView: 'auto',
        autoHeight: 'auto',
        spaceBetween: 16,
        touchRatio: 0,
        speed: 2000,
        allowTouchMove: false,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        autoplay: {
            delay: 2000,
        },
        breakpoints: {
            450: {
                loop: true,
                centeredSlides: true,
                slidesPerView: 'auto',
                autoHeight: 'auto',
                spaceBetween: 24,
                touchRatio: 0,
                speed: 2000,
                allowTouchMove: false,
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
                autoplay: {
                    delay: 2000,
                },
                
            }
        }
    });
    /* #business-content-slider */
    var swiper = new Swiper("#business-content-slider", {
        centeredSlides: true,
        slidesPerView: 'auto',
        spaceBetween: 0,
        loop: true,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });




    /* =============================
    GSAP
    ============================= */
    /* 상단 메인 stroke text animation */
    const targets = gsap.utils.toArray(".split");
    targets.forEach((target) => {
        let SplitClient = new SplitType(target, { type: "lines, words, chars" });
        let lines = SplitClient.lines;
        let words = SplitClient.words;
        let chars = SplitClient.chars;
    
        gsap.from(chars, {
            yPercent: 100,
            opacity: 0,
            duration: 1,
            ease: "circ.out",
            stagger: {
                amount: 1,
                from: "random"
            },
        });
    });
    /* gsap */
    gsap.registerPlugin(ScrollTrigger);
    $business_contents = gsap.utils.toArray('.business-content');
    $business_contents.forEach(content => {
        gsap.to(content, {
            'transform': 'translateY(0px)',
            'opacity': 1,
            'background-size': '100% 100%',
            'duration': 2,
            'ease': 'ease',
            scrollTrigger: {
                markers: false,
                trigger: content,
                start: '-20% 100%',
                end: 'top 70%',
                scrub: 2,
                // toggleClass: 'active',
            }
        })
    });

    // 04 split-type 사용하기
    const closing = gsap.utils.toArray(".split");
        
    closing.forEach(target => {
        let SplitClient = new SplitType(target, {type: "lines, words, chars"});
        let lines = SplitClient.lines;
        let words = SplitClient.words;
        let chars = SplitClient.chars;

        gsap.from(chars, {
            yPercent: 100,
            autoAlpha: 0,
            duration: 1,
            ease: "circ.out",
            stagger: {
                amount: 1,
                from : "random"
            },
            scrollTrigger: {
                trigger: target,
                start: "top 80%",
                end: "120% 70%",
                markers: false,
                scrub: 2,
            }
        });
    });

    /* scrollbar */
    jQuery('.scrollbar-inner').scrollbar();






    /* --------------------------------------------------
    * back to top
    * --------------------------------------------------*/
    if ($('#back-to-top').length) {
	    var scrollTrigger = 500, // px
            backToTop = function () {
                var scrollTop = $(window).scrollTop();
                if (scrollTop > scrollTrigger) {
                    $('#back-to-top').addClass('show');
                } else {
                    $('#back-to-top').removeClass('show');
                }
            };
        backToTop();
        $(window).on('scroll', function () {
            backToTop();
        });
        $('#back-to-top').on('click', function (e) {
            e.preventDefault();
            $('html,body').animate({
                scrollTop: 0
            }, 700);
        });	
	}






        /* =============================
    JQ
    ============================= */
    /* 전체: .business */
    /* $('.business .tab-link').click(function(e) {
        const $tab_idx = $(this).index();
        $(this).closest('section').next().find('.business-slider-box').removeClass('current');
        $(this).closest('section').next().find('.business-slider-box').eq($tab_idx).addClass('current');
    }); */

    /* 한정: #business04 */
    $('.business#business04 .tab-link').click(function(e) {
        const $tab_idx = $(this).index();
        $(this).closest('section').next().find('.business-slider-box').removeClass('current');
        $(this).closest('section').next().find('.business-slider-box').eq($tab_idx).addClass('current');
    });


    $(".scroll").on("click", function (event) {
        event.preventDefault();
        $("html,body").animate({
            scrollTop: $(this.hash).offset().top - 60}, 1200);
    });
    $(window).on('scroll', function () {
        if ($(this).scrollTop() > 90) { // Set position from top to add class
            $('header').addClass('fixed');
        }
        else {
            $('header').removeClass('fixed');
        }
    });


    $('.hamburger-box').click((e)=>{
        e.preventDefault();
        if(!$('.hamburger-wrap').hasClass('active')) {
            $('.hamburger-wrap').addClass('active');
            $('.hamburger-box').addClass('active');
        }else {
            $('.hamburger-wrap').removeClass('active');
            $('.hamburger-box').removeClass('active');
        }
    });
    $('.hamburger-wrap ul li a').click((e)=>{
        e.preventDefault();
        $('.hamburger-wrap').removeClass('active');
        $('.hamburger-box').removeClass('active');
    });
});
