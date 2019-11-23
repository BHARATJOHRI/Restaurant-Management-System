<?php 
require "connection.php";

if(!isset($_SESSION['user'])){ 
   header("location:../index.html");
}
?>
<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
	$tname=$_POST['tname'];
	$status=$_POST['status'];
	
	
			 
		 
		 $queryInsert="INSERT INTO `tables`(`tname`,`status`) VALUES ('$tname','$status')";
		 $result=mysqli_query($connection, $queryInsert);

		
		header("location:tables.php");
		}
		
		else{
			
	
	
	
	die("worng input 1");
}
?>