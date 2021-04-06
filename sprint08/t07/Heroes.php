<?php
    class Heroes extends Model{
        public $id;
        public $name;
        public $description;
        public $race;
        public $class_role;
        
        public function __construct(){
            parent::__construct('heroes');
        }

        public function find($id){

        }

        public function delete(){

        }

        public function save(){
            
        }
    }
?>