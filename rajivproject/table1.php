<?php 
 $mysqli = new mysqli("localhost", "root", "", "mydb"); 
  
if ($mysqli ==  false) { 
    die("ERROR: Could not connect. ".$mysqli->connect_error); 
} 


$sql = "INSERT INTO students (id, name, class, age, phone_no, gmail) 
              VALUES('110','ram', 'singh', '25','8523697410','ram@gmail.com') "; 
              $sql = "INSERT INTO students (id, name, class, age, phone_no, gmail) 
              VALUES('111','aaa', 'singh', '25','8523697412','aaa@gmail.com') ";
    if ($mysqli->query($sql) ==  true) 
{ 
    echo "Records inserted successfully."; 
} 
else
{ 
    echo "ERROR: Could not able to execute $sql. "
           .$mysqli->error; 

   
 
 $sql = "UPDATE students SET gmail='ritesh11@gmail.com' WHERE id=102"; 
if($mysqli->query($sql) === true){ 
    echo "Records was updated successfully."; 
} else{ 
    echo "ERROR: Could not able to execute $sql. " . $mysqli->error; 
} 


 $sql = "delete from students where id=111"; 
if($mysqli->query($sql) === true){ 
    echo "Records was updated successfully."; 
} else{ 
    echo "ERROR: Could not able to execute $sql. "  . $mysqli->error; 
} 

//$mysqli->close(); 
?> 
