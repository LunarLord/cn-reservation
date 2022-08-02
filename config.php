<?php
error_reporting(E_ALL ^ E_NOTICE);  
session_start();
$dbHost = 'localhost';
$dbUser = 'root';
$dbPass = '';
$dbBd = 'cn_bd';

$dbconn = new mysqli($dbHost, $dbUser, $dbPass, $dbBd);
if (mysqli_connect_errno()) trigger_error(mysqli_connect_errno());
?>