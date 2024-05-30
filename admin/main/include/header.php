<?PHP
include('./include/conn.php');
session_start();
if(@$_SESSION['email']==null){
    header("Location:../index.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://joblly-admin-template-dashboard.multipurposethemes.com/bs5/images/favicon.ico">

    <title>Event Lab</title>

    <link rel="stylesheet" href="../assets/vendor_components/sweetalert2/sweetalert2.min.css">
    <!-- Vendors Style-->
    <!-- <link rel="stylesheet" href="../assets/vendor_components/perfect-scrollbar/css/perfect-scrollbar.css"> -->
    <link rel="stylesheet" href="../assets/vendor_components/bootstrap-daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="../assets/vendor_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.css">
    <link rel="stylesheet" href="../assets/vendor_components/jquery-toast-plugin-master/src/jquery.toast.css">
    <link rel="stylesheet" href="../assets/vendor_components/bootstrap-switch/switch.css">
    <link rel="stylesheet" href="../assets/vendor_components/fullcalendar/fullcalendar.min.css">


    <!-- Style-->
    <link href="../assets/vendor_components/bootstrap/dist/css/bootstrap.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- <link rel="stylesheet" href="css/vendors_css.css"> -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/skin_color.css">
    <link rel="stylesheet" href="../assets/icons/font-awesome/css/all.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
        integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>

<body class="hold-transition light-skin sidebar-mini theme-primary fixed">

    <div class="wrapper">
        <div id="loader"></div>

        <header class="main-header">
            <div class="d-flex align-items-center logo-box justify-content-start">
                <a href="#"
                    class="waves-effect waves-light text-dark nav-link d-none d-md-inline-block mx-10 push-btn bg-transparent"
                    data-toggle="push-menu" role="button">
                    <i data-feather="menu"></i>
                </a>
                <!-- Logo -->
                <a href="index-2.html" class="logo">
                    <!-- logo-->
                    <div class="logo-lg">
                    <b>   <span class="">EVENT LAB</span></b>
                        <span class="dark-logo"><img src="../images/logo-light-text.png" alt="logo"></span>
                    </div>
                </a>
            </div>
            <!-- Header Navbar -->
            <nav class="navbar navbar-static-top">
                <!-- Sidebar toggle button-->
                <div class="app-menu">
                    <ul class="header-megamenu nav">
                        <li class="btn-group nav-item d-md-none">
                            <a href="#" class="waves-effect waves-light nav-link push-btn" data-toggle="push-menu"
                                role="button">
                                <i data-feather="menu"></i>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="navbar-custom-menu r-side">
                    <ul class="nav navbar-nav">
                        <li class="btn-group nav-item d-lg-flex d-none align-items-center">
                            <p class="mb-0 text-fade pe-10 pt-5"><?php
				echo date("d-M-Y");
			?></p>
                        </li>
                        <li class="btn-group nav-item d-lg-inline-flex d-none">
                            <a href="#" data-provide="fullscreen" class="waves-effect waves-light nav-link full-screen"
                                title="Full Screen">
                                <i data-feather="maximize"></i>
                            </a>
                        </li>

                        <!-- Notifications -->
                        <li class="dropdown notifications-menu">
                            <a href="#" class="waves-effect waves-light dropdown-toggle" data-bs-toggle="dropdown"
                                title="Notifications">
                                <i data-feather="bell"></i>
                            </a>
                            <ul class="dropdown-menu animated bounceIn">

                                <li class="header">
                                    <div class="p-20">
                                        <div class="flexbox">
                                            <div>
                                                <h4 class="mb-0 mt-0">Notifications</h4>
                                            </div>
                                            <div>
                                                <a href="#" class="text-danger">Clear All</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu sm-scrol">
                                        <li>
                                            <a href="#">
                                                <i class="fa-solid fa-cart-shopping text-info"></i>Curabitur id eros
                                                quis nunc suscipit blandit.
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa-solid fa-triangle-exclamation text-warning"></i> Duis
                                                malesuada justo eu sapien elementum, in semper diam posuere.
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa-regular fa-user text-danger"></i> Donec at nisi sit amet
                                                tortor commodo porttitor pretium a erat.
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="footer">
                                    <a href="#">View all</a>
                                </li>
                            </ul>
                        </li>
                        <!-- User Account-->
                        <li class="dropdown user user-menu">
                            <a href="#" class="waves-effect waves-light dropdown-toggle" data-bs-toggle="dropdown"
                                title="User">
                                <i class="fa fa-user"><span class="path1"></span><span class="path2"></span></i>
                            </a>
                            <ul class="dropdown-menu animated flipInX">
                                <li class="user-body">
                                    <a class="dropdown-item" href="#"><i class="ti-user text-muted me-2"></i>
                                        Profile</a>
                                    <a class="dropdown-item" href="#"><i class="ti-wallet text-muted me-2"></i> My
                                        Wallet</a>
                                    <a class="dropdown-item" href="#"><i class="ti-settings text-muted me-2"></i>
                                        Settings</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="./logout.php"><i class="ti-lock text-muted me-2"></i>
                                        Logout</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>