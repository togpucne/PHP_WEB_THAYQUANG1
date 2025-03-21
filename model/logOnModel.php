<?php
    include_once './model/connect.php';

    class logOnModel{
        
        public function logInModel($name, $password){
            $p = new Connect();
            $conn = $p->openConnect();
            $sql = "SELECT * FROM taikhoan WHERE TenTaiKhoan = '$name' AND MatKhau = '$password'";
            $result = $conn->query($sql);
            return $result;



        }


        public function logOn($name, $password){
            if(!empty($name) && !empty($password)){
                $p = new Connect();
                $conn = $p->openConnect();
                $sql = "INSERT INTO  taikhoan(TenTaiKhoan, MatKhau, LoaiTaiKhoan) values('$name', '$password', 1)";
                $result = $conn->query($sql);
                return $result;
                
            }

        }

        public function checkID($name){
            if(!empty($name)){
                $p = new Connect();
                $conn = $p->openConnect();
                $sql = "SELECT * FROM taikhoan WHERE TenTaiKhoan = '$name'";    
                $result = $conn->query($sql);
                return $result;
                
            }

        }

    }



?>