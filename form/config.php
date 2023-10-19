<?php 
session_start();

$host = "localhost";
$user = "root";
$pass = "";
$database = "register";


$dsn = "mysql:host=" . $host . ";dbname=" . $database;
$pdo = new PDO($dsn, $user, $pass);
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

date_default_timezone_set("Etc/GMT-8");




