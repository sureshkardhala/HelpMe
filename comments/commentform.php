
<?php include(ROOT_PATH . '../values.php') ?>

<?php
if (isset($user_id)) {
$id = $post['id'];
global $id;
$user_id = $user_id;
 if(isset($_POST['submit'])) {
        $id = $post['id'];
        $desc = $_POST['commentDesc'];
        $author = $user_name;

        $query="INSERT INTO comments (user_id, postID , commentDesc , commentAuthor , created_at)
                VALUES ('$user_id' , '$id' , '$desc' , '$author', now())";
        $result=mysqli_query($conn , $query);

         if($result) {
          header("location:".$_SERVER['HTTP_REFERER']);
          // header("Refresh: 0");
          exit();
        }
    }
  } else {
    echo "You must login to Answer";
  } 
 
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="comments/comments.css">
<script src = "comments/comment_script.js"></script>
<script src = "comments/reply_like.js"></script>
<script src = "comments/allScripts.js"></script>
</head>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">





<body>
<div class="all-comments">
<h1> Answer Below </h1>
    <form role="form" action ="single_post.php?post-slug=<?php echo $post['slug']; ?>" method="post" id="#comment_form">
      <input type='hidden' name='id' value="<?php echo $id; ?> ">
      <div class="">
          <textarea class="text-area" required rows="14" cols="139" id="commentDesc" name="commentDesc" placeholder="Enter Answer"></textarea>
      </div>
      </br>
      <div class="">
            <button type="submit" class="sub-com-btn" name="submit">Post Answer</button>
        <br>
      </div>
    </form>
      
    </br></br></br></br>
</div>

</body>
</html>

<?php
// $email = $user_email;

// $sql="SELECT * FROM users WHERE email='$email'";
// $result=mysqli_query($conn, $sql);
// $count=mysqli_num_rows($result);
// $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
// $username = $row['username'];
// $about = $row['about'];
// $achievements = "hello";
// $image = $row['image'];
$id = $post['id'];

$query="SELECT * FROM comments WHERE postID= $id  ORDER BY id DESC LIMIT 2";
$result=mysqli_query($conn , $query);
global $four;
$number_of_comments = mysqli_num_rows($result);
echo "<h2 class=all-comm> All Answers ($number_of_comments) </h2>"; 
echo "</br>";

include('like_dislike.php');
include_once('like_reply.php');
?>
	<?php foreach ($result as $comment): ?>
		<div class='comment-dis-style'>
    <span class='name-style-comment'>
		<p class="name">Name : <a href="profile/index.php?name=<?php echo $comment['commentAuthor']; ?>"><?php echo $comment['commentAuthor']?></a>
    <span class="date"><?php echo $comment['created_at'] ?>&nbsp;&nbsp;
    <span>
      <i onclick="report()" class="fas fa-exclamation-circle report"><a href="comments/report.php?comment_id=<?php echo $comment['id']; ?>" ></a></i>
    </span>
    </p>
		</span>
		<p style="border-bottom:1px solid #79cbb8	; padding: 12px 5px 12px 5px; background-color: #F8F8FF;">Answer : <?php echo $comment['commentDesc']?></p>
		</br>
    <span class="like-dislike">
		<i 
    <?php if(userLiked($comment['id'])) : ?>
      class='fa fa-thumbs-up like-btn' 
    <?php else : ?>
      class='fa fa-thumbs-o-up like-btn' 

    <?php endif ?>

    data-id='<?php echo $comment['id']?>'></i>


    <span class="likes"><?php echo getLikes($comment['id'])?></span>
      
    &nbsp; &nbsp;
		<i 

    <?php if(userDisliked($comment['id'])) : ?>
    class='fa fa-thumbs-down dislike-btn' 
    <?php else : ?>
      class='fa fa-thumbs-o-down dislike-btn' 

    <?php endif ?>

    data-id='<?php echo $comment['id']?>'></i>

    <span class="dislikes"><?php echo getDisLikes($comment['id'])?></span>
    <br>
    </span>
		</span>
		<br>    
		<?php if($user_id == $comment['user_id']) : ?>
		 
		 <div class="all-btn">
		 <a class=edit-btn href=comments/edit.php?edit=<?php echo $comment['id'] ?>>Edit</a> 
     <a class=del-btn href=comments/delete.php?id=<?php echo $comment['id'] ?> >Delete</a>
    <?php endif ?>
		&nbsp;<a class=reply-btn href=comments/reply.php?reply=<?php echo $comment['id'] ?>>Reply</a> 
		</span>
    </div>
    </div>

    <?php $res = $comment['id']; 
    $reply_query="SELECT * FROM replies WHERE comment_id = $res ORDER BY id DESC";
    $reply_result=mysqli_query($conn , $reply_query);
    ?>
    

    <?php if (isset($reply_result)): ?>
    <?php foreach ($reply_result as $reply): ?>
    <div class="replies-dis">
               <span>
              <p class="reply-name"> Name :  <?php echo $reply['commentAuthor']?>
              <span>
                <i onclick="report()" class="fas fa-exclamation-circle report"><a href="comments/report.php?reply_id=<?php echo $reply['id']; ?>" ></a></i>
              </span>
              <span class="date">
                <?php echo $reply['created_at'] ?>&nbsp;&nbsp;
              </span>

              </p>
               </span>
                <span class=color>
               <p class="reply-ans"> Answer : <?php echo $reply['commentDesc']?></p>


              <?php 
              $res = mysqli_query($conn, "SELECT * FROM like_reply WHERE user_id = $user_id AND reply_id= $reply[id]");
              if(mysqli_num_rows($res) == 1) {  ?>
                <span><i class="fa fa-hand-peace peace unlike" id = <?php echo $reply['id']; ?>></i></span>
              <?php }  else { ?>
                <span><i class="fa fa-hand-peace-o peace like" aria-hidden="true"  id = <?php echo $reply['id']; ?>></i></span>
              <?php } ?>  
      
              &nbsp;<span class=""><?php echo getLikesReply($reply['id'])?></span>

               </span>
             <?php if($user_id == $reply['user_id']): ?>
                </br>
                <a class=edit-rep href=comments/edit_reply.php?edit_reply=<?php echo $reply['id'] ?>>Edit</a>  
                <a class=del-rep href=comments/delete_reply.php?id=<?php echo $reply['id'] ?>>Delete</a> 
              <?php endif ?>
    </div>
            <?php endforeach ?>
          <?php endif ?>
          </br>
	<?php endforeach ?>


