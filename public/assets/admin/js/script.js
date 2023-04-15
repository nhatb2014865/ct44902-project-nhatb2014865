const logoutBtn = $('.logout-btn');
if (logoutBtn) {
    logoutBtn.click(function () {
        $.ajax({
            type: 'post',
            url: "/signout",
            success: function (response) {
                if (response == 'success') {
                    window.location.reload();
                }
            },
            error: function (xhr, status, error) {
                console.log(xhr.responseText);
                console.log(error);
                console.log(status);
                console.log(xhr);
            }
        });
    })
}

const deleteCategoryBtn = $('.delete-category-btn');
if (deleteCategoryBtn) {
    deleteCategoryBtn.click(function () {
        var id = $(this).attr('tb-data-id');
        deleteElement = $(this).parent().parent();
        $.ajax({
            type: 'post',
            url: "/admin/deleteCategory",
            data: {
                field: 'category_id',
                value: id
            },
            success: function (response) {
                if (response == 'success') {
                    deleteElement.remove()
                }
            },
            error: function (xhr, status, error) {
                console.log(xhr.responseText);
                console.log(error);
                console.log(status);
                console.log(xhr);
            }
        });
    });
}

const navbar = $(".navbar");
if (navbar.length) {
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
        margin: 5,
        autoWidth: true,
        responsive: false
    });
}