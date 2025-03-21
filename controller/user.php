<?php
    if (!class_exists('Account')) {
        include './model/account.php';
    }
    
    class User{
        public function logInController($tdn,$mk)
        {
            $p = new Account();
            $mk = md5($mk);
            $tblTK = $p->logInModel($tdn,$mk);
            if(!$tblTK)
                {
                    echo ("<script>alert('Lõi kết nối liên hệ admin')</script>");
                    header("refresh:0; url='index.php?act=dangnhap'");

                }
            else if($tblTK->num_rows > 0)
                {
                    $_SESSION["dn"] = true;
                    echo ("<script>alert('Đăng nhập thành công!!!')</script>");
                    header("refresh:0; url='admin.php'");

                }
            else 
                {
                    echo ("<script>alert('Sai thông tin tài khoản!!!')</script>");
                    header("refresh:0; url='index.php?act=dangnhap'");
                    
                }
            
            
        }

        
        public function selectAllAccountController(){
            $p = new Account();
            $result = $p->selectAllAccountModel();
            return $result;
        }

        public function logOut(){
            session_unset();
            session_destroy();
        }

    
    }
?>