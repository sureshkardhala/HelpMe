 
<?php 
include('../config.php');
include('../values.php');
$email=$user_email;

$sql="SELECT * FROM users WHERE  email='$email'";
$result=mysqli_query($conn, $sql);
$count=mysqli_num_rows($result);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);

$id =$row['id'];
 

if(isset($_POST['submit1']))

{

// Posted Values    


$imgfile=$_FILES["image"]["name"];
$file_size = $_FILES['image']['size'];
$fileinfo = @getimagesize($imgfile);
$filename="images/".$imgfile;


// get the image extension

$extension = substr($imgfile,strlen($imgfile)-4,strlen($imgfile));

// allowed extensions

$allowed_extensions = array(".jpg","jpeg",".png");

// Validation for allowed extensions

if(file_exists($filename)){

     echo "<script>alert('Try another name to your image');</script>";
}
 elseif (($file_size > 2097152)){      
        $message = 'File too large. File must be less than 2 megabytes.'; 
        echo '<script type="text/javascript">alert("'.$message.'");</script>'; 
    }

elseif(!in_array($extension,$allowed_extensions)){

echo "<script>alert('Invalid format. Only jpg / jpeg/ png /gif format allowed');</script>";

}

else{
   // deleting old image
	if(!is_null($row['image'])){
		unlink("images/" . $row['image']);
	}
	
//rename the image file

$imgnewfile=$imgfile;  

// Code for move image into directory

move_uploaded_file($_FILES["image"]["tmp_name"],"images/".$imgnewfile);

// Query for insertion data into database  

$query=mysqli_query($conn,"UPDATE users  SET image='$imgnewfile' WHERE id=$id");


if($query){     

       echo "<script>alert('Data inserted successfully');</script>";
}
else{
    echo  "<script>alert('Data not inserted');</script>";
}

}

}

 if (isset($_POST['submit'])) {

    $display_name = mysqli_real_escape_string($conn, $_POST['display_name']);
	// $lname = mysqli_real_escape_string($conn, $_POST['lname']);

	// $display_user_name = mysqli_real_escape_string($conn, $_POST['display_user_name']);

    $gender = mysqli_real_escape_string($conn, $_POST['gender']);
     
   

    // $email1 = mysqli_real_escape_string($conn, $_POST['email1']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $profession = mysqli_real_escape_string($conn, $_POST['profession']);

    $location = mysqli_real_escape_string($conn, $_POST['location']);
    $about = mysqli_real_escape_string($conn, $_POST['about']);
    $education = mysqli_real_escape_string($conn, $_POST['education']);
    $achievements = mysqli_real_escape_string($conn, $_POST['achievements']);

    $skills = mysqli_real_escape_string($conn, $_POST['skills']);
    // $bio = mysqli_real_escape_string($conn, $_POST['bio']);
	  
	$sql = "UPDATE users SET display_name='$display_name', phone='$phone', profession='$profession', location='$location', about='$about', gender='$gender', education='$education', skills='$skills', achievements='$achievements'  WHERE id=$id";
	if (mysqli_query($conn, $sql)) {

  echo "Record updated successfully";

} else {

  echo "Error updating record: " . mysqli_error($conn);
}

 mysqli_close($conn);
}
?>


	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Document</title>
        <link href="https://fonts.googleapis.com/css?family=Quicksand:300,500" rel="stylesheet">
	</head>
	<body>
		
	</body>
	</html>

    
    
<div style="display: flex; flex-wrap: wrap;" class="main-parent">
   
<div class="left-slider">
    <p>Sidebar</p>
</div>

    <div class="parent">
   
	<h2 class="heading">Update Profile</h2>
	<div class="container">

	<div class="profile-pic">      
	<?php  if(is_null($row['image'])): ?>
	<?php echo '<img style="object-fit: cover;" class="img" src="images/avatar.jpg" alt="">'; ?>
	<?php else: ?>
	<?php echo '<img style="object-fit: cover;" class="img" src="images/'.$row['image'].'" alt="">'; ?>
	<?php endif;?>
	</div>

	<div class="img-box">
	<form class="upload" name="uploadimage" enctype="multipart/form-data" method="post">
		<input type="file" name="image"  required />
		<input class="up-btn" type="submit" value="Upload " name="submit1"  />
	</form>
	</div>

    <form action="edit.php" method="POST" id ="form" >


    <div class="box"> 
	<label>Dispaly Name</label><br><br/>
	<input  maxlength="30" class="input-box" type="text" name="display_name" required value="<?php echo $row['display_name']; ?>">
	</div>

    <div class="box"> 
	<label>Mobile No (Optional)</label><br><br/>
	<input  maxlength="10" class="input-box" type="text" name="phone" required value="<?php echo $row['phone']; ?>">
    </div>

    <div class="box"> 
	<label>Profession</label><br><br/>
	<input  maxlength="50" class="input-box" type="text" name="profession" required value="<?php echo $row['profession']; ?>">
    </div>

    <div class="box"> 
	<label>Gender</label><br><br/>
	<div style=" color: black; padding: 0px;">
	<input type="radio" id="male" name="gender" value="male" 
	
	<?php if($row['gender']=='male'){
		echo "checked";
	}?>
	
	>&nbsp;Male
	<input type="radio" id="female" name="gender" value="female"
	
	<?php if($row['gender']=='female'){
		echo "checked";
	}?>

	>&nbsp;Female
	<input type="radio" id="others" name="gender" value="others"
	
	<?php if($row['gender']=='others'){
		echo "checked";
	}?>

	>&nbsp;Others
	</div>
    </div>



    <div class="box"> 
	<label>Education</label><br><br/>
	<input  maxlength="100" class="input-box" type="text" name="education" required value="<?php echo $row['education']; ?>">
    </div>


    <div class="box"> 
	<label>Skills</label><br><br/>
	<textarea maxlength = "40" class="textarea-box" type="text" name="skills" id="skills" required value="<?php echo $row['skills']; ?>"><?php echo $row['skills']; ?></textarea>
	</div>


    <div class="box"> 
	<label>Location</label><br><br/>
	<textarea class="textarea-box" type="text" name="location" id="location" required value="<?php echo $row['location']; ?>" ><?php echo $row['location']; ?></textarea>
    </div>


    <div class="box"> 
	<label>About</label><br><br/>
	<textarea  maxlength="900" class="textarea-max" type="text" name="about" id="about" required value="<?php echo $row['about']; ?>"><?php echo $row['about']; ?></textarea>
    </div>

    <div class="box"> 
	 <label>Achievements</label><br><br/>
	<textarea  maxlength="300" class="textarea-min" type="text" name="achievements" id="achievements" required value="<?php echo $row['achievements']; ?>"><?php echo $row['achievements']; ?></textarea>
    </div>

    <div style="border: 1px solid pink; padding: 10px;">
    <label style="padding: 0px;">Social Media Links</label><hr>
    <span><p style="width: 80px; padding: 5px 5px 5px 0px;">Instagram</p><input class="input-box-social" type="text"></span>
    <span><p style="width: 80px; padding: 5px 5px 5px 0px;">Linked In</p><input class="input-box-social" type="text"></span>
    <span><p style="width: 80px; padding: 5px 5px 5px 0px;">Website</p><input class="input-box-social" type="text"></span>
    <span><p style="width: 80px; padding: 5px 5px 5px 0px;">Git Hub</p><input class="input-box-social" type="text"></span>
    </div>

    <div class="box"> 
        <div class="btn-background">
        <button class="reset" type="reset"> Reset</button> &nbsp;&nbsp;&nbsp;&nbsp;
        <button class="submit" type="submit" name="submit">Submit</button>
        </div>
    </div>
</form>
</div>

</div>


<div style="border: 1px solid purple; width: 15%; margin: 10px; margin-top: 35px; height: 200px;">
    <p>Sidebar</p>
</div>

</div>

    

<style >
*{
	padding: 0;
	margin: 0;
	box-sizing: border-box;
    font-family: 'Quicksand', sans-serif;
}
.box{
    padding: 10px;
    border: 1px solid green;
}
.heading{
    text-align: center;
}
.parent{
    border: 1px solid green;
    width: 60%;
    margin: 30px auto;
    padding: 15px;
}
.profile-pic{
    margin: auto;
    height: 190px;
    border: 1px solid pink;
    display: flex;
	justify-content: center;
    background-color: whitesmoke;
}
.img{
    border-radius: 50%;
    border: 1px solid maroon;
    width: 22%;
}
.img-box {
    border: 1px solid grey;
    width: 100%;
    display: flex;
	justify-content: center;
}
.container{
    border: 1px solid maroon;
}
.input-box{
    background-color: transparent;
    display: flex;
    padding: 5px;
    border: 1px solid grey;
    outline: none;
    border-radius: 2px;
    width: 300px;
    background-color: whitesmoke;
}
.input-box-social{
    background-color: transparent;
    display: flex;
    padding: 5px;
    border: 1px solid grey;
    outline: none;
    border-radius: 2px;
    width: 500px;
    background-color: whitesmoke;  
}
textarea{
    resize: none;
    width: 100%;
    height: 100px;
    background-color: whitesmoke;
    border-radius: 2px;
}

.btn-background{
    display: flex;
    justify-content: center;
    padding: 5px;
}
.reset{
    padding: 8px;
    width: 10%;
    background-color: green;
    outline : none;
    border: none;
    border-radius: 2px;
    color: white;
}
.submit{
    padding: 8px;
    background-color: orange;
    outline : none;
    border: none;
    border-radius: 2px;
    color: white;
    width: 10%;
}

.reset:hover{
    background-color: grey;
}

.submit:hover{
    background-color: maroon;
}


.left-slider{
    border: 1px solid purple;
     width: 15%;
      margin: 10px;
       margin-top: 35px; 
       height: 200px;
}

@media screen and (max-width: 700px){
	.parent{
        margin: auto;
		width: 100%;
        overflow-x: hidden;
	}	
    .input-box{
        width: 100%;
    }
}
@media screen and (max-width: 410px){
    .up-btn{
    width: 100%;
    }
    .img{
        width: 40%;
    }
    .submit, .reset{
        width: 50%;
        padding: 15px 0px 15px 0px;
    }
    .box{
        border: none;
    }
    .left-slider{
        width: 100%;
    }
}
</style>


