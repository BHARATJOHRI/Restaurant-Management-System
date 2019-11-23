<?php


if(!isset($_SESSION['user'])){
	header("location:index.html");
	}


require "connection.php";


$fid = $_REQUEST["f_id"];



$userQuery =  "SELECT  *  FROM `feedback` WHERE `fid` = $fid;";

$getFileResult = mysqli_query($connection,$userQuery );


if($getFileResult){
		$feQuery = "DELETE FROM `feedback` WHERE `fid` ='$fid'";
		
		
  
  mysqli_query($connection,$feQuery);
	
header("location: feedback.php");
	
	
}
 else {

    die("ERROR: Only the user who created the file can delete it.");

}?>