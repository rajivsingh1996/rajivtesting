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
?>


$sql=mysql_query("select id,row,col,value from mat1")
$i=0;
$dyn_table = '<table border="1">';

	 while ($row=mysqli_fetch_array($sql))
	 {
	 	$id=$row["id"];
	 	$mat1=$row["mat1"];
	 	if($i % 3 ==0)
	 	$dyn_table.='<tr><td>' $mat1'</td>';

	 }
	 else 
	 {
	 	$dyn_table.='<td>' $mat1'</td>';

	 }
	 $i++;
	}
	$dyn_table='</tr><table>';

		?>
		<html>
		<body>
			<h3>dyn_table</h3>
			<?php echo $dyn_table; ?>
		</body>
		</html>