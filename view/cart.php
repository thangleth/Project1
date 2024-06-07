<!-- Page Header Start -->
<div class="container-fluid bg-secondary mb-5">
    <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
        <h1 class="font-weight-semi-bold text-uppercase mb-3">Giỏ hàng</h1>
        <div class="d-inline-flex">
            <p class="m-0"><a href="">Trang chủ</a></p>
            <p class="m-0 px-2">-</p>
            <p class="m-0">Giỏ hàng</p>
        </div>
    </div>
</div>
<!-- Page Header End -->


<!-- Cart Start -->
<div class="container-fluid pt-5">
    <div class="row px-xl-5">
        <div class="col-lg-8 table-responsive mb-5">
            <table class="table table-bordered text-center mb-0">
                <thead class="bg-secondary text-dark">
                    <tr>
                        <th>Sản phẩm</th>
                        <th>Giá</th>
                        <th>Size</th>
                        <th>Số lượng</th>
                        <th>Tổng</th>
                        <th>Thao tác</th>
                    </tr>
                </thead>
                <tbody class="align-middle">
                    <?php
                $i=0;
                $thanhtien = 0;
                foreach($_SESSION['cart'] as $sp){
                    extract($sp);
                    $tong = $sp['gia']*$sp['soluong'];
                    $thanhtien = $tong + $thanhtien;
                    echo '<tr>
                            <td class="align-middle"><img src="upload/img/'.$sp['imgsp'].'" alt="" style="width: 50px;">'.$sp['tensp'].'</td>
                            <td class="align-middle">'.number_format($sp['gia'],0, ".", ",").'</td>
                            <td class="align-middle">'.$sp['size'].'</td>
                            <td class="align-middle">
                                <div class="input-group quantity mx-auto" style="width: 100px;">
                                    <div class="input-group-btn">
                                        <a href="?ctrl=product&view=giam&index='.$i.'" class="btn btn-sm btn-primary btn-minus" >
                                            <i class="fa fa-minus"></i>
                                        </a>
                                    </div>
                                    <input type="text" class="form-control form-control-sm bg-secondary text-center" value="'.$sp['soluong'].'">
                                    <div class="input-group-btn">
                                        <a href="?ctrl=product&view=tang&index='.$i.'" class="btn btn-sm btn-primary btn-plus">
                                            <i class="fa fa-plus"></i>
                                        </a>
                                    </div>
                                </div>
                            </td>
                            <td class="align-middle">'.number_format($tong,0, ".", ",").'</td>
                            <td class="align-middle"><a href="?ctrl=product&view=removeCart&index='.$i.'" class="btn btn-sm btn-primary"><i class="fa fa-times"></i></a></td>
                        </tr>';
                    $i++;    
                    }
                    ?>
                </tbody>
            </table>
            <td class="align-right"><a href="?ctrl=product&view=removeAllCart" class="btn btn-sm btn-primary">Xóa giỏ
                    hàng</a></td>
        </div>
        <div class="col-lg-4">
            <form class="mb-5" action="">
                <div class="input-group">
                    <input type="text" class="form-control p-4" placeholder="Coupon Code">
                    <div class="input-group-append">
                        <button class="btn btn-primary">Áp dụng khuyến mãi</button>
                    </div>
                </div>
            </form>
            <div class="card border-secondary mb-5">
                <div class="card-header bg-secondary border-0">
                    <h4 class="font-weight-semi-bold m-0">Tổng giỏ hàng</h4>
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-between mb-3 pt-1">
                        <h6 class="font-weight-medium">Giá tiền</h6>
                        <h6 class="font-weight-medium"><?=number_format($thanhtien,0, ".", ",")?>đ</h6>
                    </div>
                    <!-- <div class="d-flex justify-content-between">
                        <h6 class="font-weight-medium">Giao hàng</h6>
                        <h6 class="font-weight-medium">0</h6>
                    </div> -->
                </div>
                <div class="card-footer border-secondary bg-transparent">
                    <div class="d-flex justify-content-between mt-2">
                        <h5 class="font-weight-bold">Tổng</h5>
                        <h5 class="font-weight-bold"><?=number_format($thanhtien,0, ".", ",")?>đ</h5>
                    </div>
                    <button class="btn btn-block btn-primary my-3 py-3">Thanh toán</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Cart End -->