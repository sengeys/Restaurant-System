<?php
    Class DBConnection {
        // Data
        private $host     = "localhost";
        private $username = "root";
        private $password = "";
        private $dbname   = "restaurantdb";
        private $conn      = null;

        // Method
        public function connect (){
            $this->conn = new mysqli($this->host, $this->username, $this->password, $this->dbname);
            return $this->conn;
        }

        public function close(){
            return $this->conn->close();
        }

        public function query($sql){
            return $this->conn->multi_query($sql);
        }
    }
?>