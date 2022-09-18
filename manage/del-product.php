<?php
if (isset($_GET['id'])){
    $id=$_GET['id'];
    $user_name="root";
    $password="";
    $host_name="localhost";
    $database_name="shalikobi";
    $link=mysqli_connect($host_name,$user_name,$password,$database_name);
    $query="delete from product where id='$id'";
    mysqli_query($link,$query);
    header("location:product.php");
}
?>