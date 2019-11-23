<?php
//register user
?> 
<?php

    require "connection.php";


if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $name = $_POST['name'];
	
	$address=$_POST['address'];
    
	$phone=$_POST['phone'];
	
	$email = $_POST['email'];

    $password = $_POST['password'];

    $confirm_password = $_POST['confirm_password'];



    if (empty($name) or empty($email) or empty($password) or empty($confirm_password)) {

        die("All field's are compulsory.");

    }

    if ($password != $confirm_password) {

        die("Password did not matched.");

    }

    if (!stripos($email, '@')) {

        die("Invalid email address.");

    }

}

else {

    die('error');

}



$insertQuery = "INSERT INTO `users` (`uname`,`address`,`phone` ,`email`, `password`) VALUES ('$name','$address','$phone','$email','$password')";

if(mysqli_query($connection, $insertQuery)){



header("location: index.html");
}
else{
	die("not insert");
}
?>