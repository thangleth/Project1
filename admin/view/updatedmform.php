<?php
extract($dmone);
$imgdm='';
    if($imgdm!=''){
        $imgdm='../'.PATH_IMG.$imgdm;
        if(file_exists($imgdm)){
            $imgdm='<img src="' . $imgdm. '" alt="" style="width: 120px;">';
        }else{
            $imgdm ='Sản phẩm chưa có hình!';
        }

    }
?>

<div class="main-content">
    <form class="addPro" action="index.php?page=updatedm" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="name">Tên danh mục:</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Nhập tên danh mục"
                value="<?=$tendm?>">
        </div>
        <div class="form-group">
            <label for="exampleInputFile">Ảnh sản phẩm</label>
            <div class="custom-file">
                <input type="file" name="image" class="custom-file-input" id="exampleInputFile" value="<?=$imgdm?>">
                <br><?= $imgdm ?>
            </div>
        </div>
        <div class="form-group">
            <label>Hiển thị trang chủ</label>
            <input class="form-control" name="description" rows="3" value="<?=$hienthi?>"></input>
        </div>
        <div class="form-group">
            <button type="submit" name="btnupdatedm" class="btn btn-dark">Sửa danh mục</button>
            <input type="hidden" name="imgcu" id="imgcu" value="<?=$imgdm?>">
            <input type="hidden" name="iddm" value="<?=$iddm?>">
        </div>
    </form>
</div>