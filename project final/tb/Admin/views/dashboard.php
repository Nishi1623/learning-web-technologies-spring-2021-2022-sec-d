<?php
    require_once('../controller/sessionController.php');	
    require_once('../services/userService.php');


    $user = SearchByUsername($_SESSION['username']);

    if(isset($_GET['error'])){
		if($_GET['error'] == 'dberror'){
			echo "something wrong ...please try again.";
		}
    }
    


?>

<!DOCTYPE html>
<html>

<head>

    <style>
  

    </style>


    <title>ADMIN | Dashboard</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <link rel="stylesheet" href="../views/css/style.css">
</head>

<body>
    <h1>ADMIN PANEL<sup><small>Bangla Travel Buddy</small></sup></h1>
    <h5>* Welcome To Bangla Travel Buddy <?=$_SESSION['username']?></h5>

    <div class="sidebar">
  <a class="active" href="../views/dashboard.php">Dashboard</a>
  <a href="../views/hotel.php">Hotel</a>
  <a href="../views/employer_list.php">Employers</a>
  <a href="../views/package.php">Package</a>
  <a href="../views/city.php">Add Bookings</a>
  <a href="../views/bus.php">Bus</a>
  <a href="../views/feedback.php">Feedback</a>
  <a href="../views/profile.php">Profile</a>
  <a href="../controller/logoutController.php">Logout</a>
</div>

<div align="center">
    <form action="../controller/searchController.php">
        <table>
            <tr>
                <td>
                    
               
                </td>

                <td class="search-panel">
                  

                </td>
            </tr>


        </table>
    </form>
</div>
   
</body>

</html>