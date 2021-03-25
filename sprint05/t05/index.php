<?php
    class StrFrequency{
        public $string;
        function __construct($string) {
            $this->string = $string;
        }
        function letterFrequencies(){
            $this->string = strtoupper($this->string);
            global $SIZE;
            $stringLength = strlen($this->string);
            // 'freq[]' implemented as hash table
            // ord() returns the ASCII value of the first character of a string
            $freq = array_fill(0, $SIZE, NULL);
            for ($i = 0; $i < $stringLength; $i++){
                $freq[ord($this->string[$i]) - ord('a')]++;
            }
            $arr = array();
            for ($i = 0; $i < $stringLength; $i++)
            {
                
                if ($freq[ord($this->string[$i]) - ord('a')] != 0 && ctype_alpha($this->string[$i])){
                    $arr += [$this->string[$i] => $freq[ord($this->string[$i]) - ord('a')]];
                    $freq[ord($this->string[$i]) - ord('a')] = 0;
                }
            }
            ksort($arr); // Sorting 
            return $arr;
        }
        function wordFrequencies(){
            //array_count_values takes the value instead of the index.
            //str_word_count counts the number of words.
            return array_count_values(str_word_count(strtoupper($this->string), 1));
        }
        function reverseString(){
            $reverseStr = "";
            for ($i = 0; $i < strlen($this->string); $i++){
                if(ctype_alpha($this->string[$i])){
                    $reverseStr .= $this->string[$i];
                }else{
                    $reverseStr .= " ";
                }
            }
            return strrev($reverseStr);
        }
    }
?>