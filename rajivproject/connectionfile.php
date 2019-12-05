<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "rajivdb";
$mysqli = new mysqli($servername,$username,$password,$db);

if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
  
} else {
  //echo "Connected successfully\n";
}

?>