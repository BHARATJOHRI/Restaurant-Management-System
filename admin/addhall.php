<?php 
require "connection.php";

if(!isset($_SESSION['user'])){ 
   header("location:../index.html");
}
?>
<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
	$hname=$_POST['hname'];
	$status=$_POST['status'];
	
	
			 
		 
		 $queryInsert="INSERT INTO `partyhalls`(`hname`,`status`) VALUES ('$hname','$status')";
		 $result=mysqli_query($connection, $queryInsert);

		
		header("location:halls.php");
		}
		
		else{
			
	
	
	
	die("worng input 1");
}
?>