<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Bliibii TV</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo _web_root ?>/assets/client/css/style.css">
</head>

<body>
    <nav class="navbar navbar-expand-md fixed-top bg-e8f3ee p-0" style="--bs-bg-opacity: 0">
        <div class="container-fluid mx-5 p-0">
            <button class="navbar-toggler me-3" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand m-0 me-3 p-0" href="#">
                <img class="brand-logo" src="<?php echo _web_root ?>/assets/client/images/logo-with-brand.png" alt="">
            </a>
            <div class="nav me-auto">
                <div class="nav-item">
                    <a class="nav-link px-0 pe-3 active" aria-current="page" href="#">Home</a>
                </div>
                <div class="nav-item">
                    <a class="nav-link px-0 pe-3" href="#">Link</a>
                </div>
                <div class="link-collapse nav-item dropdown-center">
                    <div class="nav-link dropdown-toggle px-0 me-3" aria-expanded="true"></div>
                    <div class="dropdown-menu">
                        <ul class="dropdown-container bg-e8f3ee">
                            <li class="dropdown-item p-0">
                                <a class=" nav-link active" aria-current="page" href="#">Home</a>
                            </li>
                            <li class="dropdown-item p-0">
                                <a class=" nav-link" href="#">Link</a>
                            </li>
                            <li class="dropdown-item p-0">
                                <a class=" nav-link" href="#">Link</a>
                            </li>
                            <li class="dropdown-item p-0">
                                <a class=" nav-link" href="#">Link</a>
                            </li>
                            <li class="dropdown-item p-0">
                                <a class=" nav-link" href="#">Link</a>
                            </li>
                            <li class="dropdown-item p-0">
                                <a class=" nav-link" href="#">Link</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="offcanvas offcanvas-md offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel" style="width: 300px;">
                <div class="offcanvas-header">
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#offcanvasNavbar" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body bg-e8f3ee">
                    <div class="user-side link-collapse nav-item dropdown-center me-3" style="background-image: url(<?php echo _web_root ?>/assets/client/images/3.png);">
                        <a class="nav-link dropdown-toggle" href="#" aria-expanded="false"></a>
                        <div class="dropdown-menu p-0">
                            <div class="card user-panel dropdown-container" style="width: 18rem;">
                                <div class="user-info p-3 m-0">
                                    <div class="user-img" style="background-image: url(<?php echo _web_root ?>/assets/client/images/3.png);"></div>
                                    <div class="d-flex align-items-center ms-2">
                                        <span class="user-name">User name</span>
                                    </div>
                                </div>
                                <ul class="card-body p-0 m-0">
                                    <li>
                                        <a class="dropdown-item nav-link p-2 px-3" href="#">
                                            <div class="row">
                                                <div class="col-2"><i class="fa-solid fa-bookmark"></i></div>
                                                <div class="col"><span class="">Watch later</span></div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item nav-link p-2 px-3" href="#">
                                            <div class="row">
                                                <div class="col-2"><i class="fa-solid fa-right-from-bracket"></i></div>
                                                <div class="col"><span class="">Log out</span></div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="menu-user">
                        <div class="user-info p-4 m-0 mb-2">
                            <div class="user-img" style="background-image: url(<?php echo _web_root ?>/assets/client/images/3.png);"></div>
                            <div class="d-flex align-items-center ms-3">
                                <span class="user-name">User name</span>
                            </div>
                        </div>
                        <div class="p-0 m-0">
                            <div>
                                <a class="nav-link p-2 px-4" href="#">
                                    <div class="row">
                                        <div class="col-2"><i class="fa-solid fa-user"></i></div>
                                        <div class="col"><span class="">My account</span></div>
                                    </div>
                                </a>
                            </div>
                            <div>
                                <a class="nav-link p-2 px-4" href="#">
                                    <div class="row">
                                        <div class="col-2"><i class="fa-solid fa-bookmark"></i></div>
                                        <div class="col"><span class="">Watch later</span></div>
                                    </div>
                                </a>
                            </div>
                            <div>
                                <a class="nav-link p-2 px-4" href="#">
                                    <div class="row">
                                        <div class="col-2"><i class="fa-solid fa-right-from-bracket"></i></div>
                                        <div class="col"><span class="">Log out</span></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <form class="d-flex search-form" role="search">
                <div class="input-group search-input-container input-group-sm border rounded bg-e8f3ee" style="--bs-bg-opacity: 0.5">
                    <input class="search-input form-control bg-opacity-10" placeholder="Search your favorite!" aria-label="Search">
                    <button class="clear-btn btn btn-close rounded-circle" type="reset" style="display: none !important;"></button>
                    <a class="btn search-icon" type="submit"><i class="fa-solid fa-magnifying-glass"></i></a>
                </div>
            </form>
            <div class="sub-nav nav">
                <div class="sub-nav-slider owl-carousel owl-theme owl-loaded">
                    <div class="owl-stage-outer">
                        <div class="owl-stage">
                            <div class="owl-item">
                                <div class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                                </div>
                            </div>
                            <div class="owl-item">
                                <div class="nav-item">
                                    <a class="nav-link" href="#">Link</a>
                                </div>
                            </div>
                            <div class="owl-item">
                                <div class="nav-item">
                                    <a class="nav-link" href="#">Link</a>
                                </div>
                            </div>
                            <div class="owl-item">
                                <div class="nav-item">
                                    <a class="nav-link" href="#">Link</a>
                                </div>
                            </div>
                            <div class="owl-item">
                                <div class="nav-item">
                                    <a class="nav-link" href="#">Link</a>
                                </div>
                            </div>
                            <div class="owl-item">
                                <div class="nav-item">
                                    <a class="nav-link" href="#">Link</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <div class="content">
        <div class="focus-wrapper m-0 p-0">
            <div id="focus-carousel" class="carousel slide carousel-fade" data-bs-ride="true" data-bs-interval="6000">
                <a class="focus-img-link" target='_blank' href="#"></a>
                <div class="carousel-indicators px-5 mx-0">
                    <button class="mx-0 ms-1 active" type="button" data-bs-target="#focus-carousel" data-bs-slide-to="0" aria-current="true" aria-label="Slide 1"></button>
                    <button class="mx-0 ms-1" type="button" data-bs-target="#focus-carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button class="mx-0 ms-1" type="button" data-bs-target="#focus-carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    <button class="mx-0 ms-1" type="button" data-bs-target="#focus-carousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
                    <button class="mx-0 ms-1" type="button" data-bs-target="#focus-carousel" data-bs-slide-to="4" aria-label="Slide 5"></button>
                    <button class="mx-0 ms-1" type="button" data-bs-target="#focus-carousel" data-bs-slide-to="5" aria-label="Slide 6"></button>
                </div>
                <div class="carousel-inner">
                    <a class="focus-item carousel-item carousel-slide-1 active " href="1">
                        <div class="vertical-layer"></div>
                        <div class="horizontal-layer"></div>
                        <img src="../assets/login/images/ab44954c581b1a66_8af2eb6daf6fa0eb_3486616579698801118684.jpg" class="d-block focus-img" alt="...">
                        <div class="focus-img-character" style="background-image: url('<?php echo _web_root ?>/assets/client/images/logo-with-brand.png');"></div>
                        <div class="focus-decs-wrapper">
                            <div class="focus-item-name" style="background-image: url('<?php echo _web_root ?>/assets/client/images/logo-with-brand.png');"></div>
                            <div class="d-flex text-black mb-2">
                                <div class="focus-item-score"><i class="fa-solid fa-star"></i> 5.0</div>
                                <div class="focus-item-year">2023</div>
                                <div class="focus-item-update">12 Episode</div>
                            </div>
                            <div class="d-flex focus-category mb-2">
                                <div class="focus-category-item me-2 mb-1 px-2 ">category1</div>
                                <div class="focus-category-item me-2 mb-1 px-2 ">category2</div>
                                <div class="focus-category-item me-2 mb-1 px-2 ">category3</div>
                                <div class="focus-category-item me-2 mb-1 px-2 ">category3</div>
                                <div class="focus-category-item me-2 mb-1 px-2 ">category3</div>
                                <div class="focus-category-item me-2 mb-1 px-2 ">category3</div>
                                <div class="focus-category-item me-2 mb-1 px-2 ">category3</div>
                                <div class="focus-category-item me-2 mb-1 px-2 ">category3</div>
                                <div class="focus-category-item me-2 mb-1 px-2 ">category3</div>
                                <div class="focus-category-item me-2 mb-1 px-2 ">category3</div>
                                <div class="focus-category-item me-2 mb-1 px-2 ">category3</div>
                            </div>
                            <div class="focus-item-desc text-black">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut aliquid velit dolorum. Aperiam provident labore ipsa deleniti ut commodi non, facere esse quaerat alias eligendi, perferendis saepe, vero corporis dolorum. </div>
                        </div>
                    </a>
                    <a class="focus-item carousel-item carousel-slide-2 " href="#">
                        <div class="vertical-layer"></div>
                        <div class="horizontal-layer"></div>
                        <img src="<?php echo _web_root ?>/assets/client/images/24c3216a869d1a40_2d7a95d90fc58953_3374916729351087118684.jpg" class="d-block focus-img" alt="...">
                        <div class="focus-img-character" style="background-image: url('<?php echo _web_root ?>/assets/client/images/2.png');"></div>
                        <div class="focus-decs-wrapper">
                            <div class="focus-item-name" style="background-image: url('<?php echo _web_root ?>/assets/client/images/logo-with-brand.png');"></div>
                            <div class="d-flex text-black mb-2">
                                <div class="focus-item-score"><i class="fa-solid fa-star"></i> 5.0</div>
                                <div class="focus-item-year">2023</div>
                                <div class="focus-item-update">12 Episode</div>
                            </div>
                            <div class="d-flex focus-category mb-2">
                                <div class="focus-category-item me-2 mb-1 px-2 ">category1</div>
                                <div class="focus-category-item me-2 mb-1 px-2 ">category2</div>
                                <div class="focus-category-item me-2 mb-1 px-2 ">category3</div>
                            </div>
                            <div class="focus-item-desc text-black">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut aliquid velit dolorum. Aperiam provident labore ipsa deleniti ut commodi non, facere esse quaerat alias eligendi, perferendis saepe, vero corporis dolorum. </div>
                        </div>
                    </a>
                    <a class="focus-item carousel-item carousel-slide-3 " href="#">
                        <div class="vertical-layer"></div>
                        <div class="horizontal-layer"></div>
                        <img src="../assets/login/images/ab44954c581b1a66_8af2eb6daf6fa0eb_3486616579698801118684.jpg" class="d-block focus-img" alt="...">
                        <div class="focus-img-character" style="background-image: url('<?php echo _web_root ?>/assets/client/images/3.png');"></div>
                        <div class="focus-decs-wrapper">
                            <div class="focus-item-name" style="background-image: url('<?php echo _web_root ?>/assets/client/images/logo-with-brand.png');"></div>
                            <div class="d-flex text-black mb-2">
                                <div class="focus-item-score"><i class="fa-solid fa-star"></i> 5.0</div>
                                <div class="focus-item-year">2023</div>
                                <div class="focus-item-update">12 Episode</div>
                            </div>
                            <div class="d-flex focus-category mb-2">
                                <div class="focus-category-item me-2 mb-1 px-2 ">category1</div>
                                <div class="focus-category-item me-2 mb-1 px-2 ">category2</div>
                                <div class="focus-category-item me-2 mb-1 px-2 ">category3</div>
                            </div>
                            <div class="focus-item-desc text-black">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut aliquid velit dolorum. Aperiam provident labore ipsa deleniti ut commodi non, facere esse quaerat alias eligendi, perferendis saepe, vero corporis dolorum. </div>
                        </div>
                    </a>
                    <a class="focus-item carousel-item carousel-slide-4 " href="#">
                        <div class="vertical-layer"></div>
                        <div class="horizontal-layer"></div>
                        <img src="<?php echo _web_root ?>/assets/client/images/24c3216a869d1a40_2d7a95d90fc58953_3374916729351087118684.jpg" class="d-block focus-img" alt="...">
                        <div class="focus-img-character" style="background-image: url('<?php echo _web_root ?>/assets/client/images/1.png');"></div>
                        <div class="focus-decs-wrapper">
                            <div class="focus-item-name" style="background-image: url('<?php echo _web_root ?>/assets/client/images/logo-with-brand.png');"></div>
                            <div class="d-flex text-black mb-2">
                                <div class="focus-item-score"><i class="fa-solid fa-star"></i> 5.0</div>
                                <div class="focus-item-year">2023</div>
                                <div class="focus-item-update">12 Episode</div>
                            </div>
                            <div class="d-flex focus-category mb-2">
                                <div class="focus-category-item me-2 mb-1 px-2 ">category1</div>
                                <div class="focus-category-item me-2 mb-1 px-2 ">category2</div>
                                <div class="focus-category-item me-2 mb-1 px-2 ">category3</div>
                            </div>
                            <div class="focus-item-desc text-black">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut aliquid velit dolorum. Aperiam provident labore ipsa deleniti ut commodi non, facere esse quaerat alias eligendi, perferendis saepe, vero corporis dolorum. </div>
                        </div>
                    </a>
                    <a class="focus-item carousel-item carousel-slide-5 " href="#">
                        <div class="vertical-layer"></div>
                        <div class="horizontal-layer"></div>
                        <img src="../assets/login/images/ab44954c581b1a66_8af2eb6daf6fa0eb_3486616579698801118684.jpg" class="d-block focus-img" alt="...">
                        <div class="focus-img-character" style="background-image: url('<?php echo _web_root ?>/assets/client/images/2.png');"></div>
                        <div class="focus-decs-wrapper">
                            <div class="focus-item-name" style="background-image: url('<?php echo _web_root ?>/assets/client/images/logo-with-brand.png');"></div>
                            <div class="d-flex text-black mb-2">
                                <div class="focus-item-score"><i class="fa-solid fa-star"></i> 5.0</div>
                                <div class="focus-item-year">2023</div>
                                <div class="focus-item-update">12 Episode</div>
                            </div>
                            <div class="d-flex focus-category mb-2">
                                <div class="focus-category-item me-2 mb-1 px-2 ">category1</div>
                                <div class="focus-category-item me-2 mb-1 px-2 ">category2</div>
                                <div class="focus-category-item me-2 mb-1 px-2 ">category3</div>
                            </div>
                            <div class="focus-item-desc text-black">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut aliquid velit dolorum. Aperiam provident labore ipsa deleniti ut commodi non, facere esse quaerat alias eligendi, perferendis saepe, vero corporis dolorum. </div>
                        </div>
                    </a>
                    <a class="focus-item carousel-item carousel-slide-6 " href="#">
                        <div class="vertical-layer"></div>
                        <div class="horizontal-layer"></div>
                        <img src="<?php echo _web_root ?>/assets/client/images/24c3216a869d1a40_2d7a95d90fc58953_3374916729351087118684.jpg" class="d-block focus-img" alt="...">
                        <div class="focus-img-character" style="background-image: url('<?php echo _web_root ?>/assets/client/images/3.png');"></div>
                        <div class="focus-decs-wrapper">
                            <div class="focus-item-name" style="background-image: url('<?php echo _web_root ?>/assets/client/images/logo-with-brand.png');"></div>
                            <div class="d-flex text-black mb-2">
                                <div class="focus-item-score"><i class="fa-solid fa-star"></i> 5.0</div>
                                <div class="focus-item-year">2023</div>
                                <div class="focus-item-update">12 Episode</div>
                            </div>
                            <div class="d-flex focus-category mb-2">
                                <div class="focus-category-item me-2 mb-1 px-2 ">category1</div>
                                <div class="focus-category-item me-2 mb-1 px-2 ">category2</div>
                                <div class="focus-category-item me-2 mb-1 px-2 ">category3</div>
                            </div>
                            <div class="focus-item-desc text-black">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut aliquid velit dolorum. Aperiam provident labore ipsa deleniti ut commodi non, facere esse quaerat alias eligendi, perferendis saepe, vero corporis dolorum. </div>
                        </div>
                    </a>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#focus-carousel" data-bs-slide="prev">
                    <i class="fa-solid fa-chevron-left"></i>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#focus-carousel" data-bs-slide="next">
                    <i class="fa-solid fa-chevron-right"></i>
                </button>
            </div>
        </div>
        <div class="row-sliders-container m-0">
            <div class="row-slider mb-5">
                <h2 class="title m-0">Title</h2>
                <div class="owl-carousel owl-theme owl-loaded">
                    <div class="owl-stage-outer">
                        <div class="owl-stage pt-3">
                            <div class="owl-item">
                                <a id="animeId" class="card" target='_blank' href="#">
                                    <img src="<?php echo _web_root ?>/assets/client/images/24c3216a869d1a40_2d7a95d90fc58953_3374916729351087118684.jpg" class="card-img-top" alt="...">
                                    <div class="p-1">
                                        <p class="card-text">Anime Name</p>
                                    </div>
                                </a>
                            </div>
                            <div class="owl-item">
                                <a id="animeId" class="card" target='_blank' href="#">
                                    <img src="<?php echo _web_root ?>/assets/client/images/24c3216a869d1a40_2d7a95d90fc58953_3374916729351087118684.jpg" class="card-img-top" alt="...">
                                    <div class="p-1">
                                        <p class="card-text">Anime Name</p>
                                    </div>
                                </a>
                            </div>
                            <div class="owl-item">
                                <a id="animeId" class="card" target='_blank' href="#">
                                    <img src="<?php echo _web_root ?>/assets/client/images/24c3216a869d1a40_2d7a95d90fc58953_3374916729351087118684.jpg" class="card-img-top" alt="...">
                                    <div class="p-1">
                                        <p class="card-text">Anime Name</p>
                                    </div>
                                </a>
                            </div>
                            <div class="owl-item">
                                <a id="animeId" class="card" target='_blank' href="#">
                                    <img src="<?php echo _web_root ?>/assets/client/images/24c3216a869d1a40_2d7a95d90fc58953_3374916729351087118684.jpg" class="card-img-top" alt="...">
                                    <div class="p-1">
                                        <p class="card-text">Anime Name</p>
                                    </div>
                                </a>
                            </div>
                            <div class="owl-item">
                                <a id="animeId" class="card" target='_blank' href="#">
                                    <img src="<?php echo _web_root ?>/assets/client/images/24c3216a869d1a40_2d7a95d90fc58953_3374916729351087118684.jpg" class="card-img-top" alt="...">
                                    <div class="p-1">
                                        <p class="card-text">Anime Name</p>
                                    </div>
                                </a>
                            </div>
                            <div class="owl-item">
                                <a id="animeId" class="card" target='_blank' href="#">
                                    <img src="<?php echo _web_root ?>/assets/client/images/24c3216a869d1a40_2d7a95d90fc58953_3374916729351087118684.jpg" class="card-img-top" alt="...">
                                    <div class="p-1">
                                        <p class="card-text">Anime Name</p>
                                    </div>
                                </a>
                            </div>
                            <div class="owl-item">
                                <a id="animeId" class="card" target='_blank' href="#">
                                    <img src="<?php echo _web_root ?>/assets/client/images/24c3216a869d1a40_2d7a95d90fc58953_3374916729351087118684.jpg" class="card-img-top" alt="...">
                                    <div class="p-1">
                                        <p class="card-text">Anime Name</p>
                                    </div>
                                </a>
                            </div>
                            <div class="owl-item">
                                <a id="animeId" class="card" target='_blank' href="#">
                                    <img src="<?php echo _web_root ?>/assets/client/images/24c3216a869d1a40_2d7a95d90fc58953_3374916729351087118684.jpg" class="card-img-top" alt="...">
                                    <div class="p-1">
                                        <p class="card-text">Anime Name</p>
                                    </div>
                                </a>
                            </div>
                            <div class="owl-item">
                                <a id="animeId" class="card" target='_blank' href="#">
                                    <img src="<?php echo _web_root ?>/assets/client/images/24c3216a869d1a40_2d7a95d90fc58953_3374916729351087118684.jpg" class="card-img-top" alt="...">
                                    <div class="p-1">
                                        <p class="card-text">Anime Name</p>
                                    </div>
                                </a>
                            </div>
                            <div class="owl-item">
                                <a id="animeId" class="card" target='_blank' href="#">
                                    <img src="<?php echo _web_root ?>/assets/client/images/24c3216a869d1a40_2d7a95d90fc58953_3374916729351087118684.jpg" class="card-img-top" alt="...">
                                    <div class="p-1">
                                        <p class="card-text">Anime Name</p>
                                    </div>
                                </a>
                            </div>
                            <div class="owl-item">
                                <a id="animeId" class="card" target='_blank' href="#">
                                    <img src="<?php echo _web_root ?>/assets/client/images/24c3216a869d1a40_2d7a95d90fc58953_3374916729351087118684.jpg" class="card-img-top" alt="...">
                                    <div class="p-1">
                                        <p class="card-text">Anime Name</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row-slider mb-5">
                <h2 class="title m-0">Title</h2>
                <div class="owl-carousel owl-theme owl-loaded">
                    <div class="owl-stage-outer">
                        <div class="owl-stage pt-3">
                            <div class="owl-item">
                                <a id="animeId" class="card" target='_blank' href="#">
                                    <img src="<?php echo _web_root ?>/assets/client/images/24c3216a869d1a40_2d7a95d90fc58953_3374916729351087118684.jpg" class="card-img-top" alt="...">
                                    <div class="p-1">
                                        <p class="card-text">Anime Name</p>
                                    </div>
                                </a>
                            </div>
                            <div class="owl-item">
                                <a id="animeId" class="card" target='_blank' href="#">
                                    <img src="<?php echo _web_root ?>/assets/client/images/24c3216a869d1a40_2d7a95d90fc58953_3374916729351087118684.jpg" class="card-img-top" alt="...">
                                    <div class="p-1">
                                        <p class="card-text">Anime Name</p>
                                    </div>
                                </a>
                            </div>
                            <div class="owl-item">
                                <a id="animeId" class="card" target='_blank' href="#">
                                    <img src="<?php echo _web_root ?>/assets/client/images/24c3216a869d1a40_2d7a95d90fc58953_3374916729351087118684.jpg" class="card-img-top" alt="...">
                                    <div class="p-1">
                                        <p class="card-text">Anime Name</p>
                                    </div>
                                </a>
                            </div>
                            <div class="owl-item">
                                <a id="animeId" class="card" target='_blank' href="#">
                                    <img src="<?php echo _web_root ?>/assets/client/images/24c3216a869d1a40_2d7a95d90fc58953_3374916729351087118684.jpg" class="card-img-top" alt="...">
                                    <div class="p-1">
                                        <p class="card-text">Anime Name</p>
                                    </div>
                                </a>
                            </div>
                            <div class="owl-item">
                                <a id="animeId" class="card" target='_blank' href="#">
                                    <img src="<?php echo _web_root ?>/assets/client/images/24c3216a869d1a40_2d7a95d90fc58953_3374916729351087118684.jpg" class="card-img-top" alt="...">
                                    <div class="p-1">
                                        <p class="card-text">Anime Name</p>
                                    </div>
                                </a>
                            </div>
                            <div class="owl-item">
                                <a id="animeId" class="card" target='_blank' href="#">
                                    <img src="<?php echo _web_root ?>/assets/client/images/24c3216a869d1a40_2d7a95d90fc58953_3374916729351087118684.jpg" class="card-img-top" alt="...">
                                    <div class="p-1">
                                        <p class="card-text">Anime Name</p>
                                    </div>
                                </a>
                            </div>
                            <div class="owl-item">
                                <a id="animeId" class="card" target='_blank' href="#">
                                    <img src="<?php echo _web_root ?>/assets/client/images/24c3216a869d1a40_2d7a95d90fc58953_3374916729351087118684.jpg" class="card-img-top" alt="...">
                                    <div class="p-1">
                                        <p class="card-text">Anime Name</p>
                                    </div>
                                </a>
                            </div>
                            <div class="owl-item">
                                <a id="animeId" class="card" target='_blank' href="#">
                                    <img src="<?php echo _web_root ?>/assets/client/images/24c3216a869d1a40_2d7a95d90fc58953_3374916729351087118684.jpg" class="card-img-top" alt="...">
                                    <div class="p-1">
                                        <p class="card-text">Anime Name</p>
                                    </div>
                                </a>
                            </div>
                            <div class="owl-item">
                                <a id="animeId" class="card" target='_blank' href="#">
                                    <img src="<?php echo _web_root ?>/assets/client/images/24c3216a869d1a40_2d7a95d90fc58953_3374916729351087118684.jpg" class="card-img-top" alt="...">
                                    <div class="p-1">
                                        <p class="card-text">Anime Name</p>
                                    </div>
                                </a>
                            </div>
                            <div class="owl-item">
                                <a id="animeId" class="card" target='_blank' href="#">
                                    <img src="<?php echo _web_root ?>/assets/client/images/24c3216a869d1a40_2d7a95d90fc58953_3374916729351087118684.jpg" class="card-img-top" alt="...">
                                    <div class="p-1">
                                        <p class="card-text">Anime Name</p>
                                    </div>
                                </a>
                            </div>
                            <div class="owl-item">
                                <a id="animeId" class="card" target='_blank' href="#">
                                    <img src="<?php echo _web_root ?>/assets/client/images/24c3216a869d1a40_2d7a95d90fc58953_3374916729351087118684.jpg" class="card-img-top" alt="...">
                                    <div class="p-1">
                                        <p class="card-text">Anime Name</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row-slider mb-5">
                <h2 class="title m-0">Title</h2>
                <div class="owl-carousel owl-theme owl-loaded">
                    <div class="owl-stage-outer">
                        <div class="owl-stage pt-3">
                            <div class="owl-item">
                                <a id="animeId" class="card" target='_blank' href="#">
                                    <img src="<?php echo _web_root ?>/assets/client/images/24c3216a869d1a40_2d7a95d90fc58953_3374916729351087118684.jpg" class="card-img-top" alt="...">
                                    <div class="p-1">
                                        <p class="card-text">Anime Name</p>
                                    </div>
                                </a>
                            </div>
                            <div class="owl-item">
                                <a id="animeId" class="card" target='_blank' href="#">
                                    <img src="<?php echo _web_root ?>/assets/client/images/24c3216a869d1a40_2d7a95d90fc58953_3374916729351087118684.jpg" class="card-img-top" alt="...">
                                    <div class="p-1">
                                        <p class="card-text">Anime Name</p>
                                    </div>
                                </a>
                            </div>
                            <div class="owl-item">
                                <a id="animeId" class="card" target='_blank' href="#">
                                    <img src="<?php echo _web_root ?>/assets/client/images/24c3216a869d1a40_2d7a95d90fc58953_3374916729351087118684.jpg" class="card-img-top" alt="...">
                                    <div class="p-1">
                                        <p class="card-text">Anime Name</p>
                                    </div>
                                </a>
                            </div>
                            <div class="owl-item">
                                <a id="animeId" class="card" target='_blank' href="#">
                                    <img src="<?php echo _web_root ?>/assets/client/images/24c3216a869d1a40_2d7a95d90fc58953_3374916729351087118684.jpg" class="card-img-top" alt="...">
                                    <div class="p-1">
                                        <p class="card-text">Anime Name</p>
                                    </div>
                                </a>
                            </div>
                            <div class="owl-item">
                                <a id="animeId" class="card" target='_blank' href="#">
                                    <img src="<?php echo _web_root ?>/assets/client/images/24c3216a869d1a40_2d7a95d90fc58953_3374916729351087118684.jpg" class="card-img-top" alt="...">
                                    <div class="p-1">
                                        <p class="card-text">Anime Name</p>
                                    </div>
                                </a>
                            </div>
                            <div class="owl-item">
                                <a id="animeId" class="card" target='_blank' href="#">
                                    <img src="<?php echo _web_root ?>/assets/client/images/24c3216a869d1a40_2d7a95d90fc58953_3374916729351087118684.jpg" class="card-img-top" alt="...">
                                    <div class="p-1">
                                        <p class="card-text">Anime Name</p>
                                    </div>
                                </a>
                            </div>
                            <div class="owl-item">
                                <a id="animeId" class="card" target='_blank' href="#">
                                    <img src="<?php echo _web_root ?>/assets/client/images/24c3216a869d1a40_2d7a95d90fc58953_3374916729351087118684.jpg" class="card-img-top" alt="...">
                                    <div class="p-1">
                                        <p class="card-text">Anime Name</p>
                                    </div>
                                </a>
                            </div>
                            <div class="owl-item">
                                <a id="animeId" class="card" target='_blank' href="#">
                                    <img src="<?php echo _web_root ?>/assets/client/images/24c3216a869d1a40_2d7a95d90fc58953_3374916729351087118684.jpg" class="card-img-top" alt="...">
                                    <div class="p-1">
                                        <p class="card-text">Anime Name</p>
                                    </div>
                                </a>
                            </div>
                            <div class="owl-item">
                                <a id="animeId" class="card" target='_blank' href="#">
                                    <img src="<?php echo _web_root ?>/assets/client/images/24c3216a869d1a40_2d7a95d90fc58953_3374916729351087118684.jpg" class="card-img-top" alt="...">
                                    <div class="p-1">
                                        <p class="card-text">Anime Name</p>
                                    </div>
                                </a>
                            </div>
                            <div class="owl-item">
                                <a id="animeId" class="card" target='_blank' href="#">
                                    <img src="<?php echo _web_root ?>/assets/client/images/24c3216a869d1a40_2d7a95d90fc58953_3374916729351087118684.jpg" class="card-img-top" alt="...">
                                    <div class="p-1">
                                        <p class="card-text">Anime Name</p>
                                    </div>
                                </a>
                            </div>
                            <div class="owl-item">
                                <a id="animeId" class="card" target='_blank' href="#">
                                    <img src="<?php echo _web_root ?>/assets/client/images/24c3216a869d1a40_2d7a95d90fc58953_3374916729351087118684.jpg" class="card-img-top" alt="...">
                                    <div class="p-1">
                                        <p class="card-text">Anime Name</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="footer-info px-5 mb-3"><span>Copyright © 2023 Bliibiitv All Rights Reserved</span></div>
        <div class="back-to-top-btn" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-custom-class="tooltip-back-to-top" data-bs-title="Back to top"><i class="fa-solid fa-chevron-up"></i></div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="<?php echo _web_root ?>/assets/client/js/main.js"></script>
</body>

</html>