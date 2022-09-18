<?php
if (isset($_GET['id'])){
    $id=$_GET['id'];
    $user_name="root";
    $password="";
    $host_name="localhost";
    $database_name="shalikobi";
    $link=mysqli_connect($host_name,$user_name,$password,$database_name);
    $query="select * from about where id='$id'";
    $result=mysqli_query($link,$query);
    $record=mysqli_fetch_array($result);


}


?>
<?php
if (isset($_POST['submit'])){
    $info=$_POST['info'];
    $text=$_POST['text'];
    $picturs=$_POST['picturs'];
    $user_name="root";
    $password="";
     $host_name="localhost";
     $database_name="shalikobi";
     $link=mysqli_connect($host_name,$user_name,$password,$database_name);
     $query=" update about set info=' $info ',text=' $text ',picturs=' $picturs ' where id='$id' ";
     mysqli_query($link, $query);
     header("location:about.php");
}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/main.css" />
    <link rel="stylesheet" href="../css/user.css" />
    <link rel="stylesheet" href="../css/flexboxgrid.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css"
    />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>edit</title>
</head>
<body>
  
    <main>
        <div class="login-container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="login-box">
                        <form action="#" method="post">
                            <div class="input-group">
                                <label for="">اطلاعات:</label>
                                <input type="text" value="<?php echo $record['info'];?>" name="info">
                               
                            </div>
                            <div class="input-group">
                                <label for=""> متن:</label>
                                <input type="text" value="<?php echo $record['text'];?>" name="text">
                            </div>
                            <div class="input-group">
                                <label for=""> عکس:</label>
                                <input type="file" value="<?php echo $record['picturs'];?>" name="picturs">
                            </div>
                           
                            <p class="do-you-have">
                              اطلاعات را اصلاح کنید و دکمه ویرایش را کلیک کنید.
                            </p>
                            <div class="submit-btn-container">
                                <input value="ویرایش" type="submit" name="submit">
                            </div>
                        </form>
                       
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="login-img-container">
                        <img src="../svg/user.svg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>