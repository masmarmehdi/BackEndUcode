<?php
    $cookie = $_COOKIE['counter'];
    setcookie('counter', cookieCondition($cookie),time()+5);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cookie Counter</title>
</head>
<body>
    <h1>Cookie counter</h1>
    <?php
        function cookieCondition($cookie){
            
            if(isset($cookie)){
                return ++$cookie;
            }
            return 1;
        }
        if(!$cookie == 1){
            echo "Welcome to my site for the first time!";

            
        }else{
            echo "This page was loaded " . ++$_COOKIE['counter'] . " time(s)";

        }
    ?>
</body>
</html>