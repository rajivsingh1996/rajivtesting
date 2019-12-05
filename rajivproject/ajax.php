<?php

session_start();
 $servername = "localhost";
$username = "root";
$password = "";
$db = "mydb";
$mysqli = new mysqli($servername,$username,$password,$db);
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
  
} else {
  //echo "Connected successfully\n";
}

if(isset($_POST['action']) && $_POST['action'] !=''){
	$action     =   $_POST['action'];
		if($action == 'getContry'){
		 $result     =   array();
		// Fetch all the country data 
		$query = "SELECT * FROM country ORDER BY country_name ASC"; 
		$res   = $mysqli->query($query);
		while ($row =$res->fetch_assoc()) { 
		array_push($result, $row);
		 }
		echo json_encode( $result);
		}

		if($action == 'getState'){
		$result    =  array();
		$countryId =  $_POST['countryId']; 
		$query = "SELECT * FROM state where country_id =$countryId ORDER BY state_name ASC"; 
		$res   = $mysqli->query($query);
		while ($row =$res->fetch_assoc()) { 
		array_push($result, $row);
		}
		echo json_encode( $result);
		}
	    
		if($action == 'getcity'){
		$result    =  array();
		$stateId   =  $_POST['stateId']; 
		$query     = "SELECT * FROM city where state_id =$stateId ORDER BY city_name ASC"; 
		$res       = $mysqli->query($query);
		while ($row =$res->fetch_assoc()) { 
		array_push($result, $row);
		}
		echo json_encode( $result);
		}

		if($action=='user'){
	    $userid = $_POST['userid'];
	    $query = "delete from welcome where id = $userid";
	    $res   = $mysqli->query($query);

		}
}   


?>
