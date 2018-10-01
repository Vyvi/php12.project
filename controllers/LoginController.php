<?php 
    /**
    * 
    */
    require_once('models/Employee.php');
    class LoginController{
        var $model;
            function __construct(){
                $this->model = new Employee();
            }
        function checkLogin(){
            $data = $_POST;
            $data['password']=md5($data['password']);

            $status = $this->model->findLogin($data);

            //     var_dump($status);
            // die;
            if($status == true){
                $_SESSION['islogIn'] = 1;
                $_SESSION['user'] = $status;
                   
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
