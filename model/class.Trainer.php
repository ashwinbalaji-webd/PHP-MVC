<?php
    namespace newmvc\Model;
    class Trainer{

        private $connection;
        public function __construct(){
            require_once('./common/DbConn.php');
            $db = new \Connection();
            $this->connection = $db->getConnection();
            echo "Trainer Model";
        }


        public function addTrainee($trainee,$trainerid){
            // echo "<pre>";
            //     var_dump($trainee);
            // echo "</pre>";
            $query ="INSERT INTO trainee(trainee_name,trainee_qualification,
                    trainee_email,trainee_mobile,trainee_address,trainer_id)VALUES('"
                    .$trainee->getTraineeName()."','".$trainee->getQulification()
                    ."','".$trainee->getEmail()."','".$trainee->getMobile()
                    ."','".$trainee->getAddress()."',".$trainerid.")";
            $result = $this->connection->query($query);
            return $result;

        }

        public function updateTrainee(){
        }

        public function deleteTrainee(){
        }

        public function getAllTrainees($trainerid){
            echo $trainerid;
            $query = "SELECT * FROM trainee WHERE trainer_id=".$trainerid;
            $result = $this->connection->query($query);
            $mode = MYSQLI_ASSOC;
            $result = $result->fetch_all($mode);
            return $result;
        }

        public function getTrainee(){
        }
    }




?>