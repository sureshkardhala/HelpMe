<?php include('../config.php'); ?>
<?php include('../values.php'); ?>
<?php include('../includes/main-header.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

if(isset($_GET['gig'])){
    $gig_id = $_GET['gig'];
}

?>

<?php 

$sql = "SELECT * FROM freelancing WHERE id = $gig_id";
$query = mysqli_query($conn, $sql);
$fetch = mysqli_fetch_assoc($query); 

?>



<div class="container">



<div class="main-content shadow">

<h3 class="title"><?php echo $fetch['title']; ?></h3>

<div class="main-image">
<img src="<?php echo $fetch['image']; ?>"></img>
</div>

<p><?php echo $fetch['description']; ?></p>
<p><?php echo $fetch['price']; ?></p>

</div>
<script>

function fun(){
    var x = <?php echo $fetch['price']; ?>;
    alert(x);
}

</script>


<div class="order-bar shadow">
<h3 style="float:right;"><i class="fas fa-rupee-sign rupee"></i> <?php echo $fetch['price']; ?></h3>
<h3>Description</h3>
<p>ABRAR</p>
<div class="btn-buy">
    <button onclick="fun()">Continue <i class="fas fa-rupee-sign rupee"></i>(<?php echo $fetch['price']; ?>)</button>
</div>

</div>

</div>


</body>
</html>




<style>

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family:  "Helvetica Neue", Helvetica, Arial, sans-serif;
}

body{
background-color: whitesmoke;
}


.container{
    position: relative;
    border: 1px solid grey;
    display: flex;
    flex-wrap: wrap;
    /* justify-content: space-around; */
}

.main-content{
    width: 60%;
    height: 900px;
    border: 1px solid none;
    background: azure;
    margin: 50px 60px;
    background-color: white;
    border-radius: 2px;
}

.shadow{
      -webkit-box-shadow: 3px 3px 15px 0px rgba(207,209,209,1);
-moz-box-shadow: 3px 3px 15px 0px rgba(207,209,209,1);
box-shadow: 3px 3px 15px 0px rgba(207,209,209,1);
    }

.order-bar{
    border: 1px solid grey;
    width: 27%;
    height: 450px;
    margin: 50px;
    position: fixed;
    right: 0;
    background-color: white;
    border-radius: 2px;
}

.main-image{
    display: flex;
    justify-content: center;
    margin-top: 40px;
    background-color: whitesmoke;
}
.main-image img{
    background-color: yellow;
    width: 80%;
    height: 80%;
}


.rupee{
    font-size: 15px;
    color: grey;
}
.btn-buy{
    display: flex;
    justify-content: center;
    margin-top: 300px;
}
.btn-buy button{
    border: none;
    width: 80%;
    padding: 15px 40px;
    background-color: green;
    border-radius: 2px;
    color: white;
}

.title{
    color: black;
    border: 1px solid yellow;
}

@media screen and (max-width: 1200px){
   
    .main-content{
        width: 60%;
    }

    .order-bar{
        width: 30%;
        position: absolute;
    }


}


@media screen and (max-width: 1180px){

 

    .main-content{
        width: 55%;
    }

    .order-bar{
        width: 30%;
        position: absolute;
    }


}



@media screen and (max-width: 900px){

    .container{
        width: 100%;
    }

.main-content{
    width: 95%;
}

.order-bar{
    width: 90%;
    position: relative;
}


}


@media screen and (max-width: 600px){
    .container{
        width: 100%;
    }

    .main-content{
        width: 100%;
        margin: 20px;
    }

    .order-bar{
        width: 100%;
        margin: 20px;
        position: relative;
        top: 20px;
    }
}

/* 
.container .order-bar .btn-buy button{
    width: 50%;
    padding: 20px;
    background-color: green;
    margin: 400px 100px;
} */
</style>



<script>

window.addEventListener('scroll', function() {
    if(window.screen.width > 900){
  document.querySelector('.order-bar').style.marginTop =
    Math.max(-50, 50 - this.scrollY) + 'px';}
}, false);

</script>