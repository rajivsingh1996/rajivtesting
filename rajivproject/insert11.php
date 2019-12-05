<html>

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
//$mysqli->close();

 

$sql="INSERT INTO nametable (username, password)

VALUES
('$_POST[username]','$_POST[password]')";
if ($mysqli->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $mysqli->error;
}

?>


</body>

</html>

 

 

