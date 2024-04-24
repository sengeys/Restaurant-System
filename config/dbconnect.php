<?php
    Class DBConnection {
        // Data
        private $host     = "";
        private $username = "";
        private $password = "";
        private $dbname   = "";
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