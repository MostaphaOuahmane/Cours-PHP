<?php 
require_once'../inc/functions.php';
//debug($GLOBALS);
echo'<h1> cours Php- $_Session </h1>';
session_start();
$_SESSION['pseudo']='Tintin';
$_SESSION['mdp']='Tintin2020';
$_SESSION['email']='Tintin@gmail.com';
echo'<p> la</p>';
debug($_SESSION)

?>