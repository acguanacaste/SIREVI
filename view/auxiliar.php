//Este metodo requiere 3 parametros el host donde esta la base de datos el usuario y la contrasena
mysql_connect('localhost','root',' ') or die("Error al conectar " . mysql_error());//password de BD vacia

//Aqui es donde se le da el nombre a la base de datos que se quiere conectar
mysql_select_db('sirevi') or die ("Error al seleccionar la Base de datos: " . mysql_error());

$result = mysql_query("SELECT * from usuarios where email='" . $usuario . "'");

if($row = mysql_fetch_array($result)){
	if($row['contrasena'] ==  $pass){
		session_start();
		$_SESSION['email'] = $usuario;
		header("Location: index.php?c=menuPrincipal");

	}else{
echo "primer else";
	/*	header("Location: index.html");*/
		exit();
	}
}else{
echo "segundo else";
/*	header("Location: index.html"); */
	exit();
}
