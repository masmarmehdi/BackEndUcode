<?php error_reporting(0);?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1>Charset</h1>
    <form action="index.php" method="post">
        <p>Change charset: <input type="text" name="input" placeholder="Input string"></p>
        <p>Select charset or several charsets: 
        <select multiple name="select[]">
            <option>UTF-8</option>
            <option>ISO-8859-1</option>
            <option>Windows-1252</option>
        </select>
        <input type="submit" value="Change charset">
        <input type="submit" name="clear" value="Clear">
    </form>
    <?php
        $input = $_POST['input'];
        $clear = $_POST['clear'];
        $select = $_POST['select'];
        if(isset($input)) {
            if($clear) {
                unset($_POST['input']);
                unset($clear);
                unset($select);
            }
            else {
                $input = $_POST['input'];
                echo("Input string: <textarea>$input</textarea><br>");
                if($select[0]){
                    $converted = mb_convert_encoding($input, $select[0]);
                    echo("UTF-8 <textarea>$converted</textarea><br>");
                }
                if($select[1]){
                    $converted = mb_convert_encoding($input, $select[1]);
                    echo("ISO-8859-1 <textarea>$converted</textarea><br>");
                }
                if($select[2]){
                    $converted = mb_convert_encoding($input, $select[2]);
                    echo("Windows-1252 <textarea>$converted</textarea><br>");
                }
            }
        }
    ?>
</body>

</html>