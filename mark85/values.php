<?php 

if(empty($_COOKIE['ntok'])){
   echo "login first";
}else{
$cookie_info = $_COOKIE['ntok'];


$sql = "SELECT * FROM users WHERE token = '$cookie_info'";
$que = mysqli_query($conn, $sql);
$fetch = mysqli_fetch_array($que);
   $user_id = $fetch['id'];
   $user_name = $fetch['username'];
   $user_email = $fetch['email'];
}
?>




<!-- <?php 
$cookie_info = $_COOKIE['ntok'];
$sql = "SELECT * FROM users WHERE token = '$cookie_info'";
$que = mysqli_query($conn, $sql);
$fetch = mysqli_fetch_array($que);
   $user_id = $fetch['id'];
   $user_name = $fetch['username'];
   $user_email = $fetch['email'];
?> -->