<?php
require "connection.php";
if(!isset($_SESSION['user'])){
	header("location:index.html");
	}
?>



<!DOCTYPE html>
<html lang="">
<head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Good Food Restaurant</title>
     <link rel="stylesheet" href="CSS/style.css">
     <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

</head>

<body>
    <div style="background-image: url(image/party-hall-2.jpg); width:100%;height: 575px; background-repeat: no-repeat; background-size: cover;">
          <div id="nav">
               <ul>
                 
<li><a href="dashbord.php">Home</a></li>
                    <li><a href="menu.php">Menus</a></li>
					<li><a href="reservation.php">Services</a></li>
                     
					<li><a href="booktable.php">BookTable</a></li>
					<li><a href="partyhall.php">PartyHall</a></li>
                     <li><a href="feedback.php">Feedback</a></li>
					<li><a href="contactus.php">ContactUs</a></li>
                    <li><a href="logout.php">LogOut</a></li>

               </ul>
          </div>
          
         <div id="heading-5">
               <h1><bold>Make a</bold></h1>
               <p id="para_1"><i>RESERVATION</i></p>
               <hr id="vertical-line-1"><i class="fa fa-star" id="star-1" aria-hidden="true"></i><hr id="vertical-line-2">
               <p id="para_2">Booking a table online is easy and takes just a couple of minutes.</p>
          </div>
          
         <div id="discover-4">
              <div id="section-7">
                    <p id="para_9"><i>Party Hall</i></p>
                    <p id="para_11">ONE</p>
                    <br>
                    <i class="fa fa-star" id="star-2" aria-hidden="true"></i>
                    <p id="para_10">Party Hall One is great for any type of party or event including Weddings, Birthdays, Office Meetings Etc.<br></p>
                    <p style="font-size: 20px;opacity: .7;font-weight: 800;">Seat up to 140 guests</p>
              </div>
              <div id="section-8">
                    <img src="image/party-hall-4.jpg"; width="300px"; height="250px"; style="padding-right: 50px;">
              </div>
          </div>
          
           <hr id="vertical-line-3">
           <i class="fa fa-star" id="star-3" aria-hidden="true"></i>
           <hr id="vertical-line-4">
           
         <div id="discover-5">
               <div id="section-9">
                    <img src="image/party-hall-3.jpg" width="300px"; height="250px";>
               </div>
               <div id="section-10">
                    <p id="para_11"><i>Party Hall</i></p>
                    <p id="para_12">TWO</p>
                    <i class="fa fa-star" id="star-4" aria-hidden="true"></i>
                    <p id="para_13">Party Hall Two is great for any type of small events.<br></p>
                    <p id="para_14">Seat up to 50 guests</p>
               </div>
          </div>
          
<!--          <div style="background-image: url(image/party-hall-5.jpg); width: 100%; height: 400px; background-repeat: no-repeat; background-size: cover; position: absolute; top: 1450px;"></div>-->
          <img src="image/party-hall-5.jpg" style="width: 100%; height: 400px; background-repeat: no-repeat; background-size: cover; position: absolute; top: 1450px; left: -1px;">
         <div id="section-11">
              <h1>PRIVATE DINING &amp; EVENTS</h1>
              <p>Whatever your event or celebration, we are here to make your special day a truly memorable one. A private dining experts are more than happy to create custom floral arrangements and arrange for guests to meet their Chef during the course of their meal.</p>
    
	   </div>
         <div id="section-12">
             <h1>RESERVE BY PHONE</h1>
              <p>We take reservations for lunch and dinner. To make a reservation, please call us at (718) 463-7362 between 11:30am-9:30pm, 7 Days A Week</p>
        
		 	
		 </div>
		
		

</div></center>


         <footer id="footer-2">
              <p>&copy; 2019 GOOD FOOD Restaurant Team</p>
         </footer>
     </div>
</body>