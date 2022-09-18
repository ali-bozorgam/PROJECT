<?php
session_start();
if ($_SESSION['bilita']==0){
    header("location:../login.php");
}
$id=$_SESSION['bilita'];
$user_name="root";
$password="";
$host_name="localhost";
$database_name="shalikobi";
$link=mysqli_connect($host_name,$user_name,$password,$database_name);
$query="select * from user where id=$id";
$result=mysqli_query($link,$query);
$record=mysqli_fetch_array($result);

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
              <span class="name"> <?php
                echo $record['name'];
                echo ".";
                echo $record['l_name'];
                ?></span>
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
            <a class="item" href="#">
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
                <a href="../index.html"><i class="fas fa-power-off"></i></a>
              </div>
            </nav>
            <div class="header-message">
              <h3>اخرین ورود به صفحه </h3>
              <a href="" class="lang-btn">فارسی</a>
            </div>
          </header>
          <!--<div class="holder">
            <div class="row">
              <div class="col-lg-3">
                <div class="mini-card-report">
                  <div class="right">
                    <i class="fas fa-clipboard-list"></i>
                  </div>
                  <div class="left">
                    <span>تکمیل انبار</span>
                    <span>400</span>
                  </div>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="mini-card-report">
                  <div class="right">
                    <i class="fas fa-clipboard-list"></i>
                  </div>
                  <div class="left">
                    <span>تکمیل انبار</span>
                    <span>400</span>
                  </div>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="mini-card-report">
                  <div class="right">
                    <i class="fas fa-clipboard-list"></i>
                  </div>
                  <div class="left">
                    <span>تکمیل انبار</span>
                    <span>400</span>
                  </div>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="mini-card-report">
                  <div class="right">
                    <i class="fas fa-clipboard-list"></i>
                  </div>
                  <div class="left">
                    <span>تکمیل انبار</span>
                    <span>400</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="revenue-box">
              <div class="head">
                <div class="right">
                  دآمد
                </div>
                <div class="left">
                  <i class="fas fa-cog"></i>
                  <i class="fas fa-redo"></i>
                </div>
              </div>
              <div class="content">
                <canvas id="myChart" width="300" height="150"></canvas>
              </div>
            </div>
          </div>-->
          

        </section>
        <div class="content2">
              
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.0/dist/Chart.min.js"></script>
    <script src="../js/panel.js"></script>
  
</body>
</html>