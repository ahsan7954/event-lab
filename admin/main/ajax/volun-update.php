<?php
include("../include/conn.php");

   
        $uid =  mysqli_real_escape_string($conn,$_POST['u_id']);
        $u_fname =  mysqli_real_escape_string($conn,$_POST['u_fname']);
        $u_lname =  mysqli_real_escape_string($conn,$_POST['u_lname']);
        $u_email =  mysqli_real_escape_string($conn,$_POST['u_email']);
        $u_dob =  mysqli_real_escape_string($conn,$_POST['u_dob']);
        // $u_gender =  mysqli_real_escape_string($conn,$_POST['u_gender']);
        $u_phone =  mysqli_real_escape_string($conn,$_POST['u_phone']);
        $u_city =  mysqli_real_escape_string($conn,$_POST['u_city']);
        $u_exp =  mysqli_real_escape_string($conn,$_POST['u_exp']);
        $u_occasions =  mysqli_real_escape_string($conn,$_POST['u_occasions']);
        $u_achieve =  mysqli_real_escape_string($conn,$_POST['u_achieve']);
        $u_skill =  mysqli_real_escape_string($conn,$_POST['u_skill']);
        $u_pswd =  mysqli_real_escape_string($conn,$_POST['u_pswd']);
        // $u_cpswd =  mysqli_real_escape_string($conn,$_POST['u_cpswd']);
        $u_address =  mysqli_real_escape_string($conn,$_POST['u_address']);
        $u_role =  "Volunteer";
        $u_status =  mysqli_real_escape_string($conn,$_POST['u_status']);

    
        if($u_fname==""||$u_lname==""||$u_email==""||$u_dob==""||$u_phone==""||$u_city==""||$u_exp==""||$u_occasions==""||$u_achieve==""||$u_skill==""||$u_pswd==""||$u_address==""){
            echo 5;
        }else{
            $sql="UPDATE `a_users` SET `u_fname`='$u_fname',`u_lname`='$u_lname',`u_email`='$u_email',`u_dob`='$u_dob',`u_phone`='$u_phone',`u_city`='$u_city',`u_occasions`='$u_occasions',`u_exp`='$u_exp',`u_achieve`='$u_achieve',`u_skill`='$u_skill',`u_pswd`='$u_pswd',`u_address`='$u_address',`u_role`='$u_role',`u_status`='$u_status' WHERE `u_id`='$uid'";
            $res=mysqli_query($conn,$sql);
            
                    // $res= $obj->update("a_users",array(
                    //         "u_fname"=>$u_fname, 
                    //         "u_lname"=>$u_lname, 
                    //         "u_email"=>$u_email, 
                    //         "u_dob"=>$u_dob, 
                    //         "u_phone"=>$u_phone, 
                    //         "u_city"=>$u_city, 
                    //         "u_occasions"=>$u_occasions, 
                    //         "u_exp"=>$u_exp, 
                    //         "u_achieve"=>$u_achieve, 
                    //         "u_skill"=>$u_skill, 
                    //         "u_pswd"=>$u_pswd, 
                    //         "u_address"=>$u_address, 
                    //         "u_role"=>$u_role,
                    //         "u_status"=>"Pending"
                    //     ),where:"`u_id`='$uid'");
                        if($res){
                            echo 6;
                        }else{
                            echo 7;
                        }
            


        }
  


?>