<?php session_start();
if(isset($_SESSION["user_name"]))
if($_GET["destroy"]=="yes")
{
unset($_SESSION["user_name"]);
session_destroy();
}

if(!isset($_SESSION["user_name"]) &&
$_GET["user"]!="")
$_SESSION["user_name"] = $_GET["user"];

?>
<html>
<head>
<title>Session Example</title>
</head>
<body>
Welcome <?php echo $_SESSION["user_name"]; ?>
<form action="#">
Input your name here: <input type=text name=user>
<input type=submit value=Submit>
</form>

<form action="#">
<input type=hidden value=yes name=destroy>
<input type=submit value="Destroy Previous Session">
</form>
</body>

</html>