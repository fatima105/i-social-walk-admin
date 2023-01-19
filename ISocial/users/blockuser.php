<?php
session_start();
include('../include/connection.php');

$reporteduserid = $_GET['reporteduserid'];



$sql = "UPDATE users SET status='blocked'
WHERE id='$reporteduserid'";

$query = mysqli_query($conn, $sql);

if ($query) {


    $_SESSION['status_text'] = "User blocked";
    $_SESSION['status_title'] = "";
    $_SESSION['status_code'] = "success";
    header('location: ../reportedusersview.php?id=' . $reporteduserid);
} else {
    $_SESSION['status_text'] = "User Not blocked";
    $_SESSION['status_title'] = "";
    $_SESSION['status_code'] = "error";
    header('location: ../reportedusersview.php?id=' . $reporteduserid);
}
