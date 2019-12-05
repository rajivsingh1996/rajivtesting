<!DOCTYPE html>
<html>
<head>
</head>
<body>
<form action=""method="post"> 
Name:<input type="text" name="Name"><br>
</br>

Email:<input type="text" name="Email"><br>
</br>
Password:<input type="password" name="password"><br>
</br>

Gender:<input type="radio" name="Gender" value="male">male
       <input type="radio" name="Gender" value="female">female
       <input type="submit"\>
</form>

<?php
$Name=$_POST['Name'];
$Email=$_POST['Email'];
$Password=$_POST['Password'];
$Gender=$_POST['Gender'];
echo "Name=$Name <br/> 
       Email=$Email <br/>
       password=$password<br/>
       Gender=$Gender<br/>";
?>
</body>
</html>