<?php 
session_start();
include_once("config.php");
include_once("functions.php");
update_reservation();
echo 'Mesa reservada com sucesso!';
header("Refresh: 2; url = index.php"); ?>
