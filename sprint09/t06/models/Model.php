<?php
    include 'connection/DatabaseConnection.php';
    abstract class Model{
        protected $connection;
        protected $table;

        public function __construct($table){
            $this->table = $table;
            $this->connection = new DatabaseConnection('127.0.0.1', 5500, 'mmasmar', 'securepass', 'sword');
        }

        // private function setTable($table){
            
        // }

        // private function setConnection(){
            
        // }

        abstract protected function find($id);
        abstract protected function delete();
        abstract protected function save();
    }
?>