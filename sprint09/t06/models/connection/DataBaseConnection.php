<?php
    class DatabaseConnection{
        public function __construct($host, $port, $username, $password, $database){
            try{
                $this->host = $host;
                $this->port = $port;
                $this->username = $username;
                $this->password = $password;
                $this->database = $database;
                $this->connection = new PDO("mysql:host=$host;dbname=$database", $username, $password);
                $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                echo "Connected successfully<br>";
                }catch(PDOException $e){
                    echo "::Connection failed: ".$e->getMessage().'\n';
            }
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