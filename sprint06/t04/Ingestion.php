<?php
    class Ingestion{
        public $id;
        public $meal_type = array();
        public $day_of_diet;
        public $products = array();
        public function __construct($id, $meal_type, $day_of_diet, $products){
            $this->id = $id;
            $this->meal_type  = $meal_type;
            $this->day_of_diet = $day_of_diet;
            $this->products = $products;
        }
        public function get_from_fridge($product){
            $this->product;
        }
        public function getProduct($name){
            echo $this->products;
        }
    }
?>