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
                    <h3 class="page-title">Vanue</h3>
                    <div class="d-inline-block ms-auto align-items-center">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item" aria-current="page">Vanue</li>
                                <li class="breadcrumb-item active" aria-current="page">Update Vanue</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="ms-auto">
                    <a href="./vanue-view.php"
                        class="waves-effect waves-light text-white btn btn-rounded btn-dark mb-5">View Vanue</a>
                </div>

            </div>
        </div>

        <!-- Main content -->
        <section class="content row">

            <!-- Basic Forms -->
            <div class="col-lg-6 col-sm-12 offset-lg-3 ">
                <div class="box">
                    <div class="box-header with-border">
                        <h4 class="box-title">Update Vanue</h4>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="row">
                            <div class="col">
                                <form id="upform">
                                <?php
                                           $uid=$_GET['uid'];
                                           $gsql="SELECT * FROM `vanue` WHERE `v_id`='$uid'";
                                           $grun=mysqli_query($conn,$gsql);
                                           $gfet=mysqli_fetch_array($grun);
                                    
                                    ?>
                                    <div class="form-group">
                                    <input type="hidden" name="v_id" class="form-control" value="<?php echo $gfet['v_id'] ?>" required>
                                        <h5>Vanue <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="v_name" id="v_name" class="form-control"
                                            value="<?php echo $gfet['v_name'] ?>"
                                                placeholder="Enter Vanue name" required>
                                            <div id="v_namevalid" style="height:15px; color:red; font-weight:bold;">
                                            </div>
                                        </div>
                                    </div>
                                  
                                    <div class="form-group">
                                        <h5>Address <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <textarea name="v_desc" id="v_desc" rows="5" class="form-control"
                                                placeholder="Enter Address Here.." required><?php echo $gfet['v_desc'] ?></textarea>
                                            <div id="v_descvalid" style="height:15px; color:red; font-weight:bold;">
                                            </div>
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
        var mydata = new FormData(upform);
        // alert(mydata);
        $.ajax({
            url: "./ajax/vanue-update.php",
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
                        title: 'VANUE HAS BEEN UPDATED.'
                    })
                    $('#upform').trigger('reset');
                    window.location.href="vanue-view.php";

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
                        title: 'VANUE HAS BEEN NOT UPDATED.'
                    })
                }
            }
        });
    });
});
</script>