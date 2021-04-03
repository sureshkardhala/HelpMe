<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed&display=swap" rel="stylesheet">
</head>
<body>
	    <div class="header-main">
        <h1 class="logo">HelpMe</h1>
        <ul class="menu">
        <a onclick="openLoginFormUp()" href="#">Sign Up</a>
        <a class="btn" onclick="openLoginFormIn()" href="#">Sign In</a>
        </ul>
    </div>
	<div class="curve-top">
	<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0082e6" fill-opacity="1" d="M0,160L48,138.7C96,117,192,75,288,85.3C384,96,480,160,576,197.3C672,235,768,245,864,229.3C960,213,1056,171,1152,181.3C1248,192,1344,256,1392,288L1440,320L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg>
	</div>
	<p class="title">Bring's the best inside you</p>
	<div class="content">
        <div class="menu-one shadow">
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempora dolor aliquid debitis veritatis quia nostrum magni. Magnam, expedita fugiat. Natus animi, quis delectus iure error magni consequuntur velit odit optio?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur inventore impedit officiis, voluptate quasi unde quo perferendis quae qui culpa!</p>
        <button class="more">Know More</button>
        </div>
    </div>
	<div class="image">
    <img src="undraw_data_trends_b0wg.svg" alt="">
	</div>
	<div class="curve">
		<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0082e6" fill-opacity="1" d="M0,0L48,26.7C96,53,192,107,288,133.3C384,160,480,160,576,144C672,128,768,96,864,96C960,96,1056,128,1152,149.3C1248,171,1344,181,1392,186.7L1440,192L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
	</div>
</body>
</html>

<style>

*{
	margin: 0;
	padding: 0;
	box-sizing: border-box;
}

.curve svg{
	position: fixed;
	bottom: -80px;
}

.curve-top svg{
	/* position: relative; */
	margin-top: -195px;
}
.header-main{
    /* margin: 10px 10px; */
    height: 60px;
    background: white;
    padding: 0 20px;
    color: #fff;
    font-family: 'Roboto', sans-serif;
  }
  .logo{
    line-height: 80px;
    float: left;
    color: #0d1a26;
    font-size: 35px;
	position: fixed;

}

.shadow{
      -webkit-box-shadow: 3px 3px 15px 0px rgba(207,209,209,1);
-moz-box-shadow: 3px 3px 15px 0px rgba(207,209,209,1);
box-shadow: 3px 3px 15px 0px rgba(207,209,209,1);
    }
    
/* 
.content .more:hover{
    background-color: #0d1a26;
} */
  
  .menu{
    float: right;
    line-height: 80px;
	position: fixed;
	right: 20px;
  }
  .menu a{
    color: #1b9bff;
    text-decoration: none;
    transition: 0.4s;
    border: 1px solid none;
    /* background-color: #1b9bff; */
    background-color: white;
    padding: 6px 16px;
    border-radius: 3px;
    font-size: 1.1rem;
    margin: 0 5px;

  }

  .title{
	  margin: 0px 60px;
	  position: fixed;
	  top: 130px;
    font-size: 3.2rem;
	color: #1b9bff;
    font-family: 'Sansita Swashed', cursive;
}

  .image img{
    width: 40%;
    height: 60%;
    position: fixed;
    right: 100px;
    top: 100px;
}


.menu a:hover{
	background-color: #0d1a26;
	color: white;
}

.content{
	/* max-width: 40%; */
	margin: 25px 120px;
	position: fixed;
	top: 210px;
	display: flex;
    justify-content: space-around;
	word-wrap: break-word;
	
}
.content p{
    padding: 10px;
    color: #081018;
    font-family: 'Roboto', sans-serif;

}
.menu-one{
    width: 450px;
	height: 200px;
	background-color: white;
}

.content .more{
    width: 100%;
    outline: none;
    border: none;
    background: #1b9bff;
    border-radius: 3px;
    color: white;
	font-size: 1rem;
	padding: 10px;
    position: absolute;
    bottom: 0;
}

.content .more:hover{
    background-color: #0d1a26;
}

@media screen and (max-width:1120px) {
	.image{
		display: none;

	}
    /* .menu-one{
        width: 90%;
    } */
}

@media screen and (max-width:750px) {
	.curve svg{
	position: fixed;
	bottom: -20px;
	}
	.image{
        visibility: visible;
        position: absolute;
        top: 200px;
	}
}

@media screen and (max-width:750px) {

    .content{
        margin: 40px 60px;
    }

    .menu-one{
        width: 100%;
    }

}

@media screen and (max-width:550px) {

    .content{
        margin: 0px 20px;
        width: 90%;
    }
    .menu-one{
        height: 250px;
    }
    .title{
        width: 95%;
        margin: 0 25px;
        font-size: 30px;
        display: flex;
    }

    .menu a{
        background-color: whitesmoke;
    }
}


</style>