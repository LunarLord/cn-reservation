<?php

function update_reservation(){
$dbHost = 'localhost';
$dbName = 'cn_bd';
$dbUser = 'root';
$dbPasw = '';
$conn = new PDO("mysql:host=$dbHost;dbname=".$dbName, $dbUser, $dbPasw);
$usuario = 'usuario';
$email = 'quality@qualitytechnology.com.br';
$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

if(!empty($dados['day1'])) {
  $query_update = "UPDATE `mesas` SET `user` = '$usuario', `email` = '$email' WHERE `mesas`.`position` = '$dados[day1]' AND `mesas`.`day` = '1'";
  $register = $conn->prepare($query_update);
  $register->execute();
}
if(!empty($dados['day2'])) {
  $query_update = "UPDATE `mesas` SET `user` = '$usuario', `email` = '$email' WHERE `mesas`.`position` = '$dados[day2]' AND `mesas`.`day` = '2'";
  $register = $conn->prepare($query_update);
  $register->execute();
}
if(!empty($dados['day3'])) {
  $query_update = "UPDATE `mesas` SET `user` = '$usuario', `email` = '$email' WHERE `mesas`.`position` = '$dados[day3]' AND `mesas`.`day` = '3'";
  $register = $conn->prepare($query_update);
  $register->execute();
}
if(!empty($dados['day4'])) {
  $query_update = "UPDATE `mesas` SET `user` = '$usuario', `email` = '$email' WHERE `mesas`.`position` = '$dados[day4]' AND `mesas`.`day` = '4'";
  $register = $conn->prepare($query_update);
  $register->execute();
}
if(!empty($dados['day5'])) {
  $query_update = "UPDATE `mesas` SET `user` = '$usuario', `email` = '$email' WHERE `mesas`.`position` = '$dados[day5]' AND `mesas`.`day` = '5'";
  $register = $conn->prepare($query_update);
  $register->execute();
}}

?>