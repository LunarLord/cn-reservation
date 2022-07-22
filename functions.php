<?php
function update_reservation(){
$usuario = 'user';
$email = 'quality@qualitytechnology.com.br';
include("config.php");


if(!empty($dados['day1'])) {
  $query_update = "UPDATE `mesas` SET `user` = '$usuario', `email` = '$email' WHERE `mesas`.`position` = '$dados[day1]' AND `mesas`.`day` = '1'";
  $register = $conn->query($query_update);
  $register->execute();
}
if(!empty($dados['day2'])) {
  $query_update = "UPDATE `mesas` SET `user` = '$usuario', `email` = '$email' WHERE `mesas`.`position` = '$dados[day2]' AND `mesas`.`day` = '2'";
  $register = $conn->query($query_update);
  $register->execute();
}
if(!empty($dados['day3'])) {
  $query_update = "UPDATE `mesas` SET `user` = '$usuario', `email` = '$email' WHERE `mesas`.`position` = '$dados[day3]' AND `mesas`.`day` = '3'";
  $register = $conn->query($query_update);
  $register->execute();
}
if(!empty($dados['day4'])) {
  $query_update = "UPDATE `mesas` SET `user` = '$usuario', `email` = '$email' WHERE `mesas`.`position` = '$dados[day4]' AND `mesas`.`day` = '4'";
  $register = $conn->query($query_update);
  $register->execute();
}
if(!empty($dados['day5'])) {
  $query_update = "UPDATE `mesas` SET `user` = '$usuario', `email` = '$email' WHERE `mesas`.`position` = '$dados[day5]' AND `mesas`.`day` = '5'";
  $register = $conn->query($query_update);
  $register->execute();
}}

?>