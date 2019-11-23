<?php 
require "connection.php";
if(!isset($_SESSION['user'])){
	header("location:../index.html");
	}
?>



<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8">

    <title>Feedback</title>
	<link rel="stylesheet" href="CSS/style.css">
<style>

</style>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src='https://kit.fontawesome.com/a076d05399.js'></script>

</head>

<body>
    <div style="background-image: url(); width:100%;height:600px; background-repeat: no-repeat; background-size:100% 100%;">
          <div id="nav">
               <ul>
                    <li><a href="index.php" style="text-decoration:none;">Home</a></li>
                    <li><a href="tables.php" style="text-decoration:none;">Tables</a></li>
					<li><a href="halls.php" style="text-decoration:none;">Halls</a></li>
                    <li><a href="feedback.php" style="text-decoration:none;">Feedback</a></li>
					<li><a href="bookedtable.php" style="text-decoration:none;">BookedTables</a></li>
					<li><a href="bookedhall.php" style="text-decoration:none;">BookedHalls</a></li>
					<li><a href="contactus.php" style="text-decoration:none;">Contact</a></li>
					<li><a href="report.php" style="text-decoration:none;">Report</a></li>
					<li><a href="logout.php" style="text-decoration:none;">LogOut</a></li>
                    
               </ul>
          </div>



<br><br>
<hr>
<div class="display" style="margin-left:5px;">
<?php 
$displayQuery="select * from `feedback`;";
$result=mysqli_query($connection,$displayQuery);
if($result){
	while($row=mysqli_fetch_array($result)){
		?><div class="rating" style="width:50px;text-align:center;color:white;background-color:green;"><?php echo $row['rating'];?>&nbsp;<i class='fas fa-star' style='color:white;'></i></div>
		<h3 style="margin-left:100px;"><?php echo $row['title'];?></h3>
		<p><?php echo $row['description'];?></p>
		By &nbsp;<?php echo $row['name'];?>
		
		
                                  

                                    <a  href="deletefeedback.php?f_id=<?php echo $row['fid'];?>" ><button class="btn btn-sm btn-danger">Delete</button></a> 

                            
		<hr>
		
		
		<?php
		
	}
	
}
else{
	die("error");
	
}
?>

</div>
</div>
</body>
</html>