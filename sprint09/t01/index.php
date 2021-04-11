<?php if(!isset($_SESSION) session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>t01</title>
</head>
<body>
    <div id="login">
        <h2>Login</h2>
        <form id="form" action="index.php" method="POST">
            <div class="input">
            <input class="input" type="text" name="username" placeholder="Enter a username." required><br>
            </div>
            <div class="input">
            <input class="input" type="password" name="password" placeholder="Enter a password." required><br>
            </div>
            <input id="submitButton" type="submit" name="submit" value="Login">
        </form>
    </div>
</body>
</html>
<?php
    include './model/Users.php';
    if(isset($_POST['submit'])){
            $user = new Users();
            $password = $_POST['password'];
            $_SESSION['username'] = $_POST['username'] ;
            $_SESSION['password'] = $_POST['password'];
            if($user->find($_SESSION["login"])){
                if($user->password == $_SESSION["password"]){
                    echo "
                        <style>
                            #form{
                                display:none;
                            }
                        </style>
                    ";
                    echo "
                        <div id='forLoging' class='reg-box'>
                            <p>Hello " .$_POST['username'] . " !!<br>
                            Status: $user->status<br>
                            </p>
                        </div>
                    ";
                    echo "
                        <p>".$_POST['username'] . "You've logged in successfully!</p>
                    ";
                    echo"<form action='index.php' method='POST'><input id='submitButton' type='submit' name='logout' value='Logout'></form>";
                }else{
                    echo "<p>Wrong password!</p>";
                }
            }else{
                echo "<p>Wrong username!</p>";
            }
            unset($_POST);
    }
    if(isset($_POST['logout'])){
        unset($_SESSION["username"]);
        unset($_SESSION["password"]);
    }
?>