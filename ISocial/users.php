<!doctype html>
<html lang="en">
<?php include('include/scripts.php'); ?>

<body>
    <div id="layout-wrapper">
        <?php include('include/header.php'); ?>

        <?php include('include/connection.php'); ?>
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
                                    <div class="row mb-2">
                                        <div class=" col-xl-3 col-md-12">
                                            <div class="pb-3 pb-xl-0 mt-5">
                                                <h5>All Users</h5>
                                            </div>
                                        </div>
                                        <div class=" col-xl-3 col-md-12">
                                            <div class="pb-3 pb-xl-0">
                                                <form class="email-search">
                                                    <div class="position-relative mt-5">
                                                        <input class="form-control ps-5" type="text" id="myInput" onkeyup="myFunction()" placeholder="Search Users">
                                                        <span class="bx bx-search font-size-18"></span>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="table-responsive">
                                    <table id="myTable" class="table table-striped table-centered align-middle table-nowrap mb-0 table-check">
                                        <thead>
                                            <tr>


                                                <th style="width: 190px;">User Name</th>
                                                <th>Email</th>
                                                <th>Image </th>
                                                <th>Device</th>
                                                <th>Date Of Joinning</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php
                                            $sql1 = "SELECT * FROM users  ";
                                            $result1 = mysqli_query($conn, $sql1);
                                            while ($row = mysqli_fetch_assoc($result1)) {
                                                $id = $row['id'];
                                                $profile_image = $row['profile_image'];
                                            ?>
                                                <tr>
                                                    <td> <?php echo $row['first_name'] . '' . $row['last_name']; ?></td>
                                                    <td> <?php echo $row['email']; ?></td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <?php if ($profile_image == '') {

                                                                echo '<div class="icon-badge rounded-circle text-center fs-5 bg-info text-white" style="height:100px; width:100px;">' .
                                                                    "No Image Uploded" . '</div>';
                                                            } else {
                                                                echo '
<img style="height:100px; width:100px;" class="rounded-circle avatar-sm" src="api/' . $profile_image . '"
alt="Header Avatar">';
                                                            } ?>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="badge badge-soft-success font-size-12"> <?php echo $row['active_watch']; ?></div>
                                                    </td>
                                                    <td> <?php echo $row['created_at']; ?></td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <a class="text-muted dropdown-toggle font-size-18" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                                <i class="mdi mdi-dots-horizontal"></i>
                                                            </a>

                                                            <div class="dropdown-menu dropdown-menu-end">

                                                                <a href="usersview.php?id=<?php echo $id; ?>" class="dropdown-item">view</a>

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