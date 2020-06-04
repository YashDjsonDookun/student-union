<?php
    class Suggestions{
        private $conn;
        private $id;
        private $suggestion;

        public function __construct($conn)
        {
            $this->conn = $conn;
            $query = mysqli_query($this->conn,"SELECT * FROM table_suggestions;");
            $this->mysqliData = mysqli_fetch_array($query);
            $this->id = $this->mysqliData["id"];
            $this->suggestion = $this->mysqliData["suggestion"];
        }

        public function getId(){
            return $this->id;
        }

        public function getSuggestion(){
            return $this->suggestion;
        }
    }
?>