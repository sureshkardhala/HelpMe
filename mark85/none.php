<?php include('config.php'); ?>


<?php
    $sql = "SELECT * FROM posts";
    $query = mysqli_query($conn, $sql);
?>

<?php

$topic = "SELECT * FROM topics";
$topic_fetch = mysqli_query($conn, $topic);
$result = mysqli_fetch_assoc($topic_fetch);

?>

<?php

// $query_profile="SELECT * FROM comments ORDER BY likes DESC LIMIT 10";
$query_profile="SELECT DISTINCT commentAuthor FROM comments ORDER BY likes DESC LIMIT 10";
$result_profile=mysqli_query($conn , $query_profile);

$profile_image_fetch = mysqli_fetch_assoc($result_profile);
$new_name = $profile_image_fetch['commentAuthor'];

// echo $new_name;

$image = "SELECT * FROM users WHERE username = '$new_name'";
$profile_image = mysqli_query($conn, $image);
$image_fetch = mysqli_fetch_assoc($profile_image);
// echo $image_fetch['image'];
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
    

    <div class="sidebar shadow">
    <?php foreach($topic_fetch as $topic_fetch_res): ?>
    <p><?php echo '@' . $topic_fetch_res['name'] ?></p>
    <?php endforeach ?>
    </div>
    

    <div class="middle-bar">

    <?php while($sqli = mysqli_fetch_assoc($query)){ ?>

    <?php if($sqli['image']){ ?>
    <div class="content-bar shadow">
    <h3 class="title"><?php echo $sqli['title'] ?></h3>
    <p class="description"><?php echo $sqli['body'] ?></p>
    <span class="name"><h5>From : <a href=""><?php echo $sqli['username']; ?></a></h5></span>

    </div>
    <div class="image">
          <img src="<?php echo BASE_URL . '/static/images/' . $sqli['image']; ?>">
    </div>

    <?php }else{ ?>

        <div style="width: 100%;" class="content-bar shadow">
        <h3 class="title"><?php echo $sqli['title'] ?></h3>
        <p class="description"><?php echo $sqli['body'] ?></p>
        <span class="name"><h5>From : <a href=""><?php echo $sqli['username']; ?></a></h5></span>

        </div>

    <?php } ?>

<?php } ?>

    </div>
    
    <div class="profile shadow">
    <h2 style="text-align: center";>Top Profiles</h2>
        <div class="card">
                    <span class="profile-img"><img src="<?php echo BASE_URL . '/profile/images/' . $image_fetch['image']; ?>" alt=""></span>
                    <!-- <p><?php echo $profiles['commentAuthor'] ?></p> -->
                    <p><?php echo $image_fetch['username'] ?></p>
         </div>
    </div>
    
</div>

  


</body>
</html>

<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400&display=swap');

*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;

}



body{
    background-color: whitesmoke;
}

.container{
    /* border: 1px solid green; */
    display: flex;
    flex-wrap: wrap;
    margin: 0px 0px;
    /* position: relative; */

}

.sidebar{
    /* border: 1px solid red; */
    width: 15%;
    height: 600px;
    margin: 20px 10px;
    padding-top: 10px;
    text-align: center;
    background-color: white;
    border-radius: 2px;
    /* position: fixed;
    left: 0; */
}

.sidebar p{
    /* border: 1px solid firebrick; */
    background-color: white;
    padding: 18px;
}

.middle-bar{
    width: 65%;
    display: flex;
    flex-wrap: wrap;
    margin: 10px 20px;
    
} 
.profile{
    border-radius: 2px;
    margin: 20px 10px;
    width: 15%;
    border: 1px solid whitesmoke;
    min-height: 600px;
    background-color: white;
    position: fixed;
    right: 0;
}

.name{
    position: absolute;
    bottom: 0;
}

.name a, h5{
    color: rgb(0,0,0,0.5);
}

.card{
    display: flex;
    padding: 10px;
    border: 1px solid rgb(0,0,0,0.1);
    background-color: azure;

}

.profile-img{
    /* border: 1px solid blue; */
    height: 70px;
    width: 70px;
    border-radius: 50%;
}

.profile-img img{
    width: 70px;
    height: 70px;
    border-radius: 50%;
    object-fit: cover; 
}

.content-bar{
    /* border: 1px solid blue; */
    width: 65%;
    height: 210px;
    min-height: 200px;
    margin: 10px 0px;
    background-color: white;
    padding: 5px;
    overflow: hidden;
    border-radius: 2px;
    position: relative;
}

.shadow{
      -webkit-box-shadow: 3px 3px 15px 0px rgba(207,209,209,1);
        -moz-box-shadow: 3px 3px 15px 0px rgba(207,209,209,1);
        box-shadow: 3px 3px 15px 0px rgba(207,209,209,1);
    }

.image{
    width: 35%;
    margin: 10px 0px;
    height: 210px;
    background-color: white;
    padding: 5px;
    position: relative;
}

.image img{
    max-width: 100%;
    min-height: 150px;
    min-width: 335px;
    max-height: 100%;
    border-radius: 5px;
    border: 1px solid rgb(0,0,0,0.1);
    background-color: white;
}

.title{
    /* border-bottom: 1px solid grey; */
    max-height: 60px;
    text-overflow: ellipsis;
    overflow: hidden;
}

.description{
    /* border: 1px solid pink; */
    max-height: 120px;
    text-overflow: ellipsis;
    overflow: hidden;
    color: rgb(0,0,0,0.8);
}


@media screen and (max-width: 900px){
    .content-bar{
        width: 100%;
    }
    .middle-bar{
        width: 95%;
        margin: 10px;
    }
    .sidebar{
        width: 100%;
    }
    .profile{
        width: 100%;
        position: relative;
    }
    .image{
        width: 95%;
        min-height: 150px;
        margin: 0px 10px;
    }
}
</style>