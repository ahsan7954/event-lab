<?php
    include('./include/conn.php');
    include('./include/header.php');
?>
<div class="breadcrumb-area">
    <div class="container">
        <div class="row align-items-end">
            <div class="col-lg-12">
                <div class="breadcrumb-content">
                    <div class="page-outlined-text">
                        <h1>News</h1>
                    </div>
                    <h2 class="page-title">News</h2>
                    <ul class="page-switcher">
                        <li><a href="index-2.html">Home <i class="bi bi-caret-right"></i></a></li>
                        <li>News</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="blog-sidebar-wrapper ">
    <div class="container position-relative pt-110">
        <div class="row">
            <div class="col-lg-12 ">
                <div class="background-title text-style-one">
                    <h2>Latest News</h2>
                </div>
                <div class="section-head">
                    <h3>Latest News</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
                    <?php
                            
                                $sql="SELECT * FROM `news` INNER JOIN `category` ON n_cate=cid WHERE `n_status`='ON'";
                                $run=mysqli_query($conn,$sql);
                                while($rec=mysqli_fetch_assoc($run)){
                                ?>
                    <div class="col-lg-6 col-md-6 wow fadeInUp animated" data-wow-delay="200ms"
                        data-wow-duration="1500ms">
                        <div class="blog-card-md">
                            <div class="blog-thumb">
                                <a href="#"><img src="../admin/main/imgs/news/<?php echo $rec['n_pic'] ?>" alt="IMAGE" width="200" height="200"></a>
                                <div class="blog-tags">
                                    <a href="#"><?php
                                        echo $rec['cname']
                                    ?></a>
                                </div>
                            </div>
                            <div class="blog-content">
                                <h4 class="blog-title"><a href="#"><?php
                                    echo $rec['n_title']
                                ?></a></h4>
                                <div class="blog-bottom">
                                    <div class="blog-date">
                                        <p> <i class="bi bi-calendar2-week"></i> <span><?php
                                            echo $rec['n_date']
                                        ?></span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                            }                        ?>

                </div>
            </div>
            <div class="col-lg-4">
                <div class="blog-sidebar">
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
                            <li><a href="./news-category.php?cd=<?php echo $rec['cid'] ?>"><?php echo $rec['cname'] ?>
                                    <div class="category-lavel"><i class="bi bi-box-arrow-right"></i></div></a></li>
                            <?php
                                }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
    include('./include/footer.php');
?>