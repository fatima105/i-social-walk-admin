<?php
session_start();
include('../include/connection.php');

$reportedchallengeid = $_GET['reportedchallengeid'];



$sql = "UPDATE challenges SET status='blocked'
WHERE id='$reportedchallengeid'";

$query = mysqli_query($conn, $sql);

if ($query) {


    $_SESSION['status_text'] = "Challenge blocked";
    $_SESSION['status_title'] = "";
    $_SESSION['status_code'] = "success";
    header('location: ../reportedchallengeview.php?id=' . $reportedchallengeid);
} else {
    $_SESSION['status_text'] = "Challenge Not blocked";
    $_SESSION['status_title'] = "";
    $_SESSION['status_code'] = "error";
    header('location: ../reportedchallengeview.php?id=' . $reportedchallengeid);
}
