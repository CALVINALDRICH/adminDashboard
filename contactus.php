<?php
  $message ='';
   require_once('logics/dbconnection.php');

   $fetchMessage = mysqli_query($conn,"SELECT * FROM contactus");
  
?>
<!DOCTYPE html>
<html>
  <!-- links start here -->
  <?php require_once('includes/headers.php')?>
    <!--links end here  -->
<body>
	<!-- All the code starts here -->

	 <!-- navbar starts here -->
   
     <?php require_once('includes/navbar.php')?>
     <!-- navbar ends here -->
 <!-- sidebar starts here -->
     <div class="sidebar">
       <?php require_once('includes/sidebar.php')?>

     </div>
 <!-- sidebar ends here  -->
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header text-center">
                            <span> <i class="fa fa-envelope"></i></span>
                            <span class=" text-center">Messages </span>
                        </div>
                        <div class="card-body">
                        <table class=" table table-stripped table-hover table-responsive"style="font-size:15px">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>First Name.</th>
                        <th>Last Name.</th>
                        <th>Email.</th>
                        <th>Phone Number.</th>
                        <th>Message.</th>
                        <th>Enrolled On.</th>
                        
                    </tr>
										
                </thead>
                <tbody >
					<?php while($studentMessage= mysqli_fetch_array($fetchMessage))  { ?>
						<tr >
                        <td><?php echo $studentMessage['no'] ?></td>
                        <td><?php echo $studentMessage['firstname'] ?></td>
                        <td><?php echo $studentMessage['lastname'] ?></td>
                        <td><?php echo $studentMessage['email'] ?></td>
                        <td><?php echo $studentMessage['phonenumber'] ?></td>
                        <td><?php echo $studentMessage['message'] ?></td>
                        <td><?php echo $studentMessage['created_at'] ?></td>
                    </tr>
					<?php } ?>
                

                </tbody>
            </table>


                        </div>
                        <div class="card-footer"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        
	
    
	   
	  
 <!-- scripts start here -->
	<?php require_once('includes/scripts.php')?>
 <!-- scripts end here -->
</body>
</html>