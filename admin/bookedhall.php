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

    <title>BookedHall</title>



    

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
}</style>

</head>

<body><div style="">
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
          
    <div class="container" style="margin-top: 50px;width:100%;" >

      <div class="col-12">

            <div class="panel panel-primary">

                <div class="panel-heading">

                    <h3>BookedHalls</h3>

                </div>

                <div style="padding: 10px;">

                    <br>

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
							<th scope="col">Option</th>
                        </tr>

                      </thead>

                      <tbody>

                        <?php $count = 0; ?>

                        <?php 
							 $tQuery ="SELECT  *  FROM `user_hall`;" ;
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
                              <td><?php echo substr($row['request'], 0,30); ?></td>

                             
                              <td>

                               

                           

                                  
								
                                  

                                    <a  href="deletehall.php?uhdid=<?php echo $row['uhid']; ?>" ><button class="btn btn-sm btn-danger">Cancel</button></a> 
									<a  href="deletehall.php?uhcid=<?php echo $row['uhid']; ?>" ><button class="btn btn-sm btn-primary">Visited</button></a>
                              


                              
							  
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
</div>
    <!-- End Container     -->
</body>
</html>
