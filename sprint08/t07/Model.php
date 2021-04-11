<?php
    abstract class Model{
        protected $connection;
        protected $table;

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

        abstract protected function find($id);
        abstract protected function delete();
        abstract protected function save();
    }