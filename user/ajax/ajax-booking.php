<?php
include('../include/conn.php');

    // ================= Booking Insert =================
    if(isset($_POST['b_client_name'])){
        $b_cate =  mysqli_real_escape_string($conn,$_POST['b_cate']);
        $b_client_name =  mysqli_real_escape_string($conn,$_POST['b_client_name']);
        $b_client_email =  mysqli_real_escape_string($conn,$_POST['b_client_email']);
        $b_client_phone =  mysqli_real_escape_string($conn,$_POST['b_client_phone']);
        $b_occasion_title =  mysqli_real_escape_string($conn,$_POST['b_occasion_title']);
        $b_occasion_sdate =  mysqli_real_escape_string($conn,$_POST['b_occasion_sdate']);
        $b_occasion_stime =   date('h:i A', strtotime(mysqli_real_escape_string($conn,$_POST['b_occasion_stime'])));
        $b_seats =  mysqli_real_escape_string($conn,$_POST['b_seats']);
        $b_vanue_host =  mysqli_real_escape_string($conn,$_POST['b_vanue_host']);
        $b_vanue_city =  mysqli_real_escape_string($conn,$_POST['b_vanue_city']);
        $b_descrip =  mysqli_real_escape_string($conn,$_POST['b_descrip']);
        $b_type =  mysqli_real_escape_string($conn,$_POST['b_type']);
        $b_date =  mysqli_real_escape_string($conn,date("Y-m-d"));
        $b_booked_by = "user";
    
        if($b_client_name==""||$b_cate==""||$b_client_email==""||$b_client_phone==""||$b_occasion_title==""||$b_occasion_sdate==""||$b_occasion_stime==""||$b_seats==""||$b_vanue_host==""||$b_vanue_city==""||$b_descrip==""||$b_type==""){
            echo 0;
        }else{
            $res="SELECT * FROM `bookings` WHERE `b_occasion_sdate`='$b_occasion_sdate' AND `b_vanue_host`='$b_vanue_host'";
            $rec=mysqli_query($conn,$res);
            if(mysqli_num_rows($rec)>0){
                echo 1;
            }else{
                $sql="INSERT INTO `bookings`
                (`b_cate`, `b_client_name`, `b_client_email`, `b_client_phone`, `b_occasion_title`, `b_occasion_sdate`, `b_occasion_stime`, `b_seats`, `b_vanue_host`, `b_vanue_city`, `b_descrip`, `b_type`, `b_date`, `b_booked_by`, `b_status`)
                VALUES
                ('$b_cate','$b_client_name', '$b_client_email', '$b_client_phone', '$b_occasion_title', '$b_occasion_sdate', '$b_occasion_stime', '$b_seats', '$b_vanue_host', '$b_vanue_city', '$b_descrip', '$b_type', '$b_date', '$b_booked_by', 'Pending');
                ";
                $run=mysqli_query($conn,$sql);
                if($run){
                    echo 2;
                }else{
                    echo 3;
                }
            }
        }
    }

   