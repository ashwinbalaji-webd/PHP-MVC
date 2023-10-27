<?php
    class MainController{

        private $controller;
        private $action;

        public function __construct($url){
            
            $url = parse_url($url); 
            $query = explode("/",$url['query']);
            $this->controller = $query[0];

            require_once('controller/class.'.$this->controller.'.php');
            $controll = new $this->controller;
            

            
            if(isset($query[1])){
                $ac = $this->action = $query[1];

                if(isset($query[2])){
                    $controll->$ac($query[2]);
                }else{
                    $controll->$ac();
                }
            }  
        }
        
    }

    $controller = new MainController($_SERVER['REQUEST_URI']);

?>