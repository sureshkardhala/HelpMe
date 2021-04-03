<?php  

if(isset($_POST['liked'])){
  $reply_id = $_POST['reply_id'];
  $res = mysqli_query($conn, "SELECT * FROM replies WHERE id = $reply_id");
  $row = mysqli_fetch_array($res);
  $n = $row['likes'];

  mysqli_query($conn, "UPDATE replies SET likes= $n+1 WHERE id = $reply_id");
  mysqli_query($conn, "INSERT INTO like_reply (user_id, reply_id) VALUES ($user_id, $reply_id)");
  exit();
}

if(isset($_POST['unliked'])){
  $reply_id = $_POST['reply_id'];
  $res = mysqli_query($conn, "SELECT * FROM replies WHERE id = $reply_id");
  $row = mysqli_fetch_array($res);
  $n = $row['likes'];

  mysqli_query($conn, "DELETE FROM like_reply WHERE reply_id = $reply_id AND user_id = $user_id");
  mysqli_query($conn, "UPDATE replies SET likes= $n-1 WHERE id = $reply_id");
  exit();
}

function getLikesReply($reply_id)
{
  global $conn;
  $sql = "SELECT COUNT(*) FROM like_reply 
            WHERE reply_id = $reply_id";
  $rs = mysqli_query($conn, $sql);
  $result = mysqli_fetch_array($rs);
  return $result[0];
}

?>