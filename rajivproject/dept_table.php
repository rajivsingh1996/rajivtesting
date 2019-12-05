<?php
$mysqli = new mysqli("localhost","root","","mydb");
if ($mysqli == false) {
die("ERROR: Could not connect. ".$mysqli->connect_error); 
}

$sql = "INSERT INTO dept_table(dept_id, dept_name, dept_hod_id)
        values('101', 'COMPUTER', '1'),('102', 'IT', '2'),('103', 'ELECTONICS', '3'),('104','DESIGN', '4'),('105', 'DEVELOP', '5'),('106', 'TESTING', '6'),('107', 'SELS' , '7'),('108', 'PLANNING', '8'),('109','CIVIL', '9'),('1001', 'HARDWARE', '10')";               
       if ($mysqli->query($sql) ==  true) 
       { 
      echo "Records inserted successfully."; 
       } 
      else
       { 
    echo "ERROR: Could not able to execute $sql. ".$mysqli->error; 
       }
?>