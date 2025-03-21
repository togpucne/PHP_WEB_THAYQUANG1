<?php 
    include_once './model/connect.php';

    class productsModel{
        public function getProducts(){
            $p = new Connect();
            $conn = $p->openConnect();
            $sql = "SELECT * FROM sanpham";
            $result = $conn->query($sql);
            if (!$result) {
                return false;
            } else {
                return $result;
            }


        }

        public function getDBProductsType($type){
            $p = new Connect();
            $conn = $p->openConnect();
            $sql = "SELECT * FROM sanpham WHERE iddm = '$type'";
            $result = $conn->query($sql);
            if(!$result){
                return false;
            }
            return $result;

        }
    }



?>