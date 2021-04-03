<?php include('../config.php'); ?>
<?php include('../values.php'); ?>

<?php

$edit_title = '';
$edit_description = '';

?>

<?php include('database.php'); ?>






<!-- Gigs Insert Start-->


<!-- Gigs Update Start -->


<!-- Gigs Update End -->





<!-- Gigs Insert -->





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php include('../includes/main-header.php'); ?>
<body>
    
</body>
</html>

<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
  text-decoration: none;
}
body{
    background-color: whitesmoke;
}
.main-form{
    width: 60%;
    margin: 10px auto;
    border: 1px solid none;
    border-radius: 2px;
    display: flex;
    flex-direction: column;
    font-size: 17px;
    padding: 20px;
    background-color: white;
}

.shadow{
      -webkit-box-shadow: 3px 3px 15px 0px rgba(207,209,209,1);
-moz-box-shadow: 3px 3px 15px 0px rgba(207,209,209,1);
box-shadow: 3px 3px 15px 0px rgba(207,209,209,1);
    }

input, textarea, select{
    margin: 10px;
    padding: 10px;
}

input[type=text], textarea, select {
  -webkit-transition: all 0.30s ease-in-out;
  -moz-transition: all 0.30s ease-in-out;
  -ms-transition: all 0.30s ease-in-out;
  -o-transition: all 0.30s ease-in-out;
  outline: none;
  /* padding: 3px 0px 3px 3px;
  margin: 5px 1px 3px 0px; */
  border: 1px solid #DDDDDD;
}
 
input[type=text]:focus, textarea:focus, select:focus {
  box-shadow: 0 0 5px rgba(81, 203, 238, 1);
  /* padding: 3px 0px 3px 3px;
  margin: 5px 1px 3px 0px; */
  border: 1px solid rgba(81, 203, 238, 1);
}

.file{
    border: 1px solid rgb(0,0,0,0.2);
}

label{
    margin: 0px 0px 0px 10px;
}
.all-btns{
    width:100%;
    display: flex;
    justify-content: space-between;
}
.submit-btn{
    width: 20%;
    background-color: green;
    color: white;
    padding: 10px;
    margin: 5px auto;
    border-radius: 2px;
    outline: none;
    border: none;
}
.cancel{
    width: 20%;
    background-color: red;
    color: white;
    padding: 10px;
    margin: 5px auto;
    border-radius: 2px;
    outline: none;
    border: none;
}

.reset{
    width: 20%;
    background-color: #008ECC;
    color: white;
    padding: 10px;
    margin: 5px auto;
    border-radius: 2px;
    outline: none;
    border: none;
}

</style>

<h2 style="text-align: center; margin: 20px;">Apply Here</h2>

<form method="POST" action="" enctype="multipart/form-data">

<div class="main-form shadow" id="open-form">

<input type='hidden' name ='id' value='<?php echo $row['id']; ?>'>


<label for="">Title</label>
<input type="text" placeholder="Title of your Gig" name ="title" value='<?php echo $edit_title; ?>'>

<label for="">Description</label>
<textarea placeholder="Description of what you'd provide..." cols="30" rows="10" name="description"><?php echo $edit_description; ?></textarea>

<label for="">Files/Images</label>
<input class="file" type="file" name="featured_image" value='<?php echo $row['image']; ?>'>

<label for="">Price</label>
<select name="price">
<option selected disabled>set price</option>
<option value="50">R.S 50</option>
<option value="100">R.S 100</option>
<option value="150">R.S 150</option>
</select>

<div class="all-btns">
<?php if($enable_Editing === false): ?>
<input class="submit-btn" type="submit" name="submit" value="SUBMIT">
<?php else: ?>
<input class="submit-btn" type="submit" name="update" value="UPDATE">
<?php endif ?>

</div>

</div>

</form>

