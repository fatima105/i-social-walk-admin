<!doctype html>
<html lang="en">
<?php include('include/scripts.php'); ?>

<body>
    <div id="layout-wrapper">
        <?php include('include/header.php'); ?>
        <?php include('include/functions.php'); ?>
        <?php $reported_challenge = $_GET['id'];
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
                        <div class="offset-md-3 col-xl-6 col-12 col-md-6">
                            <div class="card">
                                <div class="card-body">

                                    <div class="">
                                        <div class="row mb-2">
                                            <div class="col-xl-12 col-md-12 col-12">
                                                <div class="pb-3 pb-xl-0">

                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h3 class="card-title mb-0 text-center">Reported Challenge </h4>
                                                        </div>
                                                        <div class="card-body">


                                                            <?php $sql = "SELECT *
                                                          FROM challenges
                                                          INNER JOIN report_challenge ON challenges.id = report_challenge.report_challenge where report_challenge='$reported_challenge'";
                                                            $query1 = mysqli_query($conn, $sql);
                                                            while ($row = mysqli_fetch_assoc($query1)) {
                                                            ?>
                                                                <div class="row">



                                                                    <div class="col-md-6 col-12 text-center text-bold mb-2 " style=" font-weight: bold;">Image</div>
                                                                    <div class="col-md-6 col-12  text-center  mb-2">
                                                                        <img class="rounded-circle avatar-sm" <?php echo ' src="api/' . $row['image']; ?> alt="">



                                                                    </div>

                                                                </div>

                                                                <div class="row">

                                                                    <div class="col-md-6 col-sm-12 mb-2 mt-2 text-center" style=" font-weight: bold;">Challenge Type</div>
                                                                    <div class="col-md-6 col-sm-12 text-center ">
                                                                        <div class="badge badge-soft-danger font-size-12 mb-2 mt-2">
                                                                            <?php echo $row['challenge_type']; ?>
                                                                        </div>


                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-md-6 col-sm-12 text-center mb-2 " style=" font-weight: bold;">Challenge Name</div>
                                                                    <div class="col-md-6 col-sm-12 text-center text-bold mb-2">
                                                                        <?php echo  $row['name']; ?>
                                                                    </div>

                                                                </div>




                                                                <div class="row">

                                                                    <div class="col-md-6 text-center text-bold mb-2" style=" font-weight: bold;"> Comments</div>
                                                                    <div class="col-md-6 text-center">
                                                                        <div class="badge badge-soft-danger font-size-12  mb-2">
                                                                            <?php echo $row['comments']; ?>
                                                                        </div>

                                                                    </div>

                                                                </div>
                                                                <div class="row">

                                                                    <div class="col-md-6 col-12  text-center text-bold" style=" font-weight: bold;"> Reported By</div>
                                                                    <div class="col-md-6 col-12 text-center">
                                                                        <div class="badge badge-soft-danger font-size-12">

                                                                            <?php $user_id = $row['reported_by'];
                                                                            echo getname($user_id); ?>
                                                                        </div>

                                                                    </div>

                                                                </div>
                                                                <?php
                                                                $SQA = "SELECT * from challenges where id=$reported_challenge";
                                                                $QUERY = mysqli_query($conn, $SQA);
                                                                while ($row = mysqli_fetch_assoc($QUERY)) {
                                                                    $status = $row['status'];
                                                                    if ($status == "Active") { ?>
                                                                        <div class="row mt-3">
                                                                            <div class="offset-md-9 offset-9 col-2">
                                                                                <a href="challenges\block.php?reportedchallengeid=<?php echo $reported_challenge; ?>" type="button" class="btn btn-sm bg-primary text-white" id="myButton1">
                                                                                    Block
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    <?php } else { ?>
                                                                        <div class="row mt-3">
                                                                            <div class="offset-md-9 offset-9 col-2">
                                                                                <a href="challenges\active.php?reportedchallengeid=<?php echo $reported_challenge; ?>" type="button" class="btn btn-sm bg-primary text-white" id="myButton1">
                                                                                    Active
                                                                                </a>
                                                                            </div>
                                                                        </div>

                                                                <?php   }
                                                                } ?>
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


            <?php } ?>

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
    <script type="text/javascript">
        function change() // no ';' here
        {
            if (this.value == "Close Curtain") this.value = "Open Curtain";
            else this.value = "Close Curtain";
        }
    </script>
</body>


</html>