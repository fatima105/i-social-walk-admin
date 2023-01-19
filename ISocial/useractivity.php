<!doctype html>
<html lang="en">
<?php include('include/scripts.php'); ?>

<body>
    <div id="layout-wrapper">
        <?php include('include/header.php'); ?>


        <div class="vertical-menu">

            <?php
            $stepsid = $_GET['steps_id'];

            $sql1 = "SELECT * FROM daily_steps_records where id='$stepsid' ";
            $result1 = mysqli_query($conn, $sql1);
            while ($row = mysqli_fetch_assoc($result1)) {
                $calories_burnt = $row['calories_burnt'];
                $distance_covered = $row['distancecovered'];
                $time_taken = $row['time_taken'];
                $user_id = $row['user_id'];
                $avg_speed = $row['avg_speed'];
                $avg_pace = $row['avg_pace'];
                $date = $row['date'];
                $steps = $row['steps'];
            }
            ?>
            <?php
            $sql1 = "SELECT * FROM users where id='$user_id' ";
            $result1 = mysqli_query($conn, $sql1);
            while ($row = mysqli_fetch_assoc($result1)) {
                $first_name = $row['first_name'];
                $last_name = $row['last_name'];
                $image = $row['profile_image'];
                $email = $row['email'];

                $phoneno = $row['phoneno'];
            }
            ?>

            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="index-2.html" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="assets/images/logo-dark-sm.png" alt="" height="26">
                    </span>
                    <span class="logo-lg">
                        <img src="assets/images/logo-dark.png" alt="" height="28">
                    </span>
                </a>

                <a href="index-2.html" class="logo logo-light">
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
                        <div class="offset-md-3 col-xl-6 col-12 col-md-6">
                            <div class="card">
                                <div class="card-body">

                                    <div class="">
                                        <div class="row mb-2">
                                            <div class="col-xl-12 col-md-112 col-12">
                                                <div class="pb-3 pb-xl-0">

                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h3 class="card-title mb-0 text-center">Activity</h4>
                                                        </div>
                                                        <div class="card-body">

                                                            <div class="row mb-2">
                                                                <div class="col-md-12">
                                                                    <div class="mb-3 text-center">
                                                                        <?php if ($image == '') {

                                                                            echo '<div class="icon-badge rounded-circle text-center fs-5 bg-info text-white" style="height:100px; width:100px;">' .
                                                                                "No Image Uploded" . '</div>';
                                                                        } else {
                                                                            echo '
<img style="height:100px; width:100px;" class="rounded-circle avatar-sm" src="api/' . $image . '"
alt="Header Avatar">';
                                                                        } ?>
                                                                    </div>
                                                                </div>

                                                            </div>


                                                            <div class="row mb-2">

                                                                <div class="col-md-6 col-12 text-center " style=" font-weight: bold;"> Name</div>
                                                                <div class="col-md-6 col-12 text-center">
                                                                    <?php echo $first_name . ' ' . $last_name; ?>
                                                                </div>


                                                            </div>
                                                            <div class="row mb-2">

                                                                <div class="col-md-6 col-12  text-center " style=" font-weight: bold;">Calories Burnt</div>
                                                                <div class="col-md-6 col-12 text-center">
                                                                    <div class="badge badge-soft-success font-size-12"> <?php echo $calories_burnt; ?></div>

                                                                </div>

                                                            </div>
                                                            <div class="row mb-2">

                                                                <div class="col-md-6 col-12  text-center " style=" font-weight: bold;">Distance Covered</div>
                                                                <div class="col-md-6 col-12 text-center">
                                                                    <div class=" font-size-14"><?php echo $distance_covered; ?></div>


                                                                </div>
                                                                <div class="row mb-2">

                                                                    <div class="col-md-6 col-12  text-center " style=" font-weight: bold;">Time Taken</div>
                                                                    <div class="col-md-6 col-12 text-center">
                                                                        <div class=" font-size-14"> <?php echo $distance_covered; ?></div>

                                                                    </div>

                                                                </div>

                                                                <div class="row mb-2">

                                                                    <div class="col-md-6 col-12  text-center " style=" font-weight: bold;">Average Speed</div>
                                                                    <div class="col-md-6 col-12 text-center">
                                                                        <div class="badge badge-soft-danger font-size-12"><?php echo $avg_speed; ?></div>
                                                                    </div>


                                                                </div>
                                                                <div class="row mb-2">

                                                                    <div class="col-md-6 col-12  text-center " style=" font-weight: bold;">Total Steps</div>
                                                                    <div class="col-md-6 col-12 text-center">
                                                                        <div class="badge badge-soft-danger font-size-12"><?php echo $steps; ?></div>
                                                                    </div>


                                                                </div>


                                                                <div class="row mb-2">

                                                                    <div class="col-md-6 col-12  text-center " style=" font-weight: bold;">Average Pace</div>
                                                                    <div class="col-md-6 col-12 text-center">
                                                                        <div class="badge badge-soft-danger font-size-12"><?php echo $avg_pace; ?></div>
                                                                    </div>


                                                                </div>
                                                                <div class="row mb-2">

                                                                    <div class="col-md-6 col-12  text-center " style=" font-weight: bold;">Date </div>
                                                                    <div class="col-md-6 col-12 text-center">
                                                                        <div class="badge badge-soft-success font-size-12"><?php echo $date; ?></div>
                                                                    </div>
                                                                </div>


                                                                <div>

                                                                </div>

                                                            </div>
                                                            <!-- end card body -->
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