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
      <h2 align="center">DANH SÁCH ĐƠN HÀNG</h2>
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Bảng danh sách đơn hàng</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
               <thead>
              <tr>
                <th>Mã hóa đơn</th>
                <th>Mã khách hàng</th>
                <th>Mã nhân viên</th>
                <th>Ngày bán</th>
                <th>Tổng tiền</th>
                <th>Trạng thái</th>
                <th>Hành động</th>
              </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $row) {?>
              <tr>
                <td><?= $row['MA_HD'] ?></td>
                <td><?= $row['MA_KH'] ?></td>
                <td><?= $row['MA_NV'] ?></td>
                <td><?= $row['NGAY_BAN'] ?></td>
                <td><?= number_format($row['TONG_TIEN']) ?> VNĐ</td>
                <td><?= $trang_thai=""; $trang_thai=$row['TRANG_THAI']; if($trang_thai == 1){
                      echo "Đã xử lý";
                }else{
                      echo "Đang xử lý";
                }?></td>
                <td> 
                    <a href="index.php?mod=medium&act=delete&MA_HD=<?= $row['MA_HD'] ?>" class="btn btn-danger">Delete</a>

                </td>
              </tr>
              <?php } ?>
            </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>
    </div>
      <?php include "views/Layouts/footer.php"; ?>