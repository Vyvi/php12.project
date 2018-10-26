<?php 
	require('views/user/mail.php');

	ob_start(); 
	include('views/user/printcart.php'); 
	$contents = ob_get_contents(); 
	ob_end_clean();
	$subject = 'Thông tin thanh toán';
	send_email('levinh090496@gmail.com','Lê Thế Vinh',$contents,$subject);
	die;

 ?>


