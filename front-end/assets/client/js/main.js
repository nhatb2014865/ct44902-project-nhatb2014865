window.addEventListener('scroll', scrolled);

function scrolled(event) {
    const navbar = $(".navbar");
    if (navbar.length && window.pageYOffset > 50) {
        navbar.addClass("opaque");
    }
    else {
        navbar.removeClass("opaque");
    }

    const back_To_Top_Btn = $(".back-to-top-btn");
    if (back_To_Top_Btn.length && window.pageYOffset > 300) {
        back_To_Top_Btn.addClass("show");
    }
    else {
        back_To_Top_Btn.removeClass("show");
    }

    const tooltip_Back_To_Top = $(".tooltip-back-to-top");
    if (tooltip_Back_To_Top.length) {
        tooltip_Back_To_Top.remove();
    }
}

const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]');
const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl));

const navbar = $(".navbar");
if (navbar.length) {
    $(".navbar .search-form .search-input-container .clear-btn").click(function () {
        $(this).attr("style", "display : none !important");
    });

    document.getElementsByClassName("search-input")[0].oninput = function () {
        if (document.getElementsByClassName("search-input")[0].value != "")
            $(".clear-btn").removeAttr("style");
        else
            $(".clear-btn").attr("style", "display : none !important");
    };

    $(".navbar .link-collapse").mouseenter(function () {
        $(this).find(".dropdown-menu").addClass("show");
        $(this).find(".dropdown-toggle").addClass("open");
        $(this).mouseleave(function () {
            $(this).find(".dropdown-menu").removeClass("show");
            $(this).find(".dropdown-toggle").removeClass("open");
        });
    });

    $(".navbar .sub-nav .sub-nav-slider").owlCarousel({
        loop: false,
        nav: false,
        dots: false,
        margin: 10,
        autoWidth: true,
        responsive: false
    });

}

const focus_Wrapper = $(".focus-wrapper");
if (focus_Wrapper.length) {
    document.getElementById('focus-carousel').addEventListener('slide.bs.carousel', event => {
        var from = $(".focus-wrapper .carousel-slide-" + (event["from"] + 1) + " .focus-img-character");
        var to = $(".focus-wrapper .carousel-slide-" + (event["to"] + 1) + " .focus-img-character");
        var fromBgCss = from.css("background-image");
        var toBgCss = to.css("background-image");
        if (event["direction"] == "left") {
            to.attr("style", "animation: slide-right-in ; ; background-image: " + toBgCss);
            from.attr("style", "animation: slide-right-out ; background-image: " + fromBgCss);
        }
        else {
            to.attr("style", "animation: slide-left-in ; background-image: " + toBgCss);
            from.attr("style", "animation: slide-left-out ; background-image: " + fromBgCss);
        }
    });

    $(".focus-img-link").click(function (e) {
        var link = $(".focus-wrapper #focus-carousel .carousel-inner .carousel-item.active").attr("href");
        $(".focus-img-link").attr("href", link);
    });
}

const row_Sliders_Container = $(".row-sliders-container")
if (row_Sliders_Container.length) {
    $(".row-sliders-container .row-slider .owl-carousel").owlCarousel({
        onInitialized: function (e) {
            width = e.relatedTarget._widths["0"];
            $(".row-sliders-container .row-slider .owl-carousel .owl-stage-outer .owl-item .card-img-top").css("height", width * 4 / 3);
        },
        loop: false,
        nav: true,
        dots: false,
        margin: 20,
        stagePadding: 10,
        responsive: {
            0: {
                items: 3,
                nav: false,
                margin: 10,
                stagePadding: 5
            },
            575: {
                items: 4,
                nav: false,
                margin: 10,
                stagePadding: 5
            },
            767: {
                items: 4,
                margin: 20,
                stagePadding: 10
            },
            992: {
                items: 6
            },
            1399: {
                items: 7
            },
            1600: {
                items: 8
            }
        }
    }).on('initialize.owl.carousel initialized.owl.carousel ' +
        'initialize.owl.carousel initialize.owl.carousel ' +
        'resize.owl.carousel resized.owl.carousel ' +
        'refresh.owl.carousel refreshed.owl.carousel ' +
        'update.owl.carousel updated.owl.carousel ' +
        'drag.owl.carousel dragged.owl.carousel ' +
        'translate.owl.carousel translated.owl.carousel ' +
        'to.owl.carousel changed.owl.carousel', function (e) {
            width = e.relatedTarget._widths["0"];
            $(".row-sliders-container .row-slider .owl-carousel .owl-stage-outer .owl-item .card-img-top").css("height", width * 4 / 3);
        });

    $('.row-sliders-container .row-slider .owl-carousel .owl-nav>button.owl-next').html("<span aria-label='Previous'><i class='fa-solid fa-chevron-right'></i></span>");
    $('.row-sliders-container .row-slider .owl-carousel .owl-nav>button.owl-prev').html("<span aria-label='Previous'><i class='fa-solid fa-chevron-left'></i></span>");

    $(".row-sliders-container .row-slider .owl-carousel .owl-stage-outer .owl-item .card").bind({
        mouseenter: function () {
            if ($(window).width() >= 768) {
                activeAnimeInfoPopup($(this));
                $(".anime-info-popup").bind({
                    mouseleave: function () {
                        inActiveAnimeInfoPopup();
                    }
                });
            }
        }
    });

    function inActiveAnimeInfoPopup() {
        $(".anime-info-popup").remove();
    }

    function activeAnimeInfoPopup(element) {
        var obj = element.offset();
        var h = element.height();
        var w = element.width();
        console.log(element[0].id);
        $("body").append("" +
            "<a class='anime-info-popup card' href='#' target='_blank' " +
            "style='position: absolute; top:" + obj.top + "px; left:" + obj.left + "px; z-index : 100; height : " + h + "px;width : " + w + "px;'>" +
            "<img src='../assets/client/images/24c3216a869d1a40_2d7a95d90fc58953_3374916729351087118684.jpg' class='card-img-top' alt='...''>" +
            "<div class='info-container card-body'>" +
            "<div class='info-name text-start'>Anime name</div>" +
            "<div class='d-flex text-black mb-1'>" +
            "<div class='info-item-score'><i class='fa-solid fa-star'></i> 5.0</div>" +
            "<div class='info-item-year'>2023</div>" +
            "<div class='info-item-update'>12 Episode</div>" +
            "</div>" +
            "<div class='d-flex info-category mb-1'>" +
            "<div class='info-item-category me-1 px-1'>category1</div>" +
            "<div class='info-item-category me-1 px-1'>category2</div>" +
            "</div>" +
            "<div class='info-item-description text-black' > Lorem ipsum dolor sit amet consectetur adipisicing elit.Ut aliquid velit dolorum.Aperiam provident labore ipsa deleniti ut commodi non, facere esse quaerat alias eligendi, perferendis saepe, vero corporis dolorum.</div > " +
            "</div>" +
            "</a>" +
            "");
    }
}

const info_Focus_Wrapper = $(".info-focus-wrapper");
if (info_Focus_Wrapper.length) {
    $(".info-focus-wrapper .focus-decs-wrapper .more-decs").click(function () {
        if ($(this).parent().hasClass("expand")) {
            $(this).parent().removeClass("expand");
            $(this).find(".more-desc-toggler").attr("style", " transform: unset;")
            $(this).attr("style", "color : unset");
            $(this).removeClass("expand");
        }
        else {
            $(this).parent().addClass("expand");
            $(this).find(".more-desc-toggler").attr("style", " transform: rotate(180deg);");
            $(this).addClass("expand");
        }
    });

    $(".episodes-list-wrapper .episode-wapper").mouseenter(function () {
        $(this).find(".play-icon").addClass("show");
        $(this).mouseleave(function () {
            $(this).find(".play-icon").removeClass("show");
        });
    });
}

const watch_Area_Container = $(".watch-area-container");
if (watch_Area_Container.length) {
    $(document).ready(function () {
        adjust_Slider();
    });

    $(window).resize(function () {
        adjust_Slider();
    });

    const video_Player = videojs('video-player', {
        userActions: {
            hotkeys: true
        }
    });

    video_Player.on("pause", function () {
        $(".watch-area-container .player-slider-bar .player-slider-body .episodes-list .episode-wrapper .play-icon").removeClass("playing");
        $(".watch-area-container .player-slider-bar .player-slider-body .episodes-list .episode-wrapper .play-icon").addClass("off");
    });

    video_Player.on('playing', function () {
        $(".watch-area-container .player-slider-bar .player-slider-body .episodes-list .episode-wrapper .play-icon").removeClass("off");
        $(".watch-area-container .player-slider-bar .player-slider-body .episodes-list .episode-wrapper .play-icon").addClass("playing");
    });

    function adjust_Slider() {
        $(".watch-area-container .player-slider-bar .player-slider-body").height(0).height($(".watch-area-container .player-slider-bar").height() - $(".watch-area-container .player-slider-bar .player-slider-header").height() - 2);
    }

    $(".watch-area-container .player-slider-bar .player-slider-body").mouseenter(function () {
        $(this).addClass("show-scrollbar");
        $(this).mouseleave(function () {
            $(this).removeClass("show-scrollbar");
        });
    });

    $(".watch-area-container .player-slider-bar .player-slider-header .slider-item").click(function () {
        $($(".watch-area-container .player-slider-bar .player-slider-header .slider-item.active").removeClass("active").attr("data-bbt-target")).removeClass("expand");
        $($(this).addClass("active").attr("data-bbt-target")).addClass("expand");
    });

    $(".watch-area-container .player-slider-bar .player-slider-body .comments-list .comment-input-ctn .textarea-box").click(function (e) {
        $(this).find(".comment-input").focus();
        $(this).focus();
        $(this).parent().find(".btn-ctn").addClass("show").find(".btn").click(function () {
            $(this).parent().removeClass("show");
        });
    });

    $(".watch-area-container .player-slider-bar .player-slider-body .comments-list .comment-input-ctn .btn-ctn .submit-btn").click(function () {
        $(".watch-area-container .player-slider-bar .player-slider-body .comments-list .comment-input-ctn .comment-input").val("");
    });

    $(".watch-area-container .player-slider-bar .player-slider-body .comments-list .comment-input-ctn .comment-input").keydown(function () {
        $(this).parent().find(".char-count").html($(this).val().length + "/280");
    });

    $(".watch-area-info .player-info-ctn .rating-ctn .own-rating .dropdown-menu").click(function (e) {
        e.stopPropagation();
    });

    $(".watch-area-info .player-info-ctn .rating-ctn .own-rating .own-score label").mouseenter(function () {
        var item = $(this).attr("for");
        var ctn = $(".watch-area-info .player-info-ctn .rating-ctn .own-rating .rt-score");
        ctn.html("<span>" + $("#" + item).val() + " star</span>");
        $(this).mouseleave(function () {
            ctn.html("<span>Click to rating</span>");
        })
    }).click(function () {
        item = $(this).attr("for");
        $(".watch-area-info .player-info-ctn .rating-ctn .own-rating .dropdown-menu").removeClass("show").parent().find(".dropdown-toggle").addClass("rated").html("<span>" + $("#" + item).val() + "/5 Edit rating</span>");
    });

    $(".watch-area-info .player-info-ctn .show-more").click(function () {
        var ctn = $(".watch-area-info .player-info-ctn .player-desc");
        if ($(this).hasClass("expand")) {
            $(this).removeClass("expand");
            ctn.removeClass("show");
        } else {
            $(this).addClass("expand");
            ctn.addClass("show");
        }

    });
}

const back_To_Top_Btn = $(".back-to-top-btn");
if (back_To_Top_Btn.length) {
    back_To_Top_Btn.click(function (e) {
        e.preventDefault();
        $('html, body').animate({ scrollTop: 0 }, '300');
    });
}