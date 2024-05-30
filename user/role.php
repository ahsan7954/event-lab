<?php
 session_start();
    include('./include/conn.php');
    include('./include/header.php');
   
  $role=$_SESSION['role'];
?>

    <div class="breadcrumb-area">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-lg-12">
                    <div class="breadcrumb-content">
                        <div class="page-outlined-text">
                            <h1>Event</h1>
                        </div>
                        
                        <h2 class="page-title"><?php
                            echo $role
                        
                        ?></h2>
                        <ul class="page-switcher">
                            <li><a href="index-2.html">Home <i class="bi bi-caret-right"></i></a></li>
                            <li><?php
                                echo $role
                            
                            ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
  
    <div class="container">
        <div class="row">
        <h1 class="mt-3 mb-3"><?php
            echo $role;
        
        ?> Table</h1>
        <table class="table table-striped" >
        <thead>
            <tr style="color:white;background-color:#CE1446;" >
                <th>Name</th>
                <th>Father Name</th>
                <th>Email</th>
                <th>Gender</th>
                <th>City</th>
                <th>Experience</th>
                <th>Address</th>
                <th>Rolement</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>

            <tr>
                <?php
                    $sql="SELECT * FROM `a_users` WHERE `u_role`='$role'";
                    $run=mysqli_query($conn,$sql);
                    while($fet=mysqli_fetch_assoc($run)){
                
                ?>
                <td scope="row"><?php echo $fet['u_fname'] ?></td>
                <td><?php echo $fet['u_lname'] ?></td>
                <td><?php echo $fet['u_email'] ?></td>
                <td><?php echo $fet['u_gender'] ?></td>
                <td><?php echo $fet['u_city'] ?></td>
                <td><?php echo $fet['u_exp'] ?></td>
                <td><?php echo $fet['u_address'] ?></td>
                <td><?php echo $role ?></td>
                <td><?php echo $fet['u_status'] ?></td>
            </tr>
            <?php
                    }
            
            ?>
        </tbody>
    </table>
        </div>
    </div><br>
   <div class="container">
    <div class="row">
    <div class="event-location"><a href="./logout.php">
                                            <input style="color:white;background-color:#CE1446;" type="button" class="btn" value="Logout" name="" id="">
                                        </a></div>
                                    </div>
    </div>
   </div>
    <?php
    include('./include/footer.php');
?>