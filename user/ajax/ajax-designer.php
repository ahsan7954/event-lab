<?php
 include('../include/conn.php');
 
     // ================= designer Insert =================
     if(isset($_POST['u_fname'])){
         $u_fname =  mysqli_real_escape_string($conn,$_POST['u_fname']);
         $u_lname =  mysqli_real_escape_string($conn,$_POST['u_lname']);
         $u_email =  mysqli_real_escape_string($conn,$_POST['u_email']);
         $u_dob =  mysqli_real_escape_string($conn,$_POST['u_dob']);
         $u_gender =  mysqli_real_escape_string($conn,$_POST['u_gender']);
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
         $u_cpswd =  mysqli_real_escape_string($conn,$_POST['u_cpswd']);
         $u_address =  mysqli_real_escape_string($conn,$_POST['u_address']);
         $u_enrolled_by =  "user";
         $u_enrolled_date =  mysqli_real_escape_string($conn,date("d-m-Y"));
         $u_role =  "Designer";
     
         if($u_fname==""||$u_lname==""||$u_email==""||$u_dob==""||$u_gender==""||$u_phone==""||$u_city==""||$u_exp==""||$u_order_design==""||$u_description==""||$u_company==""||$u_prefer_color==""||$u_tools==""||$u_written_content==""||$u_designs_no==""||$u_pswd==""||$u_address==""){
             echo 0;
         }else{
            $rec="SELECT * FROM `a_users` WHERE `u_email`='$u_email' AND `u_role`='$u_role'";
            $res=mysqli_query($conn,$rec);
             if(mysqli_num_rows($res)>0){
                 echo 1;
             }else{
                 if($u_pswd!=$u_cpswd){
                     echo 2;
                 }else{
                    $sql="INSERT INTO `a_users` (
                        `u_fname`, 
                        `u_lname`, 
                        `u_email`,
                        `u_dob`, 
                        `u_gender`,
                        `u_phone`,
                        `u_city`,
                        `u_exp`,
                        `u_order_design`,
                        `u_description`,
                        `u_company`,
                        `u_prefer_color`,
                        `u_tools`,
                        `u_written_content`,
                        `u_designs_no`,
                        `u_pswd`,
                        `u_address`,
                        `u_enrolled_by`,
                        `u_enrolled_date`,
                        `u_role`,
                        `u_status`
                         ) VALUES (
                        '$u_fname',
                        '$u_lname',
                        '$u_email',
                        '$u_dob',
                        '$u_gender',
                        '$u_phone',
                        '$u_city',
                        '$u_exp',
                        '$u_order_design',
                        '$u_description',
                        '$u_company',
                        '$u_prefer_color',
                        '$u_tools',
                        '$u_written_content',
                        '$u_designs_no',
                        '$u_pswd',
                        '$u_address',
                        '$u_enrolled_by',
                        '$u_enrolled_date',
                        '$u_role',
                        'Pending'
                        )";
                    $run=mysqli_query($conn,$sql);
                     if($run){
                         echo 3;
                     }else{
                         echo 4;
                     }
                 }
             }
         }
     }
 
?>