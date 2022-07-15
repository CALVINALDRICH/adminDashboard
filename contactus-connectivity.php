<?php
 require_once('logics/dbconnection.php');
$fetchMessage = mysqli_query($conn,
"SELECT * FROM contactus WHERE no='".$_GET['id']."'");
while($studentMessage = mysqli_fetch_array($fetchMessage))
{
   $id =$studentMessage['no']; 
   $firstname =$studentMessage['firstname'];
   $lastname =$studentMessage['lastname'];
   $email =$studentMessage['email'];
   $phonenumber =$studentMessage['phonenumber'];
   $message =$studentMessage['message'];
   $created_at =$studentMessage['created_at'];
}
?>
