<?php require"connection.php"?>
<?php 
if(!isset($_SESSION['user'])) {

   header("location:index.html");

}
 else {

    $user_id = $_SESSION['user'];

}?>



<!DOCTYPE html>
<html lang="">
<head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>PartyHall</title>
     <link rel="stylesheet" href="CSS/style.css">
     <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
 <!-- Linking bootstrap this will give us ways to produce responsive designs with ease -->





    <!-- Latest compiled and minified CSS -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">



    <!-- Optional theme -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">



    <!-- Latest compiled and minified JavaScript -->

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<style>

*{
	padding:0px;
	margin:0px;
	
}

input[type=submit] {
  width: 80%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
label{
	margin-left:50px;
}

</style>







</head>

<body>
    <div style="background-image: url(img/party.jpg); width:100%;height:500px; background-repeat: no-repeat;background-position: center; background-size:100% 100%;">
          <div id="nav">
               <ul>
                 

              <li><a href="dashbord.php" style="text-decoration: none;">Home</a></li>
                    <li><a href="menu.php" style="text-decoration: none;">Menus</a></li>
					<li><a href="reservation.php" style="text-decoration: none;">Services</a></li>
                     
					<li><a href="booktable.php" style="text-decoration: none;">BookTable</a></li>
					<li><a href="partyhall.php" style="text-decoration: none;">PartyHall</a></li>
                    <li><a href="feedback.php" style="text-decoration: none;">Feedback</a></li>
<li><a href="contactus.php" style="text-decoration: none;">ContactUs</a></li>
                    <li><a href="logout.php" style="text-decoration: none;">LogOut</a></li>
               </ul>
          </div>
          
         <center>
	<div style="background:rgba(255,255,255,.5); width:30%;">
		
		<form action="hallbooking.php" method="POST">
		
		
		
		<<label for="hname"><b>Select Hall*</b></label>
		<select name="hname" required style="width:200px;">
					<?php $query="select `hname` from `partyhalls` where `status` = '1' ";
							$result=mysqli_query($connection,$query);
						if($result){
							while($row=mysqli_fetch_array($result)){?>
			
						<option value="<?php echo $row['hname'];?>"><?php echo $row['hname'];?></option>
			
						<?php } ?>
		
					<?php } else {?>
		
			<option value="No table available">No Hall Available</option>
		<?php } ?>
		
				</select><br><br>
		
		
	 <label for="person"><b>Person*</b></label>
		<input type="text" name="person" placeholder="Total person" required style="width:200px;"><br><br>
		<label for="purpose"><b>Purpose*</b></label>
		<input type="text" name="purpose" placeholder="Purpose*" required style="width:200px;"><br><br>
		
	
	
	
<label for="date"><b>Date*</b></label>
		
		<input type="date" name="date" required style="width:200px;" ><br><br>
			
		
		<label for="request"><b>Request</b></label>
							<textarea name="request" style="width:200px;" placeholder="Any Special Request.." >
					</textarea><br><br>
		<input type="submit" name="submit" value="BookHall" style=""><br><br>
		
	</div>
	</center><br><br><br>
	
	

        </div>

       

      <div class="col-12">

            <div class="panel panel-primary">

                <div class="panel-heading">

                    <h3>Halls</h3>

                </div>
<br>

                    <table class="table table-bordered">

                      <thead class="thead-dark" style="background: #2e6fa7; color: white;">

                        <tr>

                          <th scope="col">#</th>

                         

                          <th scope="col">Name</th>

                          <th scope="col">HName</th>
						  
						  <th scope="col">Person</th>
						  
                          <th scope="col">Purpose</th>

                          <th scope="col">Date</th>

                          <th scope="col">BookAt</th>
						  <th scope="col">Phone</th>
							<th scope="col">Email</th>
							<th scope="col">Request</th>
							
                        </tr>

                      </thead>

                      <tbody>

                        <?php $count = 0; ?>

                        <?php 
							 $tQuery ="SELECT  *  FROM `user_hall` where `uid`='$user_id';" ;
							$getResult = mysqli_query($connection,$tQuery);
								
							while($row=mysqli_fetch_array($getResult)){
							
								
							
							?>
							
                            <?php                             

                                $count++;
                             ?>

                            <tr>

                              <th scope="row"><?php echo $count; ?></th>
								<td><?php echo $row['uname']; ?></td>
                              <td><?php echo $row['hname']; ?></td>
							   
							    <td><?php echo $row['person']; ?></td>
								 <td><?php echo $row['purpose']; ?></td>
								  <td><?php echo $row['date']; ?></td>
								   <td><?php echo $row['booktime']; ?></td>
								   <td><?php echo $row['phone']; ?></td>
									<td><?php echo $row['email']; ?></td>
                              <td><?php echo substr($row['request'], 0,50); ?></td>

                             
                          

                               

                           

                               
								


                              
							  

                            </tr>

							<?php
							} 
							
							?>

                      </tbody>

                    </table>

                </div>

            </div>


   
	
	</div>
	
  </div>
</body>

</html>
     
 