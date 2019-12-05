<html>
<head>
 <style>
body
 {
  background-color: hsla(89, 43%, 51%, 0.3);
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
?> 

$sql="insert into producttable(product name, product price, product action)
values('p1', '100', 'view    edit   delete' )";
if ($mysqli->query($sql)===true)
{
  echo "record created successfully";
}
else{
  echo "error: " . $sql . "<br>" . $mysqli->error;
} 

<?php
$name = $price = $img = $desc = $in_stock = $color  = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $price = test_input($_POST["price"]);
  $img = test_input($_POST["img"]);
  $desc = test_input($_POST["desc"]);
  $in_stockebsite = test_input($_POST["in_stock"]);
  $color = test_input($_POST["color"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;

}
?>

<h2 style="background-color:#ff6347;">  product  Form</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name:<input type="text" name="name">
  <br><br>
  price: <input type="text" name="price">
  <br><br>
  img: <input type="textarea" name="img">
  <br><br>
  in_stock: <input type="radio" name="in_stock">
  <br></br>
  color: <input type="text" name="color">
  <br><br>
  <input type="submit"name="submit" value="Submit">

</form>

<?php
echo $name;
echo "<br>";
echo $price;
echo "<br>";
echo $img;
echo "<br>";
echo $in_stock;
echo "<br>";
echo $color;
echo "<br>";
?>

</body>
</html>