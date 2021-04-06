<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<h1>Make square image</h1>
<form action="index.php" method="post">
    <input type="url" name="url" placeholder="Image url (jpg/jpeg)..."><br>
    <input id="goButton" type="submit" value="GO">
</form>

<?php 
    error_reporting(0);
    if($_POST['url']) {
        
        $url = $_POST['url'];
        $original = 'original.jpg';
        $ch = curl_init($url);
        $fp = fopen($original, 'wb');
        curl_setopt($ch, CURLOPT_FILE, $fp);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_exec($ch);
        curl_close($ch);
        fclose($fp);
        $redColor = imagecreatefromjpeg($original);
        imagefilter($redColor, IMG_FILTER_COLORIZE, 255, 0, 0);
        imagejpeg($redColor, "red.jpg");


        $greenColor = imagecreatefromjpeg($original);
        imagefilter($greenColor, IMG_FILTER_COLORIZE, 0, 255, 0);
        imagejpeg($greenColor, "green.jpg");


        $blueColor = imagecreatefromjpeg($original);
        imagefilter($blueColor, IMG_FILTER_COLORIZE, 0, 0, 255);
        imagejpeg($blueColor, "blue.jpg");

        echo "<div class=\"grid\">";
        echo "<img src=\"original.jpg\" alt=\"Your image\">";
        echo "<img src=\"red.jpg\" alt=\"Your image\">";
        echo "<img src=\"green.jpg\" alt=\"Your image\">";
        echo "<img src=\"blue.jpg\" alt=\"Your image\">";
        echo "</div>";
    }
?>