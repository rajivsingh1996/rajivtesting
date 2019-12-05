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

<?php
/*@@@@@@@@@@@ database values divide by offset and result@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
*/    $connection = mysqli_connect("localhost", "root", "","mydb");                                              
    if (mysqli_connect_errno()) 
    { 
    echo "Database connection failed."; 
    }   
    $sql = "select welcome.* ,country.country_name, state.state_name, city.city_name from welcome
    join country on country.country_id = welcome.country_id
    join state on state.state_id = welcome.state_id
    join city on city.city_id   = welcome.city_id";

    $result = mysqli_query($connection, $sql);
    if ($result)
    $total_rows = mysqli_num_rows($result); 
    echo 'Total rows - '.$total_rows 	=$total_rows;
    //$offset = mysqli_num_rows($result);
    echo '<br> Offset - '.$offset =	5;
    $pages_count    = ($total_rows/$offset);
    $pages = ceil($pages_count);
    echo '<br> Total Pages creates - '.ceil($pages);
    $str = '';
    for($i = 1; $i <= $pages; $i++){
	  $str 	.=	'<a href="index.php?pages='.$i.'">'.$i.'</a>&nbsp&nbsp&nbsp&nbsp';
    }
    echo '<br>';
    echo $str;
?> 
<html>
<body>

	<h1>USING LIMIT DISPLAY DATA IN DATABASE <h1>
<?php
$link = mysqli_connect("localhost", "root", "", "Mydb"); 
if ($link ==false) { 
die("ERROR: Could not connect. ".mysqli_connect_error()); 
} 
 
$limit = 0;
if(isset($_GET['pages'])){ 
	$page  =	$_GET['pages'];
	$limit =  	($page * $offset) - $offset;
}
$sql = "select welcome.* ,country.country_name, state.state_name, city.city_name from welcome
 join country on country.country_id = welcome.country_id
 join state on state.state_id = welcome.state_id
 join city on city.city_id   = welcome.city_id LIMIT $limit,$offset"; 
 if ($res = mysqli_query($link, $sql)) { 
 if (mysqli_num_rows($res) > 0) { 

        echo "<table>"; 
        echo "<tr>"; 
        echo "<th>Username</th>"; 
        echo "<th>password</th>"; 
        echo "<th>Fullname</th>"; 
        echo "<th>Contact</th>"; 
        echo "<th>address</th>"; 
        echo "<th>gmail</th>";
        echo "<th>pic</th>"; 
        echo "<th>country_name</th>";
        echo "<th>state_name</th>";
        echo "<th>city_name</th>";
        echo "<th>delete</th>";
        echo "</tr>"; 
        while ($row = mysqli_fetch_array($res)) {
            echo "<tr>"; 
            echo "<td>".$row['Username']."</td>"; 
            echo "<td>".$row['password']."</td>"; 
            echo "<td>".$row['Fullname']."</td>"; 
            echo "<td>".$row['Contact']."</td>"; 
            echo "<td>".$row['address']."</td>"; 
            echo "<td>".$row['gmail']."</td>";
            echo "<td>".$row['pic']."</td>"; 
            echo "<td>".@$row['country_name']."</td>";
            echo "<td>".@$row['state_name']."</td>"; 
            echo "<td>".@$row['city_name']."</td>";
            echo "<td><a href='#' onclick='deleteUser(".$row['id'].")'> delete</a></td>";
            echo "</tr>"; 
        } 
        echo "</table>"; 
        mysqli_free_result($res); 
      } else { 
echo "No matching records are found."; 
}
} else { 
echo "ERROR: Could not able to execute $sql. ".mysqli_error($link); 
} 
?>
<?php
$link = mysqli_connect("localhost", "root", "", "Mydb");
if ($link ==false) { 
die("ERROR: Could not connect. ".mysqli_connect_error()); 
} 
?>
</body>
</html>

<!-- ///////////////////////////////////////////////////////print all value in database -->

<html>
<head>
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
</style>
</head>
<body>

<h2>DATABASE DATA IN TABLE FORM</h2>

<table style="width:100%; display: none;">
  <tr>
    <th>id</th>
    <th>Username</th> 
    <th>Fullname</th>
    <th>Contact</th> 
    <th>address</th>
    <th>gmail</th> 
    <th>pic</th>
  </tr>
  <tr>
    <td>1</td>
    <td>abhi@570</td>
    <td>abhijeet</td>
    <td>7896325410</td>
    <td>mumbai</td>
     <td>abhi@ziffy.com</td>
    <td>matrix-4213547__340</td>
  </tr>
  <tr>
    <td>3</td>
    <td>ppppppppp</td>
    <td>ppppppppppppppppp</td>
    <td>7896541230</td>
    <td>kharadi</td>
     <td>rahul@gmail.com</td>
    <td>joshua-rawson-harris-CbJNR7D2FK8-unsplash</td>
  </tr>
 
  <tr>
  	<td>4</td>
    <td>prashant1111</td>
    <td>prashant</td>
    <td>7896541230</td>
    <td>delhi</td>
     <td>prashant@ziffytech.com</td>
    <td>NA</td>
    
  </tr>
  <tr>
  	<td>5</td>
    <td>prashant1111</td>
    <td>prashant</td>
    <td>7896541230</td>
    <td>delhi</td>
     <td>prashant@ziffytech.com</td>
    <td>NA</td>
    
  </tr>
   <tr>
  	<td>6</td>
    <td>newwwwwww</td>
    <td>news4040</td>
    <td>7896541236</td>
    <td>bbbbbbbbbbbbbbbb</td>
     <td>news24*7@gmail.com</td>
    <td>3.jpg</td>
</tr>
<tr>
  	<td>7</td>
    <td>AAAAAAAAAAAAA</td>
    <td>tttttttttt</td>
    <td>7854120369</td>
    <td>kharadi</td>
     <td>shushant@ziffy.com</td>
    <td>NA</td>
</tr>
<tr>
  	<td>8</td>
    <td>quick work</td>
    <td>998877</td>
    <td>1020605030</td>
    <td>kolaba mumbai</td>
     <td>quickwork@gmil.com</td>
    <td>1.jpg</td>
</tr>
</table>
</body>
</html>


<html>
<body>
<h1>index.php</h1>
<!--  <form action="welcome.php" method="post"> -->
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
username: <input type="text" name="username">
<br></br>
password: <input type="password" name="password">
<br><br>
<input type="submit" name="submit"  value="Submit">
</form>
</body>
</html>

<?php
//var_dump($_SESSION);
ob_start();
if(isset($_POST['submit']))
{
echo $sql = "SELECT id, username, password FROM welcome WHERE username= '".$_POST["username"]."'";
$result = $mysqli->query($sql);
  	// echo $result->num_rows;die();
  	if ($result->num_rows > 0) {
  	 while($row = $result->fetch_assoc()) {
     echo " " . $row["id"]. "  " . $row["username"]. " " . $row["password"]. "<br>";
  	  $_SESSION["sess_id"]       = $row["id"];
  	  $_SESSION["sess_username"] = $row["username"];
  	  $_SESSION["sess_password"] = $row["password"];
  	  var_dump($_SESSION);
  	     //die();
	    }
	} else {

  	$sql = "INSERT INTO welcome (username, password)
  	VALUES ('".$_POST["username"]."','".$_POST["password"]."')";
  	if ($mysqli->query($sql) === TRUE) {
  	    echo "New record created successfully";
  	    $_SESSION["sess_id"] = $mysqli->insert_id;
  		  $_SESSION["sess_username"] = $_POST["username"];
  		  $_SESSION["sess_password"] = $_POST["password"];
  		  var_dump($_SESSION);
  	} else {
  echo "Error: " . $sql . "<br>" . $mysqli->error;
  	}
   echo "0 results";
  	  }

  header("location:welcome.php");
  }  

?>

<br/><br/><br/><br/><br/>
<!--  
<?php
$sql = "SELECT id, username, password FROM welcome";
//$sql = "SELECT id, username, password FROM welcome WHERE username= '".$_POST["username"]."'";
$result = $mysqli->query($sql);
// echo $result->num_rows;die();
if ($result->num_rows > 0) {

 while($row = $result->fetch_assoc()) {
         echo " 2" . $row["id"]. "  " . $row["username"]. "  " . $row["password"]. "<br>";

    }
} else {


    echo "0 results";
  }
?> 

</body>
</html>
 -->
<!--  ADD DELETE BUTTON IN LAST COLUMN WITH AJAX CALL@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 <script type="text/javascript">
   function deleteUser(user_id){
    $.ajax({
      type:"POST",
      url:"ajax.php",
     data:{'action':'user','userid':user_id},
      success:function(data) {
        alert('are you sure want to delete?');
     location.reload();
   }
 })
   }

 </script>

 