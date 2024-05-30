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
                    <h2 class="page-title">Designer Registeration</h2>
                    <ul class="page-switcher">
                        <li><a href="index.php">Home <i class="bi bi-caret-right"></i></a></li>
                        <li>Designer Form</li>
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
                <form id="designerform">
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
                        <div class="primary-input-group">
                            <label class="lab">Enter Email Address <span class="text-danger">*</span></label>
                            <div class="controls">
                                <input type="text" id="u_email" name="u_email" placeholder="Enter Email Address">
                                <div id="u_emailvalid" style="height:15px; color:red; font-weight:bold;"></div>
                            </div>
                        </div>
                        <div class="primary-input-group">
                            <label class="lab">DOB<span class="text-danger">*</span></label>
                            <div class="controls">
                                <input type="date" id="u_dob" name="u_dob" placeholder="Enter Category Name" required>
                                <div id="u_dobvalid" style="height:15px; color:red; font-weight:bold;"></div>
                            </div>
                        </div>
                        <div class="primary-input-group">
                            <label class="lab">Gender <span class="text-danger">*</span></label>
                            <select name="u_gender">
                                <option value="">Select Your Gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female </option>
                                <option value="Others">Others</option>
                            </select>
                        </div>
                        <div class="primary-input-group">
                            <label class="lab">Phone<span class="text-danger">*</span></label>
                            <!-- <small class="sidetitle">E.g. +92-123-3456789</small> -->
                            <input type="tel" name="u_phone" id="u_phone" placeholder="Enter Phone Number">
                            <div id="u_phonevalid" style="height:15px; color:red; font-weight:bold;"></div>
                        </div>
                        <div class="primary-input-group">
                            <label class="lab">City <span class="text-danger">*</span></label>
                            <div class="controls">
                                <input type="text" id="u_city" name="u_city" placeholder="Enter City Name" required>
                                <div id="u_cityvalid" style="height:15px; color:red; font-weight:bold;"></div>
                            </div>
                        </div>
                        <div class="primary-input-group">
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
                        <div class="primary-input-group">
                            <label class="lab">Ordered Design Off <span class="text-danger">*</span></label>
                            <select name="u_order_design" id="u_order_design">
                                <option value="">Select Category Of Your Design</option>
                                <option value="Business Design">Business Design</option>
                                <option value="Products Design">Products Design </option>
                                <option value="Branding Design">Branding Design</option>
                                <option value="Animation Design">Animation Design</option>
                                <option value="Environmental Design">Environmental Design</option>
                                <option value="Print Design">Print Design</option>
                                <option value="Publishing Design">Publishing Design</option>
                            </select>
                            <div id="u_order_designvalid" style="height:15px; color:red; font-weight:bold;"></div>
                        </div>
                        <div class="primary-input-group">
                            <label class="lab">Description <small>(optional)</small></label>
                            <div class="controls">
                                <textarea name="u_description" id="u_description" rows="4"
                                    placeholder="Enter Description Here..." required></textarea>
                                <div id="u_descriptionvalid" style="height:15px; color:red; font-weight:bold;"></div>

                            </div>
                        </div>
                        <div class="primary-input-group">
                            <label class="lab">Company <span class="text-danger">*</span></label>
                            <div class="controls">
                                <input type="text" id="u_company" name="u_company" placeholder="Enter Company Name"
                                    required>
                                <div id="u_companyvalid" style="height:15px; color:red; font-weight:bold;"></div>
                            </div>
                        </div>
                        <div class="primary-input-group">
                            <label class="lab">Prefer Color <span class="text-danger">*</span></label>
                            <div class="controls">
                                <input type="color" id="u_prefer_color" name="u_prefer_color" required>
                                <div id="u_prefer_colorvalid" style="height:15px; color:red; font-weight:bold;"></div>
                            </div>
                        </div>
                        <div class="primary-input-group">
                            <label class="lab">Tools Worked On <span class="text-danger">*</span></label>
                            <small class="sidetitle">Adobe Photoshop,Adobe Illustrator,Canva"</small>
                            <input type="text" id="u_tools" name="u_tools" placeholder="Add Tools">
                            <div id="u_toolsvalid" style="height:15px; color:red; font-weight:bold;"></div>
                        </div>
                        <div class="primary-input-group">
                            <label class="lab">Written Content To Be Added <span class="text-danger">*</span></label>
                            <div class="controls">
                                <input type="text" id="u_written_content" name="u_written_content"
                                    placeholder="Enter Written Content" required>
                                <div id="u_written_contentvalid" style="height:15px; color:red; font-weight:bold;">
                                </div>

                            </div>
                        </div>
                        <div class="primary-input-group">
                            <label class="lab">Number Of Designs</label>
                            <input id="u_designs_no" type="number" min="0" name="u_designs_no"
                                placeholder="Enter No Of Designs">
                            <div id="u_design_novalid" style="height:15px; color:red; font-weight:bold;"></div>

                        </div>

                        <div class="primary-input-group">
                            <label class="lab">Password <span class="text-danger">*</span></label>
                            <div class="controls">
                                <div class="input-group">
                                    <input type="password" name="u_pswd" id="u_pswd" placeholder="Enter Password">
                                    <i class="far fa-eye icon" id="password1"></i>
                                </div>
                                <div id="u_pswdvalid" style="height:15px; color:red; font-weight:bold;"></div>
                            </div>
                        </div>
                        <div class="primary-input-group">
                            <label class="lab">Confirm Password <span class="text-danger">*</span></label>
                            <div class="controls">
                                <div class="input-group">
                                    <input type="password" name="u_cpswd" id="u_cpswd"
                                        placeholder="Enter Password Again">
                                    <i class="far fa-eye icon" id="password2"></i>
                                </div>
                                <div id="u_cpswdvalid" style="height:15px; color:red; font-weight:bold;"></div>
                            </div>
                        </div>

                        <div class="primary-input-group">
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
  <!-- validations start -->
<script>
    // ================================= Form validations =====================================
/
/ ************* First letter of each word in field should be capital **********
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
    // ************* Company validation **********
$(document).ready(function() {
    $("#u_company").keyup(function() {
        // To make each word capitalized
        $("#u_company").capitalize();
        // Fetching Value 
        var id = $("#u_company").val();
        if (id.length == '') {
            $("#u_companyvalid").html("**Please! Enter Company Name");
        } else if (id.length <= 2) {
            $("#u_companyvalid").html("**Name is too short");
        } else if (id.length >= 50) {
            $("#u_companyvalid").html("**Name is too long");
        } else {
            $("#u_companyvalid").html("");
        }

    })
})
  
    // ************* Tools validation **********
$(document).ready(function() {
    $("#u_tools").keyup(function() {
        // To make each word capitalized
        $("#u_tools").capitalize();
        // Fetching Value 
        var id = $("#u_tools").val();
        if (id.length == '') {
            $("#u_toolsvalid").html("**Please! Enter Tools");
        } else if (id.length <= 2) {
            $("#u_toolsvalid").html("**Tools are too short");
        } else if (id.length >= 50) {
            $("#u_toolsvalid").html("**Tools are too long");
        } else {
            $("#u_toolsvalid").html("");
        }

    })
})
   
    // ************* Written Content validation **********
$(document).ready(function() {
    $("#u_written_content").keyup(function() {
        // To make each word capitalized
        $("#u_written_content").capitalize();
        // Fetching Value 
        var id = $("#u_written_content").val();
        if (id.length == '') {
            $("#u_written_contentvalid").html("**Please! Enter Content");
        } else if (id.length <= 2) {
            $("#u_written_contentvalid").html("**Content is too short");
        } else if (id.length >= 50) {
            $("#u_written_contentvalid").html("**Content is too long");
        } else {
            $("#u_written_contentvalid").html("");
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
        var mydata = new FormData(designerform);
        if (($("#u_emailvalid").html() == "") && 
        ($("#u_phonevalid").html() == "") &&
         ($("#u_fnamevalid").html() == "") &&
          ($("#u_lnamevalid").html() == "") &&
            ($("#u_cityvalid").html() == "") &&
            ($("#u_companyvalid").html() == "") && 
            ($("#u_toolsvalid").html() == "") && 
        //     ($("#u_written_contentvalid").html() == "") &&
            ($("#u_pswdvalid").html() == "") &&
             ($("#u_cpswdvalid").html() == "")&&
              ($("#u_addressvalid").html() == "")
              ) {
        // alert(mydata);
        $.ajax({
            url: "./ajax/ajax-designer.php",
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
                        title: 'DESIGNER ALREADY EXIST.'
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
                        title: 'DESIGNER HAS BEEN INSERTED.'
                    })
                    $('#designerform').trigger('reset');
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
                        title: 'DESIGNER HAS BEEN NOT INSERTED.'
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