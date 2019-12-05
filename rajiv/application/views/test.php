
<html>
<head>
<title>Login Page</title>
</head>
<body>
	<h1>Login Application</h1>
	<form action="<?php echo base_url().'Test/login/'; ?>" method="POST">
	<table>
	<tr>
	  <td>User Name:</td><td><input type="text" name="uesr_name"></td>
	</tr>
	<tr>
	  <td> Password:</td><td><input type="password" name="user_password"></td>
	</tr>
	<tr>
	  <td><button type="button">Cancel</button></td>
	  <td><button type="submit">Login</button></td>
	</tr>
	</table>
	</form>
</body>
</html>
