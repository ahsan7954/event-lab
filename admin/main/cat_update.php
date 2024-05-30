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
                    <h3 class="page-title">Update Category</h3>
                    <div class="d-inline-block ms-auto align-items-center">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item" aria-current="page">Category</li>
                                <li class="breadcrumb-item active" aria-current="page">Update Category</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="ms-auto">
                    <a href="./cat-view.php"
                        class="waves-effect waves-light text-white btn btn-rounded btn-dark mb-5">View Category</a>
                </div>

            </div>
        </div>

        <!-- Main content -->
        <section class="content row">

            <!-- Basic Forms -->
            <div class="col-lg-6 col-sm-12 offset-lg-3 ">
                <div class="box">
                    <div class="box-header with-border">
                        <h4 class="box-title">Update Category</h4>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="row">
                            <div class="col">
                                <form id="upform">
                                    <?php
                                           $uid=$_GET['uid'];
                                           $gsql="SELECT * FROM `category` WHERE `cid`='$uid'";
                                           $grun=mysqli_query($conn,$gsql);
                                           $gfet=mysqli_fetch_array($grun);
                                    
                                    ?>
                                    <div class="form-group">

                                        <h5>Category <span class="text-danger">*</span></h5>
                                        <input type="hidden" name="cid" class="form-control" value="<?php echo $gfet['cid'] ?>" required>
                                        <div class="controls">
                                            <input type="text" name="cname"  class="form-control" value="<?php echo $gfet['cname'] ?>"
                                                placeholder="Enter Category Name" required>
                                                <div id="catvalid" style="height:15px; color:red; font-weight:bold;"></div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <h5>Description <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <textarea name="cdesc"  rows="5" class="form-control" 
                                                placeholder="Enter Description Here.." required><?php echo $gfet['cdesc'] ?></textarea>
                                                <div id="cdvalid" style="height:15px; color:red; font-weight:bold;"></div>
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
        // alert(e);
        e.preventDefault();
        var mydata = new FormData(upform);
        // alert(mydata);
        $.ajax({
            url: "./ajax/up_cat.php",
            method: "POST",
            data: mydata,
            contentType: false,
            processData: false,
            success: function(show) {
                // alert(show);
                 if (show == 1) {
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
                        title: 'CATEGORY HAS BEEN UPDATED.'
                    })
                    $('#upform').trigger('reset');
                    window.location.href="cat-view.php";
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
                        title: 'CATEGORY HAS BEEN NOT UPDATED.'
                    })
                }
            }
        });
    });
});
</script>