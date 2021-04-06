<?php
    class DatabaseConnection{
        public function __construct($host, $port, $username, $password, $database){
            $this->host = $host;
            $this->port = $port;
            $this->username = $username;
            $this->password = $password;
            $this->database = $database;
            $link = mysqli_connect($this->host, $this->username, $this->password, $this->database);
        }
        public function __destruct(){
            mysql_close($link);
        }
        public function getConnectionStatus(){
            $link =  mysqli_connect($this->host, $this->username, $this->password, $this->database);
            if($link){
                return true;
            }
            else{
                return false;
            }
        }
    }
?>