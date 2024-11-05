<?php
$host = 'localhost';
$dbname = 'dbserenatto';
$user = 'root';
$password = '';//digite a senha se tiver

try{
    $pdo = new PDO("mysql:host=$host; dbname=$dbname", 
    $user, $password);

    $pdo -> setAttribute(PDO:: ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);

    echo 'Conexão bem-sucedida';
}catch(PDOException $e){
    echo 'Erro ao conectar: ' . $e-> getMessage();
}


?>