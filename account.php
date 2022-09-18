<?php
$e_name=$e_l_name=$e_tel=$e_pass=0;
$name=$l_name=$tel=$pass="";
if (isset ($_POST['submit'])){
    $name= $_POST['name'];
    $l_name= $_POST['l_name'];
    $tel= $_POST['tel'];
    $pass= $_POST['pass'];

    if ($name==""){
        $e_name=1;
    }
    if ($l_name==""){
        $e_l_name=1;
    }
    if ($tel==""){
        $e_tel=1;
    }
    else if (strlen($tel)!=11){
        $e_tel=2;
    }
    if ($pass==""){
        $e_pass=1;
    }
    $pass=sha1(md5($pass));
    if ($e_name==0&&$e_l_name==0&&$e_tel==0&&$e_pass==0){
        $user_name="root";
        $password="";
        $host_name="localhost";
        $database_name="shalikobi";
        $link = mysqli_connect($host_name, $user_name, $password, $database_name);
        $query = "insert into user(name,l_name,tel,password)value('$name','$l_name','$tel','$pass')";
        mysqli_query($link, $query);
        echo '<script> alert("مشخصات شما ثبت شد")</script>';
    }
        else{
            echo '<script> alert(" اطلاعات شما کامل نیست")</script>';
        }


    }



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/main.css" />
    <link rel="stylesheet" href="./css/user.css" />
    <link rel="stylesheet" href="./css/flexboxgrid.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css"
    />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>account</title>
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
                                <label for="">نام:</label>
                                <input type="text" value="<?php echo $name; ?>" name="name" <?php if ($e_name==1) {
                                 echo 'style="border: 1px solid red"'; }?>>
                                <?php
                                if ($e_name==1){
                                    echo 'نام خود را وارد کنید';
                                }
                                ?>
                            </div>
                            <div class="input-group">
                                <label for="">نام خانوادگی:</label>
                                <input type="text" value="<?php echo $l_name; ?>" name="l_name" <?php if ($e_l_name==1) {
                                 echo 'style="border: 1px solid red"'; }?>>
                                <?php
                                if ($e_l_name==1){
                                    echo 'نام خانوادگی را وارد کنید';
                                }
                                ?>
                            </div>
                            <div class="input-group">
                                <label for="">شماره تماس:</label>
                                <input type="tel" value="<?php echo $tel; ?>" name="tel" <?php if ($e_tel==1) {
                                 echo 'style="border: 1px solid red"'; }?>>
                                <?php
                                if ($e_tel==1){
                                    echo 'شماره تلفن وارد کنید';
                                }
                                ?>
                                <?php
                                if ($e_tel==2){
                                    echo 'شماره تلفن یازده رقمی باشد';
                                }
                                ?>
                            </div>
                            <div class="input-group">
                                <label for="">کلمه عبور:</label>
                                <input type="password" value="<?php echo $pass; ?>" name="pass" <?php if ($e_pass==1) {
                                 echo 'style="border: 1px solid red"'; }?>>
                                <?php
                                if ($e_pass==1){
                                    echo 'رمز عبوری برای خود بزنید';
                                }
                                ?>
                            </div>
                            <p class="do-you-have">
                                حساب کاربری خود را اینجا بسازید.
                                <a href="login.php">حساب کاربری دارید اینجا کلیک کنید.</a>
                                
                            </p>
                            <div class="submit-btn-container">
                                <input value="ثبت" type="submit" name="submit">
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
                        <img src="./svg/user.svg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>