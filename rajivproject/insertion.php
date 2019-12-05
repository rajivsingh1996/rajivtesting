<html>  
<head>  
<title>Insertion Sort</title>  
</head>  
<body>  
<?php  
 $a = array(120, 22, 207, 69, 45, 62, 12, 78, 34, 23);  
           
            for($i=0;$i<10;$i++)  
            {  
                $temp = $a[$i];  
                $j=$i-1;  
                while ($j>=0 and $temp <= $a[$j])  
                {

                 $a[$j+1] = $a[$j]; 

                 $j = $j-1;
                }  
                  $a[$j+1] = $temp;  
                   }  
                for($k=0;$k<10;$k++)  
                 {  
                echo $a[$k];  
                echo "\n";  
            }  
?>  
</body>  
</html>  