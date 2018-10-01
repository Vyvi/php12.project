<?php 
    /**
    * 
    */
    require_once('models/Employee.php');
    require_once('models/Customer.php');
    require_once('models/Product.php');
    require_once('models/Product_type.php');
    require_once('models/Bill.php');
    require_once('models/BillDetail.php');
    require_once('models/Model.php');

    class SaleController{
        var $emodel;
        var $cmodel;
        var $pmodel;
        var $ptypemodel;
        var $bill;
        var $billdetail;
        var $model;
            function __construct(){
                $this->emodel = new Employee();
                $this->cmodel = new Customer();
                $this->pmodel = new Product();
                $this->ptypemodel = new Product_type();
                $this->bill = new Bill();
                $this->billdetail = new BillDetail();
                $this->model = new Model();
            }
        
       function list(){
            $data = $this->cmodel->All();
            require_once('views/sale/list.php');
        }
        function show(){
            
            require_once('views/sale/show.php');
        }
        // function print(){
            
        //     require_once("views/sale/bill.php");
        // }

       function best(){
       		$thang = $_POST['thang'];

       		$data = $this->model->best_seller($thang);
       		$data_nv = $this->model->best_nv($thang);
       				require_once('views/sale/show.php');
       }
        function sale()
	{	if(isset($_GET['MA_KH'])){
		$maKH = $_GET['MA_KH'];

		$cdata = $this->cmodel->find($maKH);
		$_SESSION['customer'] = $cdata;

		header('Location: ?mod=sale&act=create_bill');
		}else{
			header('Location: ?mod=sale&act=list');
		}
		
	}

	function create_bill()
	{
		$customer = $_SESSION['customer'];
		$pdata = $this->pmodel->All();
		$cart=array();
		if(isset( $_SESSION['cart'])){
			$cart = $_SESSION['cart'];
		}
		
		require_once("views/sale/product_sale.php");
	}
	function create_bill_user()
	{
		// $customer = $_SESSION['customer'];
		// $pdata = $this->pmodel->All();
		$cart=array();
		if(isset( $_SESSION['cart'])){
			$cart = $_SESSION['cart'];
		}
		
		require_once("views/user/cart.php");
	}

	function addproduct()
	{
		$maSP = $_GET['MA_SP'];

		$productfind = $this->pmodel->find($maSP);

	//	$customer = $this->cmodel->find($maNV);


		if (isset($_SESSION['cart'][$maSP])) {
			$_SESSION['cart'][$maSP]['SO_LUONG'] += 1;
		} else {
			$product = $productfind;

			$product['SO_LUONG'] = 1;

			$_SESSION['cart'][$maSP] = $product;
		}

		header("Location: index.php?mod=sale&act=create_bill");
	}
	function addproductuser()
	{
		$maSP = $_GET['MA_SP'];

		$productfind = $this->pmodel->find($maSP);

	//	$customer = $this->cmodel->find($maNV);


		if (isset($_SESSION['cart'][$maSP])) {
			$_SESSION['cart'][$maSP]['SO_LUONG'] += 1;
		} else {
			$product = $productfind;

			$product['SO_LUONG'] = 1;

			$_SESSION['cart'][$maSP] = $product;
		}

		header("Location: index.php?mod=sale_user&act=cart");
	}
	function removeproduct(){
		$maSP = $_GET['MA_SP'];
		$productfind = $this->pmodel->find($maSP);
		if ($_SESSION['cart'][$maSP]['SO_LUONG']>1 && isset($_SESSION['cart'][$maSP]['SO_LUONG'])) {
			$_SESSION['cart'][$maSP]['SO_LUONG'] -= 1;
		} else {
			unset($_SESSION['cart'][$maSP]);
		}
		header("Location: index.php?mod=sale&act=create_bill");
	}
	function removeproductuser(){
		$maSP = $_GET['MA_SP'];
		$productfind = $this->pmodel->find($maSP);
		if ($_SESSION['cart'][$maSP]['SO_LUONG']>1 && isset($_SESSION['cart'][$maSP]['SO_LUONG'])) {
			$_SESSION['cart'][$maSP]['SO_LUONG'] -= 1;
		} else {
			unset($_SESSION['cart'][$maSP]);
		}
		header("Location: index.php?mod=sale_user&act=cart");
	}
	function ragedrop(){
		session_destroy();
		header("Location: index.php?mod=login&act=formLogin");
	}
	function destroy_user(){
		$maSP = $_GET['MA_SP'];
		unset($_SESSION['cart'][$maSP]);
		header("Location: index.php?mod=sale_user&act=cart");
	}
	function payment()
		{
			date_default_timezone_set('asia/ho_chi_minh');


			$maNV = $_SESSION['user']['MA_NV'];

			$customer = $_SESSION['customer'];

			$cart = $_SESSION['cart'];

			$hoadon = array();

			$hoadon['MA_HD'] = $customer['MA_KH']. '_' .$maNV. '_'.time();

			$hoadon['MA_KH'] = $customer['MA_KH'];

			$hoadon['MA_NV'] = $maNV;

			$hoadon['NGAY_BAN'] = date('Y-m-d h:i:s');

			$hoadon['TRANG_THAI'] = 1;

			

			$billson = $this->bill->create($hoadon);

			$tong_thu = 0;

			foreach ($cart as $row) {
				$product['MA_HD'] = $hoadon['MA_HD'];
				$product['MA_SP'] = $row['MA_SP'];
				$product['SO_LUONG'] = $row['SO_LUONG'];
				$product['GIA_BAN'] = $row['GIA_BAN'];
				$product['THANH_TIEN'] = $row['GIA_BAN']*$row['SO_LUONG'];

				$tong_thu +=$product['THANH_TIEN'];

				

				$billdetailson = $this->billdetail->create($product);

				$this->pmodel->deCount($product['MA_SP'] ,$product['SO_LUONG']);

			}
			// echo $tong_tien;
			// die;
			// $updatebill = array();
			$ubill['MA_HD'] = $hoadon['MA_HD'];
			// echo $ubill['MA_HD'];
			$ubill['TONG_TIEN'] = $tong_thu;
			// echo $ubill['TONG_TIEN'];
			$updateson = $this->bill->update($ubill);
				// echo "<pre>";
				// 	print_r($updateson);
				// echo "</pre>";
			// die;
			$updateson = $this->bill->update($ubill);
			if($updateson == 1){
                unset($_SESSION['cart']);
				unset($_SESSION['customer']);
            }else{
                // Thông báo lỗi
            }
            // header("Location: index.php?mod=sale&act=print");
			require_once("views/sale/bill.php");
			
		}
    }
     
 ?>
