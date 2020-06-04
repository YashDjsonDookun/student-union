<?php
    if(isset($_POST['logout-btn'])){
        session_start();
        session_destroy();
        header('Location: ./index.php');
    }
?>