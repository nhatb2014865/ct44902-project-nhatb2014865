<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php if (!empty($title)) echo $title; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" rel="stylesheet">
    <link href="https://vjs.zencdn.net/8.0.4/video-js.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo _web_root; ?>/assets/admin/css/style.css">
</head>

<body>
    <nav class="navbar navbar-expand-md fixed-top bg-e8f3ee p-0" style="--bs-bg-opacity: 1 !important">
        <div class="container-fluid m-0 p-0">
            <button class="navbar-toggler me-3" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand m-0 me-3 p-0" href="#">
                <img class="brand-logo" src="<?php echo _web_root; ?>/assets/client/images/logo-with-brand.png" alt="">
            </a>
            <div class="offcanvas offcanvas-md offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel" style="width: 300px;">
                <div class="offcanvas-header">
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#offcanvasNavbar" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body bg-e8f3ee">
                    <div class="user-side link-collapse nav-item dropdown-center me-3" style="background-image: url(<?php echo _web_root; ?>/assets/client/images/3.png);">
                        <a class="nav-link dropdown-toggle" href="#" aria-expanded="false"></a>
                        <div class="dropdown-menu p-0">
                            <div class="card user-panel dropdown-container" style="width: 18rem;">
                                <div class="user-info p-3 m-0">
                                    <div class="user-img" style="background-image: url(<?php echo _web_root; ?>/assets/client/images/3.png);"></div>
                                    <div class="d-flex align-items-center ms-2">
                                        <span class="user-name">Admin</span>
                                    </div>
                                </div>
                                <ul class="card-body p-0 m-0">
                                    <li>
                                        <a class="logout-btn dropdown-item nav-link p-2 px-3">
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
                    <span class="navbar-text"> Hi <?php if (!empty($username)) echo $username; ?>! </span>
                    <div class="menu-user">
                        <div class="user-info p-4 m-0 mb-2">
                            <div class="user-img" style="background-image: url(<?php echo _web_root; ?>/assets/client/images/3.png);"></div>
                            <div class="d-flex align-items-center ms-3">
                                <span class="user-name">Admin</span>
                            </div>
                        </div>
                        <div class="p-0 m-0">
                            <div>
                                <a class="logout-btn nav-link p-2 px-4">
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
        </div>
        <div class="sub-nav nav">
            <div class="sub-nav-slider owl-carousel owl-theme owl-loaded">
                <div class="owl-stage-outer">
                    <div class="owl-stage">
                        <div class="owl-item">
                            <div class="nav-item">
                                <a class="nav-link <?php if ($currentPage == 'category') echo 'active'; ?> " href="<?php echo _web_root; ?>/admin/category">Category</a>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="nav-item">
                                <a class="nav-link <?php if ($currentPage == 'genre') echo 'active'; ?> " href="<?php echo _web_root; ?>/admin/genre">Genre</a>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="nav-item">
                                <a class="nav-link <?php if ($currentPage == 'anime') echo 'active'; ?> " href="<?php echo _web_root; ?>/admin/anime">Anime</a>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="nav-item">
                                <a class="nav-link <?php if ($currentPage == 'episode') echo 'active'; ?> " href="<?php echo _web_root; ?>/admin/episode">Episode</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>