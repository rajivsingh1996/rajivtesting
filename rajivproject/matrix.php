
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
 <?php    
$row = Array();
$col = Array();

for($i=0;$i<4;$i++)
{
    for($j=0; $j<4; $j++)
    {
            echo $i.$j;
        echo " ";
        
    }
    echo '<br/>';
}

$servername = "localhost";
$username = "root";
$password = "";
$db = "mydb";
echo "$db";
exit();
$mysqli = new mysqli($servername,$username,$password,$db);

if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
   // exit();
} else {
    echo "Connected successfully";
}



//$conn = mysqli_connect($servername,$username,$password,$db);

?>
</body>
</html>