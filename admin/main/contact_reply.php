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
                    <h3 class="page-title">Reply Contact</h3>
                    <div class="d-inline-block ms-auto align-items-center">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item" aria-current="page">Contact</li>
                                <li class="breadcrumb-item active" aria-current="page">Reply Contact</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="ms-auto">
                    <a href="./contact-view.php"
                        class="waves-effect waves-light text-white btn btn-rounded btn-dark mb-5">View Contact</a>
                </div>

            </div>
        </div>

        <!-- Main content -->
        <section class="content row">

            <!-- Basic Forms -->
            <div class="col-lg-6 col-sm-12 offset-lg-3 ">
                <div class="box">
                    <div class="box-header with-border">
                        <h4 class="box-title">Reply Contact</h4>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="row">
                            <div class="col">
                                <form id="myreply">
                                    <?php
                                           $uid=$_GET['uid'];
                                           $gsql="SELECT * FROM `contact` WHERE `contact_id`='$uid'";
                                           $grun=mysqli_query($conn,$gsql);
                                           $gfet=mysqli_fetch_array($grun);
                                    
                                    ?>
                                    <div class="form-group">

                                       
                                        <input type="hidden" name="contact_id" class="form-control" value="<?php echo $gfet['contact_id'] ?>" required>
                                        <div class="controls">
                                            <input type="text" name="contact_name"  class="form-control" value="<?php echo $gfet['contact_name'] ?>" readonly
                                                placeholder="Enter Category Name" required>
                                                <div id="catvalid" style="height:15px; color:red; font-weight:bold;"></div>
                                        </div>
                                        <div class="controls">
                                            <input type="text" name="cont_email"  class="form-control" value="<?php echo $gfet['contact_email'] ?>"readonly
                                                placeholder="Enter Category Name" required>
                                                <div id="catvalid" style="height:15px; color:red; font-weight:bold;"></div>
                                        </div>
                                        <div class="controls">
                                            <input type="text" name="subject"  class="form-control"
                                                placeholder="Enter Your Subject" required>
                                                <div id="catvalid" style="height:15px; color:red; font-weight:bold;"></div>
                                        </div>
                                        <div class="controls">
                                            <textarea name="msg"  rows="5" class="form-control" 
                                                placeholder="Enter Message Here.." required></textarea>
                                                <div id="cdvalid" style="height:15px; color:red; font-weight:bold;"></div>
                                        </div>
                                    </div>
                                    <div class="text-xs-right">
                                        <button type="button" id="btn" class="btn btn-info sub">Send Message</button>
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
        // alert("run");
        e.preventDefault();
        var mydata = new FormData(myreply);
        // alert(mydata);
        $.ajax({
            url: "./ajax/reply.php",
            method: "POST",
            data: mydata,
            contentType: false,
            processData: false,
            success: function(res) {
                // alert(res);
                if(res==0){
                    const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 2000,
                        timerProgressBar: true,
                        didOpen: (toast) => {
                            toast.addEventListener('mouseenter', Swal.stopTimer)
                            toast.addEventListener('mouseleave', Swal
                                .resumeTimer)
                        }
                    })

                    Toast.fire({
                        icon: 'error',
                        title: 'PLEASE FILL ALL INPUTS!'
                    })
                }else if(res==3){
                    const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 2000,
                        timerProgressBar: true,
                        didOpen: (toast) => {
                            toast.addEventListener('mouseenter', Swal.stopTimer)
                            toast.addEventListener('mouseleave', Swal
                                .resumeTimer)
                        }
                    })

                    Toast.fire({
                        icon: 'success',
                        title: 'MESSAGE HAS BEEN SEND.'
                    })
                    $('#myreply').trigger('reset');

                }else{
                    const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 2000,
                        timerProgressBar: true,
                        didOpen: (toast) => {
                            toast.addEventListener('mouseenter', Swal.stopTimer)
                            toast.addEventListener('mouseleave', Swal
                                .resumeTimer)
                        }
                    })

                    Toast.fire({
                        icon: 'error',
                        title: 'MESSAGE HAS BEEN SEND.'
                    })
                }
        
            }
        });
    });
});
</script>