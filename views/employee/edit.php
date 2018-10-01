<?php include "views/Layouts/header.php"; ?>
    <div class="container">
    <h3 align="center">ZENT GROUP - PHP - MYSQL</h3>
    <h3 align="center">CẬP NHẬT THÔNG TIN NHÂN VIÊN</h3>
    <hr>
        <form action="index.php?mod=employee&act=update" method="POST" role="form" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Mã nhân viên</label> 
                <input type="text" class="form-control" value="<?= $row['MA_NV'] ?>" id="" placeholder="Mã nhân viên" name="MA_NV" readonly>
            </div>
            <div class="form-group">
                <label for="">Tên nhân viên</label>
                <input type="text" class="form-control" value="<?= $row['TEN_NV'] ?>" id="" placeholder="Nhập vào tên nhân viên" name="TEN_NV">
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
                <label for="">Mật khẩu</label>
                <input type="text" class="form-control" id="" value="<?= $row['MAT_KHAU']?>" name="MAT_KHAU">
            </div>
                        <div class="form-group">
                <label for="">Nhóm</label>
                <input type="text" class="form-control" value="<?= $row['NHOM_NV']?>" id="" placeholder="Nhập vào nhóm nhân viên" name="NHOM_NV">
            </div>
            <button type="submit" class="btn btn-primary">Lưu thông tin</button>
        </form>
    </div>
<?php include "views/Layouts/footer.php"; ?>