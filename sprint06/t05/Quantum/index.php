<?php
    namespace Space\Quantum;
    use Datetime;

    function calculate_time(){
        $startDate = new DateTime("1939-01-01");
        $now = new DateTime("now");
        $differenceOfTime = date_diff($startDate, $now);
        $lengthDiff = $differenceOfTime->format("%Y"); 
        $quantumYears = 1;
        for($i = 7; $i < $lengthDiff ; $i+= 7){
             $quantumYears++; 
        }
        $quantumMonths = $differenceOfTime->format("%m") + 4;
        $quantumDays = $differenceOfTime->format("%d");
        return [$quantumYears,  $quantumMonths, $quantumDays];

    }
?>