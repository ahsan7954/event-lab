<?php
include('../include/conn.php');

   

    // ================= event Insert =================
    if(isset($_POST['e_name'])){
        $e_cate =  mysqli_real_escape_string($conn,$_POST['e_cate']);
        $e_name =  mysqli_real_escape_string($conn,$_POST['e_name']);
        $e_sdate =  mysqli_real_escape_string($conn,$_POST['e_sdate']);
        $e_descrip =  mysqli_real_escape_string($conn,$_POST['e_descrip']);
        $e_pic =  $_FILES['e_pic']['name'];
    
        if($e_cate==""||$e_name==""||$e_sdate==""||$e_descrip==""||$e_pic==""){
            echo 0;
        }else{
            // $rec = $obj->singleRecord("events",where:"`e_name`='$e_name'");
            $rec="SELECT * FROM `events` WHERE `e_name`='$e_name'";
            $rec=mysqli_query($conn,$rec);
            if(mysqli_num_rows($rec)>0){
                echo 1;
            }else{      
                $exe = strtolower(pathinfo($e_pic,PATHINFO_EXTENSION));   
                $arr = ['jpeg','jpg','png'];
                if(in_array($exe,$arr)){
                    $picname = rand(1000,9000);
                    $pic = $picname.".".$exe;
                    $sql="INSERT INTO `events`(
                        `e_cate`,
                        `e_name`,
                        `e_sdate`,
                        `e_pic`,
                        `e_descrip`
                        ) VALUES (
                        '$e_cate',
                        '$e_name',
                        '$e_sdate'
                        ,'$pic',
                        '$e_descrip'
                        )";
                    $run=mysqli_query($conn,$sql);
                
                        if($run){
                            move_uploaded_file($_FILES['e_pic']['tmp_name'],"../imgs/events/$pic");
                            echo 3;
                        }else{
                            echo 4;
                        }
                }
                else{
                    echo 2;
                }
            }
        }
    }

//    