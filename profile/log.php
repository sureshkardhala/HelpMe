<script>

function openLoginForm(){
  document.body.classList.add("showLoginForm");
}
function closeLoginForm(){
  document.body.classList.remove("showLoginForm");
}

function validateForm() {
  var username = document.forms["myForm"]["username"].value;
  if (username == "") {
  	document.getElementById('username').style="border: 1px solid red";
    document.getElementById('user_name').innerHTML = "* Required";
    return false;
  }
  else{
    document.getElementById('username').style="border: 1px solid green";
    document.getElementById('user_name').style.display = "none"; 
  }


  var email = document.forms["myForm"]["email"].value;
  if (email == "") {
  	document.getElementById('email').style="border: 1px solid red";
    document.getElementById('e_mail').innerHTML = "* Required";
    return false;
  }
  else{
    document.getElementById('email').style="border: 1px solid green";
    document.getElementById('e_mail').style.display = "none"; 
  }



  var password_1 = document.forms["myForm"]["password_1"].value;
  if (password_1 == "") {
  	document.getElementById('password_1').style="border: 1px solid red";
    document.getElementById('pass1').innerHTML = "* Required";
    return false;
  }
  else{
    document.getElementById('password_1').style="border: 1px solid green";
    document.getElementById('pass1').style.display = "none"; 
  }




  var password_2 = document.forms["myForm"]["password_2"].value;
  if (password_2 == "") {
  	document.getElementById('password_2').style="border: 1px solid red";
    document.getElementById('pass2').innerHTML = "* Required";
    return false;
  }
  else{
    document.getElementById('password_2').style="border: 1px solid green";
    document.getElementById('pass2').style.display = "none"; 
  }


  if(password_1 != password_2){
    document.getElementById('confirm_pass').innerHTML = "Password and Confirm Password must be same"; 
    return false;
  }


}

</script>



<style>

@import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
*{
  margin: 0;
  padding: 0;
  outline: none;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
.center {
  position:absolute;
  top:50%;
  left:50%;
  transform:translate(-50%,-50%);
}
.popup-overlay {
  position:fixed;
  top:0px;
  left:0px;
  width:100%;
  height:100vh;
  z-index:1;
  background:rgba(0,0,0,0.5);
  display:none;
}
.popup {
    border-radius:2px;
  position:absolute;
  top:-150%;
  left:50%;
  transform:translate(-50%,-50%) scale(1.15);
  width:27%;
  height:530px;
  background:#f5f5f5;
  z-index:2;
  opacity:0;
  box-shadow:5px 5px 3px rgba(0,0,0,0.2);
  transition:transform 300ms ease-in-out,opacity 300ms ease-in-out;
}
body.showLoginForm .popup-overlay {
  display:block;
}
body.showLoginForm .popup {
  top:50%;
  opacity:1;
  transform:translate(-50%,-50%) scale(1);
}
.popup .popup-close {
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
.popup .popup-close:hover{
  background-color: black;
  color: white;
}

.popup .form .avatar {
  margin:30px 0px 20px;
  text-align:center;
}
.popup .form .avatar img {
  width:120px;
  border-radius:50%;
}
.popup .form .header {
  text-align:center;
  font-size:20px;
  font-weight:600;
  color:#222;
  margin:20px 0px;
}
.popup .form .element {
  padding:8px 20px;
}
.popup .form .element label {
  display:block;
  font-size:14px;
  color:#222;
  margin-bottom:5px;
}
.popup .form .element input {
  width:100%;
  padding:8px 10px;
  box-sizing:border-box;
  outline:none;
  border:1px solid #aaa;
  background:#eee;
  border-radius:2px;
}
.popup .form .element button {
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
.popup .form .element button:hover {
  background-color: #C020D0;
}

.popup .form .down{
  padding: 10px;
  font-size: 14px;
}
.popup .form .down .forget-pass{
 float: right;
}
a{
  text-decoration: none;
}

@media screen and (max-width: 700px){

  .popup {
    width: 90%;
  }
  .popup .form .down{
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

<div class="center">
  <button onclick="openLoginForm()">Login</button>
</div>
<div class="popup-overlay"></div>
<div class="popup">
  <div class="popup-close" onclick="closeLoginForm()">&times;</div>
  <div class="form">
    <div class="header">
      Sign Up
    </div>
    <form method="POST" name="myForm" onsubmit="return validateForm()">
    <div class="element">
      <label for="username">Username</label>
      <input type="text" id="username" placeholder="Username" name="username">
      <p style="font-size: 13px; color: red; padding: 0px;" id="user_name"></p>
    </div>
    <div class="element">
      <label for="email">E-Mail</label>
      <input type="email" id="email" placeholder="E-Mail" name="email">
      <p style="font-size: 13px; color: red; padding: 0px;" id="e_mail"></p>
    </div>
    <div class="element">
      <label for="password_1">Password</label>
      <input type="password" id="password_1" placeholder="password" name="password_1">
      <p style="font-size: 13px; color: red; padding: 0px;" id="pass1"></p>
    </div>
    <div class="element">
      <label for="password_2">Confirm Password</label>
      <input type="password" id="password_2" placeholder="confirm password" name="password_2">
      <p style="font-size: 13px; color: red; padding: 0px;" id="pass2"></p>
      <p style="font-size: 14px; color: grey; padding: 0px;" id="confirm_pass"></p>
    </div>
    <div class="element">
      <button>Sign Up</button>
    </div>
    </form>
    <div class="down">
    <span><input type="checkbox"><a href="terms-conditions.html">&nbsp;Agree to Terms & Conditions</a></span>
    <a href="#" class="forget-pass">Forget Password</a>
    </div>
  </div>
</div>

