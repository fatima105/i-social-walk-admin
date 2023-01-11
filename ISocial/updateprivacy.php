<!doctype html>
<html lang="en">

<?php

include('include/connection.php');
include('include/scripts.php');
ob_start();
include('include/header.php');


$privacyid = $_GET['id'];
$sqlfinal = "select * from privacy where id='$privacyid'";
$finalquery = mysqli_query($conn, $sqlfinal); {
    while ($row = mysqli_fetch_assoc($finalquery)) {
        $privacy_text = $row['privacytext'];
    }
}

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $privacy_text = $_POST['privacytext'];
    $sql = "UPDATE privacy SET
         privacytext='$privacy_text'
       WHERE id='$privacyid'";

    $query = mysqli_query($conn, $sql);
    if ($query) {
        // $_SESSION['status_text'] = "Updated Successfully";
        // $_SESSION['status_title'] = "";
        // $_SESSION['status_code'] = "success";
        header('location: privacypolicy.php?id=$privacyid');
    } else {
        // $_SESSION['status_text'] = "Privacy Policy Not Updated";
        // $_SESSION['status_title'] = "";
        // $_SESSION['status_code'] = "error";
        header('location: privacypolicy.php?id=$privacyid');
    }
}
?>

<body>
    <div id="layout-wrapper">


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
                        <div class="col-3">

                        </div>
                        <div class=" col-xl-6 col-6 col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <div class="text-center mt-2">
                                        <h5>Update Privacy Policy!</h5>
                                    </div>
                                    <div class="">
                                        <form action="" class="form" id="form" method="post">
                                            <input type="hidden" name="id" value=" <?php echo $privacyid; ?>" />
                                            <textarea required rows="20" name="privacytext"><?php echo $privacy_text ?></textarea>
                                            <div class="pull-right mr-40 mt-10">
                                                <button type="submit" name="submit" id="submit" class="btn btn-success mr-10 mt-30">Submit</button>
                                            </div>
                                        </form>

                                    </div>
                                </div>







                                <!-- end card body -->
                            </div>
                            <!-- end card -->
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
    <script src="https://cdn.tiny.cloud/1/yo9e1ts5xtf3knyjm2uck5okrzzgtapaef9txyy5qk62bfyp/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: 'textarea',
            plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
            toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
        });
    </script>
</body>


</html>