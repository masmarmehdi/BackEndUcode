<?php
    class Tower extends Building {  
        protected $elevator;
        protected $arc_capacity;
        protected $height;

        function setElevator($elevator){
            $this->elevator = $elevator;
        }
        function hasElevator(): bool{
            return $this->elevator;
        }
        function setArcCapacity($arc_capacity){
            $this->arc_capacity = $arc_capacity;
        }
        function getArcCapacity(): int{
            return $this->arc_capacity;
        }
        function setHeight($height){
            $this->height = $height;
        }
        function getHeight() : float{
            return  $this->height;
        }
        function getFloorHeight(): float{
            return $this->height / $this->floors;
        }
    }
?>  