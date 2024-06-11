<?php
    $html_bill='';
    foreach ($_SESSION['cart'] as $sp){
        $html_bill .= '<tr>
                        <td>'.$sp['tensp'].'</td>
                        <td>'.$sp['gia'].'</td>
                        <td style="text-align: right;">'.$sp['soluong'].'</td>
                       </tr>';
    }
?>
<!-- Page Header Start -->
<div class="container-fluid bg-secondary mb-5">
    <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
        <h1 class="font-weight-semi-bold text-uppercase mb-3">THANH TOÁN</h1>
        <div class="d-inline-flex">
            <p class="m-0"><a href="">Trang chủ</a></p>
            <p class="m-0 px-2">-</p>
            <p class="m-0">Thanh toán</p>
        </div>
    </div>
</div>
<!-- Page Header End -->


<!-- Checkout Start -->
<div class="container-fluid pt-5">
    <div class="row px-xl-5">
        <div class="col-lg-6">
            <div class="mb-4">
                <form action="?ctrl=product&view=confirm_order" method="post">
                    <h4 class="font-weight-semi-bold mb-4">Thông tin hóa đơn</h4>
                    <div class="row">
                        <div class="col-lg form-group">
                            <label>Họ tên</label>
                            <input class="col form-control" type="text" name="name" placeholder="Thang"
                                value="<?php echo isset($_SESSION['user']) ? $_SESSION['user']['name'] : ''; ?>">
                            <label>E-mail</label>
                            <input class="form-control" type="text" name="email" placeholder="example@email.com"
                                value="<?php echo isset($_SESSION['user']) ? $_SESSION['user']['email'] : ''; ?>">
                            <label>SĐT</label>
                            <input class="form-control" type="text" name="phone" placeholder="+123 456 789"
                                value="<?php echo isset($_SESSION['user']) ? $_SESSION['user']['phone'] : ''; ?>">
                            <label>Địa chỉ</label>
                            <input class="form-control" type="text" name="address" placeholder="123 Street"
                                value="<?php echo isset($_SESSION['user']) ? $_SESSION['user']['address'] : ''; ?>">
                        </div>
                        <div class="col-md-12 form-group">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="shipto">
                                <label class="custom-control-label" for="shipto" data-toggle="collapse"
                                    data-target="#shipping-address">Giao địa chỉ khác</label>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="collapse mb-4" id="shipping-address">
                <h4 class="font-weight-semi-bold mb-4">Địa chỉ giao</h4>
                <div class="row">
                    <div class="col-md-6 form-group">
                        <label>Họ Tên</label>
                        <input class="form-control" type="text" name="name_nhan" id="ten_nhan" placeholder="Thang">
                    </div>
                    <div class="col-md-6 form-group">
                        <label>Số điện thoại</label>
                        <input class="form-control" type="text" name="phone_nhan" id="phone_nhan"
                            placeholder="+123 456 789">
                    </div>
                    <div class="col-md-6 form-group">
                        <label>Địa chỉ</label>
                        <input class="form-control" type="text" name="address_nhan" id="address_nhan"
                            placeholder="123 Street">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card border-secondary mb-5">
                <div class="card-header bg-secondary border-0">
                    <h4 class="font-weight-semi-bold m-0">Thông tin đơn hàng</h4>
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <table class="table table-bordered text-center mb-0">
                            <thead class="bg-secondary text-dark">
                                <tr>
                                    <th>Sản phẩm</th>
                                    <th>Giá</th>
                                    <th>Size</th>
                                    <th>Số lượng</th>
                                </tr>
                            </thead>
                            <tbody class="align-middle">
                                <?php $thanhtien=0; ?>
                                <?php foreach($_SESSION['cart'] as $sp): 
                                    $tong = $sp['gia']*$sp['soluong'];
                                    $thanhtien+=$tong
                                ?>
                                <tr>
                                    <td class="align-middle"><?=$sp['tensp']?><img src="upload/img/<?=$sp['imgsp']?>"
                                            alt="" style="width: 50px;"></td>
                                    <td class="align-middle"><?=number_format($sp['gia'],0, ".", ",")?>đ</td>
                                    <td class="align-middle"><?=$sp['size']?></td>
                                    <td class="align-middle"><?=$sp['soluong']?></td>
                                </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- <hr class="mt-0">
                     <div class="d-flex justify-content-between mb-3 pt-1">
                         <h6 class="font-weight-medium">Subtotal</h6>
                         <h6 class="font-weight-medium">$150</h6>
                     </div>
                     <div class="d-flex justify-content-between">
                         <h6 class="font-weight-medium">Shipping</h6>
                         <h6 class="font-weight-medium">$10</h6>
                     </div> -->
                </div>
                <div class="card-footer border-secondary bg-transparent">
                    <div class="d-flex justify-content-between mt-2">
                        <h5 class="font-weight-bold">Total</h5>
                        <h5 class="font-weight-bold"><?=number_format($thanhtien,0, ".", ",")?>đ</h5>
                    </div>
                </div>

            </div>
            <div class="card border-secondary mb-5">
                <div class="card-header bg-secondary border-0">
                    <h4 class="font-weight-semi-bold m-0">Hình thức thanh toán</h4>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" name="payment" value="1" id="momo">
                            <label class="custom-control-label" for="momo">Thanh toán MOMO</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" name="payment" value="2" id="direct">
                            <label class="custom-control-label" for="direct">Thanh toán trực tiếp</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" name="payment" value="3" id="banktransfer">
                            <label class="custom-control-label" for="banktransfer">Chuyển khoản ngân hàng</label>
                        </div>
                    </div>

                </div>
                <?php if(isset($_SESSION['user'])): ?>
                <div class="card-footer border-secondary bg-transparent">
                    <button type="submit" name="orders" class="btn-primary font-weight-bold my-3">Thanh toán</button>
                </div>
                <?php else: ?>
                <div class="card-footer border-secondary bg-transparent">
                    <button type="submit" class="btn-primary font-weight-bold my-3"><a href="?ctrl=user&view=login">Đăng
                            nhập để thanh toán</a></button>
                </div>
            </div>
            </form>
            <?php endif ?>
        </div>
    </div>
</div>
<!-- Checkout End -->