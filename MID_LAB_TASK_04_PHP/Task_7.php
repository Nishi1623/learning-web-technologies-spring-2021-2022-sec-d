<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab Task 7</title>
</head>
<body><h4>
     <?php

          for($i=0;$i<3;$i++)
             {
              for($j=0;$j<=$i;$j++)
                 {
                   echo "*";
                 }
                   echo "<br>";
             }
                   echo "<br>";

            for($m=3;$m>=1;$m--)
               {
                for($n=1;$n<=$m;$n++)
                   {
                     echo $n;
                   }
                     echo "<br>";
               }
                    echo "<br>";

            $alpha=["1st"=>"A","2nd"=>"B C","3rd"=>"D E F"];
            foreach ($alpha as $a=>$c)
            {
             echo $c."<br>";
            }
        ?>
</h4>    
</body>
</html>
