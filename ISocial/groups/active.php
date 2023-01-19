<?php
session_start();
include('../include/connection.php');

$reportedgroupid = $_GET['reportedgroupid'];



$sql = "UPDATE user_groups SET status='Active'
WHERE id='$reportedgroupid'";

$query = mysqli_query($conn, $sql);

if ($query) {


    $_SESSION['status_text'] = "Groups Active";
    $_SESSION['status_title'] = "";
    $_SESSION['status_code'] = "success";
    header('location: ../reportedgroupview.php?id=' . $reportedgroupid);
} else {
    $_SESSION['status_text'] = "Groups Not Active";
    $_SESSION['status_title'] = "";
    $_SESSION['status_code'] = "error";
    header('location: ../reportedgroupsview.php?id=' . $reportedgroupid);
}
