<?php
    session_start();
    if(isset($_SESSION['username'])){  
    class Trainer{

        private $modelTrainer;
        public function __construct(){

            echo "Trainer controller";
            require_once('./model/class.Trainer.php');
            $this->modelTrainer = new \newmvc\Model\Trainer;
            require_once('./views/Trainer/trainer.php');
        }


        public function addTrainee(){
            if($_SERVER['REQUEST_METHOD']=="POST"){
                $traineeName = $this->validate($_POST['traineeName']);
                $qualification = $this->validate($_POST['traineeQualification']);
                $email = $this->validate($_POST['traineeEmail']);
                $mobile = $this->validate($_POST['traineeMobile']);
                $address = $this->validate($_POST['traineeAddress']);
                require_once('./common/class.Trianee.php');
                $trainee = new \newmvc\common\Trainee($traineeName,$qualification,$email,$mobile,$address);
                $result = $this->modelTrainer->addTrainee($trainee, $_SESSION['trainerId']);
                
                if($result){
                    header('Location:http://localhost/NewMvc/?Trainer/getAllTrainee');
                }else{
                     echo "FAILED";
                }
            }else{
                require_once('./views/Trainer/addTrainee.php');
            }

            
        }
        
        public function updateTrainee(){

        }

        public function deleteTrainee(){

        }

        public function getAllTrainees(){
            $trainees = $this->modelTrainer->getAllTrainees($_SESSION['trainerId']);
            require('./views/Trainer/traineeList.php');
        }

        public function getTrainee(){

        }

        public function validate($value){
            $value = strip_tags($value);
            $value = trim($value);
            return $value;
        }

    }
}else{
    echo "<h1>Page not found</h1>";
}

?>