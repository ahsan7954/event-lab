<?php
    include('./include/header.php');
?>
<div class="breadcrumb-area">
    <div class="container">
        <div class="row align-items-end">
            <div class="col-lg-12">
                <div class="breadcrumb-content">
                    <div class="page-outlined-text">
                        <h1>Contact Us</h1>
                    </div>
                    <h2 class="page-title">Contact Us</h2>
                    <ul class="page-switcher">
                        <li><a href="index-2.html">Home <i class="bi bi-caret-right"></i></a></li>
                        <li>Contact Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="contact-wrapper overflow-hidden">
    <div class="container pt-120 position-relative">
        <div class="background-title text-style-one">
            <h2>Contact Now</h2>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="contact-card mt-0">
                    <div class="contact-box-corner1">
                        <img src="assets/images/shapes/cornoer-shape1.png" alt="">
                    </div>
                    <div class="contact-box-corner2">
                        <img src="assets/images/shapes/cornoer-shape2.png" alt="">
                    </div>
                    <div class="contact-icon">
                        <img src="assets/images/icons/c-location.png" alt="">
                    </div>
                    <div class="contact-info">
                        <h3 class="contact-title">Location</h3>
                        <a href="#">Samanabad,Faisalabad Pakistan.</a>
                    </div>
                </div>
                <div class="contact-card">
                    <div class="contact-box-corner1">
                        <img src="assets/images/shapes/cornoer-shape1.png" alt="">
                    </div>
                    <div class="contact-box-corner2">
                        <img src="assets/images/shapes/cornoer-shape2.png" alt="">
                    </div>
                    <div class="contact-icon">
                        <img src="assets/images/icons/c-phone.png" alt="">
                    </div>
                    <div class="contact-info">
                        <h3 class="contact-title">Phone</h3>
                        <a href="tel:+0123456789102">+92 302 7027 954</a>
                        <a href="tel:+0123456789102">+92 300 6661 620</a>
                    </div>
                </div>
                <div class="contact-card">
                    <div class="contact-box-corner1">
                        <img src="assets/images/shapes/cornoer-shape1.png" alt="">
                    </div>
                    <div class="contact-box-corner2">
                        <img src="assets/images/shapes/cornoer-shape2.png" alt="">
                    </div>
                    <div class="contact-icon">
                        <img src="assets/images/icons/c-massege.png" alt="">
                    </div>
                    <div class="contact-info">
                        <h3 class="contact-title">Email</h3>
                        <a href="#">ahsanzulfiqar0302@gmail.com</a>
                        <a href="#">ahsanejaz8842@gmail.com</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <form id="contactform">
                    <div class="contact-form-wrapper">
                        <h4 class="contact-form-title">Write a Message</h4>
                        <div class="primary-input-group">
                            <input type="text" id="contact_name" name="contact_name" placeholder="Your Name">
                            <div id="contact_namevalid" style="height:15px; color:red; font-weight:bold;"></div>
                        </div>
                        <div class="primary-input-group">
                            <input type="text" id="contact_email" name="contact_email" placeholder="Your Email">
                            <div id="contact_emailvaild" style="height:15px; color:red; font-weight:bold;"></div>
                        </div>
                        <div class="primary-input-group">
                            <input type="tel" id="contact_phone" name="contact_phone" placeholder="Your Phone">
                            <div id="contact_phonevalid" style="height:15px; color:red; font-weight:bold;"></div>
                        </div>
                        <div class="primary-input-group">
                            <input type="text" id="contact_subject" name="contact_subject" placeholder="Subject">
                            <div id="contact_subjectvalid" style="height:15px; color:red; font-weight:bold;"></div>
                        </div>
                        <div class="primary-input-group">
                            <textarea name="contact_msg" id="contact_msg" cols="30" rows="7"
                                placeholder="Write Message"></textarea>
                            <div id="contact_msgvalid" style="height:15px; color:red; font-weight:bold;"></div>
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
<script>

var tr = document.getElementById("contact_name");
    tr.addEventListener("input", (e) => {
      var name = e.target.value;
      if (!name.match(/^[A-Za-z ]*$/)) {
        document.getElementById("contact_namevalid").innerHTML = "Just only contain letter";
      } else {
        document.getElementById("contact_namevalid").innerHTML = "";
      }
    })
    
    var tr = document.getElementById("contact_email");
    tr.addEventListener("input", (e) => {
      var email = e.target.value;
      if (!email.match(/^\w+([.-]?\w+)*@\w+([.-]?\w+)*(\.\w{2,3})+$/)) {
        document.getElementById("contact_emailvaild").innerHTML = "Email must be in the format 'example@domain.com'.";
      } else {
        document.getElementById("contact_emailvaild").innerHTML = "";
      }
    })
    var tr = document.getElementById("contact_phone");
    tr.addEventListener("input", (e) => {
      var phone = e.target.value;
      if (!phone.match(/^[+]*[(]{0,1}[0-9]{1,3}[)]{0,1}[-\s\./0-9]*$/g)) {
        document.getElementById("contact_phonevalid").innerHTML = "Just only contain numbers";
      } else {
        document.getElementById("contact_phonevalid").innerHTML = "";
      }
    })
    
var tr = document.getElementById("contact_subject");
    tr.addEventListener("input", (e) => {
      var sname = e.target.value;
      if (!sname.match(/^[A-Za-z ]*$/)) {
        document.getElementById("contact_subjectvalid").innerHTML = "Just only contain letter";
      } else {
        document.getElementById("contact_subjectvalid").innerHTML = "";
      }
    })

    var tr = document.getElementById("contact_msg");
    tr.addEventListener("input", (e) => {
      var seat = e.target.value;
      if (!seat.match(/^[A-Za-z0-9 ]*$/)) {
        document.getElementById("contact_msgvalid").innerHTML = "Just only contain letter and numbers  ";
      } else {
        document.getElementById("contact_msgvalid").innerHTML = "";
      }
    })
</script>

<script>
$(document).ready(function() {
    $("#btn").on("click", function(e) {

        e.preventDefault();
        var mydata = new FormData(contactform);
        // alert(mydata);
        $.ajax({
            url: "./ajax/ajax-contact.php",
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
                        icon: 'success',
                        title: 'YOUR MESSAGE HAS BEEN SEND.'
                    })
                    $('#contactform').trigger('reset');
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
                        title: 'YOUR MESSAGE HAS BEEN NOT SEND.'
                    })
                }
            }
        });
    });
});
</script>