<?php 
 $mysqli = new mysqli("localhost", "root", "", "mydb"); 
  
if ($mysqli ==  false) { 
    die("ERROR: Could not connect. ".$mysqli->connect_error); 
}
$sql = "INSERT INTO emp_table (emp_id, emp_name, emp_gender, emp_mobile_no, emp_address,emp_salary,emp_date_of_joining,emp_dept_id) 
        VALUES('5','ANIKET', '1MALE', '8521336974','NAYGAV','60000','1/1/2019','501'),('6','RAJIV', '1MALE', '9702649454','MUMBAI','28000','4/9/2019','601'),('7','TABASSUM', '2FEMALE', '7897412563','VNS','41000','5/8/2018','701'),('8','SONI', '2FEMALE', '8546978512','KANPUR','26000','6/8/2017','801'),('9','KOMAL', '2FEMALE', '8796001200','LUCKNOW','5000','25/07/2019','901'),('10','KAMLESH', '1MALE', '8457963512','GUJRAT','21000','13/05/2019','1001')"; 
              
    if ($mysqli->query($sql) ==  true) 
{ 
    echo "Records inserted successfully."; 
} 
else
{ 
    echo "ERROR: Could not able to execute $sql. "
           .$mysqli->error; 
 }
 ?>