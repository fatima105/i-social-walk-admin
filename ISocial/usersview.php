<!doctype html>
<html lang="en">
<?php include('include/scripts.php'); ?>

<?php include('include/connection.php'); ?>

<body>
    <div id="layout-wrapper">
        <?php include('include/header.php'); ?>
        <?php $userid = $_GET['id'];
        $sql = "SELECT * FROM users where id='$userid'";
        $query = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($query)) {
            $first_name = $row['first_name'];
            $last_name = $row['last_name'];
            $email = $row['email'];
            $phoneno = $row['phoneno'];
            $device_token = $row['device_token'];
            $active_watch = $row['active_watch'];
        } ?>

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
                                                            <h3 class="card-title mb-0 text-center">User Profile </h4>
                                                        </div>
                                                        <div class="card-body">

                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="mb-3 text-center">
                                                                        <img class="rounded-circle avatar-sm" src="assets/images/users/avatar-6.jpg" alt="">

                                                                    </div>
                                                                </div>

                                                            </div>


                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="mb-3" style="display:flex;">
                                                                        <div class="col-md-6 text-center text-bold">User Name</div>
                                                                        <div class="col-md-6 text-start">
                                                                            <?php echo $first_name . ' ' . $last_name; ?>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="mb-3" style="display:flex;">
                                                                        <div class="col-md-6 text-center text-bold"> Email</div>
                                                                        <div class="col-md-6 text-start">
                                                                            <?php echo $email; ?>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="mb-3" style="display:flex;">
                                                                        <div class="col-md-6 text-center text-bold">Phone No</div>
                                                                        <div class="col-md-6 text-start">
                                                                            <?php echo $phoneno; ?>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="mb-3" style="display:flex;">
                                                                        <div class="col-md-6 text-center text-bold">Device Token</div>
                                                                        <div class="col-md-6 text-start">
                                                                            <?php echo $device_token; ?>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="mb-3" style="display:flex;">
                                                                        <div class="col-md-6 text-center text-bold"> Device Connected</div>
                                                                        <div class="col-md-6 text-start">
                                                                            <div class="badge badge-soft-success font-size-12 p-4 "> <?php echo $active_watch; ?></div>
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

                    <div class="row">
                        <div class="col-xl-12 col-12 col-md-12">
                            <div class="card">
                                <div class="card-body">

                                    <div class="">
                                        <div class="row mb-2">
                                            <div class="col-xl-4 col-12">
                                                <div class="pb-3 pb-xl-0">
                                                    <h2 class="text-sm">User Groups</h2>
                                                </div>
                                            </div>
                                            <div class="col-xl-8 col-12">
                                                <div class="text-right pb-3 pb-xl-0">
                                                    <form class="email-search">
                                                        <div class="position-relative">
                                                            <input type="text" class="form-control bg-light" placeholder="Search...">
                                                            <span class="bx bx-search font-size-18"></span>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="table-responsive">
                                        <table class="table table-striped table-centered align-middle table-nowrap mb-0 table-check">
                                            <thead>
                                                <tr>
                                                    <th style="width: 190px;"> Name</th>

                                                    <th>Image </th>
                                                    <th>Privacy</th>
                                                    <th>Created at</th>
                                                    <th>Group_visibility</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $sql = "SELECT *
                                                FROM groups
                                                INNER JOIN group_member ON  groups.id = group_member.group_id where user_id='$userid';";
                                                $query = mysqli_query($conn, $sql);
                                                if (mysqli_num_rows($query) > 0) {
                                                    while ($row = mysqli_fetch_assoc($query)) { ?>
                                                        <?php $row['group_id']; ?>
                                                        <tr>

                                                            <td> <?php echo $row['name']; ?>
                                                            <td style="width: 190px;">
                                                                <div class="d-flex align-items-center">
                                                                    <img class="rounded-circle avatar-sm" src="assets/images/users/avatar-6.jpg" alt="">
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="badge badge-soft-success font-size-12">
                                                                    <?php echo $row['group_privacy']; ?> </div>
                                                            </td>
                                                            <td>
                                                                <div class="badge badge-soft-danger font-size-12">
                                                                    <?php echo $row['created_at']; ?> </div>
                                                            </td>
                                                            <td>
                                                                <div class="badge badge-soft-danger font-size-12">
                                                                    <?php echo $row['group_visibility']; ?> </div>
                                                            </td>
                                                            <td>
                                                                <div class="dropdown">
                                                                    <a class="text-muted dropdown-toggle font-size-18" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                                        <i class="mdi mdi-dots-horizontal"></i>
                                                                    </a>

                                                                    <div class="dropdown-menu dropdown-menu-end">

                                                                        <a href="viewgroup.php?group_id=<?php echo $row['group_id'];  ?>" class="dropdown-item">view</a>

                                                                    </div>
                                                                </div>
                                                            </td>

                                                        </tr>
                                                    <?php  }
                                                } else { ?>
                                                    <tr> <?php echo "no record found"; ?></tr>
                                                <?php   } ?>
                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-6 col-md-6">
                            <div class="card">
                                <div class="card-header ">
                                    <h5 class=" card-title mb-0">Average Daily Summary</h5>
                                </div>
                                <div class="card-body pt-0 pb-3">
                                    <div id="overview-chart" data-colors='["#1f58c7"]' class="apex-charts" dir="ltr"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex align-items-start">
                                        <div class="flex-grow-1 overflow-hidden">
                                            <h5 class="card-title mb-4 text-truncate">Top Selling Categories</h5>
                                        </div>

                                    </div>

                                    <div id="saleing-categories" data-colors='["#1f58c7", "#4976cf","#6a92e1", "#e6ecf9"]' class="apex-charts" dir="ltr"></div>

                                    <div class="row mt-3 pt-1">
                                        <div class="col-md-6">
                                            <div class="px-2 mt-2">
                                                <div class="d-flex align-items-center mt-sm-0 mt-2">
                                                    <i class="mdi mdi-circle font-size-10 text-primary"></i>
                                                    <div class="flex-grow-1 ms-2 overflow-hidden">
                                                        <p class="font-size-15 mb-1 text-truncate">Week 1</p>
                                                    </div>
                                                    <div class="flex-shrink-0 ms-2">
                                                        <span class="fw-bold">34.3%</span>
                                                    </div>
                                                </div>

                                                <div class="d-flex align-items-center mt-2">
                                                    <i class="mdi mdi-circle font-size-10 text-success"></i>
                                                    <div class="flex-grow-1 ms-2 overflow-hidden">
                                                        <p class="font-size-15 mb-0 text-truncate">Week 2</p>
                                                    </div>
                                                    <div class="flex-shrink-0 ms-2">
                                                        <span class="fw-bold">25.7%</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="px-2 mt-2">
                                                <div class="d-flex align-items-center mt-sm-0 mt-2">
                                                    <i class="mdi mdi-circle font-size-10 text-info"></i>
                                                    <div class="flex-grow-1 ms-2 overflow-hidden">
                                                        <p class="font-size-15 mb-1 text-truncate">Week 3</p>
                                                    </div>
                                                    <div class="flex-shrink-0 ms-2">
                                                        <span class="fw-bold">18.6%</span>
                                                    </div>
                                                </div>

                                                <div class="d-flex align-items-center mt-2">
                                                    <i class="mdi mdi-circle font-size-10 text-secondary"></i>
                                                    <div class="flex-grow-1 ms-2 overflow-hidden">
                                                        <p class="font-size-15 mb-0 text-truncate">Week 4</p>
                                                    </div>
                                                    <div class="flex-shrink-0 ms-2">
                                                        <span class="fw-bold">21.4%</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row">

                        <div class="col-xl-6 col-12 col-md-6">
                            <div class="card">
                                <div class="card-body">

                                    <div class="">
                                        <div class="row mb-2">
                                            <div class="col-xl-4 col-12">
                                                <div class="pb-3 pb-xl-0">
                                                    <h4 class="text-sm">User Activity</h4>
                                                </div>
                                            </div>
                                            <div class="col-xl-8 col-12">
                                                <div class="text-right pb-3 pb-xl-0">
                                                    <form class="email-search">
                                                        <div class="position-relative">
                                                            <input type="text" class="form-control bg-light" placeholder="Search...">
                                                            <span class="bx bx-search font-size-18"></span>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="table-responsive">
                                        <table class="table table-striped table-centered align-middle table-nowrap mb-0 table-check">
                                            <thead>
                                                <tr>
                                                    <th style="width: 190px;">Total Steps</th>

                                                    <th>Distance Covered </th>
                                                    <th>Time Taken </th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <?php
                                                $sql1 = "SELECT * FROM daily_steps_records where user_id='$userid'  ";
                                                $result1 = mysqli_query($conn, $sql1);
                                                while ($row = mysqli_fetch_assoc($result1)) {
                                                    $stepsid = $row['id'];
                                                ?>
                                                    <td> <?php echo $row['steps']; ?>
                                                    <td>
                                                        <?php echo $row['distancecovered']; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['time_taken']; ?>
                                                    </td>

                                                    <td>
                                                        <div class="dropdown">
                                                            <a class="text-muted dropdown-toggle font-size-18" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                                <i class="mdi mdi-dots-horizontal"></i>
                                                            </a>

                                                            <div class="dropdown-menu dropdown-menu-end">

                                                                <a href="useractivity.php?steps_id=<?php echo $stepsid;  ?>" class="dropdown-item">view</a>

                                                            </div>
                                                        </div>
                                                    </td>
                                                    </tr>
                                                <?php
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-12 col-md-6">
                            <div class="card">
                                <div class="card-body">

                                    <div class="">
                                        <div class="row mb-2">
                                            <div class="col-xl-4 col-12">
                                                <div class="pb-3 pb-xl-0">
                                                    <h4 class="text-sm">Challenges</h4>
                                                </div>
                                            </div>
                                            <div class="col-xl-8 col-12">
                                                <div class="text-right pb-3 pb-xl-0">
                                                    <form class="email-search">
                                                        <div class="position-relative">
                                                            <input type="text" class="form-control bg-light" placeholder="Search...">
                                                            <span class="bx bx-search font-size-18"></span>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="table-responsive">
                                        <table class="table table-striped table-centered align-middle table-nowrap mb-0 table-check">
                                            <thead>
                                                <tr>
                                                    <th style="width: 190px;">Name</th>

                                                    <th>Image </th>
                                                    <th>Challenge Type </th>
                                                    <th>Visibility </th>
                                                    <th>Action</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $sql = "SELECT *  FROM challenges INNER JOIN challenges_participants ON  challenges.id = challenges_participants.user_id where user_id='$userid'";
                                                $query = mysqli_query($conn, $sql);
                                                if (mysqli_num_rows($query) > 0) {
                                                    while ($row = mysqli_fetch_assoc($query)) { ?>

                                                        <?php $challenge_id = $row['challenge_id']; ?>
                                                        <tr>

                                                            <td> <?php echo $row['name']; ?>
                                                            <td style="width: 190px;">
                                                                <div class="d-flex align-items-center">
                                                                    <img class="rounded-circle avatar-sm" src="assets/images/users/avatar-6.jpg" alt="">
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="badge badge-soft-success font-size-12">
                                                                    <?php echo $row['challenge_type']; ?> </div>
                                                            </td>
                                                            <td>
                                                                <div class="badge badge-soft-danger font-size-12">
                                                                    <?php echo $row['challenge_visibility']; ?> </div>
                                                            </td>

                                                            <td>
                                                                <div class="dropdown">
                                                                    <a class="text-muted dropdown-toggle font-size-18" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                                        <i class="mdi mdi-dots-horizontal"></i>
                                                                    </a>

                                                                    <div class="dropdown-menu dropdown-menu-end">

                                                                        <a href="challengesview.php?challenge_id=<?php echo $challenge_id;  ?>" class="dropdown-item">view</a>

                                                                    </div>
                                                                </div>
                                                            </td>

                                                        </tr>
                                                    <?php
                                                    }
                                                } else {
                                                    ?><tr> <?php echo "no record found"; ?>

                                                    <?php  } ?>
                                            </tbody>
                                        </table>
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