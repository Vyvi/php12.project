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
      <h2 align="center">DANH SÁCH KHÁCH HÀNG</h2>
        <a href="index.php?mod=customer&act=add" class="btn btn-primary">Thêm khách hàng mới</a>
        <p><?php if (isset($_COOKIE['msg'])) {
           echo "".$_COOKIE['msg']; 
        } ?></p>
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Bảng danh sách khách hàng</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
               <thead>
              <tr>
                <th>Mã khách hàng</th>
                <th>Tên khách hàng</th>
                <th>Email</th>
                <th>Số điện thoại</th>
                <th>Địa chỉ</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $row) {?>
              <tr>
                <td><?= $row['MA_KH'] ?></td>
                <td><?= $row['TEN_KH'] ?></td>
                <td><?= $row['EMAIL'] ?></td>
                <td><?= $row['SDT'] ?></td>
                <td><?= $row['DIA_CHI'] ?></td>
                <td>
                    <a href="index.php?mod=customer&act=detail&MA_KH=<?= $row['MA_KH'] ?>" class="btn btn-success">Detail</a> 
                     <a href="index.php?mod=customer&act=edit&MA_KH=<?= $row['MA_KH'] ?>" class="btn btn-warning">Edit</a>  
                    <a href="index.php?mod=customer&act=delete&MA_KH=<?= $row['MA_KH'] ?>" class="btn btn-danger delete">Delete</a>

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