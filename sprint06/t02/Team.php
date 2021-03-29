<?php
    class Team{
        public $id;
        public $avengers = array();
        public function __construct($id, $avengers){
            $this->id = $id;
            $this->avengers = $avengers;
        }
        public function battle($damage){
            $length = count($this->avengers);
            for($i = 0; $i < $length; $i++){
                $this->avengers[$i]->hp -= $damage;
                if($this->avengers[$i]->hp <= 0){
                    unset($this->avengers[$i]);
                    array_values($this->avengers);
                }
            }
         } 
        public function calculate_losses($cloned_team){
            $count1 = count($cloned_team->avengers);
            $count2 = count($this->avengers);
            
            if($count1 == $count2){
                echo "We haven't lost anyone in this battle!\n";
            }
            else{
                echo "In this battle we lost " . ($count1 - $count2) . " Avenger(s)\n";
            }
            
        }

    }
?>