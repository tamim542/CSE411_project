<!DOCTYPE html>
<html>
<head>
<style>
.container{
	position: absolute;
	left: 0px;
	top: 0px;
	width: 100%;
	height: 100vh;
	animation: animate 16s ease-in-out infinite;
	background-size: cover;

}
.outer{
	position:absolute;
	left: 0;
	top: 0;
	width: 100%;
	height: 100vh;
	background: rgba(0,0,0,0.5)
}


@keyframes animate{
	0%,100%{
		background-image: url(p1.jpg);
	}
		25%{
		background-image: url(p2.png);
	}
		50%{
		background-image: url(p3.jpg);
	}
		75%{
		background-image: url(p4.jpeg);
	}
}

* {
margin:0px;
padding:0px;

}

#navbar ul{
list-style:none;
}
#navbar ul li{
background-color:#057670 ;
width:150px;
border:1px solid white;
height:50px;
line-height:50px;
text-align:center;
float:left;
color:white;
font-size:18px;
opacity : .8;
}

#navbar ul li a {
	text-decoration: none;
	display: block;
}
#navbar ul li a:hover{
background-color:#23664A;
}

#navbar ul li ul li {
	display: none;
}

#navbar ul li:hover ul li {
	display: block;
}


</style>
<meta charset="utf-8">
</head>
<body a link="white" vlink="white">
<div class="container">
<div class="outer">
<div class="details">
<h1 style="font-size:100px; color:#DAF7A6"><strong>Land Record Management System</strong></h1>
</br></br></br></br>
</br></br></br></br>
</br></br></br></br>

<div id="navbar" text-align="center">
<ul>
<li><a href="index.php">Home</a></li>
<li><a href="service.php">Our Services</a></li>
<li><a>Login</a><ul>
	<li><a href="login.php">Employee login</a></li>
	<li><a href='adminlogin.php'>Admin login</a></li>
	<li><a href='managerlogin.php'>Manager login</a></li>
</ul>
</li>
<li><a class="registration" color="white" href="reg.php?con=11">Sign Up</a></li>
<li><a href="about.php">About Us</a></li>
<li><a href="contract.php">Contract With Us</a></li>



</ul>
</div>
</div>
</div>
</div>
</body>

</html>


<?php
include("config.php");

?>