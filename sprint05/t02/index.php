<?php
    function checkDivision($beginRange = 1, $endRange = 60){
        for($i = $beginRange; $i <= $endRange; $i++){
            if($i % 2 == 0 && $i % 3 == 0 && $i % 10 == 0){
                echo "The number $i is divisible by 2, is divisible by 3, is divisible by 10\n";
            }
            else if($i % 2 == 0 && $i % 3 == 0 ){
                echo "The number $i is divisible by 2, is divisible by 3\n";
            }
            else if($i % 2 == 0){
                echo "The number $i is divisible by 2\n";
            }
            else if($i % 3 == 0){
                echo "The number $i is divisible by 3\n";
            }
            else if($i % 10 == 0){
                echo "The number $i is divisible by 10\n";
            }
            else{
                echo "The number $i -\n";
            }
        }
    }
?>