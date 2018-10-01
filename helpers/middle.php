<?php 
/**
* 
*/
class Middle 
{
	public function check(){
		if(!isset($_SESSION['islogIn']) ){
			header('Location: index.php?mod=login&act=formLogin');
	}
	
}
}
 ?>