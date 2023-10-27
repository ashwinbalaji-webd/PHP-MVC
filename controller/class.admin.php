<?php
    session_start();
    if(isset($_SESSION['username'])){
    class Admin{

        private $adminModel;
        public function __construct(){
            require_once('./model/class.admin.php');
            $this->adminModel = new \newmvc\Model\Admin();
            require_once('./views/admin/admin.php');
        }

        public function addTrainer(){
            if($_SERVER['REQUEST_METHOD'] == "POST"){
                $trainerName = $_POST['trainerName'];
                $tranerEmail = $_POST['trainerEmail'];
                $trainerMobile = $_POST['trainerMobile'];
                $trainerPassword = $_POST['trainerPassword'];
                require_once('./common/class.Trainer.php');
                $trainer = new \newmvc\common\Trainer($trainerName,$tranerEmail,$trainerMobile,$trainerPassword);
                $result = $this->adminModel->addTrainer($trainer);
                if($result){
                    header("Location:http://localhost/newMvc/?admin/getAllTrainers");
                }else{
                    echo "Failed to add";
                }
            }else{
                require_once('views/admin/trainerForm.php');
            }
        }

        public function updateTrainer(){

        }

        public function deleteTrainer(){

        }

        public function getTrainer(){

        }
        public function getAllTrainers(){
            echo "shgjk";
        }
    }
    }else{
        echo "<h1>page not found</h1>";
    }

?>