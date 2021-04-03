<?php 

include('../config.php');
$query = "DELETE FROM comments WHERE id = '$_GET[id]'";
// $query = "DELETE comments, replies FROM comments INNER JOIN replies ON replies.id=comments.comment_id WHERE id = 5";
$data = mysqli_query($conn, $query);

if($data){
    header("location:".$_SERVER['HTTP_REFERER']);
    exit();
}



?>



