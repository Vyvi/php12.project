<div id="sidebar" class="span3">
		<div class="well well-small"><a id="myCart" href="index.php?mod=sale_user&act=cart"><img src="views/user/themes/images/ico-cart.png" alt="cart">Giỏ hàng<?php if(isset($_SESSION['cart'])&&$_SESSION['cart']!= null) {?><span class="badge badge-warning pull-right">New item added!!!</span><?php } ?></a></div>
		<ul id="sideManu" class="nav nav-tabs nav-stacked">
			<li class="subMenu open"><a> ĐỒ ĐIỆN TỬ [230]</a>
				<ul>
				<li><a class="active" href="products.html"><i class="icon-chevron-right"></i>Cameras (100) </a></li>
				<li><a href="products.html"><i class="icon-chevron-right"></i>Computers, Tablets & laptop (30)</a></li>
				<li><a href="products.html"><i class="icon-chevron-right"></i>Mobile Phone (80)</a></li>
				<li><a href="products.html"><i class="icon-chevron-right"></i>Sound & Vision (15)</a></li>
				</ul>
			</li>
			<li class="subMenu"><a> ĐỒ ĐIỆN GIA DỤNG [840] </a>
			<ul style="display:none">
				<li><a href="products.html"><i class="icon-chevron-right"></i>TV (45)</a></li>
				<li><a href="products.html"><i class="icon-chevron-right"></i>Tủ lạnh (8)</a></li>												
				<li><a href="products.html"><i class="icon-chevron-right"></i>Máy giặt (5)</a></li>	
				<li><a href="products.html"><i class="icon-chevron-right"></i>Điều hòa  (45)</a></li>
				<li><a href="products.html"><i class="icon-chevron-right"></i>Quạt (6)</a></li>												
				<li><a href="products.html"><i class="icon-chevron-right"></i>Đèn (5)</a></li>												
				<li><a href="products.html"><i class="icon-chevron-right"></i>Nồi cơm (3)</a></li>												
			</ul>
			</li>
			<li class="subMenu"><a>Khác [1000]</a>
				<ul style="display:none">
				<li><a href="products.html"><i class="icon-chevron-right"></i>Angoves  (35)</a></li>
				<li><a href="products.html"><i class="icon-chevron-right"></i>Bouchard Aine & Fils (8)</a></li>												
				<li><a href="products.html"><i class="icon-chevron-right"></i>French Rabbit (5)</a></li>	
				<li><a href="products.html"><i class="icon-chevron-right"></i>Louis Bernard  (45)</a></li>
				<li><a href="products.html"><i class="icon-chevron-right"></i>BIB Wine (Bag in Box) (8)</a></li>												
				<li><a href="products.html"><i class="icon-chevron-right"></i>Other Liquors & Wine (5)</a></li>												
				<li><a href="products.html"><i class="icon-chevron-right"></i>Garden (3)</a></li>												
				<li><a href="products.html"><i class="icon-chevron-right"></i>Khao Shong (11)</a></li>												
			</ul>
			</li>

			<?php if(isset($data_types_user)){ foreach ($data_types_user as $row) {?>
			<li><a href="products.html"><?= $row['TEN_LOAI'] ?></a></li>
			<?php } }?>
		</ul>
		<br/>
		  
			<div class="thumbnail">
				<img src="views/user/themes/images/milb.png" title="Officer partner" alt="Officer partner">
				<div class="caption">
				  <h5>Officer partner</h5>
				</div>
			  </div><br/>
			<div class="thumbnail">
				<img src="views/user/themes/images/adtima.png" title="adtima" alt="adtima">
				<div class="caption">
				  <h5>Sliver partner</h5>
				</div>
			  </div><br/>
			<div class="thumbnail">
				<img src="views/user/themes/images/payment_methods.png" title="Bootshop Payment Methods" alt="Payments Methods">
				<div class="caption">
				  <h5>Payment Methods</h5>
				</div>
			  </div>
	</div>