<?php
function getConnexion(){
  $mysqli = new Mysqli('localhost','root',"",'ejemplo');
  if($mysqli->connect_errno) exit('Error en la conexion' .$mysqli->connect_errno);
  $mysqli->set_charset('utf8');
  return $mysqli;
}

 ?>
