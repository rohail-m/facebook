<?php
session_start();
include './config.php';
include './boot_css.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
</head>
<body>
    <?php
    if(!isset($_SESSION['check_logged'])){
        
        header("Location: $baseurl");
    }else{
        echo "<h1>Asalam o Alaikum {$_SESSION['check_logged']}</h1>";
    }
    ?>

    <a href="./logout.php" class="btn btn-danger">
        logout
    </a>
</body>
</html>