<?php 
require "connection.php";

if(!isset($_SESSION['user'])){ 
   header("location:index.html");
}
?>
<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
	$date=$_POST['date'];
	
	$hname=$_POST['hname'];
	$query="select * from `user_hall` where `date`='$date' and `hname`='$hname'";
	$result=mysqli_query($connection,$query);
		if($result){
			$num=mysqli_num_rows($result);
			echo "$num";
		if($num==0){
					
		$user_id=$_SESSION['user'];
		 $query="SELECT * FROM `users` WHERE `uid`='$user_id'";
		 $result=mysqli_query($connection,$query);
		
			$row=mysqli_fetch_array($result);
			$uname=$row['uname'];
			$phone=$row['phone'];
			$email=$row['email'];	
			 
			 $person=$_POST['person'];
			 
			 $request=$_POST['request'];
			 
			$purpose=$_POST['purpose'];
		 $quertinsert="INSERT INTO `user_hall`(`uid`, `hname`, `uname`, `person`, `purpose`, `date`,`phone`, `email`, `request`) VALUES ('$user_id','$hname','$uname','$person','$purpose','$date','$phone','$email','$request')";
		 $result=mysqli_query($connection, $quertinsert);
		
		?>
			<script type="text/javascript">
				alert("Congratulation your hall is booked");
				window.open('partyhall.php','_self');
				</script>
	<?php
		}
		else{
			?>
			<script type="text/javascript">
				alert("Sorry hall is already booked");
				window.open('partyhall.php','_self');
				</script>
	<?php
			
		}
		}
	else{
	die("worng input 1");
}
}
else{
	die("worng input 1");
}

?>