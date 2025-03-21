<?php
    include_once './controller/logOnController.php';
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['name'];
        $password = $_POST['password'];
        $p = new logOnController();
        $p->logOn($username, $password);
        $userData = "$username|$password\n";
        file_put_contents('users.txt', $userData, FILE_APPEND);
        
        $_SESSION['logOn'] = true;

        exit();
    }
?>
<div class="inner-right">
    <center>
        <h2 style="color: red;">Đăng Ký</h2>
    </center>
    <form action="#" method="post" name="formLogOn">
        <div class="m-3 ">
            <label for="exampleInputname1" class="form-label">Name:</label>
            <input type="text" class="form-control" id="exampleInputname1" aria-describedby="nameHelp" name="name" placeholder="Enter name">
        </div>
        <div class="m-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Enter password">
        </div>

        <button type="submit" class="btn btn-danger m-3">Đăng ký</button>
    </form>


</div>
</section>