<?php   
    include './model/productsModel.php';
    class productsController{
        public function getDBProducts(){
            $db = new productsModel();
            $result = $db->getProducts();
            if(!$result){
                die("Lỗi truy vấn " ); 
            }
            return $result;


        }


        public function getDBProductsOfType($type){
            $p = new productsModel();
            $result = $p->getDBProductsType($type);
            if(!$result){
                return false;
            }
            return $result;

        }
        
    }




?>