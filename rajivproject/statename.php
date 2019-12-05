<?php
    include "connectionfile.php";
     
    // Fetch all the country data 
    $query = "SELECT * FROM country ORDER BY country_name ASC"; 
    $result = $mysqli->query($query); 
?>

<!-- Country dropdown -->
<select id="country">
    <option value="">Select Country</option>
    <?php 
    if($result->num_rows > 0){ 
        while ($row = $result->fetch_assoc()) {  
            echo '<option value="'.$row['country_id'].'">'.$row['country_name'].'</option>'; 
        } 
    }else{ 
        echo '<option value="">Country not available</option>'; 
    } 
    ?>
</select>

<!-- State dropdown -->
<select id="state">
    <option value="">Select country first</option>
</select>

<!-- City dropdown -->
<select id="city">
    <option value="">Select state first</option>
</select>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script>
  $(document).ready(function(){
     $('#country').on('change', function(){
      var country_id = $(this).val();
            if(country_id){
            $.ajax({
            type:'POST',
            url:'statename.php',
            data:'country_id='+country_id,
            success:function(html){
            $('#state').html(html);
            $('#city').html('<option value="">Select state first</option>'); 
            }
            }); 
            }else{
            $('#state').html('<option value="">Select country first</option>');
            $('#city').html('<option value="">Select state first</option>'); 
        }
    });
    
       $('#state').on('change', function(){
       var state_id = $(this).val();
       if(state_id){
       $.ajax({
       type:'POST',
       url:'statename.php',
       data:'state_id='+state_id,
       success:function(html){
       $('#city').html(html);
       }
       }); 
       }else{
       $('#city').html('<option value="">Select state first</option>'); 
       }
       });
       });
       </script>


    <?php  
    if(!empty($_POST["country_id"])){ 
    // Fetch state data based on the specific country 
    $query = "SELECT * FROM state WHERE country_id = ".$_POST['country_id']." ORDER BY state_name ASC"; 
    $result = $mysqli->query($query); 
     
    // Generate HTML of state options list 
    if($result->num_rows > 0){ 
    while ($row = $result->fetch_assoc()){  
    echo '<option value="'.$row['state_id'].'">'.$row['state_name'].'</option>';  
}
    }else{ 
        echo '<option value="">state not available</option>'; 
    } 
    }elseif(!empty($_POST["state_id"])){ 
    // Fetch city data based on the specific state 
    $query = "SELECT * FROM city WHERE state_id = ".$_POST['state_id']." ORDER BY city_name ASC"; 
    $result = $mysqli->query($query); 
     
    // Generate HTML of city options list 
    if($result->num_rows > 0){ 
          while ($row = $result->fetch_assoc()){  
            echo '<option value="'.$row['city_id'].'">'.$row['city_name'].'</option>'; 
        } 
    }else{ 
        echo '<option value="">City not available</option>'; 
    } 
}
?>
