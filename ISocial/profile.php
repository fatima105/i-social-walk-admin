<!doctype html>
<html lang="en">
<?php include('include/scripts.php'); ?>

<body>
    <div id="layout-wrapper">
        <?php include('include/header.php');

        ?>

        <div class="vertical-menu">

            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="#" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="assets/images/logo-dark-sm.png" alt="" height="26">
                    </span>
                    <span class="logo-lg">
                        <img src="assets/images/logo-dark.png" alt="" height="28">
                    </span>
                </a>

                <a href="#" class="logo logo-light">
                    <span class="logo-lg">
                        <img src="assets/images/logo-light.png" alt="" height="30">
                    </span>
                    <span class="logo-sm">
                        <img src="assets/images/logo-light-sm.png" alt="" height="26">
                    </span>
                </a>
            </div>

            <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect vertical-menu-btn">
                <i class="bx bx-menu align-middle"></i>
            </button>

            <div data-simplebar class="sidebar-menu-scroll">

                <!--- Sidemenu -->
                <?php include('include/sidebar.php'); ?>
                <!-- Sidebar -->
            </div>
        </div>
        <!-- Left Sidebar End -->
        <?php include('include/leftsidebar.php'); ?>

        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">

                    <div class="row">
                        <div class="offset-md-3 col-md-6">
                            <div class="card">
                                <div class="card-body p-0">
                                    <div class="user-profile-img">
                                        <img src="assets/images/pattern-bg.jpg" class="profile-img profile-foreground-img rounded-top" style="height: 120px;" alt="">
                                        <div class="overlay-content rounded-top">

                                        </div>
                                    </div>
                                    <!-- end user-profile-img -->


                                    <div class="p-4 pt-0">

                                        <div class="mt-n5 position-relative text-center border-bottom pb-3">
                                            <?php if ($profile_image == '') {

                                                echo '<div class="icon-badge rounded-circle text-center fs-5 bg-info text-white" style="height:100px; width:100px;">' . strtoupper(substr($first_name, 0, 1)) . '</div>';
                                            } else {
                                                echo '
<img style="height:100px; width:100px;" class="rounded-circle header-profile-user p-3" src="api/' . $profile_image . '"
alt="Header Avatar">';
                                            } ?>
                                            <div class="mt-3">
                                                <h5 class="mb-1"><?php echo $first_name . '  ' . $last_name; ?></h5>

                                            </div>

                                        </div>

                                        <div class="table-responsive mt-3 border-bottom pb-3">
                                            <table class="table align-middle table-sm table-nowrap table-borderless table-centered mb-0">
                                                <tbody>
                                                    <tr>
                                                        <th class="fw-bold">
                                                            Email :</th>
                                                        <td class="text-muted"><?php echo $email; ?></td>
                                                    </tr>
                                                    <!-- end tr -->

                                                    <!-- end tr -->
                                                    <tr>
                                                        <th class="fw-bold">
                                                            Active Watch :</th>
                                                        <td class="text-muted"><?php echo $active_watch; ?></td>
                                                    </tr>
                                                    <!-- end tr -->

                                                    <!-- end tr -->

                                                    <tr>
                                                        <th class="fw-bold">Phone Number :</th>
                                                        <td class="text-muted"><?php echo $phone_no; ?></td>
                                                    </tr>
                                                    <!-- end tr -->


                                                    <!-- end tr -->
                                                </tbody><!-- end tbody -->
                                            </table>
                                        </div>




                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                    <!-- end row -->






                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->


            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->



        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- chat offcanvas -->
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasActivity" aria-labelledby="offcanvasActivityLabel">
            <div class="offcanvas-header border-bottom">
                <h5 id="offcanvasActivityLabel">Offcanvas right</h5>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                ...
            </div>
        </div>


        <?php include('include/footerscripts.php'); ?>

</body>


</html>