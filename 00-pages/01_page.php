<!DOCTYPE html>
<?php

$variable1 = "cours PHP 7 ";
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <?php echo "<title> Une page  PHP </title>";
   ?>
</head>
<body>
    <?php
    echo "<h1> suresnes 2021 - $variable1 </h1>";    ?>
    <hr>
    <p>utilisation de vriable  en PHP et de passages PHP mon fichier HTML , on trvaille aussi avec :
        <?php
        $variable2 = "mySQL";
        echo $variable2;
        echo"</p><hr>";
         // le caractère de concaténation en PHP est le "."
        echo "<p>La variable2 est de type : ". gettype($variable2) .".</p>";
        $variable2 ="Minute papillon !";
        echo"<p> $variable2 </p>";
        $variable2 = "coucou!"
        ?>
    
        <hr>
        <?= // passage PHP plus court
        "<blockquote> $variable2 , $variable2 , on entand le $variable2 </blockquote>";
        ?>
        <hr>
        <h2>print_r( )</h2>
        <h3>la liste des variable "GLOBALS" :</h3>
        <?php  print_r($GLOBALS) ?>
        <hr>
        <p>le continue de variabl $_COOKIE</p>
        <?php print_r($_COOKIE)?>
        <hr>
        <p>le continue de variabl $_ENV</p>
        <?php print_r($_ENV)?>
        <hr>
        <p>le continue de variabl $_SERVER['SERVER_SOFTWARE']</p>
        <?php print_r($_SERVER['SERVER_SOFTWARE'])?>
</body>
</html>