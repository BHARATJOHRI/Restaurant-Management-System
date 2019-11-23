<?php




require "connection.php";

if (!isset($_SESSION['user'])) {

    header("location: ../index.html");

}


if(isset($_REQUEST["tnav"])){
$tid = $_REQUEST["tnav"];	

$tableQuery =  "SELECT  *  FROM `tables` WHERE `tid` = $tid;";
$result=mysqli_query($connection,$tableQuery);
if($result){
		$updateQuery = "update `tables` set `status`='0' WHERE `tid` ='$tid'";
		
		
  
  mysqli_query($connection,$updateQuery);
}
else {

    die("ERROR: Only the user who created the file can delete it.");

}
}
else if(isset($_REQUEST["tav"])){
$tid = $_REQUEST["tav"];	

$tableQuery =  "SELECT  *  FROM `tables` WHERE `tid` = $tid;";
$result=mysqli_query($connection,$tableQuery);
if($result){
		$updateQuery = "update `tables` set `status`='1' WHERE `tid` ='$tid'";
		
		
  
  mysqli_query($connection,$updateQuery);
}
else {

    die("ERROR: Only the user who created the file can delete it.");

}
}
else{
	$tid = $_REQUEST["tid"];
$tableQuery =  "SELECT  *  FROM `tables` WHERE `tid` = $tid;";

$result = mysqli_query($connection,$tableQuery );


if($result){
		$deleteQuery = "DELETE FROM `tables` WHERE `tid` ='$tid'";
		
		
  
  mysqli_query($connection,$deleteQuery);
}

}

	header("location: tables.php");
?>