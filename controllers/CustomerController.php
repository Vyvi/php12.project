<?php 
    /**
    * 
    */
    require_once('models/Customer.php');
    class CustomerController{
        var $model;
            function __construct(){
                $this->model = new Customer();
            }
        function list(){
            $data = $this->model->All();
            require_once('views/customer/list.php');
        }

        function add(){
            require_once('views/customer/add.php');
        }

        function edit(){
            $maKH = $_GET['MA_KH'];
            $row = $this->model->find($maKH);
            require_once('views/customer/edit.php');
        }
        function update(){
            $data = $_POST;
            $data['MAT_KHAU']=md5($data['MAT_KHAU']);
            $status = $this->model->update($data);

            if($status == 1){
                header('Location: index.php?mod=customer&act=list');
            }else{
                // Thông báo lỗi
            }
        }


        function detail(){
            $maKH = $_GET['MA_KH'];
            $row = $this->model->find($maKH);
            require_once('views/customer/detail.php');
        }
         function store(){
            $data = $_POST;
            $data['MAT_KHAU']=md5($data['MAT_KHAU']);
            $status = $this->model->create($data);
            
            echo $status;
            
            if($status == 1){
                header('Location: index.php?mod=customer&act=list');
            }else{
                // Thông báo lỗi
            }
            
        }
        function delete(){
            $maKH = $_GET['MA_KH'];
            $status = $this->model->delete($maKH);
            if($status == 1){
                header('Location: index.php?mod=customer&act=list');
            }else{
                // Thông báo lỗi
            }
        }
    }
 ?>
