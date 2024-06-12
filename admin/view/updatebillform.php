<?php
var_dump($id_bill);
extract($id_bill);
$status_options = ['Thành Công', 'Chờ Xử Lí', 'Tạm Ngưng'];
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
                <th class="sticky-col">Mã đơn hàng</th>
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
        <form class="" action="index.php?page=update_bill" method="POST">
            <tbody>
                <tr>
                    <td class="sticky-col"><?=$code?></td>
                    <td><?=$name?></td>
                    <td><?=$email?></td>
                    <td><?=$phone?></td>
                    <td><?=$address?></td>
                    <td><?=$payment_method?></td>
                    <td><?=$total?></td>
                    <td>
                        <select name="status" class="form-control">
                            <?php foreach ($status_options as $option): ?>
                            <option value="<?= $option ?>" <?= $option == $status ? 'selected' : '' ?>><?= $option ?>
                            </option>
                            <?php endforeach; ?>
                        </select>
                    </td>
                    <td><?=$create_at?></td>
                    <td>
                        <button type="submit" name="btnupdatebill" class="btn btn-primary">Xác nhận</button>
                        <input type="hidden" name="id" value="<?=$id?>">
                    </td>
                </tr>
            </tbody>
        </form>
        <tfoot>
            <tr>
                <th class="sticky-col">Mã đơn hàng</th>
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