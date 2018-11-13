<?php

$conexion = mysqli_connect("localhost","root","","sirevi");

$query_pais = mysqli_query($conexion, "select * from pais order by nombre ASC");

$query_provincia = mysqli_query($conexion, "select * from provincia order by nombre ASC");

$query_sendero = mysqli_query($conexion, "select * from sendero order by nombre ASC");

$query_sector = mysqli_query($conexion, "select * from sector order by nombre ASC");

$query_asp = mysqli_query($conexion, "select * from asp order by nombre ASC");

?>
