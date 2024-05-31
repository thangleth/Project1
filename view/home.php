<?php
    $html_product_feature = "";
    foreach ($product_feature as $item){
        extract($item);
        $html_product_feature .='
                                    <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                                        <div class="card product-item border-0 mb-4">
                                            <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                                <img class="img-fluid w-100" src="view/layout/img/'.$item["imgsp"].'" alt="">
                                            </div>
                                            <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                                                <h6 class="text-truncate mb-3">'.$tensp.'</h6>
                                                <div class="d-flex justify-content-center">
                                                <h6>đ '.number_format($gia,0, ".", ",") .'</h6>
                                                </div>
                                            </div>
                                            <div class="card-footer d-flex justify-content-between bg-light border">
                                                <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>Xem chi
                                                    tiết</a>
                                                <a href="" class="btn btn-sm text-dark p-0"><i
                                                        class="fas fa-shopping-cart text-primary mr-1"></i>Thêm vào giỏ hàng</a>
                                            </div>
                                        </div>
                                    </div>
                                ';
    }

    $html_product_new = "";
    foreach ($product_new as $item){
        extract($item);
        $html_product_new .= '<div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                                <div class="card product-item border-0 mb-4">
                                    <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                        <img class="img-fluid w-100" src="view/layout/img/'.$item["imgsp"].'" alt="">
                                    </div>
                                    <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                                        <h6 class="text-truncate mb-3">'.$tensp.'</h6>
                                        <div class="d-flex justify-content-center">
                                            <h6>đ '.number_format($gia,0, ".", ",") .'</h6>
                                        </div>
                                    </div>
                                    <div class="card-footer d-flex justify-content-between bg-light border">
                                        <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View
                                            Detail</a>
                                        <a href="" class="btn btn-sm text-dark p-0"><i
                                                class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
                                    </div>
                                </div>
                            </div>';
    }
?>


<div id="header-carousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active" style="height: 410px;">
            <img class="img-fluid" src="view/layout/img/slide1.jpg" alt="Image">
            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                <div class="p-3" style="max-width: 700px;">
                    <h4 class="text-light text-uppercase font-weight-medium mb-3">Giảm 10% cho đơn hàng
                        đầu tiên</h4>
                    <h3 class="display-4 text-white font-weight-semi-bold mb-4">Giày chạy bộ | Giày bóng
                        rổ</h3>
                    <a href="index.php?page=product" class="btn btn-light py-2 px-3">Shop Now</a>
                </div>
            </div>
        </div>
        <div class="carousel-item" style="height: 410px;">
            <img class="img-fluid" src="view/layout/img/slide2.jpg" alt="Image">
            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                <div class="p-3" style="max-width: 700px;">
                    <h4 class="text-light text-uppercase font-weight-medium mb-3">Giảm 10% cho đơn hàng
                        đầu tiên</h4>
                    <h3 class="display-4 text-white font-weight-semi-bold mb-4">Giá cả hợp lí</h3>
                    <a href="" class="btn btn-light py-2 px-3">Shop Now</a>
                </div>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
        <div class="btn btn-dark" style="width: 45px; height: 45px;">
            <span class="carousel-control-prev-icon mb-n2"></span>
        </div>
    </a>
    <a class="carousel-control-next" href="#header-carousel" data-slide="next">
        <div class="btn btn-dark" style="width: 45px; height: 45px;">
            <span class="carousel-control-next-icon mb-n2"></span>
        </div>
    </a>
</div>
<!-- Featured Start -->
<div class="container-fluid pt-5">
    <div class="row px-xl-5 pb-3">
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
            <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                <h1 class="fa fa-check text-primary m-0 mr-3"></h1>
                <h5 class="font-weight-semi-bold m-0">Sản phẩm chất lượng</h5>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
            <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                <h1 class="fa fa-shipping-fast text-primary m-0 mr-2"></h1>
                <h5 class="font-weight-semi-bold m-0">Miễn phí ship</h5>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
            <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                <h1 class="fas fa-exchange-alt text-primary m-0 mr-3"></h1>
                <h5 class="font-weight-semi-bold m-0">Hoàn trả 14 ngày</h5>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
            <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                <h1 class="fa fa-phone-volume text-primary m-0 mr-3"></h1>
                <h5 class="font-weight-semi-bold m-0">Hỗ trợ 24/7</h5>
            </div>
        </div>
    </div>
</div>
<!-- Featured End -->


<!-- Categories Start -->
<div class="container-fluid pt-5">
    <div class="row px-xl-5 pb-3">
        <div class="col-lg-4 col-md-6 pb-1">
            <div class="cat-item d-flex flex-column border mb-4" style="padding: 30px;">
                <p class="text-right">15 sản phẩm</p>
                <a href="" class="cat-img position-relative overflow-hidden mb-3">
                    <img class="img-fluid" style="height: 400px; width: 400px;" src="view/layout/img/trend1.jpg"
                        alt=" ">
                </a>
                <h4 class="font-weight-semi-bold m-0">Thời trang</h4>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 pb-1">
            <div class="cat-item d-flex flex-column border mb-4" style="padding: 30px;">
                <p class="text-right">15 sản phẩm</p>
                <a href="" class="cat-img position-relative overflow-hidden mb-3">
                    <img class="img-fluid" style="height: 400px; width: 400px" src="view/layout/img/trend2.jpg" alt="">
                </a>
                <h4 class="font-weight-semi-bold m-0">Chạy bộ</h4>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 pb-1">
            <div class="cat-item d-flex flex-column border mb-4" style="padding: 30px;">
                <p class="text-right">15 sản phẩm</p>
                <a href="" class="cat-img position-relative overflow-hidden mb-3">
                    <img class="img-fluid" style="height: 400px; width: 400px" src="view/layout/img/trend3.jpg" alt="">
                </a>
                <h4 class="font-weight-semi-bold m-0">Bóng rổ</h4>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 pb-1">
            <div class="cat-item d-flex flex-column border mb-4" style="padding: 30px;">
                <p class="text-right">15 sản phẩm</p>
                <a href="" class="cat-img position-relative overflow-hidden mb-3">
                    <img class="img-fluid" style="height: 400px; width: 400px" src="view/layout/img/trend4.jpg" alt="">
                </a>
                <h4 class="font-weight-semi-bold m-0">Tập luyện</h4>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 pb-1">
            <div class="cat-item d-flex flex-column border mb-4" style="padding: 30px;">
                <p class="text-right">15 sản phẩm </p>
                <a href="" class="cat-img position-relative overflow-hidden mb-3">
                    <img class="img-fluid" style="height: 400px;" src="view/layout/img/trend5.jpg" alt="">
                </a>
                <h4 class="font-weight-semi-bold m-0">Dép</h4>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 pb-1">
            <div class="cat-item d-flex flex-column border mb-4" style="padding: 30px;">
                <p class="text-right">15 sản phẩm</p>
                <a href="" class="cat-img position-relative overflow-hidden mb-3">
                    <img class="img-fluid" style="height: 400px;" src="view/layout/img/trend6.jpg" alt="">
                </a>
                <h4 class="font-weight-semi-bold m-0">Phụ kiện</h4>
            </div>
        </div>
    </div>
</div>
<!-- Categories End -->


<!-- Offer Start -->
<div class="container-fluid offer pt-5">
    <div class="row px-xl-5">
        <div class="col-md-6 pb-4">
            <div class="position-relative bg-secondary text-center text-md-right text-white mb-2 py-5 px-5">
                <img src="view/layout/img/promotion1.jpg" alt="">
                <div class="position-relative" style="z-index: 1;">
                    <h5 class="text-uppercase text-primary mb-3">Giảm 10% cho tất cả các đơn hàng </h5>
                    <h1 class="mb-4 font-weight-semi-bold">Giày thể thao</h1>
                    <a href="" class="btn btn-outline-primary py-md-2 px-md-3">Shop Now</a>
                </div>
            </div>
        </div>
        <div class="col-md-6 pb-4">
            <div class="position-relative bg-secondary text-center text-md-left text-white mb-2 py-5 px-5">
                <img src="view/layout/img/promotion2.jpg" alt="">
                <div class="position-relative" style="z-index: 1;">
                    <h5 class="text-uppercase text-primary mb-3">Giảm 10% cho tất cả các đơn hàng</h5>
                    <h1 class="mb-4 font-weight-semi-bold">Phụ kiện</h1>
                    <a href="" class="btn btn-outline-primary py-md-2 px-md-3">Shop Now</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Offer End -->


<!-- Products Start -->
<div class="container-fluid pt-5">
    <div class="text-center mb-4">
        <h2 class="section-title px-5"><span class="px-2">SẢN PHẨM NỔI BẬT</span></h2>
    </div>
    <div class="row px-xl-5 pb-3">
        <?=$html_product_feature?>
    </div>
</div>
<!-- Products End -->


<!-- Subscribe Start -->
<div class="container-fluid bg-secondary my-5">
    <div class="row justify-content-md-center py-1 px-xl-5">
        <div class="col-md-6 col-12 py-5">
            <div class="text-center mb-2 pb-2">
                <h2 class="section-title px-5 mb-3"><span class="bg-secondary px-2">LÀM MEMBER, GIẢM GIÁ SỐC?</span>
                </h2>
                <a href=""><button class="btn btn-primary btn-lg">Đăng kí</button></a>
            </div>
        </div>
    </div>
</div>
<!-- Subscribe End -->


<!-- Products Start -->
<div class="container-fluid pt-5">
    <div class="text-center mb-4">
        <h2 class="section-title px-5"><span class="px-2">SẢN PHẨM MỚI</span></h2>
    </div>
    <div class="row px-xl-5 pb-3">
        <?=$html_product_new?>
    </div>
</div>
<!-- Products End -->