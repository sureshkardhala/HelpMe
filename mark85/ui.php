<?php include('admin/includes/header_post.php'); ?>
<?php include('config.php'); ?>

<?php
    $sql = "SELECT * FROM posts WHERE image = '' LIMIT 10";
    $query = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>

<h2 style="text-align: center;">Short Queries</h2>

<?php foreach ($query as $result): ?>
<div class="all-rows shadow">
    <div class="row1">
    <div class="head-it">
    <p class="title-in"><?php echo $result['title']; ?></p>
    <div class="details">
    <span><i class="fas fa-user icon"></i><?php echo $result['username']; ?></span>
    <span style="float: right;"><?php echo $result['created_at']; ?></span>
    </div>
    </div>
    <p class="body-con"><?php echo $result['body']; ?></p>
    <a href="single_post.php?post-slug=<?php echo $result['slug'] ?>">view</a>
    </div>
</div>
<?php endforeach; ?>



<?php include('includes/footer.php'); ?>



<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400&display=swap');
*{
  margin: 0;
  padding: 0;
  outline: none;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
body{
    background-color: whitesmoke;
}
.shadow{
      -webkit-box-shadow: 3px 3px 15px 0px rgba(207,209,209,1);
        -moz-box-shadow: 3px 3px 15px 0px rgba(207,209,209,1);
        box-shadow: 3px 3px 15px 0px rgba(207,209,209,1);
    }
    
.all-rows{
    border: 1px solid white;
    margin: 10px auto;
    width: 70%;
    border-radius: 2px;
    background-color: white;
}
.row1{
    /* border: 1px solid purple; */
    padding: 5px;
    height: 180px;
}
.head-it{
    border: 1px solid rgb(0,0,0,0.1);
    height: 32%;
    border-radius: 2px;

}
.title-in{
    /* border: 1px solid grey;  */
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
   }
   
.details{
    font-size: 13px;
    margin-top: 5px;
}
.body-con{
    margin-top: 10px;
    border: 1px solid rgb(0,0,0,0.1);
    border-radius: 2px;
    height: 48%;
    padding: 5px 0px;
    display:inline-block;
    overflow: hidden;
    text-overflow: ellipsis;
    width: 104.9ch;
}
.icon{
    color: grey;
    font-size: 14px;
    padding: 0px 3px 0px 0px;
}

@media screen and (max-width:950px) {

.all-rows{
    width: 95%;
    /* margin: 10px; */
}
.body-con{
    width: 100%;
}
}
</style>