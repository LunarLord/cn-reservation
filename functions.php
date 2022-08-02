<?php
session_start();
function selectrows1($dbconn){
  $select = $dbconn->query("SELECT * FROM mesas WHERE user IS NULL AND day = '1'");
  $result = mysqli_num_rows($select);
  echo $result;
  $select->free();
}
function selectrows2($dbconn){
  $select = $dbconn->query("SELECT * FROM mesas WHERE user IS NULL AND day = '2'");
  $result = mysqli_num_rows($select);
  echo $result;
  $select->free();
}
function selectrows3($dbconn){
  $select = $dbconn->query("SELECT * FROM mesas WHERE user IS NULL AND day = '3'");
  $result = mysqli_num_rows($select);
  echo $result;
  $select->free();
}
function selectrows4($dbconn){
  $select = $dbconn->query("SELECT * FROM mesas WHERE user IS NULL AND day = '4'");
  $result = mysqli_num_rows($select);
  echo $result;
  $select->free();
}
function selectrows5($dbconn){
  $select = $dbconn->query("SELECT * FROM mesas WHERE user IS NULL AND day = '5'");
  $result = mysqli_num_rows($select);
  echo $result;
  $select->free();
}
function reservadia1($dbconn){
  exec('wmic COMPUTERSYSTEM Get domain', $domain);
  $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
  $select = $dbconn->query("SELECT * FROM mesas WHERE user IS NULL AND day = '$dados[1]' ");
  if ($result=mysqli_fetch_array($select)){
    $dbconn->query("UPDATE mesas SET user = '$_SESSION[name]', domain = '$domain[1]' WHERE id = '$result[id]'");
    
}
}
function reservadia2($dbconn){
  exec('wmic COMPUTERSYSTEM Get domain', $domain);
  $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
  $select = $dbconn->query("SELECT * FROM mesas WHERE user IS NULL AND day = '$dados[2]' ");
  if ($result=mysqli_fetch_array($select)){
    $dbconn->query("UPDATE mesas SET user = '$_SESSION[name]', domain = '$domain[1]' WHERE id = '$result[id]'");
    
}
}
function reservadia3($dbconn){
  exec('wmic COMPUTERSYSTEM Get domain', $domain);
  $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
  $select = $dbconn->query("SELECT * FROM mesas WHERE user IS NULL AND day = '$dados[3]' ");
  if ($result=mysqli_fetch_array($select)){
    $dbconn->query("UPDATE mesas SET user = '$_SESSION[name]', domain = '$domain[1]' WHERE id = '$result[id]'");
    
}
}
function reservadia4($dbconn){
  exec('wmic COMPUTERSYSTEM Get domain', $domain);
  $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
  $select = $dbconn->query("SELECT * FROM mesas WHERE user IS NULL AND day = '$dados[4]' ");
  if ($result=mysqli_fetch_array($select)){
    $dbconn->query("UPDATE mesas SET user = '$_SESSION[name]', domain = '$domain[1]' WHERE id = '$result[id]'");
    
}
}
function reservadia5($dbconn){
  exec('wmic COMPUTERSYSTEM Get domain', $domain);
  $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
  $select = $dbconn->query("SELECT * FROM mesas WHERE user IS NULL AND day = '$dados[5]' ");
  if ($result=mysqli_fetch_array($select)){
    $dbconn->query("UPDATE mesas SET user = '$_SESSION[name]', domain = '$domain[1]' WHERE id = '$result[id]'");
    
}
}

function disabled1($dbconn){
  $select = $dbconn->query("SELECT user, day FROM mesas WHERE user = '$_SESSION[name]' AND day = '1' ");
  if($result=mysqli_fetch_object($select) != null){
    echo "disabled";
    $select->free();
  }
}
function disabled2($dbconn){
  $select = $dbconn->query("SELECT user, day FROM mesas WHERE user = '$_SESSION[name]' AND day = '2' ");
  if($result=mysqli_fetch_object($select) != null){
    echo "disabled";
    $select->free();
  }
}
function disabled3($dbconn){
  $select = $dbconn->query("SELECT user, day FROM mesas WHERE user = '$_SESSION[name]' AND day = '3' ");
  if($result=mysqli_fetch_object($select) != null){
    echo "disabled";
    $select->free();
  }
}
function disabled4($dbconn){
  $select = $dbconn->query("SELECT user, day FROM mesas WHERE user = '$_SESSION[name]' AND day = '4' ");
  if($result=mysqli_fetch_object($select) != null){
    echo "disabled";
    $select->free();
  }
}
function disabled5($dbconn){
  $select = $dbconn->query("SELECT user, day FROM mesas WHERE user = '$_SESSION[name]' AND day = '5' ");
  if($result=mysqli_fetch_object($select) != null){
    echo "disabled";
    $select->free();
  }
}
function limpar($dbconn){
  $mysql = $dbconn->query("UPDATE mesas SET user = NULL, domain = NULL, dateup = NULL");
}
function reagendar($dbconn){
  $mysql = $dbconn->query("UPDATE mesas SET user = NULL, domain = NULL, dateup = NULL WHERE user ='$_SESSION[name]'");
}


?>