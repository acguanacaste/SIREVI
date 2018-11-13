<?php
require_once 'model/conexion.php';

function getProvincias(){
  $mysqli = getConn();
  $id = $_POST['id'];
  $query = "SELECT * FROM `provincia` WHERE id_lista = $id";
  $result = $mysqli->query($query);
  $provincias = '<option value="0">Elige una opción</option>';
  while($row = $result->fetch_array(MYSQLI_ASSOC)){
    $provincias .= "<option value='$row[id]'>$row[nombre]</option>";
  }
  return $provincias;
}
echo getProvincias();
