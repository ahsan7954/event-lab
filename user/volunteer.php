<?php
    include('./include/header.php');
?>
<style>
.lab {
    font-size: 20px;
    /* font-weight: bolder; */
    margin-bottom: 1px;
    letter-spacing: 2px;
    padding-left: 2px;
}

.primary-input-group input,
.primary-input-group textarea,
.primary-input-group select {
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    border-radius: 5px;
    border: 1px solid #8d8d8d;
}

.icon {
    position: absolute;
    left: 95%;
    bottom: 29%;
}
</style>
<div class="breadcrumb-area">
    <div class="container">
        <div class="row align-items-end">
            <div class="col-lg-12">
                <div class="breadcrumb-content">
                    <div class="page-outlined-text">
                        <h1>Job Application</h1>
                    </div>
                    <h2 class="page-title">Volunteer Registeration</h2>
                    <ul class="page-switcher">
                        <li><a href="index.php">Home <i class="bi bi-caret-right"></i></a></li>
                        <li>Volunteer Form</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="contact-wrapper overflow-hidden">
    <div class="container pt-120 position-relative">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <form id="volunteerform">
                    <div class="contact-form-wrapper">
                        <h4 class="contact-form-title text-center">Join us now</h4>
                        <div class="row">
                            <div class="col-6">
                                <div class="primary-input-group">
                                    <label class="lab">First Name <span class="text-danger">*</span></label>
                                    <div class="controls">
                                        <input type="text" id="u_fname" name="u_fname" placeholder="Enter First Name"
                                            required>
                                        <div id="u_fnamevalid" style="height:15px; color:red; font-weight:bold;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="primary-input-group">
                                    <label class="lab">Last Name <span class="text-danger">*</span></label>
                                    <div class="controls">
                                        <input type="text" id="u_lname" name="u_lname" placeholder="Enter Last Name"
                                            required>
                                        <div id="u_lnamevalid" style="height:15px; color:red; font-weight:bold;"></div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="primary-input-group mt-3">
                            <label class="lab">Enter Email Address <span class="text-danger">*</span></label>
                            <div class="controls">
                                <input type="text" id="u_email" name="u_email" placeholder="Enter Email Address">
                                <div id="u_emailvalid" style="height:15px; color:red; font-weight:bold;"></div>
                            </div>
                        </div>
                        <div class="primary-input-group mt-3">
                            <label class="lab">DOB<span class="text-danger">*</span></label>
                            <div class="controls">
                                <input type="date" id="u_dob" name="u_dob" placeholder="Enter Category Name" required>
                                <div id="u_dobvalid" style="height:15px; color:red; font-weight:bold;"></div>
                            </div>
                        </div>
                        <div class="primary-input-group mt-3">
                            <label class="lab">Gender <span class="text-danger">*</span></label>
                            <select name="u_gender" id="u_gender">
                                <option value="">Select Your Gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female </option>
                                <option value="Others">Others</option>
                            </select>
                            <div id="u_gendervalid" style="height:15px; color:red; font-weight:bold;"></div>

                        </div>
                        <div class="primary-input-group mt-3">
                            <label class="lab">Phone<span class="text-danger">*</span></label>
                            <!-- <small class="sidetitle">E.g. +92-123-3456789</small> -->
                            <input type="tel" name="u_phone" id="u_phone" placeholder="Enter Phone Number">
                            <div id="u_phonevalid" style="height:15px; color:red; font-weight:bold;"></div>

                        </div>
                        <div class="primary-input-group mt-3">
                            <label class="lab">City <span class="text-danger">*</span></label>
                            <div class="controls">
                                <input type="text" id="u_city" name="u_city" placeholder="Enter City Name" required>
                                <div id="u_cityvalid" style="height:15px; color:red; font-weight:bold;"></div>
                            </div>
                        </div>
                        <div class="primary-input-group mt-3">
                            <label class="lab">Type Of Occasions (You Want To Volunteer) <span
                                    class="text-danger">*</span></label>
                            <small class="sidetitle">E.g. Birthday Party, Conference, wedding</small>
                            <input type="text" id="u_occasions" name="u_occasions" placeholder="Add Occasions">
                            <div id="u_occasionsvalid" style="height:15px; color:red; font-weight:bold;"></div>
                        </div>
                        <div class="primary-input-group mt-3">
                            <label class="lab">Experience <span class="text-danger">*</span></label>
                            <select name="u_exp" id="u_exp">
                                <option value="">Select Years of Experience</option>
                                <option value="0-1 Years">0 - 1 years</option>
                                <option value="1-2 Years">1 - 2 Years </option>
                                <option value="3-5 Years">3 - 5 Years </option>
                                <option value="More than 5 Years">More than 5 Years</option>
                            </select>
                            <div id="u_expvalid" style="height:15px; color:red; font-weight:bold;"></div>

                        </div>
                        <div class="primary-input-group mt-3">
                            <label class="lab">Achievements <span class="text-danger">*</span></label>
                            <small class="sidetitle">E.g. Birthday Party, Conferenced managed, wedding</small>
                            <input type="text" id="u_achieve" name="u_achieve" placeholder="Add Achievements">
                            <div id="u_achievevalid" style="height:15px; color:red; font-weight:bold;"></div>

                        </div>
                        <div class="primary-input-group mt-3">
                            <label class="lab">Personal Skills <span class="text-danger">*</span></label>
                            <small>E.g. Creativity, Problem solving, Time Management</small>
                            <input type="text" id="u_skill" name="u_skill" placeholder="Add Skills">
                            <div id="u_skillvalid" style="height:15px; color:red; font-weight:bold;"></div>

                        </div>
                        <div class="primary-input-group mt-3">
                            <label class="lab">Password <span class="text-danger">*</span></label>
                            <div class="controls">
                                <div class="input-group">
                                    <input type="password" name="u_pswd" id="u_pswd" placeholder="Enter Password">
                                    <i class="far fa-eye icon" id="password1"></i>
                                </div>
                            </div>
                            <div id="u_pswdvalid" style="height:15px; color:red; font-weight:bold;"></div>

                        </div>
                        <div class="primary-input-group mt-3">
                            <label class="lab">Confirm Password <span class="text-danger">*</span></label>
                            <div class="controls">
                                <div class="input-group">
                                    <input type="password" name="u_cpswd" id="u_cpswd"
                                        placeholder="Enter Password Again">
                                    <i class="far fa-eye icon" id="password2"></i>
                                </div>
                            </div>
                            <div id="u_cpswdvalid" style="height:15px; color:red; font-weight:bold;"></div>

                        </div>

                        <div class="primary-input-group mt-3">
                            <label class="lab">Address <span class="text-danger">*</span></label>
                            <div class="controls">
                                <textarea name="u_address" id="u_address" rows="5" placeholder="Enter Address Here.."
                                    required></textarea>
                                <div id="u_addressvalid" style="height:15px; color:red; font-weight:bold;"></div>

                            </div>
                        </div>
                        <div class="submit-btn">
                            <button type="submit" id="btn" class="primary-submit">Submit Now</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<?php
    include('./include/footer.php');
  ?>
  <!-- validation start
<script>

var tr = document.getElementById("u_fname");
    tr.addEventListener("input", (e) => {
      var name = e.target.value;
      if (!name.match(/^[A-Za-z ]*$/)) {
        document.getElementById("u_fnamevalid").innerHTML = "Just only contain letter";
      } else {
        document.getElementById("u_fnamevalid").innerHTML = "";
      }
    })
    var tr = document.getElementById("u_lname");
    tr.addEventListener("input", (e) => {
      var lname = e.target.value;
      if (!lname.match(/^[A-Za-z ]*$/)) {
        document.getElementById("u_lnamevalid").innerHTML = "Just only contain letter";
      } else {
        document.getElementById("u_lnamevalid").innerHTML = "";
      }
    })
    
    var tr = document.getElementById("u_email");
    tr.addEventListener("input", (e) => {
      var email = e.target.value;
      if (!email.match(/^\w+([.-]?\w+)*@\w+([.-]?\w+)*(\.\w{2,3})+$/)) {
        document.getElementById("u_emailvalid").innerHTML = "Email must be in the format 'example@domain.com'.";
      } else {
        document.getElementById("u_emailvalid").innerHTML = "";
      }
    })
    var tr = document.getElementById("u_phone");
    tr.addEventListener("input", (e) => {
      var phone = e.target.value;
      if (!phone.match(/^[+]*[(]{0,1}[0-9]{1,3}[)]{0,1}[-\s\./0-9]*$/g)) {
        document.getElementById("u_phonevalid").innerHTML = "Just only contain numbers";
      } else {
        document.getElementById("u_phonevalid").innerHTML = "";
      }
    })
     var tr = document.getElementById("u_city");
    tr.addEventListener("input", (e) => {
      var tname = e.target.value;
      if (!tname.match(/^[A-Za-z ]*$/)) {
        document.getElementById("u_cityvalid").innerHTML = "Just only contain letter";
      } else {
        document.getElementById("u_cityvalid").innerHTML = "";
      }
    })
    var tr = document.getElementById("u_occasions");
    tr.addEventListener("input", (e) => {
      var oname = e.target.value;
      if (!oname.match(/^[A-Za-z, ]*$/)) {
        document.getElementById("u_occasionsvalid").innerHTML = "Just only contain letter";
      } else {
        document.getElementById("u_occasionsvalid").innerHTML = "";
      }
    })
    var tr = document.getElementById("u_achieve");
    tr.addEventListener("input", (e) => {
      var aname = e.target.value;
      if (!aname.match(/^[A-Za-z, ]*$/)) {
        document.getElementById("u_achievevalid").innerHTML = "Just only contain letter";
      } else {
        document.getElementById("u_achievevalid").innerHTML = "";
      }
    })
    var tr = document.getElementById("u_skill");
    tr.addEventListener("input", (e) => {
      var sname = e.target.value;
      if (!sname.match(/^[A-Za-z, ]*$/)) {
        document.getElementById("u_skillvalid").innerHTML = "Just only contain letter";
      } else {
        document.getElementById("u_skillvalid").innerHTML = "";
      }
    })
    var tr = document.getElementById("u_pswd");
    tr.addEventListener("input", (e) => {
      var pas1 = e.target.value;
      if (!pas1.match(/^[A-Z a-z0-9@#-_ ]*$/)) {
        document.getElementById("u_pswdvalid").innerHTML = "Only USe @#-_ this special letter ";
      } else {
        document.getElementById("u_pswdvalid").innerHTML = "";
      }
    })
    var tr = document.getElementById("u_cpswd");
    tr.addEventListener("input", (e) => {
      var pas2 = e.target.value;
      if (!pas2.match(/^[A-Z a-z0-9@#-_ ]*$/)) {
        document.getElementById("u_cpswdvalid").innerHTML = "Only USe @#-_ this special letter ";
      } else {
        document.getElementById("u_cpswdvalid").innerHTML = "";
      }
    })
    var tr = document.getElementById("u_address");
    tr.addEventListener("input", (e) => {
      var seat = e.target.value;
      if (!seat.match(/^[A-Za-z0-9#-_ ]*$/)) {
        document.getElementById("u_addressvalid").innerHTML = "Just only contain letter and numbers Only USe @#-_ this special letter ";
      } else {
        document.getElementById("u_addressvalid").innerHTML = "";
      }
    })
</script> -->
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

// ************* Partners validation **********
$(document).ready(function() {
    $("#u_occasions").keyup(function() {
        // To make each word capitalized
        $("#u_occasions").capitalize();
        // Fetching Value 
        var id = $("#u_occasions").val();
        if (id.length == '') {
            $("#u_occasionsvalid").html("**Please! Enter Occasions Type");
        } else if (id.length <= 2) {
            $("#u_occasionsvalid").html("**Name is too short");
        } else if (id.length >= 50) {
            $("#u_occasionsvalid").html("**Name is too long");
        } else {
            $("#u_occasionsvalid").html("");
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
        } else if (id.length >= 50) {
            $("#u_achievevalid").html("**Achievement name is too long");
        } else {
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
            $("#u_skillvalid").html("**Skills name is too short");
        } else if (id.length >= 40) {
            $("#u_skillvalid").html("**Skills name is too long");
        } else {
            $("#u_skillvalid").html("");
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
<!-- validation end -->
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
        var mydata = new FormData(volunteerform);
        if (($("#u_fnamevalid").html() == "") && ($("#u_lnamevalid").html() == "") && ($(
                    "#u_emailvalid")
                .html() == "") && ($("#u_phonevalid").html() == "") && ($("#u_cityvalid")
                .html() == "") && ($("#u_achievevalid")
                .html() == "") && ($("#u_skillvalid")
                .html() == "") && ($("#u_occasionsvalid")
                .html() == "") &&
            ($("#u_pswdvalid").html() == "") && ($("#u_cpswdvalid").html() == "") && ($(
                    "#u_addressvalid")
                .html() == "")) {
        // alert(mydata);
        $.ajax({
            url: "./ajax/ajax-volunteer.php",
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
                        title: 'VOLUNTEER ALREADY EXIST.'
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
                        title: 'VOLUNTEER HAS BEEN INSERTED.'
                    })
                    $('#volunteerform').trigger('reset');
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
                        title: 'VOLUNTEER HAS BEEN NOT INSERTED.'
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