<?php
$config = array();

if (file_exists("config/config.ini")){
    $config = parse_ini_file('config/config.ini', true);

}else{
  //estas son las ineas que debe de tener config.ini
    echo "Ini not found";
    $config['bd'] = "sirevi";
    $config['bdusr'] = “root”;
    $config['bdpass'] = "";
    $config['host'] = "localhost";
}
$conexion = mysqli_connect($config['host'],$config['bdusr'],$config['bdpass'],$config['bd']);
$base=new PDO("mysql:host=".$config['host']."; dbname=".$config['bd'],$config['bdusr'],$config['bdpass']);
$query_pais = mysqli_query($conexion, "select * from pais order by nombre ASC");

$query_provincia = mysqli_query($conexion, "select * from provincia order by nombre ASC");

$query_sendero = mysqli_query($conexion, "select * from sendero order by nombre ASC");

$query_sector = mysqli_query($conexion, "select * from sector order by nombre ASC");

$query_asp = mysqli_query($conexion, "select * from asp order by nombre ASC");

?>
