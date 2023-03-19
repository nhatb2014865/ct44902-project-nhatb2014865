window.addEventListener('scroll', scrolled);
function scrolled(event) {
    if (window.pageYOffset > 50) {
        $(".navbar").attr("style", "--bs-bg-opacity: 1; box-shadow: 0px 2px 20px 10px #00000014");
    }
    else {
        $(".navbar").attr("style", "--bs-bg-opacity: 0; box-shadow: none");
    }

    if (window.pageYOffset > 300) {
        $(".back-to-top").attr("style", "display : flex")
    }
    else
        $(".back-to-top").attr("style", "display : none")
    $(".tooltip-back-to-top").removeClass("show");
}

const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))

document.getElementsByClassName("search-input")[0].oninput = function () {
    if (document.getElementsByClassName("search-input")[0].value != "")
        $(".clear-btn").removeAttr("style");
    else
        $(".clear-btn").attr("style", "display : none !important");
}

$(".clear-btn").click(function () {
    $(".clear-btn").attr("style", "display : none !important");
});

const Carousel = document.getElementById('focus-carousel');
Carousel.addEventListener('slide.bs.carousel', event => {
    var from = $(".focus-wallpaper .carousel-slide-" + (event["from"] + 1) + " .focus-img-cut");
    var to = $(".focus-wallpaper .carousel-slide-" + (event["to"] + 1) + " .focus-img-cut");
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

$(".navbar .dropdown-center").mouseenter(function () {
    $(this).find(".dropdown-menu").addClass("show");
    $(this).find(".dropdown-toggle").addClass("open");
    $(this).mouseleave(function () {
        $(this).find(".dropdown-menu").removeClass("show");
        $(this).find(".dropdown-toggle").removeClass("open");
    });
});

$(".focus-wallpaper-link").click(function (e) {
    var link = $(".focus-wallpaper #focus-carousel .carousel-inner .carousel-item.active").attr("href");
    $(".focus-wallpaper-link").attr("href", link);
});

$(".navbar .sub-nav .owl-carousel").owlCarousel({
    loop: false,
    nav: false,
    dots: false,
    margin: 10,
    autoWidth: true,
    responsive: false
})

$(".row-container .row-slider .owl-carousel").owlCarousel({
    onInitialized: function (e) {
        width = e.relatedTarget._widths["0"];
        $(".row-container .row-slider .owl-carousel .owl-stage-outer .owl-item .card-img-top").css("height", width * 4 / 3);
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
        $(".row-container .row-slider .owl-carousel .owl-stage-outer .owl-item .card-img-top").css("height", width * 4 / 3);
    });

$('.row-container .row-slider .owl-carousel .owl-nav>button.owl-next').html("<span aria-label='Previous'><i class='fa-solid fa-chevron-right'></i></span>");
$('.row-container .row-slider .owl-carousel .owl-nav>button.owl-prev').html("<span aria-label='Previous'><i class='fa-solid fa-chevron-left'></i></span>");

$(".row-container .row-slider .owl-carousel .owl-stage-outer .owl-item .card").bind({
    mouseenter: function () {
        if ($(window).width() >= 768) {
            ActiveAnimeInfoPopup($(this));
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

function ActiveAnimeInfoPopup(element) {
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

$(".back-to-top").click(function (e) {
    e.preventDefault();
    $('html, body').animate({ scrollTop: 0 }, '300');
});