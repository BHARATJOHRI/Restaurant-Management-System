<?php require "connection.php";?>


<?php 
if(!isset($_SESSION['user'])) 
   header("location:../index.html");
?>



<!DOCTYPE html>
<html lang="">
<head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Good Food Restaurant</title>
     <link rel="stylesheet" href="CSS/style.css">
	<style> *{
		 margin:0px;
		 padding:0px;
	 }
	 footer{
     position: absolute;
     top: 575px;
}</style>
</head>

<body>
    <div style="background-image: url(../image/restaurant_image_3.jpg); width:100%;height: 575px; background-repeat: no-repeat; background-size: cover;">
          <div id="nav">
               <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="tables.php">Tables</a></li>
					<li><a href="halls.php">Halls</a></li>
                    <li><a href="feedback.php">Feedback</a></li>
					<li><a href="bookedtable.php">BookedTables</a></li>
					<li><a href="bookedhall.php">BookedHalls</a></li>
					<li><a href="contactus.php">Contact</a></li>
					<li><a href="report.php">Report</a></li>
					<li><a href="logout.php">LogOut</a></li>
                    
               </ul>
          </div>
          
         
         <footer>
              <p>&copy; 2019 GOOD FOOD Restaurant Team</p>
         </footer>
     </div>
</body>
</html>
