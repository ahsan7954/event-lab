<?php
    include('./include/conn.php');
    include('./include/header.php');

  $cd = $_GET['cd'];
?>


    <div class="breadcrumb-area">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-lg-12">
                    <div class="breadcrumb-content">
                        <div class="page-outlined-text">
                            <h1>Event</h1>
                        </div>
                        <h2 class="page-title">Papular Events</h2>
                        <ul class="page-switcher">
                            <li><a href="index-2.html">Home <i class="bi bi-caret-right"></i></a></li>
                            <li>Event</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="event-sidebar-wrapper ">
        <div class="container pt-96 position-relative">
            <div class="row">
                <div class="col-lg-4">
                    <div class="background-title text-style-one">
                        <h2>Popular Event</h2>
                    </div>
                    <div class="event-sidebar">
                        <form action="#" id="sb-searchbar-form" class="sb-searchbar-form">
                            <div class="sb-searchbar-input">
                                <input type="text" placeholder="Search here">
                                <button type="submit"><i class="bi bi-search"></i></button>
                            </div>
                        </form>
                        <div class="sb-category">
                            <div class="category-title"><i class="bi bi-list-task"></i>
                                <h4>Category</h4>
                            </div>
                            <ul class="category-list">
                            <?php
                             $sql="SELECT * FROM `category`";
                             $run=mysqli_query($conn,$sql);
                             while($rec=mysqli_fetch_assoc($run)){
                                    ?>
                                     <li><a href="./event-category.php?cd=<?php echo $rec['cid'] ?>"><?php echo $rec['cname'] ?> <div class="category-lavel"><i
                                                class="bi bi-box-arrow-right"></i></div></a></li>
                                    <?php
                                }
                            ?> 
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="row">
                        <?php
                                $evn="SELECT * FROM `events` WHERE `e_cate`='$cd'";
                                $run=mysqli_query($conn,$evn);
                                while($rec=mysqli_fetch_assoc($run)){
                                ?>
                                <div class="col-lg-6 col-md-6 wow fadeInUp animated" data-wow-delay="200ms"
                            data-wow-duration="1500ms">
                            <div class="event-card-md">
                                <div class="event-thumb">
                                    <img src="../admin/main/imgs/events/<?php echo $rec['e_pic'] ?>" alt="" width="200" height="200">
                                    
                                </div>
                                <div class="event-content">
                                    <div class="event-info">
                                        <div class="event-date"><a href="#"> <i class="bi bi-calendar2-week"></i>
                                             <?php
                                                echo $rec['e_sdate']
                                             ?></a></div>
                                       <div class="event-location"><a href="booking.php">
                                            <input style="color:white;background-color:#CE1446;" type="button" class="btn " value="Book Now!" name="" id="">
                                        </a></div>
                                    </div>
                                    <h5 class="event-title"><a href="#">
                                        <?php
                                            echo $rec['e_name']
                                        ?>
                                    </a></h5>
                                </div>
                            </div>
                        </div>
                                <?php
                            }
                        ?>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
    include('./include/footer.php');
?>