<!doctype html>
<html lang="en">

<?php

include('include/connection.php');
include('include/scripts.php');

include('include/header.php');

if (isset($_POST['updatepass'])) {
    $old = $_POST['old_password'];
    $OLDPASS = md5($old);
    $sql = "Select * from users where password='$OLDPASS' AND id='$id'";

    $query = mysqli_query($conn, $sql);
    if (mysqli_num_rows($query) == 1) {
        $new_password = $_POST['new_password'];
        $confirm_password = $_POST['confirm_password'];

        if ($new_password == $confirm_password) {

            $pass = md5($_POST['new_password']);
            $sql = "Update users SET password='$pass' where id='$id'";

            $query = mysqli_query($conn, $sql);

            if ($query) {

                $_SESSION['status_text'] = "Password Updated";
                $_SESSION['status_title'] = "Success";
                $_SESSION['status_code'] = "success";
            }
        } else {

            $_SESSION['status_text'] = "New Password & Confirm Password Doesnot Match";
            $_SESSION['status_title'] = "Error";
            $_SESSION['status_code'] = "error";
        }
    } else {
        $_SESSION['status_text'] = "Old Password is Wrong";
        $_SESSION['status_title'] = "Warning";
        $_SESSION['status_code'] = "warning";
    }
} ?>
?>

<body>
    <div id="layout-wrapper">


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
                        <div class="col-3">

                        </div>
                        <div class=" col-xl-6 col-6 col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Update Password</h4>
                                    <!--  -->
                                </div>
                                <div class="card-body">
                                    <form action="" method="POST">
                                        <div class="row mb-4">
                                            <label for="horizontal-email-input" class="col-sm-3 col-form-label">Old Password</label>
                                            <div class="col-sm-9">
                                                <input required type="password" name="old_password" class="form-control" id="horizontal-email-input" />
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <label for="horizontal-email-input" class="col-sm-3 col-form-label">New Password</label>
                                            <div class="col-sm-9">
                                                <input required type="password" name="new_password" class="form-control" id="horizontal-email-input" />
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <label for="horizontal-password-input" class="col-sm-3 col-form-label">Confirm Password</label>
                                            <div class="col-sm-9">
                                                <input required type="password" name="confirm_password" class="form-control" id="horizontal-password-input" />
                                            </div>
                                        </div>

                                        <div class="row ">
                                            <div class="col-3">

                                            </div>
                                            <div class="col-6">


                                                <div>
                                                    <button name="updatepass" type="submit" class="btn btn-primary  w-md">
                                                        Update Password
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- end card body -->
                            </div>
                            <!-- end card -->
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