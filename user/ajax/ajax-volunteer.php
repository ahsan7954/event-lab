<?php
     include('../include/conn.php');
 
     // ================= Volunteer Insert =================
     if(isset($_POST['u_fname'])){
         $u_fname =  mysqli_real_escape_string($conn,$_POST['u_fname']);
         $u_lname =  mysqli_real_escape_string($conn,$_POST['u_lname']);
         $u_email =  mysqli_real_escape_string($conn,$_POST['u_email']);
         $u_dob =  mysqli_real_escape_string($conn,$_POST['u_dob']);
         $u_gender =  mysqli_real_escape_string($conn,$_POST['u_gender']);
         $u_phone =  mysqli_real_escape_string($conn,$_POST['u_phone']);
         $u_city =  mysqli_real_escape_string($conn,$_POST['u_city']);
         $u_occasions =  mysqli_real_escape_string($conn,$_POST['u_occasions']);
         $u_exp =  mysqli_real_escape_string($conn,$_POST['u_exp']);
         $u_achieve =  mysqli_real_escape_string($conn,$_POST['u_achieve']);
         $u_skill =  mysqli_real_escape_string($conn,$_POST['u_skill']);
         $u_pswd =  mysqli_real_escape_string($conn,$_POST['u_pswd']);
         $u_cpswd =  mysqli_real_escape_string($conn,$_POST['u_cpswd']);
         $u_address =  mysqli_real_escape_string($conn,$_POST['u_address']);
         $u_enrolled_by =  "user";
         $u_enrolled_date =  mysqli_real_escape_string($conn,date("d-m-Y"));
         $u_role =  "Volunteer";
 
         if($u_fname==""||$u_lname==""||$u_email==""||$u_dob==""||$u_gender==""||$u_phone==""||$u_city==""||$u_occasions==""||$u_exp==""||$u_achieve==""||$u_skill==""||$u_pswd==""||$u_address==""){
             echo 0;
         }else{
            //  $rec = $obj->singleRecord("a_users",where:"`u_email`='$u_email' AND `u_role`='$u_role'");
                $rec="SELECT * FROM `a_users` WHERE `u_email`='$u_email' AND `u_role`='$u_role'";
                $res=mysqli_query($conn,$rec);
             if(mysqli_num_rows($res)>0){
                 echo 1;
             }else{
                 if($u_pswd!=$u_cpswd){
                     echo 2;
                 }else{
                    $sql = "INSERT INTO `a_users` (
                        `u_fname`,
                        `u_lname`,
                        `u_email`,
                        `u_dob`,
                        `u_gender`,
                        `u_phone`,
                        `u_city`,
                        `u_occasions`,
                        `u_exp`,
                        `u_achieve`,
                        `u_skill`,
                        `u_pswd`,
                        `u_address`,
                        `u_role`,
                        `u_enrolled_by`,
                        `u_enrolled_date`,
                        `u_status`
                    ) VALUES (
                        '$u_fname',
                        '$u_lname',
                        '$u_email',
                        '$u_dob',
                        '$u_gender',
                        '$u_phone',
                        '$u_city',
                        '$u_occasions',
                        '$u_exp',
                        '$u_achieve',
                        '$u_skill',
                        '$u_pswd',
                        '$u_address',
                        '$u_role',
                        '$u_enrolled_by',
                        '$u_enrolled_date',
                        'Pending'
                    )";
                    
                    $run=mysqli_query($conn,$sql);
                    //  $res= $obj->insert("a_users",array(
                    //          "u_fname"=>$u_fname, 
                    //          "u_lname"=>$u_lname, 
                    //          "u_email"=>$u_email, 
                    //          "u_dob"=>$u_dob, 
                    //          "u_gender"=>$u_gender, 
                    //          "u_phone"=>$u_phone, 
                    //          "u_city"=>$u_city, 
                    //          "u_occasions"=>$u_occasions, 
                    //          "u_exp"=>$u_exp, 
                    //          "u_achieve"=>$u_achieve, 
                    //          "u_skill"=>$u_skill, 
                    //          "u_pswd"=>$u_pswd, 
                    //          "u_address"=>$u_address, 
                    //          "u_enrolled_by"=>$u_enrolled_by,
                    //          "u_enrolled_date"=>$u_enrolled_date,
                    //          "u_role"=>$u_role,
                    //          "u_status"=>"Pending"
                    //      ));
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