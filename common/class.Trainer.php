<?php
    namespace newmvc\common;
/**
     * plain old php object class for Trainee
     * 
     * used for encapsulating a trainer details
     * 
     * PHP-7.4
     */
    class Trainer{

        private $name;
        private $email;
        private $mobile;
        private $password;

        public function __construct($name, $email, $mobile, $password){
        
            $this->name = $name;
            $this->email = $email;
            $this->mobile = $mobile;
            $this->password = $password;
        }

        public function getName(){
            return $this->name;
        }
        public function setName($name){
            $this->name = $name;
        }

        public function getEmail(){
            return $this->email;
        }
        public function setEmail($email){
            $this->email = $email;
        }

        public function getMobile(){
            return $this->mobile;
        }
        public function setMobile($mobile){
            $this->mobile = $mobile;
        }

        public function getPassword(){
            return $this->password;
        }
        public function setPassword($password){
            $this->password = $password;
        }

        public function __toString(){
           return $this->name." ".$this->email
           ." ".$this->mobile." ".$this->password; 
        }
    }