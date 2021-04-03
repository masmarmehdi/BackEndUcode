<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Quantum space</title>
</head>

<body>
    <?php
        function calculate_time(){
            $startDate = new DateTime("1939-01-01");
            $now = new DateTime("now");
            return date_diff($startDate, $now);
        }
        $time= calculate_time();
        echo"<p>In real life you were absent for ". $time->format("%Y") . " years, ".$time->format("%m") . " months, ". $time->format("%d") . " days</p>";
    ?>
</body>

</html>