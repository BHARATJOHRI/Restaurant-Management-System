<?php //login page?>
<!DOCTYPE html>
<html lang="">
<head>

<style>
    *{
         padding: 0px;
         margin: 0px;
         font-family: sans-serif;
         font-size: 20px;
         box-sizing: border-box;
    }
    body{
         background-image: url(../flower_image.jpg);
/*              background-repeat: no-repeat;*/
         background-size: cover;
    }
    .box{
         position: absolute;
         left: 50%;
         top: 50%;
         transform: translate(-50%, -50%);
         background: rgba(0, 0, 0, .8);
         width: 400px;
         padding: 40px;
         box-sizing: border-box;
         border-radius: 10px;
         box-shadow: 0 15px 15px rgba(0, 0, 0, .5)
    }
    h2{
         text-align: center;
         margin: 0 0 30px;
         padding: 0px;
         color: white;
    }
    .box .inputbox{
         position: relative;
    }
    .box .inputbox input{
         width: 100%;
         padding: 10px 0;
         font-size: 16px;
         color: white;
         margin-bottom: 10px;
         border: none;
         outline: none;
         background: transparent;
         border-bottom: 1px solid gray;
    }
    .box .inputbox label{
         position: absolute;
         top: 0;
         left: 0;
         padding: 10px 0;
         font-size: 16px;
         color: white;
         pointer-events: none;
         transition: .5s;
    }
    .box .inputbox input:focus~label,.box .inputbox input:valid~label{
         top: -20px;
         left: 0;
         color: deepskyblue;
         font-size: 12px;
    }
    .box input[type="submit"]{
         margin-top: 10px;
         background: transparent;
         border: none;
         outline: none;
         color: white;
         background: deepskyblue;
         padding: 10px 30px;
         cursor: pointer;
    }
</style>
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>

<body style="background-image:url(img/party.jpg);">

    <div class="box" >
         <h2>Login</h2>
         <form action="logging.php" method="post">
              <div class="inputbox">
                   <input type="text" name="email1" required>
                   <label>Username</label>
              </div>
              <div class="inputbox">
                   <input type="password" name="password1" required>
                   <label>Password</label>
              </div>
              <input type="submit" value="submit" name="submit">
			 
         </form>
    </div>
</body>
</html>
