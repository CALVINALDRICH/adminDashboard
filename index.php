<?php 
     require_once('logics/dbconnection.php');
    //  counting total number of students
     $queryEnrolledStudents = mysqli_query($conn, "SELECT * FROM enrollment");
     $countAllStudents = mysqli_num_rows($queryEnrolledStudents);

    //  count gender
     $queryEnrolledFemale = mysqli_query($conn, "SELECT * FROM enrollment WHERE gender = 'Female'");
     $countAllFemale = mysqli_num_rows($queryEnrolledFemale);
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
   <div class="main-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card-header bg-dark text-white text-center">
                    <span>Top content</span>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card-header bg-dark text-white text-center">
                    <span>Students</span>
                </div>
                <div class="card-body">
                    <span><i class="fa fa-group fa-3x"></i></span>
                    <span class="float-right badge bg-warning rounded-pill "><?php echo $countAllStudents ?></span>
                </div>
                
                <div class="card-footer"></div>
            </div>  
             <div class="col-lg-3">
                <div class="card-header bg-dark text-white text-center">
                    <span>Available courses</span>
                </div>
                <div class="card-body">
                    <span><i class="fa fa-folder-open fa-3x"></i></span>
                    <span class="float-right badge bg-info rounded-pill"><?php echo $countAllFemale ?></span>
                </div>
                
                <div class="card-footer"></div>
            </div>
            <div class="col-lg-3">
                <div class="card-header bg-dark text-white text-center">
                    <span>Campuses</span>
                </div>
                <div class="card-body">
                    <span><i class="fa fa-graduation-cap fa-3x"></i></span>
                    <span class="float-right">00</span>
                </div>
                
                <div class="card-footer"></div>
            </div>
            <div class="col-lg-3">
                <div class="card-header bg-dark text-white text-center">
                    <span >Top content</span>
                </div>
                <div class="card-body">
                    <span><i class="fa fa-user fa-3x"></i></span>
                <span class="float-right">00</span>
                </div>
               
                <div class="card-footer"></div>

            </div>


            <div class="col-lg-12">
                <div class="card-header bg-dark text-white text-center">
                    <span>Students Analysis</span>
                 </div>
                <div class="card-body">
                    <span><i class="fa fa-line-chart fa-3x"></i></span>
                <span class="float-right"></span>
                </div>
               
                <div class="card-footer"></div>
            </div>
        </div>
    </div>
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