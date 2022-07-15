<?php
  $message ='';
   require_once('logics/dbconnection.php');

   $queryStudent = mysqli_query($conn,
   "SELECT * FROM enrollment WHERE no='".$_GET['id']."'");
    while($fetchStudentData = mysqli_fetch_array($queryStudent))
    {
        $id = $fetchStudentData['no'];
        $fullname = $fetchStudentData['fullname'];
        $phonenumber = $fetchStudentData['phonenumber'];
        $email = $fetchStudentData['email'];
        $gender = $fetchStudentData['gender'];
        $course = $fetchStudentData['course'];
       
    }

    // updating user records
    require_once('logics/process-update.php');
     
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
                <div class="card">
                    <div class="card-header text-center ">
                      <div class="row">
                          <div class="col-lg-6">
                        <a href="students.php"><button type="button" class="float-left btn btn-outline-warning">
                          <i class="fa fa-arrow-left"></i>
                            Back
                         </button>
                        </a>
                        </div>
                        <h4 class="float-left text-center">Edit Student </h4>
                        <?php echo $message ?>
                        
                    </div>
                  </div>
                </div>
            </div>
        </div>
        
    </div>
  </div>
  
    <div class="main-content py-0">
    <div class="container-fluid text-center">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                <form action="edit-enrollment.php?id=<?php echo $id ?>" method="POST">
                <div class="row">
     
        <div class="mb-3 px-5 py-5 col-lg-6" >
           <label for="FullName"  class="form-label"><h6> Full Name:</h6></label>
           <input type="text" name="fullname" value="<?php echo $fullname ?>"class="joy shadow form-control" >
         
       </div>
         <div class="mb-3 px-5 py-5 col-lg-6">
           <label for="PhoneNumber" class="form-label"><h6>Phone Number: </h6></label>
           <input type="tel"  name ="phonenumber" class=" joy shadow form-control" value="<?php echo $phonenumber ?>" >
           
         </div>
    </div>

    <div class="row">
     <div class="mb-3 px-5 col-lg-6" >
         <label for="EmailAddress"  class="form-label"><h6>Email Address:</h6></label>
         <input type="email" name="email" class=" joy shadow form-control" value="<?php echo $email ?>" >
       </div>

       <div class="mb-3 px-5  col-lg-6">
           <label for="What'sYourGender"  class="form-label"><h6>What's Your Gender?</h6></label>
           
           <select class="joy shadow form-control" name="gender" >
            <option><?php echo $gender ?></option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
           </select>
         </div>
       <div class="mb-3 px-5 py-5 col-lg-12">
                    <label for="Course"  class="form-label"><h6>What's Your Preffered Course?</h6></label>
                      
                    <select  class="form-select joy shadow form-control" name="course">
                       <option value="<?php echo $course ?>"><?php echo $course ?></option>
                       <option value="Android App Development">Android App Development</option>
                       <option value="Web Design & Development">Web Design & Development</option>
                       <option value="Data Analysis">Data Analysis</option>
                       <option value="Cyber Security">Cyber Security</option>
                    </select>

               </div>
              </div>
             <div class="row">
                <div class="col-lg-12 px-5 mb-3 ">               
               <button class="btn btn-outline-primary" name="updateEnrollment">Update Records</button> 
         
        </div>
      </div>
     </div>
    </div>
   </div>
  </div>
 </div>
</div>
</form>


 
          
          
    <!-- scripts start here -->
      <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script> -->
      <?php require_once('includes/scripts.php')?>
    <!-- scripts ends here -->
</body>
</html>