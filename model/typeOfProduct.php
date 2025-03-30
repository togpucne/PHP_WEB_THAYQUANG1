<?php 
    include './model/connect.php';

    class typeOfProduct{
        public function selectAllTOP(){
            $p = new Connect();
            $conn = $p->openConnect();
            $sql = "SELECT * FROM danhmuc";
            $result = $conn->query($sql);
            return $result;
        }
    }


?>