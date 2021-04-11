<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>t00</title>
</head>
<body>
    <div id="signup">
        <h2>Sign up</h2>
        <form action="registration.php" method="POST">
            <div class="input">
                Username*<br>
            <input class="input" type="text" name="username" placeholder="Enter a username." required><br>
            </div>
            <div class="input">
                Full Name*<br>
            <input class="input" type="text" name="fullName" placeholder="Enter your full name." required><br>
            </div>
            <div class="input">
                Email Address*<br>
            <input class="input" type="email" name="email" placeholder="Enter your email address." required><br>
            </div>
            <div class="input">
                Password*<br>
            <input class="input" type="password" name="password" placeholder="Enter your password." required><br>
            </div>
            <div class="input">
                Confrim Password*<br>
            <input class="input" type="password" name="confirmPassword" placeholder="Confirm your password." required><br>
            </div>
            <input id="submitButton" type="submit" name="submit" value="Apply">
        </form>
            <br>Already have account? <a href="login.php">Login</a><br>
        </div>
    </div>
</body>
</html>
<?php
    include './models/Users.php';
    if(isset($_POST['submit'])){
        if($_POST['password'] == $_POST['confirmPassword']){
            $user = new Users();
            $user->login = $_POST['username'];
            $user->full_name =  $_POST['fullName'];
            $user->password = $_POST['password'];
            $user->email = $_POST['email'];
            $user->save();
            unset($_POST);
        }
    }
?>