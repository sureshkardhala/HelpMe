<?php 
require ('../config.php');
require_once('../values.php');



if(isset($_GET['edit'])){
    $id = $_GET['edit'];
    $query="SELECT * FROM comments WHERE id = $id";
    $result=mysqli_query($conn , $query);
    $row = mysqli_fetch_array($result);
} 
?>
<?php if($row['user_id'] == $user_id){ ?>


   <?php  if(isset($_POST['updatecomment'])){ 
        $comment_description = $_POST['commentDesc'];
        $id = $_POST['id'];
        $que = ("UPDATE comments SET commentDesc = '$comment_description' WHERE id= '$id'");
        $res = mysqli_query($conn, $que);
        header("location:".$_SERVER['HTTP_REFERER']);
        exit();
    } ?>
     <form method="POST" action=''>
        <input type='hidden' name ='id' value='<?php echo $row[0]; ?>'>
        <textarea name='commentDesc'><?php echo $row[3]?></textarea> <br></br>
        <div class="msg">
        <input class="update" type='submit' onclick = 'successMsg()' value='Update' name='updatecomment'>
        </form>
        <button class="goback" onclick=goBack()>Go Back</button>
        </div>

<?php }else { 
    echo "You cant have Access to this page";
?>
<?php } ?>
   







<script>
function goBack() {
  window.history.go(-2);
}
function successMsg(){
    alert('Successfully Edited');
}
</script>

<style>
/* *{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
} */
textarea{
    margin-left: 10%;
    width: 80%;
}
/* .goback{
    margin-left: 10%;
    width: 100px;
} */
.msg{
   display: inline;
   margin : 100px;
   margin-left: 10%;
    width: 100px;
}
button{
    background-color: #008CBA;
    outline: none;
    border: none;
    padding: 10px;
    border-radius: 3px;
    color: white;
}
.update{
    background-color:#555555;
    outline: none;
    border: none;
    padding: 10px;
    border-radius: 3px; 
    color: white; 
}
</style>