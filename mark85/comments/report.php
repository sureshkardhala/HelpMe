<?php include('../values.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <div class="align">
    <h2>Report Comment</h2>
    <form action ="" method="POST">
    <span class="all-radio"><input name="scam_or_fraud" type="checkbox">scam or fraud</input></span></br>
    <span class="all-radio"><input name="hate_speech_or_symbols" type="checkbox">hate speech or symbols</input></span></br>
    <span class="all-radio"><input name="bullying_or_harassment" type="checkbox">bullying or harassment</input></span></br>
    <span class="all-radio"><input name="spam_or_promotion" type="checkbox">spam or promotion</input></span></br>
    <span style="border-bottom: 1px solid maroon"; class="all-radio no"><input name="false_information" type="checkbox">false information</input></span></br></br>
    <span><input class="btn" type="submit" value="submit" name="submit"></span> 
    <span><input onclick="goBack();" class="cancel-btn" type="button" value="back" name="submit"></span>
    </form>
    </div>
</body>


<script>
function goBack(){
    window.history.go(-1);
}
</script>



<?php
include('../config.php');

$user_id = $user_id;
$comment_id = 
$scam_or_fraud=null;
$hate_speech_or_symbols =null;
$bullying_or_harassment = null;
$spam_or_promotion = null;
$false_information = null;

if(isset($_GET['comment_id'])){
    $id = $_GET['comment_id'];
    $query="SELECT * FROM comments WHERE id = $id";
    $result=mysqli_query($conn , $query);
    $row = mysqli_fetch_array($result);
}


if(isset($_POST['submit'])){
    $user_id = $user_id;
    $comment_id = $id;
    $scam_or_fraud = $_POST['scam_or_fraud'];
    $hate_speech_or_symbols = $_POST['hate_speech_or_symbols'];
    $bullying_or_harassment = $_POST['bullying_or_harassment'];
    $spam_or_promotion = $_POST['spam_or_promotion'];
    $false_information = $_POST['false_information'];

    $sql = "INSERT INTO report (user_id, comment_id, scam_or_fraud, hate_speech_or_symbols, bullying_or_harassment, spam_or_promotion, false_information) VALUES ($user_id, $comment_id, '$scam_or_fraud', '$hate_speech_or_symbols', '$bullying_or_harassment', '$spam_or_promotion', '$false_information')";
    $result=mysqli_query($conn , $sql);
    if($result){
        header("location:".$_SERVER['HTTP_REFERER']);
        exit();
    }
}
?>







<style>

.align{
    text-align: center;
    /* border: 1px solid grey; */
    width: 70%;
    margin-left: 15%;

}
.btn{
outline: none;
background-color: green;
border: none;
border-radius: 3px;
padding: 8px 15px 8px 15px;
color: white;
float: left;
}
.cancel-btn{
outline: none;
background-color: #c80815;
border: none;
border-radius: 3px;
padding: 8px 15px 8px 15px;
color: white;
float: left;
margin-left: 20px;
}
.all-radio{
    border: 1px solid maroon;
    border-bottom: none;
    border-collapse : none;
    width: 100%;
    display: inline-block;
    text-align : left;
}

@media screen and (max-width:800px) {
.cancel-btn{
    float: right;
}

}
</style>
</html>