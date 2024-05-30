<?php
    require_once('../include/connection.php');
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    use PHPMailer\PHPMailer\SMTP;
    $obj = new connection();

    if(isset($_POST['cdata'])){
        $cdata = mysqli_real_escape_string($obj->mysqli,$_POST['cdata']);
        $data = $obj->singleRecord("contact",where:"`contact_id`='$cdata'");
        $res = array(
            "contact_id"=>$cdata,
            "contact_name"=>$data['contact_name'],
            "contact_email"=>$data['contact_email'],
            "contact_phone"=>$data['contact_phone'],
            "contact_subject"=>$data['contact_subject'],
            "contact_msg"=>$data['contact_msg'],
            "contact_date"=>$data['contact_date']
        );

        $arr = json_encode($res);
        echo $arr;
    }

    if(isset($_POST['semail'])){
        $email = $_POST['semail'];
        $output = '
        <div class="form-group">
        <input type="hidden" name="remail" value='.$email.'>
            <h5>Message <span class="text-danger">*</span></h5>
            <div class="controls">
                <textarea name="r_msg" id="r_msg" rows="7" class="form-control"
                    placeholder="Enter Reply Here.." required></textarea>
            </div>
        </div>
        <div class="text-xs-right">
                <button type="button" class="btn btn-info send">Send</button>
        </div>';

    echo $output;
    }

    if(isset($_POST['remail'])){
        $remail = $_POST['remail'];
        $rmsg = $_POST['r_msg'];
        if($remail==""||$rmsg==""){
            echo 0;
        }else{

        
        $connected = @fsockopen("www.google.com", 80);
        if($connected){
            require "../../assets/vendor_components/PHPMailer/PHPMailer.php";
            require "../../assets/vendor_components/PHPMailer/Exception.php";
            require "../../assets/vendor_components/PHPMailer/SMTP.php";
            $name = "Evently";
            $mail = new PHPMailer(true);
    
            $mail->isSMTP();
            $mail->Host = "smtp.gmail.com";
            $mail->SMTPAuth = true;
            $mail->Username = "talhawap972@gmail.com";
            $mail->Password = "esflwftqfbudtmps";
            $mail->Port = 465;
            $mail->SMTPSecure = "ssl";
            
            $mail->isHTML(true);
            $mail->setFrom($remail,"Evently");
            $mail->addAddress($remail);
            $mail->Subject = ("Evently Reply");
            $mail->Body = "$rmsg <br><br><p>Thanks For Contacting!</p>";
            
            if($mail->send()){
                echo 3;
            }else{
                echo 4;
            }
        }
        }
    }

    if(isset($_POST['mydata'])){
        
        $cdid = $_POST['mydata'];
        $res = $obj->delete("contact",where:"`contact_email`='$cdid'");
        if($res=="deleted"){
            echo 1;
        }
        else{
            echo 2;
        }
    }
?>