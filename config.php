<?php
$dbHost = 'localhost';
$dbName = 'cn_bd';
$dbUser = 'root';
$dbPasw = '';
$conn = new PDO("mysql:host=$dbHost;dbname=".$dbName, $dbUser, $dbPasw);
?>