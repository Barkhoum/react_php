<?php
session_start();
var_dump($_POST);
$login = $_POST['login'];
$psw = $_POST['psw'];

//interroger la base de données avec le login
//comparer le $psw avec le mot de passe de la base de données

//si connecter alors mémoriser en session le login et 
$_SESSION['login'] = $login;
header('Location: index.php');
//si pas ok header ('Location: connect.php');