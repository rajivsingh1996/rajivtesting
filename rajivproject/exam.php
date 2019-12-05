<?php
	
	$day=$_POST['day'];

if($day==1)
	 
{
	   
echo "Monday";	
	 
}
	
else if($day==2)
	
{
	   
echo "tuesday";
	
} 
	
else if($day==3)
	
{
	   
echo "wednesday";
	
}
	
else if($day==4)
	
{
	   
echo "Thursday";
	
}
	
else if($day==5)
	
{
	   
echo "friday";
	
}
	
else if($day==6)
	
{
	   
echo "Saturday";
	
}
	
else if($day==7)
	
{
	   
echo "Sunday";
	
}
	
else
	
{
		
echo "Wrong choice";
	
}

?>
	
<body>
	
<form method="post">
	   
Enter Your number<input type="text" name="day"/><hr/>
	    
<input type="submit"/>
	
</form>

</body>