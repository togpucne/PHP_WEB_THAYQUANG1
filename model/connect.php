<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);
class Connect {
    public function openConnect() {
        $host = "localhost"; // Hoặc đúng MySQL Host bạn tìm thấy trong cPanel
        $user = "admin2"; 
        $pass = "admin2"; 
        $db   = "quanlybanhang"; 
        $port = 3307;
       

        $conn = mysqli_connect($host, $user, $pass, $db, $port);

        // Kiểm tra kết nối có lỗi hay không
        if (!$conn) {
            die("Kết nối thất bại: " . mysqli_connect_error());
        } 
        return $conn;
    }

    public function closeConnect($conn) {
        if ($conn) {
            $conn->close();
        }
    }
}
?>
