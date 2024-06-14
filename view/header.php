<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>33Store</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="view/layout/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="view/layout/css/login.css">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid">
        <div class="row bg-secondary py-2 px-xl-5">
            <div class="col-lg-6 d-none d-lg-block">
                <div class="d-inline-flex align-items-center">
                    <a class="text-dark" href="">Câu Hỏi</a>
                    <span class="text-muted px-2">|</span>
                    <a class="text-dark" href="">Giúp đỡ</a>
                    <span class="text-muted px-2">|</span>
                    <a class="text-dark" href="">Hỗ Trợ</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row align-items-center py-3 px-xl-5">
        <div class="col-lg-3 d-none d-lg-block">
            <a href="" class="text-decoration-none">
                <h1 class="m-0 display-5 font-weight-semi-bold"><a href="?ctrl=page&view=home">33Store</a></h1>
            </a>
        </div>
        <div class="col-lg-6 col-6 text-left">
            <form action="">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search...">
                    <div class="input-group-append">
                        <span class="input-group-text bg-transparent text-primary">
                            <i class="fa fa-search"></i>
                        </span>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-lg-3 col-6 text-right">
            <a href="" class="btn border">
                <i class="fas fa-heart text-primary"></i>
                <!-- <span class="badge">0</span> -->
            </a>
            <a href="?ctrl=product&view=cart" class="btn border">
                <i class="fas fa-shopping-cart text-primary"></i>
                <!-- <span class="badge">0</span> -->
            </a>
        </div>
    </div>
    </div>
    <!-- Topbar End -->
    <!-- Navbar Start -->
    <div class="container-fluid mb-5">
        <div class="row border-top px-xl-5">
            <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0 w-100">
                <a href="" class="text-decoration-none d-block d-lg-none mx-auto">
                    <h1 class="m-0 display-5 font-weight-semi-bold">33Store</h1>
                </a>
                <button type="button" class="navbar-toggler mx-auto" data-toggle="collapse"
                    data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="navbarCollapse">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="?ctrl=page&view=home" class="nav-link active">Trang chủ</a>
                        </li>
                        <li class="nav-item">
                            <a href="?ctrl=page&view=product" class="nav-link">Cửa hàng</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Trang</a>
                            <div class="dropdown-menu rounded-0 m-0">
                                <a href="?ctrl=product&view=cart" class="dropdown-item">Giỏ Hàng</a>
                                <a href="?ctrl=product&view=checkout" class="dropdown-item">Thanh Toán</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a href="contact.html" class="nav-link">Liên Hệ</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ml-auto">
                        <?php if(!isset($_SESSION['user'])): ?>
                        <li class="nav-item">
                            <a href="?ctrl=user&view=login" class="nav-link">Đăng nhập</a>
                        </li>
                        <li class="nav-item">
                            <a href="?ctrl=user&view=register" class="nav-link">Đăng ký</a>
                        </li>
                        <?php else: ?>
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                            <span id="user-info"><?=$_SESSION['user']['name']?></span>
                            <img src="upload/avatar/<?=$_SESSION['user']['img_user']?>" style="width: 60px;" alt="">
                        </a>
                        <li class="nav-item dropdown">
                            <div class="dropdown-menu dropdown-menu-right rounded-0 m-0">
                                <?php if($_SESSION['user']['role'] == 1):?>
                                <a href="admin/index.php?page=home" class="dropdown-item">Trang quản trị</a>
                                <?php endif ?>
                                <a href="?ctrl=user&view=profile" class="dropdown-item">Hồ sơ</a>
                                <a href="?ctrl=user&view=logout" class="dropdown-item">Đăng xuất</a>
                            </div>
                        </li>
                        <?php endif ?>
                    </ul>
                </div>
            </nav>
        </div>
    </div>

    <!-- Navbar End -->