
<?php
session_start();

include('include/connection.php');


session_unset();





if (session_destroy()) {
    header('location:login.php');
}



?>


