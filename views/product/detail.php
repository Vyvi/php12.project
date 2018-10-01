<?php include "views/Layouts/header.php"; ?>
    <div class="container">
        <h3 class="text-center">THÔNG TIN SẢN PHẨM</h3>
        <ul>
            <li>Mã sản phẩm: <?= $row['MA_SP'] ?></li>
            <li>Tên sản phẩm: <?= $row['TEN_SP'] ?></li>
            <li>Số lượng: <?= number_format($row['SO_LUONG']) ?> sản phẩm</li>
            <li>Giá nhập: <?= number_format($row['GIA_NHAP']) ?> VND</li>
            <li>Giá bán: <?= number_format($row['GIA_BAN']) ?> VND</li>
            <li>Ảnh sản phẩm:</li> 
                <img src="public/images/<?= $row['ANH_SP'] ?>" alt="<?= $row['TEN_SP'] ?>" width="300px" height="auto">
          <li>Mã loại sản phẩm:<?= $row['MA_LOAI_SP'] ?></li>
        </ul>
    </div>
<?php include "views/Layouts/footer.php"; ?>