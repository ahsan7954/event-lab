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
                    <h3 class="page-title">Planner</h3>
                    <div class="d-inline-block ms-auto align-items-center">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item" aria-current="page">Planner</li>
                                <li class="breadcrumb-item active" aria-current="page">Add Planner</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="ms-auto">
                    <a href="./planner-pending.php"
                        class="waves-effect waves-light text-white btn btn-rounded btn-dark mb-5">View Planner</a>
                </div>

            </div>
        </div>

        <!-- Main content -->
        <section class="content row">

            <!-- Basic Forms -->
            <div class="col-lg-6 col-sm-12 offset-lg-3 ">
                <div class="box">
                    <div class="box-header with-border">
                        <h4 class="box-title">Add Planner</h4>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="row">
                            <div class="col">
                                <form id="plannerform">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <h5>First Name <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="text" name="u_fname" class="form-control" id="u_fname"
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
                                                    <input type="text" name="u_lname" class="form-control" id="u_lname"
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
                                                placeholder="Enter Email Address">
                                            <div id="u_emailvalid" style="height:15px; color:red; font-weight:bold;"></div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <h5>DOB<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="date" name="u_dob" class="form-control"
                                                placeholder="Enter Category Name" required>
                                            <div id="u_dobvalid" style="height:15px; color:red; font-weight:bold;"></div>
                                        </div>
                                    </div>
                                    <div class="form-group">
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
                                        <div id="u_gendervalid" style="height:15px; color:red; font-weight:bold;"></div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">
                                            <h5 class="mb-0">Phone<span class="text-danger">*</span></h5>
                                        </label>
                                        <!-- <small class="sidetitle">E.g. +92-123-3456789</small> -->
                                        <input type="text" name="u_phone" class="form-control" placeholder="Enter Phone Number" id="u_phone">
                                        <div id="u_phonevalid" style="height:15px; color:red; font-weight:bold;"></div>
                                    </div>
                                    <div class="form-group">
                                        <h5>City <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="u_city" id="u_city" class="form-control"
                                                placeholder="Enter City Name" required>
                                            <div id="u_cityvalid" style="height:15px; color:red; font-weight:bold;"></div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <!-- <h5>Experience <span class="text-danger">*</span></h5> -->
                                        <h5>Experience <span class="text-danger">*</span></h5>
                                        <select class="form-control" name="u_exp" id="u_exp">
                                            <option value="">Select Years of Experience</option>
                                            <option value="0-1 Years">0 - 1 years</option>
                                            <option value="1-2 Years">1 - 2 Years </option>
                                            <option value="3-5 Years">3 - 5 Years </option>
                                            <option value="More than 5 Years">More than 5 Years</option>
                                        </select>
                                        <div id="u_expvalid" style="height:15px; color:red; font-weight:bold;"></div>
                                    </div>
                                    <div class="form-group">
                                        <h5>Achievements <span class="text-danger">*</span></h5>
                                        <input type="text" name="u_achieve" id="u_achieve"
                                            value="Birthday Party,Conferenced managed,wedding" data-role="tagsinput"
                                            placeholder="Add Achievements" class="p-5">
                                        <div id="u_achievevalid" style="height:15px; color:red; font-weight:bold;"></div>
                                    </div>
                                    <div class="form-group">
                                        <h5>Skills <span class="text-danger">*</span></h5>
                                        <input type="text" name="u_skill" id="u_skill"
                                            value="Creativity,Problem solving,Time Management" data-role="tagsinput"
                                            placeholder="Add Skills" class="p-5">
                                        <div id="u_skillvalid" style="height:15px; color:red; font-weight:bold;"></div>
                                    </div>
                                    <div class="form-group">
                                        <h5>Partners <span class="text-danger">*</span></h5>
                                        <input type="text" name="u_partners" id="u_partners" value="Event Planning,Event Timeline,Conference Planning,Wedding Planning"
                                            data-role="tagsinput" placeholder="Add Partners" class="p-5">
                                        <div id="u_partnersvalid" style="height:15px; color:red; font-weight:bold;"></div>
                                    </div>
                                    <div class="form-group">
                                        <h5>Password <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <div class="input-group">
                                                <input type="password" name="u_pswd" id="u_pswd" class="form-control"
                                                    placeholder="Enter Password">
                                                <span class="input-group-addon"><i class="fa fa-eye"
                                                        id="password1"></i></span>
                                            </div>
                                            <div id="u_pswdvalid" style="height:15px; color:red; font-weight:bold;"></div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <h5>Confirm Password <span class="text-danger">*</span></h5>
                                        <div class="input-group">
                                            <input type="password" name="u_cpswd" id="u_cpswd" class="form-control"
                                                placeholder="Enter Password Again"
                                                data-validation-required-message="This field is required">
                                            <span class="input-group-addon"><i class="fa fa-eye"
                                                    id="password2"></i></span>
                                        </div>
                                        <div id="u_cpswdvalid" style="height:15px; color:red; font-weight:bold;"></div>
                                    </div>

                                    <div class="form-group">
                                        <h5>Address <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <textarea name="u_address" id="u_address" rows="5" class="form-control"
                                                placeholder="Enter Address Here.." required></textarea>
                                            <div id="u_addressvalid" style="height:15px; color:red; font-weight:bold;"></div>
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
// ================================= Form validations =====================================

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
document.querySelector("#u_fname").addEventListener("keypress", function(e) {
    var rexex = /^[a-zA-Z\s]$/;
    if (!rexex.test(e.key)) {
        e.preventDefault();
    }
})
// ************* First name validation **********
$(document).ready(function() {
    $("#u_fname").keyup(function() {
        // To make each word capitalized
        $("#u_fname").capitalize();
        // Fetching Value 
        var id = $("#u_fname").val();
        if (id.length == '') {
            $("#u_fnamevalid").html("**Please! Enter First name");
        } else if (id.length <= 2) {
            $("#u_fnamevalid").html("**First name is too short");
        } else if (id.length >= 20) {
            $("#u_fnamevalid").html("**First name is too long");
        } else {
            $("#u_fnamevalid").html("");
        }

    })
})

// ************* Last Name Restriction **********
document.querySelector("#u_lname").addEventListener("keypress", function(e) {
    // var rexex = /^[a-zA-Z]+(\s[a-zA-Z]+)*$/;
    var rexex = /^[a-zA-Z\s]$/;
    if (!rexex.test(e.key)) {
        e.preventDefault();
    }
})
// ************* Last name validation **********
$(document).ready(function() {
    $("#u_lname").keyup(function() {
        // To make each word capitalized
        $("#u_lname").capitalize();
        // Fetching Value 
        var id = $("#u_lname").val();
        if (id.length == '') {
            $("#u_lnamevalid").html("**Please! Enter Last name");
        } else if (id.length <= 2) {
            $("#u_lnamevalid").html("**Last name is too short");
        } else if (id.length >= 20) {
            $("#u_lnamevalid").html("**Last name is too long");
        } else {
            $("#u_lnamevalid").html("");
        }

    })
})

// ************* Email validation **********
$(document).ready(function() {
    $("#u_email").keyup(function() {
        var emailFormat = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
        var id = $("#u_email").val();
        if (id == '') {
            $("#u_emailvalid").html("**Please! Enter email");
        } else if (!emailFormat.test(id)) {
            $("#u_emailvalid").html("**Please Enter a valid email address");
        } else {
            $("#u_emailvalid").html("");
        }
    })
})

// ************* Phone Number Restriction **********
document.querySelector("#u_phone").addEventListener("keypress", function(e) {
    // var rexex = /^[a-zA-Z]+(\s[a-zA-Z]+)*$/;
    var rexex = /^[a-zA-Z\s]$/;
    if (rexex.test(e.key)) {
        e.preventDefault();
    }
})

// ************* Phone number validation **********
$(document).ready(function() {
    $("#u_phone").keyup(function() {
        var ph1 = /[a-z]/g;
        var ph2 = /[A-Z]/g;
        var val = $("#u_phone").val();
        if (val == '') {
            $("#u_phonevalid").html("**Please! Enter Phone Number");
        } else if (val.length > 11) {
            $("#u_phonevalid").html("**Phone Number must be of 11 digits");
        } else if (val.length < 11) {
            $("#u_phonevalid").html("**Phone Number must be of 11 digits");
        } else if (ph1.test(val)) {
            $("#u_phonevalid").html("**Phone Number must be a number");
        } else if (ph2.test(val)) {
            $("#u_phonevalid").html("**Phone Number must be a number");
        } else {
            $("#u_phonevalid").html("");
        }
    })
})

// ************* City validation **********
$(document).ready(function() {
    $("#u_city").keyup(function() {
        // To make each word capitalized
        $("#u_city").capitalize();
        // Fetching Value 
        var id = $("#u_city").val();
        if (id.length == '') {
            $("#u_cityvalid").html("**Please! Enter City name");
        } else if (id.length <= 2) {
            $("#u_cityvalid").html("**City name is too short");
        } else if (id.length >= 20) {
            $("#u_cityvalid").html("**City name is too long");
        } else {
            $("#u_cityvalid").html("");
        }

    })
})
// ************* Achievements validation **********
$(document).ready(function() {
    $("#u_achieve").keyup(function() {
        // To make each word capitalized
        $("#u_achieve").capitalize();
        // Fetching Value 
        var id = $("#u_achieve").val();
        if (id.length == '') {
            $("#u_achievevalid").html("**Please! Enter Achievements");
        } else if (id.length <= 2) {
            $("#u_achievevalid").html("**Achievement name is too short");
        } else if (id.length >= 200) {
            $("#u_achievevalid").html("**Achievement name is too long");
        } 
        else {
            $("#u_achievevalid").html("");
        }
    })
})
// ************* Skills validation **********
$(document).ready(function() {
    $("#u_skill").keyup(function() {
        // To make each word capitalized
        $("#u_skill").capitalize();
        // Fetching Value 
        var id = $("#u_skill").val();
        if (id.length == '') {
            $("#u_skillvalid").html("**Please! Enter Skills");
        } else if (id.length <= 2) {
            $("#u_skillvalid").html("**Skill name is too short");
        } else if (id.length >= 200) {
            $("#u_skillvalid").html("**Skill name is too long");
        } else {
            $("#u_skillvalid").html("");
        }

    })
})
// ************* Partners validation **********
$(document).ready(function() {
    $("#u_partners").keyup(function() {
        // To make each word capitalized
        $("#u_partners").capitalize();
        // Fetching Value 
        var id = $("#u_partners").val();
        if (id.length == '') {
            $("#u_partnersvalid").html("**Please! Enter Skills");
        } else if (id.length <= 2) {
            $("#u_partnersvalid").html("**Skill name is too short");
        } else if (id.length >= 150) {
            $("#u_partnersvalid").html("**Skill name is too long");
        } else {
            $("#u_partnersvalid").html("");
        }

    })
})
// ************* Password validation **********
$(document).ready(function() {
    $("#u_pswd").keyup(function() {
        var num = /[0-9]/;
        var lower = /[a-z]/;
        var upper = /[A-Z]/;
        var symbol = /[~`!@#\$%\^\&*\)\(+=._-]/;
        var val2 = $("#u_pswd").val();
        if (val2 == '') {
            $("#u_pswdvalid").html("**Please! Enter Password");
        } else if (!lower.test(val2)) {
            $("#u_pswdvalid").html("**Password must contain lowercase letters");
        } else if (!upper.test(val2)) {
            $("#u_pswdvalid").html("**Password must contain atleast one Uppercase letter");
        } else if (!num.test(val2)) {
            $("#u_pswdvalid").html("**Password must contain atleast one digit");
        } else if (!symbol.test(val2)) {
            $("#u_pswdvalid").html("**Password must contain atleast one special symbol");
        } else if (val2.length < 8) {
            $("#u_pswdvalid").html("**Password must contain atleast 8 letters");
        } else {
            $("#u_pswdvalid").html("");
        }
    })
})
// ************* Confirm Password validation **********
$(document).ready(function() {
    $("#u_cpswd").keyup(function() {
        var val1 = $("#u_pswd").val();
        var val2 = $("#u_cpswd").val();
        if (val2 == '') {
            $("#u_cpswdvalid").html("**Please! Enter Password");
        } else if (val2 != val1) {
            $("#u_cpswdvalid").html("**Passwords not matched");
        } else {
            $("#u_cpswdvalid").html("");
        }
    })
})

// ************* Address validation **********
$(document).ready(function() {
    $("#u_address").keyup(function() {
        var ph = /[a-z]/g;
        var val2 = $("#u_address").val();
        if (val2.length == 0) {
            $("#u_addressvalid").html("**Please! Enter Your Address");
        } else if (val2.length <= 3) {
            $("#u_addressvalid").html("**Address is too short");
        } else {
            $("#u_addressvalid").html("");
        }
    })
})
</script>
 <script>
const togglePassword1 = document.querySelector('#password1');
const togglePassword2 = document.querySelector('#password2');
const password = document.querySelector('#u_pswd');
const password2 = document.querySelector('#u_cpswd');

togglePassword1.addEventListener('click', function(e) {
    // toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('fa-eye-slash');
});

togglePassword2.addEventListener('click', function(e) {
    // toggle the type attribute
    const type = password2.getAttribute('type') === 'password' ? 'text' : 'password';
    password2.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('fa-eye-slash');
});
</script>
<script>
$(document).ready(function() {
    $("#btn").on("click", function(e) {

        e.preventDefault();
        var mydata = new FormData(plannerform);
        if (($("#u_fnamevalid").html() == "") && 
        ($("#u_lnamevalid").html() == "") &&
         ($("#u_emailvalid").html() == "") &&
          ($("#u_phonevalid").html() == "") &&
           ($("#u_cityvalid").html() == "") &&
            ($("#u_achievevalid").html() == "") && 
            ($("#u_skillvalid").html() == "") && 
            ($("#u_partnersvalid").html() == "") &&
            ($("#u_pswdvalid").html() == "") &&
             ($("#u_cpswdvalid").html() == "") &&
              ($("#u_addressvalid").html() == "")) {
        // alert(mydata);
        $.ajax({
            url: "./ajax/planner.php",
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
                        title: 'PLANNER ALREADY EXIST.'
                    })
                }else if (show == 2 ) {
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
                        title: 'PASSWORD NOT MATCHED.'
                    })
                }else if (show == 3) {
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
                        title: 'PLANNER HAS BEEN INSERTED.'
                    })
                    $('#plannerform').trigger('reset');
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
                        title: 'PLANNER HAS BEEN NOT INSERTED.'
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