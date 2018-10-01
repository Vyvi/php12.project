<?php include "views/Layouts/header.php"; ?>
    <div class="container">
    <h3 align="center">ZENT GROUP - PHP - MYSQL</h3>
    <h3 align="center">CẬP NHẬT THÔNG TIN KHÁCH HÀNG</h3>
    <hr>
        <form action="index.php?mod=customer&act=update" method="POST" role="form" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Mã khách hàng</label> 
                <input type="text" class="form-control" value="<?= $row['MA_KH'] ?>" id="" placeholder="Mã khách hàng" name="MA_KH" readonly>
            </div>
            <div class="form-group">
                <label for="">Tên khách hàng</label>
                <input type="text" class="form-control" value="<?= $row['TEN_KH'] ?>" id="" placeholder="Nhập vào tên khách hàng" name="TEN_KH">
            </div>  
            <div class="form-group">
                <label for="">Email</label>
                <input type="Email" class="form-control" value="<?= $row['EMAIL']?>" id="" placeholder="Nhập vào email" name="EMAIL">
            </div>
            <div class="form-group">
                <label for="">Số điện thoại</label>
                <input type="text" class="form-control" value="<?= $row['SDT']?>" id="" placeholder="Nhập vào số điện thoại" name="SDT">
            </div>
            <div class="form-group">
                <label for="">Địa chỉ</label>
                <input type="text" class="form-control" value="<?= $row['DIA_CHI']?>" id="" placeholder="Nhập vào địa chỉ" name="DIA_CHI">
            </div>
             <div class="form-group"> 
                <label for="">Mật khẩu</label>
                <input type="text" class="form-control" id="" value="<?= $row['MAT_KHAU']?>" name="MAT_KHAU">
            </div>
            <button type="submit" class="btn btn-primary">Lưu thông tin</button>
        </form>
    </div>
<?php include "views/Layouts/footer.php"; ?>