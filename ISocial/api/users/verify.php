<?php
include('../include/connection.php');
error_reporting(-1);
ini_set('display_errors', 'On');
set_error_handler("var_dump");
$code = rand(2000, 9999);
$EncodeData = file_get_contents('php://input');
$DecodeData = json_decode($EncodeData, true);
$email = $DecodeData['email'];

$message = 0;
$login = 0;
$sql = "SELECT email FROM users";

$run = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($run)) {
    if ($row['email'] == $email) {
        $message = 'email exist';

        $login = 1;
        break;
    } else {
        $message = 'email Not exist';
    }
}

if ($login == 1) {
    $sqll = "UPDATE users SET otp_code='$code' where email = '$email'";
    $queryl = mysqli_query($conn, $sqll);

    $to = $email;
    $subject = "Verifcation Code for i Social Walk User";
    $txt = "Your 4 Digit Code is " . $code;
    $headers = "From:fatimagull863@gmail.com";




    if (mail($to, $subject, $txt, $headers)) {

        $response[] = array(
            "code" => $code,
            "sentto" => $email,
            "error" => false,
            "message" => 'successfully sent',

        );
        echo json_encode($response);
    } else {
        $response[] = array(

            "message" => 'Error Sending Email',
            "error" => true,

        );
        echo json_encode($response);
    }
} else {
    $response[] = array(
        "message" => 'Email not Exist',
        "error" => true
    );
    echo json_encode($response);
}
