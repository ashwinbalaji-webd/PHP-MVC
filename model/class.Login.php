<?php
    namespace newmvc\Model;
    class Login{
        private $connection;
        
        public function __construct(){
            require_once('./common/DbConn.php');
            $db = new \Connection();
            $this->connection = $db->getConnection();
        }
        
        public function adminLogin($username){
            
            $query = "SELECT admin_username,admin_password FROM admin where admin_username='".$username."';";
            $result = $this->connection->query($query);
            $result = $result->fetch_assoc();
            return $result; 
        }
        public function trainerLogin($username){

            $query = "SELECT * FROM trainer where trainer_email='".$username."';";
            $result = $this->connection->query($query);
            $result = $result->fetch_assoc();
            //print_r($result);
            return $result;
        }

        public function traineeLogin(){
            
        }
    }
?>
