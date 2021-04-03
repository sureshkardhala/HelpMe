<?php 

require ('../config.php');
require_once('../values.php');


 if(isset($_GET['edit_reply'])){
    $id = $_GET['edit_reply'];
    $query="SELECT * FROM replies WHERE id = $id";
    $result=mysqli_query($conn , $query);
    $row = mysqli_fetch_array($result);   
}

?>

<?php if($row['user_id'] == $user_id) { ?>

 <?php if(isset($_POST['updatecomment'])){
    $comment_description = $_POST['commentDesc'];
    $id = $_POST['id'];
    $que = ("UPDATE replies SET commentDesc = '$comment_description' WHERE id= '$id'");
    $res = mysqli_query($conn, $que);
    header("location:".$_SERVER['HTTP_REFERER']);
    exit();  
    }  
    ?>
    <form method="POST" action=''>
    <input type='hidden' name ='id' value='<?php echo $row[0]; ?>'>
    <textarea name='commentDesc'><?php echo $row[3]?></textarea> 
    <input type='submit' onclick = 'successMsg()' value='update' name='updatecomment'>
    </form>
    <button onclick=goBack()>Go Back</button>

<?php }else { 
echo "You dont have access to this page";    
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


