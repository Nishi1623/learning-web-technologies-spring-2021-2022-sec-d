<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab Task 3</title>
</head>
<body>
<h4>
    <?php
        echo "Input numbers= 5,12,23,36,41,50";
        echo "<br>";
        $numbers=[5,12,23,36,41,50];
        $even=[];
        $odd=[];
        
        foreach($numbers as $val)
        {
            if($val % 2 == 0) 
            {
                $even[] = $val.",";
            } else 

            {
                $odd[] = $val.",";
            }
        }
        echo"Even Numbers: ";
        foreach($even as $even)
        {
            echo $even;
        }
        
        echo "<br>";
        echo "Odd Numbers: ";
        foreach($odd as $odd)
        {
            echo $odd;
        }
        

        
    ?>
</h4>    
</body>
</html>