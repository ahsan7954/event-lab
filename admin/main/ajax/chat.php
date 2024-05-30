<?php
    require_once('../include/connection.php');
    $obj = new connection;
    if(isset($_POST['aid'])){
        $aid = mysqli_real_escape_string($obj->mysqli,$_POST['aid']);
        $srec = $obj->singleRecord("a_users",where:"`u_id`='$aid'");
        $res = array(
            "u_id"=>$srec['u_id'],
            "u_fname"=>$srec['u_fname'],
            "u_lname"=>$srec['u_lname'],
            "u_email"=>$srec['u_email'],
            "u_phone"=>$srec['u_phone'],
            "u_role"=>$srec['u_role']
        );
        echo json_encode($res);
    }


    if(isset($_POST['sender'])){
        $sender = mysqli_real_escape_string($obj->mysqli,$_POST['sender']);
        $receiver = mysqli_real_escape_string($obj->mysqli,$_POST['receiver']);
        $message = mysqli_real_escape_string($obj->mysqli,$_POST['message']);
        $status = "sent";
        $date = mysqli_real_escape_string($obj->mysqli,date("d-M-Y h:i:s A"));
        if($message==""){
            echo 0;
        }else{
            $res = $obj->insert("chat",array(
                "m_sender"=>$sender,
                "m_receiver"=>$receiver,
                "m_msg"=>$message,
                "m_status"=>$status,
                "m_time"=>$date
            ));
            if($res=="inserted"){
                echo 1;
            }else{
                echo 2;
            }
        }
    }


?>