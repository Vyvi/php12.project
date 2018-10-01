<?php 
    /**
    * 
    */
    require_once('models/Employee.php');
    class EmployeeController{
        var $model;
            function __construct(){
                $this->model = new Employee();
            }
        function list(){
            $data = $this->model->All();
            require_once('views/employee/list.php');
        }

        function add(){
            require_once('views/employee/add.php');
        }

        function edit(){
            $maNV = $_GET['MA_NV'];
            $row = $this->model->find($maNV);
            require_once('views/employee/edit.php');
        }
        function update(){
            $data = $_POST;
            $data['MAT_KHAU']=md5($data['MAT_KHAU']);
            $status = $this->model->update($data);

            if($status == 1){
                header('Location: index.php?mod=employee&act=list');
            }else{
                // Thông báo lỗi
            }
        }


        function detail(){
            $maNV = $_GET['MA_NV'];
            $row = $this->model->find($maNV);
            require_once('views/employee/detail.php');
        }
         function store(){
            $data = $_POST;
            $data['MAT_KHAU']=md5($data['MAT_KHAU']);
            $status = $this->model->create($data);
            
            echo $status;
            
            if($status == 1){
                header('Location: index.php?mod=employee&act=list');
            }else{
                // Thông báo lỗi
            }
            
        }
        function delete(){
            $maNV = $_GET['MA_NV'];
            $status = $this->model->delete($maNV);
            if($status == 1){
                header('Location: index.php?mod=employee&act=list');
            }else{
                // Thông báo lỗi
            }
        }
    }
 ?>
