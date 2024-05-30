<?php
    require_once('../include/conn.php');

    // // ================= Category Insert =================
    if(isset($_POST['n_title'])){
        $n_cate =  mysqli_real_escape_string($conn,$_POST['n_cate']);
        $n_title =  mysqli_real_escape_string($conn,$_POST['n_title']);
        $n_desc =  mysqli_real_escape_string($conn,$_POST['n_desc']);
        $n_status =  mysqli_real_escape_string($conn,$_POST['n_status']);
        $n_date = mysqli_real_escape_string($conn,date('Y-m-d'));
        $n_pic =  $_FILES['n_pic']['name'];
        if($n_cate==""||$n_title==""||$n_desc==""||$n_pic==""){
            echo 0;
        }else{
            $rec="SELECT * FROM `news` WHERE `n_title`='$n_title'";
            $res=mysqli_query($conn,$rec);
            if (mysqli_num_rows($res)>0){
                echo 1;
            }else{
                $exe = strtolower(pathinfo($n_pic,PATHINFO_EXTENSION));
                $arr = ['jpg','png','jpeg'];
                if(in_array($exe,$arr)){
                    $picname = rand(10000,90000);
                    $pic = $picname.'.'.$exe;
                    $sql="INSERT INTO `news`(`n_cate`, `n_title`, `n_pic`, `n_desc`, `n_date`, `n_status`) VALUES ('$n_cate','$n_title','$pic','$n_desc','$n_date','$n_status')";
                    $run=mysqli_query($conn,$sql);
                    if($run){
                        move_uploaded_file($_FILES['n_pic']['tmp_name'],'../imgs/news/'.$pic);
                        echo 2;
                    }else{
                        echo 3;
                    }
                }
                else{
                    echo 4;
                }
            }
        }
    }

//    