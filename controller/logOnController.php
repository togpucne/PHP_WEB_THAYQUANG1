<?php
include './model/logOnModel.php';

class logOnController {
    public function logOn($name, $password) {
        $p = new logOnModel();
        
       
        $checkID = $p->checkID($name);
        if ($checkID->num_rows > 0) {
            echo '<script>alert("Tài khoản đã tồn tại, vui lòng chọn tên khác!")</script>';
            header("refresh:0; url=index.php?act=dangky");
            exit();
        }

        
        $hashedPassword = md5($password);

        
        $checkLogOn = $p->logOn($name, $hashedPassword);
        if ($checkLogOn) {
            echo '<script>alert("Đăng ký thành công!")</script>';
            header("refresh:0; url=index.php?act=dangnhap");
            exit();
        } else {
            echo '<script>alert("Có lỗi xảy ra khi đăng ký tài khoản!")</script>';
            header("refresh:0; url=index.php?act=dangky");
            exit();
        }
    }
}
?>
