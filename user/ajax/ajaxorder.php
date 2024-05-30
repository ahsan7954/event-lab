
<?php
include('../include/conn.php');
    
$output="";
if(isset($_POST['pdata'])){
    
    $output="";
   echo $csql = "SELECT * FROM `bookings` WHERE  `b_status`='Pending'";
    $crun = mysqli_query($conn,$csql);
    while($cfet = mysqli_fetch_array($crun)){
        $output.='<tr>
        
        <td>'.$cfet['b_client_name'].'</td>
        <td>'.$cfet['b_client_email'].'</td>
        <td>'.$cfet['b_client_phone'].'</td>
        <td>'.$cfet['b_occasion_title'].'</td>
        <td>'.$cfet['b_occasion_sdate'].'</td>
        <td>'.$cfet['b_occasion_stime'].'</td>
        <td>'.$cfet['b_status'].'</td>
        <td>'.$cfet['b_date'].'</td>
        </tr>';
       
    }
    if($output!=""){
        echo $output;
    }else{
        echo "<tr><td colspan=7 style='color:black; font-size:25px; padding-top:7px;' > No Record Found </td></tr>";
    }
}

$output="";
if(isset($_POST['cdata'])){
    $output="";
    $csql = "SELECT * FROM `bookings` WHERE  `b_status`='Confirmed'";
    $crun = mysqli_query($conn,$csql);
    while($cfet = mysqli_fetch_array($crun)){
        $output.='<tr>
        
        <td>'.$cfet['b_client_name'].'</td>
        <td>'.$cfet['b_client_email'].'</td>
        <td>'.$cfet['b_client_phone'].'</td>
        <td>'.$cfet['b_occasion_title'].'</td>
        <td>'.$cfet['b_occasion_sdate'].'</td>
        <td>'.$cfet['b_occasion_stime'].'</td>
        <td>'.$cfet['b_status'].'</td>
        <td>'.$cfet['b_date'].'</td>
        </tr>';
    }
    if($output!=""){
        echo $output;
    }else{
        echo "<tr><td colspan=7 style='color:black; font-size:25px; padding-top:7px;' > No Record Found </td></tr>";
    }
}

?>