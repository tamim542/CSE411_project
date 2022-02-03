<?php

session_start();
$nameErr = $pErr = "" ;

if(isset($_POST['submit'])){


	if(empty($_POST['username'])){
		$nameErr="required";
	}else{
		$username= $_POST['username'];
		if(!preg_match("/^[a-zA-Z]*$/", $username)){
			$nameErr="only letters and white space are allowed";
		}
	}

	if(empty($_POST['password'])){
		$pErr="required";
	}else{
		$password = $_POST['password'];
	}

		
		$conn = mysqli_connect("localhost","root","","company");
		
		$sql = "SELECT username, password FROM admin WHERE username='$username' AND password='$password'";
		$query= mysqli_query($conn,$sql);

		$row= mysqli_num_rows($query);
			if ($row == 1){
				echo "login sucessful";
				$_SESSION['user']= $username;
				header('location:adminprof.php');
			} else{
				echo "login failed";
				header('location:adminlogin.php');
			}

			mysqli_close($conn);
}



?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" a href="s.css">
	<style>
         .error {color: #fff;}
      </style>
</head>
<body>
	<a href="index.php"><h2><front color="red">Back to home page</h2></front></a>
	<div class="container">
		<img src="login2.jpg">
		<form action="#" method="POST">
			<div class="form-input">
				<input type="text" name="username"placeholder="User Name"/>
				<span class = "error">* <?php echo $nameErr;?></span>
			</div>
			<div lass="form-input">
				<input type="password" name="password" placeholder="Password">
				<span class = "error">* <?php echo $pErr;?></span>
			</div>
			<input type="submit" name="submit" value="LOGIN" class="btn-login"/>
		</form>
		<div><a href="index.php">Back to home page</a></div>
	</div>
</body>
</html>


</div>
</center>
</body>
</html>
