<?php  include('../config.php'); ?>
<?php  include(ROOT_PATH . '/functions/admin_functions.php'); ?>
<?php  include(ROOT_PATH . '/functions/post_functions.php'); ?>
<?php include(ROOT_PATH . '/includes/main-header.php'); ?>
<?php require_once('../values.php'); ?>

<?php if (!isset($user_id)) {
  	header('location: ../index.php');
  }
?>



<!-- Get all admin posts from DB -->
<?php $posts = getAllPosts(); ?>
<head>
	<title>Admin | Manage Posts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

</head>
<body>
	<!-- admin navbar -->
	<!-- <?php include(ROOT_PATH . '/admin/includes/navbar.php') ?> -->
	<div class="container content">
		<!-- Left side menu -->
		<!-- <?php include(ROOT_PATH . '/admin/includes/menu.php') ?> -->

		<!-- Display records from DB-->
		<div class="table-div"  style="width: 100%;">
			<!-- Display notification message -->
			<?php include(ROOT_PATH . '/includes/messages.php') ?>

			<?php if (empty($posts)): ?>
				<h1 style="text-align: center; margin-top: 20px;">No posts in the database.</h1>
			<?php else: ?>
				<table class="table">
						<thead>
						<th style="width: 10px";>S.N</th>
						<!-- <th>Author</th> -->
						<th style="width: 40%";>Title</th>
						<th style="width: 10px";>Views</th>
						<!-- Only Admin can publish/unpublish post -->
						<?php if ($_SESSION['user']['role'] == "Admin"): ?>
							<th><small>Publish</small></th>
						<?php endif ?>
						<th><small>Edit</small></th>
						<th><small>Delete</small></th>
					</thead>
					<tbody>
					<?php foreach ($posts as $key => $post): ?>
						<tr>
							<td><?php echo $key + 1; ?></td>
							<!-- <td><?php echo $post['author']; ?></td> -->
							<td>
								<a class="noob" target="_blank"
								href="<?php echo BASE_URL . 'single_post.php?post-slug=' . $post['slug'] ?>">
									<?php echo $post['title']; ?>	
								</a>
							</td>
							<td><?php echo $post['views']; ?></td>
							
							<!-- Only Admin can publish/unpublish post -->
							<?php if ($_SESSION['user']['role'] == "Admin" ): ?>
								<td>
								<?php if ($post['published'] == true): ?>
									<a class="fa fa-thumbs-o-up btn unpublish"
										href="posts.php?unpublish=<?php echo $post['id'] ?>">
									</a>
								<?php else: ?>
									<a class="fa fa-times btn publish"
										href="posts.php?publish=<?php echo $post['id'] ?>">
									</a>
								<?php endif ?>
								</td>
							<?php endif ?>

							<td>
								<a class="fa fa-pencil btn edit"
									href="create_post.php?edit-post=<?php echo $post['id'] ?>">
								</a>
							</td>
							<td>
								<a  class="fa fa-trash btn delete" 
									href="create_post.php?delete-post=<?php echo $post['id'] ?>">
								</a>
							</td>
						</tr>
					<?php endforeach ?>
					</tbody>
				</table>
			<?php endif ?>
		</div>
		<!-- // Display records from DB -->
	</div>
</body>
</html>


<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400&display=swap');
*{
  margin: 0;
  padding: 0;
  outline: none;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
/* * { margin: 0px; padding: 0px; overflow: hidden;} */
.noob{
	display:inline-block;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
  max-width: 20ch;
}
table { border-collapse: collapse; width: 70%; margin: 20px auto; }
th, td { padding: 8px; text-align: center; border: 1px solid #ddd; }
th { text-align: center;}




.table-div a.fa { color: white; padding: 3px; }
.table-div .edit { background: #004220; width: 30%; border-radius: 3px;}
.table-div .delete { background: #F70E1A; width: 30%; border-radius: 3px;}
.table-div .publish { background: red; width: 30%; border-radius: 3px;}
.table-div .unpublish { background: green; width: 30%;}


.message {
	margin-top: 20px;
	margin-left: 25%;
	width: 50%; 
	/* margin: 0px auto;  */
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
	table{
		width: 90%;
	}
	.table-div .edit{
		width: 70%;
		border-radius: 3px;
	}

	.table-div .delete{
		width: 50%;
		border-radius: 3px;
	}
	.noob{
	display:inline-block;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
  max-width: 13ch;
}
}
</style>

<!-- <?php include(ROOT_PATH . '/includes/footer.php'); ?> -->
