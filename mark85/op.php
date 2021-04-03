<?php include('config.php'); ?>

<?php
    // $sql = "SELECT * FROM posts WHERE image = ''";
    $sql = "SELECT * FROM posts";
    $query = mysqli_query($conn, $sql);
?>

<?php

$topic = "SELECT * FROM topics";
$topic_fetch = mysqli_query($conn, $topic);
$result = mysqli_fetch_assoc($topic_fetch);


?>

<?php include('includes/main-header.php'); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
    

    <div class="sidebar">
    <?php foreach($topic_fetch as $topic_fetch_res): ?>
    <p><?php echo '@' . $topic_fetch_res['name'] ?></p>
    <?php endforeach ?>
    </div>
    
    <div class="content-bar">

    <div class="middle-bar">
    <p class="title">title</p>
    <p class="description">description</p>
    </div>

    <div class="img-bar">
    <p class="image">image</p>
    </div>
    </div>

    
    <div class="profile">
    <p>Abrar</p>
    </div>


    
    </div>

    


</body>
</html>

<style>

*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}

.container{
    border: 1px solid green;
    display: flex;
    flex-wrap: wrap;
    margin: 0px 0px;

}
.content-bar{
    display: flex;
    border: 10px solid green;
    width: 65%;
    margin: 20px 20px;
}
.middle-bar{
    border: 10px solid blue;
    width: 100%;
}

.sidebar{
    border: 1px solid red;
    width: 15%;
    height: 600px;
    margin: 20px 10px;
    /* padding: 10px; */
    text-align: center;
}

.sidebar p{
    border: 1px solid firebrick;
    padding: 18px;
}


.profile{
    margin: 20px 10px;
    width: 15%;
    border: 10px solid green;
    min-height: 600px;
    position: fixed;
    right: 0;
}


@media screen and (max-width: 900px){
  
    .sidebar{
        width: 100%;
    }
    .profile{
        width: 100%;
        position: relative;
    }
   
}
</style>