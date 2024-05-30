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
        $u_order_design =  mysqli_real_escape_string($conn,$_POST['u_order_design']);
        $u_description =  mysqli_real_escape_string($conn,$_POST['u_description']);
        $u_company =  mysqli_real_escape_string($conn,$_POST['u_company']);
        $u_prefer_color =  mysqli_real_escape_string($conn,$_POST['u_prefer_color']);
        $u_tools =  mysqli_real_escape_string($conn,$_POST['u_tools']);
        $u_written_content =  mysqli_real_escape_string($conn,$_POST['u_written_content']);
        $u_designs_no =  mysqli_real_escape_string($conn,$_POST['u_designs_no']);
        $u_pswd =  mysqli_real_escape_string($conn,$_POST['u_pswd']);
        // $u_cpswd =  mysqli_real_escape_string($conn,$_POST['u_cpswd']);
        $u_address =  mysqli_real_escape_string($conn,$_POST['u_address']);
        $u_role =  "Designer";
        $u_status =  mysqli_real_escape_string($conn,$_POST['u_status']);

        if($u_fname==""||$u_lname==""||$u_email==""||$u_dob==""||$u_phone==""||$u_city==""||$u_exp==""||$u_order_design==""||$u_description==""||$u_company==""||$u_prefer_color==""||$u_tools==""||$u_written_content==""||$u_designs_no==""||$u_pswd==""||$u_address==""){
            echo 5;
        }else{
            $sql="UPDATE `a_users` SET `u_fname`='$u_fname',`u_lname`='$u_lname',`u_email`='$u_email',`u_dob`='$u_dob',`u_phone`='$u_phone',`u_city`='$u_city',`u_exp`='$u_exp',`u_order_design`='$u_order_design',`u_description`='$u_description',`u_company`='$u_company',`u_prefer_color`='$u_prefer_color',`u_tools`='$u_tools',`u_written_content`='$u_written_content',`u_designs_no`='$u_designs_no',`u_pswd`='$u_pswd',`u_address`='$u_address',`u_role`='$u_role',`u_status`='$u_status' WHERE `u_id`='$uid'";
            $run=mysqli_query($conn,$sql);
                    // $res= $obj->update("a_users",array(
                    //         "u_fname"=>$u_fname, 
                    //         "u_lname"=>$u_lname, 
                    //         "u_email"=>$u_email, 
                    //         "u_dob"=>$u_dob, 
                    //         "u_gender"=>$u_gender, 
                    //         "u_phone"=>$u_phone, 
                    //         "u_city"=>$u_city, 
                    //         "u_exp"=>$u_exp, 
                    //         "u_order_design"=>$u_order_design, 
                    //         "u_description"=>$u_description, 
                    //         "u_company"=>$u_company, 
                    //         "u_prefer_color"=>$u_prefer_color, 
                    //         "u_tools"=>$u_tools, 
                    //         "u_written_content"=>$u_written_content, 
                    //         "u_designs_no"=>$u_designs_no, 
                    //         "u_pswd"=>$u_pswd, 
                    //         "u_address"=>$u_address, 
                    //         "u_role"=>$u_role,
                    //         "u_status"=>"Pending"
                    //     ),where:"`u_id`='$uid'");
                        if($run){
                            echo 6;
                        }else{
                            echo 7;
                        }
            }
            
    

?>