<?php
session_start();

$connect = mysqli_connect("localhost", "root", "", "company");

if(!$connect){
   die("Could Not Connect:".mysqli_connect_error());
}
else{

   $department=test_input($_POST['department']);
   $message=test_input($_POST['message']);
 
	$sql = "UPDATE department SET messageman ='$message' WHERE dept_name = '$department'";
	if(mysqli_query($connect, $sql))
   	{
   		echo "</br><h1> Message Sent Successfully...</h1>";
         //sheader('location:messageMan.php');
   	}
   	else 
   	{
   		echo "Sorry Message not sent...!!!";
   	}
      mysqli_close($connect);
}

function test_input($data){
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
}

?>
<html>

<body>
<a href="employee.php"><fornt color="red"> </br><h1> << Back to your own page</fornt></a>

</body>
</html>