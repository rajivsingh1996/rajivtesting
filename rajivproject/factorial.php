<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
$num = 4;
$factorial = 1;
for ($x=$num; $x>=1; $x--)
{
$factorial = $factorial * $x;
}
echo " $num is $factorial";

?>
</body>
</html>