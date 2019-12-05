<!DOCTYPE html>
<html>
<head>
	<title>Login form ziffytech</title>
</head>
<body>
	<form action="" method="post">
		FName:<input type="text" name="FName"><br>
	</br>
        LName:<input type="text" name="LName"><br>
    </br>
        Email:<input type="text" name="Email"><br>
    </br>
        Password:<input type="Password" name="Password"><br>
    </br>
        
        Phone_NO:<input type="text" name="PHONE NO"><br>
    </br>
        Gender:<input type="radio" name="GENDER" value="male">male
               <input type="radio" name="GENDER" value="female">female
               <input type="submit"<br>
	</form>

	<?php
	$FName=$_POST['FName'];
	$LName=$_POST['LName'];
	$Email=$_POST['Email'];
	$Password=$_POST['Password'];
	$Phone_NO=$_post['PHONE_NO'];
	$Gender=$_POST['Gender'];
   
   echo "FNmae=$FNmae<br/>
          LName=$LName<br/>
          Email=$Email<br/>
          Password=$Password<br/>
          Phone_NO=$Phone_NO<br/> 
          Gender=$Gender<br/>";
?>
</body>
</html>