<?php
    session_start();
    class Login{
        private $loginModel;
        public function __construct(){
            require_once('./model/class.Login.php');
            $this->loginModel = new \newmvc\Model\Login();
        }
        
        public function adminLogin(){
            if($_SERVER['REQUEST_METHOD'] == "POST"){
                if(isset($_POST['username']) && isset($_POST['password'])){
                    $_SESSION['username'] = $_POST['username'];
                    $_SESSION['password'] = $_POST['password'];
                    $result = $this->loginModel->adminLogin($_SESSION['username']);
                    if($_SESSION['username'] == $result['admin_username'] && $_SESSION['password'] == $result['admin_password']){
                        header("Location:http://localhost/newMvc/?admin");
                    }
                }
            }else{
                $action = 'admin';
                require_once('./views/login.php');
            }
        }
        public function trainerLogin(){
            if($_SERVER['REQUEST_METHOD'] == "POST"){
                if(isset($_POST['username']) && isset($_POST['password'])
                    && !empty($_POST['username']) && !empty($_POST['password'])){
                    $_SESSION['username'] = $_POST['username'];
                    $_SESSION['password'] = $_POST['password'];
                    $result = $this->loginModel->trainerLogin($_SESSION['username']);
                    if($_SESSION['username'] == $result['trainer_email'] && $_SESSION['password'] == $result['trainer_password']){
                        $_SESSION['trainerId'] = $result['trainer_id'];
                        header("Location:http://localhost/newMvc/?trainer");
                    }
                }else{
                    echo "<h1>Invalid User<h1>";
                }
            }else{
                $action = 'trainer';
                require_once('./views/login.php');
            }
        }

        public function traineeLogin(){
            if($_SERVER['REQUEST_METHOD'] == "POST"){
                if(isset($_POST['username']) && isset($_POST['password'])){
                    $_SESSION['username'] = $_POST['username'];
                    $_SESSION['password'] = $_POST['password'];
                    if($_SESSION['username'] == "admin" && $_SESSION['password'] == '12345'){
                        require_once('./controller/class.admin.php');
                        $admin = new Admin();
                    }
                }
            }else{
                $action = 'trainee';
                require_once('./views/login.php');
            }
        }
        public function logout(){
            session_start();
            if(isset($_SESSION['username'])){
                session_unset();
                session_destroy();
                header('Location:http://localhost/NewMvc/?Home');
            }
        }
    }




?>