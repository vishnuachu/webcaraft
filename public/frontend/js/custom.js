(function ($) {
    "use strict";
    var Qabuss = {
        initialised: false,
        version: 1.0,
        Solar: false,
        init: function () {
            if (!this.initialised) {
                this.initialised = true;
            } else {
                return;
            }
            // Functions Calling

            this.loader();
            this.menu();
            this.menu_toggle();
            this.related_slider();
            this.star_rating();
            this.set_bg();
            this.set_bg_overlay();
            this.shop_slider1();
            this.shop_slider2();
            this.price_slider();
            this.counter();
            // this.quantity();
        },
        // preloader
        loader: function () {
            jQuery(window).on("load", function () {
                jQuery(".qb-preloader").fadeOut(), jQuery(".loader").delay(200).fadeOut("slow")
            });
        },
        // mobile menu
        menu: function () {
            if ($('.qb-toggle-nav').length > 0) {
                $(".qb-toggle-nav").on('click', function (e) {
                    event.stopPropagation();
                    $(".qb-nav-bar").toggleClass("qb-open-menu");
                })
                $("body").on('click', function () {
                    $(".qb-nav-bar").removeClass("qb-open-menu");
                })
                $(".qb-menu").on('click', function () {
                    event.stopPropagation();
                })
            };
        },
        menu_toggle: function () {
            // menu two
            $(".qb-menu-tow-child").on('click', function () {
                $(this).find(".qb-submenu-two").slideToggle();
            });
            // menu two stop propagation
            $(".qb-submenu-two").on('click', function () {
                event.stopPropagation();
            });
            // toggle two
            $(".qb-toggle-nav2").on('click', function (e) {
                event.stopPropagation();
                $(".qb-header-two").toggleClass("qb-open-menu");
            });
            // toggle
            $(".qb-menu-child").on('click', function (e) {
                event.stopPropagation();
                $(this).find(".qb-submenu").slideToggle();
            });
        },
        // related sider
        related_slider: function () {
            var swiper = new Swiper('.qb-related-product .swiper-container', {
                slidesPerView: 3,
                loop: true,
                spaceBetween: 10,
                speed: 1500,
                autoplay: true,
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                breakpoints: {
                    575: {
                        slidesPerView: 1,
                        spaceBetween: 0,
                    },
                    767: {
                        slidesPerView: 2,
                        spaceBetween: 0,
                    },
                    992: {
                        slidesPerView: 2,
                        spaceBetween: 0,
                    },
                }
            });
        },
        star_rating: function () {
            $('.starrr').starrr({
                change: function (e, value) {
                    $(this).next('input').attr("value", value);
                }
            })
        },
        // set background as cover img
        set_bg_overlay: function () {
            var list = document.getElementsByClassName('set-bg-overlay');
            for (var i = 0; i < list.length; i++) {
                var src = list[i].getAttribute('data-set-bg');
                list[i].style.backgroundImage = "linear-gradient(0deg,rgb(0 0 0 / 82%) 0%,rgba(0, 0, 0, 0.1) 100%,rgba(5, 25, 23, 0.2049194677871149) 100%),url('" + src + "')";
            }
        },
        set_bg: function () {
            var list = document.getElementsByClassName('set-bg');
            for (var i = 0; i < list.length; i++) {
                var src = list[i].getAttribute('data-set-bg');
                list[i].style.backgroundImage = "url('" + src + "')";
            }
        },
        // Shop Banner slider
        shop_slider1: function () {
            var swiper = new Swiper('.shop-banner-1 .swiper-container', {
                infinite: true,
                autoplay: true,
                fade: true,
                speed: 500,
                autoplaySpeed: 5000,
                slidesToShow: 1,
                pagination: {
                    el: '.swiper-pagination',
                    type: 'bullets',
                    clickable: true
                },
            });
        },
        shop_slider2: function () {
            var swiper = new Swiper('.shop-slide-half-2 .swiper-container', {
                infinite: true,
                autoplay: true,
                fade: true,
                speed: 1000,
                autoplaySpeed: 5000,
                slidesToShow: 1
            });
        },
        price_slider: function () {
            $(".slider-range").slider({
                range: true,
                min: 100,
                max: 5000,
                values: [100, 5000],
                slide: function (event, ui) {
                    $(".amount").val(ui.values[0]);
                    $(".amount2").val(ui.values[1]);
                }
            });
            $(".amount").change(function () {
                $(".slider-range").slider('values', 0, $(this).val());
            });
            $(".amount2").change(function () {
                $(".slider-range").slider('values', 1, $(this).val());
            });
        },
        // counter start
        counter: function () {
            if ($('.qb-counter-main').length > 0) {
                var a = 0;
                $(window).scroll(function () {

                    var oTop = $('#counter').offset().top - window.innerHeight;
                    if (a == 0 && $(window).scrollTop() > oTop) {
                        $('.counter-value').each(function () {
                            var $this = $(this),
                                countTo = $this.attr('data-count');
                            $({
                                countNum: $this.text()
                            }).animate({
                                countNum: countTo
                            }, {
                                duration: 5000,
                                easing: 'swing',
                                step: function () {
                                    $this.text(Math.floor(this.countNum));
                                },
                                complete: function () {
                                    $this.text(this.countNum);
                                }
                            });
                        });
                        a = 1;
                    }
                });
            };
        },
        // quantity
        quantity: function () {
            $('.qb-add').click(function () {
                if ($(this).prev().val() < 2) {
                    $(this).prev().val(+$(this).prev().val() + 1);
                }
            });
            $('.qb-sub').click(function () {
                if ($(this).next().val() > 1) {
                    if ($(this).next().val() > 1) $(this).next().val(+$(this).next().val() - 1);
                }
            });
        },
    };
    Qabuss.init();

})(jQuery);

/* ----- MagnificPopup ----- */
if (($(".popup-img").length > 0) || ($(".popup-iframe").length > 0) || ($(".popup-img-single").length > 0)) {
    $(".popup-img").magnificPopup({
        type: "image",
        gallery: {
            enabled: true,
        }
    });
    $(".popup-img-single").magnificPopup({
        type: "image",
        gallery: {
            enabled: false,
        }
    });
    $('.popup-iframe').magnificPopup({
        disableOn: 700,
        type: 'iframe',
        preloader: false,
        fixedContentPos: false
    });
    $('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
        disableOn: 700,
        type: 'iframe',
        mainClass: 'mfp-fade',
        removalDelay: 160,
        preloader: false,
        fixedContentPos: false
    });
};
/* ----- MagnificPopup ----- */

/* ----- Scroll on desktop ----- */
const slider = document.querySelector(".scroll");
if (slider) {
    let isDown = false;
    let startX;
    let scrollLeft;

    slider.addEventListener("mousedown", e => {
        isDown = true;
        slider.classList.add("active");
        startX = e.pageX - slider.offsetLeft;
        scrollLeft = slider.scrollLeft;
    });
    slider.addEventListener("mouseleave", () => {
        isDown = false;
        slider.classList.remove("active");
    });
    slider.addEventListener("mouseup", () => {
        isDown = false;
        slider.classList.remove("active");
    });
    slider.addEventListener("mousemove", e => {
        if (!isDown) return;
        e.preventDefault();
        const x = e.pageX - slider.offsetLeft;
        const walk = x - startX;
        slider.scrollLeft = scrollLeft - walk;
    });
}
/* ----- Scroll on desktop ----- */

/*  Single-product-Owl-carousel  */
if ($('.single_product_slider').length) {
    $('.single_product_slider').owlCarousel({
        loop: true,
        margin: 30,
        dots: false,
        navigation: false,
        rtl: false,
        autoplayHoverPause: false,
        thumbs: true,
        thumbImage: true,
        thumbContainerClass: 'owl-thumbs',
        thumbsPrerendered: true,
        thumbItemClass: 'owl-thumb-item',
        singleItem: true,
        smartSpeed: 1200,
        onInitialize: function (event) {
            if ($('.owl-carousel .item').length <= 1) {
                this.settings.loop = false;
            }
        },
        responsive: {
            0: {
                items: 1,
                center: false
            },
            480: {
                items: 1,
                center: false
            },
            520: {
                items: 1,
                center: false
            },
            600: {
                items: 1,
                center: false
            },
            768: {
                items: 1
            },
            992: {
                items: 1
            },
            1200: {
                items: 1
            },
            1366: {
                items: 1
            },
            1400: {
                items: 1
            }
        }
    })
}
/*  Single-product-Owl-carousel  */

/*  Sidebar toggler menu  */
const sidebar = document.querySelectorAll(".qb-sidebar-title i");
$(sidebar).click(function () {
    const menu_Side = $(this).parent().next(".side-menu-item")
    menu_Side.slideToggle(320, 'easeOutQuart');
    if ($(menu_Side.length)) {
    }
});

/*  Sidebar toggler menu  */











