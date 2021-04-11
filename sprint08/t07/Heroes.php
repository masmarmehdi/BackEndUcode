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
            if($this->connection->getConnectionStatus()) {
                $array = mysqli_query($this->connection->connection, "SELECT * FROM " . $this->table . " WHERE id = $id" . ";");
                if ($array) {
                    $result = mysqli_fetch_assoc($idArr);
                    $this->id = $result["id"];
                    $this->name = $result["name"];
                    $this->description = $result["description"];
                    $this->race = $result["race"];
                    $this->class_role = $result["class_role"];
                }
            }
        }

        public function delete(){
            if ($this->connection->getConnectionStatus()) {
                $array = mysqli_query($this->connection->connection, "SELECT id FROM " . $this->table . " WHERE id = " . $this->id . ";");
                $tableRow = mysqli_fetch_assoc($array);
                if (!$tableRow["name"]) {
                    mysqli_query($this->connection->connection, "DELETE name FROM " . $this->table . " WHERE id = " . $this->id . ";");
                    $this->id = null;
                    $this->name = null;
                    $this->description = null;
                    $this->race = null;
                    $this->class_role = null;
                }
            }
        }

        public function save(){
            $idArray = mysqli_query($this->connection->connection, "SELECT id FROM " . $this->table . " WHERE id = " . $this->id . ";");
            $tableRow = mysqli_fetch_assoc($idArray);
            if (!$row["name"]) {
                echo 'INSERT INTO heroes (id, name, description, race, class_role)
                VALUES ("' . $this->id . '", "' . $this->name . '", "' . $this->description . '", "' . $this->race . '", "' . $this->class_role . '");';
                mysqli_query($this->connection->connection, 'INSERT INTO heroes (id, name, dеscription, race, class_role)
                    VALUES ("' . $this->id . '", "' . $this->name . '", "' . $this->description . '", "' . $this->race . '", "' . $this->class_role . '");');
            }
            else {
                mysqli_query($this->connection->connection, "UPDATE heroes SET id = " . $this->id . ", name = '" . $this->name . "', description = '" . $this->description . "', race = '" . $this->race . "', class_role = '" . $this->class_role . "'  WHERE id = " . $this->id . ";");
            }
        }
    }
?>