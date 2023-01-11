<!doctype html>
<html lang="en">

<?php
session_start();
include('include/connection.php');

include 'include/scripts.php';
?>



<body>

    <!--- Login  PHP-->

    <?php



    if (isset($_POST['add'])) {

        $email = $_POST['email'];

        $password = $_POST['password'];



        $password = md5($password);
        $sql = "Select * from users where email='$email' AND password='$password'";

        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) == 1) {

            while ($data = mysqli_fetch_assoc($result)) {
                $Role = $data['Role'];
                if ($Role == 'A') {

                    $_SESSION['id'] = $data['id'];
                    $_SESSION['email'] = $data['email'];
                    $_SESSION['password'] = $data['password'];

                    $sessionid = $_SESSION['id'];
                    $email = $_SESSION['email'];
                    $password = $_SESSION['password'];
                    $Passwordd = md5($password);
                    header("location:index.php");
                    if (isset($_POST['rememberme'])) {
                        //COOKIES for username
                        setcookie('email', $email, time() + (10 * 365 * 24 * 60 * 60));
                        //COOKIES for password
                        setcookie('password', $_POST['password'], time() + (10 * 365 * 24 * 60 * 60));
                    }
                }
            }
        } else {

            $_SESSION['status_title'] = "Error";
            $_SESSION['status_text'] = "Email or Password is invalid.";
            $_SESSION['status_code'] = 'warning';
        }
    } ?>

    <body>

        <div class="authentication-bg min-vh-100">
            <div class="bg-overlay bg-light"></div>
            <div class="container">
                <div class="d-flex flex-column min-vh-100 px-3 pt-4">
                    <div class="row justify-content-center my-auto">
                        <div class="col-md-8 col-lg-6 col-xl-5">

                            <div class="mb-4 pb-2">
                                <a href="index-2.html" class="d-block auth-logo">
                                    <img src="assets/images/logo-dark.png" alt="" height="30" class="auth-logo-dark me-start">
                                    <img src="assets/images/logo-light.png" alt="" height="30" class="auth-logo-light me-start">
                                </a>
                            </div>

                            <div class="card">
                                <div class="card-body p-4">
                                    <div class="text-center mt-2">
                                        <h5>Welcome Back to ISocial Walk !</h5>

                                    </div>
                                    <div class="p-2 mt-4">
                                        <form action="" method="POST">

                                            <div class="mb-3">
                                                <label class="form-label" for="email">Email Address</label>
                                                <div class="position-relative input-custom-icon">
                                                    <input type="text" required class="form-control" id="email" name="email" placeholder="Enter email">
                                                    <span class="bx bx-user"></span>
                                                </div>
                                            </div>

                                            <div class="mb-3">
                                                <!-- <div class="float-end">
                                                    <a href="recover.php" class="text-muted text-decoration-underline">Forgot password?</a>
                                                </div> -->
                                                <label class="form-label" for="password-input">password</label>
                                                <div class="position-relative auth-pass-inputgroup input-custom-icon">
                                                    <span class="bx bx-lock-alt"></span>
                                                    <input name="password" type="password" class="form-control" required id="password-input" placeholder="Enter password">
                                                    <button type="button" class="btn btn-link position-absolute h-100 end-0 top-0" id="password-addon">
                                                        <i class="mdi mdi-eye-outline font-size-18 text-muted"></i>
                                                    </button>
                                                </div>
                                            </div>

                                            <div class="form-check py-1">
                                                <input type="checkbox" class="form-check-input" id="auth-remember-check">
                                                <label class="form-check-label" for="auth-remember-check">Remember me</label>
                                            </div>

                                            <div class="mt-3">
                                                <button name="add" class="btn btn-primary w-100 waves-effect waves-light" type="submit">Log In</button>
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