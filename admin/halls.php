<?php



require "connection.php";


if (!isset($_SESSION['user'])) {

    header("location: ../index.html");

} else {

    $user_id = $_SESSION['user'];

}

?>

<!DOCTYPE html>

<html lang="en">

<head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Halls</title>
    
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
		 margin:0px;
		 padding:0px;
	 }
#nav{
     list-style: none;
     width: 100%;
     height: 80px;
     text-align-last:center;
     background-color:darkblue;
}
ul li{
     display:inline-flex; 
}
ul li a{
     text-decoration: none;
     padding: 10px;
     margin: 15px;
     font-size: 24px;
     color: white;
}
ul li a:hover{
     background-color:peru;
     color: white;
     font-weight:900;
}
td{
	width:300px;
}
label{
	margin-left:10px;
}
</style>






</head>

<body>

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
          









<form action="addhall.php" method="post">
  <div class="container1" style="width:700px;height:120px;border:2px solid black;margin-left:25%;">
    <div style="color:red;text-align:center;" ><h1>Add Hall</h1>
    </div>

    <label for="hname"><b>Hall Name</b></label>
    <input type="text" placeholder="Enter Hall Name" name="hname" required>

    <label for="status"><b>Status</b></label>
    <select name="status" required>
	
  <option value="0">Not Available</option>
  <option value="1">Available</option>
			</select>

   

    
    <button type="submit" class="btn btn-sm btn-primary">ADD</button>
  </div>
</form>
    <div class="container" style="margin-top: 50px;">




      <div class="col-12">

            <div class="panel panel-primary">

                <div class="panel-heading">

                    <h3>HallsDetails</h3>

                </div>

                <div style="padding: 10px;">

                    <br>

                    <table class="table table-bordered">

                      <thead class="thead-dark" style="background: #2e6fa7; color: white;">

                        <tr>

                          <th scope="col">#</th>

                         

                          <th scope="col">Name</th>

                          <th scope="col">Status</th>
						  
							<th scope="col">Option</th>
                        </tr>

                      </thead>

                      <tbody>

                        <?php $count = 0; ?>

                        <?php 
							 $tQuery ="SELECT  *  FROM `partyhalls`;" ;
							$getResult = mysqli_query($connection,$tQuery);
								
							while($row=mysqli_fetch_array($getResult)){
							
								
							
							?>
							
                            <?php                             

                                $count++;
                             ?>

                            <tr>

                              <th scope="row"><?php echo $count; ?></th>

                              <td><?php echo $row['hname']; ?></td>
							  
							  
							   <td><?php if($row['status']==0){
								   echo "Not Available";
							   }
								   else{
									   echo "Available";
								   }
								   
								   ?></td>
							   

                             
                              <td>

                               

                           

                               
                                  
								 <a  href="halloption.php?hnav=<?php echo $row['hid']; ?>" ><button class="btn btn-sm btn-danger">Not Available</button></a>
                                <a  href="halloption.php?hav=<?php echo $row['hid']; ?>" ><button class="btn btn-sm btn-primary">Available</button></a> 
								<a  href="halloption.php?hid=<?php echo $row['hid']; ?>" ><button class="btn btn-sm btn-danger">Delete</button></a> 
								


                              
							  
</td>
                            </tr>

							<?php
							} 
							
							?>

                      </tbody>

                    </table>

                </div>

            </div>

        </div>

        <!-- adding footer -->

        <footer style="margin-top: 100px;">

            

        </footer>

        <!-- footer end -->

    </div> 

    <!-- End Container     -->
	 
    
</body>
</html>
