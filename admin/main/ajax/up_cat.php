<?php
include("../include/conn.php");
     
    $uid=mysqli_real_escape_string($conn,$_POST['cid']);
    $cname=mysqli_real_escape_string($conn,$_POST['cname']);
    $cdesc=mysqli_real_escape_string($conn,$_POST['cdesc']);
    $cdate=date("Y-m-d");

   $sql="UPDATE `category` SET `cname`='$cname',`cdesc`='$cdesc',`cdate`='$cdate'
   WHERE `cid`='$uid'";
    $run=mysqli_query($conn,$sql);
    if($run){
  
    echo 1;
    }else{
    
    echo 2;
    }
  
?>