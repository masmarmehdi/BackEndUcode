<?php
    abstract class Model{
        private $connection;
        private $table;

        public function __construct(){
            setTable();
            setConnection();
        }

        private function setTable($table){
            $this->table = $table;
        }

        private function setConnection(){
            $this->connection = new DatabaseConnection('127.0.0.1', 5500, 'mmasmar', 'securepass', 'ucode_web');
        }

        abstract private function find($id);
        abstract private function delete();
        abstract private function save();
    }