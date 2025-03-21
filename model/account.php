<?php 
    include_once './model/connect.php';
    class Account{         
        public function logInModel($name, $password){
            $p = new Connect();
            $conn = $p->openConnect();
            $sql = "SELECT * FROM taikhoan WHERE TenTaiKhoan = '$name' AND MatKhau = '$password'";
            $result = $conn->query($sql);
            return $result;



        }

        public function selectAllAccountModel(){
            $p = new Connect();
            $conn = $p->openConnect();
            $sql = "SELECT * FROM taikhoan";
            $result = $conn->query($sql);
            return $result;
        }
        
    }




?>