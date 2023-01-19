<!doctype html>
<html lang="en">
<?php include('include/scripts.php'); ?>

<body>
    <div id="layout-wrapper">
        <?php include('include/header.php');
        if (isset($_POST['update'])) {
            $id = $_POST['id'];
            $file_name = $_FILES['image']['name'];
            $sql = "Select profile_image from users where id='$id'";
            $query = mysqli_query($conn, $sql);
            if ($query) {
                if (mysqli_num_rows($query)) {
                    while ($row = mysqli_fetch_assoc($query)) {
                        $imageold = $row['profile_image'];
                    }
                }
            }




            $sqll = "UPDATE users SET profile_image='$file_name' where id = '$id'";

            $queryl = mysqli_query($conn, $sqll);

            if ($_FILES['image']['name'] != '') {
                move_uploaded_file($_FILES["image"]["tmp_name"], "api/assets/" . $_FILES['image']['name']);
                if ($queryl) {

                    $_SESSION['status_text'] = "Profile Image Updated.";
                    $_SESSION['status_title'] = "Success";
                    $_SESSION['status_code'] = "success";
                }
            } else {
                $_SESSION['status_text'] = "Image Empty";
                $_SESSION['status_title'] = "Error";
                $_SESSION['status_code'] = "error";
            }
        }
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

                                            <?php
                                            $sql = "Select profile_image from users where id='$id'";
                                            $query = mysqli_query($conn, $sql);
                                            if ($query) {
                                                if (mysqli_num_rows($query)) {
                                                    while ($row = mysqli_fetch_assoc($query)) {
                                                        $profile_image1 = $row['profile_image'];
                                                    }
                                                }
                                            }
                                            if ($profile_image1 == '') {

                                                echo '<div class="icon-badge rounded-circle text-center fs-5 bg-info text-white" style="height:100px; width:100px;">' . strtoupper(substr($first_name, 0, 1)) . '</div>';
                                            } else {
                                                echo '
<img style="height:100px; width:100px;" class="rounded-circle header-profile-user p-3" src="api/assets/' . $profile_image1 . '"
alt="Header Avatar">';
                                            } ?>
                                            <div class="mt-3">
                                                <h5 class="mb-1"><?php echo $first_name . '  ' . $last_name; ?></h5>

                                            </div>
                                            <div class="row">
                                                <div class="offset-md-8 col-md-6 ">
                                                    <div class="text-right">
                                                        <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">Update Image</button>
                                                    </div>
                                                </div>
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
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog  modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Profile Image Update</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="" method="POST" enctype="multipart/form-data">
                                        <input type="hidden" value="<?php echo $id; ?>" name="id" />
                                        <div class="col-12 mt-2">
                                            <label for="inputChooseImage" class="form-label">Profile Image</label>
                                            <div class="ms-auto position-relative">
                                                <div class="position-absolute top-50 translate-middle-y search-icon px-3">
                                                    <i class="bx bx-images"></i>
                                                </div>
                                                <input required name="image" type="file" id="imgInp" class="form-control radius-30 ps-5">

                                            </div>
                                            <div class="col-12 mt-2 text-center">
                                                <img id="blah" src="" class="rounded shadow mb-4" style="width:100px;" />
                                            </div>
                                        </div>



                                        <div class="modal-footer">

                                            <button type="submit" name="update" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>





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


        <script>
            imgInp.onchange = evt => {
                const [file] = imgInp.files
                if (file) {
                    blah.src = URL.createObjectURL(file)
                }
            }
        </script>

        </scripts>
</body>


</html>