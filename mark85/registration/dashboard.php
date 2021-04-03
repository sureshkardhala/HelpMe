<?php  include('../config.php'); ?>
<?php include('signup_signin.php'); ?>

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


<center>
<h1>Welcome <?php echo $_SESSION['user']['username']; ?></h1>
<h2>you successfully created account</h2>

<a class='continue-btn' href="../landing.php">Continue</a>
<a class='continue-btn' href="../profile/index.php">Update Profile</a>
</center>
<style>
.continue-btn{
    text-decoration: none;
    background-color: blue;
    color: white;
    border-radius: 3px;
    padding: 10 20 10 20px;
}
.continue-btn:hover{
    background-color: maroon;
}
</style>
