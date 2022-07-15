<?php
$response = '';
$server="localhost";
$username="root";
$password="";
$database="zalego";

$conn = mysqli_connect($server,$username,$password,$database);

$sqli = mysqli_query($conn,"SELECT * FROM enrollment");
    

while($fetchRecords = mysqli_fetch_array($sqli))
        {
            echo $fetchRecords['fullname'].' '.$fetchRecords['phonenumber'].' '.$fetchRecords['email'].' '.$fetchRecords['gender'].' '.$fetchRecords['course'].' '.$fetchRecords['created_at'].'<br>';
        }

?>