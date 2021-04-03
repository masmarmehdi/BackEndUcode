<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>What about forms?</title>
</head>
<body>
    <h1>Who's the best football player in the world?</h1>
    <form action="index.php" method="post">
        <input type="radio" name="choices" value="Yeah that's obvious!">Messi<br>
        <input type="radio" name="choices" value="Well yes but no...">Ronaldo<br>
        <input type="radio" name="choices" value="Are you serious?">MM14<br>
        <p><input type="submit" value="Check the answer!"></p>
    </form>
    <p>
        <?php
            if(isset($_POST["choices"]))
            {
                $choice = $_POST["choices"];
                echo $choice;
            }
        ?>
    </p>
</body>
</html>