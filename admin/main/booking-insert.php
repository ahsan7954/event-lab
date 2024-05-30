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
                                    <div class="form-group">
                                        <h5>Event Category <span class="text-danger">*</span></h5>
                                        <select class="form-control bg-white" name="b_cate">
                                            <option value="">Select Event Category</option>
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
                                                class="form-control" placeholder="Enter Name" required>
                                            <div id="b_client_namevalid"
                                                style="height:15px; color:red; font-weight:bold;"></div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <h5>Email <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="b_client_email" id="b_client_email"
                                                class="form-control" placeholder="Enter Email Address">
                                            <div id="b_client_emailvalid"
                                                style="height:15px; color:red; font-weight:bold;"></div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">
                                            <h5 class="mb-0">Contact No<span class="text-danger">*</span></h5>
                                        </label>
                                        <!-- <small class="sidetitle">E.g. +92-123-3456789</small> -->
                                        <input type="text" name="b_client_phone" class="form-control"  placeholder="Enter Phone Number" id="b_client_phone">
                                        <div id="b_client_phonevalid" style="height:15px; color:red; font-weight:bold;"></div>
                                    </div>
                                    <div class="form-group">
                                        <h5>Occasion Title <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="b_occasion_title" id="b_occasion_title"
                                                class="form-control" placeholder="Enter Occasion Title" required>
                                            <div id="b_occasion_titlevalid"
                                                style="height:15px; color:red; font-weight:bold;"></div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <h5>Occasion Start Date<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="date" name="b_occasion_sdate" id="b_occasion_sdate"
                                                class="form-control" required>
                                            <div id="b_occasion_sdatevalid"
                                                style="height:15px; color:red; font-weight:bold;"></div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <h5>Occasion Start Time<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="time" name="b_occasion_stime" id="b_occasion_stime"
                                                class="form-control" required>
                                            <div id="b_occasion_stimevalid"
                                                style="height:15px; color:red; font-weight:bold;"></div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <h5>Vanue City<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="b_vanue_city" id="b_vanue_city" value="Faisalbad" readonly
                                                class="form-control" required>
                                            <div id="b_vanue_cityvalid"
                                                style="height:15px; color:red; font-weight:bold;"></div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <h5>No of Seats<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="number" name="b_seats" id="b_seats" class="form-control"
                                                placeholder="Enter Maximum Seats" required>
                                            <div id="b_seatsvalid" style="height:15px; color:red; font-weight:bold;">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <h5>Select Vanue <span class="text-danger">*</span></h5>
                                        <select class="form-control bg-white" name="b_vanue_host">
                                            <option value="">Select Vanue Host</option>
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
                                                placeholder="Enter Occasion Description.." required></textarea>
                                            <div id="b_descripvalid" style="height:15px; color:red; font-weight:bold;">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <h5>Occasion Type<span class="text-danger">*</span></h5>
                                        <div class="controls ">
                                            <div class="form-check form-check-inline">
                                                <input name="b_type" type="radio" id="radio_3" value="Public" required
                                                    checked>
                                                <label for="radio_3">Public</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input name="b_type" type="radio" id="radio_4" value="Private">
                                                <label for="radio_4">Private</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="text-xs-right">
                                        <button type="button" id="btn" class="btn btn-info sub">Submit</button>
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
      // ************* First letter of each word in field should be capital **********
jQuery.fn.capitalize = function() {
    $(this[0]).keyup(function(event) {
        var box = event.target;
        var txt = $(this).val();
        var stringStart = box.selectionStart;
        var stringEnd = box.selectionEnd;
        $(this).val(txt.replace(/^(.)|(\s|\-)(.)/g, function($word) {
            return $word.toUpperCase();
        }));
        box.setSelectionRange(stringStart, stringEnd);
    });

    return this;
}
   
    // ************* First Name Restriction **********
document.querySelector("#b_client_name").addEventListener("keypress", function(e) {
    var rexex = /^[a-zA-Z\s]$/;
    if (!rexex.test(e.key)) {
        e.preventDefault();
    }
})
// ************* First name validation **********
$(document).ready(function() {
    $("#b_client_name").keyup(function() {
        // To make each word capitalized
        $("#b_client_name").capitalize();
        // Fetching Value 
        var id = $("#b_client_name").val();
        if (id.length == '') {
            $("#b_client_namevalid").html("**Please! Enter First name");
        } else if (id.length <= 2) {
            $("#b_client_namevalid").html("**First name is too short");
        } else if (id.length >= 20) {
            $("#b_client_namevalid").html("**First name is too long");
        } else {
            $("#b_client_namevalid").html("");
        }

    })
})
    
      // ************* email validation **********
  
      $(document).ready(function() {
    $("#b_client_email").keyup(function() {
        var emailFormat = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
        var id = $("#b_client_email").val();
        if (id == '') {
            $("#b_client_emailvalid").html("**Please! Enter email");
        } else if (!emailFormat.test(id)) {
            $("#b_client_emailvalid").html("**Please Enter a valid email address");
        } else {
            $("#b_client_emailvalid").html("");
        }
    })
})

        // ************* Phone Number Restriction **********
document.querySelector("#b_client_phone").addEventListener("keypress", function(e) {
    // var rexex = /^[a-zA-Z]+(\s[a-zA-Z]+)*$/;
    var rexex = /^[a-zA-Z\s]$/;
    if (rexex.test(e.key)) {
        e.preventDefault();
    }
})

// ************* Phone number validation **********
$(document).ready(function() {
    $("#b_client_phone").keyup(function() {
        var ph1 = /[a-z]/g;
        var ph2 = /[A-Z]/g;
        var val = $("#b_client_phone").val();
        if (val == '') {
            $("#b_client_phonevalid").html("**Please! Enter Phone Number");
        } else if (val.length > 11) {
            $("#b_client_phonevalid").html("**Phone Number must be of 11 digits");
        } else if (val.length < 11) {
            $("#b_client_phonevalid").html("**Phone Number must be of 11 digits");
        } else if (ph1.test(val)) {
            $("#b_client_phonevalid").html("**Phone Number must be a number");
        } else if (ph2.test(val)) {
            $("#b_client_phonevalid").html("**Phone Number must be a number");
        } else {
            $("#b_client_phonevalid").html("");
        }
    })
})
     // ************* occasion_title Restriction **********
document.querySelector("#b_occasion_title").addEventListener("keypress", function(e) {
    var rexex = /^[a-zA-Z\s]$/;
    if (!rexex.test(e.key)) {
        e.preventDefault();
    }
})
// ************* occasion_title validation **********
$(document).ready(function() {
    $("#b_occasion_title").keyup(function() {
        // To make each word capitalized
        $("#b_occasion_title").capitalize();
        // Fetching Value 
        var id = $("#b_occasion_title").val();
        if (id.length == '') {
            $("#b_occasion_titlevalid").html("**Please! Enter First name");
        } else if (id.length <= 2) {
            $("#b_occasion_titlevalid").html("**First name is too short");
        } else if (id.length >= 20) {
            $("#b_occasion_titlevalid").html("**First name is too long");
        } else {
            $("#b_occasion_titlevalid").html("");
        }

    })
})
    // var tr = document.getElementById("b_descrip");
    // tr.addEventListener("input", (e) => {
    //   var seat = e.target.value;
    //   if (!seat.match(/^[A-Za-z0-9., ]*$/)) {
    //     document.getElementById("b_descripvalid").innerHTML = "Just only contain letter and numbers";
    //   } else {
    //     document.getElementById("b_descripvalid").innerHTML = "";
    //   }
    // })

   
   

</script>

<script>
$(document).ready(function() {
    $("#btn").on("click", function(e) {

        e.preventDefault();
        var mydata = new FormData(bookingform);
        if (($("#b_client_namevalid").html() == "") &&
         ($("#b_client_emailvalid").html() == "") &&
         ($("#b_client_phonevalid").html() == "") &&
         ($("#b_occasion_titlevalid").html() == "") //&& 
        // ($("#b_descripvalid").html() == "") 
       
              ){
        // alert(mydata);
        $.ajax({
            url: "./ajax/booking.php",
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
                        title: 'Client ALREADY EXIST.'
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
                        title: 'BOOKING HAS BEEN INSERTED.'
                    })
                    $('#bookingform').trigger('reset');
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
                        title: 'YOUR DATA IS NOT VALID.'
                    })
    }
    });
});
</script>