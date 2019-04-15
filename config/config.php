<?php
if (file_exists("configuration.local.php")){
    require_once "configuration.local.php";
}else{
  //estas son las ineas que debe de tener configuration.local.php
    $bd = "sirevi";
    $bdusr = "root";
    $bdpass = "";
    $host = "localhost";
}
$conexion = mysqli_connect($host,$bdusr,$bdpass,$bd);
$base=new PDO("mysql:host=localhost; dbname=sirevi","root","");
$query_pais = mysqli_query($conexion, "select * from pais order by nombre ASC");

$query_provincia = mysqli_query($conexion, "select * from provincia order by nombre ASC");

$query_sendero = mysqli_query($conexion, "select * from sendero order by nombre ASC");

$query_sector = mysqli_query($conexion, "select * from sector order by nombre ASC");

$query_asp = mysqli_query($conexion, "select * from asp order by nombre ASC");

?>
