<?php  
	include_once 'Connection.php';
	/**
	* 
	*/
	class Model
	{
		var $table='';
		var $primary_key='';
		var $conn;
	 	function __construct(){
	 		$connect = new Connection();
	 		$this->conn = $connect->connect();
	 	}
		function All(){
 			
            $query = "SELECT * FROM ".$this->table."";

            $data = array();

            // Thuc thi cau lenh truy van co so du lieu
            $result = $this->conn->query($query);

            while($row = $result->fetch_assoc()) {
            	$data[] = $row;
            }
            return $data;
 	}
 	function find($id){

		$query = "SELECT * FROM ".$this->table." WHERE ".$this->primary_key." = '".$id."' ";

	    $result = $this->conn->query($query);

	    $row = $result->fetch_assoc();

	    return $row;
 	}
 	function create($data){
 			$fields = '';
 			$values = '';
 			// echo $values ."<br>";
 			foreach ($data as $key => $value) {
 				$fields = $fields .$key. ',';
 				$values = $values ."'".$value."',";
 				// echo $values ."<br>";
 			}
 			$fields = trim($fields,',');
 			$values = trim($values,',');
 				// echo $values ."<br>";
		  	// Cau lenh truy van co so du lieu
		  	$query = "INSERT INTO ".$this->table." (".$fields.") VALUES (".$values.")";
		  	//echo $query;
		  	// Thuc thi cau lenh truy van co so du lieu
		  	$result = $this->conn->query($query);

		  	return $result;

		   //	echo $result;
		   //	die;
		}
	function update($data){
 			$sql ='';
 			foreach ($data as $key => $value) {
 				$sql .= $key ."='" .$value."',";
 			}
 			$sql = trim($sql,',');
		  	// Cau lenh truy van co so du lieu
		  	$query = "UPDATE ".$this->table." SET ".$sql." WHERE ".$this->primary_key." = '".$data[$this->primary_key]."' ";
		  		
		  		
		  	// Thuc thi cau lenh truy van co so du lieu
		  	$result = $this->conn->query($query);

		   	return $result;
 	}
 	function delete($id){
 			$query2 = "SELECT * FROM san_pham WHERE MA_SP = '".$id."'";  
                  $result2 = $this->conn->query($query2);

                  $row = $result2 -> fetch_assoc();
                  unlink('public/images/'.$row['ANH_SP']);
			$query = "DELETE FROM ".$this->table." WHERE ".$this->primary_key." = '".$id."'";
			$result = $this->conn->query($query);

		   	return $result;

	}
	public function best_seller($thang){
				$data = array();
			$query="SELECT  san_pham.*,SUM(chi_tiet_hoa_don.SO_LUONG) AS TONG
					FROM san_pham, chi_tiet_hoa_don,hoa_don
					WHERE san_pham.MA_SP = chi_tiet_hoa_don.MA_SP AND hoa_don.MA_HD= chi_tiet_hoa_don.MA_HD AND MONTH(hoa_don.NGAY_BAN)=".$thang."
					GROUP BY TEN_SP
					ORDER BY SUM(chi_tiet_hoa_don.SO_LUONG) DESC
					LIMIT 5";
			$result =$this->conn->query($query);
				
			while($row = $result->fetch_assoc()){
				$data[]= $row;
		 	}
		 	return $data;
		}
	public function best_nv($thang){
				$data_nv = array();
			$query="SELECT  nhan_vien.*,SUM(hoa_don.TONG_TIEN) AS TONG
					FROM nhan_vien,hoa_don,chi_tiet_hoa_don
					WHERE nhan_vien.MA_NV = hoa_don.MA_NV AND hoa_don.MA_HD= chi_tiet_hoa_don.MA_HD AND MONTH(hoa_don.NGAY_BAN)=".$thang."
					GROUP BY TEN_NV
					ORDER BY SUM(hoa_don.TONG_TIEN) DESC
					LIMIT 5";
			$result =$this->conn->query($query);
				
			while($row = $result->fetch_assoc()){
				$data_nv[]= $row;
		 	}
		 	return $data_nv;
		}
	function findLogin($data){
			// echo "<pre>";
			// 	print_r($data);
			// echo "</pre>";

		$query = "SELECT * FROM ".$this->table." WHERE ( EMAIL = '".$data['email']."' AND MAT_KHAU = '".$data['password']."' )";

	
	    $result = $this->conn->query($query);

	    // 	var_dump($result);
	    // die;
	    // var_dump($result);

	    $row = $result->fetch_assoc();
	    	// echo "<pre>";
	    	// 	print_r($row);
	    	// echo "</pre>";
	    	// die;
	    return $row;
 	}
}
?>