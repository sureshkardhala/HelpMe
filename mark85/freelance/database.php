<?php 

$enable_Editing = false;

?>



<?php

if(isset($_POST['submit'])){

    $title = $_POST['title'];
    $description = $_POST['description'];

    $price = $_POST['price'];
    $verified = 0;

    $filename = $_FILES["featured_image"]["name"]; 
    $tempname = $_FILES["featured_image"]["tmp_name"];     
    $folder = "images/".$filename; 
    move_uploaded_file($tempname, $folder);
    $sql = "INSERT INTO freelancing (user_id, username, title, description, image, price, verified) VALUES ($user_id, '$user_name', '$title','$description', '$folder', $price, $verified)";
    $mysql = mysqli_query($conn, $sql);
    // header('location: main.php');
}
?>



<?php 

if(isset($_GET['edit'])){
    $enable_Editing = true;
    $query="SELECT * FROM freelancing WHERE id = $_GET[edit]";
    $result=mysqli_query($conn , $query);
    $row = mysqli_fetch_array($result);
    $edit_title = $row['title'];
    $edit_description = $row['description'];
    $edit_image = ($row['image']);
} 

?>


<?php
if(isset($_POST['update'])){
    $title = $_POST['title'];
    $description = $_POST['description'];
    $price = $_POST['price'];

    $filename = $_FILES["featured_image"]["name"]; 
    $tempname = $_FILES["featured_image"]["tmp_name"];     
    $folder = "images/".$filename; 
    move_uploaded_file($tempname, $folder);


    $gig_id = $_POST['id'];
    $sql = "UPDATE freelancing SET title = '$title', description = '$description', image = '$folder', price = $price WHERE id = $gig_id";
    $res = mysqli_query($conn, $sql);
    header("location:".$_SERVER['HTTP_REFERER']);
    exit();
}

?>





<?php  

if(isset($_GET['delete'])){

    $query = "DELETE FROM freelancing WHERE id = $_GET[delete]";
    $data = mysqli_query($conn, $query);

    if($data){
    header("location: main.php");
    exit();
}
}

?>

