<?php 
require_once('logics/dbconnection.php');

$sqli = mysqli_query($conn,"SELECT * FROM enrollment");
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
                <div class="card-header bg-dark text-white text-center">
				<span><i class="fa fa-group"></i></span>
						<span>Students</span>
                    
                    
                </div>
            </div>           
                <div class="card-body">
				<table class=" table table-stripped table-hover table-responsive"style="font-size:15px">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Full Name.</th>
                        <th>Phone Number.</th>
                        <th>Email.</th>
                        <th>Gender.</th>
                        <th>Course.</th>
                        <th>Enrolled On.</th>
                        <th>Action.</th>
                    </tr>
										
                </thead>
                <tbody style="font-size:12px" >
					<?php while($fetchEnrollmentRecord= mysqli_fetch_array($sqli))  { ?>
						<tr >
                        <td><?php echo $fetchEnrollmentRecord['no'] ?></td>
                        <td><?php echo $fetchEnrollmentRecord['fullname'] ?></td>
                        <td><?php echo $fetchEnrollmentRecord['phonenumber'] ?></td>
                        <td><?php echo $fetchEnrollmentRecord['email'] ?></td>
                        <td><?php echo $fetchEnrollmentRecord['gender'] ?></td>
                        <td><?php echo $fetchEnrollmentRecord['course'] ?></td>
                        <td><?php echo $fetchEnrollmentRecord['created_at'] ?></td>
                        <td >
							<a href="edit-enrollment.php?id=<?php echo $fetchEnrollmentRecord['no'] ?>"class="btn btn-primary btn-sm">
								<i class="fa fa-edit"></i>
							</a>
							<a href="view-enrollment.php?id=<?php echo $fetchEnrollmentRecord['no'] ?>"class="btn btn-info btn-sm" >
								<i class="fa fa-eye"></i>
							</a>
							<a href="delete-enrollment.php?id=<?php echo $fetchEnrollmentRecord['no']?>"class="btn btn-danger btn-sm">
								<i class="fa fa-trash"></i>
							</a>
                        </td>
                    </tr>
					<?php } ?>
                

                </tbody>
            </table>


                   
                </div>
               
             <div class="card-footer"></div>
            </div>
        </div>
    </div>
 <!-- scripts start here -->
	<?php require_once('includes/scripts.php')?>
 <!-- scripts end here -->
</body>
</html>