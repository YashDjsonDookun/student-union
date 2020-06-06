<?php
    if (isset($_POST['savePresident'])){
        $presidentName = mysqli_real_escape_string($conn, $_POST['presidentName']);
        $presidentFbLink = mysqli_real_escape_string($conn, $_POST['presidentFb']);
        $presidentTel = mysqli_real_escape_string($conn, $_POST['presidentTel']);
        $presidentImageLink = mysqli_real_escape_string($conn, $_POST['presidentImage']);

        $query="UPDATE `table_ob`
                SET `ob_name`='$presidentName', `ob_fblink`='$presidentFbLink', `ob_tel`='$presidentTel', `ob_image`='$presidentImageLink'
                WHERE `ob_title`='President';";

        if(mysqli_query($conn,$query)){
            echo "
                <script>alert('President Details Saved Successfully!')</script>
            ";
        }
        else{
            echo "Error: " .mysqli_error($conn);
        }
    }

    if (isset($_POST['saveVicePresident'])){
        $vicePresidentName = mysqli_real_escape_string($conn, $_POST['vicePresidentName']);
        $vicePresidentFbLink = mysqli_real_escape_string($conn, $_POST['vicePresidentFb']);
        $vicePresidentTel = mysqli_real_escape_string($conn, $_POST['vicePresidentTel']);
        $vicePresidentImageLink = mysqli_real_escape_string($conn, $_POST['vicePresidentImage']);

        $query="UPDATE `table_ob`
                SET `ob_name`='$vicePresidentName', `ob_fblink`='$vicePresidentFbLink', `ob_tel`='$vicePresidentTel', `ob_image`='$vicePresidentImageLink'
                WHERE `ob_title`='Vice-President';";

        if(mysqli_query($conn,$query)){
            echo "
                <script>alert('Vice-President Details Saved Successfully!')</script>
            ";
        }
        else{
            echo "Error: " .mysqli_error($conn);
        }
    }
?>