<?php
    session_start();
   
        include './view/header.php';
        include './view/nav.php';
        include './view/menu.php';
        if(isset($_GET['act'])){
            $act = $_GET['act'];
            switch ($act) {
                case 'dangnhap':
                    include './view/dangnhap.php';
                    break;
                case 'dangky':
                    include './view/dangky.php';
                    break;
                
                default:
                    include './view/trangchu.php';
                    break;
            }
            }else{

                include './view/trangchu.php';
            }
        include './view/footer.php';
    
?>


              

