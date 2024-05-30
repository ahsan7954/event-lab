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
                    <h3 class="page-title">Designer</h3>
                    <div class="d-inline-block ms-auto align-items-center">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item" aria-current="page">Designer</li>
                                <li class="breadcrumb-item active" aria-current="page">Update Designer</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="ms-auto">
                    <a href="./designer-pending.php"
                        class="waves-effect waves-light text-white btn btn-rounded btn-dark mb-5">View Designer</a>
                </div>

            </div>
        </div>

        <!-- Main content -->
        <section class="content row">

            <!-- Basic Forms -->
            <div class="col-lg-6 col-sm-12 offset-lg-3 ">
                <div class="box">
                    <div class="box-header with-border">
                        <h4 class="box-title">Update Designer</h4>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="row">
                            <div class="col">
                                <form id="upform">
                                <?php
                                        $uid=$_GET['uid'];
                                        $gsql="SELECT * FROM `a_users` WHERE `u_id`='$uid'";
                                        $grun=mysqli_query($conn,$gsql);
                                        $gfet=mysqli_fetch_array($grun);
                                    
                                    ?>

                                    <div class="row">
                                        <div class="col-6">
                                        <input type="hidden" name="u_id" class="form-control" value="<?php echo $gfet['u_id'] ?>" required>
                                            <div class="form-group">
                                                <h5>First Name <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="text" name="u_fname" id="u_fname" 
                                                    value="<?php echo $gfet['u_fname'] ?>"
                                                    class="form-control"
                                                        placeholder="Enter First Name" required>
                                                    <div id="u_fnamevalid"
                                                        style="height:15px; color:red; font-weight:bold;"></div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <h5>Last Name <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="text" name="u_lname" id="u_lname" 
                                                    value="<?php echo $gfet['u_lname'] ?>"class="form-control"
                                                        placeholder="Enter Last Name" required>
                                                    <div id="u_lnamevalid"
                                                        style="height:15px; color:red; font-weight:bold;"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <h5>Enter Email Address <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="u_email" id="u_email" class="form-control"
                                            value="<?php echo $gfet['u_email'] ?>"
                                                placeholder="Enter Email Address">
                                            <div id="u_emailvalid" style="height:15px; color:red; font-weight:bold;">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <h5>DOB<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="date" name="u_dob" id="u_dob" class="form-control"
                                            value="<?php echo $gfet['u_dob'] ?>"
                                                placeholder="Enter Category Name" required>
                                            <div id="u_dobvalid" style="height:15px; color:red; font-weight:bold;">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="form-group">
                                        <h5>Gender<span class="text-danger">*</span></h5>
                                        <div class="controls ">
                                            <div class="form-check form-check-inline">
                                                <input name="u_gender" type="radio" id="radio_3" value="Male" required
                                                    checked>
                                                <label for="radio_3">Male</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input name="u_gender" type="radio" id="radio_4" value="Female">
                                                <label for="radio_4">Female</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input name="u_gender" type="radio" id="radio_5" value="Others">
                                                <label for="radio_5">Others</label>
                                            </div>
                                        </div>
                                    </div> -->
                                    <div class="form-group">
                                        <label class="form-label">
                                            <h5 class="mb-0">Phone<span class="text-danger">*</span></h5>
                                        </label>
                                        <small class="sidetitle">E.g. +92-123-3456789</small>
                                        <input type="text" name="u_phone" class="form-control"
                                        value="<?php echo $gfet['u_phone'] ?>" id="phone2">
                                        <div id="phone2valid" style="height:15px; color:red; font-weight:bold;"></div>
                                    </div>
                                    <div class="form-group">
                                        <h5>City <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="u_city" id="u_city" class="form-control"
                                            value="<?php echo $gfet['u_city'] ?>"
                                                placeholder="Enter City Name" required>
                                            <div id="u_cityvalid" style="height:15px; color:red; font-weight:bold;">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <!-- <h5>Experience <span class="text-danger">*</span></h5> -->
                                        <h5>Experience <span class="text-danger">*</span></h5>
                                        <select class="form-control bg-white" id="u_exp" name="u_exp">
                                            <option value="<?php echo $gfet['u_exp'] ?>"><?php echo $gfet['u_exp'] ?></option>
                                            <option value="">Select Years of Experience</option>
                                            <option value="0-1 Years">0 - 1 years</option>
                                            <option value="1-2 Years">1 - 2 Years </option>
                                            <option value="3-5 Years">3 - 5 Years </option>
                                            <option value="More than 5 Years">More than 5 Years</option>
                                        </select>
                                        <div id="u_expvalid" style="height:15px; color:red; font-weight:bold;"></div>
                                    </div>
                                    <div class="form-group">
                                        <!-- <h5>Experience <span class="text-danger">*</span></h5> -->
                                        <h5>Ordered Design Off <span class="text-danger">*</span></h5>
                                        <select class="form-control bg-white" id="u_order_design" name="u_order_design">
                                            <option  value="<?php echo $gfet['u_order_design'] ?>"><?php echo $gfet['u_order_design'] ?></option>
                                            <option value="">Select Category Of Your Design</option>
                                            <option value="Business Design">Business Design</option>
                                            <option value="Products Design">Products Design </option>
                                            <option value="Branding Design">Branding Design</option>
                                            <option value="Animation Design">Animation Design</option>
                                            <option value="Environmental Design">Environmental Design</option>
                                            <option value="Print Design">Print Design</option>
                                            <option value="Publishing Design">Publishing Design</option>
                                        </select>
                                        <div id="u_order_designvalid" style="height:15px; color:red; font-weight:bold;">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <h5>Description <small>(optional)</small></h5>
                                        <div class="controls">
                                            <textarea name="u_description" id="u_description" rows="4"
                                                class="form-control" placeholder="Enter Description Here..."
                                                required><?php echo $gfet['u_description'] ?></textarea>
                                            <div id="u_descriptionvalid"
                                                style="height:15px; color:red; font-weight:bold;"></div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <h5>Company <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="u_company" id="u_company" 
                                            value="<?php echo $gfet['u_company'] ?>"class="form-control"
                                                placeholder="Enter Company Name" required>
                                            <div id="u_companyvalid" style="height:15px; color:red; font-weight:bold;">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <h5>Prefer Color <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="color" name="u_prefer_color" id="u_prefer_color"
                                            value="<?php echo $gfet['u_prefer_color'] ?>"
                                                class="form-control" required>
                                        </div>
                                        <div id="u_prefer_colorvalid" style="height:15px; color:red; font-weight:bold;">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <h5>Tools Worked On <span class="text-danger">*</span></h5>
                                        <input type="text" name="u_tools"
                                        value="<?php echo $gfet['u_tools'] ?>"data-role="tagsinput"
                                            placeholder="Add Tools" class="p-5">
                                        <div id="u_toolsvalid" style="height:15px; color:red; font-weight:bold;"></div>
                                    </div>
                                    <div class="form-group">
                                        <h5>Written Content To Be Added <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="u_written_content" id="u_written_content"
                                                class="form-control"
                                                value="<?php echo $gfet['u_written_content'] ?>" placeholder="Enter Written Content" required>
                                            <div id="u_written_contentvalid"
                                                style="height:15px; color:red; font-weight:bold;"></div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Number Of Designs</label>
                                        <input id="u_designs_no"
                                         type="number" min="0"  name="u_designs_no"
                                         value="<?php echo $gfet['u_designs_no'] ?>" 
                                            class="form-control">
                                        <div id="u_design_novalid" style="height:15px; color:red; font-weight:bold;">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <h5>Password <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <div class="input-group">
                                                <input type="password" name="u_pswd" id="u_pswd" class="form-control"
                                                value="<?php echo $gfet['u_pswd'] ?>" 
                                                    placeholder="Enter Password">
                                                <span class="input-group-addon"><i class="fa fa-eye"
                                                        id="password1"></i></span>
                                            </div>
                                            <div id="u_pswdvalid" style="height:15px; color:red; font-weight:bold;">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="form-group">
                                        <h5>Confirm Password <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <div class="input-group">
                                                <input type="password" name="u_cpswd" id="u_cpswd" class="form-control"
                                                    placeholder="Enter Password Again"
                                                    data-validation-required-message="This field is required">
                                                <span class="input-group-addon"><i class="fa fa-eye"
                                                        id="password2"></i></span>
                                            </div>
                                            <div id="u_cpswdvalid" style="height:15px; color:red; font-weight:bold;">
                                            </div>
                                        </div>
                                    </div> -->

                                    <div class="form-group">
                                        <h5>Address <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <textarea name="u_address" id="u_address" rows="5" class="form-control"
                                                placeholder="Enter Address Here.." required><?php echo $gfet['u_address'] ?> </textarea>
                                            <div id="u_addressvalid" style="height:15px; color:red; font-weight:bold;">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <h5>Status<span class="text-danger">*</span></h5>
                                        <div class="controls ">
                                            <div class="form-check form-check-inline">
                                                <input name="u_status" type="radio" id="radio_7" value="Pending" required
                                                   checked >
                                                <label for="radio_7">Pending</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input name="u_status" type="radio" id="radio_6" value="Confirmed">
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
        // alert(e);
        e.preventDefault();
        var mydata = new FormData(upform);
        // alert(mydata);
        $.ajax({
            url: "./ajax/desig-update.php",
            method: "POST",
            data: mydata,
            contentType: false,
            processData: false,
            success: function(show) {
                // alert(show);
                if (show == 5) {

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
                }else if (show == 6) {
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
                        title: 'DESIGNER HAS BEEN UPDATED.'
                    })
                    $('#plannerform').trigger('reset');
                    window.location.href="designer-pending.php";

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
                        title: 'DESIGNER HAS BEEN NOT UPDATED.'
                    })
                }
            }
        });
    });
});
</script>