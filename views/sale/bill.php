  <?php include "views/Layouts/header.php"; ?>
  <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Tables</li>
      </ol>
      <!-- Example DataTables Card-->
        <div class="container">
          <div class="row">
            <div class="container col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
        <h3 class="text-center">SELLIT</h3>
        <ul style="list-style: none;">
            <li>Address: HN, VIETNAM</li>
            <li>Mobile: +84123456789</li>
            
        </ul>
        <ul style="list-style: none;">
            <li>Mã hóa đơn: <?= $hoadon['MA_HD'] ?></li>
            <li>Ngày tạo: <?= $hoadon['NGAY_BAN'] ?></li>   
        </ul>
      </div>
            <div class="container col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
        <h3 class="text-center">HÓA ĐƠN THANH TOÁN</h3>
        <ul style="list-style: none;">
            <li>Mã khách hàng: <?= $customer['MA_KH'] ?></li>
            <li>Tên khách hàng: <?= $customer['TEN_KH'] ?></li>
            <li>Email: <?= $customer['EMAIL'] ?> </li>
            <li>Số điện thoại: <?= $customer['SDT'] ?> </li>
            <li>Địa chỉ: <?= $customer['DIA_CHI'] ?> </li>
            
        </ul>
        </div>
        </div>
        </div>
        <div class="container">
        <h2 align="center">DANH SÁCH SẢN PHẨM ĐÃ MUA</h2>
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Bảng danh sách sản phẩm</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
              <tr>
                <th>Mã sản phẩm</th>
                <th>Tên sản phẩm</th>
                <th>Số lượng</th>
                <th>Giá bán</th>
                <th>Thành tiền</th>
                
              </tr>
            </thead>
            <tbody>
                <?php 
                $tong_tien=0;
                foreach ($cart as $row) {
                  $tong_tien += $row['SO_LUONG']*$row['GIA_BAN'];
                  ?>
              <tr>
                <td><?= $row['MA_SP'] ?></td>
                <td><?= $row['TEN_SP'] ?></td>
                <td><?= $row['SO_LUONG'] ?></td>
                <td><?= $row['GIA_BAN'] ?></td>
                <td><?= $row['SO_LUONG']*$row['GIA_BAN'] ?>VNĐ</td>
           
              </tr>
              <?php } ?>
            </tbody>
              <tr>
              <th colspan="4">Tổng tiền</th>
              <td colspan="2"><?= number_format($tong_tien) ?>VNĐ</td>
            </tr>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>
      <button class="btn btn-success" onclick="myFunction()">Print this page</button>
      <a class="btn btn-warning" href="index.php?mod=sale&act=list">Kết thúc phiên</a>
      </div>
    </div>
      <?php include "views/Layouts/footer.php"; ?>