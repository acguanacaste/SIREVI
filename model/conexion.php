<?php

  function Conectar(){
	try{
 $conexion = new PDO('mysql:host=localhost;dbname=sirevi;charset=utf8', 'root', '');
    }
    catch(PDOException $e ){
    	echo 'No se pudo conectar';
    	exit;
    }
    return $conexion;
}
