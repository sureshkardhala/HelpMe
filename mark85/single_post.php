<?php  include('config.php'); ?>
<?php  include('includes/public_functions.php'); ?>

    
<?php 
	if (isset($_GET['post-slug'])) {
		$post = getPost($_GET['post-slug']);
	}
	$topics = getAllTopics();
?>
<title> <?php echo $post['title'] ?> </title>



<!DOCTYPE html>
<html>
<head>
  <title>HelpMe</title>
  <link rel="stylesheet" href="static/css/single_post.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/v4-shims.css">
</head>
<body>

<!-- Header Start-->

<header>

  <div class="header">
    <h2 class="logo">HelpMe</h2>
    <input type="checkbox" id="chk">
    <label for="chk" class="show-menu-btn">
      <i class="fas fa-bars"></i>
    </label>
    <ul class="menu">
      <a href="#">Profile</a>
      <a href="#">Post</a>
      <a href="#">Queries</a>
      <a href="#">Leader Board</a>
      <a href="#">Join</a>
      <label for="chk" class="hide-menu-btn">
        <i class="fas fa-times"></i>
      </label>
    </ul>
  </div>

</header>

<!-- Header End-->


<!-- Content-->
<div class="content clearfix">

<!-- Main Content-->

  <div class="main-content">
  
    <h1 class="recent-post-title">@Programming</h1>
    <div class="post clearfix some">
    <?php if ($post['published'] == false): ?>
				<h2 class="post-title">Sorry... This post has not been published</h2>
			<?php else: ?>
				<h2 class="post-title"><?php echo $post['title']; ?></h2>
				<div class="post-body-div">
					<?php echo html_entity_decode($post['body']); ?>

				</div>
			<?php endif ?>
    </div>
  </div>



<!-- Main Content End-->

<!-- Side Bar Start-->

<div class="sidebar">
<div class="section search">
  <h2 class="section-title">Search</h2>
  <form>
    <input type="text" name="search-item" class="text-input" placeholder="Search">
  </form>
</div>
  <div class="section topics">
    <h2 class="section-title">Labels</h2>
    <ul>
      <li><a href="<?php echo BASE_URL . 'filtered_posts.php?topic=1'?>">@Programming</a></li>
      <li><a href="<?php echo BASE_URL . 'filtered_posts.php?topic=2'?>">@Education</a></li>
      <li><a href="<?php echo BASE_URL . 'filtered_posts.php?topic=3'?>">@Technology</a></li>
      <li><a href="<?php echo BASE_URL . 'filtered_posts.php?topic=4'?>">@Maths</a></li>
      <li><a href="<?php echo BASE_URL . 'filtered_posts.php?topic=5'?>">@Machine Learning</a></li>
      <li><a href="<?php echo BASE_URL . 'filtered_posts.php?topic=6'?>">@Hacking</a></li>
      <li><a href="<?php echo BASE_URL . 'filtered_posts.php?topic=7'?>">@Science</a></li>
      <li><a href="<?php echo BASE_URL . 'filtered_posts.php?topic=8'?>">@Aptitude</a></li>
      <li><a href="<?php echo BASE_URL . 'filtered_posts.php?topic=9'?>">@Installations</a></li>
    </ul>
  </div>
</div>
</div>

<!-- Side Bar Start End-->


<!-- Comment System Start -->

<?php include('comments/commentform.php'); ?>


<!-- Comment System End -->


<!-- Footer Start-->
<?php include_once('includes/footer.php'); ?>
<!-- Footer End-->
</body>
</html>

<style>


</style>
