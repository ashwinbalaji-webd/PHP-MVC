<?php
    namespace newmvc\common;
    /**
     * plain old php object class for Trainee
     * 
     * used for encapsulating a trainee details
     * 
     * PHP-7.4
     */
    class Trainee{

        private $traineeName;
        private $qualification;
        private $email;
        private $mobile;
        private $address;

        public function __construct($traineeName, $qualification, $email, $mobile, $address){
        
            $this->traineeName = $traineeName;
            $this->qualification = $qualification;
            $this->email = $email;
            $this->mobile = $mobile;
            $this->address = $address;
        }

        public function getTraineeName(){
            return $this->traineeName;
        }
        public function setTraineeName($traineeName){
            $this->traineeName = $traineeName;
        }

        public function getQulification(){
            return $this->qualification;
        }
        public function setQulification($qualification){
            $this->qualification = $qualification;
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

        public function getAddress(){
            return $this->address;
        }
        public function setAddress($address){
            $this->address = $address;
        }

        public function __toString(){
           return $this->traineeName." ".$this->qualification." "
                .$this->email." ".$this->mobile." ".$this->address; 
        }
    }




?>