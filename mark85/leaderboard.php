<?php 

require_once('config.php');
include('comments/like_dislike.php');
include('includes/main-header.php');

?>

<html lang="en" dir="ltr">
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- <script src = 'comments/comment_script.js'></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Leaderboard</title>
</head>
<body>
</br>
<h2 class= "n"><center>Top 10 Profiles / Answers this week</center></h2>
<br>
</body>

</html>

<?php 
include('values.php');
// $email = $user_email;


 



$query="SELECT * FROM comments ORDER BY likes DESC LIMIT 10";
$result=mysqli_query($conn , $query);
while($fetch = mysqli_fetch_assoc($result)){
$comment_id = $fetch['postID'];
$query_post = "SELECT * FROM posts WHERE id = $comment_id";
$result_post=mysqli_query($conn , $query_post);
$fetch_slug = mysqli_fetch_assoc($result_post);


// $sql="SELECT * FROM users WHERE id= $comment_id";
// $result=mysqli_query($conn, $sql);
// $count=mysqli_num_rows($result);
// $row = mysqli_fetch_array($result,MYSQLI_ASSOC);


// echo $fetch_slug['id'];
echo "<div class='comment-dis-style shadow'>";
echo "<p class='name'><a href='profile/index.php?name=$fetch[commentAuthor]'>Name : $fetch[commentAuthor]</a></p>";
echo "<p class='answer'>Answer : $fetch[commentDesc]</p>";
echo "<p class='view'><a style='color : maroon'; href=single_post.php?post-slug=$fetch_slug[slug]>view answer</a></p>";
echo "</div>";
echo "</br>";
}



?>


<!-- <?php foreach ($result as $comment): ?>
		<div class='comment-dis-style'>
		</br>
    <span class='name'>
		<p>Name : <?php echo $comment['commentAuthor']?></p>
		</span></br>
		<p class="none">Answer : <?php echo $comment['commentDesc']?></p>
		</br>	
    <a class="view" href="single_post.php?post-slug=<?php echo $fet['slug']; ?>">View</a>
  </div>
   
  <?php endforeach ?> -->

  <?php include('includes/footer.php') ?>

<style>

@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400&display=swap');
*{
  margin: 0;
  padding: 0;
  outline: none;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
body{
  background-color: white;
}
.shadow{
      -webkit-box-shadow: 3px 3px 15px 0px rgba(207,209,209,1);
-moz-box-shadow: 3px 3px 15px 0px rgba(207,209,209,1);
box-shadow: 3px 3px 15px 0px rgba(207,209,209,1);
    }

.n{
    color: firebrick;
    text-shadow: 0 1px 0 #ccc, 
    0 2px 0 #c9c9c9,
    0 3px 0 #bbb,
    0 4px 0 #b9b9b9,
    0 5px 0 #aaa,
    0 6px 1px rgba(0,0,0,.1),
    0 0 5px rgba(0,0,0,.1),
    0 1px 3px rgba(0,0,0,.3),
    0 3px 5px rgba(0,0,0,.2),
    0 5px 10px rgba(0,0,0,.25),
    0 10px 10px rgba(0,0,0,.2),
    0 20px 20px rgba(0,0,0,.15);
}
.comment-dis-style{
  border: 1px solid;
  border-image: linear-gradient(to right, grey 25%, yellow 25%, blue 50%,red 50%, red 75%, teal 75%) 5;
  width: 60%;
  color: #8000FF;
  margin-left: 20%;
  overflow-wrap: break-word;

}
.name{
  padding: 5px 5px 5px 5px;
  width: 100%;
  border-bottom: 1px solid #79cbb8	;
  background-color: whitesmoke;

}

.answer{
  padding: 10px 5px 10px 5px;
  width: 100%;
  border-bottom: 1px solid #79cbb8;
  background-color: #F8F8FF;
}


.view{
  width: 100%;
  height: 30px;
  padding: 5px;
  border: 1px solid whitesmoke;
  font-size: 15px;
  text-decoration: none;

}

.none{
  color: #020001;
}




@media screen and (max-width:800px) {
  .comment-dis-style{
    width: 90%;
    margin-left: 5%;
  } 
  .all-comments{
  padding: 0;
  margin-left: 5%;
}
.replies-dis{
  width: 87%;
  color: brown;
  margin-left: 6.7%;
  border-top:none;
}
.text-area{
  width: 95%;
}
.sub-com-btn{
  width: 95%;
}
}
@media screen and (max-width:1000px) {

  .created_at{
  margin-left: 50%;
}
}
@media screen and (max-width:530px) {
  .created_at{
    margin-left: 20%;
  }
}
</style>


