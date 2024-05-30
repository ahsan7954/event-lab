<?php
	include("./include/conn.php");
	include("./include/header.php");
	include("./include/sidebar.php");
 ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <div class="container-full">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="d-flex align-items-center justify-content-between">
                <div class="me-auto">
                    <h3 class="page-title">Booking</h3>
                    <div class="d-inline-block ms-auto align-items-center">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item" aria-current="page">Booking</li>
                                <li class="breadcrumb-item active" aria-current="page">Add Booking</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="ms-auto">
                    <a href="./booking-pending.php"
                        class="waves-effect waves-light text-white btn btn-rounded btn-dark mb-5">View Booking</a>
                </div>

            </div>
        </div>

        <!-- Main content -->
        <section class="content row">

            <!-- Basic Forms -->
            <div class="col-lg-6 col-sm-12 offset-lg-3 ">
                <div class="box">
                    <div class="box-header with-border">
                        <h4 class="box-title">Add Booking</h4>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="row">
                            <div class="col">
                                <form id="bookingform">
                                    <?php
                                           $uid=$_GET['uid'];
                                           $gsql="SELECT * FROM `bookings` INNER JOIN `category` ON b_cate=cid INNER JOIN `vanue` ON b_vanue_host=v_id WHERE `b_id`='$uid'";
                                           $grun=mysqli_query($conn,$gsql);
                                           $gfet=mysqli_fetch_array($grun);
                                    
                                    ?>
                                    <div class="form-group">
                                        <input type="hidden" name="b_id" class="form-control"
                                            value="<?php echo $gfet['b_id'] ?>" required>
                                        <h5>Event Category <span class="text-danger">*</span></h5>
                                        <select class="form-control bg-white" name="b_cate">
                                            <option value="<?php echo $gfet['b_cate'] ?>"><?php echo $gfet['cname'] ?>
                                            </option>
                                            <?php
                                                    $res="SELECT * FROM `category`";
                                                    $run=mysqli_query($conn,$res);
                                                    while($rec=mysqli_fetch_array($run)){
                                                    ?>
                                            <option value="<?php echo $rec['cid']; ?>"><?php
                                                             echo $rec['cname'];
                                                        ?></option>
                                            <?php
                                                }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <h5>Client Name <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="b_client_name" id="b_client_name"
                                                value="<?php echo $gfet['b_client_name'] ?>" class="form-control"
                                                placeholder="Enter Name" required>
                                            <div id="b_client_namevalid"
                                                style="height:15px; color:red; font-weight:bold;"></div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <h5>Email <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="b_client_email" id="b_client_email"
                                                value="<?php echo $gfet['b_client_email'] ?>" class="form-control"
                                                placeholder="Enter Email Address">
                                            <div id="b_client_emailvalid"
                                                style="height:15px; color:red; font-weight:bold;"></div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">
                                            <h5 class="mb-0">Contact No<span class="text-danger">*</span></h5>
                                        </label>
                                        <small class="sidetitle">E.g. +92-123-3456789</small>
                                        <input type="text" name="b_client_phone"
                                            value="<?php echo $gfet['b_client_phone'] ?>" class="form-control"
                                            id="phone2">
                                        <div id="phone2valid" style="height:15px; color:red; font-weight:bold;"></div>
                                    </div>
                                    <div class="form-group">
                                        <h5>Occasion Title <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="b_occasion_title" id="b_occasion_title"
                                                value="<?php echo $gfet['b_occasion_title'] ?>" class="form-control"
                                                placeholder="Enter Occasion Title" required>
                                            <div id="b_occasion_titlevalid"
                                                style="height:15px; color:red; font-weight:bold;"></div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <h5>Occasion Start Date<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="date" name="b_occasion_sdate" id="b_occasion_sdate"
                                                value="<?php echo $gfet['b_occasion_sdate'] ?>" class="form-control"
                                                required>
                                            <div id="b_occasion_sdatevalid"
                                                style="height:15px; color:red; font-weight:bold;"></div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <h5>Occasion Start Time<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" value="<?php date("H:i",strtotime($gfet['b_occasion_stime']))?>" name="b_occasion_stime" class="form-control" require >
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <h5>Vanue City<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="b_vanue_city" id="b_vanue_city"
                                                value="<?php echo $gfet['b_vanue_city'] ?>" readonly
                                                class="form-control" required>
                                            <div id="b_vanue_cityvalid"
                                                style="height:15px; color:red; font-weight:bold;"></div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <h5>No of Seats<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="number" name="b_seats" id="b_seats" class="form-control"
                                                value="<?php echo $gfet['b_seats'] ?>" placeholder="Enter Maximum Seats"
                                                required>
                                            <div id="b_seatsvalid" style="height:15px; color:red; font-weight:bold;">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <h5>Select Vanue <span class="text-danger">*</span></h5>
                                        <select class="form-control bg-white" name="b_vanue_host">
                                            <option value="<?php echo $gfet['b_vanue_host'] ?>">
                                                <?php echo $gfet['v_name'] ?></option>
                                            <?php
                                                    $sql="SELECT * FROM `vanue`";
                                                    $run=mysqli_query($conn,$sql);
                                                    while($rec=mysqli_fetch_array($run)){
                                                    ?>
                                            <option value="<?php echo $rec['v_id']; ?>"><?php
                                                             echo $rec['v_name'];
                                                        ?></option>
                                            <?php
                                                }
                                            ?>
                                        </select>
                                        <div id="b_vanue_hostvalid" style="height:15px; color:red; font-weight:bold;">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <h5>Occasion Description <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <textarea name="b_descrip" id="b_descrip" rows="5" class="form-control"
                                                placeholder="Enter Occasion Description.."
                                                required><?php echo $gfet['b_descrip'] ?></textarea>
                                            <div id="b_descripvalid" style="height:15px; color:red; font-weight:bold;">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <h5>Status<span class="text-danger">*</span></h5>
                                        <div class="controls ">
                                            <div class="form-check form-check-inline">
                                                <input name="b_status" type="radio" id="radio_7" value="Pending"
                                                    required checked>
                                                <label for="radio_7">Pending</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input name="b_status" type="radio" id="radio_6" value="Confirmed">
                                                <label for="radio_6">Confirmed</label>
                                            </div>
                                        </div>
                                        <div id="u_gendervalid" style="height:15px; color:red; font-weight:bold;"></div>
                                    </div>

                                    <div class="text-xs-right">
                                        <button type="button" id="btn" class="btn btn-info sub">Update</button>
                                    </div>
                                </form>

                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.box-body -->

                </div>
                <!-- /.box -->
            </div>

        </section>
        <!-- /.content -->
    </div>
</div>
<!-- /.content-wrapper -->
<?php
	include('./include/footer.php');
?>
<script>
$(document).ready(function() {
    $("#btn").on("click", function(e) {

        e.preventDefault();
        var mydata = new FormData(bookingform);
        // alert(mydata);
        $.ajax({
            url: "./ajax/booking-update.php",
            method: "POST",
            data: mydata,
            contentType: false,
            processData: false,
            success: function(show) {
                // alert(show);
                if (show == 0) {

                    const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 3000,
                        timerProgressBar: true,
                        didOpen: (toast) => {
                            toast.addEventListener('mouseenter', Swal.stopTimer)
                            toast.addEventListener('mouseleave', Swal
                                .resumeTimer)
                        }
                    })

                    Toast.fire({
                        icon: 'error',
                        title: 'Fill All Inputs'
                    })
                } else if (show == 1) {
                    // alert("CATEGORY Has Been Inserted.");   
                    const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 3000,
                        timerProgressBar: true,
                        didOpen: (toast) => {
                            toast.addEventListener('mouseenter', Swal.stopTimer)
                            toast.addEventListener('mouseleave', Swal
                                .resumeTimer)
                        }
                    })

                    Toast.fire({
                        icon: 'success',
                        title: 'BOOKING HAS BEEN UPDATED.'
                    })
                    $('#bookingform').trigger('reset');
                    window.location.href = "booking-pending.php";

                } else {
                    // alert("CATEGORY Has Been Not Inserted.");
                    const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 3000,
                        timerProgressBar: true,
                        didOpen: (toast) => {
                            toast.addEventListener('mouseenter', Swal.stopTimer)
                            toast.addEventListener('mouseleave', Swal
                                .resumeTimer)
                        }
                    })

                    Toast.fire({
                        icon: 'error',
                        title: 'BOOKING HAS BEEN NOT INSERTED.'
                    })
                }
            }
        });
    });
});
</script>