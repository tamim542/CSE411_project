<?php

session_start();
$error = "";

if(isset($_POST['submit'])){
	if(empty($_POST['name']) || empty($_POST['password'])){
		$error = "Username or password invalid";
	}
	else
	{
		$username = $_POST['name'];
		$password = $_POST['password'];
		
		$conn = mysqli_connect("localhost","root","","company");
		
		$sql = "SELECT manager_name, password FROM manager WHERE manager_name='$username' AND password='$password'";
		$query= mysqli_query($conn,$sql);

		$row= mysqli_num_rows($query);
			if ($row == 1){
				echo "login sucessful";
				$_SESSION['user']= $username;
				header('location:managerprof.php');
			} else{
				echo "login failed";
				header('location:managerlogin.php');
			}

		
		mysqli_close($conn);
	}
}



?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" a href="s.css">
</head>
<body>
	<a href="index.php"><h2><front color="red">Back to home page</h2></front></a>
	<div class="container">
		<img src="login2.jpg">
		<form action="#" method="POST">
			<div class="form-input">
				<input type="text" name="name"placeholder="Enter the User Name"/>
			</div>
			<div class="form-input">
				<input type="password" name="password" placeholder="Password">
			</div>
			<input type="submit" name="submit" value="LOGIN" class="btn-login"/>
		</form>
	</div>
</body>
</html>