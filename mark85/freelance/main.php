
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gigs</title>
</head>
<body>

 
</body>
</html>

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

.container{
    /* border: 1px solid green; */
    display: inline-block;
    width: 30%;
    position: relative;
    left: 20%;
    bottom: 15px;
    padding:20px;
}
.shadow{
      -webkit-box-shadow: 3px 3px 15px 0px rgba(207,209,209,1);
-moz-box-shadow: 3px 3px 15px 0px rgba(207,209,209,1);
box-shadow: 3px 3px 15px 0px rgba(207,209,209,1);
    }

.box{
    /* border: 1px solid green; */
    width: 100%;
    height: 350px;
    display: inline-block;
    background-color: whitesmoke;
    
}


.img{
    /* border: 1px solid green; */
    width: 100%;
    height: 60%;
}

.main-form input, textarea, select, .close{
    /* border: 1px solid green; */
    display: block;
    width: 50%;
    margin: 30px auto;
    font-size: 17px;
    border-radius: 2px;
    outline: none;
}
input{
    height: 50px;
}

.main-form .submit-btn{
    background-color: grey;
    border: none;
    border-radius: 3px;
    outline: none;
    width: 10%;
}
.btn-class{
    background-color: green;
    margin: 35px auto;
    outline: none;
    padding: 10px 20px;
    border: none;
    color: white;
    border-radius: 2px;
    display: flex;
    /* justify-content: flex-start; */
}
.sidebar{
    width: 17%;
    /* border: 1px dashed firebrick; */
    position: fixed;
    top: 120px;
    left: 27px;
    height: 70%;
    text-align: center;
    /* display: flex;
    justify-content: center; */
}
.sidebar li{
    list-style: none;
    margin: 10px;
    /* padding: 27px; */
}

#open-form{
    display : none;
}

@media screen and (max-width: 700px){
    .container{
        width: 100%;
        position: relative;
        top:90px;
        left: 0;
    }

    .main-form input, textarea{
        width: 90%;
    }
    
    .sidebar{
        width: 90%;
        position: absolute;
        top: 150px;
        left: 20px;
        height: 50px;
        display: flex;
        justify-content: center;
    }
}
</style>




<?php

include('../config.php');
include('../values.php');
include('database.php');


?>





<?php include('../includes/main-header.php'); ?> 

<h2 style="text-align: center; margin: 10px;">Your Gigs</h2>

<?php

$query = "SELECT * FROM freelancing WHERE verified = 1 AND user_id = $user_id LIMIT 2";
$result = mysqli_query($conn, $query);
while($row = mysqli_fetch_assoc($result)){ 
    $title = $row['title'];
    $description = $row['description'];
    $price = $row['price'];
    $image = $row['image'];
}
?>

<?php foreach($result as $gigs): ?>


<div class="container">

<div class="box shadow">
    <img class="img" src="<?php echo $gigs['image']; ?>" alt="">
    <p><?php echo $gigs['title']; ?></p>
    <p><?php echo $gigs['description']; ?></p>
    <p><?php echo $gigs['price']; ?></p>
    <div style="margin-top: 30px;" class="crud-btns">
    <a style="padding: 5px;" href="application.php?edit=<?php echo $gigs['id']; ?>">Edit</a>
    <a style="padding: 5px;" href="main.php?delete=<?php echo $gigs['id']; ?>">Delete</a>
    </div>
</div>

</div>

<?php endforeach ?>

<div class="sidebar shadow">

<li><a href="">Settings</a></li>
<li><a href="">edit</a></li>
<li><a href="">Details</a></li>

</div>

<p style="display: flex; justify-content: center;">Your Gigs need to be verified to show</p>
<p style="display: flex; justify-content: center;">You can Apply below</p>
<p style="display: flex; justify-content: center;">Payment will be slow</p>


<button class="btn-class" onclick="window.location = 'application.php'">Apply Here</button>

