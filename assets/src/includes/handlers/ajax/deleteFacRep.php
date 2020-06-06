<?php
    include("./../../config.php");
    if (isset($_POST['id'])){
        $id = $_POST['id'];
        $query = "DELETE FROM table_facrep WHERE id = '$id';";
        if (mysqli_query($conn, $query)){
            echo "./admin.php";
        }
        else{
            echo mysqli_error($conn);
        }
    }
    else{
        echo "Problem";
    }
?>