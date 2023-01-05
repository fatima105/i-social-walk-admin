<!doctype html>
<html lang="en">

<body>

    <!-- <body data-layout="horizontal"> -->

    <!-- Begin page -->
    <div id="layout-wrapper">

        <?php include('include/scripts.php'); ?>
        <?php include('include/connection.php'); ?>
        <?php include('include/header.php'); ?>
        <!-- ========== Left Sidebar Start ========== -->
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
                <?php include('include/sidebar.php'); ?>
            </div>
        </div>
        <!-- Left Sidebar End -->

        <?php include('include/leftsidebar.php'); ?>
        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    <div class="container">
                        <div class="col-md-6 col-md-12  text-end">
                            <a href="updateterms.php?id=<?php echo $id; ?>" class="btn btn-primary">Update Terms</a>

                        </div>
                        <?php
                        $sql = "Select * from terms";
                        $result = mysqli_query($conn, $sql);
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                $id = $row['id'];
                                $terms = $row['terms'];
                            }
                        } ?>

                        <div class="container  justify-content-end">
                            <?php if (isset($_POST['submit'])) {
                                $id = $_POST['id'];
                                $terms = $_POST['terms'];
                                $sql = "UPDATE terms SET
                            terms='$terms'

                            WHERE id='$id'";
                                $query = mysqli_query($conn, $sql);
                                if ($query) {

                                    $_SESSION['status_text'] = "Terms Updated Successfully";
                                    $_SESSION['status_title'] = "";
                                    $_SESSION['status_code'] = "success";
                                    header('location: terms.php');
                                } else {
                                    $_SESSION['status_text'] = "Terms Not Updated";
                                    $_SESSION['status_title'] = "";
                                    $_SESSION['status_code'] = "error";
                                    header('location:terms.php');
                                }
                            }

                            ?>

                            <h4 class=" ml-5      text-primary"> Terms & Conditions</h4>

                            <?php echo $terms; ?>
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

            <!-- JAVASCRIPT -->
            <?php include('include/footerscripts.php'); ?>
</body>


<!-- Mirrored from themesdesign.in/webadmin/layouts/pages-starter.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Nov 2022 09:54:56 GMT -->

</html>