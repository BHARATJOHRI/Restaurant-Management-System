<?php




require "connection.php";

if (!isset($_SESSION['user'])) {

    header("location: ../index.html");

}


if(isset($_REQUEST["hnav"])){
$hid = $_REQUEST["hnav"];	

$tableQuery =  "SELECT  *  FROM `partyhalls` WHERE `hid` = $hid;";
$result=mysqli_query($connection,$tableQuery);
if($result){
		$updateQuery = "update `partyhalls` set `status`='0' WHERE `hid` ='$hid'";
		
		
  
  mysqli_query($connection,$updateQuery);
}
else {

    die("ERROR: Only the user who created the file can delete it.");

}
}
else if(isset($_REQUEST["hav"])){
$hid = $_REQUEST["hav"];	

$tableQuery =  "SELECT  *  FROM `partyhalls` WHERE `hid` = $hid;";
$result=mysqli_query($connection,$tableQuery);
if($result){
		$updateQuery = "update `partyhalls` set `status`='1' WHERE `hid` ='$hid'";
		
		
  
  mysqli_query($connection,$updateQuery);
}
else {

    die("ERROR: Only the user who created the file can delete it.");

}
}
else{
	$hid = $_REQUEST["hid"];
$tableQuery =  "SELECT  *  FROM `partyhalls` WHERE `hid` = $hid;";

$result = mysqli_query($connection,$tableQuery );


if($result){
		$deleteQuery = "DELETE FROM `partyhalls` WHERE `hid` ='$hid'";
		
		
  
  mysqli_query($connection,$deleteQuery);
}

}

	header("location: halls.php");
?>