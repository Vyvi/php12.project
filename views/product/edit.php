<?php include "views/Layouts/header.php"; ?>
    <div class="container">
    <h3 align="center">ZENT GROUP - PHP - MYSQL</h3>
    <h3 align="center">CẬP NHẬT THÔNG TIN SẢN PHẨM</h3>
    <hr>
        <form action="index.php?mod=product&act=update" method="POST" role="form" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Mã sản phẩm</label> 
                <input type="text" class="form-control" value="<?= $row['MA_SP'] ?>" id="" placeholder="Mã sản phẩm" name="MA_SP" readonly>
            </div>
            <div class="form-group">
                <label for="">Tên sản phẩm</label>
                <input type="text" class="form-control" value="<?= $row['TEN_SP'] ?>" id="" placeholder="Nhập vào tên sản phẩm" name="TEN_SP">
            </div>  
            <div class="form-group">
                <label for="">Số lượng</label>
                <input type="number" class="form-control" value="<?= $row['SO_LUONG']?>" id="" placeholder="Nhập vào số lượng" name="SO_LUONG">
            </div>
            <div class="form-group">
                <label for="">Giá nhập</label>
                <input type="number" class="form-control" value="<?= $row['GIA_NHAP']?>" id="" placeholder="Nhập vào giá nhập hàng" name="GIA_NHAP">
            </div>
            <div class="form-group">
                <label for="">Giá bán</label>
                <input type="number" class="form-control" value="<?= $row['GIA_BAN']?>" id="" placeholder="Nhập vào giá bán" name="GIA_BAN">
            </div>
             <div class="form-group"> 
                <label for="">Ảnh Sản phẩm</label>
                <input type="file" class="form-control" id="" value="<?= $row['ANH_SP']?>" name="ANH_SP">
            </div>
            <div class="form-group">
                <label for="">Loại Sản phẩm</label>
                <select name="MA_LOAI_SP" class="form-control">
                    <?php foreach ($product_types as $product_type) {?>
                    <option value="<?= $product_type['MA_LOAI_SP'] ?>" <?php if($row['MA_LOAI_SP'] == $product_type['MA_LOAI_SP']){ echo 'selected';} ?>><?=$product_type['TEN_LOAI']?></option>
                    <?php } ?>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Lưu thông tin</button>
        </form>
    </div>
<?php include "views/Layouts/footer.php"; ?>