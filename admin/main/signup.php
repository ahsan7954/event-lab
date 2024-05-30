<?php
	// include("./include/header.php");
	// include("./include/sidebar.php");
 ?>
 <?PHP
include('./include/conn.php');
	if(@$_SESSION['email']==null){
		// header("Location:./dashboard.php");
	}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://joblly-admin-template-dashboard.multipurposethemes.com/bs5/images/favicon.ico">

    <title>Event Lab - Dashboard  </title>

    <link rel="stylesheet" href="../assets/vendor_components/sweetalert2/sweetalert2.min.css">
    <!-- Vendors Style-->
    <!-- <link rel="stylesheet" href="../assets/vendor_components/perfect-scrollbar/css/perfect-scrollbar.css"> -->
    <link rel="stylesheet" href="../assets/vendor_components/bootstrap-daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="../assets/vendor_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.css">
    <link rel="stylesheet" href="../assets/vendor_components/jquery-toast-plugin-master/src/jquery.toast.css">
    <link rel="stylesheet" href="../assets/vendor_components/bootstrap-switch/switch.css">
    <link rel="stylesheet" href="../assets/vendor_components/fullcalendar/fullcalendar.min.css">


    <!-- Style-->
    <link href="../assets/vendor_components/bootstrap/dist/css/bootstrap.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- <link rel="stylesheet" href="css/vendors_css.css"> -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/skin_color.css">
    <link rel="stylesheet" href="../assets/icons/font-awesome/css/all.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
        integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>

<body class="hold-transition light-skin sidebar-mini theme-primary fixed">

    <div class="wrapper">
        <div id="loader"></div>

        <header class="main-header">
            <div class="d-flex align-items-center logo-box justify-content-start">
                <a href="#"
                    class="waves-effect waves-light text-dark nav-link d-none d-md-inline-block mx-10 push-btn bg-transparent"
                    data-toggle="push-menu" role="button">
                    <i data-feather="menu"></i>
                </a>
                <!-- Logo -->
                <a href="index-2.html" class="logo">
                    <!-- logo-->
                    <div class="logo-lg">
                     <b>   <span class="">EVENT LAB</span></b>
                        <span class="dark-logo"><img src="../images/logo-light-text.png" alt="logo"></span>
                    </div>
                </a>
            </div>
            <!-- Header Navbar -->
            <nav class="navbar navbar-static-top">
                <!-- Sidebar toggle button-->
                <div class="app-menu">
                    <ul class="header-megamenu nav">
                        <li class="btn-group nav-item d-md-none">
                            <a href="#" class="waves-effect waves-light nav-link push-btn" data-toggle="push-menu"
                                role="button">
                                <i data-feather="menu"></i>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="navbar-custom-menu r-side">
                    <ul class="nav navbar-nav">
                        <li class="btn-group nav-item d-lg-flex d-none align-items-center">
                            <p class="mb-0 text-fade pe-10 pt-5"><?php
				echo date("d-M-Y");
			?></p>
                        </li>
                        <li class="btn-group nav-item d-lg-inline-flex d-none">
                            <a href="#" data-provide="fullscreen" class="waves-effect waves-light nav-link full-screen"
                                title="Full Screen">
                                <i data-feather="maximize"></i>
                            </a>
                        </li>

                        <!-- Notifications -->
                        <li class="dropdown notifications-menu">
                            <a href="#" class="waves-effect waves-light dropdown-toggle" data-bs-toggle="dropdown"
                                title="Notifications">
                                <i data-feather="bell"></i>
                            </a>
                            <ul class="dropdown-menu animated bounceIn">

                                <li class="header">
                                    <div class="p-20">
                                        <div class="flexbox">
                                            <div>
                                                <h4 class="mb-0 mt-0">Notifications</h4>
                                            </div>
                                            <div>
                                                <a href="#" class="text-danger">Clear All</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu sm-scrol">
                                        <li>
                                            <a href="#">
                                                <i class="fa-solid fa-cart-shopping text-info"></i>Curabitur id eros
                                                quis nunc suscipit blandit.
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa-solid fa-triangle-exclamation text-warning"></i> Duis
                                                malesuada justo eu sapien elementum, in semper diam posuere.
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa-regular fa-user text-danger"></i> Donec at nisi sit amet
                                                tortor commodo porttitor pretium a erat.
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="footer">
                                    <a href="#">View all</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <div class="container-full">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="d-flex align-items-center justify-content-between">
                <div class="me-auto">
                    <h3 class="page-title">Signup</h3>
                    <div class="d-inline-block ms-auto align-items-center">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item" aria-current="page">Signup</li>
                                <li class="breadcrumb-item active" aria-current="page">Add Signup</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <!-- <div class="ms-auto">
                    <a href="./planner-pending.php"
                        class="waves-effect waves-light text-white btn btn-rounded btn-dark mb-5">View Planner</a>
                </div> -->

            </div>
        </div>

        <!-- Main content -->
        <section class="content row">

            <!-- Basic Forms -->
            <div class="col-lg-6 col-sm-12 offset-lg-3 ">
                <div class="box">
                    <div class="box-header with-border">
                        <h4 class="box-title">Add Signup</h4>
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
                                                    <input type="text" name="aname" class="form-control" id="u_fname"
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
                                                    <input type="text" name="alname" class="form-control" id="u_lname"
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
                                            <input type="text" name="aemail" id="u_email" class="form-control"
                                                placeholder="Enter Email Address">
                                            <div id="u_emailvalid" style="height:15px; color:red; font-weight:bold;"></div>
                                        </div>
                                    </div>
                               
                                    <div class="form-group">
                                        <h5>Password <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <div class="input-group">
                                                <input type="password" name="apswd" id="u_pswd" class="form-control"
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
                                            <input type="password" name="cpswd" id="u_cpswd" class="form-control"
                                                placeholder="Enter Password Again"
                                                data-validation-required-message="This field is required">
                                            <span class="input-group-addon"><i class="fa fa-eye"
                                                    id="password2"></i></span>
                                        </div>
                                        <div id="u_cpswdvalid" style="height:15px; color:red; font-weight:bold;"></div>
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

<!-- validation start -->
<script>

    
    // ================================= Form validations===================================

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
   

   
   

</script>
<!-- validation End -->
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
        if (($("#u_fnamevalid").html() == "")&& 
        ($("#u_lnamevalid").html() == "") &&
         ($("#u_emailvalid").html() == "") &&
        
             ($("#u_pswdvalid").html() == "") &&
             ($("#u_cpswdvalid").html() == "")         
              ) {
       
        $.ajax({
            url: "./ajax/signup.php",
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
                        title: 'USER ALREADY EXIST.'
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
                        title: 'DATA HAS BEEN INSERTED.'
                    })
                    $('#plannerform').trigger('reset');
                    window.location.href="../index.php";

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
                        title: 'USER HAS BEEN NOT INSERTED.'
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