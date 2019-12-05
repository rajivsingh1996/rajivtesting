<!DOCTYPE html>
<html>

<body>
<?php
$emp_details=array(
array("emp_no" =>1001, "emp_name" =>'A', "emp_mob_no" =>9, "dept_id" =>1),
array("emp_no" =>1002, "name" =>'B', "mob_no" =>8, "dept_id" =>2),
array("emp_no" =>1003, "name" => 'C', "mob_no" =>9, "dept_id" =>3),
array("emp_no" =>2001, "name" =>'D', "mob_no" =>0, "dept_id" =>1),
array("emp_no" =>2003, "name" =>'E', "mob_no" =>5, "dept_id" =>2)
);

$dept = array(
 array("dept_id" =>1, "name"=>'it'),
  array("dept_id" =>2, "name"=>'account'),
  array("dept_id" =>3, "name"=>'hr')
);

// $emp_details = array("emp_no","emp_name","emp_mob_no","dept_id");
// foreach($emp_details as $value) {
  // echo $value;

?>


<?php
 //$emp_details = array
//   (
//   array("emp_no", "1001", "1002", "1003", "2001", "2003"),
//   array("emp_name", "A", "B", "C", "D", "E"),
//   array("emp_mob_no", "9", "8", "9", "0", "5"),
  //array("dept_id", "1", "2", "3", "1", "2")
//);

$emp_details = array
  (
    array("emp_no", "emp_name", "emp_mob_no", "dept_id"),
	array("1001", "A", 9, 1),
	array("1002", "B", 8, 2),
	array("1003", "C", 9, 3),
	array("2001", "D", 0, 1), 
	array("2003", "E", 5, 2)

);
$emp_details_size =count($emp_details);
echo "Number employees: ".$emp_details_size;
echo "<br/>Employee Details:<br/>";
for ($i=0; $i < $emp_details_size; $i++) { 
	echo "<br/>";

	$single_employee_details = $emp_details[$i];

	$single_employee_details_size = count($single_employee_details);
	
	// echo "Employee ".$i." Array Details Columns: ".$single_employee_details_size;
	for ($j=0; $j < $single_employee_details_size; $j++) { 
		# code...
		
		echo "".$single_employee_details[$j];
		
		echo "  |  ";
	}
	
	}
		
	





// Department

$dept = array(
	array("dept_id", "name"),
 	array(1, 'it'),
  	array(2, 'account'),
  	array(3, 'hr')
);

$dept_details_size = count($dept);
echo "<br/>Number Department: ".$dept_details_size;
echo "<br> Department Details:<br/>";
for ($i=0;  $i < $emp_details_size ; $i++) { 
	
	echo "<br>";
	@$single_dept_details = $dept[$i];

	@$single_dept_details_size = count($single_dept_details);

	for ($j=0; $j <$single_dept_details_size ; $j++) { 

       echo "".$single_dept_details[$j];
       echo "  |  ";

	
	}
}

foreach ($emp_details as $key => $value) 
{
	//echo '<pre>';
	///print_r($value);
	foreach ($value as $k => $v) 
	{
		echo $v;
		echo "    ";
		if($k == 3)
		{
			echo "|";
			  //$dept[$v]; 
			echo $dept[$v][1];
			//var_dump($dept[$v]);
			echo "|";
			//print_r($dept[$v][1]);
		}
		
	}
	echo "<br>";
	//echo $value
	echo "  |  ";
}






/*$Final_table = array();

echo "<br/> Final_table number: ".$Final_table_size;
echo "<br> Final_table Details:<br/>";
$Final_table = array("emp_no", "emp_name","emp_mob_no","dept_id");
echo "<br/>";
array_push($Final_table, "1001", "A","9","1", "1002", "B","8","2", "1003", "C","9","3", "2001", "D","0","1", "2003", "E","5","2");

print_r($Final_table);
*/

if ($emp_dept_id == $dept_id) 
{
  echo "1 = it<br>";
  echo "2 = account<br>";
  echo "3 = hr<br>";
  echo "4 = it<br>";
  echo "5 = account";
}

/*$emp_details = array
  (
    array("emp_no", "emp_name", "emp_mob_no", "dept_id"),
	array("1001", "A", 9, 1),
	array("1002", "B", 8, 2),
	array("1003", "C", 9, 3),
	array("2001", "D", 0, 1), 
	array("2003", "E", 5, 2)

);*/
/*echo "-------------------------------------------------------<br>";
foreach ($emp_details as $key => $value) 
{
	//echo '<pre>';
	///print_r($value);
	foreach ($value as $k => $v) 
	{
		echo $v;
		echo "    ";
		if($k == 3)
		{
			 // $dept[$v]; 
			echo $dept[$v][1];
			//print_r($dept[$v][1]);
		}
		
	}
	echo "<br>";
	//echo $value
}
*/

/*for ($i=0; $i <$emp_details_size; $i++) { 
     echo "<br>";

    $single_employee_details = $emp_details[$i];

   $single_employee_details_size = count($single_employee_details);

     for ($j=0; $j < $single_employee_details_size ; $j++) { 

     	echo "".$single_employee_details[$j];
     	echo "  |  ";
     	}

     }*/



	

//   for ($row = 0; $row < 6; $row++) {
//   //echo $row;
  
//   for ($col = 0; $col < 4; $col++) {
//     echo $emp_details[$row][$col]." " ;
//   }
  
// }
/*$no_of_details=count($emp_details[$i]);
for ($j=0; $j<cols ; $j++) 
{
	echo $no_of_details;
	echo "<br>";
*/

//array_reverse(array)...................................................
 /* $no_of_emp = count($emp_details); 
  	for($i=$no_of_emp; $i >= 0; $i--)
  {

 echo $no_of_emp;
  echo "<br>"; 

  $no_of_details = count($emp_details[$i]);
  	for($j=$no_of_details;$j >= 0;$j--)


   {
   echo $no_of_details; 
   echo " | ";
  	echo @$emp_details[$i][$j];
  }

  }


  $no_of_emp = count($emp_details);
  for ($i=0; $i <$no_of_emp ; $i++)
   {
   echo $no_of_emp;
   echo "<br>"; 
 
  }*/

//$emp_details_lenght = count($emp_details);

//multidimentional array!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
/*$no_of_emp = count($emp_details);
for ($i=0; $i <$no_of_emp; $i++)
 {
 	echo $no_of_emp;
 	echo "<br>";

echo "<br>";
$no_of_details=count($emp_details[$i]);
for ($j=0; $j <$no_of_details ; $j++) 
{ 

echo $no_of_details;
echo "  |   ";
echo $emp_details[$i][$j];
}
}*/

//for ($i=0; $i <$emp_details_lenght; $i++){

	
//for ($j=0; $j <$emp_details_lenght; $j++) { 

	//echo $emp_details[$i][$j]." ";
 
?>


</body>
</html>