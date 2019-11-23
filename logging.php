<?php
require "connection.php";



if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $email = trim($_POST['email1']);

    $password = trim($_POST['password1']);

} else {

    die('not getted');

}


$getQuery = "SELECT * FROM `users` where `email` = '$email' and `password` = '$password' ;";

$result = mysqli_query($connection, $getQuery);



$userData = mysqli_fetch_array($result);
if (!$userData) {
header("location:login.php");
	}


$user_id = $userData[0];
$userType=$userData['userType'];
$_SESSION['user'] = $user_id;
echo $userType;
if($userType ==1){
header("location:admin/index.php");	
}
else{

header("location: dashbord.php");
}
?>