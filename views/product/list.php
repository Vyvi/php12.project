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
      <h2 align="center">DANH SÁCH SẢN PHẨM</h2>
        <a href="index.php?mod=product&act=add" class="btn btn-primary">Thêm sản phẩm mới</a>
        <p><?php if (isset($_COOKIE['msg'])) {
           echo "".$_COOKIE['msg']; 
        } ?></p>
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
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $row) {?>
              <tr>
                <td><?= $row['MA_SP'] ?></td>
                <td><?= $row['TEN_SP'] ?></td>
                <td><?= $row['SO_LUONG'] ?></td>
                <td><?= number_format($row['GIA_BAN']) ?> VNĐ</td>
                <td>
                    <a href="index.php?mod=product&act=detail&MA_SP=<?= $row['MA_SP'] ?>" class="btn btn-success">Detail</a> 
                     <a href="index.php?mod=product&act=edit&MA_SP=<?= $row['MA_SP'] ?>" class="btn btn-warning">Edit</a>  
                    <a href="index.php?mod=product&act=delete&MA_SP=<?= $row['MA_SP'] ?>" class="btn btn-danger delete" id="delete">Delete</a>

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