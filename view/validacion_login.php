<?php
try{
	$base=new PDO("mysql:host=localhost; dbname=sirevi","root","");

	$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//Sentencia que me busca en la base de datos el email com usuario y la contrasena
	$sql_usuario="SELECT * FROM usuarios WHERE email= :login AND contrasena= :password ";//AND estado == 0
	$sql_sector="SELECT * FROM sector where nombre = :sector;";

	$resultado_usuario=$base->prepare($sql_usuario);
	$resultado_sector=$base->prepare($sql_sector);

	$login=htmlentities(addslashes($_POST["login"]));//Lo que agarra del post
	$password=htmlentities(addslashes($_POST["password"]));//Lo que agarra del post
	$sector=htmlentities(addslashes($_POST["sector"]));

	$resultado_usuario->bindValue(":login", $login);
	$resultado_usuario->bindValue(":password", $password);
	$resultado_sector->bindValue(":sector", $sector);

	$resultado_usuario->execute();
	$resultado_sector->execute();


		$res_usuario = $resultado_usuario->fetchAll();
		$res_sector = $resultado_sector->fetchAll();


		$num_registro_usuario=$resultado_usuario->rowcount();
		$num_registro_sector=$resultado_sector->rowcount();




		if($num_registro_usuario!=0 && $num_registro_sector !=0){
			//echo "<h2>adelante!!</h2>";
			session_start();
			$usuarioActual = array(
				"id"=>$res_usuario[0]['id'],
				"email"=>$res_usuario[0]['email'],
				"nombre"=>$res_usuario[0]['nombre']." ".$res_usuario[0]['apellido'],
				"puesto"=>$res_usuario[0]['puesto'],
				"foto"=>$res_usuario[0]['foto'],

			);

			$_SESSION["email"]=$_POST["login"];
			$_SESSION['usuario']=$usuarioActual;


			$_SESSION['sector']=array(
				"id_Sector"=>$res_sector[0]['id'],
				"sectorNombre"=>$res_sector[0]['nombre'],
				"sectorId"=>$res_sector[0]['id'],
				"capacidadDiaria"=>$res_sector[0]['capacidad_diaria'],
				"areaSilvestreProtegida"=>$res_sector[0]['asp'],
				"adultoNacional"=>$res_sector[0]['adulto_nacional'],
				"ninoNacional"=>$res_sector[0]['nino_nacional'],
				"adultoExtranjero"=>$res_sector[0]['adulto_extranjero'],
				"ninoExtranjero"=>$res_sector[0]['nino_extranjero'],
				"estudiantes"=>$res_sector[0]['estudiantes'],
				"cambioDolar"=>$res_sector[0]['cambio_dolar']

//meter tipo decambio aqui hacer consulta y ponerlo aca
			);

			if ($_SESSION['usuario']['puesto'] == 1){
				header("Location:?c=login&a=AdminUser");
			}
			elseif ($_SESSION['usuario']['puesto'] == 2) {
				header("Location:?c=login&a=SectorManagerUser");
			}
			elseif ($_SESSION['usuario']['puesto'] == 3) {
				header("Location:?c=login&a=ReportsUser");
			}
			elseif ($_SESSION['usuario']['puesto'] == 4){
				header("Location:?c=login&a=VolunteeringUser");
			}
		}
		else{
			header("location:index.php?error=1");
		}
}
catch(Exception $e){
	die("error: " . $e->getMessage());
}
?>
