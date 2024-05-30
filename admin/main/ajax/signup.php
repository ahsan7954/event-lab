<?php
   include('../include/conn.php');


    // ================= Insert =================
    if(isset($_POST['aname'])){
        $aname =  mysqli_real_escape_string($conn,$_POST['aname']);
        $alname =  mysqli_real_escape_string($conn,$_POST['alname']);
        $aemail =  mysqli_real_escape_string($conn,$_POST['aemail']);
        $apswd =  mysqli_real_escape_string($conn,$_POST['apswd']);
        $cpswd =  mysqli_real_escape_string($conn,$_POST['cpswd']);
        
        if($aname==""||$alname==""||$aemail==""||$apswd==""){
            echo 0;
        }else{
            $res ="SELECT * FROM `admin` WHERE `aemail`='$aemail'";
            $srun=mysqli_query($conn,$res);

            if(mysqli_num_rows($srun)>0){
                echo 1;
                // already exist

            }else{
                if($apswd!=$cpswd){
                    echo 2;
                }else{
                    $sql="INSERT INTO `admin`(
                        `aname`,
                        `alname`,
                        `aemail`,
                        `apswd`,
                        `cpswd`
                        ) VALUES (
                        '$aname',
                        '$alname',
                        '$aemail',
                        '$apswd',
                        '$cpswd'
                        )";
                        // echo $sql;
                    
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