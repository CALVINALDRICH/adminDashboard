<?php
//  1:Database connection
$message ='';
require_once('logics/dbconnection.php');
  $sqliFetchEnrolledStudent = mysqli_query($conn,
    "SELECT * FROM enrollment WHERE no='".$_GET['id']."'");
  while($fetchStudentData = mysqli_fetch_array($sqliFetchEnrolledStudent))
  {
    $fullname =$fetchStudentData['fullname'];
    $phonenumber =$fetchStudentData['phonenumber'];
    $email =$fetchStudentData['email'];
    $gender =$fetchStudentData['gender'];
    $course =$fetchStudentData['course'];
    $created_at =$fetchStudentData['created_at'];
  }
?>
<!DOCTYPE html>
<html>
    <!-- links start here -->
<?php require_once('includes/headers.php')?>
    <!--links end here  -->
<body>
<!-- All our code. write here   -->
     <!-- navbar starts here -->
     <?php require_once('includes/navbar.php')?>
     <!-- navbar ends here -->
 <!-- sidebar starts here -->
     <div class="sidebar">
       <?php require_once('includes/sidebar.php')?>

     </div>
 <!-- sidebar ends here  -->
   <div class="main-content pt-5">
    <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6">
            <div class="card ">
                <div class="card-header bg-dark text-white text-center">
                    <h4 class="card-title">Personal Information:</h4>
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item">Full Name : <span class="float-right badge badge-success"><?php echo $fullname ?></span></li>
                        <li class="list-group-item">Phone Number : <span class="float-right badge badge-warning"><?php echo $phonenumber ?></span></li>
                        <li class="list-group-item">Email : <span class="float-right badge badge-primary"><?php echo $email?></span></li>

                    </ul>
                </div>
                <div class="footer"></div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="card ">
                <div class="card-header bg-dark text-white text-center">
                    <h4 class="card-title">Other info:</h4>
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item">Gender : <span class="float-right badge badge-primary"><?php echo $gender ?></span></li>
                        <li class="list-group-item">Course : <span class="float-right badge badge-secondary"><?php echo $course ?></span></li>
                        <li class="list-group-item">Enrolled On : <span class="float-right badge badge-danger"><?php echo $created_at ?></span></li>

                    </ul>
                </div>
                <div class="footer"></div>
            </div>
          </div>
        </div>
    </div>
   </div>      
    <!-- scripts start here -->
      <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script> -->
      <?php require_once('includes/scripts.php')?>
    <!-- scripts ends here -->
</body>
</html>