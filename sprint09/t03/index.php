<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>t03</title>
</head>
<body>
    <h1>Simple router</h1>
    <form action="index.php" method="GET">
    <br><label>Data: </label><input type="text" name="data"><br><br>
        <label>filter: </label><input type="text" name="filter"><br><br>
        <input type="submit" name="submit">
    </form>
    <?php
    include 'Router.php';
    $submit = $_GET['submit'];
    if($submit){
        $full_url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        $router = new Router();
        $router->url_to_array($full_url);
        $router->printParams();
    }
    ?>
</body>
</html>
