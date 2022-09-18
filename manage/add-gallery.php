<?php
if (isset($_POST['submit'])){
    $title=$_POST['title'];
    $text=$_POST['text'];
    $filename=$_FILES['picturs']['name'];
    $tmpname=$_FILES['picturs']['tmp_name'];
    $filesize=$_FILES['picturs']['size'];
    $uploadir='../images/uploads/gallery/';
    $filepath=$uploadir . $filename;
    $result=move_uploaded_file($tmpname, $filepath);
    if (!$result){
        echo "error uploading file";
        exit;
    }
    $user_name="root";
        $password="";
        $host_name="localhost";
        $database_name="shalikobi";
        $link= mysqli_connect($host_name,$user_name,$password,$database_name);
        $query="insert into gallery (title,text,picturs)values('$title','$text','$filename')";
        mysqli_query($link,$query);

}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css"
    />
    <link rel="stylesheet" href="../css/panel.css" />
    <link rel="stylesheet" href="../css/main.css" />
    <link rel="stylesheet" href="../css/flexboxgrid.css" />
    <title>Document</title>
  </head>
  <body>
    <div id="panel" class="panel">
      <div id="right">
        <section class="menu">
          <div class="user-info">
            <div class="img-name">
              <img src="../images/panel.jpg" alt="" />
              <span class="name">
               </span>
              <i onclick="toggleUserDetails()" class="fas fa-angle-up"></i>
            </div>
            <div class="details">
              <div class="details-item">
                <span> سطح دسترسی :</span>
                <span> ادمین</span>
              </div>
              <div class="details-item">
                <span> وضعیت : </span>
                <span>آنلاین</span>
              </div>
            </div>
          </div>
          <div class="menu-btns">
            <a class="item" href="panel.php">
              <i class="fas fa-bell"></i>
              <span>داشبورد</span>
            </a>
            <a class="item item-active" href="user.php">
              <i class="fas fa-bell"></i>
              <span> کاربران</span>
            </a>
            <a class="item" href="product.php">
              <i class="fas fa-bell"></i>
              <span>محصولات </span>
            </a>
            <a class="item" href="gallery.php">
              <i class="fas fa-bell"></i>
              <span>گالری تصاویر</span>
            </a>
            <a class="item" href="news.php">
              <i class="fas fa-bell"></i>
              <span> اخبار</span>
            </a>
            <a class="item" href="about.php">
              <i class="fas fa-bell"></i>
              <span> درباره ما</span>
            </a>
            <a class="item" href="calls.php">
              <i class="fas fa-bell"></i>
              <span> تماس با ما</span>
            </a>
          </div>
        </section>
      </div>
      <div id="left">
        <section class="main-box">
          <header>
            <nav>
              <div class="right">
                <i onclick="togglePanel()" class="fas fa-bars"></i>
                <div class="search">
                  <input type="text" />
                  <i class="fas fa-search"></i>
                </div>
              </div>
              <div class="left">
                <a href=""><i class="fas fa-bell"></i></a>
                <a href=""><i class="fas fa-cog"></i></a>
                <a href=""><i class="fas fa-power-off"></i></a>
              </div>
            </nav>
            <div class="header-message">
              <h3>اخرین ورود به صفحه </h3>
              <a href="" class="lang-btn">فارسی</a>
            </div>
          </header>
         

        </section>
       
       <div class="content2">
        <form action="#"method="post"enctype="multipart/form-data">
      <div class="afzodan">
        <div class="text"> <span>محتویات خود را به گالری عکس اضافه کنید.</span></div>
        <div class="inputha">
        <div class="g-input">
            <label for="">عنوان :</label>
            <input type="text" name="title">
            </div>
            <div class="g-input">
            <label for=""> متن:</label>
            <input type="text" name="text">
            </div>
            <div class="g-input">
            <label for=""> عکس:</label>
            <input type="file" name="picturs">
            </div>
            <div class="g-input">
            <label for="">با افزودن اضافه کنید</label>
            <input type="submit" value="افزودن" name="submit">
            </div>

        </div>
      </div>
      </form>
       </div>
       
        
              </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.0/dist/Chart.min.js"></script>
    <script src="../js/panel.js"></script>
  
</body>
</html>