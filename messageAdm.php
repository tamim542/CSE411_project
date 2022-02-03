
<html>
   <head>
      <style>
        .header{
          background-color: #1ebbd7;
          color:red;
          height:100px;
          }

          a{
            text-decoration: none;
            color:#C70039;
            font-size:30px;
            text-align:left;
          }



        .container{
          border:2px solid black;
          width:500px;
          margin:2rem auto;
          padding:2rem;

        }

         .error {color: #FF0000;}
      </style>
   </head>
<body>

  <div class="header">
    <marquee behavior="scroll" direction="left"><h1>Message from Manager.</h1></marquee>
    
  </div>
  <a href="adminprof.php"><< Back to previous page</a>
</p>
</form>
</div>
</center>
</body>
</html>


<?php
session_start();


$conn=mysqli_connect("localhost","root","","company");
echo "<center>";

$sql="SELECT * FROM department WHERE dept_id='1'";

$result= mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0){
  echo "</br></br></br></br>";
  echo "<table border='1'>";
  echo "<h2>Message List: </h2></br><tr><th><h3>Department Id</h3></th>
        <th><h3>Department Name</th></h3>
         <th><h3>Department Message</th></h3>
        </tr>";

        while($row=mysqli_fetch_assoc($result)){
          echo "<tr>";
          echo "<td><h3>". $row['dept_id']."</h3></td></h3>";
           echo "<td><h3>". $row['dept_name']."</td></h3>";
           echo "<td><h3>". $row['messageman']."</td></h3>";
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
