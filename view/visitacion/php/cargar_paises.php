<?php
require_once 'model/conexion.php';

function getPaises(){
  $mysqli = getConn();
  $query = 'SELECT * FROM `pais`';
  $result = $mysqli->query($query);
  $paises = '<option value="0">Elige una opción</option>';
  while($row = $result->fetch_array(MYSQLI_ASSOC)){
    $paises .= "<option value='$row[id]'>$row[nombre]</option>";
  }
  return $paises;
}

echo getPaises();
