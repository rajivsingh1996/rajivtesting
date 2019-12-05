<?php
include ("connectionfile.php");
?>
<html>
<head>
	<title>Dyanmic dropdown list</title>
</head>
<brdy>
<form id="form1" name="form1" method="post" action="<?php $_SERVER['PHP_SELF']?>">
city Name:
<?php
if(isset($select)&&$select!=""){
$select=$_POST['NEW'];

}
?>
<?php
$sql = "select city_id from city";
$result =$mysqli->query($sql);
 echo "<select name ='city_id'>";

while ($row =$result->fetch_assoc()) {  
echo "<option value ='" . $row['city_id'] ."'>".$row['city_id']."</option>";
}
echo "</select>";
?>
<?php
$sql = "SELECT country_name FROM country";
$result = $mysqli->query($sql);
 
echo "<select name='country_name'>";
while ($row = $result->fetch_assoc()) {  
    echo "<option value='" . $row['country_name'] ."'>".$row['country_name']."</option>";
}
echo "</select>";
?>
</form>
</body>
</html>