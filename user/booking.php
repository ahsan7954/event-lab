<?php
session_start();
    include('./include/header.php');
    include('./include/conn.php');
    
// echo $role=$_SESSION['v_name'];

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
.main{
    background-color:white;
    color:white;
    /* padding:10px 10px;
    margin:10px 10px; */
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
                    <h2 class="page-title">Booking Registeration</h2>
                    <ul class="page-switcher">
                        <li><a href="index.php">Home <i class="bi bi-caret-right"></i></a></li>
                        <li>Booking Form</li>
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
                <form id="bookingform">
                    <div class="contact-form-wrapper">
                        <h4 class="contact-form-title text-center">Booking Form</h4>
                        <div class="row">
                            <div class="col-6">
                                <div class="primary-input-group">
                                    <label class="lab">Event Category   <span class="text-danger">*</span></label>
                                    <div class="controls">
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
                                        <div id="b_cate" style="height:15px; color:red; font-weight:bold;"></div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="primary-input-group">
                                    <label class="lab">Client Name <span class="text-danger">*</span></label>
                                    <div class="controls">
                                        <input type="text" id="b_client_name" name="b_client_name" placeholder="Enter Last Name"
                                            required>
                                        <div id="b_client_namevalid" style="height:15px; color:red; font-weight:bold;"></div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="primary-input-group mt-3">
                            <label class="lab">Enter Email Address <span class="text-danger">*</span></label>
                            <div class="controls">
                                <input type="text" id="b_client_email" name="b_client_email" placeholder="Enter Email Address">
                                <div id="b_client_emailvalid" style="height:15px; color:red; font-weight:bold;"></div>

                            </div>
                        </div>
                        <div class="primary-input-group mt-3">
                            <label class="lab">Contact No<span class="text-danger">*</span></label>
                            <!-- <small class="sidetitle">E.g. +92-123-3456789</small> -->
                            <input type="tel" name="b_client_phone" id="b_client_phone" placeholder="Enter Phone Number">
                            <div id="b_client_phonevalid" style="height:15px; color:red; font-weight:bold;"></div>

                        </div>
                        <div class="primary-input-group mt-3">
                            <label class="lab">Occasion Title<span class="text-danger">*</span></label>
                            <div class="controls">
                                <input type="text" id="b_occasion_title" name="b_occasion_title" placeholder="Enter Category Title" required>
                                <div id="b_occasion_titlevalid" style="height:15px; color:red; font-weight:bold;"></div>
                            </div>
                        </div>
                        <div class="primary-input-group mt-3">
                            <label class="lab">Occasion Start Date<span class="text-danger">*</span></label>
                            <div class="controls">
                                <input type="date" id="b_occasion_sdate" name="b_occasion_sdate" placeholder="Enter Category Name" required>
                                <div id="b_occasion_sdatevalid" style="height:15px; color:red; font-weight:bold;"></div>
                            </div>
                        </div>
                        <div class="primary-input-group mt-3">
                            <label class="lab">Occasion Start Time<span class="text-danger">*</span></label>
                            <div class="controls">
                                <input type="time" id="b_occasion_stime" name="b_occasion_stime" placeholder="Enter Category Name" required>
                                <div id="b_occasion_stimevalid" style="height:15px; color:red; font-weight:bold;"></div>
                            </div>
                        </div>
                        <div class="primary-input-group mt-3">
                            <label class="lab">City <span class="text-danger">*</span></label>
                            <div class="controls">
                                <input type="text" id="b_vanue_city" name="b_vanue_city" placeholder="Enter City Name" value="Faisalabad" readonly required>
                                <div id="b_vanue_cityvalid" style="height:15px; color:red; font-weight:bold;"></div>
                            </div>
                            <div class="primary-input-group mt-3">
                            <label class="lab">No of Seats <span class="text-danger">*</span></label>
                            <div class="controls">
                                <input type="number"  id="b_seats" name="b_seats" placeholder="Enter Maximum Number" required>
                                <div id="b_seatsvalid" style="height:15px; color:red; font-weight:bold;"></div>
                            </div>
                        <div class="primary-input-group mt-3">
                            <!-- <h5>Experience <span class="text-danger">*</span></h5> -->
                            <label class="lab">Select Vanue <span class="text-danger">*</span></label>
                            <select class="form-control bg-white" name="b_vanue_host"  value="" onchange="hideshow()" >
                                            <option>Select Vanue Host</option>
                                            <?php

                                                    $sql="SELECT * FROM `vanue`";
                                                    $run=mysqli_query($conn,$sql);
                                                    while($rec=mysqli_fetch_array($run)){
                                                    ?>
                                            <option    value="<?php echo $rec['v_id']; ?>"><?php
                                                             echo $rec['v_name'];
                                                        ?></option>
                                            <?php
                                                }
                                            ?>
                                        </select>
                            <div id="b_vanue_hostvalid" style="height:15px; color:red; font-weight:bold;"></div>
                        </div>
                        <div id="main" class="main">Your Advance Payment is 10,000</div>
                     
                        <div class="primary-input-group mt-3">
                            <label class="lab">Occasion Description <span class="text-danger">*</span></label>
                            <div class="controls">
                                <textarea name="b_descrip" id="b_descrip" rows="5" placeholder="Enter Address Here.."
                                    required></textarea>
                                <div id="b_descripvalid" style="height:15px; color:red; font-weight:bold;"></div>
                            </div>
                        </div>
                        <div class="form-group">
                                        <h5>Occasion Type *<span class=""style="margin-left:355px" >Payment Method</span></h5></br>
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
                                            <a href="https://www.jazzcash.com.pk/"><img src="./assets/images/jazzchas.png" alt="" style="width: 60px;margin-left:325px;margin-top:-70px"></a>
                                            <a href="https://easypaisa.com.pk/"><img src="./assets/images/download.png" alt="" style="width: 60px;margin-left:600px;margin-top:-120px"></a>
                                        </div>
                                      
                                    </div>
                        <div class="submit-btn">
                            <button type="submit"  id="btn" class="primary-submit">Submit Now</button>
                           
                        </div>

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
    // var div = document.getElementById('main');
    // var display = 0;
    // //  alert(div);
    // function hideshow(){
    //     if(display==1){
    //         div.style.display='block';
    //         display=0;
    //     }else{
    //         div.style.display='none';
    //         display=1;
    //     }
    // }
    function hideshow(){
    document.getElementById('main').style.height="50px";
    document.getElementById('main').style.backgroundColor="orange";
    document.getElementById('main').style.color="black";
    document.getElementById('main').style.fontSize="30px";
    document.getElementById('main').style.textAlign="center";
    document.getElementById('main').style.display="block";
    document.getElementById('hideshow').style.display="none";
    }
  </script>
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
// ************* Description validation **********
$(document).ready(function() {
    $("#b_descrip").keyup(function() {
        var id = $("#b_descrip").val();
        if (id.length == '') {
            $("#b_descripvalid").html("**Please! Enter  description");
        } else if ((id.length <= 2)) {
            $("#b_descripvalid").html("**Description is too short");
        }  else {
            $("#b_descripvalid").html("");
        }
    })
})

   
   

</script>
  <script>
$(document).ready(function() {
    $("#btn").on("click", function(e) {

        e.preventDefault();
        var mydata = new FormData(bookingform);
        if (($("#b_client_namevalid").html() == "") &&
         ($("#b_client_emailvalid").html() == "") &&
         ($("#b_client_phonevalid").html() == "") &&
         ($("#b_occasion_titlevalid").html() == "") && 
        ($("#b_descripvalid").html() == "") 
       
              ){
        // alert(mydata);
        $.ajax({
            url: "./ajax/ajax-booking.php",
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
                        title: 'BOOKING ALREADY EXIST.'
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