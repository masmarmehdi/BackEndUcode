<?php
    function firstUpper($string){
        $string = trim($string);
        for($i = 0; $i < strlen($string); $i++){
            
            if(strtolower($string[$i])){
                $string[0] = strtoupper($string[0]) ;
                $string[$i] = strtolower($string[$i]);         
            }
        }
        return $string;
    }
?>