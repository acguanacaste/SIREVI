<?php
  require_once 'model/conexion.php';
  

    $pagina=isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;

    $regPagina=10;//Esta variable lo que me permite es limitar la cantidad de registros a 10.

    $inicio=($pagina>1) ? (($pagina * $regPagina)- $regPagina):0;
    //Esta operacion funciona para hacer el calculo de donde se inician
    //los registros si el usuario por ejemplo esta en la pagina #2...
/*===================================================================================================================================*/
    $registros=$this->$pdo->prepare("SELECT SQL_CALC_FOUND_ROWS FROM visitacion LIMIT $inicio, $regPagina");
    $registros->execute();
    $registros=$registros->fetchAll();

    $totalRegistros=$pdo->query("SELECT FOUND_ROWS() AS total");
    $totalRegistros=$totalRegistros->fetch()['total'];

    $numeroPaginas=ceil($totalRegistros/$regPagina);//Calcula el numero de paginas y "ceil()" me redondea el numero al siguiente mas alto.


 ?>
