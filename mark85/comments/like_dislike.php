<?php 
// $query="SELECT * FROM comments WHERE postID= $id  ORDER BY id DESC";
// $result=mysqli_query($conn , $query);
// $fetch = mysqli_fetch_assoc($result);
// $yummy = $fetch['id'];


// $kite = $four;
 if (isset($_POST['action'])) {
    $comment_id = $_POST['comment_id'];
    $user_id = $user_id;
    $action = $_POST['action'];
   
    if($action){
      $query="SELECT * FROM comments WHERE id= $comment_id";
      $result=mysqli_query($conn , $query);
      $fetch = mysqli_fetch_assoc($result);
      $yummy = $fetch['likes'];

      if($action == 'like'){

        $sql=("INSERT INTO like_dislike (comment_id, user_id, rating_action) 
            VALUES ($comment_id, $user_id, 'like') 
              ON DUPLICATE KEY UPDATE rating_action='like'") ;
                   $sqlit =  "UPDATE comments SET likes= $yummy+1 WHERE id = $comment_id";
       }
      if($action == 'dislike'){
        $sql="INSERT INTO like_dislike (comment_id, user_id, rating_action) 
              VALUES ($comment_id, $user_id, 'dislike') 
                ON DUPLICATE KEY UPDATE rating_action='dislike'";
                   $sqlit =  "UPDATE comments SET likes= $yummy-1 WHERE id = $comment_id";
      }
      if($action == 'unlike'){
             $sql="DELETE FROM like_dislike WHERE user_id=$user_id AND comment_id=$comment_id";
             $sqlit =  "UPDATE comments SET likes= $yummy-1 WHERE id = $comment_id";
      }
      if($action == 'undislike'){
            $sql="DELETE FROM like_dislike WHERE user_id=$user_id AND comment_id=$comment_id"; 
            $sqlit =  "UPDATE comments SET likes= $yummy+1 WHERE id = $comment_id";
      }
    // execute query to effect changes in the database ...
    mysqli_query($conn, $sql);
    mysqli_query($conn, $sqlit);
    echo getRating($comment_id);
    exit(0);
  }
}




  // Get total number of likes for a particular post
  function getLikes($comment_id)
  {
    global $conn;
    $sql = "SELECT COUNT(*) FROM like_dislike 
              WHERE comment_id = $comment_id AND rating_action='like'";
    $rs = mysqli_query($conn, $sql);
    $result = mysqli_fetch_array($rs);
    return $result[0];
  }
  
  // Get total number of dislikes for a particular post
  function getDislikes($comment_id)
  {
    global $conn;
    $sql = "SELECT COUNT(*) FROM like_dislike 
              WHERE comment_id = $comment_id AND rating_action='dislike'";
    $rs = mysqli_query($conn, $sql);
    $result = mysqli_fetch_array($rs);
    return $result[0];
  }
  
  // Get total number of likes and dislikes for a particular post
  function getRating($comment_id)
  {
    global $conn;
    $rating = array();
    $likes_query = "SELECT COUNT(*) FROM like_dislike WHERE comment_id = $comment_id AND rating_action='like'";
    $dislikes_query = "SELECT COUNT(*) FROM like_dislike 
                        WHERE comment_id = $comment_id AND rating_action='dislike'";
    $likes_rs = mysqli_query($conn, $likes_query);
    $dislikes_rs = mysqli_query($conn, $dislikes_query);
    $likes = mysqli_fetch_array($likes_rs);
    $dislikes = mysqli_fetch_array($dislikes_rs);
    $rating = [
        'likes' => $likes[0],
        'dislikes' => $dislikes[0]
    ];
    return json_encode($rating);
  }
  
  // Check if user already likes post or not
  function userLiked($comment_id)
  {
    global $conn;
    global $user_id;
    $sql = "SELECT * FROM like_dislike WHERE user_id=$user_id 
              AND comment_id=$comment_id AND rating_action='like'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        return true;
    }else{
        return false;
    }
  }
  
  // Check if user already dislikes post or not
  function userDisliked($comment_id)
  {
    global $conn;
    global $user_id;
    $sql = "SELECT * FROM like_dislike WHERE user_id=$user_id 
              AND comment_id=$comment_id AND rating_action='dislike'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        return true;
    }else{
        return false;
    }
  }
  
 
  /** like dislike */
?>