<?php
	
	function SearchJob($job){
		$con = DBconnect();
		$sql = "select * from job where username ='{$job}' AND permission= 'OK'";
		$result = mysqli_query($con, $sql);
		$row = mysqli_fetch_assoc($result);
		return $row;
	}
	
?>

<!DOCTYPE html>
<html lang="en">

<head>
<link rel="stylesheet" href="views/css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> TRAVEL BUDDY </title>
</head>

<body>

   <div class="lael"> <center>
        <h1>BANGLA TRAVEL BUDDY</h1>
    </center>
</div>

 

        <span>
            Welcome to travel buddy. It provides facility to travel around bangladesh and provides valid information regarding the budget and other costs. We offer the best service to our customers in order to gain their trust.
        </span>

      
           
      <br/><br/>

     <div align="center">
            <br>
            <div id="nav">
            
                <button class="button"><a href="views/login.php"> ADMIN PANEL</a> </button>

            </div>
        </div>






 




</body>



</html>