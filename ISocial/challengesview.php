<!doctype html>
<html lang="en">
<?php include('include/scripts.php'); ?>
<?php include('include/connection.php'); ?>

<body>
    <div id="layout-wrapper">
        <?php include('include/header.php');

        $challenge_id = $_GET['challenge_id']; ?>

        <?php
        $sql1 = "SELECT * FROM challenges where id='$challenge_id' ";
        $result1 = mysqli_query($conn, $sql1);
        while ($row = mysqli_fetch_assoc($result1)) {
            $name = $row['name'];
            $image = $row['image'];
            $challenge_type = $row['challenge_type'];
            $challenge_visibility = $row['challenge_visibility'];
            $challenge_privacy = $row['challenge_privacy'];
            $start_date = $row['start_date'];
            $end_date = $row['end_date'];
            $challenge_metric_no = $row['challenge_metric_no'];
            $challenge_metric_step_type = $row['challenge_metric_step_type'];
        }
        ?>
        <?php
        $sql1 = "SELECT * FROM users where id='$created_by_user_id' ";
        $result1 = mysqli_query($conn, $sql1);
        while ($row = mysqli_fetch_assoc($result1)) {
            $first_name = $row['first_name'];
            $last_name = $row['last_name'];
            $profile_image = $row['profile_image'];
            $email = $row['email'];

            $phoneno = $row['phoneno'];
        }
        ?>



        <div class="vertical-menu">

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
                        <div class="offset-md-3 col-xl-6 col-6 col-md-6">
                            <div class="card">
                                <div class="card-body">

                                    <div class="">
                                        <div class="row mb-2">
                                            <div class="col-xl-12 col-md-112 col-12">
                                                <div class="pb-3 pb-xl-0">

                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h3 class="card-title mb-0 text-center">Challenges</h4>
                                                        </div>
                                                        <div class="card-body">

                                                            <div class="row">
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


                                                            <div class="row">
                                                                <div class="col-md-12 col-12">
                                                                    <div class="mb-3" style="display:flex;">
                                                                        <div class="col-md-6 col-12 text-start text-bold"> Name</div>
                                                                        <div class="col-md-6 col-12 text-start">
                                                                            <?php echo $name; ?>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12 col-12">
                                                                    <div class="mb-3" style="display:flex;">
                                                                        <div class="col-md-6 col-6  text-start text-bold">Type</div>
                                                                        <div class="col-md-6 col-6 text-start">
                                                                            <div class="badge badge-soft-success font-size-12"> <?php echo $challenge_type; ?></div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12 col-12">
                                                                    <div class="mb-3" style="display:flex;">
                                                                        <div class="col-md-6 col-6  text-start text-bold">Start Date</div>
                                                                        <div class="col-md-6 col-6 text-start">
                                                                            <div class="text-bold font-size-14"><?php echo $start_date; ?></div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12 col-12">
                                                                    <div class="mb-3" style="display:flex;">
                                                                        <div class="col-md-6 col-6  text-start text-bold">End Date</div>
                                                                        <div class="col-md-6 col-6 text-start">
                                                                            <div class="text-bold font-size-14"> <?php echo $end_date; ?></div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-12 col-12">
                                                                    <div class="mb-3" style="display:flex;">
                                                                        <div class="col-md-6 col-6  text-start text-bold">Visibility</div>
                                                                        <div class="col-md-6 col-6 text-start">
                                                                            <div class="badge badge-soft-danger font-size-12"><?php echo $challenge_visibility; ?></div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12 col-12">
                                                                    <div class="mb-3" style="display:flex;">
                                                                        <div class="col-md-6 col-6  text-start text-bold">Privacy</div>
                                                                        <div class="col-md-6 col-6 text-start">
                                                                            <div class="badge badge-soft-success font-size-12"> </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12 col-12">
                                                                    <div class="mb-3" style="display:flex;">
                                                                        <div class="col-md-6 col-6  text-start text-bold"> Metric No</div>
                                                                        <div class="col-md-6 col-6 text-start">
                                                                            <div class="badge badge-soft-success font-size-12"><?php echo $challenge_metric_no; ?></div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12 col-12">
                                                                    <div class="mb-3" style="display:flex;">
                                                                        <div class="col-md-6 col-6  text-start text-bold">Step Type</div>
                                                                        <div class="col-md-6 col-6 text-start">
                                                                            <div class="badge badge-soft-success font-size-12"><?php echo $challenge_metric_step_type; ?></div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-12 col-12">
                                                                    <div class="mb-3" style="display:flex;">
                                                                        <div class="col-md-6 text-center text-bold"> Challenges Participants</div>
                                                                        <div class="col-md-6 text-start">


                                                                            <div class="avatar-group-item">
                                                                                <a data-bs-toggle="modal" data-bs-target=".bs-example-modal-center" href="javascript: void(0);" class="d-inline-block">
                                                                                    <div class="avatar-sm">
                                                                                        <span class="avatar-title rounded-circle bg-success text-white font-size-16 text-center" style="width:70px; height:70px;">
                                                                                            View Members
                                                                                        </span>
                                                                                    </div>


                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
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
                                    <div class="modal fade bs-example-modal-center" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title text-center">Challenge Members</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <?php
                                                    $sql = "Select * from challenges_participants WHERE challenge_id='$challenge_id' AND status='membered' ";

                                                    $result = mysqli_query($conn, $sql);

                                                    $rowcount = mysqli_num_rows($result);
                                                    if ($rowcount > 0) {
                                                        while ($row = mysqli_fetch_assoc($result)) {
                                                            $user_id =  $row['user_id'];
                                                            $sql1 = "Select * from users WHERE id='$user_id'  ";

                                                            $result1 = mysqli_query($conn, $sql1);

                                                            $rowcount1 = mysqli_num_rows($result1);
                                                            if ($rowcount1 > 0) {
                                                                while ($row1 = mysqli_fetch_assoc($result1)) {
                                                                    $image =  $row1['profile_image'];

                                                    ?>




                                                                    <div class="row">
                                                                        <div class="col-12" style="display:flex">
                                                                            <div class="col-6 text-center">
                                                                                <?php echo $name = getname($user_id); ?>
                                                                            </div>
                                                                            <div class="col-6 text-center">

                                                                                <?php echo '
<img style="height:50px; width:50px;" class="rounded-circle avatar-sm" src="api/' . $image . '" 
alt="Header Avatar">'; ?>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="hr mb-2 mt-2">

                                                                    </div>
                                                    <?php }
                                                            }
                                                        }
                                                    } ?>
                                                </div>
                                            </div><!-- /.modal-content -->
                                        </div><!-- /.modal-dialog -->
                                    </div><!-- /.modal -->



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