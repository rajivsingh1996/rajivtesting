<html>

   <head>
      <title>Add New Record in MySQL Database</title>
   </head>

   <body>
      <?php
         if(isset($_POST['add'])) {
            $dbhost = 'localhost:3036';
            $dbuser = 'root';
            $dbpass = 'rootpassword';
            $conn = mysql_connect($dbhost, $dbuser, $dbpass);
         
            if(! $conn ) {
               die('Could not connect: ' . mysql_error());
            }

            if(! get_magic_quotes_gpc() ) {
               $last_name = add($_POST['last_name']);
               $first_name = add($_POST['first_name']);
            } else {
               $last_name = $_POST['last_name'];
               $first_name = $_POST['tutorial_author'];
            }

            $roll_no = $_POST['roll_no'];
   
            $sql = "INSERT INTO student1 ".
               "(last_name,first_name, roll_no) "."VALUES ".
               "('$last_name','$first_name','$roll_no')";
               mysql_select_db('TUTORIALS');
            $retval = mysql_query( $sql, $conn );
         
            if(! $retval ) {
               die('Could not enter data: ' . mysql_error());
            }
         
            echo "Entered data successfully\n";
            mysql_close($conn);
         } else {
      ?>
   
      <form method = "post" action = "<?php $_PHP_SELF ?>">
         <table width = "600" border = "0" cellspacing = "1" cellpadding = "2">
            <tr>
               <td width = "250">last_name</td>
               <td>
                  <input name = "last_name" type = "text" id = "last_name">
               </td>
            </tr>
         
            <tr>
               <td width = "250">full_name</td>
               <td>
                  <input name = "first_name" type = "text" id = "first_name">
               </td>
            </tr>
         
            <tr>
            <td width = "250"> roll_no</td>
               <td>
                  <input name = "roll_no" type = "text" id = "roll_no">
               </td>
            </tr>
      
            <tr>
               <td width = "250"> </td>
               <td> </td>
            </tr>
         
            <tr>
               <td width = "250"> </td>
               <td>
                  <input name = "add" type = "submit" id = "add"  value = "submit">
               </td>
            </tr>
         </table>
      </form>
   <?php
      }
   ?>
   </body>
</html>