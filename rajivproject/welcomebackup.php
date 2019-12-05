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
//$sql = SELECT * FROM welcome WHERE username='raju123';
$sql = "SELECT id, username, password FROM welcome WHERE username= '".$_POST["username"]."'";
$result = $mysqli->query($sql);
// echo $result->num_rows;die();
if ($result->num_rows > 0) {

 while($row = $result->fetch_assoc()) {
        echo " " . $row["id"]. "  " . $row["username"]. " " . $row["password"]. " ".  "<br>";

    }
} else {

$sql = "INSERT INTO welcome (username, password)
VALUES ('".$_POST["username"]."','".$_POST["password"]."')";

if ($mysqli->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $mysqli->error;
}
    echo "0 results";
  }
?>

<!-- 
insert vakue,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,
$sql = "INSERT INTO welcome (username, password)
VALUES ('".$_POST["username"]."','".$_POST["password"]."')";
if ($mysqli->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    //echo "Error: " . $sql . "<br>" . $mysqli->error;
}
echo "0 results";
  }
 -->

<html>
<body>

<h2>welcome.php</h2>
username:<?php echo $_POST["username"];?> <br />
password:<?php echo $_POST["password"]; ?>



</body>
</html>
