<?php require_once('config.php') ?>
<?php require_once( ROOT_PATH . '/registration/signup_signin.php') ?>
<?php include('main_fun.php') ?>
<?php require_once( ROOT_PATH . '/includes/public_functions.php') ?>
<?php require_once( ROOT_PATH . '/functions/post_functions.php')?>
<?php require_once('values.php') ?>

<?php if (!isset($user_id)) {
  	header('location: index.php');
  }
?>


<?php
if (isset($_GET['logout'])) {
  session_destroy();
  unset($_SESSION['username']);
  header("location: index.php");
}
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Landing</title>
    <link rel="stylesheet" href="static/css/landstyle.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/v4-shims.css">
        
  </head>
  
<script>
function hello(){
  window.location = "filtered_posts.php";
}
</script>

  <body>
  <div class="header">
    <h2 class="logo">HelpMe</h2>
    <input type="checkbox" id="chk">
    <label for="chk" class="show-menu-btn">
      <i class="fas fa-bars"></i>
    </label>
    <ul class="menu">
    <a href="notifications.php">Notifications</a>
      <a href="ui.php">Short Q</a>
      <a class="header_post" href="posts/create_post.php">Post</a>
      <a href="posts/posts.php">Queries</a>
      <a href="leaderboard.php">Leader Board</a>
      <a href="freelance/">Freelance</a>
      <a href="profile">Profile</a>
      <a href="<?php echo 'logout.php'; ?>">logout</a>
      <label for="chk" class="hide-menu-btn">
        <i class="fas fa-times close"></i>
      </label>
    </ul>
  </div>
<div class="labels">
  <center>
      <h2>Labels</h2>
  </center>
</div>
<div class="content shadow">
    <!-- <center>
      <img src="#" alt="">
    </center> -->
    <div class="labels-info">
    <a href="<?php echo BASE_URL . 'filtered_posts.php?topic=1'?>"><h5 style="color:#5c3c92;">@Programming</h5></a>
    <a href="<?php echo BASE_URL . 'filtered_posts.php?topic=2'?>"><h5 style="color:#d72631;">@Education</h5></a>
    <a href="<?php echo BASE_URL . 'filtered_posts.php?topic=3'?>"><h5 style="color:#e8d21d;">@Technology</h5></a>
    <a href="<?php echo BASE_URL . 'filtered_posts.php?topic=4'?>"><h5 style="color:#b20238;">@Maths</h5></a>
    <a href="<?php echo BASE_URL . 'filtered_posts.php?topic=5'?>"><h5 style="color:#ff6e40;">@Machine Learning</h5></a>
    <a href="<?php echo BASE_URL . 'filtered_posts.php?topic=6'?>"><h5 style="color:#ffc13b;">@Hacking</h5></a>
    <a href="<?php echo BASE_URL . 'filtered_posts.php?topic=7'?>"><h5 style="color:#c4a35a;">@Science</h5></a>
    <a href="<?php echo BASE_URL . 'filtered_posts.php?topic=8'?>"><h5 style="color:#7a2048;">@Aptitude</h5></a>
    <a href="<?php echo BASE_URL . 'filtered_posts.php?topic=9'?>"><h5 style="color:#77c593;">@Installations</h5></a>
    <a href="<?php echo BASE_URL . 'filtered_posts.php?topic=10'?>"><h5 style="color:#322514;">@Electronics</h5></a>
    <a href="<?php echo BASE_URL . 'filtered_posts.php?topic=11'?>"><h5 style="color:#322514;">@Others</h5></a>
  </div>
</div>
<br>
<!-- Main Content Start-->

<div class="page-wrapper">
  
<!-- Post Slider-->

  <div class="post-slider">
    <h2 class="slider-title">Recent Posts</h2>
    <i class="fas fa-chevron-left prev"></i>
    <i class="fas fa-chevron-right next"></i>
    <a class="heading" href="<?php echo BASE_URL . 'filtered_posts.php?topic=1'?>" style="margin-left: 10%; cursor: pointer; color:#5c3c92; 	font-size: 1.5em; 	font-weight: bold;">@Programming</a>
   <!-- <h2 onclick="hello()" style="position: absolute;left:150px; top:30px; cursor: pointer; color:#5c3c92;">@Programming</h2> -->
    <div class="post-wrapper programming-slick">
    
    <?php foreach ($postsprogramming as $post): ?>
        <div class="post">
          <img src="<?php echo BASE_URL . '/static/images/' . $post['image']; ?>" class="slider-image">
          <div class="post-info">
          <?php if (isset($post['topic']['name'])): ?>
						<a
							href="<?php echo BASE_URL . 'filtered_posts.php?topic=' . $post['topic']['id'] ?>"
							class="btn category">
              <?php echo $post['topic']['name'] ?>
						</a>
					<?php endif ?>
            <h4 style="margin: 5px;">
            <a class="line-wrap"
             href="single_post.php?post-slug=<?php echo $post['slug']; ?>">
            <?php echo $post['title'];?>
            </a></h4>
            <i class="far fa-user"> <?php echo $post['username']; ?></i>
            &nbsp;
            <i class="fas fa-calendar-week"> <?php echo date('F j, Y', strtotime($post['created_at']));?></i>
          </div>
        </div>

    <?php endforeach; ?>

    

   </div>
</div>

<!-- 2 Label Start-->

<div class="page-wrapper">
  
<!-- Post Slider-->

  <div class="post-slider ">
    <h2 style="visibility:hidden"class="slider-title">Recent Posts</h2>
    <i class="fas fa-chevron-left prev1"></i>
    <i class="fas fa-chevron-right next1"></i>
    <a href="<?php echo BASE_URL . 'filtered_posts.php?topic=2'?>" style="margin-left: 10%; cursor: pointer; color:#d72631;font-size: 1.5em; 	font-weight: bold;">@Educational</a>

    <!-- <h2 onclick="hello()" style="position: absolute;left:150px; top:30px; cursor: pointer; color:#5c3c92;">@Education</h2> -->
    <div class="post-wrapper education-slick">
    <?php foreach ($postseducation as $post): ?>
        <div class="post">
          <img src="<?php echo BASE_URL . '/static/images/' . $post['image']; ?>" class="slider-image">
          <div class="post-info">
          <?php if (isset($post['topic']['name'])): ?>
						<a
							href="<?php echo BASE_URL . 'filtered_posts.php?topic=' . $post['topic']['id'] ?>"
							class="btn category">
              <?php echo $post['topic']['name'] ?>
						</a>
					<?php endif ?>
            <h4 style="margin: 5px;">
            <a href="single_post.php?post-slug=<?php echo $post['slug']; ?>">
            <?php echo $post['title'];?>
            </a></h4>
            <i class="far fa-user"> <?php echo $post['username'] ?></i>
            &nbsp;
            <i class="fas fa-calendar-week"> <?php echo date('F j, Y', strtotime($post['created_at']));?></i>
          </div>
        </div>
    <?php endforeach; ?>
    </div>
</div>


      <!-- 2 Label End-->

      <!-- 3 label Start-->

      <div class="page-wrapper">
  
  <!-- Post Slider-->
  
    <div class="post-slider">
    <h2 style="visibility:hidden"class="slider-title">Recent Posts</h2>
      <i class="fas fa-chevron-left prev2"></i>
      <i class="fas fa-chevron-right next2"></i>
      <a href="<?php echo BASE_URL . 'filtered_posts.php?topic=3'?>" style="margin-left: 10%; cursor: pointer; color:#e8d21d;font-size: 1.5em; 	font-weight: bold;">@Technology</a>
      <!-- <h2 onclick="hello()" style="position: absolute;left:150px; top:30px; cursor: pointer; color:#5c3c92;">@Technology</h2> -->
      <div class="post-wrapper technology-slick">
      <?php foreach ($poststechnology as $post): ?>
          <div class="post">
            <img src="<?php echo BASE_URL . '/static/images/' . $post['image']; ?>" class="slider-image">
            <div class="post-info">
            <?php if (isset($post['topic']['name'])): ?>
              <a 
                href="<?php echo BASE_URL . 'filtered_posts.php?topic=' . $post['topic']['id'] ?>"
                class="btn category">
                <?php echo $post['topic']['name'] ?>
              </a>
            <?php endif ?>
              <h4 style="margin: 5px;">
              <a href="single_post.php?post-slug=<?php echo $post['slug']; ?>">
              <?php echo $post['title'];?>
              </a></h4>
              <i class="far fa-user"> <?php echo $post['username'] ?></i>
              &nbsp;
              <i class="fas fa-calendar-week"> <?php echo date('F j, Y', strtotime($post['created_at']));?></i>
            </div>
          </div>
      <?php endforeach; ?>
      </div>
  </div>
  
      <!-- 3 Label End-->

      <!-- 4 Label Start-->
      <!-- Main Content Start-->

      <div class="page-wrapper">
  
  <!-- Post Slider-->
  
    <div class="post-slider">
    <h2 style="visibility:hidden"class="slider-title">Recent Posts</h2>
      <i class="fas fa-chevron-left prev3"></i>
      <i class="fas fa-chevron-right next3"></i>
      <a href="<?php echo BASE_URL . 'filtered_posts.php?topic=4'?>" style="margin-left: 10%; cursor: pointer; color:#b20238; font-size: 1.5em; 	font-weight: bold;">@Maths</a>
      <!-- <h2 onclick="hello()" style="position: absolute;left:150px; top:30px; cursor: pointer; color:#5c3c92;">@Maths</h2> -->
      <div class="post-wrapper maths-slick">
      <?php foreach ($postsmaths as $post): ?>
          <div class="post">
            <img src="<?php echo BASE_URL . '/static/images/' . $post['image']; ?>" class="slider-image">
            <div class="post-info">
            <?php if (isset($post['topic']['name'])): ?>
              <a 
                href="<?php echo BASE_URL . 'filtered_posts.php?topic=' . $post['topic']['id'] ?>"
                class="btn category">
                <?php echo $post['topic']['name'] ?>
              </a>
            <?php endif ?>
              <h4 style="margin: 5px;">
              <a href="single_post.php?post-slug=<?php echo $post['slug']; ?>">
              <?php echo $post['title'];?>
              </a></h4>
              <i class="far fa-user"> <?php echo $post['username'] ?></i>
              &nbsp;
              <i class="fas fa-calendar-week"> <?php echo date('F j, Y', strtotime($post['created_at']));?></i>
            </div>
          </div>
      <?php endforeach; ?>
      </div>
  </div>
  
      <!-- 4 Label End -->

      <!-- 5 LAbel Start-->
    <!-- Main Content Start-->

    <div class="page-wrapper">
  
  <!-- Post Slider-->
  
    <div class="post-slider">
    <h2 style="visibility:hidden"class="slider-title">Recent Posts</h2>
      <i class="fas fa-chevron-left prev4"></i>
      <i class="fas fa-chevron-right next4"></i>
      <a href="<?php echo BASE_URL . 'filtered_posts.php?topic=5'?>" style="margin-left: 10%; cursor: pointer; color:#ff6e40; font-size: 1.5em; 	font-weight: bold;">@Machine Learning</a>
      <!-- <h2 onclick="hello()" style="position: absolute;left:150px; top:30px; cursor: pointer; color:#5c3c92;">@Machine Learning</h2> -->
      <div class="post-wrapper machine-learning-slick">
      <?php foreach ($postsmachinelearning as $post): ?>
          <div class="post">
            <img src="<?php echo BASE_URL . '/static/images/' . $post['image']; ?>" class="slider-image">
            <div class="post-info">
            <?php if (isset($post['topic']['name'])): ?>
              <a 
                href="<?php echo BASE_URL . 'filtered_posts.php?topic=' . $post['topic']['id'] ?>"
                class="btn category">
                <?php echo $post['topic']['name'] ?>
              </a>
            <?php endif ?>
              <h4 style="margin: 5px;">
              <a href="single_post.php?post-slug=<?php echo $post['slug']; ?>">
              <?php echo $post['title'];?>
              </a></h4>
              <i class="far fa-user"> <?php echo $post['username'] ?></i>
              &nbsp;
              <i class="fas fa-calendar-week"> <?php echo date('F j, Y', strtotime($post['created_at']));?></i>
            </div>
          </div>
      <?php endforeach; ?>
      </div>
  </div>
  
      <!--- 5 Label End-->

      <!-- 6 Label Start-->
<!-- Main Content Start-->

<div class="page-wrapper">
  
<!-- Post Slider-->

  <div class="post-slider">
  <h2 style="visibility:hidden"class="slider-title">Recent Posts</h2>
    <i class="fas fa-chevron-left prev5"></i>
    <i class="fas fa-chevron-right next5"></i>
    <a href="<?php echo BASE_URL . 'filtered_posts.php?topic=6'?>" style="margin-left: 10%; cursor: pointer; color:#ffc13b; font-size: 1.5em; 	font-weight: bold;">@Hacking</a>
    <!-- <h2 onclick="hello()" style="position: absolute;left:150px; top:30px; cursor: pointer; color:#5c3c92;">@Hacking</h2> -->
    <div class="post-wrapper hacking-slick">
    <?php foreach ($postshacking as $post): ?>
        <div class="post">
          <img src="<?php echo BASE_URL . '/static/images/' . $post['image']; ?>" class="slider-image">
          <div class="post-info">
          <?php if (isset($post['topic']['name'])): ?>
						<a 
							href="<?php echo BASE_URL . 'filtered_posts.php?topic=' . $post['topic']['id'] ?>"
							class="btn category">
							<?php echo $post['topic']['name'] ?>
						</a>
					<?php endif ?>
            <h4 style="margin: 5px;">
            <a href="single_post.php?post-slug=<?php echo $post['slug']; ?>">
            <?php echo $post['title'];?>
            </a></h4>
            <i class="far fa-user"> <?php echo $post['username'] ?></i>
            &nbsp;
            <i class="fas fa-calendar-week"> <?php echo date('F j, Y', strtotime($post['created_at']));?></i>
          </div>
        </div>
    <?php endforeach; ?>
    </div>
</div>

      <!-- 6 Label End-->

      <!-- 7 Label Start-->
<!-- Main Content Start-->

<div class="page-wrapper">
  
<!-- Post Slider-->

  <div class="post-slider">
  <h2 style="visibility:hidden"class="slider-title">Recent Posts</h2>
    <i class="fas fa-chevron-left prev6"></i>
    <i class="fas fa-chevron-right next6"></i>
    <a href="<?php echo BASE_URL . 'filtered_posts.php?topic=7'?>" style="margin-left: 10%; cursor: pointer; color:#c4a35a; font-size: 1.5em; 	font-weight: bold;">@Science</a>
    <!-- <h2 onclick="hello()" style="position: absolute;left:150px; top:30px; cursor: pointer; color:#5c3c92;">@Science</h2> -->
    <div class="post-wrapper science-slick">
    <?php foreach ($postsscience as $post): ?>
        <div class="post">
          <img src="<?php echo BASE_URL . '/static/images/' . $post['image']; ?>" class="slider-image">
          <div class="post-info">
          <?php if (isset($post['topic']['name'])): ?>
						<a 
							href="<?php echo BASE_URL . 'filtered_posts.php?topic=' . $post['topic']['id'] ?>"
							class="btn category">
							<?php echo $post['topic']['name'] ?>
						</a>
					<?php endif ?>
            <h4 style="margin: 5px;">
            <a href="single_post.php?post-slug=<?php echo $post['slug']; ?>">
            <?php echo $post['title'];?>
            </a></h4>
            <i class="far fa-user"> <?php echo $post['username'] ?></i>
            &nbsp;
            <i class="fas fa-calendar-week"> <?php echo date('F j, Y', strtotime($post['created_at']));?></i>
          </div>
        </div>
    <?php endforeach; ?>
    </div>
</div>

      <!-- 7 Label End-->

      <!-- 8 Label Start-->
<!-- Main Content Start-->

<div class="page-wrapper">
  
<!-- Post Slider-->

  <div class="post-slider">
  <h2 style="visibility:hidden"class="slider-title">Recent Posts</h2>
    <i class="fas fa-chevron-left prev7"></i>
    <i class="fas fa-chevron-right next7"></i>
    <a href="<?php echo BASE_URL . 'filtered_posts.php?topic=8'?>" style="margin-left: 10%; cursor: pointer; color:#7a2048; font-size: 1.5em; 	font-weight: bold;">@Aptitude</a>
    <!-- <h2 onclick="hello()" style="position: absolute;left:150px; top:30px; cursor: pointer; color:#5c3c92;">@Aptitude</h2> -->
    <div class="post-wrapper aptitude-slick">
    <?php foreach ($postsaptitude as $post): ?>
        <div class="post">
          <img src="<?php echo BASE_URL . '/static/images/' . $post['image']; ?>" class="slider-image">
          <div class="post-info">
          <?php if (isset($post['topic']['name'])): ?>
						<a 
							href="<?php echo BASE_URL . 'filtered_posts.php?topic=' . $post['topic']['id'] ?>"
							class="btn category">
							<?php echo $post['topic']['name'] ?>
						</a>
					<?php endif ?>
            <h4 style="margin: 5px;">
            <a href="single_post.php?post-slug=<?php echo $post['slug']; ?>">
            <?php echo $post['title'];?>
            </a></h4>
            <i class="far fa-user"> <?php echo $post['username'] ?></i>
            &nbsp;
            <i class="fas fa-calendar-week"> <?php echo date('F j, Y', strtotime($post['created_at']));?></i>
          </div>
        </div>
    <?php endforeach; ?>
    </div>
</div>

      <!-- 8 Label End-->

      <!-- 9 Lable Start-->
<!-- Main Content Start-->

<div class="page-wrapper">
  
<!-- Post Slider-->

  <div class="post-slider">
  <h2 style="visibility:hidden"class="slider-title">Recent Posts</h2>
    <i class="fas fa-chevron-left prev8"></i>
    <i class="fas fa-chevron-right next8"></i>
    <a href="<?php echo BASE_URL . 'filtered_posts.php?topic=9'?>" style="margin-left: 10%; cursor: pointer; color:#77c593; font-size: 1.5em; 	font-weight: bold;">@Installations</a>
    <!-- <h2 onclick="hello()" style="position: absolute;left:150px; top:30px; cursor: pointer; color:#5c3c92;">@Installations</h2> -->
    <div class="post-wrapper installations-slick">
    <?php foreach ($postsinstallations as $post): ?>
        <div class="post">
          <img src="<?php echo BASE_URL . '/static/images/' . $post['image']; ?>" class="slider-image">
          <div class="post-info">
          <?php if (isset($post['topic']['name'])): ?>
						<a 
							href="<?php echo BASE_URL . 'filtered_posts.php?topic=' . $post['topic']['id'] ?>"
							class="btn category">
							<?php echo $post['topic']['name'] ?>
						</a>
					<?php endif ?>
            <h4 style="margin: 5px;">
            <a href="single_post.php?post-slug=<?php echo $post['slug']; ?>">
            <?php echo $post['title'];?>
            </a></h4>
            <i class="far fa-user"> <?php echo $post['username'] ?></i>
            &nbsp;
            <i class="fas fa-calendar-week"> <?php echo date('F j, Y', strtotime($post['created_at']));?></i>
          </div>
        </div>
    <?php endforeach; ?>
    </div>
</div>

      <!-- 9 Label End-->

      
      <!-- 10 Lable Start-->
<!-- Main Content Start-->

<div class="page-wrapper">
  
<!-- Post Slider-->

  <div class="post-slider">
  <h2 style="visibility:hidden"class="slider-title">Recent Posts</h2>
    <i class="fas fa-chevron-left prev9"></i>
    <i class="fas fa-chevron-right next9"></i>
    <a href="<?php echo BASE_URL . 'filtered_posts.php?topic=10'?>" style="margin-left: 10%; cursor: pointer; color:#322514; font-size: 1.5em; 	font-weight: bold;">@Electronics</a>
    <!-- <h2 onclick="hello()" style="position: absolute;left:150px; top:30px; cursor: pointer; color:#5c3c92;">@Electronics</h2> -->
    <div class="post-wrapper electronics-slick">
    <?php foreach ($postselectronics as $post): ?>
        <div class="post">
          <img src="<?php echo BASE_URL . '/static/images/' . $post['image']; ?>" class="slider-image">
          <div class="post-info">
          <?php if (isset($post['topic']['name'])): ?>
						<a 
							href="<?php echo BASE_URL . 'filtered_posts.php?topic=' . $post['topic']['id'] ?>"
							class="btn category">
							<?php echo $post['topic']['name'] ?>
						</a>
					<?php endif ?>
            <h4 style="margin: 5px;">
            <a href="single_post.php?post-slug=<?php echo $post['slug']; ?>">
            <?php echo $post['title'];?>
            </a></h4>
            <i class="far fa-user"> <?php echo $post['username'] ?></i>
            &nbsp;
            <i class="fas fa-calendar-week"> <?php echo date('F j, Y', strtotime($post['created_at']));?></i>
          </div>
        </div>
    <?php endforeach; ?>
    </div>
</div>
  <!-- 10 Label End-->


</div>



    

<!-- Main Content End-->
<!-- JQuery CDN Online-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!--Slick Link-->
<!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script> -->

<script src="static/js/slick.js"></script>
<script src="static/js/slide-slick.js"></script>

<footer>
      <div class="main-contentf">
          <div class="left box">
              <h2>About Us</h2>
              <div class="contentf">
                  <p>Afterrender as you or we expect.
                       Its the equivalent of dogs and cats 
                       living together - total chaos. 
                       If you can't remove older version references, 
                       we recommend using a kit with version 4
                    </p>
                  <div class="social">
                      <a href="#"><span style="color:whitesmoke;" class="fa fa-facebook-square"></span></a>
                      <a href="#"><span style="color:whitesmoke;" class="fa fa-twitter"></span></a>
                      <a href="#"><span style="color:whitesmoke;" class="fa fa-instagram"></span></a>
                      <a href="#"><span style="color:whitesmoke;" class="fa fa-youtube-play"></span></a>
                  </div>
              </div>
          </div>
          <div class="center box">
            <h2>Address</h2>
            <div class="contentf">
                <div class="place">
                    <span class="fas fa-map-marker-alt"></span>
                    <span class="text">India</span>
                </div>
                <div class="email">
                    <span class="fas fa-envelope"></span>
                    <span class="text">helpme.io@gmail.com</span>
                </div>
            </div>
          </div>
          <div class="right box">
              <h2>Contact Us</h2>
              <div class="contentf">
                  <form action="#">
                      <div class="email">
                          <div class="text">E-Mail *</div>
                          <input type="email" required>
                      </div>
                      <div class="msg">
                          <div class="text">Message *</div>
                          <textarea rows="2" cols="25" required></textarea>
                      </div>
                      <div class="btn">
                          <button onMouseOver="this.style.backgroundColor='grey'" onMouseOut="this.style.backgroundColor='#f12020'" type="submit" >Send</button>
                      </div>
                  </form>
              </div>
          </div>
      </div>
      <div class="bottom">
          <center>
              <span class="credit">Created By <a href="#">HelpMe.io</a> | </span>
              <span class="far fa-copyright"></span><span> 2020 All Rights Reserved.</span>
          </center>
      </div>
  </footer>
<style type="text/css">
 
</style>  

  </body>
</html>
