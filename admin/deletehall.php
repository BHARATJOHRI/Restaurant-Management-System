<?php




require "connection.php";
if (!isset($_SESSION['user'])) {

    header("location: ../index.html");

}
if(isset($_REQUEST['uhdid'])){
$uhid = $_REQUEST["uhdid"];



$fileQuery =   "SELECT  *  FROM `user_hall` WHERE `uhid` = $uhid;";;

$getFileResult = mysqli_query($connection,$fileQuery );


if($getFileResult){
	
		$fileDeleteQuery = "DELETE FROM `user_hall` WHERE `uhid` ='$uhid'";

  mysqli_query($connection,$fileDeleteQuery);
	
	header("location: bookedhall.php");
	
	
}
 else {

    die("ERROR: Only the user who created the file can delete it.");

}
}else{
	
$uhid = $_REQUEST["uhcid"];



$fileQuery =  "SELECT  *  FROM `user_hall` WHERE `uhid` = $uhid;";

$getFileResult = mysqli_query($connection,$fileQuery );


if($getFileResult){
	$row=mysqli_fetch_array($getFileResult);
	$typename=$row['hname'];
	$name=$row['uname'];
	$date=$row['date'];
	
	
	$report="INSERT INTO `report`(`type`, `typename`, `name`, `date`) VALUES ('hall','$typename','$name','$date');";
	 mysqli_query($connection,$report);

		$fileDeleteQuery = "DELETE FROM `user_hall` WHERE `uhid` ='$uhid'";
		
		
		
  
  mysqli_query($connection,$fileDeleteQuery);
	
	header("location: bookedhall.php");
	
	
}
 else {

    die("ERROR: Only the user who created the file can delete it.");

}
}
