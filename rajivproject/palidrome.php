<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php

$num = 121;
$i=$num;
$revnum = 0;
while ($num != 0)
{
$revnum = $revnum * 10 + $num % 10;
$num = (int)($num / 10); 
}
 
if($revnum==$i)
{
echo $i," is Palindrome number";
}
else
{
echo $i." is not Palindrome number";
}

?>

</body>
</html>