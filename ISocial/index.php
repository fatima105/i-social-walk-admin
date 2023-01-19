<!doctype html>
<html lang="en">
<?php include('include/scripts.php'); ?>
<?php

include('include/connection.php'); ?>

<?php
$sql = "SELECT * from users";
$QUERYA1 = mysqli_query($conn, $sql);
$QUERYA11 = mysqli_num_rows($QUERYA1);

///challenges
$sql = "SELECT * from challenges";
$QUERYA2 = mysqli_query($conn, $sql);
$QUERYA22 = mysqli_num_rows($QUERYA2);
//frnds
$sql = "SELECT * from friend_list where status='friends'";
$QUERYFrnds = mysqli_query($conn, $sql);
$QUERYFrnds12 = mysqli_num_rows($QUERYFrnds);
$sql = "SELECT * from user_groups";
$QUERYA3 = mysqli_query($conn, $sql);
$QUERYA33 = mysqli_num_rows($QUERYA3);
$rating_data = array(

    array('Users', $QUERYA11),
    array('Challenges', $QUERYA22),
    array('Groups', $QUERYA33)

);
$encoded_data = json_encode($rating_data);
///challenges
$sql = "SELECT * from challenges";
$QUERYA2 = mysqli_query($conn, $sql);
$QUERYA22 = mysqli_num_rows($QUERYA2);
//frnds
$sql = "SELECT * from friend_list where status='friends'";
$QUERYFrnds = mysqli_query($conn, $sql);
$QUERYFrnds12 = mysqli_num_rows($QUERYFrnds);
$sql = "SELECT * from user_groups";
$QUERYA3 = mysqli_query($conn, $sql);
$QUERYA33 = mysqli_num_rows($QUERYA3);
//private groups
$sql = "SELECT * from user_groups where group_privacy='private'";
$privategroup = mysqli_query($conn, $sql);
$privategroup1 = mysqli_num_rows($privategroup);
//public groups
$sql = "SELECT * from user_groups where group_privacy='public'";

$publicgroup = mysqli_query($conn, $sql);
$publicgroup1 = mysqli_num_rows($publicgroup);
//Group Challenge
$sql = "SELECT * from challenges where challenge_type='group'";
$groupchallenge = mysqli_query($conn, $sql);
$groupchallenge1 = mysqli_num_rows($groupchallenge);
//Indiviual Challenge
$sql = "SELECT * from challenges where challenge_type='indiviual'";
$indiviualchallenge = mysqli_query($conn, $sql);
$indiviualchallenge1 = mysqli_num_rows($indiviualchallenge);
?>





<body>
    <div id="layout-wrapper">
        <?php include('include/header.php'); ?>


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
                        <div class="col-xl-3 col-md-6 col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div>
                                        <div class="d-flex align-items-center">
                                            <div class="avatar">
                                                <div class="avatar-title rounded bg-soft-primary">
                                                    <i class="bx bx-user font-size-24 mb-0 text-primary"></i>
                                                </div>
                                            </div>

                                            <div class="flex-grow-1 ms-3">
                                                <h6 class="mb-0 font-size-15">Total Users</h6>
                                            </div>
                                            <div>
                                                <h4 class="mt-4 pt-1 mb-0 font-size-22">
                                                    <?php
                                                    $sql = "SELECT * FROM users";
                                                    $result = mysqli_query($conn, $sql);
                                                    $users = mysqli_num_rows($result); ?>

                                                    <span class="text-secondary fw-medium  display-6 align-middle fw-bolder">
                                                        <?php echo    $users ?>
                                                    </span>
                                                </h4>

                                            </div>


                                        </div>

                                        <div>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6 col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div>
                                        <div class="d-flex align-items-center">
                                            <div class="avatar">
                                                <div class="avatar-title rounded bg-soft-primary">
                                                    <i class="bx bx-check-shield font-size-24 mb-0 text-primary"></i>
                                                </div>
                                            </div>

                                            <div class="flex-grow-1 ms-3">
                                                <h6 class="mb-0 font-size-15">Total Challenges</h6>
                                            </div>
                                            <div>
                                                <h4 class="mt-4 pt-1 mb-0 font-size-22">
                                                    <?php
                                                    $sql = "SELECT * FROM challenges";
                                                    $result = mysqli_query($conn, $sql);
                                                    $challenges = mysqli_num_rows($result); ?>

                                                    <span class="text-secondary fw-medium display-6 align-middle fw-bolder">
                                                        <?php echo    $challenges ?>
                                                    </span>
                                                </h4>
                                            </div>

                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="col-xl-3 col-md-6 col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div>
                                        <div class="d-flex align-items-center">
                                            <div class="avatar">
                                                <div class="avatar-title rounded bg-soft-primary">
                                                    <i class="bx bx-group font-size-24 mb-0 text-primary"></i>

                                                </div>
                                            </div>

                                            <div class="flex-grow-1 ms-3">
                                                <h6 class="mb-0 font-size-15">Total Groups</h6>
                                            </div>
                                            <div>
                                                <h4 class="mt-4 pt-1 mb-0 font-size-22">
                                                    <?php
                                                    $sql = "SELECT * FROM user_groups";
                                                    $result = mysqli_query($conn, $sql);
                                                    $challenges = mysqli_num_rows($result); ?>

                                                    <span class="text-secondary fw-medium display-6 align-middle fw-bolder">
                                                        <?php echo    $challenges ?>
                                                    </span>
                                                </h4>

                                            </div>

                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div>
                                        <div class="d-flex align-items-center">
                                            <div class="avatar">
                                                <div class="avatar-title rounded bg-soft-primary">
                                                    <i class="bx bx-body font-size-24 mb-0 text-primary"></i>

                                                </div>
                                            </div>

                                            <div class="flex-grow-1 ms-3">
                                                <h6 class="mb-0 font-size-15">Total Friends</h6>
                                            </div>
                                            <div>
                                                <h4 class="mt-4 pt-1 mb-0 font-size-22">
                                                    <?php
                                                    $sql = "SELECT * FROM friend_list where status='friends'";
                                                    $result = mysqli_query($conn, $sql);
                                                    $friends = mysqli_num_rows($result); ?>

                                                    <span class="text-secondary fw-medium display-6 align-middle fw-bolder">
                                                        <?php echo    $friends; ?>
                                                    </span>
                                                </h4>

                                            </div>

                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-xxl-6">
                            <div class="card">
                                <div class="card-body">
                                    <canvas id="myChart" style="width:100%;max-width:900px; height:400px;"></canvas>

                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-6">
                            <div class="card">
                                <div class="card-body">
                                    <div id="myplot" style="width:100%; max-width:600px; height:400px;">
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>

    <script>
        google.charts.load('current', {
            'packages': ['corechart']
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Groups', 'Mhl'],
                ['Challenges', <?php echo $challenges; ?>],
                ['Public Groups', <?php echo $publicgroup1; ?>],
                ['Private Groups', <?php echo $privategroup1; ?>],
                ['Indiviual Challenge', <?php echo $indiviualchallenge1; ?>],
                ['Group Challenges', <?php echo $groupchallenge1; ?>]
            ]);

            var options = {
                title: 'Overview Of Challenges & Groups',
                is3D: true
            };

            var chart = new google.visualization.PieChart(document.getElementById('myplot'));
            chart.draw(data, options);
        }
    </script>

    <script>
        var xValues = ["Groups", "Challenges", "Friends", "Users"];
        var yValues = [<?php echo $QUERYA33 ?>, <?php echo $QUERYA22 ?>, <?php echo $QUERYFrnds12 ?>, <?php echo $QUERYA11 ?>];
        var barColors = [
            "#b91d47",
            "#00aba9",
            "#2b5797",
            "#e8c3b9",
            "#1e7145"
        ];

        new Chart("myChart", {
            type: "doughnut",
            data: {
                labels: xValues,
                datasets: [{
                    backgroundColor: barColors,
                    data: yValues
                }]
            },
            options: {
                title: {
                    display: true,
                    text: "I Social Walk Overview"
                }
            }
        });
    </script>

    <script src="https://canvasjs.com/assets/script/canvasjs.min.js">
    </script>
    <?php include('include/footerscripts.php'); ?>
</body>


</html>