<?php 
include("../include/conn.php");
    $del=$_GET['mydel'];

$SQL2="DELETE FROM `bookings` WHERE `b_id`='$del'";
$run2=mysqli_query($conn,$SQL2);
if($run2){
        echo 1;
}else{
            echo 2;
     };
 

?>