<html>
<head>
	<title>Student Login Page</title>
</head>
<h1> Login Page </h1>
<body>
    <form action="<?php echo base_url().'Student_Control/login'; ?>" method="post">
      Student_Name:<input type="text" name="student_name">
      <br></br>
      Student_Password:<input type="password" name="student_pass">
      <br></br>
      <button type="submit"> Submit </button>
      <button type="cancel"> Cencel </button>
  </form>
</body>
</html>
<html>
 
