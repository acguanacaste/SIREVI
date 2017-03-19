<?php

try{
	$base=new PDO("mysql:host=localhost; dbname=sirevi","root","");

	$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//Sentencia que me busca en la base de datos el email com usuario y la contrasena
	$sql="SELECT * FROM usuarios WHERE email= :login AND contrasena= :password";

	$resultado=$base->prepare($sql);

	$login=htmlentities(addslashes($_POST["login"]));//Lo que agarra del post
	$password=htmlentities(addslashes($_POST["password"]));//Lo que agarra del post

	$resultado->bindValue(":login", $login);
	$resultado->bindValue(":password", $password);

		$resultado->execute();

		$numero_registro=$resultado->rowcount();

		if($numero_registro!=0){
			//echo "<h2>adelante!!</h2>";

			session_start();
			$_SESSION["email"]=$_POST["login"];
			header("Location:?c=login&a=bienvenido");

		} else{
			header("location:index.php?error=1");
		}


}catch(Exception $e){
	die("error: " . $e->getMessage());
}

?>
