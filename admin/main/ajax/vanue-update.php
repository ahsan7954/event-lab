<?php
include("../include/conn.php");
    $uid = mysqli_real_escape_string($conn,$_POST['v_id']);
    $v_name = mysqli_real_escape_string($conn,$_POST['v_name']);
    // $v_price =  mysqli_real_escape_string($conn,$_POST['v_price']);
    $v_desc =  mysqli_real_escape_string($conn,$_POST['v_desc']);
    // $v_status =  mysqli_real_escape_string($conn,$_POST['v_status']);
    $v_date = mysqli_real_escape_string($conn,date("Y-m-d"));


    if($v_name==""||$v_desc==""){
        echo 0;
    }else{
        $sql="UPDATE `vanue` SET `v_name`='$v_name',`v_desc`='$v_desc',`v_date`='$v_date' WHERE `V_id`='$uid'";
        $run=mysqli_query($conn,$sql);
            if($run){
                echo 1;
            }else{
                echo 2;
            }
        }
        
   


?>