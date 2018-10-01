  <?php include "views/Layouts/header.php"; ?>
        <div class="container-fluid">
        	<h1 align="center" style="color: red;">Thống kê doanh thu theo tháng</h1>
          <form action="index.php?mod=sale&act=best" method="POST">
				<p>Chọn tháng cần xem:</p>            	
                    	<select name="thang" id="">
        		<option value="1">1</option>
        		<option value="2">2</option>
        		<option value="3">3</option>
        		<option value="4">4</option>
        		<option value="5">5</option>
        		<option value="6">6</option>
        		<option value="7">7</option>
        		<option value="8">8</option>
        		<option value="9">9</option>
        		<option value="10">10</option>
        		<option value="11">11</option>
        		<option value="12">12</option>
        	</select>
            <button class="btn btn-success" type="submit" value="submit">Show danh sách </button>
          </form>
      </div>
      <?php if(isset($data)) {?>
      	<div class="container-fluid">
      <!-- Breadcrumbs-->
      <!-- Example DataTables Card-->
      <h2 align="center">TOP SẢN PHẨM BÁN CHẠY</h2>
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Top best sellers</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
              <tr>
                <th>Mã sản phẩm</th>
                <th>Tên sản phẩm</th>
                <th>Số lượng</th>
                <th>Giá nhập</th>
                <th>Giá bán</th>
                <th>Ảnh sản phẩm</th>
                <th>Loại sản phẩm</th>
                <th>Đạt doanh số</th>
              </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $row) {?>
              <tr>
                <td><?= $row['MA_SP'] ?></td>
                <td><?= $row['TEN_SP'] ?></td>
                <td><?= $row['SO_LUONG'] ?></td>
                <td><?= number_format($row['GIA_NHAP']) ?> VNĐ</td>
                <td><?= number_format($row['GIA_BAN']) ?> VNĐ</td>
                <td><img src="public/images/<?= $row['ANH_SP'] ?>" alt="<?= $row['TEN_SP'] ?>" width="300px" height="auto"></td>
                <td><?= $row['MA_LOAI_SP'] ?></td>
                <td><?= $row['TONG'] ?> sản phẩm</td>
              </tr>
              <?php } ?>
            </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>
    </div>
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <!-- Example DataTables Card-->
      <h2 align="center">TOP MVP</h2>
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Super man</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
              <tr>
                <th>Mã nhân viên</th>
                <th>Tên nhân viên</th>
                <th>Email</th>
                <th>Số điện thoại</th>
                <th>Mật khẩu</th>
                <th>Nhóm nhân viên</th>
                <th>Tổng doanh số</th>
              </tr>
            </thead>
            <tbody>
                <?php foreach ($data_nv as $row) {?>
              <tr>
                <td><?= $row['MA_NV'] ?></td>
                <td><?= $row['TEN_NV'] ?></td>
                <td><?= $row['EMAIL'] ?></td>
                <td><?= $row['SDT'] ?> VNĐ</td>
                <td><?= $row['MAT_KHAU'] ?> VNĐ</td>
                <td><?= $row['NHOM_NV'] ?></td>
                <td><?= number_format($row['TONG']) ?> VNĐ</td>
              </tr>
              <?php } ?>
            </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>
    </div>
    <?php } ?>
      <?php include "views/Layouts/footer.php"; ?>