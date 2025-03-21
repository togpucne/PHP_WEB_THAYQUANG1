<div class="inner-right">
    <h1 class="text-center">Trang Chủ</h1>
    <?php
   
    if (!class_exists('productsController')) {
        include "./controller/productsController.php";    }

        if (!class_exists('searchController')) {
            include "./controller/searchController.php";
        }
    $p = new productsController();
    $searchController = new searchController();

    if (isset($_GET['search']) && isset($_GET['typeOfProduct'])) {
        $searchKey = $_GET['search'];
        $iddm = $_GET['typeOfProduct']; 
        $sanpham = $searchController->searchKeyController($searchKey, $iddm);
    } elseif (isset($_GET['search'])) {
        $searchKey = $_GET['search'];
        $sanpham = $searchController->searchKeyController($searchKey);
    } elseif (isset($_GET['typeOfProduct'])) {
        $type = $_GET['typeOfProduct'];
        $sanpham = $p->getDBProductsOfType($type);
    } else {
        $selectSP = "SELECT * FROM sanpham";
        $sanpham = $p->getDBProducts($selectSP);
    }
    
    if( $sanpham->num_rows <= 0){
        echo '<p>Chưa có sản phẩm. Vui lòng quay lại sao!</p>';

    }

    if ($sanpham === false) {
        echo '<p>Không tìm thấy sản phẩm!</p>';
    } else {
        echo '<div class="row justify-content-start">';
        while ($row = $sanpham->fetch_assoc()) {
            echo '<div class="col-3">
                <div class="sanpham">
                    <a href="chitietsanpham.php?id=' . $row['idsp'] . '">
                        <div class="tensp">' . $row['tensp'] . '</div>
                        <div class="hinh">
                            <img src="' . $row['hinh'] . '" width="150" height="150" />
                        </div>
                        <div class="gia">Giá: ' . $row['giamgia'] . ' USD</div>
                        <div class="giam-gia">' . $row['gia'] . ' USD</div>
                    </a>
                </div>
            </div>';
        }
        echo '</div>';
    }

    ?>
</div>
</section>