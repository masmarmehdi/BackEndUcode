<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Session for new</title>
</head>
<body>
    <h1>Session for new</h1>
    <form action = "index.php" method="post" id="form1">
        <fieldset>
            <legend>About HERO</legend>
            Real Name : <input type="text" name="name" placeholeder="input your name" >
            Current Alias : <input type="text" name="alias" placeholder="Alias" >
            Age : <input type="age" name="age" min="1", max="100" ><br><br>
            About : <textarea name="description" cols="30" rows="10" ></textarea><br><br>
            Photo : <input type="file" name="file">
        </fieldset>
        <fieldset>
            <legend>Powers</legend>
            <input type="checkbox" name="experience[]" value="strength"> Strength
            <input type="checkbox" name="experience[]" value="speed"> Speed
            <input type="checkbox" name="experience[]" value="intelligence"> Intelligence
            <input type="checkbox" name="experience[]" value="teleportation"> Teleportation
            <input type="checkbox" name="experience[]" value="immortal"> Immortal
            <input type="checkbox" name="experience[]" value="another"> Another<br>
            Level of control : <input type="range" name="level" value = "0">
        </fieldset>
        <fieldset>
            <input type="radio" name="purpose[]" value="1" id="unknown">UNKNOWN
            <input type="radio" name="purpose[]" value="2" id="ghost">LIKE A GHOST
            <input type="radio" name="purpose[]" value="3" id="comics">I AM IN COMICS
            <input type="radio" name="purpose[]" value="4" id="haveFun">I HAVE FUN CLUB
            <input type="radio" name="purpose[]" value="5" id="superstar">SUPERSTAR
        </fieldset>
        <input type="reset" value="CLEAR">
        <input type="submit" value="SEND">
    </form>
    <div style="padding:10px;font-size:20px;">
        <?php
            $image = $_POST['file'];
            echo "<form action='index.php' method='post' id='form2'><style>#form2{display:none;}</style>";
            echo "name: " .$_POST['name'] . "<br>";
            echo "alias: " .$_POST['alias'] . "<br>";
            echo "age: " .$_POST['age'] . "<br>";
            echo "description: ". $_POST['description']. "<br>";
            echo "photo : <img src=\"$image\"><br>";
            $experience = $_POST['experience']; 
            $experienceCount = 0;
            for($i = 0; $i < 6; $i++){
                if(isset($experience[$i])){
                    
                    $experienceCount++;
                }
            }
            echo "experience: " . $experienceCount . "<br>";
            echo "level: " .$_POST['level'] . "<br>";
            $purpose = $_POST['purpose'];
            for($i = 0; $i < 5 ; $i++){
                if(isset($purpose[$i])){
                    echo "<style>#form2{display:block;}#form1{display:none}</style>";
                    $purposeFinal = $purpose[$i];
                }
            }
            echo "purpose : " . $purposeFinal . "<br><form action='forget' method='post'>
            <input type='submit' value='FORGET'>
        </form></form>";
        ?>
        
    </div>
    
</body>
</html>