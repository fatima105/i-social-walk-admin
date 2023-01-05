<!doctype html>
<html lang="en">
<?php include('include/scripts.php'); ?>
<?php
include('include/connection.php');
?>

<body>
    <div id="layout-wrapper">
        <?php include('include/header.php'); ?>


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
                        <div class="col-xl-3 col-md-6 col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div>
                                        <div class="d-flex align-items-center">
                                            <div class="avatar">
                                                <div class="avatar-title rounded bg-soft-primary">
                                                    <i class="bx bx-user font-size-24 mb-0 text-primary"></i>
                                                </div>
                                            </div>

                                            <div class="flex-grow-1 ms-3">
                                                <h6 class="mb-0 font-size-15">Total Users</h6>
                                            </div>
                                            <div>
                                                <h4 class="mt-4 pt-1 mb-0 font-size-22">
                                                    <?php
                                                    $sql = "SELECT * FROM users";
                                                    $result = mysqli_query($conn, $sql);
                                                    $users = mysqli_num_rows($result); ?>

                                                    <span class="text-secondary fw-medium  display-6 align-middle fw-bolder">
                                                        <?php echo    $users ?>
                                                    </span>
                                                </h4>

                                            </div>


                                        </div>

                                        <div>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6 col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div>
                                        <div class="d-flex align-items-center">
                                            <div class="avatar">
                                                <div class="avatar-title rounded bg-soft-primary">
                                                    <i class="bx bx-check-shield font-size-24 mb-0 text-primary"></i>
                                                </div>
                                            </div>

                                            <div class="flex-grow-1 ms-3">
                                                <h6 class="mb-0 font-size-15">Total Challenges</h6>
                                            </div>
                                            <div>
                                                <h4 class="mt-4 pt-1 mb-0 font-size-22">
                                                    <?php
                                                    $sql = "SELECT * FROM challenges";
                                                    $result = mysqli_query($conn, $sql);
                                                    $challenges = mysqli_num_rows($result); ?>

                                                    <span class="text-secondary fw-medium display-6 align-middle fw-bolder">
                                                        <?php echo    $challenges ?>
                                                    </span>
                                                </h4>
                                            </div>

                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6 col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div>
                                        <div class="d-flex align-items-center">
                                            <div class="avatar">
                                                <div class="avatar-title rounded bg-soft-primary">
                                                    <i class="bx bx-group font-size-24 mb-0 text-primary"></i>

                                                </div>
                                            </div>

                                            <div class="flex-grow-1 ms-3">
                                                <h6 class="mb-0 font-size-15">Total Groups</h6>
                                            </div>
                                            <div>
                                                <h4 class="mt-4 pt-1 mb-0 font-size-22">
                                                    <?php
                                                    $sql = "SELECT * FROM user_groups";
                                                    $result = mysqli_query($conn, $sql);
                                                    $challenges = mysqli_num_rows($result); ?>

                                                    <span class="text-secondary fw-medium display-6 align-middle fw-bolder">
                                                        <?php echo    $challenges ?>
                                                    </span>
                                                </h4>

                                            </div>

                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6 col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div>
                                        <div class="d-flex align-items-center">
                                            <div class="avatar">
                                                <div class="avatar-title rounded bg-soft-primary">
                                                    <i class="bx bx-block font-size-24 mb-0 text-primary"></i>

                                                </div>
                                            </div>

                                            <div class="flex-grow-1 ms-3">
                                                <h6 class="mb-0 font-size-15">Total Reported</h6>
                                            </div>
                                            <div>
                                                <h4 class="mt-4 pt-1 mb-0 font-size-22">
                                                    234,235
                                                    <span class="text-secondary fw-medium font-size-13 align-middle">

                                                    </span>
                                                </h4>

                                            </div>

                                        </div>


                                    </div>
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

    <?php include('include/footer.php'); ?>
    </div>
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