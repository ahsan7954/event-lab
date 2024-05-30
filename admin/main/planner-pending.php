<?php
    include('./include/conn.php');
    include('./include/header.php');
    include('./include/sidebar.php');
?>



<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Modal -->
    <div class="modal center-modal fade" id="mymodel" tabindex="-1" aria-labelledby="plannermodel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="plannermodel">Planner Update</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="updata">
                        <div id="getData">

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /.modal -->
    <div class="container-full">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="d-flex align-items-center justify-content-between">
                <div class="me-auto">
                    <h3 class="page-title">Planner</h3>
                    <div class="d-inline-block align-items-center">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item" aria-current="page">Planner</li>
                                <li class="breadcrumb-item" aria-current="page">View Planner</li>
                                <li class="breadcrumb-item active" aria-current="page">Pending</li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <div class="ms-auto">
                    <a href="./planner-insert.php"
                        class="waves-effect waves-light text-white btn btn-rounded btn-dark mb-5">Add Planner</a>
                </div>

            </div>
        </div>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-12">
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Planner Table</h3>
                        </div>
                        <div class="box-body">
                            <div class="table-responsive">
                                <table id="example" class="table table-lg invoice-archive">
                                    <thead>
                                        <tr>
                                        <th>Update</th>
                                        <th>Delete</th>
                                          
                                            <th style="width:20%;">Status</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Email</th>
                                            <th>DOB</th>
                                            <th>Gender</th>
                                            <th>Phone no</th>
                                            <th>City</th>
                                            <th>Experience</th>
                                            <th>Achievements</th>
                                            <th>Skills</th>
                                            <th>Partners</th>
                                            <th>Password</th>
                                            <th>Address</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $sql="SELECT * FROM `a_users` WHERE `u_role`='Planner' AND `u_status`='Pending'";
                                        $run=mysqli_query($conn,$sql);
                                        while($rec=mysqli_fetch_assoc($run)){
								?>
                                        <tr>
                                        <td class="td"><a class="btn btn-success" href="./planner-update.php?uid=<?php echo $rec['u_id'] ?>">Update</a></td>
                                                    
                                                    <td><button type="button" class="btn btn-danger del" data-del="<?php echo $rec['u_id'] ?>" >Delete</button></td>
                                            <td>
                                                <span class="badge badge-pill badge-info"><?php echo $rec['u_status'] ?></span>
                                            </td>
                                            <td><?php echo $rec['u_fname']?></td>
                                            <td><?php echo $rec['u_lname']?></td>
                                            <td><?php echo $rec['u_email']?></td>
                                            <td><?php echo $rec['u_dob']?></td>
                                            <td><?php echo $rec['u_gender']?></td>
                                            <td><?php echo $rec['u_phone']?></td>
                                            <td><?php echo $rec['u_city']?></td>
                                            <td><?php echo $rec['u_exp']?></td>
                                            <td><?php echo $rec['u_achieve']?></td>
                                            <td><?php echo $rec['u_skill']?></td>
                                            <td><?php echo $rec['u_partners']?></td>
                                            <td><?php echo $rec['u_pswd']?></td>
                                            <td><?php echo $rec['u_address']?></td>
                                        </tr>
                                        <?php	
									}
									?>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
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
$(document).ready(function() {
    $(document).on("click", ".del", function() {
        var del = $(this).data("del");
        var msg = this;
        Swal.fire({
                        title: 'Are you sure?',
                        text: "You won't be able to revert this!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Yes, delete it!'
                    }).then((result) => {
                        if (result.isConfirmed) {
        $.ajax({
            url: "./ajax/plan-del.php",
            method: "GET",
            data: {
                mydel: del
            },
            success: function(res) {
                // alert(res);
                if (res == 1) {
                    
                            const Toast = Swal.mixin({
                                toast: true,
                                position: 'top-end',
                                showConfirmButton: false,
                                timer: 2000,
                                timerProgressBar: true,
                                didOpen: (toast) => {
                                    toast.addEventListener('mouseenter',
                                        Swal.stopTimer)
                                    toast.addEventListener('mouseleave',
                                        Swal.resumeTimer)
                                }
                            })

                            Toast.fire({
                                icon: 'success',
                                title: 'PLANNER HAS BEEN DELETED'
                            })
                            $(msg).closest("tr").fadeOut();
                        } else {
                    alert("PLANNER HAS NOT BEEN DELETED");
                }
                         } })

                    //  alert("Category HAS BEEN DELETED");

                
    }})
        })
    })
</script>