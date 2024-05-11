<?php
    Class DBConnection {
        // Data
        private $host     = "localhost";
        private $username = "root";
        private $password = "";
        private $dbname   = "restaurantdb";
        private $con      = null;

        // Method
        public function getConnection (){
            $this->con = new mysqli($this->host, $this->username, $this->password, $this->dbname);
            return $this->con;
        }

        public function getClose(){
            return $this->con->close();
        }

        public function getQuery($sql){
            return $this->con->multi_query($sql);
        }
    }
?>