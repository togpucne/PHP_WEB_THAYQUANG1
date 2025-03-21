<div class="inner-right" style="text-align: center; display: flex; flex-direction: column; align-items: center; padding: 0px 0px 10px 0px;">
    <h1 class="text-center">Trang Quản Lý Sản Phẩm</h1>
    <?php
   
    if (!class_exists('productsController')) {
        include "./controller/productsController.php";    }

        if (!class_exists('searchController')) {
            include "./controller/searchController.php";
        }
    $p = new productsController();
    $searchController = new searchController();
    $sanpham = $p->getDBProducts();
    if( $sanpham->num_rows <= 0){
        echo '<p>Chưa có sản phẩm. Vui lòng quay lại sao!</p>';

    }

    if ($sanpham === false) {
        echo '<p>Không tìm thấy sản phẩm!</p>';
    } else {
        echo '<table style="border: 1px solid black; border-collapse: collapse; margin: 10px 20px; width: 80%;"> 
        <thead>
            <tr style="background-color: #f2f2f2; text-align: center;">
                <th style="border: 1px solid black; padding: 8px;">ID</th>
                <th style="border: 1px solid black; padding: 8px;">Tên Sản Phẩm</th>
                <th style="border: 1px solid black; padding: 8px;">Hình Ảnh</th>
                <th style="border: 1px solid black; padding: 8px;">Giá Giảm</th>
                <th style="border: 1px solid black; padding: 8px;">Giá Gốc</th>
                <th style="border: 1px solid black; padding: 8px;">Áp Dụng</th>
            </tr>
        </thead>
        <tbody>';

while ($row = $sanpham->fetch_assoc()) {
    echo '
        <tr style="text-align: center;">
            <td style="border: 1px solid black; padding: 8px;">' . $row['idsp'] . '</td>  
            <td style="border: 1px solid black; padding: 8px;">' . $row['tensp'] . '</td>
            <td style="border: 1px solid black; padding: 8px;">
                <img src="' . $row['hinh'] . '" width="100" height="100" style="border-radius: 8px;">
            </td>
            <td style="border: 1px solid black; padding: 8px; color: red; font-weight: bold;">' . $row['giamgia'] . ' USD</td>
            <td style="border: 1px solid black; padding: 8px; text-decoration: line-through; color: gray;">' . $row['gia'] . ' USD</td>
            <td style="border: 1px solid black; padding: 8px;">
                <a href="chitietsanpham.php?id=' . $row['idsp'] . '" style="color: blue; text-decoration: none;">Chỉnh Sửa</a>
            </td>
        </tr>';
}

echo '</tbody></table>';

    }

    ?>
</div>
</section>