<?php 
include './model/searchModel.php';

class searchController {
    public function searchKeyController($keyword, $iddm = null) {
        if (empty($keyword)) {
            return false;
        }
        $p = new searchModel();
        $result = $p->searchKeyModel($keyword, $iddm);
        return ($result) ? $result : false;
    }
}
?>
