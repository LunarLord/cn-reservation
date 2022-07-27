<?php 

$dbHost = 'localhost';
$dbUser = 'root';
$dbPass = '';
$dbBd = 'cn_bd';

$dbconn = new mysqli($dbHost, $dbUser, $dbPass, $dbBd);
if (mysqli_connect_errno()) trigger_error(mysqli_connect_errno());
?>