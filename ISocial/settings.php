<!doctype html>
<html lang="en">

<?php

include('include/connection.php');
include('include/scripts.php');

include('include/header.php');
if (isset($_POST['Update'])) {
    $newpassword = $_POST['newpassword'];
    $confirmpassword = $_POST['confirmpassword'];
    $oldpassword = $_POST['oldpassword'];
    $opass = md5($oldpassword);
    $sql = "select * from users where email = '$_SESSION[email]' AND password='$opass'";
    $query = mysqli_query($conn, $sql);
    if (mysqli_num_rows($query) > 0) {

        if ($newpassword != $confirmpassword) {

            $_SESSION['status_text'] = "New Password & Confirm Password Does'nt Matched";
            $_SESSION['status_title'] = "Password Does'nt Updated";
            $_SESSION['status_code'] = "error";
        } else {

            $pass = md5($newpassword);
            $sqll = "UPDATE users SET password='$pass' where email = '$_SESSION[email]'";

            $queryl = mysqli_query($conn, $sqll);
            if ($queryl) {

                $_SESSION['status_text'] = "Password Updated";
                $_SESSION['status_title'] = "Password Updated";
                $_SESSION['status_code'] = "success";
            } else {
                echo 'password not updated';
                // $_SESSION['status_text']="Otp Not Matched";
                // $_SESSION['status_title']="Error";
                // $_SESSION['status_code']="error";
                // header("location:../verify-otp.php");
            }
        }
    } else {
        $_SESSION['status_text'] = "error";
        $_SESSION['status_title'] = "Old Password Not Matched";
        $_SESSION['status_code'] = "error";
    }
}
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
                                                <input required type="password" name="oldpassword" class="form-control" id="horizontal-email-input" />
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <label for="horizontal-email-input" class="col-sm-3 col-form-label">New Password</label>
                                            <div class="col-sm-9">
                                                <input required type="password" name="newpassword" class="form-control" id="horizontal-email-input" />
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <label for="horizontal-password-input" class="col-sm-3 col-form-label">Confirm Password</label>
                                            <div class="col-sm-9">
                                                <input required type="password" name="confirmpassword" class="form-control" id="horizontal-password-input" />
                                            </div>
                                        </div>

                                        <div class="row ">
                                            <div class="col-3">

                                            </div>
                                            <div class="col-6">


                                                <div>
                                                    <button name="Update" type="submit" class="btn btn-primary  w-md">
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