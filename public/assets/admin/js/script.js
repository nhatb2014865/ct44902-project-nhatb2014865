window.onload = function () {
    const categoryCtn = $('#category-ctn');
    if (categoryCtn) {
        $.ajax({
            type: 'post',
            url: "/admin/showCategory",
            success: function (response) {
                $('#category-ctn').html(response);
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
                                } else alert('Không thể xóa do chứa phần tử')
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
            },
            error: function (xhr, status, error) {
                console.log(xhr.responseText);
                console.log(error);
                console.log(status);
                console.log(xhr);
            }
        });
    }
}

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

const choseCategoryBtn = $('#category-select');
if (choseCategoryBtn) {
    choseCategoryBtn.focus(function () {
        $.ajax({
            type: 'post',
            url: "/admin/getCategory",
            success: function (response) {
                $('#category-select').html(response);
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

const choseCategory = $('#category-select');
if (choseCategory) {
    choseCategory.change(function () {
        if ($('#category-select').val() != null) {
            var id = $('#category-select').val();
        }
        $.ajax({
            type: 'post',
            url: "/admin/showGenre",
            data: {
                category_id: id
            },
            success: function (response) {
                $('#genre-ctn').html(response);
                const deleteGenreBtn = $('.delete-genre-btn');
                if (deleteGenreBtn) {
                    deleteGenreBtn.click(function () {
                        var id = $(this).attr('tb-data-id');
                        deleteElement = $(this).parent().parent();
                        $.ajax({
                            type: 'post',
                            url: "/admin/deleteGenre",
                            data: {
                                field: 'genre_id',
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

const choseGenreBtn = $('#genre-select');
if (choseGenreBtn) {
    choseGenreBtn.focus(function () {
        if ($('#category-select').val() != null) {
            var id = $('#category-select').val();
        }
        $.ajax({
            type: 'post',
            url: "/admin/getGenre",
            data: {
                category_id: id
            },
            success: function (response) {
                console.log(response)
                $('#genre-select').html(response);
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

const choseGenre = $('#genre-select');
if (choseGenre) {
    choseGenre.change(function () {
        if ($('#genre-select').val() != null) {
            var id = $('#genre-select').val();
        }
        $.ajax({
            type: 'post',
            url: "/admin/showAnime",
            data: {
                genre_id: id
            },
            success: function (response) {
                $('#anime-ctn').html(response);
                const deleteAnimeBtn = $('.delete-anime-btn');
                if (deleteAnimeBtn) {
                    deleteAnimeBtn.click(function () {
                        var id = $(this).attr('tb-data-id');
                        deleteElement = $(this).parent().parent();
                        $.ajax({
                            type: 'post',
                            url: "/admin/deleteAnime",
                            data: {
                                field: 'anime_id',
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