<?php include('config.php'); ?> 
 <?php include('includes/public_functions.php'); ?> 

 <?php 
	// Get posts under a particular topic
	if (isset($_GET['topic'])) {
		$topic_id = $_GET['topic'];
		$posts = getPublishedPostsByTopic($topic_id);
	}
?> 


<!DOCTYPE html>
<html>
<head>
  <title>HelpMe</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="labeldir.css">
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/v4-shims.css">
</head>
<body>

<!-- Header Start-->

<header>

  <div class="header">
    <h2 class="logo">HelpMe</h2>
    <input type="checkbox" id="chk">
    <label for="chk" class="show-menu-btn">
      <i class="fas fa-bars"></i>
    </label>
    <ul class="menu">
      <a href="#">Profile</a>
      <a href="#">Post</a>
      <a href="#">Queries</a>
      <a href="#">Leader Board</a>
      <a href="#">Join</a>
      <label for="chk" class="hide-menu-btn">
        <i class="fas fa-times"></i>
      </label>
    </ul>
  </div>

</header>

<!-- Header End-->


<!-- Content-->
<div class="content clearfix">

<!-- Main Content-->

  <div class="main-content">
	<!-- <h1 class="recent-post-title">@Programming</h1> -->
	<h1 class="recent-post-title">Queries on <u><?php echo getTopicNameById($topic_id); ?></u></h1>
	<?php foreach ($posts as $post): ?>
	<div class="post clearfix">
      <img src="<?php echo BASE_URL . '/static/images/' . $post['image']; ?>" class="post-image">
      <div class="post-preview">
	  <a href="single_post.php?post-slug=<?php echo $post['slug']; ?>">
		<!-- <h1><a href="#">How to hack Wifi</a></h1> -->
		<h2><?php echo $post['title'] ?></h2>
        <i class="far fa-user">Abrar</i>
        &nbsp;
        <i class="far calendar"><?php echo date("F j, Y ", strtotime($post["created_at"])); ?></i>
        <p class="preview-text">
         Lorem50
        </p></br>
		<a href="" class="btn read-more">Read More</a>
		</a>
      </div>
    </div>
	<?php endforeach ?>





  </div>

<!-- Main Content End-->


<!-- Side Bar Start-->


<div class="sidebar">
<div class="section search">
  <h2 class="section-title">Search</h2>
  <form>
    <input type="text" name="search-item" class="text-input" placeholder="Search">
  </form>
</div>
  <div class="section topics">
    <h2 class="section-title">Labels</h2>
    <ul>
      <li><a href="<?php echo BASE_URL . 'filtered_posts.php?topic=1'?>">@Programming</a></li>
      <li><a href="<?php echo BASE_URL . 'filtered_posts.php?topic=2'?>">@Education</a></li>
      <li><a href="<?php echo BASE_URL . 'filtered_posts.php?topic=3'?>">@Technology</a></li>
      <li><a href="<?php echo BASE_URL . 'filtered_posts.php?topic=4'?>">@Maths</a></li>
      <li><a href="<?php echo BASE_URL . 'filtered_posts.php?topic=5'?>">@Machine Learning</a></li>
      <li><a href="<?php echo BASE_URL . 'filtered_posts.php?topic=6'?>">@Hacking</a></li>
      <li><a href="<?php echo BASE_URL . 'filtered_posts.php?topic=7'?>">@Science</a></li>
      <li><a href="<?php echo BASE_URL . 'filtered_posts.php?topic=8'?>">@Aptitude</a></li>
      <li><a href="<?php echo BASE_URL . 'filtered_posts.php?topic=9'?>">@Installations</a></li>
    </ul>
  </div>
</div>
</div>

<!-- Side Bar Start End-->


<!-- Footer Start-->
<footer>
  <div class="main-contentf">
      <div class="left box">
          <h2>About Us</h2>
          <div class="contentf">
              <p>Afterrender as you or we expect.
                   Its the equivalent of dogs and cats 
                   living together - total chaos. 
                   If you can't remove older version references, 
                   we recommend using a kit with version 4
                </p>
              <div class="social">
                  <a href="#"><span style="color:whitesmoke;" class="fa fa-facebook-square"></span></a>
                  <a href="#"><span style="color:whitesmoke;" class="fa fa-twitter"></span></a>
                  <a href="#"><span style="color:whitesmoke;" class="fa fa-instagram"></span></a>
                  <a href="#"><span style="color:whitesmoke;" class="fa fa-youtube-play"></span></a>
              </div>
          </div>
      </div>
      <div class="center box">
        <h2>Address</h2>
        <div class="contentf">
            <div class="place">
                <span class="fas fa-map-marker-alt"></span>
                <span class="text">India</span>
            </div>
            <div class="email">
                <span class="fas fa-envelope"></span>
                <span class="text">helpme.io@gmail.com</span>
            </div>
        </div>
      </div>
      <div class="right box">
          <h2>Contact Us</h2>
          <div class="contentf">
              <form action="#">
                  <div class="email">
                      <div class="text">E-Mail *</div>
                      <input type="email" required>
                  </div>
                  <div class="msg">
                      <div class="text">Message *</div>
                      <textarea rows="2" cols="25" required></textarea>
                  </div>
                  <div class="btn-footer">
                      <button type="submit" >Send</button>
                  </div>
              </form>
          </div>
      </div>
  </div>
  <div class="bottom">
      <center>
          <span class="credit">Created By <a href="#">HelpMe.io</a> | </span>
          <span class="far fa-copyright"></span><span> 2020 All Rights Reserved.</span>
      </center>
  </div>
</footer>
<!-- Footer End-->
</body>
</html>

<style>
  @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400&display=swap');
*{
  margin: 0;
  padding: 0;
  outline: none;
  box-sizing: border-box;
  text-decoration: none;
  font-family: 'Poppins', sans-serif;
}
/** Header Style Start **/

.header{
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
  .labels{
    padding-top: 20px;
  }
  .contentheader{
    padding: 0 20px;
    padding-bottom: 20px;
    margin:20px;
    border-radius: 4px;
    border: 3px solid blue;
    -webkit-box-shadow: 0 1px 3px #333;
    -moz-box-shadow: 0 1px 3px #333;
    box-shadow: 0 1px 3px #333;
  
  }
  .labels-info{
    display: flex;
    justify-content: space-between;
    font-size: 20px;
  }
  .labels-info a{
      color:#322514;
    text-decoration: none !important;
  }
  .contentheader img{
    width: 100%;
    max-width: 700px;
    margin: 20px 0;
  }
  .contentheader p{
    text-align: justify;
  }

/** Header Style End **/







.clearfix::after{
    content: '';
    display: block;
    clear: both;
}

.content{
    width:90%;
    margin:30px auto 30px;
}
.content .main-content{
    width: 70%;
    float: left;
}
.content .main-content .post{
    width: 95%;
    height: 230px;
    margin: 20px auto;
    border-radius: 5px;
    background: #f3f2ed;
    position: relative;
}
.content .main-content .post .read-more{
 position: absolute;
 bottom: 10px;
 right: 10px;
 border: 1px solid blue;
 background: transparent;
 border-radius: 0px;
 color: blue !important;
}
.content .main-content .post .read-more:hover{
    background: grey;
    color: white !important;
    transition: .25s;
}
.content .main-content .post .post-image{
    width:45%;
    height:100%;
    float: left;
    border-radius: 5px;
}
.content .main-content .post .post-preview{
    width: 55%;
    padding: 10px;
    float: right;
}
.content .main-content .recent-post-title{
    margin:20px;
}

.content .sidebar{
    width: 30%;
    float: left;
    
}
.content .sidebar .section{
    background: whitesmoke;
    padding: 20px;
    border-radius: 5px;
    margin-bottom: 20px;
}
.content .sidebar .section .section-title{
    margin: 10px 0px 10px 0px;
}
.content .sidebar .section.search{
    margin-top: 80px;
}
.content .sidebar .section.topics ul{
    margin: 0px;
    padding: 0px;
    list-style: none;
    border-top: 1px solid lightgrey;
}
.content .sidebar .section.topics ul li a{
    display: block;
    padding: 15px 0px 15px 0px;
    border-bottom: 1px solid grey;
    transition: all 0.3s;
    text-decoration: none;
}
.content .sidebar .section.topics ul li a:hover{
   padding-left: 10px;
   transition: all 0.3s;
}
.btn{
    padding: .5rem 1rem;
    background: red;
    color: green;
    border:1px solid transparent;
    border-radius: .25rem;
}
.btn:hover{
    color: white;
    background: blue;
}
.text-input{
    padding: .7rem 1rem;
    display: block;
    width:100%;
    border-radius: 5px;
    border: 1px solid wheat;
    outline: none;
    color:grey;
    line-height:  1.5rem;
    font-size: 1.0em;
}


/** Media Queries **/


@media only screen and (max-width: 800px){
    .content{
    width:100%;
}
.content .main-content .post{
    width: 100%;
}
    .content .main-content{
        width: 100%;
        padding: 10px;
    }
    .content .sidebar{
        width: 100%;
        padding: 10px;
    }
    .content .sidebar .section.search{
        margin-top: 30px;
    }
}

@media only screen and (max-width: 800px){
    .content .main-content .post{
        height: auto;
    }
    .content .main-content .post .post-image{
        width: 100%;
        height: 250px;
    }
    .content .main-content .post .post-preview{
        width: 100%;
    }
    .content .main-content .post .read-more{
        position: static;
        display: block;
        width: 100%;
        text-align: center;
    }
}

/** Header Media Queries **/
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

/** Header Media Queries End **/

/** Footer Style with Media Queries Start **/


footer{
    bottom:0px;
    width:100%;
    margin-top:60px;
    background: #111;
   color:#d9d9d9;
}
.main-contentf{
    display:flex;
}
.main-contentf .box{
    flex-basis: 50%;
    padding: 10px 20px;
}
.box h2{
    font-size:1.125rem;
    font-weight: 600;
    text-transform: uppercase;
}
.box .contentf{
    margin: 20px 0 0 0;
    position: relative;
}
.box .contentf:before{
    position: absolute;
    content: '';
    top:-10px;
    height: 2px;
    width: 100%;
    background: #1a1a1a;
}
.box .contentf:after{
    position: absolute;
    content:'';
    height: 2px;
    width: 15%;
    background: #f12020;
    top: -10px;
}

.left .contentf p{
    text-align: justify;
}
.left .contentf .social{
    margin: 20px 0 0 0;
}
.left .contentf .social a{
    padding:0 2px;
}
.left .contentf .social a span{
    height: 40px;
    width: 40px;
    background: #1a1a1a;
    line-height: 40px;
    text-align: center;
    font-size: 18px;
    border-radius: 5px;
    transition: 0.3s;
}
.left .contentf .social a span:hover{
    background: #f12020;
}
.center .contentf .fas{
background: #1a1a1a;
height: 45px;
width:45px;
line-height: 45px;
text-align: center;
border-radius:50%;
transition: 0.3s;
cursor: pointer;
}
.center .contentf .fas:hover{
background: #f12020;
}
.center .contentf .text{
font-size: 1.0625rem;
font-weight: 500;
padding-left: 10px;
}
.right form .text{
font-size: 1.0625rem;
margin-bottom: 2px;
color:#656565;
}
.right form .msg{
margin-top: 10pxs;
}
.right form input, .right form textarea{
    width: 100%;
    font-size: 1.0625rem;
    background: #151515;
    padding-left: 10px;
    border: 1px solid #222222;
}
.right form input:focus,
.right form textarea:focus{
    outline-color: #3498db;
}
.right form input{
    height: 35px;
}
.right form .btn-footer{
    margin-top: 10px;
}
.right form .btn-footer button{
    height: 40px;
    width: 100%;
    border: none;
    outline: none;
    background: #f12020;
    font-size: 1.0625rem;
    font-weight: 500;
    cursor: pointer;
    transition: .3s;
}
.right form .btn-footer button:hover{
    background:rgb(162, 189, 240);
}
.bottom center{
    padding: 5px;
    font-size: 0.9375rem;
    background: #151515;
}
.bottom center span{
    color: #656565;
}
.bottom center a{
    color: #f12020;
    text-decoration: none;
}
.bottom center a:hover{
    text-decoration: underline;
}
@media screen and (max-width: 900px){
    footer{
        position:relative;
        bottom: 0px;
    }
    .main-contentf{
        flex-wrap: wrap;
        flex-direction: column;
    }
    .main-contentf .box{
        margin: 5px 0px;
    }
}

/** Footer Style with Media Queries End **/

</style>