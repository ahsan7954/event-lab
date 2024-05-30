<?php
    require_once('../include/conn.php');
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
        $u_role =  "Volunteer";
        $u_status =  mysqli_real_escape_string($conn,$_POST['u_status']);


        if($u_fname==""||$u_lname==""||$u_email==""||$u_dob==""||$u_gender==""||$u_phone==""||$u_city==""||$u_occasions==""||$u_exp==""||$u_achieve==""||$u_skill==""||$u_pswd==""||$u_address==""){
            echo 0;
        }else{
            $res="SELECT * FROM `a_users` WHERE `u_email`='$u_email' AND `u_role`='$u_role'";
            $rec=mysqli_query($conn,$res);
            if(mysqli_num_rows($rec)>0){
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
                        '$u_status'
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