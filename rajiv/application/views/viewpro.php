<?php
print_r($this->session->userdata());
?>


    <html>
    <body>
		<form action="<?php echo base_url().'Control/emp_update'; ?>" method="post">
		<label>Employee_Name:) <?php echo $emp->emp_name; ?></label>
		<br></br>
	<label>Employee_Registerno:) <?php echo $emp->emp_regno; ?></label>
		<br></br>
	<label>Employee_Fullname:)</label><input type="text" name="emp_fullname" value="<?php echo $emp->emp_fullname; ?>">
		 <br></br>
	<label>Employee_Mobileno:</label><input type="text" name="emp_mobileno" value="<?php echo $emp->emp_mobileno; ?>">
		 <br></br>
	<label>Employee_Address:</label><input type="text" name="emp_address" value="<?php echo $emp->emp_address; ?>">
		 <br></br>
	<label>Employee_Salary:</label><input type="text" name="emp_salary" value="<?php echo $emp->emp_salary; ?>">
		 <br></br>
		<label>Employee_Gender:</label>
				  <select name = "gender">
				  	<option>-----select gender----</option>
				  	<option value="0">Male</option>
				  	<?php 
				  	if($user_information->gender=='0'){ 
				  	echo "selected";
				  }else{
				  echo "";
				}
				  ?>
		  <option value="1">Female</option> 
		  <?php 
		  if($user_information->gender=='1'){
		   echo "selected";
		  }else{
		  echo "";
		}
		  ?>
		</select>
		 <br></br>
	<label>Employee_country:</label>
				<select name="country" id='country'>
			    <option>-- Select country --</option>
			    <?php 
				 foreach($country as $country) 
				   {
				$str ='';
				if (($emp->emp_country)==$country['country_id']){
				$str= 'selected';
			 }  
				echo "<option value ='" . $country['country_id']."' ".$str.">".$country['country_name']."</option>";
				}
			 ?>
				</select>
				<br></br>
   <label>Employee_State:</label>
				<select name="state" id='state'>
				    <option>-- Select state --</option>
				    <?php 
				    foreach($state as $state) 
				    {
				     $str ='';	
				     if (($emp->emp_state)==$state['state_id']){
				      $str='selected';
				     }  
				     echo "<option value ='" . $state['state_id']."' ".$str.">".$state['state_name']."</option>";
				    }
				    ?>
				</select>
				<br></br>
   <label>Employee_city:</label>
				<select name="city" id='city'>
				    <option>-- Select city --</option>
				    <?php 
				    foreach($city as $city) 
				      {
				    $str='';
				     if (($emp->emp_city)==$city['city_id']){
				    $str='selected';
				     } 
				    echo "<option value ='" . $city['city_id']."' ".$str.">".$city['city_name']."</option>";
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
			  url:'<?php echo base_url()?>Control/state/',
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
			  url:'<?php echo base_url()?>Test/city/',
			  data:{stateID:stateID},
			  dataType: 'json',
			  success:function(res){
			  var obj =JSON.stringify(res);
			  var str = JSON.parse(obj);
			  $.each(res,function(index,data){
			  $('#city').html('<option value="'+data['city_id']+'">'+data['city_name']+'</option>');
			});
			} 
			});
			}
			});
			});
		</script>
		<br></br>
		<input type="hidden" name="emp_id" value="<?php echo $emp->emp_id; ?>">
		<button type="submit" name="submit" value="submit">Submit</button>
		<button type="button" name="cancel" value="">Cancel</button>
		<a href='<?php echo base_url();?>Control/logout'>Logout</a>
			</form>
			<html>
            <body> 
			<?php
			  if (isset($error)){
			  echo $error;
			}
			?>
			<form method="post" action="<?php echo base_url().'Control/updateimage/'; ?>" enctype="multipart/form-data">
				<label> first_name:</label><input type="text" name="first_name">
				<br></br>
            	<label> last_name:</label><input type="text" name="last_name">
			<input type = "file" name = "userfile"  /> 
			<input type="hidden" name="emp_id" value="<?php echo $emp->emp_id; ?>">
			<input type = "submit" value = "upload" /> 
			</form> 
			</body>
		    </html>