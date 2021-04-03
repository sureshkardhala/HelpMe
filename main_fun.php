<!-- Retrieve all posts from database  -->

<!-- 1 Function Start For Programming -->

<?php
 function getPublishedPostsByTopicProgramming($topic_id) {
	global $conn;
	$sql = "SELECT * FROM posts ps 
			WHERE ps.id IN 
			(SELECT pt.post_id FROM post_topic pt 
				WHERE pt.topic_id=1 GROUP BY pt.post_id 
				HAVING COUNT(1) = 1) AND image != ''";
	$result = mysqli_query($conn, $sql);
	// fetch all posts as an associative array called $posts
	$postsprogramming = mysqli_fetch_all($result, MYSQLI_ASSOC);

	$final_posts = array();
	foreach ($postsprogramming as $post) {
		// $post['topic'] = getPostTopic($post['id']); 
		array_push($final_posts, $post);
	}
	return $final_posts;
}?>
<?php $postsprogramming=getPublishedPostsByTopicProgramming(1);?>
<?php 
	// Get posts under a particular topic
	if (isset($_GET['topic'])) {
		$topic_id = $_GET['topic'];
		$posts = getPublishedPostsByTopic($topic_id);
	}
?> 
<!-- 1 Function End For Programming -->


<!-- 2 Function Start For Education -->

<?php
 function getPublishedPostsByTopicEducation($topic_id) {
	global $conn;
	$sql = "SELECT * FROM posts ps 
			WHERE ps.id IN 
			(SELECT pt.post_id FROM post_topic pt 
				WHERE pt.topic_id=2 GROUP BY pt.post_id 
				HAVING COUNT(1) = 1) AND image != ''";
	$result = mysqli_query($conn, $sql);
	// fetch all posts as an associative array called $posts
	$postseducation = mysqli_fetch_all($result, MYSQLI_ASSOC);

	$final_posts = array();
	foreach ($postseducation as $post) {
		// $post['topic'] = getPostTopic($post['id']); 
		array_push($final_posts, $post);
	}
	return $final_posts;
}?>
<?php $postseducation=getPublishedPostsByTopicEducation(2);?>

<!-- 2 Function End For Education -->


<!-- 3 Function Start For Technology -->

<?php
 function getPublishedPostsByTopicTechnology($topic_id) {
	global $conn;
	$sql = "SELECT * FROM posts ps 
			WHERE ps.id IN 
			(SELECT pt.post_id FROM post_topic pt 
				WHERE pt.topic_id=3 GROUP BY pt.post_id 
				HAVING COUNT(1) = 1)";
	$result = mysqli_query($conn, $sql);
	// fetch all posts as an associative array called $posts
	$poststechnology = mysqli_fetch_all($result, MYSQLI_ASSOC);

	$final_posts = array();
	foreach ($poststechnology as $post) {
		// $post['topic'] = getPostTopic($post['id']); 
		array_push($final_posts, $post);
	}
	return $final_posts;
}?>
<?php $poststechnology=getPublishedPostsByTopicTechnology(3);?>

<!-- 3 Function End For Technology -->


<!-- 4 Function Start For Maths -->

<?php
 function getPublishedPostsByTopicMaths($topic_id) {
	global $conn;
	$sql = "SELECT * FROM posts ps 
			WHERE ps.id IN 
			(SELECT pt.post_id FROM post_topic pt 
				WHERE pt.topic_id=4 GROUP BY pt.post_id 
				HAVING COUNT(1) = 1)";
	$result = mysqli_query($conn, $sql);
	// fetch all posts as an associative array called $posts
	$postsmaths = mysqli_fetch_all($result, MYSQLI_ASSOC);

	$final_posts = array();
	foreach ($postsmaths as $post) {
		// $post['topic'] = getPostTopic($post['id']); 
		array_push($final_posts, $post);
	}
	return $final_posts;
}?>
<?php $postsmaths=getPublishedPostsByTopicMaths(4);?>

<!-- 4 Function End For Maths -->


<!-- 5 Function Start For Machine Learning -->

<?php
 function getPublishedPostsByTopicMachineLearning($topic_id) {
	global $conn;
	$sql = "SELECT * FROM posts ps 
			WHERE ps.id IN 
			(SELECT pt.post_id FROM post_topic pt 
				WHERE pt.topic_id=5 GROUP BY pt.post_id 
				HAVING COUNT(1) = 1)";
	$result = mysqli_query($conn, $sql);
	// fetch all posts as an associative array called $posts
	$postsmachinelearning = mysqli_fetch_all($result, MYSQLI_ASSOC);

	$final_posts = array();
	foreach ($postsmachinelearning as $post) {
		// $post['topic'] = getPostTopic($post['id']); 
		array_push($final_posts, $post);
	}
	return $final_posts;
}?>
<?php $postsmachinelearning=getPublishedPostsByTopicMachineLearning(5);?>

<!-- 5 Function End For Maths Learning -->



<!-- 6 Function Start For Hacking -->

<?php
 function getPublishedPostsByTopicHacking($topic_id) {
	global $conn;
	$sql = "SELECT * FROM posts ps 
			WHERE ps.id IN 
			(SELECT pt.post_id FROM post_topic pt 
				WHERE pt.topic_id=6 GROUP BY pt.post_id 
				HAVING COUNT(1) = 1)";
	$result = mysqli_query($conn, $sql);
	// fetch all posts as an associative array called $posts
	$postshacking = mysqli_fetch_all($result, MYSQLI_ASSOC);

	$final_posts = array();
	foreach ($postshacking as $post) {
		// $post['topic'] = getPostTopic($post['id']); 
		array_push($final_posts, $post);
	}
	return $final_posts;
}?>
<?php $postshacking=getPublishedPostsByTopicHacking(6);?>

<!-- 6 Function End For Hacking -->


<!-- 7 Function Start For Science -->

<?php
 function getPublishedPostsByTopicScience($topic_id) {
	global $conn;
	$sql = "SELECT * FROM posts ps 
			WHERE ps.id IN 
			(SELECT pt.post_id FROM post_topic pt 
				WHERE pt.topic_id=7 GROUP BY pt.post_id 
				HAVING COUNT(1) = 1)";
	$result = mysqli_query($conn, $sql);
	// fetch all posts as an associative array called $posts
	$postsscience = mysqli_fetch_all($result, MYSQLI_ASSOC);

	$final_posts = array();
	foreach ($postsscience as $post) {
		// $post['topic'] = getPostTopic($post['id']); 
		array_push($final_posts, $post);
	}
	return $final_posts;
}?>
<?php $postsscience=getPublishedPostsByTopicScience(7);?>

<!-- 7 Function End For Science -->



<!-- 8 Function Start For Aptitude -->

<?php
 function getPublishedPostsByTopicAptitude($topic_id) {
	global $conn;
	$sql = "SELECT * FROM posts ps 
			WHERE ps.id IN 
			(SELECT pt.post_id FROM post_topic pt 
				WHERE pt.topic_id=8 GROUP BY pt.post_id 
				HAVING COUNT(1) = 1)";
	$result = mysqli_query($conn, $sql);
	// fetch all posts as an associative array called $posts
	$postsaptitude = mysqli_fetch_all($result, MYSQLI_ASSOC);

	$final_posts = array();
	foreach ($postsaptitude as $post) {
		// $post['topic'] = getPostTopic($post['id']); 
		array_push($final_posts, $post);
	}
	return $final_posts;
}?>
<?php $postsaptitude=getPublishedPostsByTopicAptitude(8);?>

<!-- 8 Function End For Aptitude -->


<!-- 9 Function Start For Installations -->

<?php
 function getPublishedPostsByTopicInstallations($topic_id) {
	global $conn;
	$sql = "SELECT * FROM posts ps 
			WHERE ps.id IN 
			(SELECT pt.post_id FROM post_topic pt 
				WHERE pt.topic_id=9 GROUP BY pt.post_id 
				HAVING COUNT(1) = 1)";
	$result = mysqli_query($conn, $sql);
	// fetch all posts as an associative array called $posts
	$postsinstallations = mysqli_fetch_all($result, MYSQLI_ASSOC);

	$final_posts = array();
	foreach ($postsinstallations as $post) {
		// $post['topic'] = getPostTopic($post['id']); 
		array_push($final_posts, $post);
	}
	return $final_posts;
}?>
<?php $postsinstallations=getPublishedPostsByTopicInstallations(9);?>

<!-- 9 Function End For Installations -->


<!-- 10 Function Start For Electroincs -->

<?php
 function getPublishedPostsByTopicElectronics($topic_id) {
	global $conn;
	$sql = "SELECT * FROM posts ps 
			WHERE ps.id IN 
			(SELECT pt.post_id FROM post_topic pt 
				WHERE pt.topic_id=10 GROUP BY pt.post_id 
				HAVING COUNT(1) = 1)";
	$result = mysqli_query($conn, $sql);
	// fetch all posts as an associative array called $posts
	$postselectronics = mysqli_fetch_all($result, MYSQLI_ASSOC);

	$final_posts = array();
	foreach ($postselectronics as $post) {
		// $post['topic'] = getPostTopic($post['id']); 
		array_push($final_posts, $post);
	}
	return $final_posts;
}?>
<?php $postselectronics=getPublishedPostsByTopicElectronics(10);?>

<!-- 10 Function End For Electronics -->


<!-- 11 Function Start For Others -->

<?php
 function getPublishedPostsByTopicOthers($topic_id) {
	global $conn;
	$sql = "SELECT * FROM posts ps 
			WHERE ps.id IN 
			(SELECT pt.post_id FROM post_topic pt 
				WHERE pt.topic_id=11 GROUP BY pt.post_id 
				HAVING COUNT(1) = 1)";
	$result = mysqli_query($conn, $sql);
	// fetch all posts as an associative array called $posts
	$postsothers = mysqli_fetch_all($result, MYSQLI_ASSOC);

	$final_posts = array();
	foreach ($postsothers as $post) {
		// $post['topic'] = getPostTopic($post['id']); 
		array_push($final_posts, $post);
	}
	return $final_posts;
}?>
<?php $postsothers=getPublishedPostsByTopicOthers(11);?>

<!-- 11 Function End For Others -->