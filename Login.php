<?php
session_start();
    $conn = mysqli_connect("localhost", "root", "", "quanlyvanban");
    mysqli_set_charset($conn, 'UTF8');
if (isset($_POST['submit'])) {
    $err = [];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM nguoidung";
    $result = mysqli_query($conn, $sql);
    $query = mysqli_fetch_all($result);
    foreach ($query as $item) {
        if ($item[1] == $username && $item[2] == $password) {
            $_SESSION['username'] = $username;
                    if($_SESSION['username']=='admin'){
                        header("location:Trangchu.php");
                    }else{
                        header("location:index.php");
                    }
        } else if ($username == "" && $password == "") {
            $err = "Không được để trống";
        } else {
            $err = "Tên đăng nhập hoặc mật khẩu không chính xác";
        }

        //selec where '%%'
    }
}
?>
<link rel="stylesheet" href="./css/login.css">
<div class="body">
<div class="return">
<!-- <a href="index.php">
    <li class="return-text"><i class="fa-solid fa-rotate-left"></i> Quay lại trang chủ</li>
</a> -->
</div>
<div class="login-page">
    <?php
    if(!empty($_GET['noti'])){
        $noti = $_GET['noti'];
        echo '<p style="color: pink"><?= $noti ?></p>';
    }
    ?>
    <div class="form">
        <h2 class="title_login">Đăng nhập</h2>
        <form class="login-form" method="POST" action="">
            <input type="text" placeholder="username" name="username">
            <input type="password" placeholder="password" name="password">
            <input type="submit" name="submit" class="submit" value="Đăng nhập">
            <?php
            if(!empty($err)){
                echo '<p style="color: red;">';
                echo $err;
                echo '</p>';
            }
            ?>
            <!-- <p class="message">Không có tài khoản? <a href="register.php">Đăng kí ngay</a></p> -->
        </form>
    </div>
</div>
</div>