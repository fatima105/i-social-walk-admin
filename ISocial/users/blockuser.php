<?php
session_start();
include('../include/connection.php');

$reporteduserid = $_GET['reporteduserid'];




// if ()

$sql = "UPDATE users SET status='blocked'
WHERE id='$reporteduserid'";

$query = mysqli_query($conn, $sql);
$reporteduserid = urlencode($reporteduserid);

if ($query) {

    $sqlquery = "SELECT * from friend_list where this_user_id='$report_user'";
    $query1 = mysqli_query($conn, $sqlquery);
    $finalquery = mysqli_num_rows($query1);
    if ($finalquery) {
        echo   $sql1 = "UPDATE friend_list SET status='blocked' where this_user_id='$report_user'";
        die();
        $quey1 = mysqli_query($conn, $sql1);
    }
    $sqlquery = "SELECT * from group_member where user_id='$report_user'";
    $query1 = mysqli_query($conn, $sqlquery);

    if (mysqli_num_rows($query1)) {
        $sql2 = "UPDATE group_member SET status='blocked' where this_user_id='$report_user'";

        $query1 = mysqli_query($conn, $sql2);
        echo   $sqlquery = "SELECT * from challenges_participants where user_id='$report_user'";
        die();
        $query1 = mysqli_query($conn, $sqlquery);

        if (mysqli_num_rows($query1)) {
            echo    $sql2 = "UPDATE challenges_particiapnts SET status='blocked' where this_user_id='$report_user'";
            die();
            if (mysqli_query($conn, $sql2)) {
            }
        }
    }

    $_SESSION['status_text'] = "User Blocked";
    $_SESSION['status_title'] = "";
    $_SESSION['status_code'] = "success";
    header("location: ../reportedusersview.php?id=" . $reporteduserid);
} else {
    $_SESSION['status_text'] = "User Not blocked";
    $_SESSION['status_title'] = "";
    $_SESSION['status_code'] = "error";
    header('location: ../reportedusersview.php');
}
