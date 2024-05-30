<?php
  include('../include/conn.php');
        $uid = mysqli_real_escape_string($conn,$_POST['e_id']);
        $e_cate =  mysqli_real_escape_string($conn,$_POST['e_cate']);
        $e_name =  mysqli_real_escape_string($conn,$_POST['e_name']);
        $e_sdate =  mysqli_real_escape_string($conn,$_POST['e_sdate']);
        // $e_edate =  mysqli_real_escape_string($conn,$_POST['e_edate']);
        // $e_vanue =  mysqli_real_escape_string($conn,$_POST['e_vanue']);
        // $e_city =  mysqli_real_escape_string($conn,$_POST['e_city']);
        // $e_planner =  mysqli_real_escape_string($conn,$_POST['e_planner']);
        // $e_seats =  mysqli_real_escape_string($conn,$_POST['e_seats']);
        $e_descrip =  mysqli_real_escape_string($conn,$_POST['e_descrip']);
        $e_pic =  $_FILES['e_pic']['name'];

        // $previous = $obj->singleRecord('events',col:'e_pic',where:"`e_id`='$uid'");
    

        if($e_name==""||$e_cate==""||$e_sdate==""||$e_descrip==""){
            echo 0;
        }else{
            // $srec = $obj->singleRecord('events',where:"(NOT `e_id`='$uid') AND `e_name`='$e_name'");
            $sql="SELECT * FROM `events` WHERE `e_id` <> '$uid' AND `e_name`='$e_name'";
            $run=mysqli_query($conn,$sql);
            if(mysqli_num_rows($run) > 0){
                echo 1;
            }else{
                // ====== Update with New Image ======
                if($e_pic!=""){
                    $exe = strtolower(pathinfo($e_pic,PATHINFO_EXTENSION));
                    $arr = ['jpg','jpeg','png'];
                    if(in_array($exe,$arr)){
                        $picname = rand(100000,900000);
                        $pic = $picname.".".$exe;
                        $sql="UPDATE `events` SET `e_cate`='$e_cate',`e_name`='$e_name',`e_sdate`='$e_sdate',`e_pic`='$pic',`e_descrip`='$e_descrip' WHERE `e_id` = '$uid'";
                        $srun=mysqli_query($conn,$sql);
                        if($srun){
                            move_uploaded_file($_FILES['e_pic']['tmp_name'],"../imgs/events/".$pic);
                            
                            // if(file_exists("../imgs/events/".$previous['e_pic'])){
                            //     unlink("../imgs/events/".$previous['e_pic']);
                            // }
                            // event has been updated with new image
                            echo 2;


                        }else{
                            echo 3;
                        }
                    }
                    else{
                        echo 4; // Incorrect image format
                    }
                }
                else{
                // ====== Update with Previous Image ======
                $sql="UPDATE `events` SET `e_cate`='$e_cate',`e_name`='$e_name',`e_sdate`='$e_sdate',`e_descrip`='$e_descrip' WHERE `e_id` = '$uid'";
                $srun=mysqli_query($conn,$sql);
                    // $res = $obj->update('events',array(
                    //     "e_name"=>$e_name,
                    //     "e_sdate"=>$e_sdate,
                    //     "e_edate"=>$e_edate,
                    //     "e_vanue"=>$e_vanue,
                    //     "e_city"=>$e_city,
                    //     "e_planner"=>$e_planner,
                    //     "e_seats"=>$e_seats,
                    //     "e_descrip"=>$e_descrip,
                    //     "e_pic"=>$previous['e_pic']
                    // ),where:"`e_id`='$uid'");
                    if($srun){
                        echo 5;
                        // event has been updated with old image
                    }else{
                        echo 6; 
                        // event has not been updated
                    }
                }
                
            }
        }
    

?>