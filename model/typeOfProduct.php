<?php 
    include './model/connect.php';

    class typeOfProduct{
        public function selectAllTOP(){
            $p = new Connect();
            $conn = $p->openConnect();
            $sql = "SELECT * FROM danhmucsanpham";
            $result = $conn->query($sql);
            return $result;
        }
    }


?>