<?php 
    /**
    * 
    */
    require_once('models/Product.php');
    require_once('models/Product_type.php');
    class ProductController{
        var $model;
        var $model_type;
            function __construct(){
                $this->model = new Product();
                $this->model_type = new Product_type();
            }
        function list(){
            $data = $this->model->All();
            require_once('views/product/list.php');
        }
        function list_user(){
            $data_user = $this->model->All();
            require('views/user/list.php');
        }
        function add(){
            $product_types = $this->model_type->All();
            
            require_once('views/product/add.php');
        }

        function edit(){
            $product_types = $this->model_type->All();
            $maSP = $_GET['MA_SP'];
            $row = $this->model->find($maSP);
            require_once('views/product/edit.php');
        }
        function update(){
            $target_dir = "public/images/";  // thư mục chứa file upload

                    $target_file = $target_dir . basename($_FILES["ANH_SP"]["name"]); // link sẽ upload file lên
                    
                    if (move_uploaded_file($_FILES["ANH_SP"]["tmp_name"], $target_file)) { // nếu upload file không có lỗi 
                        echo "The file ". basename( $_FILES["ANH_SP"]["name"]). " has been uploaded.";
                    } else { // Upload file có lỗi 
                        echo "Sorry, there was an error uploading your file.";
                    }
            $data = $_POST;
            $data['ANH_SP'] = $_FILES["ANH_SP"]["name"];

            $status = $this->model->update($data);

            if($status == 1){
                header('Location: index.php?mod=product&act=list');
            }else{
                // Thông báo lỗi
            }
        }


        function detail(){
            $maSP = $_GET['MA_SP'];
            $row = $this->model->find($maSP);
            require_once('views/product/detail.php');
        }
         function store(){
                    $target_dir = "public/images/";  // thư mục chứa file upload

                    $target_file = $target_dir . basename($_FILES["ANH_SP"]["name"]); // link sẽ upload file lên
                    
                    if (move_uploaded_file($_FILES["ANH_SP"]["tmp_name"], $target_file)) { // nếu upload file không có lỗi 
                        echo "The file ". basename( $_FILES["ANH_SP"]["name"]). " has been uploaded.";
                    } else { // Upload file có lỗi 
                        echo "Sorry, there was an error uploading your file.";
                    }
            $data = $_POST;
            $data['ANH_SP'] = $_FILES["ANH_SP"]["name"];
            $status = $this->model->create($data);
            
            echo $status;
            
            if($status == 1){
                header('Location: index.php?mod=product&act=list');
            }else{
                // Thông báo lỗi
            }
            
        }
        function delete(){
            $maSP = $_GET['MA_SP'];
            $status = $this->model->delete($maSP);
            if($status == 1){
                header('Location: index.php?mod=product&act=list');
            }else{
                // Thông báo lỗi
            }
        }
    }
 ?>
    