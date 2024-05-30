<?php
    require_once('../../admin/main/include/conn.php');
    session_start();
    
    if(isset($_POST['aemail'])){
        $aemail = mysqli_real_escape_string($conn,$_POST['aemail']);
        $apswd = mysqli_real_escape_string($conn,$_POST['apswd']);

        if($aemail==""||$apswd==""){
            echo 8;
        }
      
            else{
             
                $esql="SELECT * FROM `a_users` WHERE `u_email`='$aemail' AND `u_pswd`='$apswd'";
                $erun=mysqli_query($conn,$esql);
                if(mysqli_num_rows($erun)){
                    $gsql="SELECT * FROM `a_users` WHERE `u_email`='$aemail' AND `u_pswd`='$apswd'";
                    // echo $gsql;
                    $grun=mysqli_query($conn,$gsql);
                    $gfet=mysqli_fetch_assoc($grun);
                    if(isset($gfet['u_role'])){
                        $_SESSION['email']=$_POST['aemail'];
                        $_SESSION['role']=$gfet['u_role'];
                        echo 9;
                    }else{
                        echo 11;
                    }
                  
                    // echo "Email and Password Insereted";
                }
                else{
                    echo 10;
                    // echo "Email and Password Not Insereted";
                }
            }
        }
    // }


?>  