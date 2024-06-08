<?php
extract($detail);
$imgsp = $imgsp != '' ? '../' . PATH_IMG . $imgsp : '';
$img_display = $imgsp && file_exists($imgsp) ? '<img src="' . $imgsp . '" alt="" style="width: 120px;">' : 'Sản phẩm chưa có hình!';
$catalog_html = '';

foreach ($danhmuc as $item) {
    extract($item);
    $selected = $iddm == $detail['iddm'] ? 'selected' : '';
    $catalog_html .= '<option value="' . $iddm . '" ' . $selected . '>' . $tendm . '</option>';
}
?>

<div class="main-content">
    <form class="addPro" action="index.php?page=updatesp" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="categories">Danh mục:</label>
            <select class="form-select" aria-label="Default select example" name="iddm">
                <option selected>Chọn danh mục</option>
                <?= $catalog_html ?>
            </select>
        </div>
        <div class="form-group">
            <label for="name">Tên sản phẩm:</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Nhập tên sản phẩm"
                value="<?= $detail['tensp'] ?>">
        </div>
        <div class="form-group">
            <label for="price">Giá sản phẩm:</label>
            <input type="text" class="form-control" name="price" id="price" placeholder="Nhập giá sản phẩm"
                value="<?= $detail['gia'] ?>">
        </div>
        <div class="form-group">
            <label for="exampleInputFile">Ảnh sản phẩm</label>
            <div class="custom-file">
                <input type="file" name="image" class="custom-file-input" id="exampleInputFile">
                <br><?= $img_display ?>
            </div>
        </div>
        <div class="form-group">
            <button type="submit" name="btnupdatesp" class="btn btn-primary">Submit</button>
            <input type="hidden" name="imgcu" value="<?= $imgsp ?>">
            <input type="hidden" name="idsp" value="<?= $idsp ?>">
        </div>
    </form>
</div>