<?php
$host = 'localhost';
//le nom de la BDD
$database = 'entreprise';
$user = 'root';
$password = '';

//nom de la variable de connexion à la BDD ENT = entreprise;
try {
$pdoENT = new PDO(
    'mysql:host=localhost;dbname=entreprise',
    'root',
    '',
    array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
    )
);
echo 'Connection BDD OK!';}
catch (PDOException){
    echo 'Connection BDD impossible !';
}