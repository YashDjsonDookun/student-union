<?php
    include("../../config.php");
    if (isset($_POST['id'])){
        $id = $_POST['id'];
        $query = mysqli_query($conn, "DELETE FROM table_fbposts WHERE id = '$id';");
        require_once("../../displayFacebookPost.php");
        displayFBPostAdmin($conn);
    }
    else {
        echo "problem";
    }
?>