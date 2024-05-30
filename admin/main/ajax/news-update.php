
<?php
    include('../include/conn.php');

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $uid = mysqli_real_escape_string($conn, $_POST['n_id']);
        $n_cate = mysqli_real_escape_string($conn, $_POST['n_cate']);
        $n_title = mysqli_real_escape_string($conn, $_POST['n_title']);
        $n_desc = mysqli_real_escape_string($conn, $_POST['n_desc']);
        $n_status = mysqli_real_escape_string($conn, $_POST['n_status']);
        $n_date = date('Y-m-d');
        $n_pic = $_FILES['n_pic']['name'];
        
        if ($n_cate == "" || $n_title == "" || $n_desc == "" || $n_status == "") {
            echo 0; // Required fields are empty
        } else {
            // Check if another news article with the same title already exists
            $rec = "SELECT * FROM `news` WHERE `n_id` <> '$uid' AND `n_title`='$n_title'";
            $run = mysqli_query($conn, $rec);

            if (mysqli_num_rows($run) > 0) {
                echo 1; // News article with the same title already exists
            } else {
                // Update the news article with a new image or the previous image
                if ($n_pic != "") {
                    $exe = strtolower(pathinfo($n_pic, PATHINFO_EXTENSION));
                    $allowed_extensions = ['jpg', 'jpeg', 'png'];
                    if (in_array($exe, $allowed_extensions)) {
                        $picname = rand(100000, 900000);
                        $pic = $picname . "." . $exe;
                        $sql = "UPDATE `news` SET `n_cate`='$n_cate', `n_title`='$n_title', `n_pic`='$pic', `n_desc`='$n_desc', `n_date`='$n_date', `n_status`='$n_status' WHERE `n_id`='$uid'";
                        // echo $sql;
                        $res = mysqli_query($conn, $sql);
                        if ($res) {
                            move_uploaded_file($_FILES['n_pic']['tmp_name'], "../imgs/news/" . $pic);
                            
                            // Remove the previous image if it exists
                            // $previous_sql = "SELECT `n_pic` FROM `news` WHERE `n_id` = '$uid'";
                            // $previous_result = mysqli_query($conn, $previous_sql);
                            // if (mysqli_num_rows($previous_result) === 1) {
                            //     $previous_row = mysqli_fetch_assoc($previous_result);
                            //     $previous_image_path = "../imgs/news/" . $previous_row['n_pic'];
                            //     if (file_exists($previous_image_path)) {
                            //         unlink($previous_image_path);
                            //     }
                            // }
                            
                            echo 2; // News has been updated with a new image
                        } else {
                            echo 3; // Failed to update the news article
                        }
                    } else {
                        echo 4; // Incorrect image format
                    }
                } else {
                    // Update the news article with the previous image
                    $sql = "UPDATE `news` SET `n_cate`='$n_cate', `n_title`='$n_title', `n_desc`='$n_desc', `n_date`='$n_date', `n_status`='$n_status' WHERE `n_id`='$uid'";
                    $res = mysqli_query($conn, $sql);
                    if ($res) {
                        echo 5; // News has been updated with the previous image
                    } else {
                        echo 6; // Failed to update the news article
                    }
                }
            }
        }
    }
?>
