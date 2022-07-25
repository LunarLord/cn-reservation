<?php
$dbHost = 'localhost';
$dbName = 'cn_bd';
$dbUser = 'root';
$dbPasw = '';

$mysqli = new mysqli($dbHost,$dbUser,$dbPasw,$dbName);
if (mysqli_connect_errno()) trigger_error(mysqli_connect_errno());
?>