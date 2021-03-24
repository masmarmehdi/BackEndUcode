<?php
    class HardWorker{
        private $name;
        private $age;
        private $salary;
        public function setName($name){
            $this->name = $name;
        }
        public function getName(){
            return $this->name;
        }
        public function setAge($age){
            if($age > 1 && $age < 100){
                $this->age = $age;
            }
        }
        public function getAge(){
            return $this->setAge($age);
        }
        public function setSalary($salary){
            if($salary > 100 && $salary < 10000){
                $this->salary = $salary;
            }
        }
        public function getSalary(){
            return $this->salary;
        }
        public function toArray(){
            $values = array(
                'name'=>$this->name,
                'age'=>$this->age,
                'salary'=>$this->salary
            );
            return $values;
        }

    }
?>