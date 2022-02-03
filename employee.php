<?php

include('managerprof.php');

$conn=mysqli_connect("localhost","root","","company");

$sql="SELECT * FROM employee";

$result= mysqli_query($conn,$sql);

echo "<center>";

if(mysqli_num_rows($result)>0){
	echo "</br></br></br></br>";
	echo "<table border='1'>";
	echo "<h3>Employee List: </h3></br><tr><th> Employee Name </th>
	      <th>Salary</th>
	      <th>Department Id</th>
	      </tr>";

	      while($row=mysqli_fetch_assoc($result)){
	      	echo "<tr>";
	      	echo "<td>". $row['emp_name']."</td>";
	      	 echo "<td>". $row['sallary']."</td>";
	      	 echo "<td>". $row['dept_id']."</td>";
	      	 echo "</tr>";
	      }

	      echo "</table>";

	      echo "</center>";

	      mysqli_free_result($result);
}
     else{
        echo "No records matching your query were found.";
    }


mysqli_close($conn);
?>
