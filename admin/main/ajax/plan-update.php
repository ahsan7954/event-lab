<?php
include("../include/conn.php");
      // ================= Planner Update =================
        $uid =  mysqli_real_escape_string($conn,$_POST['u_id']);
        $u_fname =  mysqli_real_escape_string($conn,$_POST['u_fname']);
        $u_lname =  mysqli_real_escape_string($conn,$_POST['u_lname']);
        $u_email =  mysqli_real_escape_string($conn,$_POST['u_email']);
        $u_dob =  mysqli_real_escape_string($conn,$_POST['u_dob']);
        // $u_gender =  mysqli_real_escape_string($conn,$_POST['u_gender']);
        $u_phone =  mysqli_real_escape_string($conn,$_POST['u_phone']);
        $u_city =  mysqli_real_escape_string($conn,$_POST['u_city']);
        $u_exp =  mysqli_real_escape_string($conn,$_POST['u_exp']);
        $u_achieve =  mysqli_real_escape_string($conn,$_POST['u_achieve']);
        $u_skill =  mysqli_real_escape_string($conn,$_POST['u_skill']);
        $u_partners =  mysqli_real_escape_string($conn,$_POST['u_partners']);
        $u_pswd =  mysqli_real_escape_string($conn,$_POST['u_pswd']);
        // $u_cpswd =  mysqli_real_escape_string($conn,$_POST['u_cpswd']);
        $u_address =  mysqli_real_escape_string($conn,$_POST['u_address']);
        $u_role =  "Planner";
        $u_status =  mysqli_real_escape_string($conn,$_POST['u_status']);

    
        if($u_fname==""||$u_lname==""||$u_email==""||$u_dob==""||$u_phone==""||$u_city==""||$u_exp==""||$u_achieve==""||$u_skill==""||$u_partners==""||$u_pswd==""||$u_address==""){
            echo 5;
        }else{
            $sql="UPDATE `a_users` SET `u_fname`='$u_fname',`u_lname`='$u_lname',`u_email`='$u_email',`u_dob`='$u_dob',`u_phone`='$u_phone',`u_city`='$u_city',`u_exp`='$u_exp',`u_achieve`='$u_achieve',`u_skill`='$u_skill',`u_partners`='$u_partners',`u_pswd`='$u_pswd',`u_address`='$u_address',`u_role`='$u_role',`u_status`='$u_status' WHERE `u_id`='$uid'";
            $run=mysqli_query($conn,$sql);
                        if($run){
                            echo 6;
                        }else{
                            echo 7;
                        }
            }
           



?>