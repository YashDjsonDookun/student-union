<?php
    include("../../config.php");
    if (isset($_POST['id'])){
        $id = $_POST['id'];
        $query = mysqli_query($conn, "DELETE FROM table_suggestions WHERE id = '$id';");
        require_once("../../displaySuggestions.php");
        DisplaySuggestionAdminSide($conn);
    }
    else {
        echo "problem";
    }
?>