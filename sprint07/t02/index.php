<?php session_start();
      error_reporting(0)?>
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Hack it!</title>
    </head>
    <body>
<h1>Password</h1>
<?php 

    function showStart()
    {
        echo
        "
        Password not saved at session.<br>
        <form action='index.php' method='post'>
            Password for saving to session <input type='password' name='passTo' placeholder='Password to session' required><br>
            Salt for saving to session <input type='password' name='salt' placeholder='Salt to session' required><br>
            <input type='submit' value='Save'>
        </form>
        ";
    }
    function showCheck($hashPassword)
    {
        echo
        "
        Password saved at session.<br>
        Hash is $hashPassword
        <form action='index.php' method='post'>
            Try to guess:<input type='password' name='passFrom' placeholder='Password to session'>
            <input type='submit' value='Check password'>
            <input type='text' name='clear' value='true' style='display: none;'>
            <input type='submit' value='Clear'>
        </form>
        ";
    }
    if($_POST) {
        if($_POST['clear'] == "true") {
            unset($_SESSION['hash']);
            unset($_SESSION['salt']);
            session_destroy();
            session_start();
            showStart();
        }
        else if($_POST['passFrom']) {
            if($_SESSION['hash'] == crypt($_POST['passFrom'], $_SESSION['salt'])) {
                echo("<p style=\"color: green;\">Hacked!</p>");
                session_destroy();
                session_start();
                showStart();
            }
            else {
                echo("<p style=\"color: red;\">Access denied!</p>");
                showCheck($_SESSION['hash']);
            }
        }
        else {
            $pass = $_POST['passTo'];
            $_SESSION['salt'] = $_POST['salt'];
            $_SESSION['hash'] = crypt($pass, $_SESSION['salt']);
            showCheck($_SESSION['hash']);
        }   
    }
    else {
        showStart();
    }
?>