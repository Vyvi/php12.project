<?php 
    /**
    * 
    */
    require_once('models/Bill.php');
    class MediumController{
        var $model;
            function __construct(){
                $this->model = new Bill();
            }
        function list(){
            $data = $this->model->All();
            require_once('views/medium/list.php');
        }
        
        
        function delete(){
            $maHD = $_GET['MA_HD'];
            $status = $this->model->delete($maHD);
            if($status == 1){
                header('Location: index.php?mod=medium&act=list');
            }else{
                // Thông báo lỗi
            }
        }
    }
 ?>
