<?php include('../includes/main-header.php'); ?>


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



<?php include('../config.php'); ?>
<?php include('../values.php'); ?>


<?php 

$sql = "SELECT * FROM freelancing";

$mysql = mysqli_query($conn, $sql);


?>









<!-- <h2 style="text-align: center";>Here are some things you can check</h2>  -->




<div class="page-wrapper">
  
<!-- Post Slider-->
  <div class="post-slider">
    <!-- <i class="fas fa-chevron-left prev"></i>
    <i class="fas fa-chevron-right next"></i> -->
    <!-- <h2 style=" margin-left: 10%;cursor: pointer; color:#5c3c92;
    ">@Programming</h2> -->
    <div class="post-wrapper">
    <?php foreach ($mysql as $row): ?>
        <div class="post">
          <img src="<?php echo $row['image']; ?>" class="slider-image">
          <div class="post-info">
            <h4><a href="gigs.php?gig=<?php echo $row['id']; ?>"><?php echo $row['title']; ?></a></h4>
            <i class="far fa-user">   Abrar</i>
            &nbsp;
            <i class="fas fa-calendar-week">    May 2, 2020</i>       

          </div>
          <button class="btn-buy">BUY</button>

        </div>


    <?php endforeach; ?>


    </div>
  </div>

</div>

<style>


@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
  text-decoration: none;
}



.page-wrapper a:hover{
    color:grey;
  }
  .post-slider{
    position: relative;
  }
  .post-slider .slider-title{
    text-align: center;
    /* margin: 30px auto; */
    position: relative;
    bottom:40px;
  }
 
  .post-slider .post-wrapper{
    width: 90%;
    height: 350px;
    margin: 10px auto;
    /* overflow: hidden; */
    padding: 10px 0px 10px 0px;
  }
  
  .post-slider .post-wrapper .post{
    height: 310px;
    width: 21.9%;
    margin: 20px 19px;
    display: inline-block;
    background: whitesmoke;
    border-radius: 5px;
    border: 1px solid green;
    box-shadow: 1rem 1rem 1rem -1rem #a0a0a033;
    position: relative;
    /* left: 40px; */
  }
  .post-slider .post-wrapper .post .post-info{
    height: 130px;
    padding: 0px 5px;
  }
  .post-slider .post-wrapper .post .slider-image{
    width: 100%;
    height: 180px;
    border-radius: 4px;
  }

  .btn-buy{
    padding: 5px 20px;
    background: green;
    color: white;
    border: none;
    border-radius: 2px;
    position: absolute;
    top: 250px;
  }

  @media screen and (max-width: 1520px){
    .post-slider .post-wrapper .post{
        width: 30%;

    }

  }

  @media screen and (max-width: 1400px){
    .post-slider .post-wrapper .post{
        width: 29.5%;

    }

  }

  @media screen and (max-width: 1180px){
    .post-slider .post-wrapper .post{
        width: 29%;

    }

  }

  @media screen and (max-width: 1045px){
    .post-slider .post-wrapper .post{
        width: 28.5%;

    }

  }
  @media screen and (max-width: 940px){
    .post-slider .post-wrapper .post{
        width: 28%;

    }

  }

  @media screen and (max-width: 890px){
    .post-slider .post-wrapper .post{
        width: 44%;

    }

  }


  @media screen and (max-width: 745px){
    .post-slider .post-wrapper .post{
        width: 43.5%;

    }
  }

  @media screen and (max-width: 670px){
    .post-slider .post-wrapper .post{
        width: 80%;
        margin: 10px 35px;

    }
  }

  
  
</style>