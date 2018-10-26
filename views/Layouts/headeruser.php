<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Digital-shop online Shopping cart</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
<!--Less styles -->
   <!-- Other Less css file //different less files has different color scheam
	<link rel="stylesheet/less" type="text/css" href="public/themes/less/simplex.less">
	<link rel="stylesheet/less" type="text/css" href="public/themes/less/classified.less">
	<link rel="stylesheet/less" type="text/css" href="public/themes/less/amelia.less">  MOVE DOWN TO activate
	-->
	<!--<link rel="stylesheet/less" type="text/css" href="public/themes/less/bootshop.less">
	<script src="public/themes/js/less.js" type="text/javascript"></script> -->
	
<!-- Bootstrap style --> 
    <link id="callCss" rel="stylesheet" href="public/themes/bootshop/bootstrap.min.css" media="screen"/>
    <link href="public/themes/css/base.css" rel="stylesheet" media="screen"/>
<!-- Bootstrap style responsive -->	
	<link href="public/themes/css/bootstrap-responsive.min.css" rel="stylesheet"/>
	<link href="public/themes/css/font-awesome.css" rel="stylesheet" type="text/css">
<!-- Google-code-prettify -->	
	<link href="public/themes/js/google-code-prettify/prettify.css" rel="stylesheet"/>
<!-- fav and touch icons -->
    <link rel="shortcut icon" href="public/themes/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="public/themes/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="public/themes/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="public/themes/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="public/themes/images/ico/apple-touch-icon-57-precomposed.png">
	<style type="text/css" id="enject"></style>
  </head>
<body>
<div id="header">
<div class="container">
<div id="welcomeLine" class="row">
	<?php if(!isset($_SESSION['islogIn'])) {?>
	<div class="span6">Welcome!<strong> Guest </strong></div>
	<?php } ?>
	<?php if(isset($_SESSION['islogIn'])) {?>
		<?php if(isset($_SESSION['user'])&&!isset($_SESSION['user_cus'])) {?>
	<div class="span6">Welcome!<strong> <?= $_SESSION['user']['TEN_NV'] ?> </strong></div>
		<?php } ?>
		<?php if(!isset($_SESSION['user'])&&!isset($_SESSION['user_cus'])) {?>
	<div class="span6">Welcome!<strong> Who are you?</strong></div>
		<?php } ?>
		<?php if(isset($_SESSION['user'])&&isset($_SESSION['user_cus'])) {?>
	<div class="span6">Welcome!<strong> Admin</strong></div>
		<?php } ?>
		<?php if(isset($_SESSION['user_cus'])&&!isset($_SESSION['user'])) {?>
	<div class="span6">Welcome!<strong> <?= $_SESSION['user_cus']['TEN_KH'] ?> </strong></div>
		<?php } ?>
	<?php } ?>
	<div class="span6">
	<div class="pull-right">
		<a href="product_summary.html"><span class="">En</span></a>
		<a href="product_summary.html"><span class="">Jp</span></a>
		<span class="btn btn-mini">Vi</span>
		<a href="product_summary.html"><span>&pound;</span></a>
		<a href="product_summary.html"><span class="">¥</span></a>
		<span class="btn btn-mini">VNĐ</span>
		<a href="index.php?mod=sale_user&act=cart"><span class="btn btn-mini btn-primary"><i class="icon-shopping-cart icon-white"></i> Sản phẩm trong giỏ hàng </span> </a> 
	</div>
	</div>
</div>
<!-- Navbar ================================================== -->
<div id="logoArea" class="navbar">
<a id="smallScreen" data-target="#topMenu" data-toggle="collapse" class="btn btn-navbar">
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
</a>
  <div class="navbar-inner">
    <a class="brand" href="index.html"><img src="public/themes/images/digilogo.png" alt="Bootsshop"/></a>
		<form class="form-inline navbar-search" method="post" action="products.html" >
		<input id="srchFld" class="srchTxt" type="text" />
		  <select class="srchTxt">
			<option>All</option>
			<option>ĐỒ ĐIỆN TỬ </option>
			<option>ĐỒ ĐIỆN GIA DỤNG </option>
			<option>Extra </option>
			<option>Extra </option>
			<option>Extra </option>
		</select> 
		  <button type="submit" id="submitButton" class="btn btn-primary">Go</button>
    </form>
    <ul id="topMenu" class="nav pull-right">
	 <li class=""><a href="special_offer.html">Yêu cầu</a></li>
	 <li class=""><a href="normal.html">Giao Hàng</a></li>
	 <li class=""><a href="views/user/contact.html">Liên hệ</a></li>
	 <li class="">
	 <?php if(!isset($_SESSION['islogIn'])) {?>
	 <a href="index.php?mod=login&act=formLogin" role="button" style="padding-right:0"><span class="btn btn-large btn-success">Đăng nhập</span></a>
	 <?php } ?>
	 <?php if(isset($_SESSION['islogIn'])) {?>
	 <a href="index.php?mod=login&act=formLogin" role="button" style="padding-right:0"><span class="btn btn-large btn-success">Dash board</span></a>
	 <?php } ?>
	<!-- <div id="login" class="modal hide fade in" tabindex="-1" role="dialog" aria-labelledby="login" aria-hidden="false" >
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3>Login Block</h3>
		  </div>
		  <div class="modal-body">
			<form class="form-horizontal loginFrm">
			  <div class="control-group">								
				<input type="text" id="inputEmail" placeholder="Email">
			  </div>
			  <div class="control-group">
				<input type="password" id="inputPassword" placeholder="Password">
			  </div>
			  <div class="control-group">
				<label class="checkbox">
				<input type="checkbox"> Remember me
				</label>
			  </div>
			</form>		
			<button type="submit" class="btn btn-success">Sign in</button>
			<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
		  </div>
	</div> -->
	</li>
    </ul>
  </div>
</div>
</div>
</div>