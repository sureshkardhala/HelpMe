<?php require_once('config.php') ?>
<?php  require_once('signup_signin.php'); ?>

<script>

function openLoginFormIn(){
  document.body.classList.add("showLoginForm-n");
}
function closeLoginFormN(){
  document.body.classList.remove("showLoginForm-n");
}


function validateFormN() {
  var email_in = document.forms["myForm_in"]["email"].value;
  if (email_in == "") {
    document.getElementById('email').style="border: 1px solid red";
    document.getElementById('user_email').innerHTML = "* Required";
    return false;
  }
  else{
    document.getElementById('email').style="border: 1px solid green";
    document.getElementById('user_email').style.display = "none"; 
  }
  

  var password = document.forms["myForm_in"]["password"].value;
  if (password == "") {
    document.getElementById('password').style="border: 1px solid red";
    document.getElementById('pass').innerHTML = "* Required";
    return false;
  }
  else{
    document.getElementById('password').style="border: 1px solid green";
    document.getElementById('pass').style.display = "none"; 
  }



}
</script>


<style>

.center-n {
  position:absolute;
  top:50%;
  left:50%;
  transform:translate(-50%,-50%);
}
.popup-overlay-n {
  position:fixed;
  top:0px;
  left:0px;
  width:100%;
  height:100vh;
  z-index:1;
  background:rgba(0,0,0,0.5);
  display:none;
}
.popup-n {
    border-radius:2px;
  position:absolute;
  top:-150%;
  left:50%;
  transform:translate(-50%,-50%) scale(1.15);
  width:27%;
  height:440px;
  background:#f5f5f5;
  z-index:2;
  opacity:0;
  box-shadow:5px 5px 3px rgba(0,0,0,0.2);
  transition:transform 300ms ease-in-out,opacity 300ms ease-in-out;
}
body.showLoginForm-n .popup-overlay-n {
  display:block;
}
body.showLoginForm-n .popup-n {
  top:50%;
  opacity:1;
  transform:translate(-50%,-50%) scale(1);
}
.popup-n .popup-close-n {
  position:absolute;
  top:-5px;
  right:-10px;
  width:40px;
  height:40px;
  /* background:#555; */
  /* color:#f5f5f5; */
  font-size:25px;
  font-weight:600;
  text-align:center;
  border-radius:50%;
  cursor:pointer;
}
.popup-n .popup-close-n:hover{
  background-color: black;
  color: white;
}

.popup-n .form-n .avatar {
  margin:30px 0px 20px;
  text-align:center;
}
.popup-n .form-n .avatar img {
  width:120px;
  border-radius:50%;
}
.popup-n .form-n .header-n {
  text-align:center;
  font-size:20px;
  font-weight:600;
  color:#222;
  margin:20px 0px;
}
.popup-n .form-n .element-n {
  padding:13px 20px;
}
.popup-n .form-n .element-n label {
  display:block;
  font-size:14px;
  color:#222;
  margin-bottom:5px;
}
.popup-n .form-n .element-n input {
  width:100%;
  padding:8px 10px;
  box-sizing:border-box;
  outline:none;
  border:1px solid #aaa;
  background:#eee;
  border-radius:2px;
}
.popup-n .form-n .element-n button {
  margin-top:5px;
  width:100%;
  padding:10px 0px;
  text-transform:uppercase;
  outline:none;
  border:none;
  font-size:15px;
  font-weight:600;
  border-radius:2px;
  cursor:pointer;
  background:#4889da;
    color:#f5f5f5;
}
.popup-n .form-n .element-n button:hover {
  background-color: #C020D0;
}

.popup-n .form-n .down-n{
  padding: 10px;
  font-size: 14px;
}
.popup-n .form-n .down-n .forget-pass-n{
 float: right;
}
a{
  text-decoration: none;
}

@media screen and (max-width: 700px){

  .popup-n {
    width: 90%;
  }
  .popup-n .form-n .down-n{
  /* padding: 10px; */
  font-size: 13px;
}

}

</style>







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

<div class="center-n">
</div>
<div class="popup-overlay-n"></div>
<div class="popup-n">
  <div class="popup-close-n" onclick="closeLoginFormN()">&times;</div>
  <div class="form-n">
    <div class="header-n">
      Sign In
    </div>
    <form method="POST" name="myForm_in" onsubmit="return validateFormN()">
    <?php include('includes/errors.php'); ?>
    <div class="element-n">
      <label for="email">E-Mail</label>
      <input type="text" id="email" placeholder="E-Mail" name="email">
      <p style="font-size: 13px; color: red; padding: 0px;" id="user_email"></p>
    </div>
    <div class="element-n">
      <label for="password">Password</label>
      <input type="password" id="password" placeholder="password" name="password">
      <p style="font-size: 13px; color: red; padding: 0px;" id="pass"></p>
    </div>
    <div class="element-n">
      <button name="signin">Sign In</button>
    </div>
    </form>
    <div class="down-n">
    <span><input type="checkbox"><a href="#">&nbsp;Agree to Terms & Conditions</a></span>
    <a href="#" class="forget-pass-n">Forget Password</a>
    </div>
  </div>
</div>

