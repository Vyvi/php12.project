<link rel="stylesheet" type="text/css" href="public/images/shopping_cart.png">
<body onload="window.print();">
  <div id="page" class="page">
    <div class="header">
      <div class="logo"><img src="public/images/maxresdefault.jpg"/></div>
      <div class="company">C.Ty Cổ phần thương mại trực tuyến điện máy Số</div>
    </div>
    <br/>
    <div class="title" align="center">
      HÓA ĐƠN THANH TOÁN
      <br/>
      -------oOo-------
    </div>
    <br/>
    <?php 
        if (isset($customer)) {
          ?>
            <p>
              Mã khách hàng: <?= $customer['MA_KH'] ?><br>
              Tên khách hàng: <?= $customer['TEN_KH'] ?><br>
              Số điện thoại: <?= $customer['SDT'] ?><br>
              Email: <?= $customer['EMAIL'] ?><br>
              Địa chỉ: <?= $customer['DIA_CHI'] ?><br>
            </p>
          <?php
        }
     ?>
     <p>
              
              Tên khách hàng: Lê Vinh<br>
              Số điện thoại: 01655836810  <br>
              Email: Levinh090496@gmail.com <br>
              Địa chỉ: Hà Nội<br>
            </p>
    <br/>
    <?php 
        if (isset($user)) {
          ?>
            <p>
              Mã khách hàng: <?= $user['MA_NV'] ?><br>
              Tên khách hàng: <?= $user['TEN_NV'] ?><br>
              Số điện thoại: <?= $user['EMAIL'] ?><br>
              Email: <?= $user['NHOM_NV'] ?><br>
            </p>
          <?php
        }
     ?>
    <br/>
    <table class="TableData">
      <tr>
        <th>STT</th>
        <th>Tên</th>
        <th>Đơn giá</th>
        <th>Số</th>
        <th>Thành tiền</th>
      </tr>
      <?php
      $tongsotien = 0;
      if(isset($_SESSION['cart'])){
        $pos = 1;
        $tongsotien = 0;
        foreach($_SESSION['cart'] as $i => $row)
        {
          $tongsotien += $row['SO_LUONG']*$row['GIA_BAN'];
          echo "<tr>";
          echo "<td class=\"cotSTT\">".$pos++."</td>";
          echo "<td class=\"cotTenSanPham\">".$row['TEN_SP']."</td>";
          echo "<td class=\"cotGia\"><div id='giasp".$row['MA_SP']."' name='giasp".$row['MA_SP']."' value='".$row['GIA_BAN']."'>".number_format($row['GIA_BAN'],0,",",".")."</div></td>";
          echo "<td class=\"cotSoLuong\" align='center'>".$row['SO_LUONG']."</td>";
          echo "<td class=\"cotSo\">".number_format(($row['SO_LUONG']*$row['GIA_BAN']),0,",",".")."VNĐ</td>";
          echo "</tr>";
        }       
      }
      ?>
      <tr>
        <td colspan="4" class="tong">Tổng cộng</td>
        <td class="cotSo"><?php echo number_format(($tongsotien),0,",",".")?>VNĐ</td>
      </tr>
    </table>
    <?php date_default_timezone_set('Asia/Ho_Chi_Minh');$ngay = date("d");$thang = date("m");$nam = date("Y"); ?>
    <div class="footer-left"> Hà nội, ngày <?php echo $ngay." tháng ".$thang." năm ".$nam; ?><br/>
    Khách hàng </div>
    <div class="footer-right"> Hà nội, ngày <?php echo $ngay." tháng ".$thang." năm ".$nam; ?><br/>
    Nhân viên </div>
  </div>
</body>