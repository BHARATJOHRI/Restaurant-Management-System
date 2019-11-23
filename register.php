<?php

    require "connection.php";

?>

<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8">

    <title>Register</title>
	
	
<style>
*{
	padding:0px;
	margin:0px;
	color:white;
	
}
input[type=text],input[type=email],input[type=password],select {
  width: 800px;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 800px;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

	
	</style>

</head>

<body style="background-image:url(img/b.jpg);background-repeat:no-repeat;background-size:cover;">
<form action="registerme.php" method="post">
  <div class="container" style="width:800px;margin-left:20%;background-color:rgba(0,0,0,0.5)">
  
  
  
  
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>
	
	<label for="name"><b>Name</b></label>
    <input type="text" placeholder="Enter Name" name="name" required><br>
	
	
	 <label for="address"><b>Address</b></label>
    <input type="text" placeholder="Enter Address" name="address" required><br>
	
	<label for="phone"><b>Phone</b></label>
    <input type="text" placeholder="Enter Phone" name="phone" required><br>
    
	<label for="email"><b>Email</b></label>
    <input type="email" placeholder="Enter Email" name="email" required><br>

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required><br>
	
	 <label for="confirm_password"><b>Confirm Password</b></label>
<input type="password" name="confirm_password"  placeholder="Enter Re-Password" required>

	
	
	 <input type="submit" name="submit" value="Register"><br>
   <hr>

    <p>Already have an account? <a href="index.html">Sign in</a>.</p>
   
  </div>

 
</form>
    

</body>
</html>