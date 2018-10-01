<?php include "views/Layouts/header.php"; ?>
    <div class="container">
    <h3 align="center">ZENT GROUP - PHP - MYSQL</h3>
    <h3 align="center">THÊM MỚI SẢN PHẨM</h3>
    <hr>
        <form action="index.php?mod=product&act=store" method="POST" role="form" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Mã sản phẩm</label>
                <input type="text" class="form-control" id="" placeholder="Mã sản phẩm" name="MA_SP" required="">
            </div>
            <div class="form-group">
                <label for="">Tên sản phẩm</label>
                <input type="text" class="form-control" id="" placeholder="Nhập vào tên sản phẩm" name="TEN_SP" required="">
            </div>  
            <div class="form-group">
                <label for="">Số lượng</label>
                <input type="number" class="form-control" id="" placeholder="Nhập vào số lượng" name="SO_LUONG" required="">
            </div>
            <div class="form-group">
                <label for="">Giá nhập</label>
                <input type="number" class="form-control" id="" placeholder="Nhập vào giá nhập hàng" name="GIA_NHAP" required="">
            </div>
            <div class="form-group">
                <label for="">Giá bán</label>
                <input type="number" class="form-control" id="" placeholder="Nhập vào giá bán" name="GIA_BAN" required="">
            </div>
            <div class="form-group">
                <label for="">Ảnh Sản phẩm</label>
                <input type="file" class="form-control" id="" placeholder="Nhập vào địa chỉ" name="ANH_SP" required="">
            </div>
            <div class="form-group">
                <label for="">Loại Sản phẩm</label>
                <select name="MA_LOAI_SP" class="form-control">
                    <?php foreach ($product_types as $row) {?>
                    <option value="<?= $row['MA_LOAI_SP'] ?>"><?=$row['TEN_LOAI']?></option>
                    <?php } ?>
                </select>
            </div>
            
            
            <button type="submit" class="btn btn-primary">Lưu thông tin</button>
        </form>
    </div>
<?php include "views/Layouts/footer.php"; ?>