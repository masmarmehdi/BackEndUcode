<?php
    class EatException extends Exception{
        public function construct($message){
            parent :: __construct($message);
        }
        public function __toString(){
            return $this->message;
        }
    } 
?>