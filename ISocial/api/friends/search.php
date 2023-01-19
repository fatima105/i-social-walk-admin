<?php

$data = json_decode(file_get_contents("php://input"), true);

header('Content-Type: application/json');
$name = $data['name'];
$this_user_id = $data['this_user_id'];
include('../include/connection.php');
$sql = "Select * from users WHERE first_name LIKE '%$name%' OR last_name LIKE '%$name%' AND id != $this_user_id";

$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    while ($row_f = mysqli_fetch_assoc($result)) {
        $id = $row_f['id'];
        $SQL_FINAL = "select * from friend_list  where this_user_id='$this_user_id' AND friend_user_id='$id' ";
        $sqa = mysqli_query($conn, $SQL_FINAL);
        if (mysqli_num_rows($sqa) > 0) {
            while ($row = mysqli_fetch_assoc($sqa)) {
                $response[] = array(
                    "status" => $row['status'],

                    "f_id" => $row_f['id'],
                    "first_name" => $row_f['first_name'],
                    "last_name" => $row_f['last_name'],
                    "profile_image" => $row_f['profile_image'],
                );
            }
        } else {
            $response[] = array(
                "status" => "Not Friends",
                "f_id" => $row_f['id'],
                "first_name" => $row_f['first_name'],
                "last_name" => $row_f['last_name'],
                "profile_image" => $row_f['profile_image'],
            );
        }
    }
} else {
    $response[] = array(
        "message" => "No User found of this name",
        "error" => true,
    );
}


if (empty($response)) {
    $response[] = array(
        "message" => "Empty User List",
        "error" => true,
    );
}

// }
echo json_encode($response);
