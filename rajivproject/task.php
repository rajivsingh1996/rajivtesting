<!DOCTYPE html>
<html>
<head>
	<title>
	</title>
</head>
<body>
 <caption> table matrix </caption>

 <form method="post">
			<table border="4">
				<tr>
				<td>Enter number of Rows</td>
					<td><input type="text" name="r"/></td>
				</tr>
				<tr>
					<td>Enter number of Columns</td>
					<td><input type="text" name="c"/></td>
				</tr>
				<tr>
					<td colspan="2" align="center">
					<button> save </button>
					</td
                 </tr>

                 </form>



 	<!-- <tr>
 		<td> 1 </td>
 		<td> 0  </td>
 		<td> 0 </td>
 		<td> 1 </td>
 	</tr> -->



 	 <!-- <tr>
 		<td> 2 </td>
 		<td> 1 </td>
 		<td> 1</td>
 		<td> 2</td>
 	</tr>

    <tr>
    	<td> 3 </td>
    	<td> 2 </td>
    	<td> 0 </td>
    	<td> 3 </td>
    </tr>

    <tr>
    	<td> 4 </td>
    	<td> 3 </td>
    	<td> 1 </td>
    	<td> 4 </td>

    </tr> 	
 </table><br> -->
 <!-- <button> save </button> -->
 
<?php
$row=array();
$col=array();
for ($i=0; $i<$row ; $i++) 
{
for ($j=1; $j<$col ; $j++)
 { 
echo "<td>row".$i."col".$j."</td>";
 }
 echo "</tr>"; 
}
?>
</body>
</html>