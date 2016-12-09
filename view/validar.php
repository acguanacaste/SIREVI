<?php
//El nombre de usuario va a aser el email que se almacena en lla BD
$usuario = $_POST['nnombre'];/*es igual a lo que nos envian desde el post*/

$pass = $_POST['npassword'];/*es igual a lo que nos envian desde el post*/

/*============================================================================================================*/
/*METODO QUE ME VALIDA SI ALGUNO DE LOS CAMPOS ESTA VACIO QUE ME REDIRECCIONE A LA PAGINA DESCRITA EN LA FUNCION header*/
if(empty($usuario) || empty($pass)){
	header("Location: indexLogin.php");/*PAGINA A LA QUE ME REDIRECCIONA*/
	exit();
}
/*===========================================================================================================*/



//Este metodo requiere 3 parametros el host donde esta la base de datos el usuario y la contrasena
mysql_connect('localhost','root','') or die("Error al conectar " . mysql_error());//password de BD vacia

//Aqui es donde se le da el nombre a la base de datos que se quiere conectar
mysql_select_db('login') or die ("Error al seleccionar la Base de datos: " . mysql_error());

$result = mysql_query("SELECT * from usuarios where username='" . $usuario . "'");

if($row = mysql_fetch_array($result)){
	if($row['password'] ==  $pass){
		session_start();
		$_SESSION['usuario'] = $usuario;
		header("Location: menu_principal.php");
	}else{
		echo "Primer else";
		header("Location: indexLogin.php");
		exit();
	}
}else{
	echo "segundo else";
	header("Location: indexLogin.php");
	exit();
}

?>
