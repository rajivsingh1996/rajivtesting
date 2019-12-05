<?php
session_start();
//session_destroy();
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

<html>
<body>
	<h3> Create.php</h3>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
     Fullname:<input type="text" name="Fullname">
     <br></br>
     Username:<input type="text" name="Username">
     <br></br>
     Password:<input type="Password" name="Password">
     <br></br>
    <input type="submit" name="submit"  value="Submit">

</form>
</body>
</html>

<?php
//var_dump($_POST);
if(isset($_POST['submit']))
{
    $sql = "SELECT * FROM welcome WHERE username='".$_POST["Username"]."'limit 1";
	$result = $mysqli->query($sql);
	if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
	//echo " " . $row["id"]. "  " . $row["username"]. " " . $row["password"]. "<br>";
    $_SESSION["sess_id"]       = $row["id"];
    $_SESSION["sess_username"] = $row["Username"];
    $_SESSION["sess_password"] = $row["password"];
	echo "Username already exists";
	  //var_dump($_SESSION);
	     //die();
	   }
	} else {
echo "does not exit";

	$sql = "INSERT INTO welcome (Username, password)
	VALUES ('".$_POST["Username"]."','".$_POST["password"]."')";
	if ($mysqli->query($sql) === TRUE) {
	    echo "New record created successfully";
	      $_SESSION["sess_id"] = $mysqli->insert_id;
		  $_SESSION["sess_username"] = $_POST["Username"];
		  $_SESSION["sess_password"] = $_POST["password"];
		  //var_dump($_SESSION);
       header("location:index.php");
	}
	 else {
	    echo "Error: " . $sql . "<br>" . $mysqli->error;
	}
	    echo "0 results";
   }
 	
}
?>