<?php require"connection.php";
if(!isset($_SESSION['user'])){
	header("location:index.html");
	}
	
if($_SERVER['REQUEST_METHOD']=="POST"){
	$name=$_POST['name'];
	$user_id=$_SESSION['user'];
	$title=$_POST['title'];
	$rating=$_POST['rating'];
	
	$description=$_POST['description'];
	
	$feedbackQuery="INSERT INTO `feedback`(`user_id`,`name`, `title`, `rating`, `description`) VALUES ('$user_id','$name','$title','$rating','$description')";
	$result=mysqli_query($connection,$feedbackQuery);
	




header("location:feedback.php");






}
else{
	echo "something wrong";
}?>
