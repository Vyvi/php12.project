
<?php 
	include_once 'helpers/middle.php';
	$check = new Middle();

	session_start();
	// session_destroy();
	$mod = "user";
	$act = "list";
	if(isset($_GET['mod'])){
	$mod = $_GET['mod'];
	}
	if(isset($_GET['act'])){
	$act = $_GET['act'];
	}
	
	switch ($mod) {
		case 'test':
			switch ($act) {
				case 'recaptcha':
					require('views/login.php');
					break;
					
				default:
					echo "Coming soon";
					break;
			}
			break;
		case 'user':
			require('controllers/ProductController.php');
			$controller = new ProductController();
			// require('controllers/SaleController.php')
			// $controller1 =  new SaleController();
			switch ($act) {
				case 'list':

					$controller->list_user();

					break;
				case 'detail':
					$controller->detail_user();
					
				default:
					echo "Coming soon";
					break;
			}
			break;
		case 'sale_user':
		
			require('controllers/SaleController.php');
			$controller = new SaleController();
			switch ($act) {
				case 'addcart':
					$controller->addproductuser();
					break;
				case 'decart':
					$controller->removeproductuser();
					break;
				case 'cart':
					$controller->create_bill_user();
					break;
				case 'destroy':
					$controller->destroy_user();
					break;
				case 'shipform':
					require('views/user/shipform.php');
					break;
				case 'send':
					require('views/user/send2mail.php');

					
					break;
				default:
					echo "ahhh";
					break;
				}
			break;
		case 'home':
		$check->check();
			switch ($act) {
				case 'index':
					include_once('views/index_chart.php');
					break;
				case 'trangmua':
					include_once ('views/login.html');
					break;
				default:
					echo "Coming soon";
					break;
			}
			break;
		case 'product':
		$check->check();
			require_once('controllers/ProductController.php');
			$controller = new ProductController();
			switch ($act) {
				case 'list':
					$controller->list();
					break;
				case 'add':
					$controller->add();
					break;


				case 'store':
					$controller->store();
					break;
				case 'detail':
					$controller->detail();
					break;
				case 'edit':
					$controller->edit();
					break;
				case 'update':
					$controller->update();
					break;
				case 'delete':
					$controller->delete();
					break;
				default:
					echo "<br> Chức năng không tồn tại";
					break;
			}
			break;
		case 'employee':
		$check->check();
			require_once('controllers/EmployeeController.php');
			$controller = new EmployeeController();
			switch ($act) {
				case 'list':
					$controller->list();
					break;
				case 'add':
					$controller->add();
					break;
				case 'store':
					$controller->store();
					break;
				case 'detail':
					$controller->detail();
					break;
				case 'edit':
					$controller->edit();
					break;
				case 'update':
					$controller->update();
					break;
				case 'delete':
					$controller->delete();
					break;
				default:
					echo "<br> Chức năng không tồn tại";
					break;
			}
			break;
		case 'customer':
		$check->check();
			require_once('controllers/CustomerController.php');
			$controller = new CustomerController();
			switch ($act) {
				case 'list':
					$controller->list();
					break;
				case 'add':
					$controller->add();
					break;
				case 'store':
					$controller->store();
					break;
				case 'detail':
					$controller->detail();
					break;
				case 'edit':
					$controller->edit();
					break;
				case 'update':
					$controller->update();
					break;
				case 'delete':
					$controller->delete();
					break;
				default:
					echo "<br> Chức năng không tồn tại";
					break;
			}
			break;
		case 'login':
			// $check->check();
			require_once('controllers/LoginController.php');
			$controller = new LoginController();
			switch ($act) {
				case 'formLogin':

					$controller->formLogin();
					break;
				case 'checkLogin':
					$controller->checkLogin();
					break;
				case 'logOut':
					$controller->logOut();
					break;
				default:
					echo "<br>Nothing to do here!";
					break;
				}
				break;
		case 'sale':
		$check->check();
			require_once('controllers/SaleController.php');
			$controller = new SaleController();
			switch ($act) {
				case 'list':
					$controller->list();
					break;
				case 'sale':
					$controller->sale();
					break;
				case 'show':
					$controller->show();
					break;
				// case 'print':
				// 	$controller->print();
				// 	break;
				case 'add':
					$controller->addproduct();
					break;
				case 'create_bill':
					$controller->create_bill();
					break;
				case 'remove':
					$controller->removeproduct();
					break;
				case 'destroy':
					$controller->ragedrop();
					break;
				case 'payment':
					$controller->payment();
					break;
				case 'best':
					$controller->best();
					break;
				default:
					echo "<br> Chức năng không tồn tại";
					break;
			}
			break;
		case 'medium':
		$check->check();
			require_once('controllers/MediumController.php');
			$controller = new MediumController();
			switch ($act) {
				case 'list':
					$controller->list();
					break;
				case 'delete':
					$controller->delete();
					break;
				default:
					echo "<br> Chức năng không tồn tại";
					break;
			}
			break;
		default:
			echo "Coming soon!!";
			break;
	}

 ?>
