<?php
    include 'Model.php';
    class Users extends Model{
        public $id;
        public $fullname;
        public $username;
        public $password;
        public $email;
        
        public function __construct(){
            parent::__construct('users');
        }

        public function find($id){
            if($this->connection->getConnectionStatus()) {
                $array = mysqli_query($this->connection->connection, "SELECT * FROM " . $this->table . " WHERE id = $id" . ";");
                if ($array) {
                    $result = mysqli_fetch_assoc($idArr);
                    $this->id = $result["id"];
                    $this->fullname = $result["fullname"];
                    $this->username = $result["username"];
                    $this->password = $result["password"];
                    $this->email = $result["email"];
                }
            }
        }

        public function delete(){
            if ($this->connection->getConnectionStatus()) {
                $array = mysqli_query($this->connection->connection, "SELECT id FROM " . $this->table . " WHERE id = " . $this->id . ";");
                $tableRow = mysqli_fetch_assoc($array);
                if (!$tableRow["fullname"]) {
                    mysqli_query($this->connection->connection, "DELETE name FROM " . $this->table . " WHERE id = " . $this->id . ";");
                    $this->id = null;
                    $this->fullname = null;
                    $this->username = null;
                    $this->password = null;
                    $this->email = null;
                }
            }
        }

        public function save(){
            $idArray = mysqli_query($this->connection->connection, "SELECT id FROM " . $this->table . " WHERE id = " . $this->id . ";");
            $tableRow = mysqli_fetch_assoc($idArray);
            if (!$row["fullname"]) {
                echo 'INSERT INTO users (id, fullname, username, password, email)
                VALUES ("' . $this->id . '", "' . $this->name . '", "' . $this->description . '", "' . $this->race . '", "' . $this->class_role . '");';
                mysqli_query($this->connection->connection, 'INSERT INTO users (id, name, dеscription, race, class_role)
                    VALUES ("' . $this->id . '", "' . $this->name . '", "' . $this->description . '", "' . $this->race . '", "' . $this->class_role . '");');
            }
            else {
                mysqli_query($this->connection->connection, "UPDATE users SET id = " . $this->id . ", fullname = '" . $this->name . "', username = '" . $this->description . "', password = '" . $this->race . "', email = '" . $this->class_role . "'  WHERE id = " . $this->id . ";");
                echo "<p id=alert><b>$login You've registred successfully!</b></p>";
            }
        }
    }
?>