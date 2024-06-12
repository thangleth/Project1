<?php
$billdetail_html = '';
$stt = 1;
    foreach ($id_billdetail as $item) {
        extract($item);
        $billdetail_html .= '<tr>
                                <td class="sticky-col">' . $stt . '</td>
                                <td>' . $tensp . '</td>
                                <td><img src="upload/images/'.$imgsp.'" alt="" style="width: 80px;"></td>
                                <td>' . $gia . '</td>
                                <td>' . $soluong . '</td>
                            </tr>';
        $stt++;
    }
?>
<div class="main-content">
    <h3 class="title-page">
        Chi tiết đơn hàng
    </h3>
    <div class="d-flex justify-content-end">
    </div>
    <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th class="sticky-col">STT</th>
                <th>Tên sản phẩm</th>
                <th>Hình ảnh</th>
                <th>Số lượng</th>
                <th>Giá</th>
            </tr>
        </thead>
        <?php
        ?>
        <tbody><?=$billdetail_html?></tbody>
        <tfoot>
            <tr>
                <th class="sticky-col">STT</th>
                <th>Tên sản phẩm</th>
                <th>Hình ảnh</th>
                <th>Số lượng</th>
                <th>Giá</th>
            </tr>
        </tfoot>
    </table>
</div>
</div>
</div>
</body>

</html>