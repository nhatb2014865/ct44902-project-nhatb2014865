<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In | Bliibii TV</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php _web_root; ?>/assets/login/css/style.css">
</head>

<body>
    <div class="container-fluid">
        <div class="row justify-content-end">
            <div class="signin-container-left col p-3">
                <div id="carousel" class="carousel slide position-relative translate-middle-y top-50" data-bs-ride="carousel" data-ride-interval="6000">
                    <h2 class="text-secondary text-center mb-3">Wellcome !!</h2>
                    <h3 class="text-secondary text-center mb-3">Sign in to your Bliibii account.</h3>
                    <div class="carousel-inner rounded">
                        <div class="carousel-item active ">
                            <img src="<?php _web_root; ?>/assets/login/images/24c3216a869d1a40_2d7a95d90fc58953_3374916729351087118684.jpg" class="d-block ratio w-100" alt="...">
                            <div class="carousel-caption carousel-caption-secondary d-none d-md-block">
                                <h4>Watch great anime with Bliibii TV.</h4>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="carousel-caption carousel-caption-secondary d-none d-md-block">
                                <h4>Impressive anime library of your choice.</h4>
                            </div>
                            <img src="<?php _web_root; ?>/assets/login/images/ab44954c581b1a66_8af2eb6daf6fa0eb_3486616579698801118684.jpg" class="d-block ratio w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <div class="carousel-caption carousel-caption-secondary d-none d-md-block">
                                <h4>Experience Bliibii TV on multiple devices.</h4>
                            </div>
                            <img src="<?php _web_root; ?>/assets/login/images/bd8ca4efe3963ff5_67689fbbae9a20e2_10831716735199177118684.jpg" class="d-block ratio w-100" alt="...">
                        </div>
                    </div>
                </div>
            </div>
            <div class="signin-container-right col-lg-4 col-12 bg-success bg-opacity-10 p-5 pt-0">
                <div class="container">
                    <div class="row justify-content-center mb-3">
                        <img class="logo" src="<?php _web_root; ?>/assets/login/images/logo-with-brand.png" alt="">
                    </div>
                    <div class="row mb-1">
                        <form method="post" action="<?php echo _web_root ?>/login/signin">
                            <div class="position-relative mb-3">
                                <label for="InputEmail1" class="form-label form-float-label">Email</label>
                                <input name="email" type="email" class="form-control form-control-secondary" id="InputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="position-relative mb-0">
                                <label for="InputPassword" class="form-label form-float-label">Password</label>
                                <input name="password" type="password" class="form-control form-control-secondary" id="InputPassword">
                            </div>
                            <div class="mb-2 text-end">
                                <a href="#" class="link-5a5d60 text-decoration-none fs-sml fw-semibold">Forgot password?</a>
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-6bc3e7">Sign In</button>
                            </div>
                        </form>
                    </div>
                    <div class="row">
                        <div class="d-flex justify-content-center mb-2">
                            <p class="fs-sm m-0 me-1">New here? </p>
                            <a href="#" class="link-5a5d60 text-decoration-none fs-sml fw-semibold">Sign up</a>
                        </div>
                        <div>
                            <p class="fw-semibold text-center">or sign in with</p>
                        </div>
                        <div class="d-grid mb-3">
                            <a class="btn btn-primary" role="button"><i class="fa-brands fa-facebook-f pe-auto"></i> Facebook</a>
                        </div>
                        <div class="d-grid mb-3">
                            <a class="btn btn-danger" role="button"><i class="fa-brands fa-google"></i> Google</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>