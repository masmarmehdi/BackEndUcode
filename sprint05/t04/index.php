<?php
    function total($addCount, $addPrice, $currentTotal = 0){
        if ($currentTotal == 0){
            $currentTotal = $addPrice * $addCount;
        }
        else{
            $currentTotal += $addPrice * $addCount;
        }
        return $currentTotal;
    }
?>