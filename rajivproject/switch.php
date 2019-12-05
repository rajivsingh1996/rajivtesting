
<!DOCTYPE html>
<html>
<head>
	<title>switch condititon in php</title>
</head>
<body>
	<?php
$favsub= "php";

switch ($favsub) {
    case "php":
        echo "Your favorite favsub is php";
        break;
    case "html":
        echo "Your favorite favsub is html";
        break;
    case "css":
        echo "Your favorite favsub is css !";
        break;
    default:
        echo "Your favorite favsub is neither php, html, nor css";
}
?>


<?php
$i=1;
echo"<br/>";

switch ($i)
		 
{
		  
case "0":
			
echo "$i equals 0 ";
			
break;
		  
case "1":
			
echo "$i equals 1 ";
			
break;
		  
case "2":
			
echo "$i equals 2 ";
			
break;
		
}

?>

</body>
</html>