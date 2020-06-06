<?php
    class OfficeBearer {
        private $conn;
        private $ob_title;

        public function __construct($conn, $ob_title)
        {
            $this->conn = $conn;
            $this->ob_title = $ob_title;

            $query = mysqli_query($this->conn, "SELECT * FROM table_ob WHERE ob_title = '$ob_title'");
            $this->mysqliData = mysqli_fetch_array($query);
            $this->name = $this->mysqliData['ob_name'];
            $this->title = $this->mysqliData['ob_title'];
            $this->fbLink = $this->mysqliData['ob_fblink'];
            $this->tel = $this->mysqliData['ob_tel'];
            $this->image = $this->mysqliData['ob_image'];
            $this->id = $this->mysqliData['ob_id'];
        }

        public function getOB_Name()
        {
            return $this->name;
        }
        public function getOB_Title()
        {
            return $this->title;
        }
        public function getOB_Image()
        {
            return $this->image;
        }
        public function getOB_Tel()
        {
            return $this->tel;
        }
        public function getOB_fbLink()
        {
            return $this->fbLink;
        }
        public function getOB_id()
        {
            return $this->id;
        }
    }
?>