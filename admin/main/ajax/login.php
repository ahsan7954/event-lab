<?php
include('../include/conn.php');
    session_start();
    if(isset($_POST['aemail'])){
        // $_SESSION['email']=$_POST['email'];
        // $pemail=$_SESSION['email'];
        $pemail=mysqli_real_escape_string($conn,$_POST['aemail']);
        $mypass=mysqli_real_escape_string($conn,$_POST['apswd']);
        if(($pemail=="")||($mypass=="")){
            echo 0;
            // echo "Please fill email and password";
        }else{
            $esql="SELECT * FROM `admin` WHERE `aemail`='$pemail' AND `apswd`='$mypass'";
            $erun=mysqli_query($conn,$esql);
            if(mysqli_num_rows($erun)){
                $gsql="SELECT * FROM `admin` WHERE `aemail`='$pemail' AND `apswd`='$mypass'";
                $grun=mysqli_query($conn,$gsql);
                $gfet=mysqli_fetch_assoc($grun);
                if(isset($gfet['aemail'])){
                    $_SESSION['email']=$_POST['aemail'];
                    // $_SESSION['role']=$gfet['role'];
                    echo 2;
                }else{
                    echo 1;
                }
              
                // echo "Email and Password Insereted";
            }
            else{
                echo 3;
                // echo "Email and Password Not Insereted";
            }
        }
    }

  


?>