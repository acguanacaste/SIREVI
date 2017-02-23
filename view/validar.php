<?php

/*VARIABLES QUE LES INGRESA EL VALOR DE LO QUE TIENE EL FORMULARIO LOGIN DE INGRASO*/
$usuario = $_POST['nnombre'];
$pass = $_POST['npassword'];
/*=============================================================================================================*/
echo $usuario;/*VALIDANDO LOS DATOS DE INGRESO*/
echo  $pass;
/*SI!!*/
/*============================================================================================================*/
/*METODO QUE ME VALIDA SI ALGUNO DE LOS CAMPOS ESTA VACIO QUE ME REDIRECCIONE A LA PAGINA DESCRITA EN LA FUNCION header*/
if(empty($usuario) || empty($pass)){
	header("Location: .php");/*PAGINA A LA QUE ME REDIRECCIONA*/
	exit();
}
/*===========================================================================================================*/
//echo $usuario;/*VALIDANDO AMBOS DATOS DE INGRESO*/
//echo  $pass;
/*SI!!*/
/*==================================================================================================*/
/*SE REALIZA LA CONEXION EN CASO DE QUE AMBAS VARIABLES HAYAN SIDO ENVIADAS*/
			mysql_connect('localhost','root') or die("Error al conectar " . mysql_error());
			echo $usuario;/*VALIDANDO AMBOS DATOS DE INGRESO*/
			echo  $pass;
			/*SI!!*/
/*====================================================================================================*/

/*PARA SELECCIONAR LA BASE DE DATOS*/
			mysql_select_db('sirevi') or die ("Error al seleccionar la Base de datos: " . mysql_error());
/**DELCRACION DE LA VARIABLE $result PARA LA CONSULTA*/
echo $usuario;/*VALIDANDO AMBOS DATOS DE INGRESO*/
echo  $pass;

			$result = mysql_query("SELECT * from usuarios where email ='" . $usuario . "'");
			/*LINEA QUE ME REVISA SI EL USUARIO ESTA EN LA BASE DE DATOS*/
			if($row = mysql_fetch_array($result)){

		/*SI LA XONTRASENA ES CORRECTA INGRESA*/
				if($row['password'] ==  $pass){
					echo "La contrasena es correcta";
					session_start();
					$_SESSION['email'] = $usuario;
					/*header("Location: contenido.php");*/
					header("Location: index.php?c=menuPrincipal");
				}else{
          echo "primer else nombre de usuario";
				//	header("Location: index.html");
					exit();
				}
			}else{
        echo "segundo else contrasena";
			//	header("Location: i");
				exit();
			}

?>
