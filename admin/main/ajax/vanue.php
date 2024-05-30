<?php
   include('../include/conn.php');

    // // ================= Category Insert =================
    if(isset($_POST['v_name'])){
        $v_name =  mysqli_real_escape_string($conn,$_POST['v_name']);
        $v_desc =  mysqli_real_escape_string($conn,$_POST['v_desc']);
        $v_date = mysqli_real_escape_string($conn,date("Y-m-d"));

        if($v_name==""||$v_desc==""){
            echo 0;
        }else{
            $res="SELECT * FROM `vanue` WHERE `v_name`='$v_name'";
            $rec=mysqli_query($conn,$res);
            if(mysqli_num_rows($rec)>0){
                echo 1;
            }else{
                $sql="INSERT INTO `vanue`(
                    `v_name`,
                    `v_desc`,
                     `v_date`
                     ) VALUES (
                    '$v_name',
                    '$v_desc',
                    '$v_date'
                    )";
                    $run=mysqli_query($conn,$sql);
                if($run){
                    echo 2;
                }else{
                    echo 3;
                }
            }
        }
    }

   