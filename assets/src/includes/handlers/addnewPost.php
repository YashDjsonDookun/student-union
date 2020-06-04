<?php
    // include("./../config.php");

    if (isset($_POST['add']) && isset($_POST['link'])){
        $link = $_POST['link'];

        $query = "INSERT INTO `table_fbposts` (`id`,`fbPostLink`) VALUES (NULL,'$link')";
        if (mysqli_query($conn, $query)){
            echo "<script>alert('New Post Added Successfully!')</script>";
        }
        else{
            echo "Error: " . $query . "<br>" . mysqli_error($conn);
        }
    }
?>