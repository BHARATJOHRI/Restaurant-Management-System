<?php





require "connection.php";
if (!isset($_SESSION['user'])) {

    header("location: ../index.html");

}

$cid = $_REQUEST["cid"];



$fileQuery =  "SELECT  *  FROM `contactus` WHERE `cid` = $cid;";

$getFileResult = mysqli_query($connection,$fileQuery );


if($getFileResult){
		$fileDeleteQuery = "DELETE FROM `contactus` WHERE `cid` = $cid;";

		
		
  
  mysqli_query($connection,$fileDeleteQuery);
	
	header("location: contactus.php");
}
?>