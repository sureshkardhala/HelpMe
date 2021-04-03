<?php  include('../config.php'); ?>
<?php  include(ROOT_PATH . '/functions/admin_functions.php'); ?>
<?php  include(ROOT_PATH . '/functions/post_functions.php'); ?>
<?php require_once('../values.php'); ?>


<?php if (!isset($user_id)) {
  	header('location: ../index.php');
  }
?>




<!-- Get all topics -->
<?php $topics = getAllTopics();	?>
	<title>Admin | Create Post</title>
</head>
<body>
	<!-- admin navbar -->
	<?php include(ROOT_PATH . '/admin/includes/header_post.php') ?>

	<div class="container content">
		<!-- Left side menu -->

		<!-- Middle form - to create and edit  -->
		<div class="action create-post-div">
			<h1 class="page-title">Create/Edit Post</h1>
			<form class ="post_new_form" method="post" enctype="multipart/form-data" action="<?php echo BASE_URL . 'posts/create_post.php'; ?>" >
				<!-- validation errors for the form -->
				<?php include(ROOT_PATH . '/includes/errors.php') ?>
				<!-- if editing post, the id is required to identify that post -->
				<?php if ($isEditingPost === true): ?>
					<input type="hidden" name="post_id" value="<?php echo $post_id; ?>">
				<?php endif ?>

				<input type="text" name="title" value="<?php echo $title; ?>" placeholder="Title">
				<label style="float: left; margin: 5px auto 5px;">Featured image</label>
				<input type="file" name="featured_image">
				<textarea name="body" id="body" cols="30" rows="10"><?php echo $body; ?></textarea>
				<select name="topic_id">
					<option value="" selected disabled>Choose topic</option>
					<?php foreach ($topics as $topic): ?>
						<option value="<?php echo $topic['id']; ?>">
							<?php echo $topic['name']; ?>
						</option>
					<?php endforeach ?>
				</select>
				
				<!-- Only admin users can view publish input field -->
				<?php if ($_SESSION['user']['role'] == "Admin"): ?>
					<!-- display checkbox according to whether post has been published or not -->
					<?php if ($published == true): ?>
						<label for="publish">
							Publish
							<input type="checkbox" value="1" name="publish" checked="checked">&nbsp;
						</label>
					<?php else: ?>
						<label for="publish">
							Publish
							<input type="checkbox" value="1" name="publish">&nbsp;
						</label>
					<?php endif ?>
				<?php endif ?>
				
				<!-- if editing post, display the update button instead of create button -->
				<?php if ($isEditingPost === true): ?> 
					<button type="submit" class="btn" name="update_post">UPDATE</button>
				<?php else: ?>
					<button type="submit" class="btn" name="create_post">PUBLISH</button>
				<?php endif ?>

			</form>
		</div>
		<!-- // Middle form - to create and edit -->
	</div>
</body>
<!-- <?php include('../includes/footer.php'); ?> -->
</html>

<!-- <script src="ckeditor.js"></script>
<script>
 ClassicEditor.create(document.getElementById('body'));
</script> -->

<!-- <script>
	CKEDITOR.replace('body');
</script> -->






<style>
/* * * * * * * * * *
* STYLING DEFAULTS
* * * * * * * * * */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400&display=swap');
*{
  margin: 0;
  padding: 0;
  outline: none;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
/* * { margin: 0px; padding: 0px; } */
a { text-decoration: none; }
/* forms */
/* form { width: 60%; margin: 5px auto; padding-bottom: 50px; } */
form input[type=file], input[type=email], input[type=password], input[type=text], 
form select, form textarea {
	width: 100%;
	display: block;
	padding: 13px 13px;
	font-size: 1em;
	margin: 5px auto 10px;
	border-radius: 3px;
	box-sizing : border-box;
	background: transparent;
	border: 1px solid #3E606F;
}
input[type="checkbox"] { height: 20px; float: left; }
form button { float: right; margin-left: 24%; }
form input:focus { outline: none; }
/* label {	margin-top: 20px; float: left; } */
/* tables */
/* table { border-collapse: collapse; width: 70%; margin: 20px auto; }
th, td { padding: 8px; text-align: left; border: 1px solid #ddd; }
th { text-align: center;} */
/* buttons */
.btn {
	color: white;
	background: #4E6166;
	text-align: center;
	border: none;
	border-radius: 5px;
	display: block;
	letter-spacing: .1em;
	padding: 13px 20px;
	text-decoration: none;
}
/* * * * * * * * * *
* HEADER
* * * * * * * * * */
/* .header {
	padding: 15px 45px;
	font-family: 'Noto Serif', serif;
	color: white;
	background: black;
} */
.header .logo { width: 50%; float: left; }
.header .logo h1 { color: white; }
.header .user-info { width: 10%; margin-top: 10px; float: right;}
.header .logout-btn { color: red; text-decoration: none; }
.header:after{ content: ""; display: block; clear: both; }
/* * * * * * * * * *
* DASHBOARD
* * * * * * * * * */
body{
	overflow:hidden;
}
html{
	overflow:hidden;

}
.container {
	width: 100%;
	/*
	margin-left: 12%;
	padding: 10px 0px 50px; */
}
/*  */

/* * * * * * * * * *
* PAGE CONTENT
* * * * * * * * * */
/* Menu card */

.container.content .menu .card .card-content a:hover {
	padding-left: 20px; background: #F9F9F9; transition: 0.1s;
}
/* Actions div (at the middle) */
.container.content .action { width: 100%; text-align: center; }
.container.content .action form { width: 100%; }
/* .container.content .action .page-title { margin-left: 25px; } */
.container.content .action.create-post-div { width: 80%; margin: 20px auto; }
/* Table div (Displaying records from DB) */

/* * * * * * * * * *
* VALIDATION ERRORS
* * * * * * * * * */
.message {
	width: 100%; 
	margin: 0px auto; 
	padding: 10px 0px; 
	color: #3c763d; 
	background: #dff0d8; 
	border: 1px solid #3c763d;
	border-radius: 5px; 
	text-align: center;
}
.error {color: #a94442; background: #f2dede; border: 1px solid #a94442; margin-bottom: 20px; }
.validation_errors p {text-align: left;margin-left: 10px;}
@media screen and (max-width: 900px){
	.container{
	  overflow-x:hidden;
	}
	.container.content .action.create-post-div { width: 95%; margin: 10px; margin-top: 30px;}
}
</style>

