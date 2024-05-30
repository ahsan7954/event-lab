<?php
    include('./include/conn.php');
    include('./include/header.php');
    include('./include/sidebar.php');
?>



<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Modal -->
    <div class="modal center-modal fade" id="mymodel" tabindex="-1" aria-labelledby="bookingmodel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="bookingmodel">Booking Update</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
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
                    <h3 class="page-title">Booking</h3>
                    <div class="d-inline-block align-items-center">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item" aria-current="page">Booking</li>
                                <li class="breadcrumb-item active" aria-current="page">View Booking</li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <div class="ms-auto">
                    <a href="./booking-insert.php"
                        class="waves-effect waves-light text-white btn btn-rounded btn-dark mb-5">Add Booking</a>
                </div>

            </div>
        </div>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-12">
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Bookings Table</h3>
                        </div>
                        <div class="box-body">
                            <div class="table-responsive">
                                <table id="example" class="table table-lg invoice-archive">
                                    <thead>
                                        <tr>
                                            <th>Reply</th>
                                            <th>Update</th>
                                            <th>Delete</th>
                                            <th>Status</th>
                                            <th>Category</th>
                                            <th>Client</th>
                                            <th>Email</th>
                                            <th>Phone no</th>
                                            <th>Occasion Title</th>
                                            <th>Start Date</th>
                                            <th>Start Time</th>
                                            <th>Vanue</th>
                                            <th>City</th>
                                            <th>Description</th>
                                            <th>Booking Date</th>
                                            <th>Occasion Type</th>
                                            <th>Booked By</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $sql="SELECT * FROM `bookings` INNER JOIN `category` ON b_cate=cid INNER JOIN `vanue` ON b_vanue_host=v_id WHERE `b_status`='Pending'";
                                        $run=mysqli_query($conn,$sql);
                                        while($rec=mysqli_fetch_assoc($run)){
								?>
                                        <tr>
                                        <td class="td"><a class="btn btn-primary" href="./booking_reply.php?uid=<?php echo $rec['b_id'] ?>">Reply</a></td>
                                        <td class="td"><a class="btn btn-success" href="./booking_update.php?uid=<?php echo $rec['b_id'] ?>">Update</a></td>
                                                    
                                                    <td><button type="button" class="btn btn-danger del" data-del="<?php echo $rec['b_id'] ?>" >Delete</button></td>
                                            <td>

                                                <span
                                                    class="badge badge-pill badge-info"><?php echo $rec['b_status'] ?></span>
                                            </td>
                                            <td><?php echo $rec['cname']?></td>
                                            <td><?php echo $rec['b_client_name']?></td>
                                            <td><?php echo $rec['b_client_email']?></td>
                                            <td><?php echo $rec['b_client_phone']?></td>
                                            <td><?php echo $rec['b_occasion_title']?></td>
                                            <td><?php echo $rec['b_occasion_sdate']?></td>
                                            <td><?php echo $rec['b_occasion_stime']?></td>
                                            <td><?php echo $rec['v_name']?></td>
                                            <td><?php echo $rec['b_vanue_city']?></td>
                                            <td><?php echo $rec['b_descrip']?></td>
                                            <td><?php echo $rec['b_date']?></td>
                                            <td><?php echo $rec['b_type']?></td>
                                            <td><?php echo $rec['b_booked_by']?></td>
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
            url: "./ajax/booking_del.php",
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
                                title: 'BOOKING HAS BEEN DELETED.'
                            })
                            $(msg).closest("tr").fadeOut();
                        } else {
                    alert("BOOKING HAS NOT BEEN DELETED.");
                }
                         } })

                    //  alert("Category HAS BEEN DELETED");

                
    }})
        })
    })
</script>