<?php include "views/Layouts/header.php"; ?>
    <div class="container">
        <h3 class="text-center">THÔNG TIN KHÁCH HÀNG</h3>
        <ul>
            <li>Mã khách hàng: <?= $row['MA_KH'] ?></li>
            <li>Tên khách hàng: <?= $row['TEN_KH'] ?></li>
            <li>Email: <?= $row['EMAIL'] ?> </li>
            <li>Số điện thoại: <?= $row['SDT'] ?> </li>
            <li>Địa chỉ: <?= $row['DIA_CHI'] ?> </li>
            <li>Mật khẩu:<?= $row['MAT_KHAU'] ?></li>
        </ul>
        <a href="index.php?mod=customer&act=list" class="btn btn-success">Back to list</a>
    </div>
<?php include "views/Layouts/footer.php"; ?>