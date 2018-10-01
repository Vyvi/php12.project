<?php include "views/Layouts/header.php"; ?>
    <div class="container">
        <h3 class="text-center">THÔNG TIN NHÂN VIÊN</h3>
        <ul>
            <li>Mã nhân viên: <?= $row['MA_NV'] ?></li>
            <li>Tên nhân viên: <?= $row['TEN_NV'] ?></li>
            <li>Email: <?= $row['EMAIL'] ?> </li>
            <li>Số điện thoại: <?= $row['SDT'] ?> </li>
            <li>Mật khẩu:<?= $row['MAT_KHAU'] ?></li>
            <li>Nhóm:<?= $row['NHOM_NV'] ?></li>
        </ul>
        <a href="index.php?mod=employee&act=list" class="btn btn-success">Back to list</a>
    </div>
<?php include "views/Layouts/footer.php"; ?>