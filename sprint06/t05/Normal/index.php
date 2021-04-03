<?php
    namespace Space\Normal;
    use Datetime;
    function calculate_time(){
        $startDate = new DateTime("1939-01-01");
        $now = new DateTime("now");
        return date_diff($startDate, $now);
    }
?>