<?php
    $total_product = 0;
    foreach ($sanpham as $item) {
        extract($item);
        $total_product++;
    }
    $total_user= 0;
    foreach ($nguoidung as $item) {
        extract($item);
        $total_user++;
    }
    $total_catalog = 0;
    foreach ($danhmuc as $item) {
        extract($item);
        $total_catalog++;
    }
    $home_total = 0;
    $html_bill = '';
    $stt = 1;
    foreach ($bill as $item) {
        extract($item);
        $home_total+=$total;
        $html_bill.='<tr>
                        <td>'.$stt.'</td>
                        <td>'.$code.'</td>
                        <td>đ'.number_format($total,0, ".", ",").'</td>
                    </tr>';
        $stt++;
    }
?>
<div class="main-content">
    <h3 class="title-page">
        Trang chủ
    </h3>
    <section class="statistics row">
        <div class="col-sm-12 col-md-6 col-xl-3">
            <a href="caterogies.html">
                <div class="card mb-3 widget-chart">
                    <div class="widget-subheading fsize-1 pt-2 opacity-10 text-warning font-weight-bold">
                        <h5>Tổng doanh thu</h5>
                    </div>
                    <span class="widget-numbers"><?=number_format($home_total,0, ".", ",")?>đ</span>
                </div>
            </a>
        </div>
        <div class="col-sm-12 col-md-6 col-xl-3">
            <a href="products.html">
                <div class="card mb-3 widget-chart">
                    <div class="widget-subheading fsize-1 pt-2 opacity-10 text-warning font-weight-bold">
                        <h5>Tổng sản phẩm</h5>
                    </div>
                    <span class="widget-numbers"><?=$total_product?></span>
                </div>
            </a>
        </div>
        <div class="col-sm-12 col-md-6 col-xl-3">
            <a href="user.html">
                <div class="card mb-3 widget-chart">

                    <div class="widget-subheading fsize-1 pt-2 opacity-10 text-warning font-weight-bold">
                        <h5>Tổng thành viên</h5>
                    </div>
                    <span class="widget-numbers"><?=$total_user?></span>
                </div>
            </a>
        </div>
        <div class="col-sm-12 col-md-6 col-xl-3">
            <a href="#">
                <div class="card mb-3 widget-chart">
                    <div class="widget-subheading fsize-1 pt-2 opacity-10 text-warning font-weight-bold">
                        <h5>Tổng danh mục</h5>
                    </div>
                    <span class="widget-numbers"><?=$total_catalog?></span>
                </div>
            </a>
        </div>
    </section>
    <section class="row">
        <div class="col-sm-12 col-md col xl-6">
            <div class="card chart">
                <!-- <form action="#" method="post">
                    <div class="input-group mb-3">
                        <input type="date" class="form-control" placeholder="Username" aria-label="Username">
                        <span class="input-group-text">Đến ngày</span>
                        <input type="date" class="form-control" placeholder="Server" aria-label="Server">
                        <button type="button" class="btn btn-dark">Xem</button>
                    </div>
                </form> -->
                <table class="revenue table table-hover">
                    <thead>
                        <th>#</th>
                        <th>Mã đơn hàng</th>
                        <th>Doanh thu</th>
                    </thead>
                    <tbody>
                        <?=$html_bill?>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- <div class="col-sm-12 col-md-6 col-xl-3">
            <div class="card chart">
                <h4>Đơn hàng mới</h4>
                <table class="revenue table table-hover">
                    <thead>
                        <th>Mã đơn hàng</th>
                        <th>Trạng thái</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>GIA001</td>
                            <td>Chờ duyệt</td>
                        </tr>
                        <tr>
                            <td>GIA002</td>
                            <td>Đã duyệt</td>
                        </tr>
                        <tr>
                            <td>GIA003</td>
                            <td>Chờ TT</td>
                        </tr>
                        <tr>
                            <td>GIA004</td>
                            <td>Đã duyệt</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div> -->
        <!-- <div class="col-sm-12 col-md-6 col-xl-3">
            <div class="card chart">
                <h4>Khách hàng mới</h4>
                <table class="revenue table table-hover">
                    <thead>
                        <th>#</th>
                        <th>Username</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>giangcoder1</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>giangcoder2</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>giangcoder3</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div> -->
    </section>
</div>
</div>
</div>
</body>

</html>