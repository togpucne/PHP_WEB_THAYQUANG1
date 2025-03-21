<?php
    include './controller/user.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        include_once("./controller/user.php");
        $p = new User();
        $p->logInController($_POST["name"], $_POST["password"]);
        $_SESSION['logIn'] = true;
    }
    ?>
<div class="inner-right">

    <center>
        <h2 style="color: red;">Đăng Nhập</h2>
    </center>
    <form action="#" method="post" name="formLogOn">
        <div class="m-3 ">
            <label for="exampleInputName" class="form-label">Name:</label>
            <input type="text" class="form-control" id="exampleInputName" aria-describedby="nameHelp" name="name" placeholder="Enter name">
        </div>
        <div class="m-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Enter password">
        </div>

        <button type="submit" class="btn btn-danger m-3" >Đăng Nhập</button>
    </form>


</div>
</section>