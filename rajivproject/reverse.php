<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php

$number = 12345;
$Reverse = 0;
while ($number !=0)
{
$Reverse = $Reverse *10+ $number % 10;
$number = (int)($number / 10); 
}
 
 echo "number of 12345: $Reverse";

?>
</body>
</html>