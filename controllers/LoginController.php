<?php 
    /**
    * 
    */
    require_once('models/Employee.php');
    require_once('models/Customer.php');
    class LoginController{
        var $model;
        var $model_cus;
            function __construct(){
                $this->model = new Employee();
                $this->model_cus = new Customer();
            }
        function checkLogin(){
            $data = $_POST;
            $data['password']=md5($data['password']);

            $status = $this->model->findLogin($data);
            $status_cus = $this->model_cus->findLogin($data);


                // var_dump($status_cus);
                // var_dump($status);
            // die;
            if($status == true || $status_cus == true){
                $_SESSION['islogIn'] = 1;
                $_SESSION['user'] = $status;
                $_SESSION['user_cus'] = $status_cus;
                   
                // echo "OKKKKKKKKKKKKKK";
                header('Location: index.php?mod=home&act=index');
            }else{
                header('Location: index.php?mod=login&act=formLogin');
            }
            
        }
        function logOut(){
            session_destroy();
            header('Location: index.php?mod=login&act=formLogin');
        }

        function formLogin(){
            require_once('views/login.html');
        }
    }
     
 ?>
