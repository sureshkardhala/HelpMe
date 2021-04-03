<?php
include('../config.php');

$reply_query = "DELETE FROM replies WHERE id = '$_GET[id]'";

$data_reply = mysqli_query($conn, $reply_query);
if($data_reply){
    header("location:".$_SERVER['HTTP_REFERER']);
    exit();
}
?>