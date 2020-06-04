<?php
    session_set_cookie_params(0);
    session_start();
    $db_name = "uom-studentunion";
    $db_username = "root";
    $db_password = "";
    $db_host = "localhost";
    $timezone = date_default_timezone_set("Indian/Mauritius");

    ob_start();

    $conn = mysqli_connect($db_host,$db_username,$db_password,$db_name);
    if (!$conn) {
        die("Connection Failed: " . mysqli_connect_error());
    }
?> 