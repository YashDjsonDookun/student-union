<?php
    class Admin{
        public function __construct($conn)
        {
            $this->conn = $conn;
        }

        public function get_adminId($username){
            $query = mysqli_query($this->conn, "SELECT id FROM table_admins WHERE Username='$username';");
            $this->mysqliData = mysqli_fetch_array($query);
            return $this->mysqliData[0];
        }

        public function get_adminFullName($username){
            $query = mysqli_query($this->conn, "SELECT FullName FROM table_admins WHERE Username='$username';");
            $this->mysqliData = mysqli_fetch_array($query);
            return $this->mysqliData[0];
        }

        public function get_adminPassword($username){
            $query = mysqli_query($this->conn, "SELECT Password FROM table_admins WHERE Username='$username';");
            $this->mysqliData = mysqli_fetch_array($query);
            return $this->mysqliData[0];
        }

        public function get_adminEmail($username){
            $query = mysqli_query($this->conn, "SELECT Email FROM table_admins WHERE Username='$username';");
            $this->mysqliData = mysqli_fetch_array($query);
            return $this->mysqliData[0];
        }

        public function get_adminBadge($username){
            $query = mysqli_query($this->conn, "SELECT `Badge-Text` FROM table_admins WHERE Username='$username';");
            $this->mysqliData = mysqli_fetch_array($query);
            return $this->mysqliData[0];
        }

        public function adminLogin($username, $password){
            $pw = md5($password);
            $query = mysqli_query($this->conn, "SELECT * FROM table_admins where Username = '$username' AND Password = '$pw'");
            if (mysqli_num_rows($query) == 1)
            {
                return true;
            }
            else
            {
                return false;
            }
        }
    }
?>