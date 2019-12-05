
<html> 
    <body> 
        <!--name.php to be called on form submission--> 
        <form method = 'post'>  
            <h4>country_id</h4> 
              
            <select name = 'country_id[]'>   
                <option value = '1112'>1112</option> 
                <option value = '1200'>1200</option> 
                <option value = '1321'>1321</option> 
                <option value = '1416'>1416</option> 
                <option value = '1620'>1620</option> 
                <option value = '1951'>1951</option> 
                <option value = '3235'>3235</option> 
                <option value = '7890'>7890</option> 
                <option value = '7895'>7895</option> 
                <option value = '7904'>7904</option> 
            </select> 
            <h1> state_id</h1>
             <select name = 'state_id[]'>   
                <option value = '1111'>1111</option> 
                <option value = '1234'>1234</option> 
                <option value = '1341'>1341</option> 
                <option value = '1452'>1452</option> 
                <option value = '1582'>1582</option> 
                <option value = '1625'>1625</option> 
                <option value = '1758'>1758</option> 
                <option value = '1846'>1846</option> 
                <option value = '1901'>1901</option> 
                <option value = '2090'>2090</option> 
            </select> 
               <h2> city_id </h2>
            <select name = 'city_id[]'>   
                <option value = '1222'>1222</option> 
                <option value = '1321'>1321</option> 
                <option value = '1420'>1420</option> 
                <option value = '1658'>1658</option> 
                <option value = '1840'>1840</option> 
                <option value = '2080'>2080</option> 
                <option value = '2132'>2132</option> 
                <option value = '2276'>2276</option> 
                <option value = '2301'>2301</option> 
                <option value = '2477'>2477</option> 
            </select> 

            <input type = 'submit' name = 'submit' value = Submit> 
        </form> 
    </body> 
</html> 
<?php 
      
    if(isset($_POST["submit"]))  
    {   
   if(isset($_POST["country_id"]))  
        { 
  foreach ($_POST['country_id'] as $country_id)  
 print "You selected $country_id<br/>"; 
} 
else
 echo "Select an option first !!"; 
    } 
 if(isset($_POST["state_id"]))  
        {       
 foreach ($_POST['state_id'] as $state_id)  
print "You selected $state_id<br/>";
 } 
else
echo "Select an option first !!"; 
// Check if any option is selected 
if(isset($_POST["city_id"]))  
{ 
// Retrieving each selected option 
foreach ($_POST['city_id'] as $city_id)  
print "You selected $city_id<br/>"; 
} 
else
 echo "Select an option first !!"; 
?> 






