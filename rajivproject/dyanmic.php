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
//$mysqli->close();
?>
<!-- /*function build_sql_insert($table, $data) {
    $id = array_id($data);
    $row = array_row($data);
    $col = array_col($data);
    $value = array_value($data);
    $sql = "INSERT INTO mat (" . implode(', ', id) . "  " . implode(', ', row) . "  " . implode(', ', col) . "  " . implode(', ', value) . "  ) "
         . "VALUES ('" . implode("', '", $val) . "'  '" . implode("', '", $val) . "'  '" . implode("', '", $val) . "'  '" . implode("', '", $val) . "')";
 
    return($sql);
}*/
   -->
  <?php
 echo "<pre>";
 print_r($_POST);
  $arra = $_POST['raj'];
  if(count($_POST['raj'])> 0)
  {
 foreach ($_POST['raj'] as $key1 => $value1) 
 {    //print_r($value1);
 foreach ($value1 as $k => $v) 
 { // print_r($v);
 $sql = "INSERT INTO mat1 (rows, cols, value) VALUES ('" .$key1 . "' , '" .$k. "' , '" .$v . "' )";  
 $sql =  "UPDATE mat1 SET value = '" .$v . "' WHERE rows = '" .$key1 . "' AND cols = '" .$k. "'  ";
if ($mysqli->query($sql) === TRUE) {   
echo "Record updated successfully";
} else {
echo "Error: " . $sql . "<br>" . $mysqli->error;
}
}
}
}
?>

 <?php
       
 $sql = "UPDATE mat1 SET value='20' WHERE id=16";

if ($mysqli->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $mysqli->error;
} 
//$conn->close();
?>


  <script>
  function dyanmic_row_cell(){
  var table = document.getElementById("myTable");
  $rows = 4; 
  $cols = 4;
  for($i=1;$i<=$rows;$i++){
  var row = table.insertRow(i);
   // echo "<tr>";
  for($j=1;$j<=$cols;$j++)
  {
  var cell = row.insertCell(j);
  // echo "<td>row: ".$i." column: ".$j."</td>";
  }
  }
  }
  </script> 

<form  method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
<?php
$rows = 4; 
$cols = 4;
echo "<table border='1'>";
for($i=1;$i<=$rows;$i++)
{
echo "<tr>";
for($j=1;$j<=$cols;$j++)
{
$sql = "SELECT id, rows, cols, value FROM mat1 where rows='$i' and cols='$j'";
$result = $mysqli->query($sql); 
$row = $result->fetch_assoc();
echo "<td><input type='text' name='raj[$i][$j]' value=".$row['value']." /></td>";    
}
echo "</tr>";
}
echo "</table>";
?>

<tr>        
<input type="submit" value="Create Table" name="create"/>
</td>
</tr>
</form>
</body>
</html>
 <!-- fetch data @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ -- <?php
$sql = "SELECT id, rows, cols, value FROM mat1";
$result = $mysqli->query($sql);
if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {
echo " " . $row["id"]. "  " . $row["rows"]. " " . $row["cols"]. " ". $row["value"]. "<br>";
 }
} else {
 echo "0 results";
}
?>  -->

<!-- display data 111111111111111111111111111111 -->
<!-- <?php
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
?> -->

