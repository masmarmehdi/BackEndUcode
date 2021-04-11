<?php if(!isset($_SESSION)) session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>t02</title>
</head>
<body>
    <div id="passwordreminder">
    <h2>Password reminder</h2>
    <form id="form" action="index.php" method="POST">
        <div class="input">
        <input class="input" type="text" name="username" placeholder="Enter your username." required><br>
        </div>
        <div class="input">
        <input class="input" type="email" name="email" placeholder="Enter your email." required><br>
        </div>
        <input id="submitButton" type="submit" name="submit" value="Send me the password">
    </form>
    </div>
</body>
</html>
<?php
    include './model/Users.php';
    if(isset($_POST['submit'])){
            $user = new Users();
            $_SESSION['username'] = $_POST['username'];
            $_SESSION['email'] = $_POST['email'] ;
            if($user->find($_SESSION['username'])){
                if($user->email == $_SESSION["email"]){
                    $headers = '
                        From: mmasmar@ucode.com' . "\r\n" .
                        'Reply-To: mmasmar@ucode.com' . "\r\n" .
                        'X-Mailer: PHP/
                    ' . phpversion();
                    mail($user->email, 'Password reminder', "For your security please delete this email after remembering your password\nYour password is: ".$user->password, $headers);
                    echo "<p>Password has been sent successfully to your email! Go check it!</p>";
                }else{
                    echo "<p>Wrong email! Please Enter the correct one.</p>";
                }
            }else{
                echo "<p>Wrong username! Please Enter the correct one.</p>";
            }
            unset($_POST);
    }
?>