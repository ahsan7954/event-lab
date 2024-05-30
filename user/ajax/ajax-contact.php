<?php
include('../include/conn.php');
    if(isset($_POST['contact_name'])){
        $contact_name = mysqli_real_escape_string($conn,$_POST['contact_name']);
        $contact_email = mysqli_real_escape_string($conn,$_POST['contact_email']);
        $contact_phone = mysqli_real_escape_string($conn,$_POST['contact_phone']);
        $contact_subject = mysqli_real_escape_string($conn,$_POST['contact_subject']);
        $contact_msg = mysqli_real_escape_string($conn,$_POST['contact_msg']);
        $contact_date = mysqli_real_escape_string($conn,date('d-m-Y'));

        if($contact_name==""||$contact_email==""||$contact_phone==""||$contact_subject==""||$contact_msg==""){
            echo 0;
        }else{
            $sql="INSERT INTO `contact`(
                `contact_name`,
                `contact_email`,
                `contact_phone`,
                `contact_subject`,
                `contact_msg`,
                `contact_date`
                ) VALUES (
                '$contact_name',
                '$contact_email',
                '$contact_phone',
                '$contact_subject',
                '$contact_msg',
                '$contact_date'
                )";
                $run=mysqli_query($conn,$sql);
            // $res = $obj->insert("contact",array(
            //     "contact_name"=>$contact_name,
            //     "contact_email"=>$contact_email,
            //     "contact_phone"=>$contact_phone,
            //     "contact_subject"=>$contact_subject,
            //     "contact_msg"=>$contact_msg,
            //     "contact_date"=>$contact_date
            // ));

            if($run){
                echo 1;
            }else{
                echo 2;
            }
        }
    }
?>