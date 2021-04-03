<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php include('config.php'); ?>

<?php
    // $sql = "SELECT * FROM posts WHERE image = ''";
    $sql = "SELECT * FROM posts";
    $query = mysqli_query($conn, $sql);
?>

<p>Hellow</p>
<p>Hellow</p>




<?php while($sqli = mysqli_fetch_assoc($query)){ ?>

    <div class="main-holder">
    
    
    <div class="body-query">
        <div class="title">
        <p>How to hack for free without root fkkkkkkkkkkkkkand dnid skkkkkkk</p>
        <div class="detailing">
        <span>Abrar</span>
        <span style="float: right; color: green;">Created ay</span>
        </div>

        </div>
        <div class="query">
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Recusandae, alias. Enim molestiae praesentium velit accusantium quisquam aliquid libero modi pariatur.</p>
        </div>
    </div>

    <div class="image">
        <p>Hello</p>
    </div>
    
    </div>

<?php } ?>
</body>
</html>

<style>
*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
    .main-holder{
        margin: 20px auto;
        width: 65%;
        border: 10px solid green;
        display: flex;
    }
    .body-query{
        border: 5px solid red; 
        min-height: 200px;
    }
    .title{
        border: 1px solid grey;
    }
    .query{
        border: 1px solid blue;
    }
    .image{
        width: 350px;
        border: 5px solid pink;
    }
    .detailing{
        border: 1px solid yellow;
    }
    @media screen and (max-width:900px) {
        .main-holder{
            width: 100%;
            display: flex;
            flex-wrap: wrap;
        }
        .body-query{
            width: 100%;
        }
        /* .query{
            height: 80%;
        } */
        .image{
            width: 60%;
            height: 200px;
        }
    }
</style>