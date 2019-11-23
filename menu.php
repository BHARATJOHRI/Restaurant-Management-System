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
     <link rel="stylesheet" href="swiper.min.css">
     <link rel="stylesheet" href="CSS/style.css">
     <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

</head>

<body>
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


<div style="background-image: url(image/Menu-bg-1.jpg); width:100%;height: 175px; background-repeat: no-repeat; background-size: cover;padding-top: 500px;">
<h1 id="heading-2">* Burgers & Wraps</h1>

<div class="swiper-img">
    <div class="swiper-container">
         <div class="swiper-wrapper">
              <div class="swiper-slide">
                   <a title="McAloo Tikki Burger with Whole Wheat Bun" href="clothing-1.html" class="a3">
                   <div class="imgBx">
                        <img src="image/Burger-1.png">
                   </div>
                  <div class="details"><p>McAloo Tikki Burger</p></div>
                  <div class="section-17"><p>&#8377; 48</p></div>
                   </a>
              </div>
              
              <div class="swiper-slide">
                   <a title="Grilled Chatpata Aloo" href="" class="a3">
                    <div class="imgBx">
                        <img src="image/Burger-2.png">
                    </div>
                    <div class="details"><p>Grilled Chatpata Aloo</p></div>
                    <div class="section-17"><p>&#8377; 51</p></div>
                   </a>
              </div>
              <div class="swiper-slide">
                        <a title="Chatpata Naan - Aloo" href="" class="a3">
                         <div class="imgBx">
                              <img src="image/Burger-3.png">
                         </div>
                         <div class="details"><p>Chatpata Naan - Aloo</p></div>
                         <div class="section-17"><p>&#8377; 64</p></div>
                         </a>
              </div>
              <div class="swiper-slide">
                   <a title="Mexican McAloo Tikki Burger with Whole Wheat Bun" href="" class="a3">
                    <div class="imgBx">
                        <img src="image/Burger-4.png">
                    </div>
                    <div class="details"><p>Mexican Aloo Tikki...</p></div>
                    <div class="section-17"><p>&#8377; 65</p></div>
                   </a>
              </div>
              <div class="swiper-slide">
                   <a title="Chatpata Naan - Kebab" href="" class="a3">
                    <div class="imgBx">
                        <img src="image/Burger-5.png">
                    </div>
                    <div class="details"><p>Chatpata Naan - Kebab</p></div>
                    <div class="section-17"><p>&#8377; 79</p></div>
                   </a>
              </div>
              <div class="swiper-slide">
                   <a title="Pizza Puff + Veggie" href="" class="a3">
                    <div class="imgBx">
                        <img src="image/Burger-6.png">
                    </div>
                    <div class="details"><p>Pizza Puff + Veggie</p></div>
                    <div class="section-17"><p>&#8377; 106</p></div>
                   </a>
              </div>
              <div class="swiper-pagination"></div>
         </div>
     </div>

     <script src="swiper.min.js"></script>
     <script src="JS/script.js"></script>
     </div>
     
<br><br><br><br>
<h1 id="heading-Veg">* Veg Pizza</h1>
<div style="background-image: url(image/Menu-bg-1.jpg); width:100%;height: 175px;  background-size: cover;padding-top: 500px;">

<div class="swiper-img-2">
    <div class="swiper-container">
         <div class="swiper-wrapper">
              <div class="swiper-slide">
                   <a title="McAloo Tikki Burger with Whole Wheat Bun" href="clothing-1.html" class="a3">
                   <div class="imgBx">
                        <img src="image/Pizza-1.jpg">
                   </div>
                  <div class="details"><p>McAloo Tikki Burger</p></div>
                  <div class="section-17"><p>&#8377; 48</p></div>
                   </a>
              </div>
              
              <div class="swiper-slide">
                   <a title="Grilled Chatpata Aloo" href="" class="a3">
                    <div class="imgBx">
                        <img src="image/Pizza-2.jpg">
                    </div>
                    <div class="details"><p>Grilled Chatpata Aloo</p></div>
                    <div class="section-17"><p>&#8377; 51</p></div>
                   </a>
              </div>
              <div class="swiper-slide">
                        <a title="Chatpata Naan - Aloo" href="" class="a3">
                         <div class="imgBx">
                              <img src="image/Pizza-3.jpg">
                         </div>
                         <div class="details"><p>Chatpata Naan - Aloo</p></div>
                         <div class="section-17"><p>&#8377; 64</p></div>
                         </a>
              </div>
              <div class="swiper-slide">
                   <a title="Mexican McAloo Tikki Burger with Whole Wheat Bun" href="" class="a3">
                    <div class="imgBx">
                        <img src="image/Pizza-4.jpg">
                    </div>
                    <div class="details"><p>Mexican Aloo Tikki...</p></div>
                    <div class="section-17"><p>&#8377; 65</p></div>
                   </a>
              </div>
              <div class="swiper-slide">
                   <a title="Chatpata Naan - Kebab" href="" class="a3">
                    <div class="imgBx">
                        <img src="image/Pizza-5.jpg">
                    </div>
                    <div class="details"><p>Chatpata Naan - Kebab</p></div>
                    <div class="section-17"><p>&#8377; 79</p></div>
                   </a>
              </div>
              <div class="swiper-slide">
                   <a title="Pizza Puff + Veggie" href="" class="a3">
                    <div class="imgBx">
                        <img src="image/Pizza-6.jpg">
                    </div>
                    <div class="details"><p>Pizza Puff + Veggie</p></div>
                    <div class="section-17"><p>&#8377; 106</p></div>
                   </a>
              </div>
              <div class="swiper-pagination"></div>
         </div>
     </div>
</div>
     <script src="swiper.min.js"></script>
     <script src="JS/script.js"></script>
     
     
     
     <br><br><br><br>

<div style="background-image: url(image/Menu-bg-1.jpg); width:100%;height: 175px;  background-size: cover;padding-top: 500px;">
<h1 id="heading-Dosa">* Dosas</h1>

<div class="swiper-img-3">
    <div class="swiper-container">
         <div class="swiper-wrapper">
              <div class="swiper-slide">
                   <a title="Dosa(Butter)" href="clothing-1.html" class="a3">
                   <div class="imgBx">
                        <img src="image/Dosa-1.jpg">
                   </div>
                  <div class="details"><p>Dosa(Butter)</p></div>
                  <div class="section-17"><p>&#8377; 145</p></div>
                   </a>
              </div>
              
              <div class="swiper-slide">
                   <a title="Onion Dosa (Butter)" href="" class="a3">
                    <div class="imgBx">
                        <img src="image/Dosa-2.jpg">
                    </div>
                    <div class="details"><p>Onion Dosa (Butter)</p></div>
                    <div class="section-17"><p>&#8377; 156</p></div>
                   </a>
              </div>
              <div class="swiper-slide">
                        <a title="Paper Dosa" href="" class="a3">
                         <div class="imgBx">
                              <img src="image/Dosa-3.jpg">
                         </div>
                         <div class="details"><p>Paper Dosa</p></div>
                         <div class="section-17"><p>&#8377; 150</p></div>
                         </a>
              </div>
              <div class="swiper-slide">
                   <a title="Myscore Dosa" href="" class="a3">
                    <div class="imgBx">
                        <img src="image/Dosa-4.jpg">
                    </div>
                    <div class="details"><p>Myscore Dosa</p></div>
                    <div class="section-17"><p>&#8377; 143</p></div>
                   </a>
              </div>
              <div class="swiper-slide">
                   <a title="Rawa Dosa" href="" class="a3">
                    <div class="imgBx">
                        <img src="image/Dosa-5.jpg">
                    </div>
                    <div class="details"><p>Rawa Dosa</p></div>
                    <div class="section-17"><p>&#8377; 156</p></div>
                   </a>
              </div>
              <div class="swiper-slide">
                   <a title="Onion Rawa Dosa" href="" class="a3">
                    <div class="imgBx">
                        <img src="image/Dosa-6.jpg">
                    </div>
                    <div class="details"><p>Onion Rawa Dosa</p></div>
                    <div class="section-17"><p>&#8377; 171</p></div>
                   </a>
              </div>
              <div class="swiper-pagination"></div>
         </div>
     </div>
     </div>
     <script src="swiper.min.js"></script>
     <script src="JS/script.js"></script>
     
     
         <br><br><br><br>

<div style="background-image: url(image/Menu-bg-1.jpg); width:100%;height: 175px;  background-size: cover;padding-top: 500px;">
<h1 id="heading-Paneer">* Paneer</h1>

<div class="swiper-img-4">
    <div class="swiper-container">
         <div class="swiper-wrapper">
              <div class="swiper-slide">
                   <a title="Shahi Paneer" href="clothing-1.html" class="a3">
                   <div class="imgBx">
                        <img src="image/Paneer-1.jpg">
                   </div>
                  <div class="details"><p>Shahi Paneer</p></div>
                  <div class="section-17"><p>&#8377; 180</p></div>
                   </a>
              </div>
              
              <div class="swiper-slide">
                   <a title="Kadhai Paneer" href="" class="a3">
                    <div class="imgBx">
                        <img src="image/Paneer-2.jpg">
                    </div>
                    <div class="details"><p>Kadhai Paneer</p></div>
                    <div class="section-17"><p>&#8377; 160</p></div>
                   </a>
              </div>
              <div class="swiper-slide">
                        <a title="Masala Kadhai Paneer" href="" class="a3">
                         <div class="imgBx">
                              <img src="image/Paneer-4.jpg">
                         </div>
                         <div class="details"><p>Masala Kadhai Paneer</p></div>
                         <div class="section-17"><p>&#8377; 170</p></div>
                         </a>
              </div>
              <div class="swiper-slide">
                   <a title="Paneer Butter Masala" href="" class="a3">
                    <div class="imgBx">
                        <img src="image/Paneer-3.jpg">
                    </div>
                    <div class="details"><p>Paneer Butter Masala</p></div>
                    <div class="section-17"><p>&#8377; 195</p></div>
                   </a>
              </div>
              <div class="swiper-slide">
                   <a title="Matar Paneer" href="" class="a3">
                    <div class="imgBx">
                        <img src="image/paneer-5.jpg">
                    </div>
                    <div class="details"><p>Matar Paneer</p></div>
                    <div class="section-17"><p>&#8377; 155</p></div>
                   </a>
              </div>
              <div class="swiper-slide">
                   <a title="Paneer Bhurji" href="" class="a3">
                    <div class="imgBx">
                        <img src="image/paneer-6.jpg">
                    </div>
                    <div class="details"><p>Paneer Bhurji</p></div>
                    <div class="section-17"><p>&#8377; 150</p></div>
                   </a>
              </div>
              <div class="swiper-pagination"></div>
         </div>
     </div>
     </div>
     <script src="swiper.min.js"></script>
     <script src="JS/script.js"></script>
     </div>
     </div>
     </div>
</div>
     </body>
</html>