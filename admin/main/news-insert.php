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
                    <h3 class="page-title">News</h3>
                    <div class="d-inline-block ms-auto align-items-center">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item" aria-current="page">News</li>
                                <li class="breadcrumb-item active" aria-current="page">Add News</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="ms-auto">
                    <a href="./news-view.php"
                        class="waves-effect waves-light text-white btn btn-rounded btn-dark mb-5">View News</a>
                </div>

            </div>
        </div>

        <!-- Main content -->
        <section class="content row">

            <!-- Basic Forms -->
            <div class="col-lg-6 col-sm-12 offset-lg-3 ">
                <div class="box">
                    <div class="box-header with-border">
                        <h4 class="box-title">Add News</h4>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="row">
                            <div class="col">
                                <form id="newsform">
                                    <div class="form-group">
                                        <h5>News Category <span class="text-danger">*</span></h5>
                                        <select class="form-control bg-white" name="n_cate">
                                            <option value="">Select News Category</option>
                                            <?php
                                                    $sql="SELECT * FROM `category`";
                                                    $run=mysqli_query($conn,$sql);
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
                                        <h5>News Title <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="n_title" id="n_title" class="form-control"
                                                placeholder="Enter News Title">
                                            <div id="n_titlevalid" style="height:15px; color:red; font-weight:bold;">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <h5>Featured Image<span class="text-danger">*</span></h5>
                                        <input type="file" id="n_pic" name="n_pic" class="form-control">
                                        <div id="n_picvalid" style="height:15px; color:red; font-weight:bold;"></div>
                                    </div>

                                    <div class="form-group">
                                        <h5>Description <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <textarea name="n_desc" id="n_desc" rows="5" class="form-control"
                                                placeholder="Enter Description Here.." required></textarea>
                                            <div id="n_descvalid" style="height:15px; color:red; font-weight:bold;">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <h5>Status<span class="text-danger">*</span></h5>
                                        <div class="controls" style="d-flex">
                                            <fieldset>
                                                <input name="n_status" type="radio" id="radio_3" value="ON" required
                                                    checked>
                                                <label for="radio_3">ON</label>
                                            </fieldset>
                                            <fieldset>
                                                <input name="n_status" type="radio" id="radio_4" value="OFF">
                                                <label for="radio_4">OFF</label>
                                            </fieldset>
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


  // ===================== Form validations =====================================

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
document.querySelector("#n_title").addEventListener("keypress", function(e) {
    var rexex = /^[a-zA-Z\s]$/;
    if (!rexex.test(e.key)) {
        e.preventDefault();
    }
})
// ************* First name validation **********
$(document).ready(function() {
    $("#n_title").keyup(function() {
        // To make each word capitalized
        $("#n_title").capitalize();
        // Fetching Value 
        var id = $("#n_title").val();
        if (id.length == '') {
            $("#n_titlevalid").html("**Please! Enter First name");
        } else if (id.length <= 2) {
            $("#n_titlevalid").html("**First name is too short");
        } else if (id.length >= 20) {
            $("#n_titlevalid").html("**First name is too long");
        } else {
            $("#n_titlevalid").html("");
        }

    })
})
    var tr = document.getElementById("n_desc");
    tr.addEventListener("input", (e) => {
      var aname = e.target.value;
      if (!aname.match(/^[A-Za-z0-9 ]*$/)) {
        document.getElementById("n_descvalid").innerHTML = "Just only contain letter and numbers";
      } else {
        document.getElementById("n_descvalid").innerHTML = "";
      }
    })
</script>
<script>
$(document).ready(function() {
    $("#btn").on("click", function(e) {

        e.preventDefault();
        var mydata = new FormData(newsform);
        if (($("#n_titlevalid").html() == "")){
        
        // alert(mydata);
        $.ajax({
            url: "./ajax/news.php",
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
                        title: 'NEWS ALREADY EXIST.'
                    })
                }else if (show == 4 ) {
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
                        title: 'IMAGE IS NOT RIGHT.'
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
                        title: 'NEWS HAS BEEN INSERTED.'
                    })
                    $('#newsform').trigger('reset');
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
                        title: 'NEWS HAS BEEN NOT INSERTED.'
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