<?php





require "connection.php";
if (!isset($_SESSION['user'])) {

    header("location: ../index.html");

}
if(isset($_REQUEST['utdid'])){
$utid = $_REQUEST["utdid"];



$fileQuery =  "SELECT  *  FROM `user_table` WHERE `utid` = $utid;";

$getFileResult = mysqli_query($connection,$fileQuery );


if($getFileResult){
		$fileDeleteQuery = "DELETE FROM `user_table` WHERE `utid` ='$utid'";
		
		
  
  mysqli_query($connection,$fileDeleteQuery);
	
	header("location: bookedtable.php");
	
	
}
 else {

    die("ERROR: Only the user who created the file can delete it.");

}
}else{
	
$utid = $_REQUEST["utcid"];



$fileQuery =  "SELECT  *  FROM `user_table` WHERE `utid` = $utid;";


$getFileResult = mysqli_query($connection,$fileQuery );


if($getFileResult){
	$row=mysqli_fetch_array($getFileResult);
	$typename=$row['tname'];
	$name=$row['uname'];
	$date=$row['date'];
	
	
	$report="INSERT INTO `report`(`type`, `typename`, `name`, `date`) VALUES ('table','$typename','$name','$date');";
	 mysqli_query($connection,$report);
	
		$fileDeleteQuery = "DELETE FROM `user_table` WHERE `utid` ='$utid'";
 mysqli_query($connection,$fileDeleteQuery);
	header("location: bookedtable.php");
}
 else {

    die("ERROR: Only the user who created the file can delete it.");

}
}
