<!DOCTYPE html>
<html>
<head>
	<style>
		*{
			box-sizing: border-box;

		}
		body{
			margin:0;
			background:gray;
		}
		nav{
			background-color: #1ebbd7;
			width:100%;
			overflow: auto;
		}
		ul{
			margin: 0;
			padding:0;
			list-style: none;
		}
		li{
			float:left;
		}
		nav a{
			width:120px;
			display: block;
			text-decoration:none;
			text-align: center;
			background:#1ebbd7;
			font-size: 17px;
			color: white;
			padding:20px 10px;
			font-family: Arial;
		}

		.container{
			max-width: 1200px;
			margin:auto;
			background:#f2f2f2;
			overflow: auto;
		}
		.gallary{
			margin:5px;
			border:1px solid #ccc;
			float:left;
			width:390px;
		}
		.gallary img{
			width:100%;
			height:auto;
		}
		.desc{
			padding:15px;
			text-align:center;
		}
	</style>
</head>
<body>
	<nav>
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="#"> >> Gallery</a></li>
		</ul>
	</nav>

	<div class="container">
		<div class="gallary">
			<img src = "tauhid.jpg">
			<div class="desc">Md.Tauhidul Islam Bhuiyan </br>ID: 2016-2-60-036</div>
		</div>
		<div class="gallary">
			<img src = "pro2.jpg">
			<div class="desc">Puspita Moni</br>ID:2016-2-60-016</div>
		</div>
                 
              <div class="gallary">
			<img src = "pro2.jpg">
			<div class="desc">Sakir Ahmed</br>ID:2016-2-60-086</div>
		</div>
		
	</div>

</body>