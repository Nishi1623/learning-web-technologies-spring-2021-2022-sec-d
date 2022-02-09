<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab Task 8</title>
</head>
<body><h4>
<?php

$a=[
    [1,2,3,'A'],
    [1,2,'B','C'],
    [1,'D','E','F']
];

for($i=0;$i<3;$i++)
{
    for($j=0;$j<4;$j++)
    {
        if($a[$i][$j]== 1 ||$a[$i][$j]== 2 || $a[$i][$j]== 3 )
        {
            echo $a[$i][$j];
        }  
    }
    echo "<br>";
}

echo "<br>";
for($i=0;$i<3;$i++)
{
    for($j=0;$j<4;$j++)
    {
        if($a[$i][$j] == 'A' ||$a[$i][$j] == 'B' || $a[$i][$j]== 'C' || $a[$i][$j]== 'D' || $a[$i][$j]== 'E' || $a[$i][$j]== 'F' )
        {
            echo $a[$i][$j];
        }  
    }
    echo "<br>";
}

?>
</h4>    
</body>
</html>
