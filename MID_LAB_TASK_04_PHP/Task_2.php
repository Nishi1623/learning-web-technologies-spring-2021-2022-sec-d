<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab Task 2</title>
</head>
<body><h3>
    <?php
        $amount=57;
        $vat=0.15*$amount;
        $total=$vat+$amount;
        echo "Amount= ", $amount;
        echo"<br>";
        echo "Total Amount with Vat= ", $total;
    ?>
</h3>    
</body>
</html>