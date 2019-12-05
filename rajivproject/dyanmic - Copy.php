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


<?php


$sql = "INSERT INTO mat(id, row, col, value)
VALUES ('1', '0', '0', '1')";
$sql = "INSERT INTO mat(id, row, col, value)
VALUES ('2', '1', '1', '2')";
$sql = "INSERT INTO mat(id, row, col, value)
VALUES ('3', '2', '0', '3')";
$sql = "INSERT INTO mat(id, row, col, value)
VALUES ('4', '3', '1', '4')";




if ($mysqli->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;

}

 /*function build_sql_insert($table, $data) {
    $id = array_id($data);
    $row = array_row($data);
    $col = array_col($data);
    $value = array_value($data);
    $sql = "INSERT INTO mat (" . implode(', ', id) . "  " . implode(', ', row) . "  " . implode(', ', col) . "  " . implode(', ', value) . "  ) "
         . "VALUES ('" . implode("', '", $val) . "'  '" . implode("', '", $val) . "'  '" . implode("', '", $val) . "'  '" . implode("', '", $val) . "')";
 
    return($sql);
}*/

?>

<!-- $sql = "updates matrix SET cols=2 WHERE id=2";

if ($mysqli->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $mysqli->error;
}
$mysqli->closed();
 -->



   <?php
  echo "<pre>";
  print_r($_POST);
  $arra = $_POST['raj'];

   for($row=1; $row <= count($arra); $row++)
   {
   for($col=1; $col <= count($arra[$row]); $col++)
   {
   echo $arra[$row][$col].'<br>';
  }

}
 ?>

    


 
  <!-- 
 <p>Click the button to add a new row at the first position of the table and then add a new cell.</p>
 
  table id="myTable">
  <tr>
    <td>Row1 cell1</td>
    <td>Row1 cell2</td>
    <td>Row1 cell3</td>
    <td>Row1 cell4</td>
  
  </tr>
  <tr>
    <td>Row2 cell1</td>
    <td>Row2 cell2</td>
    <td>Row2 cell3</td>
    <td>Row2 cell4</td>
  </tr> 
  <tr>
    <td>Row3 cell1</td>
    <td>Row3 cell2</td>
    <td>Row3 cell3</td>
    <td>Row3 cell4</td>
  </tr>
  
</table>
<br> 
 -->

<script>
function dyanmic_row_cell(){
   var table = document.getElementById("myTable");
$rows = 4 ; 
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
          
               echo "<td><input type='text' name='raj[$i][$j]'/></td></td>";
            
            }
    echo "</tr>";

}

echo "</table>";
?>

<!-- <form name="form" method="post" action="dyanmic_row_cell"> 
<input type="hidden" name="new" value="1" />
<p><input type="text" name="name" placeholder="Enter Name" required /></p>
<p><input type="text" name="age" placeholder="Enter Age" required /></p>
<p><input name="submit" type="submit" value="Submit" /></p>
</form> -->

         <tr>
          <td>Enter number of Rows</td>
          <td><input type="text" name="row"/></td>
        </tr>
        <tr>
          <td>Enter number of Columns</td>
          <td><input type="text" name="cols"/></td>
        </tr>
        <tr>
          
          <input type="submit" value="Create Table" name="create"/>
          </td>
        </tr>
    </form> 

</body>
</html>
