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
    left: 93%;
    bottom: 29%;
}

.primary-cancel {
    background: black;
    border-radius: 5px;
    border: 2px solid black;
    font-weight: 600;
    font-size: 17px;
    color: #fff;
    padding: 8px 36px;
    -webkit-transition: all 0.35s;
    transition: all 0.35s;
}

.primary-cancel:hover {
    background: #fff;
    color: black;
}
</style>
<div class="breadcrumb-area">
    <div class="container">
        <div class="row align-items-end">
            <div class="col-lg-12">
                <div class="breadcrumb-content">
                    <div class="page-outlined-text">
                        <h1>Login</h1>
                    </div>
                    <h2 class="page-title">Login</h2>
                    <ul class="page-switcher">
                        <li><a href="index.php">Home <i class="bi bi-caret-right"></i></a></li>
                        <li>Login</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container mt-5">
    <div class="row">
        <div class="col-lg-12">
            <form id="loginform">
                <div class="contact-form-wrapper">
                    <h4 class="contact-form-title">Login</h4>
                    <div class="row">
                        <div class="col-lg-6 col-sm-12">
                            <div class="primary-input-group">
                                <label class="lab">Email <span class="text-danger">*</span></label>
                                <div class="controls">
                                    <input type="email" id="u_email" name="u_email" placeholder="Enter Email Address"
                                        required>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <div class="primary-input-group">
                                <label class="lab">Password <span class="text-danger">*</span></label>
                                <div class="controls">
                                    <div class="input-group">
                                        <input type="password" name="u_pswd" id="u_pswd" placeholder="Enter Password">
                                        <i class="far fa-eye icon" id="password1"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <button type="submit" id="sub" class="primary-submit">Login</button>
                        <a href="./index.php" class="primary-cancel">Cancel</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


<?php
    include('./include/footer.php');
  ?>

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
	$(document).ready(function(){
		$(document).on("click","#sub",function(e){
			e.preventDefault();
			// alert('clicked');
			var myform = $(this).closest("form");
			var email = myform.find('#u_email').val();
			var pswd = myform.find('#u_pswd').val();

			$.ajax({
				url:"./ajax/ajax-login.php",
				method:"POST",
				data:{
					aemail:email,
					apswd:pswd
				},
				success:function(res){
					// alert(res);
                    if(res== 8){
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
                        title: 'Please fill Email and Password'
                    })
                        // alert ("Product Already Exist");
                    }else if(res== 9){
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
                        title: 'Enter Successfully'
                    })
                        // window.location.href= "home.php";
						window.location.assign("./role.php");

                        // alert ("Product Has Been Inserted");
                    }else{
                        // alert ("Your Enteries IS not Right");
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
                        title: 'Enter Correct Data'
                    })
                    }
				}
			})
		})
	})
</script>