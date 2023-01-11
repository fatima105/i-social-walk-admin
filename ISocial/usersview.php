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
            $profile_image = $row['profile_image'];
            $image = $row['image'];
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
                                                            <h3 class="card-title mb-0 text-center">User Profile </h3>
                                                        </div>
                                                        <div class="card-body">

                                                            <div class="row">
                                                                <div class="col-md-12 " style="align-items:center;display:flex;">
                                                                    <div class="mb-3 ">
                                                                        <?php if ($profile_image == '') {

                                                                            echo '<div class=" text-center text-dark fs-5" style="height:100px; width:100px;">' .
                                                                                "No Image Uploded" . '</div>';
                                                                        } else {
                                                                            echo '
<img style="height:100px; width:100px;" class="rounded-circle avatar-sm" src="api/' . $profile_image . '"
alt="Header Avatar">';
                                                                        } ?>
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
                                                    <h3 class="text-sm">User Groups</h3>
                                                </div>
                                            </div>
                                            <div class="col-xl-8 col-12">
                                                <div class="text-right pb-3 pb-xl-0">

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
                                                FROM user_groups
                                                INNER JOIN group_member ON  user_groups.id = group_member.group_id where user_id='$userid';";
                                                $query = mysqli_query($conn, $sql);
                                                if (mysqli_num_rows($query) > 0) {
                                                    while ($row = mysqli_fetch_assoc($query)) { ?>
                                                        <?php
                                                        $image = $row['image'];
                                                        $row['group_id']; ?>
                                                        <tr>
                                                            <td> <?php echo $row['name']; ?></td>
                                                            <td style="width: 190px;">
                                                                <div class="d-flex align-items-center">
                                                                    <?php if ($image == '') {

                                                                        echo '<div class="icon-badge rounded-circle text-center fs-5 bg-info text-white" style="height:100px; width:100px;">' .
                                                                            "No Image Uploded" . '</div>';
                                                                    } else {
                                                                        echo '
<img style="height:100px; width:100px;" class="rounded-circle avatar-sm" src="api/' . $image . '"
alt="Header Avatar">';
                                                                    } ?>
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
                        <div class="col-xl-12 col-12 col-md-12">
                            <div class="card">
                                <div class="card-header ">
                                    <h3 class=" card-title mb-0">Average Daily Summary</h3>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-striped table-centered align-middle table-nowrap mb-0 table-check">
                                        <thead>
                                            <tr>
                                                <th style="width: 190px;">Total Steps</th>
                                                <th>Calories Burnt</th>
                                                <th>Distance Covered </th>
                                                <th>Time Taken </th>
                                                <th>Average Speed</th>
                                                <th>Average Pace</th>
                                                <th>Date</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php
                                            $sql1 = "SELECT * FROM daily_steps_records where user_id='$userid' limit 7  ";
                                            $result1 = mysqli_query($conn, $sql1);
                                            while ($row = mysqli_fetch_assoc($result1)) {
                                                $stepsid = $row['id'];
                                            ?>
                                                <td> <?php echo $row['steps']; ?></td>
                                                <td> <?php echo $row['calories_burnt']; ?>
                                                <td>
                                                    <?php echo $row['distancecovered']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $row['time_taken']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $row['avg_speed']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $row['avg_pace']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $row['date']; ?>
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

                    <div class="row">

                        <div class="col-xl-6 col-12 col-md-6">
                            <div class="card">
                                <div class="card-body">

                                    <div class="">
                                        <div class="row mb-2">
                                            <div class="col-xl-4 col-12">
                                                <div class="pb-3 pb-xl-0">
                                                    <h3 class="text-sm">User Activity</h3>
                                                </div>
                                            </div>
                                            <div class="col-xl-8 col-12">
                                                <div class="text-right pb-3 pb-xl-0">

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
                                                    <h3 class="text-sm">Challenges</h3>
                                                </div>
                                            </div>
                                            <div class="col-xl-8 col-12">
                                                <div class="text-right pb-3 pb-xl-0">

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