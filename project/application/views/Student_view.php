<?php
print_r($this->session->userdata());
?>

<html>
<body>
	<style>
body {
  background-color: lightblue;
}
</style>
	<form action="<?php echo base_url().'Student_Control/student_update'; ?>" method="post">
		<label>Student_Name:)  <?php echo $student->student_name; ?> </label><br></br>
	    <label>Student_Password:) <?php echo $student->student_pass; ?></label><br></br>
		<label>Student_phoneno:) </label> <input type="text" name="student_phoneno" value="<?php echo $student->student_phoneno; ?>"><br></br>
	    <label>Student_address:)</label> <input type="text" name="student_address" value="<?php echo $student->student_address; ?>"><br></br>
	    <label>Student_gender:) </label> 
	    <select name="gender">
	    	<option>-------select gender------</option>
	    	<option value="0"> male </option>
	    	<option value="1"> female </option>
	    </select><br></br>
      <label>Student_country:</label>
				<select name="country" id='country'>
			    <option>-- Select country --</option>
			    <?php 
				 foreach($country as $country) 
				   {
				$str ='';
				if (($student->student_country)==$country['country_id']){
				$str= 'selected';
			 }  
				echo "<option value ='" . $country['country_id']."' ".$str.">".$country['country_name']."</option>";
				}
			 ?>
				</select>
				
	    <br><br>
	    <label>Student_state:)</label>
	    <select name="state" id="state">
	     <option>--------select state------</option>
	     <?php
	     foreach($state as $state)
	     {
	     	$str='';
	     	if(($student->student_state)==$state['state_id'])
	     	{
	     		$str='selected';

	     	}
	     	echo "<option value = '". $state['state_id']."' ".$str.">".$state['state_name']."</option>";
	     }
	     ?>
	 </select>
	    <br></br>
        <label>Student_city :)</label> 
        <select name="city" id='city'>
        	<option>-------select city--------</option>
        	<?php
        	foreach($city as $city)
        	{
        		$str='';
        if(($student->student_city)==$city['city_id']){
        	$str='selected';
        }
        echo "<option value = '". $city['city_id']."' ".$str.">".$city['city_name']."</option>";
        	}
        	?>
        </select>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	    <script type="text/javascript">
			$(document).ready(function(){
			$('#country').on('change',function(){
			var countryID = $(this).val();
			  if(countryID){
			  $.ajax({
			  type:'POST',
			  url:'<?php echo base_url()?>Student_Control/state/',
			  data:{countryID:countryID},
			  dataType: 'json',
			  success:function(res){
			  var obj =JSON.stringify(res);
			  var str = JSON.parse(obj);
			  $('#state').html('<option value="select">select State </option>');
			  $.each(res,function(index,data){
			  $('#state').append('<option value="'+data['state_id']+'">'+data['state_name']+'</option>');
			});
			}
			});
			}
			});
			});

			$(document).ready(function(){
			$('#state').on('change',function(){
			  var stateID = $(this).val();
			  if(stateID){
			  	$.ajax({
			  		type:'POST',
			  		url:'<?php echo base_url()?>Student_Control/city/',
			  		data:{stateID:stateID},
			  		dataType:'json',
			  		success:function(res){
			  	    var obj = JSON.stringify(res);
			  	    var str = JSON.parse(obj);
					  $('#city').html('<option value="select">select city </option>');
					  $.each(res,function(index,data){
					  $('#city').append('<option value="'+data['city_id']+'">'+data['city_name']+'</option>');
			  		});
			  	   }
			      });
			      }
				 });
			     });
      </script>
        <br></br>
        <input type="hidden" name="student_id" value="<?php echo $student->student_id; ?>">
        <button type="submit"> Submit </button>
        <button type="cancel"> Cencel </button>
       <a href='<?php echo base_url();?>Student_Control/logout'>Logout</a>
       
  </form>
</body>
</html>
<html>
<head> 
</head> 
<body> 
<?php
  if (isset($error)){
  echo $error;
}
?>
<form method="post" action="<?php echo base_url().'Student_Control/updateimage/'; ?>" enctype="multipart/form-data">
<input type = "file" name = "userfile"  /> 
<input type="hidden" name="student_id" value="<?php echo $student->student_id; ?>">
<input type = "submit" value = "upload" />
<a href="Student_view?action=deleteImg"> Delete </a>

<img src="<?php echo base_url().'uploads/'.$student->image; ?>">
</form> 
</body>
</html>

