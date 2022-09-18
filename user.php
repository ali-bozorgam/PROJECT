<?php
session_start();
if ($_SESSION['bilitu']==0){
    header("location:login.php");
}
$id=$_SESSION['bilitu'];
$user_name="root";
$password="";
$host_name="localhost";
$database_name="shalikobi";
$link=mysqli_connect($host_name,$user_name,$password,$database_name);
$query= "select * from user where id=$id";
$result=mysqli_query($link,$query);
$record=mysqli_fetch_array($result);
echo $record['name'];
echo $record['l_name'];



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    
</head>
<body>
<p>کاربر گرامی اطلاعات شما در سایت ما ثبت شد.</p>
</body>
</html>