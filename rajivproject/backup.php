<?php
session_start();
//session_destroy();
 $servername = "localhost";
$username = "root";
$password = "";
$db = "mydb";
$mysqli = new mysqli($servername,$username,$password,$db);
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
  
} else {
  //echo "Connected successfully\n";
}
?>

<html>
<head>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>
<h1>welcome.php</h1>

<?php
//var_dump($_SESSION); 
if(isset($_POST['btnSubmit']))
{
$sql ="UPDATE welcome SET Fullname='".$_POST['Fullname']."', Contact = '".$_POST['contact']."', address='".$_POST['address']."', gmail='".$_POST['gmail']."', pic='".$_POST['pic']."',country_id ='".$_POST['country_id']."',state_id ='".$_POST['state_id']."',city_id ='".$_POST['city_id']."'WHERE id= ".$_SESSION["sess_id"];
if ($mysqli->query($sql) === TRUE) {
echo "Record updated successfully";
}else{
echo "Error updating record: " . $mysqli->error;
}
}

//print_r($_SESSION);
$Full_name = '';
$Contact   = '';
$Address   = '';
$Gmail     = '';
$id        = '';
$Pic       = '';
$Country_id= '';
$State_id  = '';
$City_id   = '';

@$sql = "SELECT * FROM welcome WHERE id= '".$_SESSION["sess_id"]."'";
$result = $mysqli->query($sql);
@ $sql = "UPDATE welcome SET pic='' WHERE id= '".$_SESSION["sess_id"]."'";
if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {
//print_r($row['country_id']);
//echo "  " . $row["Fullname"]. " " . $row["contact"]. "<br>";
$full_name 	=	@$row["Fullname"];
$contact	=	@$row["Contact"];
$address   	=	@$row["address"];
$gmail	    =	@$row["gmail"];
$id     	=	@$row["id"];
$pic        =   @$row["pic"];
$country_id =   @$row["country_id"];
$state_id   =   @$row["state_ID"];
$city_id    =   @$row["city_ID"];
            
}
}
$sql = "DELETE FROM welcome WHERE id=8";
if ($mysqli->query($sql) === TRUE) {
echo "Record deleted successfully";
} else {
echo "Error deleting record: " . $mysqli->error;
}
echo "<a href='index.php'>Logout</a>";
?>
<form method="post" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<!-- <p>Welcome, <?php echo $_SESSION["sess_username"]; ?></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> -->

Fullname:<input type="text" name="Fullname" value="<?php echo $full_name; ?>">
<br></br>
contact: <input type="text" name="contact" value="<?php echo $contact; ?>">
<br></br>
address:<input type="text" name="address" value="<?php echo $address; ?>">
<br></br>
gmail:<input type="text" name="gmail"  value="<?php echo $gmail; ?>">
<br></br>
pic: <input type="text" name="pic" value= "<?php echo $pic; ?>"><br/>
 <br></br>
country_id:
<?php
$sql = "select country_id,country_name from country ";
$result =$mysqli->query($sql);
 echo "<select name='country_id' id ='country_id'>";
while ($rowc =$result->fetch_assoc()) {  
  $str = '';
if (($country_id) ==$rowc['country_id']) {
	$str = '';
}
echo "<option value ='" . $rowc['country_id']."' ".$str.">".$rowc['country_name']."</option>";
}
echo "</select>";
 ?>

<br></br>
state_id:
<?php
 $sqls ="select state_id,state_name from state where country_id = $country_id";
$resultres =$mysqli->query($sqls);
 echo "<select name='state_id' id ='state_id'>";
while ($rows =$resultres->fetch_assoc()) { 
$str = '';
if (($state_id) ==$rows['state_id']){
} 
echo "<option value ='" . $rows['state_id']."' ".$str.">".$rows['state_name']."</option>";
}
echo "</select>";
?>

<br></br>
city_id:
<?php
$sqlc= "select city_id,city_name from city where country_id = $country_id";
$resultres =$mysqli->query($sqlc);
echo "<select name='city_id' id ='city_id'>";
while ($rowc =$resultres->fetch_assoc()) { 
	$str = '';
if (($city_id) ==$rowc['city_id']){
 } 
echo "<option value ='" . $rowc['city_id']."' ".$str.">".$rowc['city_name']."</option>";
}
echo "</select>";
?>
<br></br>
<input type="file" name="file">
<img src="<?php echo "uploads/".$pic; ?>">
<a href="welcome.php?action=deleteImg"> Delete </a>!!!!!!!!!!!!!!!!!!!
<input type="submit" name="btnSubmit"  value="Submit">
</form>
</body>
</html>

<script type="text/javascript">
$(document).ready(function(){  
alert();
$(document).on("change","#country_id",function(){ 
var country_id 	=	$(this).val();
//	console.log(country_id);
  $.ajax({
  url:"ajax.php",
  type:"POST",
  data:{'action':'getState','countryId':country_id},
  success:function(data){
  var stateList 	=	$.parseJSON(data);
  console.log(stateList);
  var str =	'<option>- Select State -</option>';
  for(var i = 0; i < stateList.length; i++){ 
  str += '<option value= "'+stateList[i].state_id+'">'+stateList[i].state_name+'</option>';
 }
  $("#state_id").html(str);
 }
  })		 
 })
});
$(document).on("change","#state_id",function(){ 
  var state_id 	=	$(this).val();
  //	console.log(country_id);
  $.ajax({
  url:"ajax.php",
  type:"POST",
  data:{'action':'getcity','countryId':country_id},
  success:function(data){
  var cityList 	=	$.parseJSON(data);
  console.log(cityList);
  var str 	    =	'<option>- Select city -</option>';
  for(var i = 0; i < cityList.length; i++){ 
  str += '<option value= "'+cityList[i].city_id+'">'+cityList[i].city_name+'</option>';
}
  $("#city_id").html(str);
}
})		 
})  
</script>    
<?php
$statusMsg = '';
// File upload path
/*var_dump($_FILES['file']['name']);die();*/
$targetDir = "uploads/";
@$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
 echo  $targetFilePath;
if(empty($_POST["submit"]) && !empty($_FILES["file"]["name"])){ 
    // Allow certain file formats
$allowTypes = array('jpg','png','jpeg','gif','pdf');
if(in_array($fileType, $allowTypes)){
        // Upload file to server
if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
    	//display image in welcome page
echo "<img src=".$targetFilePath." height=200 width=300 />";
            // Insert image file name into database
$sql = "UPDATE welcome SET Fullname='".$_POST['Fullname']."', Contact = '".$_POST['contact']."', address='".$_POST['address']."', gmail='".$_POST['gmail']."', pic='".$_POST['pic']."'WHERE id= ".$_SESSION["sess_id"];
if ($mysqli->query($sql) === TRUE) {
echo "Record updated successfully";
	}else{
	echo "Error updating record: " . $mysqli->error;
	}       
 }else{
 $statusMsg = "Sorry, there was an error uploading your file.";
  }
 }else{
 $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
    }
}else{
$statusMsg = 'Please select a file to upload.';
}

// Display status message
echo $statusMsg;

@$action  = $_GET['action'];
if(isset($action) && $action=='deleteImg'){
header("Location:welcome.php");
}
?>
