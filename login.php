<?php
session_start();
$_SESSION['bilita']=0;
$_SESSION['bilitu']=0;
$e_tel=$e_pass=0;
$tel=$pass="";
if (isset($_POST['submit'])){
    $tel=$_POST['tel'];
    $pass=$_POST['pass'];
    if ($tel==""){
        $e_tel=1;
    }
    if ($pass==""){
        $e_pass=1;
    }
    $pass=sha1(md5($pass));
    $user_name="root";
    $password="";
    $host_name="localhost";
    $database_name="shalikobi";
    $link= mysqli_connect($host_name,$user_name,$password,$database_name);
    $query="select * from user where tel='$tel'and password='$pass'";
    $result=mysqli_query($link,$query);
    if (mysqli_num_rows($result)==1){
        $record=mysqli_fetch_array($result);
        if ($record['type']==1) {
            $_SESSION['bilita'] =$record['id'];
        header("location:./manage/panel.php");
    }
     else{
        $_SESSION['bilitu']=1;
        header("location:user.php");
     }
 }
}
 
 
 ?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/main.css" />
    <link rel="stylesheet" href="./css/login.css" />
    <link rel="stylesheet" href="./css/flexboxgrid.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css"
    />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>
</head>
<body>
    <nav>
        <div class="nav-right">
            <a href=""><i class="far fa-user"></i></a>
            <a href="products.php"><i class="fas fa-shopping-cart"></i></a>
            <a href="index.html"><i class="fas fa-home"></i></a>
           
        </div>
    </nav>
    <main>
        <div class="login-container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="login-box">
                        <form action="#" method="post">
                            <div class="input-group">
                                <label for="">نام کاربری :</label>
                                <input type="tel" name="tel" value="<?php echo $tel; ?>"
                                <?php
                                if ($e_tel==1){
                                    echo 'style="border: 1px solid red"';
                                }

                                ?>
                                >
                                <?php
                                if ($e_tel==1){
                                    echo 'شماره تلفن خود را وارد کنید';
                                }
                                ?>
                            </div>
                            <div class="input-group">
                                <label for="">رمز عبور :</label>
                                <input type="password" name="pass" value="<?php echo $pass; ?>"
                                <?php
                                if ($e_pass==1){
                                    echo 'style="border: 1px solid red"';
                                }

                                ?>
                                >
                                <?php
                                if ($e_pass==1){
                                    echo 'رمز عبور خود را وارد کنید';
                                }
                                ?>
                            </div>
                            <p class="do-you-have">
                                حساب کاربری ندارید ؟
                                <a href="account.php">ایجاد حساب کاربری</a>
                                کمتر از یک دقیقه از زمان شما را خواهد گرفت
                            </p>
                            <div class="submit-btn-container">
                                <input value="ورود" type="submit" name="submit">
                            </div>
                        </form>
                        <div class="social-auth">
                            <a href=""><i class="fab fa-facebook-f"></i></a>
                            <a href=""><i class="fab fa-google-plus-g"></i></a>
                            <a href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="login-img-container">
                        <img src="./svg/admin.svg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>