<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);
class Connect {
    public function openConnect() {
        $host = "localhost"; 
        $user = "admin1"; 
        $pass = "admin1"; 
        $db   = "quanlybanhang"; 
        $port = 3307;
       

        $conn = mysqli_connect($host, $user, $pass, $db, $port);

     
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
