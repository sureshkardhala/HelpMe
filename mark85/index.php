
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="static/css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/v4-shims.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
  </head>


  <?php if (isset($user_id)) {
    echo "<script>window.location='landing.php'</script>";
  }
?>


 <!--  <script>
    function scrollToTop(){
      window.scrollTo(0,0);
    }
  </script> -->
<?php include('config.php'); ?>
<?php include('registration/signup.php'); ?>
<?php include('registration/signin.php'); ?>


  <body>
  <div class="header-main">
    <h2 class="logo">HelpMe</h2>
    <ul class="menu">
      <a onclick="openLoginFormUp()" href="#">Sign Up</a>
      <a onclick="openLoginFormIn()" href="#">Sign In</a>
    </ul>
  </div>


<div class="labels">
  <center>
      <h2>Labels</h2>
  </center>
</div>
<div class="content-label">
    
    <div class="labels-info">
    <a href="app/labelspath/programming.html"><h5 style="color:#5c3c92;">@Programming</h5></a>
    <a href="app/labelspath/education.html"><h5 style="color:#d72631;">@Education</h5></a>
    <a href="app/labelspath/technology.html"><h5 style="color:#e8d21d;">@Technology</h5></a>
    <a href="app/labelspath/maths.html"><h5 style="color:#b20238;">@Maths</h5></a>
    <a href="app/labelspath/machinelearning.html"><h5 style="color:#ff6e40;">@Machine Learning</h5></a>
    <a href="app/labelspath/hacking.html"><h5 style="color:#ffc13b;">@Hacking</h5></a>
    <a href="app/labelspath/science.html"><h5 style="color:#c4a35a;">@Science</h5></a>
    <a href="app/labelspath/apptitude.html"><h5 style="color:#7a2048;">@Aptitude</h5></a>
    <a href="app/labelspath/installations.html"><h5 style="color:#77c593;">@Installations</h5></a>
    <a href="app/labelspath/electronics.html"><h5 style="color:#322514;">@Electronics</h5></a>
    </div>
</div>
<br>


<div class="page-wrapper">
  
<!-- Post Slider-->
  <div class="post-slider">
    <h2 class="slider-title">Recent Posts</h2>
    <!-- <i class="fas fa-chevron-left prev"></i>
    <i class="fas fa-chevron-right next"></i> -->
    <h2 style=" margin-left: 10%;cursor: pointer; color:#5c3c92;
    ">@Programming</h2>
    <div class="post-wrapper">
        <div class="post">
          <img src="assets/images/eco.png" class="slider-image">
          <div class="post-info">
            <h4 style="margin: 5px;"><a href="helll.html">Help me with my E-Commerece Site</a></h4>
            <i class="far fa-user">   Abrar</i>
            &nbsp;
            <i class="fas fa-calendar-week">    May 2, 2020</i>
          </div>
        </div>


        <div class="post">
          <img src="assets/images/bluestacks.jpg" class="slider-image">
          <div class="post-info">
            <h4 style="margin: 5px;"><a href="helll.html">Help me with my E-Commerece Site</a></h4>
            <i class="far fa-user">   Abrar</i>
            &nbsp;
            <i class="fas fa-calendar-week">   May 2, 2020</i>
          </div>
        </div>

        <div class="post">
          <img src="assets/images/ml.jpg" class="slider-image">
          <div class="post-info">
            <h4 style="margin: 5px;"><a href="helll.html">Help me with my E-Commerece Site</a></h4>
            <i class="far fa-user">   Abrar</i>
            &nbsp;
            <i class="fas fa-calendar-week">   May 2, 2020</i>
          </div>
        </div>

        <div class="post">
          <img src="assets/images/earn.jpg" class="slider-image">
          <div class="post-info">
            <h4 style="margin: 5px;"><a href="helll.html">Help me with my E-Commerece Site</a></h4>
            <i class="far fa-user">   Abrar</i>
            &nbsp;
            <i class="fas fa-calendar-week">   May 2, 2020</i>
          </div>
        </div>  
    </div>
  </div>

</div>
<!-- 2 Label Start-->

<div class="page-wrapper">
  
    <!-- Post Slider-->
    
      <div class="post-slider"><br>
        <h2 class="slider-title">Recent Posts</h2>
        <!-- <i class="fas fa-chevron-left prev"></i>
        <i class="fas fa-chevron-right next"></i> -->
        <h2 style=" margin-left: 10%; cursor: pointer; color:#d72631;">@Education</h2>    
        <div class="post-wrapper">
            <div class="post">
              <img src="assets/images/eco.png" class="slider-image">
              <div class="post-info">
                <h4 style="margin: 5px;"><a href="helll.html">Help me with my E-Commerece Site</a></h4>
                <i class="far fa-user">   Abrar</i>
                &nbsp;
                <i class="fas fa-calendar-week">    May 2, 2020</i>
              </div>
            </div>
    
    
            <div class="post">
              <img src="assets/images/bluestacks.jpg" class="slider-image">
              <div class="post-info">
                <h4 style="margin: 5px;"><a href="helll.html">Help me with my E-Commerece Site</a></h4>
                <i class="far fa-user">   Abrar</i>
                &nbsp;
                <i class="fas fa-calendar-week">   May 2, 2020</i>
              </div>
            </div>
    
            <div class="post">
              <img src="assets/images/ml.jpg" class="slider-image">
              <div class="post-info">
                <h4 style="margin: 5px;"><a href="helll.html">Help me with my E-Commerece Site</a></h4>
                <i class="far fa-user">   Abrar</i>
                &nbsp;
                <i class="fas fa-calendar-week">   May 2, 2020</i>
              </div>
            </div>
    
            <div class="post">
              <img src="assets/images/earn.jpg" class="slider-image">
              <div class="post-info">
                <h4 style="margin: 5px;"><a href="helll.html">Help me with my E-Commerece Site</a></h4>
                <i class="far fa-user">   Abrar</i>
                &nbsp;
                <i class="fas fa-calendar-week">   May 2, 2020</i>
              </div>
            </div>  
        </div>
      </div>

      <!-- 2 Label End-->

      <!-- 3 label Start-->

<div class="page-wrapper">
  
    <!-- Post Slider-->
    
      <div class="post-slider"><br>
        <h2 class="slider-title">Recent Posts</h2>
        <!-- <i class="fas fa-chevron-left prev"></i>
        <i class="fas fa-chevron-right next"></i>
     -->
     <h2 style=" margin-left: 10%; cursor: pointer; color:#e8d21d;">@Technology</h2>
        <div class="post-wrapper">
            <div class="post">
              <img src="assets/images/eco.png" class="slider-image">
              <div class="post-info">
                <h4 style="margin: 5px;"><a href="helll.html">Help me with my E-Commerece Site</a></h4>
                <i class="far fa-user">   Abrar</i>
                &nbsp;
                <i class="fas fa-calendar-week">    May 2, 2020</i>
              </div>
            </div>
    
    
            <div class="post">
              <img src="assets/images/ml.jpg" class="slider-image">
              <div class="post-info">
                <h4 style="margin: 5px;"><a href="helll.html">Help me with my E-Commerece Site</a></h4>
                <i class="far fa-user">   Abrar</i>
                &nbsp;
                <i class="fas fa-calendar-week">   May 2, 2020</i>
              </div>
            </div>
    
            <div class="post">
              <img src="assets/images/bluestacks.jpg" class="slider-image">
              <div class="post-info">
                <h4 style="margin: 5px;"><a href="helll.html">Help me with my E-Commerece Site</a></h4>
                <i class="far fa-user">   Abrar</i>
                &nbsp;
                <i class="fas fa-calendar-week">   May 2, 2020</i>
              </div>
            </div>
    
            <div class="post">
              <img src="assets/images/earn.jpg" class="slider-image">
              <div class="post-info">
                <h4 style="margin: 5px;"><a href="helll.html">Help me with my E-Commerece Site</a></h4>
                <i class="far fa-user">   Abrar</i>
                &nbsp;
                <i class="fas fa-calendar-week">   May 2, 2020</i>
              </div>
            </div>  
        </div>
      </div>

      <!-- 3 Label End-->

      <!-- 4 Label Start-->
      <!-- Main Content Start-->

<div class="page-wrapper">
  
    <!-- Post Slider-->
    
      <div class="post-slider"><br>
        <h2 class="slider-title">Recent Posts</h2>
        <!-- <i class="fas fa-chevron-left prev"></i>
        <i class="fas fa-chevron-right next"></i> -->
        <h2 style=" margin-left: 10%; cursor: pointer; color:#b20238;">@Maths</h2>
        <div class="post-wrapper">
            <div class="post">
              <img src="assets/images/bluestacks.jpg" class="slider-image">
              <div class="post-info">
                <h4 style="margin: 5px;"><a href="helll.html">Help me with my E-Commerece Site</a></h4>
                <i class="far fa-user">   Abrar</i>
                &nbsp;
                <i class="fas fa-calendar-week">    May 2, 2020</i>
              </div>
            </div>
    
    
            <div class="post">
              <img src="assets/images/eco.png" class="slider-image">
              <div class="post-info">
                <h4 style="margin: 5px;"><a href="helll.html">Help me with my E-Commerece Site</a></h4>
                <i class="far fa-user">   Abrar</i>
                &nbsp;
                <i class="fas fa-calendar-week">   May 2, 2020</i>
              </div>
            </div>
    
            <div class="post">
              <img src="assets/images/ml.jpg" class="slider-image">
              <div class="post-info">
                <h4 style="margin: 5px;"><a href="helll.html">Help me with my E-Commerece Site</a></h4>
                <i class="far fa-user">   Abrar</i>
                &nbsp;
                <i class="fas fa-calendar-week">   May 2, 2020</i>
              </div>
            </div>
    
            <div class="post">
              <img src="assets/images/earn.jpg" class="slider-image">
              <div class="post-info">
                <h4 style="margin: 5px;"><a href="helll.html">Help me with my E-Commerece Site</a></h4>
                <i class="far fa-user">   Abrar</i>
                &nbsp;
                <i class="fas fa-calendar-week">   May 2, 2020</i>
              </div>
            </div>  
        </div>
      </div>

      <!-- 4 Label End -->

      <!-- 5 LAbel Start-->
    <!-- Main Content Start-->

<div class="page-wrapper">
  
    <!-- Post Slider-->
    
      <div class="post-slider"><br>
        <h2 class="slider-title">Recent Posts</h2>
        <!-- <i class="fas fa-chevron-left prev"></i>
        <i class="fas fa-chevron-right next"></i> -->
        <h2 style=" margin-left: 10%; cursor: pointer; color:#ff6e40;">@Machine Learning</h2>
        <div class="post-wrapper">
            <div class="post">
              <img src="assets/images/ml.jpg" class="slider-image">
              <div class="post-info">
                <h4 style="margin: 5px;"><a href="helll.html">Help me with my E-Commerece Site</a></h4>
                <i class="far fa-user">   Abrar</i>
                &nbsp;
                <i class="fas fa-calendar-week">    May 2, 2020</i>
              </div>
            </div>
    
    
            <div class="post">
              <img src="assets/images/eco.png" class="slider-image">
              <div class="post-info">
                <h4 style="margin: 5px;"><a href="helll.html">Help me with my E-Commerece Site</a></h4>
                <i class="far fa-user">   Abrar</i>
                &nbsp;
                <i class="fas fa-calendar-week">   May 2, 2020</i>
              </div>
            </div>
    
            <div class="post">
              <img src="assets/images/bluestacks.jpg" class="slider-image">
              <div class="post-info">
                <h4 style="margin: 5px;"><a href="helll.html">Help me with my E-Commerece Site</a></h4>
                <i class="far fa-user">   Abrar</i>
                &nbsp;
                <i class="fas fa-calendar-week">   May 2, 2020</i>
              </div>
            </div>
    
            <div class="post">
              <img src="assets/images/earn.jpg" class="slider-image">
              <div class="post-info">
                <h4 style="margin: 5px;"><a href="helll.html">Help me with my E-Commerece Site</a></h4>
                <i class="far fa-user">   Abrar</i>
                &nbsp;
                <i class="fas fa-calendar-week">   May 2, 2020</i>
              </div>
            </div>  
        </div>
      </div>
      <!--- 5 Label End-->

      <!-- 6 Label Start-->
<!-- Main Content Start-->

<div class="page-wrapper">
  
    <!-- Post Slider-->
    
      <div class="post-slider"><br>
        <h2 class="slider-title">Recent Posts</h2>
        <!-- <i class="fas fa-chevron-left prev"></i>
        <i class="fas fa-chevron-right next"></i> -->
        <h2 style=" margin-left: 10%; cursor: pointer; color:#ffc13b;">@Hacking</h2>
        <div class="post-wrapper">
            <div class="post">
              <img src="assets/images/earn.jpg" class="slider-image">
              <div class="post-info">
                <h4 style="margin: 5px;"><a href="helll.html">Help me with my E-Commerece Site</a></h4>
                <i class="far fa-user">   Abrar</i>
                &nbsp;
                <i class="fas fa-calendar-week">    May 2, 2020</i>
              </div>
            </div>
    
    
            <div class="post">
              <img src="assets/images/bluestacks.jpg" class="slider-image">
              <div class="post-info">
                <h4 style="margin: 5px;"><a href="helll.html">Help me with my E-Commerece Site</a></h4>
                <i class="far fa-user">   Abrar</i>
                &nbsp;
                <i class="fas fa-calendar-week">   May 2, 2020</i>
              </div>
            </div>
    
            <div class="post">
              <img src="assets/images/eco.png" class="slider-image">
              <div class="post-info">
                <h4 style="margin: 5px;"><a href="helll.html">Help me with my E-Commerece Site</a></h4>
                <i class="far fa-user">   Abrar</i>
                &nbsp;
                <i class="fas fa-calendar-week">   May 2, 2020</i>
              </div>
            </div>
    
            <div class="post">
              <img src="assets/images/ml.jpg" class="slider-image">
              <div class="post-info">
                <h4 style="margin: 5px;"><a href="helll.html">Help me with my E-Commerece Site</a></h4>
                <i class="far fa-user">   Abrar</i>
                &nbsp;
                <i class="fas fa-calendar-week">   May 2, 2020</i>
              </div>
            </div>  
        </div>
      </div>

      <!-- 6 Label End-->

      <!-- 7 Label Start-->
<!-- Main Content Start-->

<div class="page-wrapper">
  
    <!-- Post Slider-->
    
      <div class="post-slider"><br>
        <h2 class="slider-title">Recent Posts</h2>
        <!-- <i class="fas fa-chevron-left prev"></i>
        <i class="fas fa-chevron-right next"></i> -->
        <h2 style=" margin-left: 10%;  cursor: pointer; color:#c4a35a;">@Science</h2>
        <div class="post-wrapper">
            <div class="post">
              <img src="assets/images/eco.png" class="slider-image">
              <div class="post-info">
                <h4 style="margin: 5px;"><a href="helll.html">Help me with my E-Commerece Site</a></h4>
                <i class="far fa-user">   Abrar</i>
                &nbsp;
                <i class="fas fa-calendar-week">    May 2, 2020</i>
              </div>
            </div>
    
    
            <div class="post">
              <img src="assets/images/bluestacks.jpg" class="slider-image">
              <div class="post-info">
                <h4 style="margin: 5px;"><a href="helll.html">Help me with my E-Commerece Site</a></h4>
                <i class="far fa-user">   Abrar</i>
                &nbsp;
                <i class="fas fa-calendar-week">   May 2, 2020</i>
              </div>
            </div>
    
            <div class="post">
              <img src="assets/images/earn.jpg" class="slider-image">
              <div class="post-info">
                <h4 style="margin: 5px;"><a href="helll.html">Help me with my E-Commerece Site</a></h4>
                <i class="far fa-user">   Abrar</i>
                &nbsp;
                <i class="fas fa-calendar-week">   May 2, 2020</i>
              </div>
            </div>
    
            <div class="post">
              <img src="assets/images/ml.jpg" class="slider-image">
              <div class="post-info">
                <h4 style="margin: 5px;"><a href="helll.html">Help me with my E-Commerece Site</a></h4>
                <i class="far fa-user">   Abrar</i>
                &nbsp;
                <i class="fas fa-calendar-week">   May 2, 2020</i>
              </div>
            </div>  
        </div>
      </div>
      <!-- 7 Label End-->

      <!-- 8 Label Start-->
<!-- Main Content Start-->

<div class="page-wrapper">
  
    <!-- Post Slider-->
    
      <div class="post-slider"><br>
        <h2 class="slider-title">Recent Posts</h2>
        <!-- <i class="fas fa-chevron-left prev"></i>
        <i class="fas fa-chevron-right next"></i> -->
        <h2 style=" margin-left: 10%; cursor: pointer; color:#7a2048;">@Aptitude</h2>
        <div class="post-wrapper">
            <div class="post">
              <img src="assets/images/ml.jpg" class="slider-image">
              <div class="post-info">
                <h4 style="margin: 5px;"><a href="helll.html">Help me with my E-Commerece Site</a></h4>
                <i class="far fa-user">   Abrar</i>
                &nbsp;
                <i class="fas fa-calendar-week">    May 2, 2020</i>
              </div>
            </div>
    
    
            <div class="post">
              <img src="assets/images/eco.png" class="slider-image">
              <div class="post-info">
                <h4 style="margin: 5px;"><a href="helll.html">Help me with my E-Commerece Site</a></h4>
                <i class="far fa-user">   Abrar</i>
                &nbsp;
                <i class="fas fa-calendar-week">   May 2, 2020</i>
              </div>
            </div>
    
            <div class="post">
              <img src="assets/images/earn.jpg" class="slider-image">
              <div class="post-info">
                <h4 style="margin: 5px;"><a href="helll.html">Help me with my E-Commerece Site</a></h4>
                <i class="far fa-user">   Abrar</i>
                &nbsp;
                <i class="fas fa-calendar-week">   May 2, 2020</i>
              </div>
            </div>
    
            <div class="post">
              <img src="assets/images/bluestacks.jpg" class="slider-image">
              <div class="post-info">
                <h4 style="margin: 5px;"><a href="helll.html">Help me with my E-Commerece Site</a></h4>
                <i class="far fa-user">   Abrar</i>
                &nbsp;
                <i class="fas fa-calendar-week">   May 2, 2020</i>
              </div>
            </div>  
        </div>
      </div>
      <!-- 8 Label End-->

      <!-- 9 Lable Start-->
<!-- Main Content Start-->

<div class="page-wrapper">
  
    <!-- Post Slider-->
    
      <div class="post-slider"><br>
        <h2 class="slider-title">Recent Posts</h2>
        <!-- <i class="fas fa-chevron-left prev"></i>
        <i class="fas fa-chevron-right next"></i> -->
        <h2 style=" margin-left: 10%; cursor: pointer; color:#77c593;">@Installations</h2>
        <div class="post-wrapper">
            <div class="post">
              <img src="assets/images/eco.png" class="slider-image">
              <div class="post-info">
                <h4 style="margin: 5px;"><a href="helll.html">Help me with my E-Commerece Site</a></h4>
                <i class="far fa-user">   Abrar</i>
                &nbsp;
                <i class="fas fa-calendar-week">    May 2, 2020</i>
              </div>
            </div>
    
    
            <div class="post">
              <img src="assets/images/ml.jpg" class="slider-image">
              <div class="post-info">
                <h4 style="margin: 5px;"><a href="helll.html">Help me with my E-Commerece Site</a></h4>
                <i class="far fa-user">   Abrar</i>
                &nbsp;
                <i class="fas fa-calendar-week">   May 2, 2020</i>
              </div>
            </div>
    
            <div class="post">
              <img src="assets/images/earn.jpg" class="slider-image">
              <div class="post-info">
                <h4 style="margin: 5px;"><a href="helll.html">Help me with my E-Commerece Site</a></h4>
                <i class="far fa-user">   Abrar</i>
                &nbsp;
                <i class="fas fa-calendar-week">   May 2, 2020</i>
              </div>
            </div>
    
            <div class="post">
              <img src="assets/images/bluestacks.jpg" class="slider-image">
              <div class="post-info">
                <h4 style="margin: 5px;"><a href="helll.html">Help me with my E-Commerece Site</a></h4>
                <i class="far fa-user">   Abrar</i>
                &nbsp;
                <i class="fas fa-calendar-week">   May 2, 2020</i>
              </div>
            </div>  
        </div>
      </div>
      <!-- 9 Label End-->


</div>

</span>
</span>

    

<!-- Main Content End-->
<!-- JQuery CDN Online-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!--Slick Link-->

<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<script type="text/javascript">
$(document).ready(function(){
  $('.post-wrapper').slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000,
  nextArrow: $('.next'),
  prevArrow: $('.prev'),
responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 530,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});
});
</script>


