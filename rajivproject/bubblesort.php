<html>  
<head>  
<title>Bubble Sort</title>  
</head>  
<body>  
<?php  
    $a = array(40, 10, 12, 18, 56, 28);  
    for($i=0;$i<6;$i++)  
    {  
        for ($j=0;$j<6;$j++)  
        {  

            if($a[$i]<$a[$j])  
            {  
                 $temp = $a[$i];  
                $a[$i]=$a[$j];  
                $a[$j] = $temp;   
                echo $i."-".$j."temp- ".$temp."<br>";
            }else{
                echo $i."-".$j."<br>";
            }  
        }  
    }  
    echo "Printing Sorted Element List ...\n";  
    for($i=0;$i<6;$i++)  
    {  
        echo $a[$i];  
        echo "\n";  
    }  
?>  
</body>  
</html>  