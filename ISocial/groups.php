<!doctype html>
<html lang="en">
<?php include('include/scripts.php');
include('include/connection.php'); ?>
<!-- <?php include('include/functions.php'); ?> -->

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
        <!-- Left Menu Start -->
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

                                    <div class="">
                                        <div class="row mb-2">
                                            <div class=" col-xl-3 col-md-12">
                                                <div class="pb-3 pb-xl-0 mt-5">
                                                    <h5>All Groups</h5>
                                                </div>
                                            </div>
                                            <div class=" col-xl-3 col-md-12">
                                                <div class="pb-3 pb-xl-0">
                                                    <form class="email-search">
                                                        <div class="position-relative mt-5">
                                                            <input class="border border-dark form-control ps-5 border-1 border-rounded" type="text" id="myInput" onkeyup="myFunction()" placeholder="Search Groups">
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


                                                    <th style="width: 190px;"> Name</th>
                                                    <th>Admin Name </th>
                                                    <th>Profile Image </th>

                                                    <th> Privacy</th>
                                                    <th>Created at</th>

                                                    <th>Action</th>

                                                </tr>
                                            </thead>
                                            <tbody>

                                                <?php
                                                $sql1 = "SELECT * FROM user_groups  ";
                                                $result1 = mysqli_query($conn, $sql1);
                                                while ($row = mysqli_fetch_assoc($result1)) {
                                                    $groupid = $row['id'];
                                                    $image = $row['image'];
                                                    $user_id = $row['created_by_user_id']; ?>
                                                    <tr>

                                                        <td><?php echo $row['name']; ?></td>
                                                        <td><?php echo getname($user_id); ?></td>
                                                        <td style="width: 190px;">
                                                            <div class="d-flex align-items-center">
                                                                <?php if ($image == '') {

                                                                    echo '<div class=" text-dark fs-5" style="height:100px; width:100px;">' .
                                                                        "No image found" . '</div>';
                                                                } else {
                                                                    echo '
<img style="height:100px; width:100px;" class="rounded-circle avatar-sm" src="api/' . $image . '"
alt="Header Avatar">';
                                                                } ?>
                                                            </div>
                                                        </td>


                                                        <td>
                                                            <div class="badge badge-soft-danger font-size-12"> <?php echo $row['group_privacy']; ?></div>
                                                        </td>
                                                        <td>
                                                            <?php echo $row['created_at']; ?>
                                                        </td>


                                                        <td>
                                                            <div class="dropdown">
                                                                <a class="text-muted dropdown-toggle font-size-18" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                                    <i class="mdi mdi-dots-horizontal"></i>
                                                                </a>

                                                                <div class="dropdown-menu dropdown-menu-end">

                                                                    <a class="dropdown-item" href="viewgroup.php?group_id=<?php echo $groupid; ?>">view</a>

                                                                </div>
                                                            </div>
                                                        </td>

                                                    <?php }
                                                    ?>

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





</body>
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

</html>