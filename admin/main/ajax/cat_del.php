<?php 
include("../include/conn.php");
    $del=$_GET['mydel'];

$SQL2="DELETE FROM `category` WHERE `cid`='$del'";
$run2=mysqli_query($conn,$SQL2);
if($run2){
        echo 1;
}else{
            echo 2;
     };
 

?>