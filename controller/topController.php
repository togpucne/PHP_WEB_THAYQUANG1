<?php 
    include './model/typeOfProduct.php';

    class topController {
        public function getDBTOP(){
           $p = new typeOfProduct();
           $result =  $p->selectAllTOP();
           if (!$result) {
                die("Lỗi truy vấn " ); 
            }

            return $result;
            }
    }



?>