  <?php
    include('./include/conn.php');
    
?>
  <style>
.icon {
    position: relative;
    top: 2.7px;
    /* color:white; */
}
 </style>
  <aside class="main-sidebar">
      <!-- sidebar-->
      <section class="sidebar position-relative">
          <div class="user-profile px-20 py-10">
              <div class="d-flex align-items-center">
                  <div class="image">
                      <img src="../images/avatar/avatar-13.png" class="avatar avatar-lg bg-primary-light rounded100"
                          alt="User Image">
                  </div>
                  <div class="info">
                    <b><span>Admin Panel</span></b>
                      <!-- <?php
                    //  $email = $_SESSION['email'];
                        // $fet = $obj->singleRecord("a_users",where:"`u_email`='$email'");
                        $sql="SELECT * FROM `admin` ";
                        $run=mysqli_query($conn,$sql);
                        while($fet=mysqli_fetch_assoc($run)){
                    ?>
                      <b><a class="  px-20" data-bs-toggle="dropdown" href="#"><?php
                        echo $fet ['aname']?></a></b>
                      <?php
                        }
                      
                      ?> -->
                      <!-- dropdown-toggle
                      <div class="dropdown-menu">
                          <a class="dropdown-item" href="#"><i class="ti-user"></i> Profile</a>
                          <a class="dropdown-item" href="#"><i class="ti-email"></i> Inbox</a>
                          <a class="dropdown-item" href="#"><i class="ti-link"></i> Connections</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="#"><i class="ti-settings"></i> Settings</a>
                      </div> -->
                  </div>
              </div>
          </div>
          <div class="multinav">
              <div class="multinav-scroll" style="height: 100%;">
                  <!-- sidebar menu-->
                  <ul class="sidebar-menu" data-widget="tree">
                      <li><a href="dashboard.php"><i class="fa fa-chart-line"><span class="path1"></span><span
                                      class="path2"></span></i><span class="mx-1">Dashboard</span></a></li>
                      <li class="treeview">
                          <a href="#">
                              <i class="fa fa-briefcase"><span class="path1"></span><span class="path2"></span></i>
                              <span>Category</span>
                              <span class="pull-right-container">
                                  <i class="fa fa-angle-right pull-right"></i>
                              </span>
                          </a>
                          <ul class="treeview-menu">
                              <li>
                                  <a href="cat-insert.php">
                                      <span class="fa fa-edit icon"><span class="path1"></span><span
                                              class="path2"></span></span>
                                      <span>Add Category</span>
                                  </a>
                              </li>
                              <li>
                                  <a href="cat-view.php">
                                      <span class="fa fa-table icon"><span class="path1"></span><span
                                              class="path2"></span></span>
                                      <span>View Category</span>
                                  </a>
                              </li>
                          </ul>
                      </li>
                      <li class="treeview">
                          <a href="#">
                              <i span class="fa  fa-flag"><span class="path1"></span><span class="path2"></span></i>
                              <span>Planner</span>
                              <span class="pull-right-container">
                                  <i class="fa fa-angle-right pull-right"></i>
                              </span>
                          </a>
                          <ul class="treeview-menu">
                              <li>
                                  <a href="planner-insert.php">
                                      <i span class="fa fa-edit icon"><span class="path1"></span><span
                                              class="path2"></span></i>
                                      <span>Add Planner</span>
                                  </a>
                              </li>
                              <li class="treeview">
                                  <a href="planner-view.php">
                                      <i span class="fa fa-table icon"><span class="path1"></span><span
                                              class="path2"></span></i>
                                      <span>View Planner</span>
                                      <span class="pull-right-container">
                                          <i class="fa fa-angle-right pull-right"></i>
                                      </span>
                                  </a>
                                  <ul class="treeview-menu">
                                      <li><a href="planner-pending.php"><i class="icon-Commit"><span
                                                      class="path1"></span><span class="path2"></span></i>Pending</a>
                                      </li>
                                      <li><a href="planner-confirmed.php"><i class="icon-Commit"><span
                                                      class="path1"></span><span class="path2"></span></i>Confirmed</a>
                                      </li>
                                  </ul>
                              </li>
                          </ul>
                      </li>
                      <li class="treeview">
                          <a href="#">
                              <i span class="fa 
                              fa-snowflake-o"><span class="path1"></span><span class="path2"></span></i>
                              <span>Designer</span>
                              <span class="pull-right-container">
                                  <i class="fa fa-angle-right pull-right"></i>
                              </span>
                          </a>
                          <ul class="treeview-menu">
                              <li>
                                  <a href="designer-insert.php">
                                      <i span class="fa fa-edit icon"><span class="path1"></span><span
                                              class="path2"></span></i>
                                      <span>Add Designer</span>
                                  </a>
                              </li>
                              <li class="treeview">
                                  <a href="designer-view.php">
                                      <i span class="fa fa-table icon"><span class="path1"></span><span
                                              class="path2"></span></i>
                                      <span>View Designer</span>
                                      <span class="pull-right-container">
                                          <i class="fa fa-angle-right pull-right"></i>
                                      </span>
                                  </a>
                                  <ul class="treeview-menu">
                                      <li><a href="designer-pending.php"><i class="icon-Commit"><span
                                                      class="path1"></span><span class="path2"></span></i>Pending</a>
                                      </li>
                                      <li><a href="designer-confirmed.php"><i class="icon-Commit"><span
                                                      class="path1"></span><span class="path2"></span></i>Confirmed</a>
                                      </li>
                                  </ul>
                              </li>
                          </ul>
                      </li>
                      <li class="treeview">
                          <a href="#">
                              <i span class="fa fa-mortar-board"><span class="path1"></span><span
                                      class="path2"></span></i>
                              <span>Volunteer</span>
                              <span class="pull-right-container">
                                  <i class="fa fa-angle-right pull-right"></i>
                              </span>
                          </a>
                          <ul class="treeview-menu">
                              <li>
                                  <a href="volunteer-insert.php">
                                      <i span class="fa fa-edit icon"><span class="path1"></span><span
                                              class="path2"></span></i>
                                      <span>Add Volunteer</span>
                                  </a>
                              </li>
                              <li class="treeview">
                                  <a href="volunteer-view.php">
                                      <i span class="fa fa-table icon"><span class="path1"></span><span
                                              class="path2"></span></i>
                                      <span>View Volunteer</span>
                                      <span class="pull-right-container">
                                          <i class="fa fa-angle-right pull-right"></i>
                                      </span>
                                  </a>
                                  <ul class="treeview-menu">
                                      <li><a href="volunteer-pending.php"><i class="icon-Commit"><span
                                                      class="path1"></span><span class="path2"></span></i>Pending</a>
                                      </li>
                                      <li><a href="volunteer-confirmed.php"><i class="icon-Commit"><span
                                                      class="path1"></span><span class="path2"></span></i>Confirmed</a>
                                      </li>
                                  </ul>
                              </li>
                          </ul>
                      </li>
                      <li class="treeview">
                          <a href="#">
                              <i class="fa fa-map-marker"><span class="path1"></span><span class="path2"></span></i>
                              <span>Vanue</span>
                              <span class="pull-right-container">
                                  <i class="fa fa-angle-right pull-right"></i>
                              </span>
                          </a>
                          <ul class="treeview-menu">
                              <li>
                                  <a href="vanue-insert.php">
                                      <i span class="fa fa-edit icon"><span class="path1"></span><span
                                              class="path2"></span></i>
                                      <span>Add Vanue</span>
                                  </a>
                              </li>
                              <li>
                                  <a href="vanue-view.php">
                                      <i span class="fa fa-table icon"><span class="path1"></span><span
                                              class="path2"></span></i>
                                      <span>View Vanue</span>
                                  </a>
                              </li>
                          </ul>
                      </li>
                         <li class="treeview">
                          <a href="#">
                              <i span class="fa fa-calendar-check-o"><span class="path1"></span><span
                                      class="path2"></span></i>
                              <span>Booking</span>
                              <span class="pull-right-container">
                                  <i class="fa fa-angle-right pull-right"></i>
                              </span>
                          </a>
                          <ul class="treeview-menu">
                              <li>
                                  <a href="booking-insert.php">
                                      <i span class="fa fa-edit icon"><span class="path1"></span><span
                                              class="path2"></span></i>
                                      <span>Add Booking</span>
                                  </a>
                              </li>
                              <li class="treeview">
                                  <a href="#">
                                      <i span class="fa fa-table icon"><span class="path1"></span><span
                                              class="path2"></span></i>
                                      <span>View Booking</span>
                                      <span class="pull-right-container">
                                          <i class="fa fa-angle-right pull-right"></i>
                                      </span>
                                  </a>
                                  <ul class="treeview-menu">
                                      <li><a href="booking-pending.php"><i class="icon-Commit"><span
                                                      class="path1"></span><span class="path2"></span></i>Pending</a>
                                      </li>
                                      <li><a href="booking-confirmed.php"><i class="icon-Commit"><span
                                                      class="path1"></span><span class="path2"></span></i>Confirmed</a>
                                      </li>
                                  </ul>
                              </li>
                          </ul>
                      </li>
                      <li class="treeview">
                          <a href="#">
                              <i class="fa fa-bullhorn"><span class="path1"></span><span class="path2"></span></i>
                              <span>News</span>
                              <span class="pull-right-container">
                                  <i class="fa fa-angle-right pull-right"></i>
                              </span>
                          </a>
                          <ul class="treeview-menu">
                              <li>
                                  <a href="news-insert.php">
                                      <i span class="fa fa-edit icon"><span class="path1"></span><span
                                              class="path2"></span></i>
                                      <span>Add News</span>
                                  </a>
                              </li>
                              <li>
                                  <a href="news-view.php">
                                      <i span class="fa fa-table icon"><span class="path1"></span><span
                                              class="path2"></span></i>
                                      <span>View News</span>
                                  </a>
                              </li>
                          </ul>
                      </li>
                      <li class="treeview">
                          <a href="#">
                              <i class="fa fa-gift"><span class="path1"></span><span class="path2"></span></i>
                              <span>Recent Event</span>
                              <span class="pull-right-container">
                                  <i class="fa fa-angle-right pull-right"></i>
                              </span>
                          </a>
                          <ul class="treeview-menu">
                              <li>
                                  <a href="event-insert.php">
                                      <i span class="fa fa-edit icon"><span class="path1"></span><span
                                              class="path2"></span></i>
                                      <span>Add Event</span>
                                  </a>
                              </li>
                              <li>
                                  <a href="event-view.php">
                                      <i span class="fa fa-table icon"><span class="path1"></span><span
                                              class="path2"></span></i>
                                      <span>View Event</span>
                                  </a>
                              </li>
                          </ul>
                      </li>
                      <li class="treeview">
                          <a href="#">
                              <i class="fa fa-users"><span class="path1"></span><span class="path2"></span></i>
                              <span>Contact</span>
                              <span class="pull-right-container">
                                  <i class="fa fa-angle-right pull-right"></i>
                              </span>
                          </a>
                          <ul class="treeview-menu">
                              <li>
                                  <a href="contact-view.php">
                                      <i span class="fa fa-table icon"><span class="path1"></span><span
                                              class="path2"></span></i>
                                      <span>View Contact</span>
                                  </a>
                              </li>
                          </ul>
                      </li>
                  </ul>
              </div>
          </div>
      </section>
  </aside>