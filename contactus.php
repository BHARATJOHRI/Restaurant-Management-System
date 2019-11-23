<?php 
require "connection.php";
if(!isset($_SESSION['user'])){
	header("location:index.html");
	}
?>

<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8">

    <title>Contact Form</title>
	<link rel="stylesheet" href="CSS/style.css">
<style>

body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;
   margin: 0px;
   padding: 0px;}

input[type=text], select,textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}


input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>





</head>

<body style="background-image:url(img/c.jpg);background-repeat:no-repeat;background-size:cover;">
    <div style="background-image: url(); width:100%; background-repeat: no-repeat; background-size:100% 100%;">
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


<h3 style="text-align:center;">Contact Us</h3>
<center>
<div class="container" style="width:700px;">
  <form action="contact.php" method="post">
    <label for="name">Name</label>
    <input type="text" id="name" name="name" placeholder="Your name..">

    <label for="email">Email</label>
    <input type="text" id="email" name="email" placeholder="Your email ..">
		 <label for="subject">Subject</label>
    <input type="text" id="subject" name="subject" placeholder="write subject..">
   
    <label for="subject">Message</label>
    <textarea id="message" name="message" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" value="Submit">
  </form>
</div>
</center>
</body>
</html>





</div>
</body>
</html>