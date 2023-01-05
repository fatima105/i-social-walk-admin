<!doctype html>
<html lang="en">

<?php
include('include/connection.php');

include 'include/scripts.php';
?>
<?php

if (isset($_SESSION['id'])) {
} else {

    header("location:users.php");
    exit();
}
?>

<body>
    <?php
    $id = $_GET['id'];




    if (isset($_POST['update'])) {
        $id = $_POST['id'];
        $terms = $_POST['terms'];
        $sql = "UPDATE terms SET 
         terms='$terms' 
    
       WHERE id='$id'";
        $query = mysqli_query($conn, $sql);
        if ($query) {
            $_SESSION['status_text'] = "Terms  Updated Successfully";
            $_SESSION['status_title'] = "";
            $_SESSION['status_code'] = "success";
            header('location: terms.php');
        } else {
            $_SESSION['status_text'] = "termss Not Updated";
            $_SESSION['status_title'] = "";
            $_SESSION['status_code'] = "error";
            header('location: termsy.php');
        }
    }

    ?>

    <body>

        <div class="authentication-bg min-vh-100">
            <div class="bg-overlay bg-light"></div>
            <div class="container">
                <div class="d-flex flex-column min-vh-100 px-3 pt-4">
                    <div class="row justify-content-center my-auto">
                        <div class="col-md-8 col-lg-6 col-xl-5">



                            <div class="card">
                                <div class="card-body p-4">
                                    <div class="text-center mt-2">
                                        <h5>Update Terms & Conditions!</h5>

                                    </div>
                                    <div class="p-2 mt-4">
                                        <form action="" method="POST">

                                            <div class="mb-3">
                                                <label class="form-label" for="email">Terms & Conditions</label>
                                                <input type="hidden" required class="form-control" name="id" value="<?php echo $id; ?>" name="terms" placeholder="Type Terms & Conditions">
                                                </textarea>
                                                <div class="position-relative input-custom-icon">
                                                    <textarea type="text" required class="form-control" id="terms" rows="9" name="terms" placeholder="Type Terms & Conditions">
</textarea>
                                                </div>
                                            </div>





                                            <div class="mt-3">
                                                <button name="update" class="btn btn-primary w-100 waves-effect waves-light" type="submit">Update Terms & Conditions</button>
                                            </div>



                                            <!-- <div class="mt-4 text-center">
                                            <p class="mb-0">Don't have an account ? <a href="auth-register.html" class="fw-medium text-primary"> Signup now </a> </p>
                                        </div> -->
                                        </form>
                                    </div>

                                </div>
                            </div>

                        </div><!-- end col -->
                    </div><!-- end row -->


                </div>
            </div><!-- end container -->
        </div>
        <!-- end authentication section -->
        <?php include('include/footerscripts.php'); ?>


    </body>



</html>