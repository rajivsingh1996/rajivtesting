<?php
	include "connection.php";
	if(isset($_POST['delpost'])){	
 
		$id=$_POST['id'];
		$query=mysqli_query("delete from welcome where id='$id'") or die(mysqli_error());
	}
?>