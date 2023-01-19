<!doctype html>
<html lang="en">
<?php include('include/scripts.php'); ?>

<body>
    <div id="layout-wrapper">
        <?php include('include/header.php'); ?>
        <?php include('include/functions.php'); ?>

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

                        <div class="col-xxl-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex flex-wrap align-items-center mb-3">
                                        <h5 class="card-title me-2">Reported Groups</h5>

                                    </div>

                                    <div class="mx-n4 px-4" data-simplebar>
                                        <div class="table-responsive">
                                            <table class="table table-striped table-centered align-middle table-nowrap mb-0 table-check">
                                                <thead>
                                                    <tr>


                                                        <th style="width: 190px;">Group Name</th>
                                                        <th>Image </th>
                                                        <th>Admin</th>
                                                        <th>Reported Date</th>
                                                        <th>Reported By</th>
                                                        <th>Comments</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $sql = "SELECT *
                                                          FROM user_groups
                                                          INNER JOIN report_group ON user_groups.id = report_group.report_group;";
                                                    $query1 = mysqli_query($conn, $sql);
                                                    while ($row = mysqli_fetch_assoc($query1)) {
                                                        $user_id = $row['created_by_user_id'];
                                                    ?>

                                                        <tr>

                                                            <td><?php echo $row['name']; ?></td>

                                                            <td style="width: 190px;">
                                                                <div class="d-flex align-items-center">
                                                                    <?php if ($row['image'] == '') {

                                                                        echo '<div class="" style="height:100px; width:100px;">' .
                                                                            "No Image Uploded" . '</div>';
                                                                    } else {
                                                                        echo '
<img style="height:100px; width:100px;" class="rounded-circle avatar-sm" src="api/' . $row['image'] . '"
alt="Header Avatar">';
                                                                    } ?>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="badge badge-soft-success font-size-12"> <?php echo getname($user_id); ?></div>
                                                            </td>
                                                            <td>
                                                                <?php echo $row['created_date']; ?>
                                                            </td>

                                                            <td>
                                                                <?php $user_id = $row['reported_by'];
                                                                echo getname($user_id); ?>
                                                            </td>
                                                            <td> <?php echo $row['comments']; ?>
                                                            <td>
                                                                <div class="dropdown">
                                                                    <a class="text-muted dropdown-toggle font-size-18" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                                        <i class="mdi mdi-dots-horizontal"></i>
                                                                    </a>

                                                                    <div class="dropdown-menu dropdown-menu-end">

                                                                        <a href="reportedgroupview.php?id=<?php echo $row['report_group']; ?>" class="dropdown-item">view</a>

                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>

                                                    <?php } ?>
                                                </tbody>
                                            </table>
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