<?php
   include("../include/conn.php");
     use PHPMailer\PHPMailer\PHPMailer;
     use PHPMailer\PHPMailer\Exception;
     use PHPMailer\PHPMailer\SMTP;

    $connected = @fsockopen("www.google.com", 80);

         $remail=strtolower(mysqli_real_escape_string($conn,$_POST['cont_email']));
         $subject=strtolower(mysqli_real_escape_string($conn,$_POST['subject']));  
         $msg=strtolower(mysqli_real_escape_string($conn,$_POST['msg']));
         if($remail=="" || $subject==""|| $msg==""){
            echo 0;
            //fill your all fields
         }else{

            if($connected){
                require "../PHPMailer/PHPMailer.php";
                require "../PHPMailer/Exception.php";
                require "../PHPMailer/SMTP.php";
                $name = "Event Lab";
                $mail = new PHPMailer(true);
        
                $mail->isSMTP();
                $mail->Host = "smtp.gmail.com";
                $mail->SMTPAuth = true;
                $mail->Username = "ahsanzulfiqar0302@gmail.com";
                $mail->Password = "sauiplgzrtrryjnd";
                $mail->Port = 465;
                $mail->SMTPSecure = "ssl";
                
                $mail->isHTML(true);
                $mail->setFrom($remail,$name);
                $mail->addAddress($remail);
                $mail->Subject = ("Event Lab Reply");
                $mail->Body = "<h1>$subject</h1> $msg <br><br><p>Thanks For Contact With Us!</p>";
                
                if($mail->send()){
                    echo 3;
                }else{
                    echo 4;
                }
            
            }
         }
?>