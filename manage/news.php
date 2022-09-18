
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
            <a class="item" href="#">
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
        <div class="afzodann">
                <a href="add-news.php">افزودن</a>
              </div>
       
       <div class="content2">
       <div style="width:100%;height: 7%;float: right;background: deepskyblue">
       <div style="width:14%;float: right;border: 1px solid white;box-shadow: inset 7px 0 10px rgba(114, 114, 114, 0.6);color:white;text-align: center; padding: 5px 0px"><span>شناسه</span></div>
       <div style="width:14%;float: right;border: 1px solid white;box-shadow: inset 7px 0 10px rgba(114, 114, 114, 0.6);color:white;text-align: center;padding: 5px 0px"><span>عنوان </span></div>
       <div style="width:16%;float: right;border: 1px solid white;box-shadow: inset 7px 0 10px rgba(114, 114, 114, 0.6);color:white;text-align: center;padding: 5px 0px"><span>متن </span></div>
       <div style="width:14%;float: right;border: 1px solid white;box-shadow: inset 7px 0 10px rgba(114, 114, 114, 0.6);color:white;text-align: center;padding: 5px 0px"><span>عکس</span></div>
       <div style="width:14%;float: right;border: 1px solid white;box-shadow: inset 7px 0 10px rgba(114, 114, 114, 0.6);color:white;text-align: center;padding: 5px 0px"><span>تارخ</span></div>
       <div style="width:14%;float: right;border: 1px solid white;box-shadow: inset 7px 0 10px rgba(114, 114, 114, 0.6);color:white;text-align: center;padding: 5px 0px"><span>حذف</span></div>
       <div style="width:14%;float: right;border: 1px solid white;box-shadow: inset 7px 0 10px rgba(114, 114, 114, 0.6);color:white;text-align: center;padding: 5px 0px"><span>ویرایش</span></div>
  
       </div>
       <?php
       $user_name="root";
       $password="";
       $host_name="localhost";
       $database_name="shalikobi";
       $link=mysqli_connect($host_name,$user_name,$password,$database_name);
       if (isset($_GET['c'])){
        $c=$_GET['c'];
       }
       else{
        $c=1;
       }
       $c--;
       $c=$c*8;
       $query="select * from news limit $c,8";
       $result=mysqli_query($link,$query);
       while ($record=mysqli_fetch_array($result)){
        echo '
        
        <div style="width:100%;height: 7%;float: right">
       <div style="width:14%;float: right;border: 1px solid white;box-shadow: inset 7px 0 10px rgba(114, 114, 114, 0.6);color:white;text-align: center; padding: 5px 0px;color:#333"><span>'.$record['id'].'</span></div>
       <div style="width:14%;float: right;border: 1px solid white;box-shadow: inset 7px 0 10px rgba(114, 114, 114, 0.6);color:white;text-align: center;padding: 5px 0px;color:#333"><span>'.$record['title'].' </span></div>
       <div style="width:16%;float: right;border: 1px solid white;box-shadow: inset 7px 0 10px rgba(114, 114, 114, 0.6);color:white;text-align: center;padding: 5px 0px;color:#333"><span>'.$record['text'].' </span></div>
       <div style="width:14%;float: right;border: 1px solid white;box-shadow: inset 7px 0 10px rgba(114, 114, 114, 0.6);color:white;text-align: center;padding: 5px 0px;color:#333"><span>'.$record['picturs'].'</span></div>
       <div style="width:14%;float: right;border: 1px solid white;box-shadow: inset 7px 0 10px rgba(114, 114, 114, 0.6);color:white;text-align: center;padding: 5px 0px;color:#333"><span>'.$record['date'].'</span></div>
       <div style="width:14%;float: right;border: 1px solid white;box-shadow: inset 7px 0 10px rgba(114, 114, 114, 0.6);color:white;text-align: center;padding: 5px 0px;color:#333"><a href="del-news.php?id='.$record['id'].'"><span>حذف</span></a></div>
       <div style="width:14%;float: right;border: 1px solid white;box-shadow: inset 7px 0 10px rgba(114, 114, 114, 0.6);color:white;text-align: center;padding: 5px 0px;color:#333"><a href="ed-news.php?id='.$record['id'].'"><span>ویرایش</span></a></div>
  
       </div>
        
        
        
        ';
       }

?>
       <div style="width: 100%;height: 7%;float: right">
<?php

            $query="select * from news ";
            $result=mysqli_query($link,$query);
            $count=mysqli_num_rows($result);
            $count=ceil($count/8);
            for ($i=1;$i<=$count;$i++){
                echo '<div style="width: 6%;float: right;background: #ccc;margin-right: 5px;margin-top: 5px; border-radius: 10px;text-align: center;font-size: 1.1em;  padding-top: 2px; color: red"><a href="?c='.$i.'">'.$i.'</a></div>';
            }
            ?>
        
           
   
        
              </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.0/dist/Chart.min.js"></script>
    <script src="../js/panel.js"></script>
  
</body>
</html>