<?php
    $html_related_product = '';
    foreach ($sp_lienquan as $item){
        extract($item);
        $html_related_product .='<div class="card product-item border-0 col-3">
                            <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                <img class="img-fluid w-100" src="upload/img/'.$imgsp.'" alt="">
                            </div>
                            <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                                <h6 class="text-truncate mb-3">'.$tensp.'</h6>
                                <div class="d-flex justify-content-center">
                                    <h6>'.number_format($gia,0, ".", ",").'đ</h6>
                                    <h6 class="text-muted ml-2"><del>'.number_format($gia,0, ".", ",").'đ</del></h6>
                                </div>
                            </div>
                            <div class="card-footer d-flex justify-content-center mt-2 bg-light border">
                                <a href="?ctrl=product&view=detail&id='.$idsp.'" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>Xem chi tiết</a>
                            </div>
                        </div>';
    }
?>

<!-- Page Header Start -->
<div class="container-fluid bg-secondary mb-5">
    <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
        <h1 class="font-weight-semi-bold text-uppercase mb-3">Chi tiết</h1>
        <div class="d-inline-flex">
            <p class="m-0"><a href="">Sản phẩm</a></p>
            <p class="m-0 px-2">-</p>
            <p class="m-0">Chi tiết</p>
        </div>
    </div>
</div>
<!-- Page Header End -->

<!-- Shop Detail Start -->
<div class="container-fluid py-5">
    <div class="row px-xl-5">
        <div class="col-lg-5 pb-5">
            <div id="product-carousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner border">
                    <div class="carousel-item active">
                        <img class="w-100 h-100" src="upload/img/<?=$sp["imgsp"]?>" alt="Image">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#product-carousel" data-slide="prev">
                    <i class="fa fa-2x fa-angle-left text-dark"></i>
                </a>
                <a class="carousel-control-next" href="#product-carousel" data-slide="next">
                    <i class="fa fa-2x fa-angle-right text-dark"></i>
                </a>
            </div>
        </div>

        <div class="col-lg-7 pb-5">
            <h3 class="font-weight-semi-bold">
                <?=$sp["tensp"]?>
            </h3>
            <div class="d-flex mb-3">
                <div class="text-primary mr-2">
                    <small class="fas fa-star"></small>
                    <small class="fas fa-star"></small>
                    <small class="fas fa-star"></small>
                    <small class="fas fa-star-half-alt"></small>
                    <small class="far fa-star"></small>
                </div>
                <small class="pt-1">(50 Reviews)</small>
            </div>
            <h3 class="font-weight-semi-bold mb-4"><?=number_format($sp["gia"], 0, ".", ",")?>đ</h3>
            <div class="d-flex mb-3">
                <p class="text-dark font-weight-medium mb-0 mr-3">Sizes:</p>
                <form id="sizeForm">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" id="size-39" name="size" value="39">
                        <label class="custom-control-label" for="size-39">39</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" id="size-40" name="size" value="40">
                        <label class="custom-control-label" for="size-40">40</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" id="size-41" name="size" value="41">
                        <label class="custom-control-label" for="size-41">41</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" id="size-42" name="size" value="42">
                        <label class="custom-control-label" for="size-42">42</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" id="size-43" name="size" value="43">
                        <label class="custom-control-label" for="size-43">43</label>
                    </div>
                </form>
            </div>

            <div class="d-flex align-items-center mb-4 pt-2">
                <a href="#" id="addToCartBtn" class="btn btn-primary px-3"><i class="fa fa-shopping-cart mr-1"></i>Thêm
                    giỏ hàng</a>
            </div>
            <div id="notification" style="display: none; color: red;">Vui lòng chọn size trước khi thêm vào giỏ hàng.
            </div>
            <div class="d-flex pt-2">
                <p class="text-dark font-weight-medium mb-0 mr-2">Share on:</p>
                <div class="d-inline-flex">
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-pinterest"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="row px-xl-5">
        <div class="col">
            <div class="nav nav-tabs justify-content-left border-secondary mb-4">
                <a class="nav-item nav-link" data-toggle="tab" href="#tab-pane-3">Reviews</a>
            </div>
            <div class="tab-content">
                <div class="tab-pane fade" id="tab-pane-3">
                    <div class="row">
                        <div class="col-md-6">
                            <!-- <h4 class="mb-4">1 review for "Colorful Stylish Shirt"</h4> -->
                            <?php 
                            foreach($list_comment as $bl){
                                echo '<div class="media mb-4">
                                            <div class="media-body">
                                                <h6>'.$bl['name'].'<small> - <i>'.$bl['ngaytao'].'</i></small></h6>
                                                <p>'.$bl['noidung'].'</p>
                                            </div>
                                        </div>';
                            }
                            ?>
                        </div>
                        <div class="col-md-6">
                            <h4 class="mb-4">Bình luận</h4>
                            <?php if(isset($_SESSION['user'])):?>
                            <form action="?ctrl=comment&view=add" method="post">
                                <div class="form-group">
                                    <label for="message">Bình luận</label>
                                    <textarea name="comment" id="comment" cols="30" rows="5"
                                        class="form-control"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="name">Họ tên</label>
                                    <input type="text" class="form-control" id="name">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email">
                                </div>
                                <div class="form-group mb-0">
                                    <input type="submit" value="Bình luận" class="btn btn-primary px-3">
                                </div>
                                <input type="hidden" name="idsp" value="<?=$sp['idsp']?>">
                            </form>
                            <?php else: ?>
                            Vui lòng <a href="?ctrl=user&view=login">Đăng nhập</a> để có thể bình luận
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Shop Detail End -->

    <!-- Products Start -->
    <div class="container-fluid py-5">
        <div class="text-center mb-4">
            <h2 class="section-title px-5"><span class="px-2">Sản phẩm tương tự</span></h2>
        </div>
        <div class="row px-xl-5">
            <div class="row">
                <?=$html_related_product?>
            </div>
        </div>

    </div>
    <!-- Products End -->

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const sizeForm = document.getElementById('sizeForm');
        const addToCartBtn = document.getElementById('addToCartBtn');
        const notification = document.getElementById('notification');
        let selectedSize = null;

        sizeForm.addEventListener('change', function(e) {
            if (e.target.name === 'size') {
                selectedSize = e.target.value;
                const productId = "<?= $sp['idsp'] ?>";
                addToCartBtn.href = `?ctrl=product&view=addCart&id=${productId}&size=${selectedSize}`;
                notification.style.display = 'none';

                console.log(`Selected size: ${selectedSize}`);
            }
        });

        addToCartBtn.addEventListener('click', function(e) {
            if (!selectedSize) {
                e.preventDefault();
                notification.style.display = 'block';

                console.log('No size selected. Showing notification.');
            }
        });
        console.log('Event listeners attached.');
    });
    </script>