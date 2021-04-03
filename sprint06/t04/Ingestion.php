<?php
    class Ingestion{
        public $id;
        public $meal_type = array();
        public $day_of_diet;
        public $products = array();
        public function __construct($meal_type, $id){
            $this->meal_type  = $meal_type;
            $this->id = $id;
        }
        public function get_from_fridge($product){
            $productKcal = $this->products[$product]->kcal_per_portion;
            if($productKcal > 200){
                throw new EatException("$product is Junk food. ");
            }
        }
        public function setProduct($prdct){
            $this->products[$prdct->getName()] = $prdct;
        }
        public function getProducts(){
            return $this->products;
        }
    }
?>