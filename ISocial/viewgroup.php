<!doctype html>
<html lang="en">
<?php include('include/scripts.php'); ?>
<?php include('include/connection.php');
include('include/functions.php'); ?>

<body>
    <?php include('include/header.php'); ?>
    <div id="layout-wrapper">
        <?php
        $group_id = $_GET['group_id']; ?>

        <?php
        $sql1 = "SELECT * FROM user_groups where id='$group_id' ";
        $result1 = mysqli_query($conn, $sql1);
        while ($row = mysqli_fetch_assoc($result1)) {
            $name = $row['name'];
            $image = $row['image'];
            $group_privacy = $row['group_privacy'];
            $created_by_user_id = $row['created_by_user_id'];
        }
        ?>
        <?php
        $sql1 = "SELECT * FROM users where id='$created_by_user_id' ";
        $result1 = mysqli_query($conn, $sql1);
        while ($row = mysqli_fetch_assoc($result1)) {
            $first_name = $row['first_name'];
            $last_name = $row['last_name'];
            $email = $row['email'];
            $status = $row['status'];
            $phone_no = $row['phoneno'];
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
                        <div class="offset-md-3 col-xl-6 col-12 col-md-6">
                            <div class="card">
                                <div class="card-body">

                                    <div class="">
                                        <div class="row mb-2">
                                            <div class="col-xl-12 col-md-112 col-12">
                                                <div class="pb-3 pb-xl-0">

                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h3 class="card-title mb-0 text-center">Group Profile</h4>
                                                        </div>
                                                        <div class="card-body">

                                                            <div class="row mb-2">
                                                                <div class="col-md-12">
                                                                    <div class="mb-3 text-center">
                                                                        <?php if ($image == '') {

                                                                            echo '<div class=" text-center  text-dark" style="height:100px; width:100px;">' .
                                                                                "No Image Uploded" . '</div>';
                                                                        } else {
                                                                            echo '
<img style="height:100px; width:100px;" class="rounded-circle avatar-sm" src="api/' . $image . '"
alt="Header Avatar">';
                                                                        } ?>
                                                                    </div>
                                                                </div>

                                                            </div>


                                                            <div class="row  mb-2">

                                                                <div class="col-md-6 text-center " style=" font-weight: bold;">Admin Name</div>
                                                                <div class="col-md-6 text-center">
                                                                    <?php echo $first_name . ' ' . $last_name; ?>
                                                                </div>


                                                            </div>
                                                            <div class="row  mb-2">

                                                                <div class="col-md-6 text-center " style=" font-weight: bold;">Group Name</div>
                                                                <div class="col-md-6 text-center">
                                                                    <?php echo $name; ?>
                                                                </div>


                                                            </div>

                                                            <div class="row  mb-2">

                                                                <div class="col-md-6 text-center " style=" font-weight: bold;"> Admin Email</div>
                                                                <div class="col-md-6 text-center">
                                                                    <?php echo $email; ?>
                                                                </div>


                                                            </div>
                                                            <div class="row  mb-2">

                                                                <div class="col-md-6 text-center " style=" font-weight: bold;">Phone No</div>
                                                                <div class="col-md-6 text-center">
                                                                    <?php echo $phone_no; ?>
                                                                </div>


                                                            </div>


                                                            <div class="row  mb-2">

                                                                <div class="col-md-6 text-center" style=" font-weight: bold;"> Group Privacy</div>
                                                                <div class="col-md-6 text-center">
                                                                    <div class="badge badge-soft-success font-size-12"> <?php echo $group_privacy; ?></div>
                                                                </div>
                                                            </div>

                                                            <div class="row  mb-2">

                                                                <div class="col-md-6 text-center" style=" font-weight: bold;"> Status</div>
                                                                <div class="col-md-6 text-center">
                                                                    <div class="badge badge-soft-success font-size-12"> <?php echo $status; ?></div>
                                                                </div>
                                                            </div>
                                                            <div class="row  mb-2">

                                                                <div class="col-md-6 text-center " style=" font-weight: bold;"> Group Members</div>
                                                                <div class="col-md-6 text-center mb-3">


                                                                    <div class="avatar-group-item">
                                                                        <a data-bs-toggle="modal" data-bs-target=".bs-example-modal-center" href="javascript: void(0);" class="d-inline-block">
                                                                            <div class="avatar-sm">
                                                                                <span class="avatar-title rounded-circle bg-success text-white font-size-16 text-center p-5" style="width:10px; height:10px;">
                                                                                    View Members
                                                                                </span>
                                                                            </div>


                                                                        </a>
                                                                    </div>
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



                    </div>
                </div>
            </div>
        </div>





        <!-- end row -->

    </div>
    <!-- container-fluid -->
    </div>
    <!-- End Page-content -->

    <div class="modal fade bs-example-modal-center" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-center">Group Members</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <?php
                    $sql = "Select * from group_member WHERE group_id='$group_id' AND status='membered' ";

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
                    } else {
                        echo "no members found";
                    } ?>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->


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