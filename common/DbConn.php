<?php
    define('DB_HOST', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASS', 'root');
    define('DB_NAME', 'newmvc');
    class Connection{

        private $conn;

        public function __construct(){
            
            $this->conn = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);

            if($this->conn->error){
                echo "Failed to connect db--->".$this->conn->errno;
            }
        }

        public function getConnection(){
            
            return $this->conn;
        }
    }
?>