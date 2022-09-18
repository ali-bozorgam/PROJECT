<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/gallery.css">
    <link rel="stylesheet" href="./css/main.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/animate.css" />
    <link rel="stylesheet" href="./css/flexboxgrid.css" />
    <link rel="stylesheet" href="./css/owl.carousel.min.css">
    <link rel="stylesheet" href="./css/owl.theme.default.min.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css"
    />
    <title>index
    </title>
</head>
<body>
<header>
    <nav>
            <div class="nav-right">
                <a href="">به صفحه گالری این سایت خوش امدید امیدوارم از دیدن لذت ببرید.
                </a>
                <a href=""><i class="fas fa-search"></i></a>
            </div>
            <div class="nav-left">
                <div class="register-login-btn">
                <i class="fas fa-home"></i>
                    <a href="index.html">بازگشت به خانه</a>
                </div>
            </div>
        </nav>
        
      
    </header>
    <section>
            <div class="text">
                شما هم میتوانید عکس خود را برای ما ارسال کنید.
                <div class="socials">
              <a href=""><i class="fab fa-instagram"></i></a>
              <a href=""><i class="fab fa-telegram-plane"></i></a>
            </div>
            </div>
            

        </section>
        <main>
       
             <!-- Container for the image gallery -->
<div class="container">

<!-- Full-width images with number text -->
<div class="mySlides">
  <div class="numbertext">1 / 6</div>
    <img src="./images/sli4.jpg" style="width:100%">
</div>

<div class="mySlides">
  <div class="numbertext">2 / 6</div>
    <img src="./images/sli2.jpg" style="width:100%">
</div>

<div class="mySlides">
  <div class="numbertext">3 / 6</div>
    <img src="./images/sli5.jpg" style="width:100%">
</div>

<div class="mySlides">
  <div class="numbertext">4 / 6</div>
    <img src="./images/sli.jpg" style="width:100%">
</div>

<div class="mySlides">
  <div class="numbertext">5 / 6</div>
    <img src="./images/sli8.jpg" style="width:100%">
</div>

<div class="mySlides">
  <div class="numbertext">6 / 6</div>
    <img src="./images/sli11.jpg" style="width:100%">
</div>

<!-- Next and previous buttons -->
<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

<!-- Image text -->
<div class="caption-container">
  <p id="caption"></p>
</div>

<!-- Thumbnail images -->
<div class="row">
  <div class="column">
    <img class="demo cursor" src="./images/sli4.jpg" style="width:100%" onclick="currentSlide(1)" alt=" مراحل کشت شالی به روایت تصویر">
  </div>
  <div class="column">
    <img class="demo cursor" src="./images/sli2.jpg" style="width:100%" onclick="currentSlide(2)" alt=" مراحل کشت شالی به روایت تصویر">
  </div>
  <div class="column">
    <img class="demo cursor" src="./images/sli5.jpg" style="width:100%" onclick="currentSlide(3)" alt="   مراحل کشت شالی به روایت تصویر">
  </div>
  <div class="column">
    <img class="demo cursor" src="./images/sli.jpg" style="width:100%" onclick="currentSlide(4)" alt=" مراحل کشت شالی به روایت تصویر ">
  </div>
  <div class="column">
    <img class="demo cursor" src="./images/sli8.jpg" style="width:100%" onclick="currentSlide(5)" alt=" مراحل کشت شالی به روایت تصویر  ">
  </div>
  <div class="column">
    <img class="demo cursor" src="./images/sli11.jpg" style="width:100%" onclick="currentSlide(6)" alt=" مراحل کشت شالی به روایت تصویر ">
  </div>
</div>
</div> 
</main>

       
        <script>

let slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("demo");
  let captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
} 
        </script>









<script src="./js/main.js"></script>
    <script
      src="https://code.jquery.com/jquery-3.4.1.min.js"
      integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
      crossorigin="anonymous"
    ></script>
    <script src="./js/jquery.js"></script>
    <script src="./js/owl.carousel.min.js"></script>
</body>
</html>