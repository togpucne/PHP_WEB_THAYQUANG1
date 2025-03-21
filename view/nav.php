<main class="inner-main">
    <div class="inner-nav">
        <nav class="navbar navbar-expand-lg ">
            <div class="container-fluid">

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        

                        <?php


                        if (isset($_SESSION['logIn'])) {
                            echo '<li class="nav-item">
                            <a class="nav-link" href="admin.php">Trang Chủ</a>
                        </li>';
                            echo '<li class="nav-item">
                                                <a class="nav-link" href="admin.php?act=dangxuat">Đăng Xuất </a>
                                            </li>';
                        } else {
                            echo '<li class="nav-item">
                            <a class="nav-link" href="index.php">Trang Chủ</a>
                        </li>';
                            echo '<li class="nav-item">
                                            <a class="nav-link" href="index.php?act=dangky">Đăng Ký </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="index.php?act=dangnhap">Đăng Nhập </a>
                                        </li>';
                        }



                        ?>


                    </ul>

                </div>
            </div>
        </nav>
    </div>

    <div class="inner-search">
        
        <div class="inner-search">
            <form action="index.php" method="get">
                <?php if (isset($_GET['typeOfProduct'])): ?>
                    <input type="hidden" name="typeOfProduct" value="<?php echo $_GET['typeOfProduct']; ?>">
                <?php endif; ?>

                <input type="text" class="form-control" name="search" placeholder="Search" aria-label="Search" value="<?php echo isset($_GET['search']) ? $_GET['search'] : ''; ?>" />
                <button class="btn btn-danger" type="submit">Search</button>
            </form>
        </div>


    </div>

</main>