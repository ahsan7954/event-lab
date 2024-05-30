<?php
    include('./include/conn.php');
    include('./include/header.php');
    include('./include/sidebar.php');
?>
<style>
.btn.btn-toggle {
    margin: 0 4rem;
    padding: 0;
    position: relative;
    border: none;
    height: 1.5rem;
    width: 3rem;
    border-radius: 0;
    color: #6b7381;
    background: red;
}

.btn-toggle.active {
    background-color: green;
}
</style>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Modal -->
    <div class="modal center-modal fade" id="mymodel" tabindex="-1" aria-labelledby="newsmodel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="newsmodel">News Update</h5>
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
                    <h3 class="page-title">News</h3>
                    <div class="d-inline-block align-items-center">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item" aria-current="page">News</li>
                                <li class="breadcrumb-item active" aria-current="page">View News</li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <div class="ms-auto">
                    <a href="./news-insert.php"
                        class="waves-effect waves-light text-white btn btn-rounded btn-dark mb-5">Add News</a>
                </div>

            </div>
        </div>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-12">
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">News Table</h3>
                        </div>
                        <div class="box-body">
                            <div class="table-responsive">
                                <table id="example" class="table table-lg invoice-archive">
                                    <thead>
                                        <tr>
                                            <th>Update</th>
                                            <th>Delete</th>
                                            <th>Image</th>
                                            <th>News Category</th>
                                            <th>News Title</th>
                                            <th>Description</th>
                                            <th>Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $sql="SELECT * FROM `news` INNER JOIN `category` ON n_cate=cid";
                                        $run=mysqli_query($conn,$sql);
                                        while($rec=mysqli_fetch_assoc($run)){
								?>
                                        <tr>
                                        <td class="td"><a class="btn btn-success" href="./news_update.php?uid=<?php echo $rec['n_id'] ?>">Update</a></td>
                                                    
                                                    <td><button type="button" class="btn btn-danger del" data-del="<?php echo $rec['n_id'] ?>" >Delete</button></td>
                                            
                                            <td><img src="./imgs/news/<?php echo $rec['n_pic']?>" height="50" width="100" alt="IMAGE"></td>
                                            <td><?php echo $rec['cname']?></td>
                                            <td><?php echo $rec['n_title']?></td>
                                            <td><?php echo $rec['n_desc']?></td>
                                            <td><?php echo $rec['n_date']?></td>
                                            <!-- <td>
											<span class="badge badge-pill badge-success">Paid on Mar 16, 2018</span>
										</td> -->


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
            url: "./ajax/news_del.php",
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
                                title: 'NEWS HAS BEEN DELETED.'
                            })
                            $(msg).closest("tr").fadeOut();
                        } else {
                    alert("NEWS HAS NOT BEEN DELETED.");
                }
                         } })

                    //  alert("Category HAS BEEN DELETED");

                
    }})
        })
    })
</script>