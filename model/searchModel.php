<?php
include_once './model/connect.php';

class searchModel {
    public function searchKeyModel($keyword, $iddm = null) {
        $p = new Connect();
        $conn = $p->openConnect(); 

        $sql = "SELECT * FROM sanpham WHERE LOWER(tensp) LIKE ?";
        if (!empty($iddm)) {
            $sql .= " AND iddm = ?";
        }

        $stmt = $conn->prepare($sql);
        $param = "%" . strtolower($keyword) . "%";

        if (!empty($iddm)) {
            $stmt->bind_param("si", $param, $iddm);
        } else {
            $stmt->bind_param("s", $param);
        }

        $stmt->execute();
        $result = $stmt->get_result();

        return ($result->num_rows > 0) ? $result : false;
    }
}
?>
