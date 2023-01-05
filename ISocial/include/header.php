<?php
include('include/connection.php');
session_start();
if (isset($_SESSION['id'])) {
    $id = $_SESSION['id'];
} else {
    header("location:login.php");
}
?><header id="page-topbar" class="isvertical-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <?php $sql = "Select * from users where id='$id'";
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
            ?>

            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="index-2.html" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="assets/images/logo-dark-sm.png" alt="" height="26">
                    </span>
                    <span class="logo-lg">
                        <img src="assets/images/logo-dark-sm.png" alt="" height="26">
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

            <!-- start page title -->
            <div class="page-title-box align-self-center d-none d-md-block">
                <h4 class="page-title mb-0">i Social Walk</h4>
            </div>
            <!-- end page title -->

        </div>

        <div class="d-flex">




            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item user text-center d-flex align-items-center" id="page-header-user-dropdown-v" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <?php if ($profile_image == '') {
                        echo '<div class="icon-badge rounded-circle text-center p-3 fs-5 bg-info text-white" style="height:50px; width:50px;">' . strtoupper(substr($first_name, 0, 1)) . '</div>';
                    } else {
                        echo '
                        <img class="rounded-circle header-profile-user " src="api/' . $profile_image . '"
                        alt="Header Avatar">';
                    } ?>
                    <span class="d-none d-xl-inline-block ms-2 fw-medium font-size-15"><?php echo  $first_name . '  ' . $last_name; ?></span>
                </button>
                <div class="dropdown-menu dropdown-menu-end pt-0">
                    <div class="p-3 border-bottom">
                        <h6 class="mb-0"><?php echo  $first_name . '  ' . $last_name; ?></h6>
                        <p class="mb-0 font-size-11 text-muted"><?php echo $email; ?></p>
                    </div>
                    <a class="dropdown-item" href="profile.php"><i class="mdi mdi-account-circle text-muted font-size-16 align-middle me-2"></i> <span class="align-middle">Profile</span></a>
                    <a class="dropdown-item" href="profilechange.php"><i class="bx bx-edit-alt text-muted font-size-16 align-middle me-2"></i> <span class="align-middle">Profile Update</span></a>

                    <a class="dropdown-item d-flex align-items-center" href="settings.php"><i class="mdi mdi-cog-outline text-muted font-size-16 align-middle me-2"></i> <span class="align-middle me-3">Settings</span><span class="badge badge-soft-success ms-auto">New</span></a>

                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="logout.php"><i class="mdi mdi-logout text-muted font-size-16 align-middle me-2"></i> <span class="align-middle">Logout</span></a>
                </div>
            </div>
        </div>
    </div>
</header>