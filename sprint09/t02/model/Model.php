<?php
    include 'connection/DatabaseConnection.php';
    abstract class Model{
        protected $connection;
        protected $table;

        public function __construct($table){
            $this->setTable($table);
            setConnection();
        }

        private function setTable($table){
            $this->table = $table;
        }

        private function setConnection(){
            $this->connection = new DatabaseConnection('127.0.0.1', 5500, 'mmasmar', 'securepass', 'sword');
        }

        abstract protected function find($id);
        abstract protected function delete();
        abstract protected function save();
    }
?>