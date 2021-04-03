<html>
<head>
    <meta charset="utf-8">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/v4-shims.css">
</head>
<body>
    <div class="header_post">
        <h2 class="logo">HelpMe</h2>
        <input type="checkbox" id="chk">
        <label for="chk" class="show-menu-btn">
          <i class="fas fa-bars"></i>
          <!-- <i class="fas fa-user-circle"></i> -->
        </label>
        <ul class="menu">
          <a href="#">Post</a>
          <a href="#">Queries</a>
          <a href="#">Leader Board</a>
          <a href="#">Join</a>
          <a href="#">Profile</a>
          <label for="chk" class="hide-menu-btn">
            <i class="fas fa-times"></i>
          </label>
        </ul>
      </div>
</body>
<style>
    *{
  margin: 0;
  padding: 0;
  font-family: "montserrat",sans-serif;
  text-decoration: none;
    -webkit-tap-highlight-color: rgba(0, 0, 0, 0) !important;
}
.header_post{
    height: 60px;
    background: #0082e6;
    padding: 0 20px;
    color: #fff;
  }
  .logo{
    line-height: 60px;
    float: left;
  }
  
  .menu{
    float: right;
    line-height: 60px;
  }
  .menu a{
    color: #fff;
    text-decoration: none;
    padding: 0 10px;
    transition: 0.4s;
  }
  .show-menu-btn,.hide-menu-btn{
    transition: 0.4s;
    font-size: 30px;
    cursor: pointer;
    display: none;
  }
  .show-menu-btn{
    float: right;
  }
  .show-menu-btn i{
    line-height: 60px;
  }
  .menu a:hover,
  .show-menu-btn:hover,
  .hide-menu-btn:hover{
    color: red;
  
  }
  
  #chk{
    position: absolute;
    visibility: hidden;
    z-index: -1111;
  }
@media screen and (max-width:800px) {
    .show-menu-btn,.hide-menu-btn{
      display: block;
    }
    .menu{
      position: fixed;
      width: 100%;
      height: 350px;
      background: #333;
      right: -100%;
      top: 0;
      text-align: center;
      padding: 60px 0;
      line-height: normal;
      transition: 0.7s;
        z-index: 99999;
    }
    .menu a{
      display: block;
      padding: 20px;
    }
    .hide-menu-btn{
      position: absolute;
      top: 20px;
      right: 40px;
    }
    #chk:checked ~ .menu{
      right: 0;
    }
  }
</style>
</html>