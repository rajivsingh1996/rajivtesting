<?php
	
$i=1;
	
do
	 
 {
	  
echo "The number is " . $i . "<br>";
	 
 $i++;
	  
}
	
while ($i<=5);
  echo "<br>";
?>



<?php
	
	$tab=$_GET['tab'];
	
    $i=1;
	
    do
	 
 {
	  	
  $t=$tab*$i;
	 	
  echo $t." ";
 	    	
  $i++;

  }
	
  while ($i<=10);		
 
   ?>

  <body>
 	
  <form>
 
  Enter Your table<input type="text" name="tab"><br/>
	  
  <input type="submit" value="Table">
	
  </form>
 
  </body>
 
