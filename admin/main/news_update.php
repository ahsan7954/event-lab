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
                    <h3 class="page-title">News</h3>
                    <div class="d-inline-block ms-auto align-items-center">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item" aria-current="page">News</li>
                                <li class="breadcrumb-item active" aria-current="page">Update News</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="ms-auto">
                    <a href="./news-view.php"
                        class="waves-effect waves-light text-white btn btn-rounded btn-dark mb-5">View News</a>
                </div>

            </div>
        </div>

        <!-- Main content -->
        <section class="content row">

            <!-- Basic Forms -->
            <div class="col-lg-6 col-sm-12 offset-lg-3 ">
                <div class="box">
                    <div class="box-header with-border">
                        <h4 class="box-title">Update News</h4>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="row">
                            <div class="col">
                                <form id="newsform">
                                <?php
                                           $uid=$_GET['uid'];
                                           $gsql="SELECT * FROM `news` INNER JOIN `category` ON n_cate=cid WHERE `n_id`='$uid'";
                                           $grun=mysqli_query($conn,$gsql);
                                           $gfet=mysqli_fetch_array($grun);
                                    
                                    ?>
                                    <div class="form-group">
                                    <input type="hidden" name="n_id" class="form-control" value="<?php echo $gfet['n_id'] ?>" required>
                                        <h5>News Category <span class="text-danger">*</span></h5>
                                        <select class="form-control bg-white" name="n_cate">
                                            <option value="<?php echo $gfet['n_cate'] ?>"><?php echo $gfet['cname'] ?></option>
                                            <option value="">Select News Category</option>
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
                                        <h5>News Title <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="n_title" id="n_title" class="form-control"
                                            value="<?php echo $gfet['n_title'] ?>"
                                                placeholder="Enter News Title">
                                            <div id="n_titlevalid" style="height:15px; color:red; font-weight:bold;">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <h5>Featured Image<span class="text-danger">*</span></h5>
                                        <input type="file" id="n_pic" name="n_pic" class="form-control">
                                        <div id="n_picvalid" style="height:15px; color:red; font-weight:bold;"></div>
                                    </div>

                                    <div class="form-group">
                                        <h5>Description <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <textarea name="n_desc" id="n_desc" rows="5" class="form-control"
                                                placeholder="Enter Description Here.." required><?php echo $gfet['n_desc'] ?></textarea>
                                            <div id="n_descvalid" style="height:15px; color:red; font-weight:bold;">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <h5>Status<span class="text-danger">*</span></h5>
                                        <div class="controls" style="d-flex">
                                            <fieldset>
                                                <input name="n_status" type="radio" id="radio_3" value="ON" required
                                                    checked>
                                                <label for="radio_3">ON</label>
                                            </fieldset>
                                            <fieldset>
                                                <input name="n_status" type="radio" id="radio_4" value="OFF">
                                                <label for="radio_4">OFF</label>
                                            </fieldset>
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
        var mydata = new FormData(newsform);
        // alert(mydata);
        $.ajax({
            url: "./ajax/news-update.php",
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
                        title: 'NEWS ALREADY EXIST.'
                    })
                }else if (show == 4 ) {
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
                        title: 'NEWS HAS BEEN UPDATED.'
                    })
                    $('#newsform').trigger('reset');
                    window.location.href="news-view.php";
                    
                }else if (show == 5) {
                    
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
                        title: 'NEWS HAS BEEN UPDATED WITH OLD IMAGE.'
                    })
                    $('#newsform').trigger('reset');
                    window.location.href="news-view.php";
                    
                } else {
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
                        title: 'NEWS HAS BEEN NOT INSERTED.'
                    })
                }
            }
        });
    });
});
</script>