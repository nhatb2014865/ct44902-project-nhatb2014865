<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <title>admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
        crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo _web_root; ?>/assets/admin/css/style.css">
</head>

<body>
    <header>
        <nav class="navbar navbar-dark navbar-expand-xl fixed-top bg-dark">
            <div class="container-fluid">
                <button class="navbar-toggler me-5" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" data-bs-target="#navbarToggleExternalContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a id="logo navbar-brand" href="#"><img class="logo" src="<?php echo _web_root; ?>/assets/admin/images/logo.png"
                        alt="logo-img"></a>
                <span class="welcome-text navbar-text text-light ms-auto">Hi Admin!</span>
                <a class="nav-link text-light mx-3" href="<?php echo _web_root.'/login/signout'; ?>"><i class="fa-solid fa-power-off"></i></a>
            </div>
        </nav>
        <div class="admin-slidebar bg-dark collapse" id="navbarSupportedContent">
            <div class="container pt-3">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link text-info" href="#">Danh Mục</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#">Danh Sách Phim</a>
                    </li>
                </ul>
            </div>
        </div>
    </header>
    <main>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto, a, inventore hic velit assumenda error enim sequi praesentium architecto accusamus aperiam cum aliquam tempore quia ipsam minus obcaecati esse repudiandae!
    </main>
    <script src="https://code.jquery.com/jquery-3.6.3.js"
        integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
    <script src="<?php echo _web_root; ?>/assets/admin/js/script.js"></script>
    <script>
        window.onload = function () {
            reponsiveScreen();
        }
        window.onresize = function () {
            reponsiveScreen();
        }
    </script>
</body>

</html>