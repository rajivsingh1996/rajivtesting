<!DOCTYPE html>
<html>
<head>
<style>
table, td {

  border: 1px solid black;
}
</style>
</head>
<body>
<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "mydb";
$mysqli = new mysqli($servername,$username,$password,$db);

if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
  
} else {
  echo "Connected successfully\n";
}

?>



<?php
$sql = "SELECT id, rows, cols, value FROM mat1";
$result = $mysqli->query($sql);
 
if ($result->num_rows > 0) {

 while($row = $result->fetch_assoc()) {
        echo " " . $row["id"]. "  " . $row["rows"]. " " . $row["cols"]. " ". $row["value"]. "<br>";

    }
} else {
    echo "0 results";
  }

?>


<?php 
$sql = "SELECT id, rows, cols, value FROM mat1";
$result = $mysqli->query($sql);
 
if ($result->num_rows > 0) {
   echo '<table>';
    while($row = $result->fetch_assoc()) 
    {
       echo ' <tr>';
        	echo "<td><input type='text' name='' value='" . $row["id"]. "' ></td></td>";
        	echo "<td><input type='text' name='' value='" . $row["rows"]. "' ></td></td>";
        	echo "<td><input type='text' name='' value='" . $row["cols"]. "' ></td></td>";
        	echo "<td><input type='text' name='' value='" . $row["value"]. "' ></td></td>";
        echo '</tr>';

    }
   echo '</table>';
}

?>





         
    

</body>
</html>
