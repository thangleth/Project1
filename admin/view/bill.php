<?php
$bill_html = '';
$stt = 1;
    foreach ($bill as $item) {
        extract($item);
        $linkdetail = '<a href="index.php?page=bill_detail&id=' . $id . '" class="btn btn-success m-1">Chi tiết</a>';
        $linkedit = '<a href="index.php?page=updatebillform&id=' . $id . '" class="btn btn-warning m-1">Sửa</a>';
        $linkdelete = '<a href="index.php?page=deletedm&id=' . $id . '" class="btn btn-danger"> Xóa</a>';
        $bill_html .= '<tr>
                            <td class="sticky-col">' . $stt . '</td>
                            <td>' . $code . '</td>
                            <td>' . $name . '</td>
                            <td>' . $email . '</td>
                            <td>' . $phone . '</td>
                            <td>' . $address . '</td>
                            <td>' . $payment_method . '</td>
                            <td>' . $total . '</td>
                            <td>'.$status.'</td>
                            <td>'.$create_at.'</td>
                            <td>'.$linkdetail.'' . $linkedit . '' . $linkdelete . '</td>
                        </tr>';
        $stt++;
    }
?>
<div class="main-content">
    <h3 class="title-page">
        Đơn hàng
    </h3>
    <div class="d-flex justify-content-end">
    </div>
    <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th class="sticky-col">STT</th>
                <th>Mã đơn hàng</th>
                <th>Tên khách hàng</th>
                <th>Email</th>
                <th>Số điện thoại</th>
                <th>Địa chỉ</th>
                <th>Phương thức thanh toán</th>
                <th>Tổng tiền</th>
                <th>Trạng thái</th>
                <th>Ngày đặt</th>
                <th>Thao tác</th>
            </tr>
        </thead>
        <?php
        ?>
        <tbody><?=$bill_html?></tbody>
        <tfoot>
            <tr>
                <th>STT</th>
                <th>Mã đơn hàng</th>
                <th>Tên khách hàng</th>
                <th>Email</th>
                <th>Số điện thoại</th>
                <th>Địa chỉ</th>
                <th>Phương thức thanh toán</th>
                <th>Tổng tiền</th>
                <th>Trạng thái</th>
                <th>Ngày đặt</th>
                <th>Thao tác</th>
            </tr>
        </tfoot>
    </table>
</div>
</div>
</div>
</body>

</html>