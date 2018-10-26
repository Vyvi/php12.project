<head>
  <style>
    body {
    margin: 0;
    padding: 0;
    background-color: #FAFAFA;
    font: 12pt "Tohoma";
}
* {
    box-sizing: border-box;
    -moz-box-sizing: border-box;
}
.page {
    width: 21cm;
    overflow:hidden;
    min-height:297mm;
    padding: 2.5cm;
    margin-left:auto;
    margin-right:auto;
    background: white;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
}
.subpage {
    padding: 1cm;
    border: 5px red solid;
    height: 237mm;
    outline: 2cm #FFEAEA solid;
}
 @page {
 size: A4;
 margin: 0;
}
button {
    width:100px;
    height: 24px;
}
.header {
    overflow:hidden;
}
.logo {
    background-color:#FFFFFF;
    text-align:left;
    float:left;
}
.company {
    padding-top:24px;
    text-transform:uppercase;
    background-color:#FFFFFF;
    text-align:right;
    float:right;
    font-size:16px;
}
.title {
    text-align:center;
    position:relative;
    color:#0000FF;
    font-size: 24px;
    top:1px;
}
.footer-left {
    text-align:center;
    text-transform:uppercase;
    padding-top:24px;
    position:relative;
    height: 150px;
    width:50%;
    color:#000;
    float:left;
    font-size: 12px;
    bottom:1px;
}
.footer-right {
    text-align:center;
    text-transform:uppercase;
    padding-top:24px;
    position:relative;
    height: 150px;
    width:50%;
    color:#000;
    font-size: 12px;
    float:right;
    bottom:1px;
}
.TableData {
    background:#ffffff;
    font: 11px;
    width:100%;
    border-collapse:collapse;
    font-family:Verdana, Arial, Helvetica, sans-serif;
    font-size:12px;
    border:thin solid #d3d3d3;
}
.TableData TH {
    background: rgba(0,0,255,0.1);
    text-align: center;
    font-weight: bold;
    color: #000;
    border: solid 1px #ccc;
    height: 24px;
}
.TableData TR {
    height: 24px;
    border:thin solid #d3d3d3;
}
.TableData TR TD {
    padding-right: 2px;
    padding-left: 2px;
    border:thin solid #d3d3d3;
}
.TableData TR:hover {
    background: rgba(0,0,0,0.05);
}
.TableData .cotSTT {
    text-align:center;
    width: 10%;
}
.TableData .cotTenSanPham {
    text-align:left;
    width: 40%;
}
.TableData .cotHangSanXuat {
    text-align:left;
    width: 20%;
}
.TableData .cotGia {
    text-align:right;
    width: 120px;
}
.TableData .cotSoLuong {
    text-align: center;
    width: 50px;
}
.TableData .cotSo {
    text-align: right;
    width: 120px;
}
.TableData .tong {
    text-align: right;
    font-weight:bold;
    text-transform:uppercase;
    padding-right: 4px;
}
.TableData .cotSoLuong input {
    text-align: center;
}
@media print {
 @page {
 margin: 0;
 border: initial;
 border-radius: initial;
 width: initial;
 min-height: initial;
 box-shadow: initial;
 background: initial;
 page-break-after: always;
}
}
  </style>
</head>
<body onload="window.print();">
  <div id="page" class="page">
    <div class="header">
      <div class="logo"><img src="public/themes/images/digilogo.png"/></div>
      <div class="company">C.Ty Cổ phần thương mại trực tuyến Digital</div>
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
              Số điện thoại: 01655836810<br>
              Email: levinh090496@gmail.com<br>
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
    <table class="TableData" style="border: 1px solid black">
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