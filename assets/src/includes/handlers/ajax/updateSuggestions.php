<?php
    include("../../config.php");

    if (isset($_POST['suggestion'])){

        $suggestion = mysqli_real_escape_string($conn, $_POST['suggestion']);

        if (strlen($suggestion) > 0){
            $query = mysqli_query($conn, "INSERT INTO table_suggestions (id,suggestion) VALUES(NULL, '$suggestion')");
        }
        require_once("../../displaySuggestions.php");
        DisplaySuggestionClientSide($conn);
    }
    else {
        echo "problem";
    }
?>