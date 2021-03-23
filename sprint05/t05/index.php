<?php
    class StrFrequency{
        public $string;
        // contructor
        function _contruct($string){
            $this->string = $string;
        }
        // methods
        function letterFrequencies(){
            foreach (count_chars($string, 1) as $i => $value) {
                echo chr($i) . " occurred a number of $value times in the string." . "<br>";
            }
        }
        function wordFrequencies(){

        }
        function reverseString(){

        }
    }
?>  