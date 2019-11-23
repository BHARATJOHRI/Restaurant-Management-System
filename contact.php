<?php require"connection.php";
if(!isset($_SESSION['user'])){
	header("location:index.html");
	}
	
if($_SERVER['REQUEST_METHOD']=="POST"){
	$name=$_POST['name'];
	$user_id=$_SESSION['user'];
	$email=$_POST['email'];
	$subject=$_POST['subject'];
	
	$message=$_POST['message'];
	
	$contactQuery="INSERT INTO `contactus`(`name`, `email`, `user_id`, `subject`, `message`) VALUES ('$name','$email','$user_id','$subject','$message')";
	$result=mysqli_query($connection,$contactQuery);
	



header("location:contactus.php");






}
else{
	echo "something wrong";
}?>
