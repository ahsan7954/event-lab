<?php
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
                                <li class="breadcrumb-item active" aria-current="page">Add Vanue</li>
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
                        <h4 class="box-title">Add Vanue</h4>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="row">
                            <div class="col">
                                <form id="vanueform">
                                    <div class="form-group">
                                        <h5>Vanue <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="v_name" id="v_name" class="form-control"
                                                placeholder="Enter Vanue name" required>
                                            <div id="v_namevalid" style="height:15px; color:red; font-weight:bold;">
                                            </div>
                                        </div>
                                    </div>
                                  
                                    <div class="form-group">
                                        <h5>Address <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <textarea name="v_desc" id="v_desc" rows="5" class="form-control"
                                                placeholder="Enter Address Here.." required></textarea>
                                            <div id="v_descvalid" style="height:15px; color:red; font-weight:bold;">
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="text-xs-right">
                                        <button type="submit" id="btn" class="btn btn-info sub">Submit</button>
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
    var tr = document.getElementById("v_name");
    tr.addEventListener("input", (e) => {
      var name = e.target.value;
      if (!name.match(/^[A-Za-z ]*$/)) {
        document.getElementById("v_namevalid").innerHTML = "Just only contain letter";
      } else {
        document.getElementById("v_namevalid").innerHTML = "";
      }
    })
    var tr = document.getElementById("v_desc");
    tr.addEventListener("input", (e) => {
      var seat = e.target.value;
      if (!seat.match(/^[A-Za-z0-9#-_ ]*$/)) {
        document.getElementById("v_descvalid").innerHTML = "Just only contain letter and numbers Only USe @#-_ this special letter ";
      } else {
        document.getElementById("v_descvalid").innerHTML = "";
      }
    })
</script>

<script>
$(document).ready(function() {
    $("#btn").on("click", function(e) {

        e.preventDefault();
        var mydata = new FormData(vanueform);
        // alert(mydata);
        $.ajax({
            url: "./ajax/vanue.php",
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
                        title: 'VANUE ALREADY EXIST.'
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
                        title: 'VANUE HAS BEEN INSERTED.'
                    })
                    $('#vanueform').trigger('reset');
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
                        title: 'VANUE HAS BEEN NOT INSERTED.'
                    })
                }
            }
        });
    });
});
</script>