<?php
$host = "localhost";
$user = "root";
$pass = "rubik";
$database = "upload_imagens";

$connection_string = 'mysql:host=' . $host . ';dbname=' . $database;

$pdo = new PDO($connection_string, $user, $pass);

$success_message = "<script type='text/javascript'>console.log('Conectado com sucesso!')</script>";
$error_message =  "<script type='text/javascript'>console.log('Falha ao conectar!')</script>";

$pdo ? print($success_message) : print($error_message);
