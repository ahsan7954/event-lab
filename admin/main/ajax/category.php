<?php
    include('../include/conn.php');
    
    // ================= Category Insert =================
    if(isset($_POST['cname'])){
        $cname =  mysqli_real_escape_string($conn,$_POST['cname']);
        $cdesc = mysqli_real_escape_string($conn,$_POST['cdesc']);
        $cdate = mysqli_real_escape_string($conn,date("Y-m-d"));


        if($cname==""||$cdesc==""){
            echo 0;
        }else{
            $rec= "SELECT * FROM `category` WHERE `cname`='$cname'";
            $srun=mysqli_query($conn,$rec);
        if(mysqli_num_rows($srun)>0){
                echo 1;
                // already exist
            }else{
                $sql="INSERT INTO  `category`(`cname`,`cdesc`,`cdate`) VALUES ('$cname','$cdesc','$cdate')";
              
                 $run=mysqli_query($conn,$sql);
                 if($run){
                    // echo "<script>alert('CATEGORY HAS BEEN INSERTED')</script>";
                    echo 2;
                 }else{
                    // echo "<script>alert('CATEGORY HAS NOT BEEN INSERTED')</script>";
                    echo 3;
                 }
                
            }
            
        }
    }


