<!DOCTYPE html>
<html>
<head>
	<title>Login From</title>
</head>
<body>
	<h1>Login Application </h1>
	<form action="<?php echo base_url().'Control/login'; ?>" method="post">
	  Employee_Name:<input type="text" name="emp_name">
		<br></br>
	  Employee_Registerno:<input type="text" name="emp_regno">
	  <br></br>
	<button type="Submit"> Submit </button>
	<button type="Cancel"> Cancel</button>
</form>
</body>
</html>