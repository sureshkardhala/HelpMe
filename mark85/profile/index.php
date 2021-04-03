<?php include_once('../admin/includes/header_post.php'); ?>
<?php 
include('../config.php');
include('../values.php');
$email= $user_email;


$sql="SELECT * FROM users WHERE  email='$email'";
$result=mysqli_query($conn, $sql);
$count=mysqli_num_rows($result);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$username = $row['username'];
$about = $row['about'];
$achievements = $row['achievements'];
$profession = $row['profession'];
$location = $row['location'];
$image = $row['image'];
$id = $row['id'];
 
if(isset($_GET['name'])){
    $name = $_GET['name'];
    $query="SELECT * FROM users WHERE username = '$name'";
    $result=mysqli_query($conn , $query);
    $row = mysqli_fetch_array($result);
} 
?>

<?php  

$mysql = "SELECT * FROM comments WHERE user_id = $id";
$res = mysqli_query($conn, $mysql);
$fetch = mysqli_fetch_assoc($res);
// $new = "SELECT SUM(commentDesc) AS answer FROM comments WHERE user_id = 40";
$new = "SELECT commentDesc, COUNT(commentDesc) as answer FROM comments where user_id=$id";
$next = mysqli_query($conn, $new);
$fetching = mysqli_fetch_assoc($next);
$answers = $fetching['answer'];
?>

<?php  

$mysql_likes = "SELECT * FROM comments WHERE user_id = $id";
$res_likes = mysqli_query($conn, $mysql_likes);
$fetch_likes = mysqli_fetch_assoc($res_likes);
$new_likes = "SELECT likes, SUM(likes) as likes FROM comments where user_id=$id";
$next_likes = mysqli_query($conn, $new_likes);
$fetching_likes = mysqli_fetch_assoc($next_likes);
$likes = $fetching_likes['likes'];
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link href="https://fonts.googleapis.com/css2?family=Baloo+Tamma+2&display=swap" rel="stylesheet"> -->
    <!-- <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet"> -->
    <!-- <link href="https://fonts.googleapis.com/css2?family=Varela&display=swap" rel="stylesheet"> -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Quicksand:300,500" rel="stylesheet"> -->
</head>
<script>
  function edit(){
    window.location = "edit.php";
  }
</script>
<body>
    <!-- <div class="header">
        <h2>header</h2>
    </div> -->

    <div class="content">

    <div class="sidebar shadow">

        <div class="img-container">
        <?php  if(is_null($row['image'])): ?>
        <?php echo '<img class=img src="images/avatar.jpg" alt="">'; ?>
        <?php else: ?>
        <?php echo '<img class=img src="images/'.$row['image'].'" alt="">'; ?>
        <?php endif; ?>
        </div>

        <div class="name">
            <h4 style="font-size: 16px; color: maroon;"><?php echo $row['display_name']; ?></h4>
            <h5><?php echo $row['username']; ?></h5>
        </div>
        <div class="card">
            <p>My Skills</p><hr />
            <p style=" overflow-wrap: break-word;"><?php echo $row['skills']; ?></p>
        </div>
        <div class="card-blog">
            <p>My Blogs</p><hr />
            <a href="https://www.google.com/"><i class="fas fa-rss-square"></i>&nbsp;Blog/Website<i class="fas fa-plus-circle add"></i></a>
            <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i>&nbsp;Instagram<i class="fas fa-plus-circle add"></i></a>
            <a href="https://www.linkedin.com/"><i class="fab fa-linkedin"></i>&nbsp;Linked In<i class="fas fa-plus-circle add"></i></a>
            <a href="https://www.github.com/"><i class="fab fa-github"></i>&nbsp;Git Hub<i class="fas fa-plus-circle add"></i></a>
        </div>
        
    </div>
    <div class="information shadow">
        <div class="about">
        <h2>About</h2>
        <p><?php echo $row['about']; ?></p>
        </div><br />
        <div class="achievements">
        <h2>Achievements</h2>
        <p><?php echo $row['achievements']; ?></p>
        </div>
    </div>
   <div class="extra shadow">
    <div class="profession"><h4>Profession</h4><?php echo $profession; ?></div><br />
    <div class="location"><h4>Location</h4><?php echo $location; ?></div><br />
    <div class="location">
    <h4>No of Answers <?php echo $answers; ?></h4><hr />
    <h4>No of Likes Gained <?php echo $likes; ?></h4><hr />
    </div>
    <div class="btns">
            <?php if($email == $row['email']){ ?>
            <button onclick="edit()">Edit</button>
            <button>Add Links</button>
            <button>Settings</button>
            <?php }else{ ?>
            <?php echo "no access";} ?>
        </div>
   </div>
 </div>
</body>
<?php include(ROOT_PATH . '/includes/footer.php'); ?>
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
        /* background-color: grey; */
        background-color: whitesmoke;
        /* background-color: azure; */

    }
    .shadow{
      -webkit-box-shadow: 3px 3px 15px 0px rgba(207,209,209,1);
-moz-box-shadow: 3px 3px 15px 0px rgba(207,209,209,1);
box-shadow: 3px 3px 15px 0px rgba(207,209,209,1);
    }
    
    /* .header{
        border: 1px solid purple;
        margin: 0px;
        padding: 10px;
        height: 60px;
        line-height: 35px;
    } */
    .content{
        display : flex;
        flex-direction : row ;
        justify-content : space-around;
        flex-flow : wrap;	
 }
    .sidebar{
        border: 1px solid none;
        border-radius: 3px;
        width: 20%;
        height: 670px;
        margin: 10px;
        padding: 10px;
        background-color: white;
    }
    .img-container{
      display: flex;
      /* margin-top: 0px; */
      justify-content: center;

    }
   
    .img{
        border-radius: 50%;
        border: 2px solid grey;
        background-size: cover;
        height: 180px;
        width: 180px;
        object-fit: cover;
        background-repeat:no-repeat !important;
    }
    

     /* .img{
        display: inline-block;
  position: relative;
  width: 180px;
  height: 180px;
  overflow: hidden;
  border-radius: 50%;
     }

 */

     
    .card{
        border: 1px solid rgba(0, 0, 0, .3);
        border-radius: 3px;
        width: auto;
        height: 195px;
        padding: 0px;
    }
    .card p{
        padding: 5px;
    }
    .card-blog{
        border: 1px solid rgba(0, 0, 0, .3);
        border-radius: 3px;
        width: auto;
        height: 198px;
        margin-top: 8px;
        /* padding-left: 5px; */
        
    }
    .card-blog p{
        padding: 5px;
    }
    .card-blog a{
       padding: 8px 10px 8px 5px;
       /* border: 1px solid maroon; */
       border-radius: 3px;
       display: flex;
       /* margin-top: 4px; */
       flex-wrap: wrap;
       background-color: #f8f8ff;
 }
 .card-blog a i{
     padding-top: 4px;
 }
 .card-blog .add{
    color: yellow;
    display: none; 
}
 .name{
     text-align: center;
     /* margin-top: 5px; */
 }
 .information{
    /* display: flex; */
	justify-content: center;
     border: 1px solid none;
     border-radius: 3px;
     width: 50%;
     margin: 10px;
    padding: 10px;
    background-color: white;
 }
 .about{
     border: 1px solid rgba(0, 0, 0, .2);
     max-height: 600px;
     word-wrap: break-word;
 }
 .achievements{
    border: 1px solid rgba(0, 0, 0, .2);
    max-height: 200px;
     word-wrap: break-word;

 }
 .profession{
   border: 1px solid rgba(0, 0, 0, .3);
   height: 20%;
   word-wrap: break-word;
 }
 .location{
   border: 1px solid rgba(0, 0, 0, .3);
   height: 20%;
   word-wrap: break-word;
 }
 .extra{
     border: 1px solid none;
     border-radius: 3px;
     width: 20%;
     margin: 10px;
    padding: 10px;
    background-color: white;
 }
.btns{
    padding: 8px 0px 8px 0px;
    outline: none;
    /* margin-top : 5px; */
    /* background-color:rgb(15, 15, 15); */
}
button{
    padding: 5px 10px 5px 10px;
    width: 32%;
    outline-color: cyan;
    border: none;
    background-color: darkorange;
    border-radius: 2px;

}

@media screen and (max-width: 930px){
	.content .sidebar{
		width: 90%;
        height: 20%;
	}
    .information{
		width: 90%;
        height: 100%;
	}
    .about{
        max-height: 600px;
    }
    .achievements{
        max-height: 200px;
    }
    .extra{
		width: 90%;
    height: 100%;
	}
  .profession{
    height: 100px;
  }
  .location{
    height: 80px;
  }
    .card-blog{
        height: 25%;
    }
    /*
    .card-blog a{
        padding: 5px;
    } */
    .sidebar{
      height: 900px;
    }
    
}



</style>