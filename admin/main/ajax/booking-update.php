<?php
    include('../include/conn.php');

        $uid =  mysqli_real_escape_string($conn,$_POST['b_id']);
        $b_cate =  mysqli_real_escape_string($conn,$_POST['b_cate']);
        $b_client_name =  mysqli_real_escape_string($conn,$_POST['b_client_name']);
        $b_client_email =  mysqli_real_escape_string($conn,$_POST['b_client_email']);
        $b_client_phone =  mysqli_real_escape_string($conn,$_POST['b_client_phone']);
        $b_occasion_title =  mysqli_real_escape_string($conn,$_POST['b_occasion_title']);
        $b_occasion_sdate =  mysqli_real_escape_string($conn,$_POST['b_occasion_sdate']);
        $b_occasion_stime =   date('h:i A', strtotime(mysqli_real_escape_string($conn,$_POST['b_occasion_stime'])));
        // $b_occasion_edate =  mysqli_real_escape_string($conn,$_POST['b_occasion_edate']);
        // $b_occasion_etime = date('h:i A', strtotime(mysqli_real_escape_string($conn,$_POST['b_occasion_etime'])));;
        $b_seats =  mysqli_real_escape_string($conn,$_POST['b_seats']);
        $b_vanue_host =  mysqli_real_escape_string($conn,$_POST['b_vanue_host']);
        $b_vanue_city =  mysqli_real_escape_string($conn,$_POST['b_vanue_city']);
        $b_descrip =  mysqli_real_escape_string($conn,$_POST['b_descrip']);
        $b_status =  mysqli_real_escape_string($conn,$_POST['b_status']);
        // $b_booked_by =  mysqli_real_escape_string($conn,$_POST['b_booked_by']);
        $b_date =  mysqli_real_escape_string($conn,date("Y-m-d"));

         if($b_client_name==""||$b_cate==""||$b_client_email==""||$b_client_phone==""||$b_occasion_title==""||$b_occasion_sdate==""||$b_occasion_stime==""||$b_seats==""||$b_vanue_host==""||$b_vanue_city==""||$b_descrip==""||$b_status==""){
            echo 0;
        }else{
            $sql="UPDATE `bookings` SET `b_cate`='$b_cate',`b_client_name`='$b_client_name',`b_client_email`='$b_client_email',`b_client_phone`='$b_client_phone',`b_occasion_title`='$b_occasion_title',`b_occasion_sdate`='$b_occasion_sdate',`b_occasion_stime`='$b_occasion_stime',`b_seats`='$b_seats',`b_vanue_host`='$b_vanue_host',`b_vanue_city`='$b_vanue_city',`b_descrip`='$b_descrip',`b_date`='$b_date',`b_status`='$b_status' WHERE `b_id`='$uid'";
            $run=mysqli_query($conn,$sql);
                // $res= $obj->update("bookings",array(
                //     "b_cate"=>$b_cate, 
                //     "b_client_name"=>$b_client_name, 
                //     "b_client_email"=>$b_client_email, 
                //     "b_client_phone"=>$b_client_phone, 
                //     "b_occasion_title"=>$b_occasion_title, 
                //     "b_occasion_sdate"=>$b_occasion_sdate, 
                //     "b_occasion_stime"=>$b_occasion_stime, 
                //     // "b_occasion_edate"=>$b_occasion_edate, 
                //     // "b_occasion_etime"=>$b_occasion_etime, 
                //     "b_seats"=>$b_seats, 
                //     "b_vanue_host"=>$b_vanue_host, 
                //     "b_vanue_city"=>$b_vanue_city, 
                //     "b_descrip"=>$b_descrip, 
                //     // "b_type"=>$b_type, 
                //     "b_date"=>$b_date, 
                //     "b_booked_by"=>$b_booked_by
                // ),where:"`b_id`='$uid'");
                if($run){
                    echo 1;
                }else{
                    echo 2;
                }
            }


       
    

?>