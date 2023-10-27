<?php
    namespace newmvc\Model;

    class Admin{

        private $connection;
        public function __construct(){
            echo "Admin Model";
            require_once('./common/DbConn.php');
            $db = new \Connection();
            $this->connection = $db->getConnection();
        }

        public function addTrainer($trainer){
            $name = $trainer->getName();
            $email = $trainer->getEmail();
            $mobile = $trainer->getMobile();
            $password = $trainer->getPassword();
            
            $sql = "INSERT INTO trainer(trainer_name,trainer_email,trainer_mobile,trainer_password)
                    VALUES(?,?,?,?)";
            $result = $this->connection->prepare($sql);
            $result->bind_param('ssss',$name,$email,$mobile,$password);
            return $result->execute();
        }

        public function updateTrainer(){

        }

        public function deleteTrainer(){

        }

        public function getTrainer(){

        }
        public function getAllTrainers(){
                
        }
        }
?>