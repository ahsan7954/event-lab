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
                    <h3 class="page-title">Event</h3>
                    <div class="d-inline-block ms-auto align-items-center">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item" aria-current="page">Event</li>
                                <li class="breadcrumb-item active" aria-current="page">Update Event</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="ms-auto">
                    <a href="./event-view.php"
                        class="waves-effect waves-light text-white btn btn-rounded btn-dark mb-5">View Events</a>
                </div>

            </div>
        </div>

        <!-- Main content -->
        <section class="content row">

            <!-- Basic Forms -->
            <div class="col-lg-6 col-sm-12 offset-lg-3 ">
                <div class="box">
                    <div class="box-header with-border">
                        <h4 class="box-title">Update Event</h4>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="row">
                            <div class="col">
                                <form id="eventform">
                                <?php
                                           $uid=$_GET['uid'];
                                           $gsql="SELECT * FROM `events` INNER JOIN `category` ON e_cate=cid WHERE `e_id`='$uid'";
                                           $grun=mysqli_query($conn,$gsql);
                                           $gfet=mysqli_fetch_array($grun);
                                    
                                    ?>
                                    <div class="form-group">
                                    <input type="hidden" name="e_id" class="form-control" value="<?php echo $gfet['e_id'] ?>" required>
                                        <h5>Event Category <span class="text-danger">*</span></h5>
                                        <select class="form-control bg-white" name="e_cate">
                                            <option value="<?php echo $gfet['e_cate'] ?>"><?php echo $gfet['cname'] ?></option>
                                            <?php
                                                $sql="SELECT * FROM `category`";
                                                $run=mysqli_query($conn,$sql);
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
                                        <h5>Event Title <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="e_name" 
                                            value="<?php echo $gfet['e_name'] ?>"
                                            class="form-control"
                                                placeholder="Enter Occasion Name">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Date:</label>

                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                            <input type="date" name="e_sdate" 
                                            value="<?php echo $gfet['e_sdate'] ?>"
                                            class="form-control pull-right"
                                                id="reservation">
                                        </div>
                                        <!-- /.input group -->
                                    </div>
                                  

                                    <div class="form-group">
                                        <h5>Featured Image<span class="text-danger">*</span></h5>
                                        <input type="file" name="e_pic" class="form-control">
                                    </div>


                                    <div class="form-group">
                                        <h5>Description <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <textarea name="e_descrip" id="cdesc" rows="5" class="form-control"
                                                placeholder="Enter Description Here.." required><?php echo $gfet['e_descrip'] ?></textarea>
                                        </div>
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
        var mydata = new FormData(eventform);
        // alert(mydata);
        $.ajax({
            url: "./ajax/event-update.php",
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
                        icon: 'error',
                        title: 'Event ALREADY EXIST.'
                    })
                }else if (show == 4 ) {
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
                        title: 'IMAGE IS NOT RIGHT.'
                    })
                }else if (show == 2) {
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
                        title: 'EVENT HAS BEEN UPDATED.'
                    })
                    $('#eventform').trigger('reset');
                    window.location.href="event-view.php";

                } else if (show == 5) {
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
                        title: 'EVENT HAS BEEN UPDATED WITH OLD IMAGE.'
                    })
                    $('#eventform').trigger('reset');
                    window.location.href="event-view.php";

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
                        title: 'EVENT HAS BEEN NOT INSERTED.'
                    })
                }
            }
        });
    });
});
</script>