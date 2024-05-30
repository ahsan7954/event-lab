<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://joblly-admin-template-dashboard.multipurposethemes.com/bs5/images/favicon.ico">

    <title>Event Lab</title>
    <link rel="stylesheet" href="./assets/vendor_components/sweetalert2/sweetalert2.min.css">
    <link rel="stylesheet" href="./assets/vendor_components/jquery-toast-plugin-master/src/jquery.toast.css">
    <link rel="stylesheet" href="./assets/vendor_components/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="./main/css/style.css">
    <link rel="stylesheet" href="./main/css/skin_color.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
        integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body class="hold-transition theme-primary bg-img" style="background-image: url(./images/auth-bg/bg-1.jpg)">

    <div class="container h-p100">

        <div class="row align-items-center justify-content-md-center h-p100">
            <div class="col-12">
                <div class="row justify-content-center g-0">
                    <div class="col-lg-5 col-md-5 col-12">
                        <div class="bg-white rounded10 shadow-lg">
                            <div class="content-top-agile p-20 pb-0">
                                <h2 class="text-primary">Let's Get Started</h2>
                                <p class="mb-0">Sign in to continue</p>
                            </div>
                            <div class="p-40">
                                <form id="logform">
                                    <div class="form-group">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text bg-transparent"><i class="ti-user"></i></span>
                                            <input type="text" name="aemail" id="aemail"
                                                class="form-control ps-15 bg-transparent" placeholder="Enter User Email">
                                                <div id="u_emailvalid" style="height:15px; color:red; font-weight:bold;"></div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text  bg-transparent"><i
                                                    class="ti-lock"></i></span>
                                            <input type="password" name="apswd" id="apswd"
                                                class="form-control ps-15 bg-transparent" placeholder="Password">
                                               
                                                <!-- <span class="input-group-addon"><i class="fa fa-eye"
                                                    id="password2"></i></span> -->
                                                
                                        </div>
                                        <div id="u_pswdvalid" style="height:15px; color:red; font-weight:bold;"></div>
                                    </div>
                                 
                                        <div class="col-12 text-center">
                                            <button type="submit" id="sub" class="btn btn-success mt-10"> LOGIN</button>
                                            <a href="./main/signup.php"> <button type="button" id="" class="btn btn-primary mt-10">SIGNUP</button></a>
                                        </div>
                                        
                                        <!-- /.col -->
                                    </div>
                                </form>
                             
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Vendor JS -->
    <script src="./main/js/vendors.min.js"></script>
    <!-- <script src="js/pages/chat-popup.js"></script> -->
    <script src="./assets/vendor_components/jquery-toast-plugin-master/src/jquery.toast.js"></script>
    <script src="./assets/icons/feather-icons/feather.min.js"></script>
	<script src="./js/juery-3.6.0.min.js"></script>
	<script src="./js/sweetalert2.all.min.js"></script>
</body>

</html>
<script>
        var tr = document.getElementById("aemail");
    tr.addEventListener("input", (e) => {
      var email = e.target.value;
      if (!email.match(/^\w+([.-]?\w+)*@\w+([.-]?\w+)*(\.\w{2,3})+$/)) {
        document.getElementById("u_emailvalid").innerHTML = "Email must be in the format 'example@domain.com'.";
      } else {
        document.getElementById("u_emailvalid").innerHTML = "";
      }
    })
    // var tr = document.getElementById("apswd");
    // tr.addEventListener("input", (e) => {
    //   var pas1 = e.target.value;
    //   if (!pas1.match(/^[A-Z a-z0-9@#-_ ]*$/)) {
    //     document.getElementById("u_pswdvalid").innerHTML = "Only USe @#-_ this special letter ";
    //   } else {
    //     document.getElementById("u_pswdvalid").innerHTML = "";
    //   }
    // })
</script>
<script>
$(document).ready(function() {
    $(document).on("click", "#sub", function(e) {
        e.preventDefault();
        // alert('clicked');
        var myform = $(this).closest("form");
        var email = myform.find('#aemail').val();
        var pswd = myform.find('#apswd').val();
        // alert (pswd);
        $.ajax({
            url: "./main/ajax/login.php",
            method: "POST",
            data: {
                aemail: email,
                apswd: pswd
            },
            success: function(res) {
                //  alert(res);
				if(res==0){
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
                        title: 'Fill All fields.'
                    })
				}else if(res==1){
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
                        title: 'Email And Password Does Not Match.'
                    })
				}else if(res==2){
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
                        title: 'Login Successfully.'
                    })
					window.location.href="./main/dashboard.php";
				}else{
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
                        title: 'Login Failed.'
                    })
				}

               
            }
        })
    })
})
</script>