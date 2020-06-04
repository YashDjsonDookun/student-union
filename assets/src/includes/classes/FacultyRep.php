<?php
    class FacultyRep {
        private $conn;

        public function __construct($conn, $FacRep_title)
        {
            $this->conn = $conn;
            $this->facRep_title = $FacRep_title;

            $query = mysqli_query($this->conn, "SELECT * FROM table_facrep WHERE facRep_title = '$FacRep_title'");
            $this->mysqliData = mysqli_fetch_array($query);
            $this->name = $this->mysqliData['facRep_name'];
            $this->title = $this->mysqliData['facRep_title'];
            $this->fbLink = $this->mysqliData['facRep_fblink'];
            $this->image = $this->mysqliData['facRep_image'];
            $this->tel = $this->mysqliData['facRep_tel'];
            $this->email = $this->mysqliData['facRep_email'];
            $this->id = $this->mysqliData['id'];
        }

        public function get_Name()
        {
            return $this->name;
        }
        public function get_Title()
        {
            return $this->title;
        }
        public function get_FbLink()
        {
            return $this->fbLink;
        }
        public function get_Image()
        {
            return $this->image;
        }
        public function get_Tel()
        {
            return $this->tel;
        }
        public function get_Email()

        {
            return $this->email;
        }
        public function get_Id()
        {
            return $this->id;
        }
    }
?>