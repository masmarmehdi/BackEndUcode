<?php session_start(); error_reporting(0);?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1>Files</h1>
    <form action="index.php" method="post">
        File name : <input type="text" name="file" required>
        Content : <textarea name="content" rows="3" cols="10"></textarea>
        <input type="submit" value="Create file">
    </form>
    <?php
    include 'test.php';
    include 'Filelist.php';
    include 'File.php';
        $file = $_POST['file'];
        $content = $_POST['content'];
        $delete = $_POST['delete'];
        spl_autoload_register("autoload");
        function emptyDir($dir){
            if(readable($dir)){
                return (count(scandir($dir)) == 2);
            }
            else{
                return NULL;
            }
        }
        if(($file && $content) == true){
            $newFile = new File('tmp/'. $file);
            $newFile->is_writeable($content);
        }
        $list = new FilesList("tmp/");
        echo $list->toList() . "\n";
        $getFile = $_GET['file'];
        if($_GET){
            $_SESSION['file'] = $getFile;
            $sessionFile = $_SESSION['file'];
            echo "
            <h1>Selected file: '<em>$file</em>'</h1>
            <form action='index.php' method='post'>
                <style>display:none;<input type='text name='delete' value='true'</style>
                <input type='submit' value='Delete file'>
            </form>
            Content : " . file_get_contents('tmp/'.$sessionFile);
        }
        if($delete = 'true'){
            unlink('tmp/'.$sessionFile);
            if(emptyDir('tmp')){
                rmdir('tmp');
            }
            session_destroy();
            header("Refresh:0");
        }
    ?>
</body>
</html>