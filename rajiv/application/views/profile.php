<?php
// print_r($this->session->userdata());
//print_r($user_information);
?>
  <html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
</style> 
</head>
<table style="width:100%; display">
  <tr>
    <th>user_id</th>
    <th>user_name</th> 
    <th>user_pass</th>
    <th>mobile_no</th> 
    <th>address</th>
    <th>pin_code</th> 
    <th>gender</th>
    <th>delete</th>
    <th>country_id</th>
    <th>state_id</th>
    <th>city_id</th>
    <th>image</th>
  </tr>
  <?php
 //print_r($get_join);die();
  foreach($userList as $user){
   ?>
    <tr>
    <td><?php echo $user->user_id; ?></td>
    <td><?php echo $user->user_name; ?></td>
    <td><?php echo $user->user_pass; ?></td>
    <td><?php echo $user->mobile_no; ?></td>
    <td><?php echo $user->address; ?></td>
    <td><?php echo $user->pin_code; ?></td>
   <!--  INSERT 0 AND 1 FETCH DATA MALE AND FEMALE!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
  <td>
  <?php
    if (is_null($user->gender)) {
    echo "";
  }
    else  if ($user->gender==1){
    echo "Female";
    }    
    else if ($user->gender==0){
    echo "Male";
    }
?>
<br></br>
<td><a href='<?php echo base_url();?>test/deletedata?id=<?php echo $user->user_id; ?>'>Delete</a></td>
    <td><?php echo $user->country_name; ?></td>
    <td><?php echo $user->state_name; ?></td>
    <td><?php echo $user->city_name; ?></td> 
    <!-- <td><?php echo $user->image; ?></td> -->
    <td><img height="35px"/width="35px"/src="<?php echo base_url().'uploads/'.$user->image; ?>" ><?php echo $user->image; ?></td>
</tr>

<?php
} ?> 
</table>
</html>
<form action="<?php echo base_url().'Test/update_user/'; ?>" method="post">
<label> User Name:) <?php echo $user_information->user_name; ?></label>
<br></br>
<label> User Password:) <?php echo $user_information->user_pass; ?></label>
<br></br>
<label>Mobile No:) </label><input type="text" name="mobileNo" value="<?php echo $user_information->mobile_no; ?>">
<br></br>
<label>Address:) </label><input type="text" name="address" value="<?php echo $user_information->address; ?>">
<br></br>
<label>Pin_code:)</label><input type="text" name="pincode" value="<?php echo $user_information->pin_code; ?>">
<br></br>
<label>image:)</label><input type="text" name="image" value="<?php echo $user_information->image; ?>">
<br></br>
  <label>Gender:) </label>
  <select name="gender">
  <option>Select Gender</option>
 
  <option value="0" <?php if($user_information->gender=='0'){ echo "selected";}else{echo "";}?>>Male</option>
  <option value="1" <?php if($user_information->gender=='1'){ echo "selected";}else{echo "";}?>>Female</option>

  </select>
  <br></br>
<label>Country_id:)</label>
    <select name="country" id='country'>
    <option>-- Select country --</option>
    <?php 
    foreach($country as $country) 
    {
     $str ='';
     if (($user_information->country_id)==$country['country_id']){
     $str= 'selected';
     }  
     echo "<option value ='" . $country['country_id']."' ".$str.">".$country['country_name']."</option>";
    }
     echo "</select>";
    ?>
    <br></br>
<label>state_id:)</label>
    <select name="state" id='state'>
    <option>-- Select state --</option>
    <?php
    foreach($state as $state)
    {
    $str='';
    if (($user_information->state_id)==$state['state_id']){
    $str= 'selected';
    }  
    echo "<option value ='" . $state['state_id']."' ".$str.">".$state['state_name']."</option>";
    }
     echo "</select>";
    ?>
    <br></br>
<label>city_id:)</label>
    <select name="city" id='city'>
    <option>-- Select city --</option>
    <?php
     foreach($city as $city) 
    {
        $str ='';
        if (($user_information->city_id)==$city['city_id']) {
        $str='selected';
        }
        echo "<option value ='" . $city['city_id']."' ".$str.">".$city['city_name']."</option>";
        }
       echo "</select>";
?>
     
<script src="http://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
$('#country').on('change',function(){
var countryID = $(this).val();
//alert(countryID);
  if(countryID){
  $.ajax({
  type:'POST',
  url:'<?php echo base_url()?>Test/state/',
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
//alert(stateID);
if(stateID){
  $.ajax({
  type:'POST',
  url:'<?php echo base_url()?>Test/city/',
  data:{stateID:stateID},
  dataType: 'json',
  success:function(res){
  //alert(res);
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
 <!-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ -->
<button type="submit" name="submit" value="submit">Submit</button>
<button type="button" name="cancel" value="">Cancel</button>
<a href='<?php echo base_url();?>Test/logout'>Logout</a>
<input type="hidden" name="user_id" value="<?php echo $user_information->user_id; ?>">
</form>
<html>
<head> 
</head> 
<body> 
<?php
  if (isset($error)){
  echo $error;
}
?>
<form method="post" action="<?php echo base_url().'Test/updateimage/'; ?>" enctype="multipart/form-data">
<input type = "file" name = "userfile"  /> 
<input type="hidden" name="user_id" value="<?php echo $user_information->user_id; ?>">
<input type = "submit" value = "upload" /> 
</form> 
</body>
  
