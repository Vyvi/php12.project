<?php 
include_once 'Model.php';
 class Product extends Model{
 	var $table='san_pham';
	var $primary_key='MA_SP';
 	// var $conn;
 	// function __construct(){
 	// 	$connect = new Connection();
 	// 	$this->conn = $connect->connect();
 	// }
 	// function All(){
 			
  //           $query = "SELECT * FROM SAN_PHAM";

  //           $data = array();

  //           // Thuc thi cau lenh truy van co so du lieu
  //           $result = $this->conn->query($query);

  //           while($row = $result->fetch_assoc()) {
  //           	$data[] = $row;
  //           }
  //           return $data;
 	// }
 	// function update($data){
 		
		//   	// Cau lenh truy van co so du lieu
		//   	$query = "UPDATE SAN_PHAM SET MA_SP='".$data['MA_SP']."',TEN_SP='".$data['TEN_SP']."',SO_LUONG='".$data['SO_LUONG']."',GIA_NHAP='".$data['GIA_NHAP']."',GIA_BAN='".$data['GIA_BAN']."',MA_LOAI_SP='".$data['MA_LOAI_SP']."' WHERE MA_SP = '".$data['MA_SP']."' ";
		  		
		  		
		//   	// Thuc thi cau lenh truy van co so du lieu
		//   	$result = $this->conn->query($query);

		//    	return $result;
 	// }

 // 	function find($id){
 		


	// $query = "SELECT * FROM SAN_PHAM where MA_SP = '".$id."' ";

 //    $result = $this->conn->query($query);

 //    $row = $result->fetch_assoc();

 //    return $row;
 // 	}
 	// function create($data){
 			
		//   	// Cau lenh truy van co so du lieu
		//   	$query = "INSERT INTO san_pham (MA_SP,TEN_SP,SO_LUONG,GIA_NHAP,GIA_BAN,MA_LOAI_SP) VALUES        ('".$data['MA_SP']."','".$data['TEN_SP']."','".$data['SO_LUONG']."','".$data['GIA_NHAP']."','".$data['GIA_BAN']."','".$data['MA_LOAI_SP']."')";

		//   	// Thuc thi cau lenh truy van co so du lieu
		//   	$result = $this->conn->query($query);

		//    	return $result;
		// }
	// function delete($id){
	// 		$query = "DELETE FROM san_pham WHERE MA_SP = '".$id."'";
	// 		$result = $this->conn->query($query);

	// 	   	return $result;

	// }
	// function get_so_luong
	// update_so_luong
	public function deCount($MA_SP,$SO_LUONG){
		$soluongcon = $this->getCount($MA_SP)-$SO_LUONG;
		$query = "UPDATE ".$this->table." SET SO_LUONG = ".$soluongcon." WHERE ".$this->primary_key." = '".$MA_SP."'";
		$result = $this->conn->query($query);
		return $result;
	}
	public function getCount($MA_SP){
		$query = "SELECT SO_LUONG FROM ".$this->table." WHERE ".$this->primary_key." = '".$MA_SP."'";
		$result = $this->conn->query($query)->fetch_assoc()['SO_LUONG'];
		return $result;
	}
 }
 ?>
 