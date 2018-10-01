<?php include "views/Layouts/header.php"; ?>
    <div class="container">
    <h3 align="center">ZENT GROUP - PHP - MYSQL</h3>
    <h3 align="center">THÊM MỚI NHÂN VIÊN</h3>
    <hr>
        <form action="index.php?mod=employee&act=store" method="POST" role="form" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Mã nhân viên</label>
                <input type="text" class="form-control" id="" placeholder="Mã nhân viên" name="MA_NV" required="">
            </div>
            <div class="form-group">
                <label for="">Tên nhân viên</label>
                <input type="text" class="form-control" id="" placeholder="Nhập vào tên nhân viên" name="TEN_NV" required="">
            </div>  
            <div class="form-group">
                <label for="">Email</label>
                <input type="Email" class="form-control" id="" placeholder="Nhập vào email" name="EMAIL" required="">
            </div>
            <div class="form-group">
                <label for="">Số điện thoại</label>
                <input type="number" class="form-control" id="" placeholder="Nhập vào số điện thoại" name="SDT" required="">
            </div>
            <div class="form-group">
                <label for="">Mật khẩu</label>
                <input type="password" class="form-control" id="" placeholder="Nhập vào mật khẩu" name="MAT_KHAU" required="">
            </div>
                        <div class="form-group">
                <label for="">Nhóm</label>
                <input type="text" class="form-control" id="" placeholder="Nhập vào nhóm" name="NHOM_NV" required="">
            </div>
            
            <button type="submit" class="btn btn-primary">Lưu thông tin</button>
        </form>
    </div>
<?php include "views/Layouts/footer.php"; ?>