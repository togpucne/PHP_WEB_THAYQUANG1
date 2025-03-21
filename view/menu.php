
<section class="inner-section">
                        <div class="inner-left">
                            <center><h2>Menu</h2></center>
                            <ul class="">
                            <?php 
                                        if(isset($_SESSION['logIn'])){
                                           
                                                echo '<li class="nav-item">
                                                <a class="nav-link" href=admin.php?act=quanlytaikhoan> Quản Lý Tài Khoản</a>
                                                     </li>';
                                                echo '<li class="nav-item">
                                                     <a class="nav-link" href=admin.php?act=quanlysanpham>Quản Lý Sản Phẩm</a>
                                                    </li>';
                                                     
                                        
                                        }else{
                                                    include './controller/topController.php';
                                                $p = new topController();
                                                $result = $p->getDBTOP();
                                                while($row = $result->fetch_assoc()){
                                                    echo '<li class="nav-item">
                                                    <a class="nav-link" href=index.php?typeOfProduct='.$row['iddm'].'>'.$row['tendanhmuc'].'</a>
                                                </li>';
                                            }
                                    
                                        }
                            ?>
                                                                
                            </ul>
                        </div>


