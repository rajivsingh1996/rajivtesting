
<html>

<body>
	<h1>index.php</h1>
<form action="" method="post">
username: <input type="text" name="username">
<br></br>
password: <input type="password" name="password">
<br><br>
 <input type="submit" name="submit" value="Submit">  
</form>
</body>
</html>



<html>
<body>
	<h2>welcome.php</h2>
username <?php echo $_POST["username"];?>
  <br />
password:<?php echo $_POST["password"];?>
</body>
</html>


