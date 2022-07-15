<?php
    $message ='';
    require_once('logics/dbconnection.php');
  $sqliDeleteStudent = mysqli_query($conn, "DELETE FROM enrollment WHERE no='".$_GET['id']."'");
    if($sqliDeleteStudent)
    {
        echo "User Deleted successfully";
        header('location:students.php');
    }
    else
    {
        echo "Error occured.Please try again";
    }
 
?>