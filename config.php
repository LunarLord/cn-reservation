<?php
$dbHost = 'localhost';
$dbName = 'cn_bd';
$dbUser = 'root';
$dbPasw = '';

try{
$conn = new PDO("mysql:host=$dbHost;dbname=".$dbName, $dbUser, $dbPasw);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e) {
    echo 'ERRO AO CONECTAR COM O BD' . $e->getMessage();
}
?>