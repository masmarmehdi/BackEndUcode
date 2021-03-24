<?php
    class StrFrequency{
        public $string;
        // contructor
        function _contruct($string){
            $this->string = $string;
        }
        // methods
        function letterFrequencies(){
            for ($i = 0; $i < $n; $i++)
        $freq[ord($str[$i]) - ord('a')]++;
 
        // traverse 'str' from left to right
        for ($i = 0; $i < $n; $i++)
        {
    
            // if frequency of character str[i]
            // is not equal to 0
            if ($freq[ord($str[$i]) - ord('a')] != 0)
            {
    
                // print the character along with
                // its frequency
                echo $str[$i] . $freq[ord($str[$i]) -
                                    ord('a')] . " ";
                                    
                $freq[ord($str[$i]) - ord('a')] = 0;
            }
        }
        }
        function wordFrequencies(){
 
        }
        function reverseString(){

        }
    }
?>  