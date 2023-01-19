<?php
session_start();
require 'mailer/PHPMailer.php';
require 'mailer/SMTP.php';
require 'mailer/Exception.php';

// define name space
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// create instance of phpmailer
$mail = new PHPMailer();

include('../include/connection.php');

if (isset($_POST['email'])) {
    $_SESSION['fp_email'] = $_POST['email'];
}



$exsist = 0;
$sql = "SELECT * FROM users";
$query = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_array($query)) {
    if ($row['email'] == $_SESSION['fp_email']) {
        $exsist = 1;
        break;
    }
}

if ($exsist == 1) {
    $otp = rand(100000, 999999);
    $email = $_SESSION['fp_email'];
    $sqll = "UPDATE users SET otp_code='$otp' where email = '$email'";
    $queryl = mysqli_query($conn, $sqll);
    $to = $email;
    $subject = "Verifcation Code for i Social Walk User";
    $txt = "Your 4 Digit Code is " . $otp;
    $headers = "From:mu63668@gmail.com" . "\r\n" .
        "CC:fatimagull863@gmail.com";



    if (mail($to, $subject, $txt, $headers)) {

        if (isset($_POST['email'])) {

            $_SESSION['status_text'] = "OTP Sent.";
            $_SESSION['status_title'] = "Success";
            $_SESSION['status_code'] = "success";
            header("location:../verify-otp.php");
        }
    } else {
        $_SESSION['status_text'] = "Error in Sending OTP";
        $_SESSION['status_title'] = "Error";
        $_SESSION['status_code'] = "error";
        header("location:../recover.php");
    }

    // close smtp connection
    $mail->smtpClose();
} else {

    $_SESSION['status_text'] = " users does not exist. ";
    $_SESSION['status_title'] = "Error";
    $_SESSION['status_code'] = "error";
    header("location:../recover.php");
}
