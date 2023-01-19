<!doctype html>
<html lang="en">
<?php include('include/scripts.php'); ?>
<?php include('include/connection.php'); ?>
<?php include('include/functions.php'); ?>

<body>

    <!-- <body data-layout="horizontal"> -->

    <!-- Begin page -->
    <div id="layout-wrapper">
        <?php include('include/header.php'); ?>



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
                <div id="sidebar-menu">
                    <!-- Left Menu Start -->
                    <?php include('include/sidebar.php'); ?>

                </div>
                <!-- Sidebar -->
            </div>
        </div>
        <!-- Left Sidebar End -->

        <?php include('include/header.php'); ?>
        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">

                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-12">
                            <div class="card">
                                <div class="card-body">

                                    <div class="row mb-2 ">
                                        <div class=" col-xl-3 col-md-12">
                                            <div class="pb-3 pb-xl-0 mt-5">
                                                <h5>All Challenges</h5>
                                            </div>
                                        </div>
                                        <div class=" col-offset-3 col-xl-6 col-md-12">
                                            <div class="pb-3 pb-xl-0">
                                                <form class="email-search">
                                                    <div class="position-relative mt-5">
                                                        <input class="border border-dark form-control ps-5 border-1 border-rounded form-control ps-5" type="text" id="myInput" onkeyup="myFunction()" placeholder="Search Challenges">
                                                        <span class="bx bx-search font-size-18"></span>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="table-responsive">
                                        <table id="myTable" class="table table-striped table-centered align-middle table-nowrap mb-0 table-check">
                                            <thead>
                                                <tr>


                                                    <th style="width: 190px;"> Name</th>
                                                    <th>Admin Name </th>
                                                    <th>Image </th>
                                                    <th> Challenge Type</th>
                                                    <th> Challenge Visibility</th>
                                                    <th>Start Date -End Date</th>
                                                    <th>Action</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $sql1 = "SELECT * FROM challenges ";
                                                $result1 = mysqli_query($conn, $sql1);
                                                while ($row = mysqli_fetch_assoc($result1)) {
                                                    $challenge_id = $row['id'];
                                                    $user_id = $row['created_by_user_id']; ?>
                                                    <tr>

                                                        <td><?php echo $row['name']; ?></td>
                                                        <td><?php echo getname($user_id); ?></td>
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
                                                            <div class="badge badge-soft-danger font-size-12"> <?php echo $row['challenge_type']; ?></div>
                                                        </td>
                                                        <td>
                                                            <div class="badge badge-soft-danger font-size-12"> <?php echo $row['challenge_visibility']; ?></div>
                                                        </td>
                                                        <td>

                                                            <?php echo $row['start_date'] . ' -' . $row['end_date'] ?>
                                                        </td>


                                                        <td>
                                                            <div class="dropdown">
                                                                <a class="text-muted dropdown-toggle font-size-18" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                                    <i class="mdi mdi-dots-horizontal"></i>
                                                                </a>

                                                                <div class="dropdown-menu dropdown-menu-end">

                                                                    <a class="dropdown-item" href="challengesview.php?challenge_id=<?php echo $challenge_id; ?>">view</a>

                                                                </div>
                                                            </div>
                                                        </td>

                                                    <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                            </div>
                        </div>


                    </div>

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
    <script>
        function myFunction() {

            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("myTable");
            tr = table.getElementsByTagName("tr");
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[0];
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";

                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }
    </script>
</body>


</html>