
<?php

include('managerprof.php');

$conn=mysqli_connect("localhost","root","","company");
echo "<center>";

$sql="SELECT * FROM department";

$result= mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0){
	echo "</br></br></br></br>";
	echo "<table border='1'>";
	echo "<h3>Department List: </h3></br><tr><th>Department Id</th>
	      <th>Department Name</th>
	      </tr>";

	      while($row=mysqli_fetch_assoc($result)){
	      	echo "<tr>";
	      	echo "<td>". $row['dept_id']."</td>";
	      	 echo "<td>". $row['dept_name']."</td>";
	      	 echo "</tr>";
	      }

	      echo "</table>";

	      mysqli_free_result($result);
}
     else{
        echo "No records matching your query were found.";
    }

// Close connection
mysqli_close($conn);
?>
