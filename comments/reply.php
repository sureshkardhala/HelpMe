<?php include('../config.php') ?>
<?php include(ROOT_PATH . '../values.php'); ?>



<?php
if(isset($_GET['reply'])){
    $id = $_GET['reply'];
    $query="SELECT * FROM comments WHERE id = $id";
    $result=mysqli_query($conn , $query);
    $row = mysqli_fetch_array($result);  
}

$user_id = $user_id;

    if(isset($_POST['submit-reply'])) {
        $id = $_POST['id'];

        $desc = $_POST['reply-comment'];
        $author = $user_name;

        $query="INSERT INTO replies (user_id, comment_id, commentDesc , commentAuthor )
                VALUES ('$user_id' ,'$id', '$desc' , '$author')
                ";

        $result=mysqli_query($conn , $query);

        if($result) {
          header("location:".$_SERVER['HTTP_REFERER']);
          exit();
        }

    }

?>

<html>

<head>


</head>

<body>
<!-- <button onclick="document.getElementById('popup').style.display='block'";>Reply</button>
<div id='popup'>
<p>Pop Up</p>
</div>
<button onclick="document.getElementById('popup').style.display='none'";>Close</button>

 -->
 <form method="POST" action='reply.php'>
 <input type='hidden' name ='id' value='<?php echo $row[0]; ?>'>
<textarea name='reply-comment' rows=10 cols=30 placeholder='Reply'></textarea>
<input type='submit' value='Reply' name='submit-reply'>

</form>


<!-- <form method="POST" action=''>
<input type='hidden' name ='id' value='<?php echo $row[0]; ?>'>
<textarea name='commentDesc'><?php echo $row[3]?></textarea> 
<input type='submit' onclick = 'successMsg()' value='update' name='updatecomment'>

</form> -->
<style>
/* #popup{
    border: 1px solid green;  
    height: 100px;
    width:50%;
    display: none;
} */
</style>
<button onclick=goBack()>Go Back</button>

<script>
function goBack() {
  window.history.go(-2);
}
function successMsg(){
    alert('Successfully Edited');
}
</script></body>
</html>