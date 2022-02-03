<?php

include('employeeprof.php');


$conn=mysqli_connect("localhost","root","","company");
echo "<center>";

$sql="SELECT * FROM customer";

$result= mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0){
	echo "</br>";
	echo "<h1>Customer list: </h1>";
	echo "</br>";
	echo "<table border='1'>";
	echo "<tr><th>Customer Id</th>
	      <th>Customer Name</th>
	      <th>Addess</th>
	      <th>Postal Code </th>
	      <th>Country</th>
	      </tr>";

	      while($row=mysqli_fetch_assoc($result)){
	      	echo "<tr>";
	      	echo "<td>". $row['cust_id']."</td>";
	      	 echo "<td>". $row['cust_name']."</td>";
	      	 echo "<td>". $row['address']."</td>";
	      	 echo "<td>". $row['postal_code']."</td>";
	      	 echo "<td>". $row['Country']."</td>";
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