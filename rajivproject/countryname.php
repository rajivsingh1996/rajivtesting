 <?php
 include ("connectionfile.php");
?>
<HTML>
<head>
<title>Dynamic Drop Down List</title>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>	
<form id="form1" name="form1" method="post" action="<?php $_SERVER['PHP_SELF']?>">
Country Name :
<select id="country">
<option></option>
</select>
<br>
State Name :
<select id="state">
<option></option>
</select>
<br>
City Name :
<select id="city">
<option></option>
</select>
<?php
if(isset($select)&&$select!=""){
$select=$_POST['NEW'];
}
?>


<!-- www.techsofttutorials.com   Techsoft Tutorials, Free Latest Technology Tutorials and Demo. -->

</form>

<script type="text/javascript">
$(document).ready(function(){  
getCountry();
$(document).on("change","#country",function(){ 
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
  $("#state").html(str);
 }
  })		 
 })

 function getCountry(country_id){
 $.ajax({
 url:"ajax.php",
 type:"POST",
 data:{'action':'getContry'},
 success:function(data){
 var countryList 	=	$.parseJSON(data);
 var str 			=	'<option>- Select Country -</option>';
 for(var i = 0; i < countryList.length; i++){ 
 str += '<option value= "'+countryList[i].country_id+'">'+countryList[i].country_name+'</option>';
}
 $("#country").html(str);
 }
 })
 }
})
  
  $(document).on("change","#state",function(){ 
  var state_id 	=	$(this).val();
  //	console.log(country_id);
  $.ajax({
  url:"ajax.php",
  type:"POST",
  data:{'action':'getcity','stateId':state_id},
  success:function(data){
  var cityList 	=	$.parseJSON(data);
  console.log(cityList);
  var str 	    =	'<option>- Select city -</option>';
  for(var i = 0; i < cityList.length; i++){ 
  str += '<option value= "'+cityList[i].city_id+'">'+cityList[i].city_name+'</option>';
}
  $("#city").html(str);
}
})		 
});        
</script>
</body>
</html>
