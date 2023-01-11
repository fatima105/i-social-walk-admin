<!doctype html>
<html lang="en">

<?php

include('include/connection.php');
include('include/scripts.php');

include('include/header.php'); ?>

<body>

    <!--- Login  PHP-->

    <?php

    $sql = "Select * from users where id=$id";
    $query = mysqli_query($conn, $sql);
    if ($query) {
        while ($row = mysqli_fetch_assoc($query)) {
            $first_name = $row['first_name'];
            $last_name = $row['last_name'];
            $email = $row['email'];
            $active_watch = $row['active_watch'];
            $profile_image = $row['profile_image'];
            $phone_no = $row['phoneno'];
        }
    }

    if (isset($_POST['submit'])) {

        $phone_no = $_POST['phoneno'];

        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $sqll = "UPDATE users SET phoneno='$phone_no' ,first_name='$first_name',last_name='$last_name'where email = '$email'";

        $queryl = mysqli_query($conn, $sqll);
        if ($queryl) {

            $_SESSION['status_text'] = "Profile Updated.";
            $_SESSION['status_title'] = "Success";
            $_SESSION['status_code'] = "success";
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

                                    <div class="card-body p-4">
                                        <div class="text-center mt-2">
                                            <h5>Update Profile</h5>

                                        </div>
                                        <div class="p-2 mt-4">
                                            <form action="" method="POST">

                                                <div class="mb-3">
                                                    <label class="form-label" for="email">Email Address</label>
                                                    <div class="position-relative input-custom-icon">
                                                        <input type="text" value="<?php echo $email; ?>" readonly class=" form-control" id="email" name="email" placeholder="Enter email">
                                                        <span class="bx bx-user"></span>
                                                    </div>
                                                </div>

                                                <div class="mb-3">
                                                    <label class="form-label" for="email">First name</label>
                                                    <div class="position-relative input-custom-icon">
                                                        <input type="text" value="<?php echo $first_name; ?>" class=" form-control" id="email" name="first_name" placeholder="Enter First Name">
                                                        <span class="bx bx-user"></span>
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label" for="email">Last name</label>
                                                    <div class="position-relative input-custom-icon">
                                                        <input type="text" value="<?php echo $last_name; ?>" class=" form-control" id="email" name="last_name" placeholder="Enter Last Name">
                                                        <span class="bx bx-user"></span>
                                                    </div>
                                                </div>

                                                <div class="mb-3">

                                                    <label class="form-label" for="phoneno-input">Phone no</label>
                                                    <div class="position-relative auth-pass-inputgroup input-custom-icon">
                                                        <span class="fas fa-phone"></span>
                                                        <input name="phoneno" type="phoneno" class="form-control" required id="phoneno-input" value="<?php echo $phone_no; ?>" placeholder="Enter phoneno">

                                                    </div>
                                                </div>


                                                <div class="mt-3">
                                                    <button name="submit" class="btn btn-primary w-100 waves-effect waves-light" type="submit">Update</button>
                                                </div>



                                                <!-- <div class="mt-4 text-center">
                                            <p class="mb-0">Don't have an account ? <a href="auth-register.html" class="fw-medium text-primary"> Signup now </a> </p>
                                        </div> -->
                                            </form>
                                        </div>

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