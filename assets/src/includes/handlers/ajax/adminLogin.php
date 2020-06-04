<?php
  if(isset($_POST['username']) && isset($_POST['password'])){
      require_once("../../classes/Admin.php");
      require_once("../../config.php");

      $admin = new Admin($conn);
      $username = $_POST['username'];
      $password = $_POST['password'];


      $loggedIn = $admin->adminLogin($username, $password);
      if ($loggedIn){
          $_SESSION['userLoggedIn'] = $username;
          echo "./admin.php";
      }
      else{
          echo "Problem Logging In!";
      }
  }
?>