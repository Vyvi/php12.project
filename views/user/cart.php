<?php include "views/Layouts/headeruser.php"; ?>
<!-- Header End====================================================================== -->
<div id="mainBody">
	<div class="container">
	<div class="row">
<!-- Sidebar ================================================== -->
<?php include "views/Layouts/sidebar.php"; ?>	
<!-- Sidebar end=============================================== -->
	<div class="span9">
    <ul class="breadcrumb">
		<li><a href="index.html">Trang chủ</a> <span class="divider">/</span></li>
		<li class="active"> Giỏ hàng mua sắm</li>
    </ul>
	<h3>  GIỎ HÀNG [ <small>3 Item(s) </small>]<a href="index.php?mod=user&act=list" class="btn btn-large pull-right"><i class="icon-arrow-left"></i> Tiếp tục mua </a></h3>	
	<hr class="soft"/>
	<table class="table table-bordered">
		<tr><th> I AM ALREADY REGISTERED  </th></tr>
		 <tr> 
		 <td>
			<form class="form-horizontal">
				<div class="control-group">
				  <label class="control-label" for="inputUsername">Username</label>
				  <div class="controls">
					<input type="text" id="inputUsername" placeholder="Username">
				  </div>
				</div>
				<div class="control-group">
				  <label class="control-label" for="inputPassword1">Password</label>
				  <div class="controls">
					<input type="password" id="inputPassword1" placeholder="Password">
				  </div>
				</div>
				<div class="control-group">
				  <div class="controls">
					<button type="submit" class="btn">Sign in</button> OR <a href="register.html" class="btn">Register Now!</a>
				  </div>
				</div>
				<div class="control-group">
					<div class="controls">
					  <a href="forgetpass.html" style="text-decoration:underline">Forgot password ?</a>
					</div>
				</div>
			</form>
		  </td>
		  </tr>
	</table>		
			
	<table class="table table-bordered">
              <thead>
                <tr>
                  <th>Product</th>
                  <th>Description</th>
                  <th>Quantity/Update</th>
				  <th>Price</th>
                  <th>Total</th>
				</tr>
              </thead>
              <tbody>
              	<?php 
				                $tong_tien=0;
				                foreach ($cart as $row) {
				                  $tong_tien += $row['SO_LUONG']*$row['GIA_BAN'];
				                  ?>
                <tr>
                  <td> <img width="60" src="public/images/<?= $row['ANH_SP'] ?>" alt=""/></td>
                  <td><?= $row['TEN_SP'] ?><br/>Lorem ipsum dolor sit amet.</td>
				  <td>
					<div class="input-append"><input class="span1" style="max-width:34px" value="<?= $row['SO_LUONG'] ?>" id="appendedInputButtons" size="16" type="text"><a class="btn" href="index.php?mod=sale_user&act=decart&MA_SP=<?= $row['MA_SP'] ?>" type="button"><i class="icon-minus"></i></a><a href="index.php?mod=sale_user&act=addcart&MA_SP=<?= $row['MA_SP'] ?>" class="btn" type="button"><i class="icon-plus"></i></a><a class="btn btn-danger" href="index.php?mod=sale_user&act=destroy&MA_SP=<?= $row['MA_SP'] ?>" type="button"><i class="icon-remove icon-white"></i></a>				</div>
				  </td>
                  <td><?= number_format($row['GIA_BAN']) ?> VNĐ</td>
                  
                  <td><?= number_format($row['SO_LUONG']*$row['GIA_BAN']) ?>VNĐ</td>
                </tr>
                
				<?php } ?>
                  
				 <tr>
                  <td colspan="4" style="text-align:right"><strong>TOTAL =</strong></td>
                  <td class="label label-important" style="display:block"> <strong> <?= number_format($tong_tien) ?> VNĐ</strong></td>
                </tr>
				</tbody>
            </table>
		
		
            <table class="table table-bordered">
			<tbody>
				 <tr>
                  <td> 
				<form class="form-horizontal">
				<div class="control-group">
				<label class="control-label"><strong> Mã giảm giá: </strong> </label>
				<div class="controls">
				<input type="text" class="input-medium" placeholder="CODE">
				<button type="submit" class="btn"> Nhập </button>
				</div>
				</div>
				</form>
				</td>
                </tr>
				
			</tbody>
			</table>
			
			<table class="table table-bordered">
			 <tr><th>Giao hàng </th></tr>
			 <tr> 
			 <td>
				<form class="form-horizontal">
				  <div class="control-group">
					<label class="control-label" for="inputCountry">Địa chỉ </label>
					<div class="controls">
					  <input type="text" id="inputCountry" placeholder="Country">
					</div>
				  </div>
				  <div class="control-group">
					<label class="control-label" for="inputPost">Mã vùng/Mã bưu điện </label>
					<div class="controls">
					  <input type="text" id="inputPost" placeholder="Postcode">
					</div>
				  </div>
				  <div class="control-group">
					<div class="controls">
					  <button type="submit" class="btn">Xác nhận </button>
					</div>
				  </div>
				</form>				  
			  </td>
			  </tr>
            </table>		
	<a href="index.php?mod=user&act=list" class="btn btn-large"><i class="icon-arrow-left"></i> Tiếp tục mua sắm </a>
	<a href="index.php?mod=sale_user&act=shipform" class="btn btn-large pull-right">Bước kế <i class="icon-arrow-right"></i></a>
	
</div>
</div></div>
</div>
<!-- MainBody End ============================= -->
<!-- Footer ================================================================== -->
<?php include "views/Layouts/footeruser.php"; ?>