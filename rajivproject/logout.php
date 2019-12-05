

<?php 
  session_start(); 

if( isset($_SESSION['username']) ) { 
    echo 'session is set.' ; 
} 
else { 
    echo 'session variables deleted'; 
} 
  
echo $_SESSION['username']; 
echo $_SESSION['password']; 
  
// Use session_unset() function 
session_unset(); 
header("location:index.php");
  
?> 

