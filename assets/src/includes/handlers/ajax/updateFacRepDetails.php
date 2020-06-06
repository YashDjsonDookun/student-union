<?php
    include("./../../config.php");
    if (isset($_POST['id']) && isset($_POST['name']) && isset($_POST['email']) && isset($_POST['fbLink']) && isset($_POST['tel']) && isset($_POST['faculty']) && isset($_POST['image'])){
        $id = $_POST['id'];
        $faculty = $_POST['faculty'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $fbLink = $_POST['fbLink'];
        $tel = $_POST['tel'];
        $image = $_POST['image'];

        $query = "
            UPDATE `table_facrep`
            SET `facRep_name`= '$name', `facRep_title`='$faculty', `facRep_fblink`='$fbLink', `facRep_tel`='$tel', `facRep_email`='$email', `facRep_image`='$image'
            WHERE `id`='$id';
        ";
        if (mysqli_query($conn, $query)){
            echo "Details of '$faculty' saved Successfully!";
        }
        else{
            echo mysqli_error($conn);
        }
    }
    else{
        echo "Problem";
    }
?>