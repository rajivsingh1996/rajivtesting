<?php
$student = array(
	array("student_name" =>"rajiv","student_standard" =>"BE","student_mob_no" =>"9785698541","student_address" =>"mumbai<br>"),
		

	array("student_name" =>"rakesh","student_standard" =>"Btc","student_mob_no" =>"97856984585","student_address" =>"malad<br>"),

	
	array("student_name" =>"rohit","student_standard" =>"Bcom","student_mob_no" =>"7896598541","student_address" =>"andheri<br>"),
		
	array("student_name" =>"ritesh","student_standard" =>"btech","student_mob_no" =>"1234568541","student_address" =>"navimumbai"),

);

 //array traversal
// find size of the array
$size = count($student);

// using the for loop
for($i = 0; $i < $size; $i++)
{
    foreach($student[$i] as $key => $value) {
       echo $key . " : " . $value . "\n";
    }
    echo "\n";

}






$students = array(
	array("<br>students_class1" =>"BE6","students_class2" =>"SE2", "students_class3" =>"TE5","students_class4" => "TC8"),

    array("<br>students_dept1" =>"infotech", "students_dept2" =>"coms", "students_dept3" =>"electricl", "students_dept4" => "civil"),
);
//array traversal
// find size of the array
$size = count($students);

// using the for loop
for($i = 0; $i < $size; $i++)
{
    foreach($students[$i] as $key => $value) {
       echo $key . " : " . $value . "\n";
    }
    
echo "\n";
}

foreach ($student as $key => $value) 
{
	echo '<pre>';
	print_r($value);
	foreach ($value as $k => $v) 
	{
	echo $v;
		echo "    ";
		if($k == 3)
	{
		echo "|";
			 // $dept[$v]; 
			//echo $dept[$v];
			var_dump($dept[$v]);
			echo "|";
			//print_r($dept[$v][1]);
		}
		
	}
	echo "<br>";
	//echo $value
	echo "  |  ";
}




?>