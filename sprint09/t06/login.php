<?php if(!isset($_SESSION)) session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>
    <div id="login">
        <h2>Login</h2>
        <form id="form" action="login.php" method="POST">
            <div class="input">
            <input class="input" type="text" name="username" placeholder="Enter your username." required><br>
            </div>
            <div class="input">
            <input class="input" type="password" name="password" placeholder="Enter your password." required><br>
            </div>
            <input id="submitButton" type="submit" name="submit" value="Login">
        </form>
        <p>Forgot password? <a href="passwordReminder.php">Click here for help</a></p>
        <p>Not a user yet? <a href="registration.php">Create an account</a></p> 
    </div>
</body>
</html>
<?php
    include 'models/Users.php';
    if(isset($_POST['submit'])){
            $user = new Users();
            $password = $_POST['password'];
            $_SESSION['username'] = $_POST['username'] ;
            $_SESSION['password'] = $_POST['password'];
            if($user->find($_SESSION['username'])){
                if($user->password == $_SESSION['password']){
                    $_SESSION['status'] = $user->status;
                    include './view/templates/main.php';
                }else{
                    echo "<p>Wrong password! Please Enter the correct one.</p>";
                }
            }else{
                echo "<p>Wrong Login! Please Enter the correct one.</p>";
            }
            unset($_POST);
    }
   
?>