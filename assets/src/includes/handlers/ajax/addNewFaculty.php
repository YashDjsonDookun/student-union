<?php
    include('./../../config.php');
    if(isset($_POST['facultyName']) && isset($_POST['facultyRepName']) && isset($_POST['facultyRepEmail']) && isset($_POST['facultyRepFb']) && isset($_POST['facultyRepTel']) && isset($_POST['facultyRepImage'])){
        $facultyName = mysqli_real_escape_string($conn,$_POST['facultyName']);
        $facultyRepName = mysqli_real_escape_string($conn,$_POST['facultyRepName']);
        $facultyRepEmail = mysqli_real_escape_string($conn,$_POST['facultyRepEmail']);
        $facultyRepFb = mysqli_real_escape_string($conn,$_POST['facultyRepFb']);
        $facultyRepTel = mysqli_real_escape_string($conn,$_POST['facultyRepTel']);
        $facultyRepImage = mysqli_real_escape_string($conn,$_POST['facultyRepImage']);

        $query = "INSERT INTO table_facrep (`id`, `facRep_name`, `facRep_title`, `facRep_fblink`, `facRep_image`, `facRep_email`, `facRep_tel`)
                    VALUES (null, '$facultyRepName', '$facultyName', '$facultyRepFb', '$facultyRepImage', '$facultyRepEmail', '$facultyRepTel');";

        if(mysqli_query($conn, $query)){
            echo "New Faculty Created Successfully!";
        }
        else{
            echo "Error: " . mysqli_error($conn);
        }
    }
    else{
        echo "Problem";
    }
?>