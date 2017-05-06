<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8"/>
		<meta name="viewport" content="width= device-width, user-scale=no, initial-scale=1.0, minimum-scale=1.0">
	<title>Sistema de Información para el Registro de Visitación</title>
	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"><!--PARA LOS ICONOS-->
	<!-- Compiled and minified CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">
	<!-- Compiled and minified JavaScript -->
	<!--ME DA LA PROPIEDAD DE HACER MAS PEQUENO EL AREA DONDE ESCRIBO -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>
	</head>
	<script>
	$(document).ready(function() {

		$('select').material_select('destroy');
		$('.datepicker').pickadate({
	 	selectMonths: true, // Creates a dropdown to control month
	 	selectYears: 15 // Creates a dropdown of 15 years to control year
 		});

		$(".button-collapse").sideNav({
		//		menuWidth: 400, // Ancho del sideNav
	//  		edge: 'right', // Se elije que extremo de la ppantalla se abre el sideNav
			}
		);
		$('select').material_select();
		$('.slider').slider({full_width: true});
		 $('.carousel').carousel();
	});

	</script>

<body>
<?php
session_start();
if(!isset($_SESSION["email"])){
echo "<script type='text/javascript'>alert('Usuario Incorrecto');</script>";
header("Location:?c=login&a=index");
}
?>

	<div class="container  grey lighten-3 col s12 m12 l12" >

		<header >
			<div class="container grey lighten-3 col s12 m12 l12">
	  	<nav  class="brown top-nav z-depth-3"  >
	    	<div  class="container" >
	      	<div class="nav-wrapper">
						<ul>
							<li><a href="index.php?c=Perfil" title="Perfil" class="hide-on-med-and-down"><i  class="small material-icons">settings</i><span class=""></span></a></li>
							<li><a href="?c=login&a=salir" title="Cerrar sesión" class="hide-on-med-and-down"> <i  class="small material-icons">settings_power</i><span class=""></span></a></li>
						</ul>
						<a href="#" class="brand-logo right hide-on-med-only"><span >SIREVI</span></a>
						<span class="hide-on-large-only">
							<ul id="nav-mobile" class="left hide-on-small-only">
								<li><a href="index.php" title="Inicio"><i class="small material-icons hide-on-large-only">home</i> <span class="hide-on-med-and-down">Inicio</span></a></li>
								<li><a href="index.php?c=Visitacion" title="Visitacion"><i class="small material-icons hide-on-large-only">assignment</i> <span class="hide-on-med-and-down">Visitación</span></a></li>
		            <li><a href="#" title="Reportes"> <i class="small material-icons hide-on-large-only">description</i><span class="hide-on-med-and-down">Reportes</span></a></li>
		            <li><a href="index.php?c=Usuario" title="Usuarios"><i class="small material-icons hide-on-large-only">supervisor_account</i> <span class="hide-on-med-and-down">Usuarios</span></a></li>
		            <li><a href="index.php?c=Sector" title="Sectores"><i class="small material-icons hide-on-large-only">view_quilt</i><span class="hide-on-med-and-down">Sectores</span></a></li>
		            <li><a href="index.php?c=Sendero" title="Senderos"><i class="small material-icons hide-on-large-only">swap_calls</i> <span class="hide-on-med-and-down">Senderos</span></a></li>
		            <li><a href="index.php?c=ASP" title="Áreas Protegidas"> <i class="small material-icons hide-on-large-only">terrain</i><span class="hide-on-med-and-down">Áreas Protegidas</span></a></li>
		  			</ul>
					</span>
				</div>
				<a href="#" data-activates="slide-out" title="Menú"  class="button-collapse"><i title="Menu" style="color:white" class=" small material-icons">toc</i></a>
			</div>
		</nav>
	</div>

	<!--===============================================================================================================-->


	<!--==================================   Inicio de la barra lateral y desplegable ===================================================-->
	<ul id="slide-out" class="side-nav fixed  grey lighten-1" style="transform: translateX(0%);">
		<li>
			<div class="userView"><!-- Imagen avatar e informacion -->
				<img class="background" src="assets/img/CasonaSantaRosa.jpg">
				<a href="#!user"><img class="circle" src="assets/img/yo.JPG"></a>
  			<a href="#!name"><span class="white-text name">Alex M.Luna</span></a>
				<a href="#!email"><span class="white-text email">cheeto12@gmail.com</span></a></div>
		</li>

<!--=================================================================================================================-->
<!--=================================================================================================================-->
	<hr>
		<li class="divider"></li>
			<ul style="height:450px;overflow-y:scroll;">
				<li><a alt="imagen no disponible" href="index.php?c=menuPrincipal" title="Inicio" class="waves teal darken-4"><i class="small material-icons white-text">home</i> <span style="@include transition(.3s);" class="white-text">Inicio</span></a></li>
				<li><a href="index.php?c=Visitacion" title="Visitación" class="waves-effect waves-teal active"><i class="small material-icons white-text">assignment</i><span class="" style="color:#263238">Visitación</span></a></li>
				<li><a href="#" title="Reportes"  class="waves-effect waves-teal active"><i class="small material-icons white-text">description</i><span class="" style="color:#263238">Reportes</span></a></li>
				<li><a href="index.php?c=Usuario" title="Usuarios"  class="waves-effect waves-teal active"><i class="small material-icons white-text">supervisor_account</i> <span class="" style="color:#263238">Usuarios</span></a></li>
				<li><a href="index.php?c=Sector" title="Sectores"  class="waves-effect waves-teal active"><i class="small material-icons white-text">view_quilt</i><span class="" style="color:#263238">Sectores</span></a></li>
				<li><a href="index.php?c=Sendero" title="Senderos"  class="waves-effect waves-teal active"><i class="small material-icons white-text">swap_calls</i> <span class="" style="color:#263238">Senderos</span></a></li>
				<li><a href="index.php?c=ASP" title="Áreas Protegidas"  class="waves-effect waves-teal active"> <i class="small material-icons white-text">terrain</i><span class="" style="color:#263238">Áreas Protegidas</span></a></li>
				<li><a href="index.php?c=Perfil"> <i class="small material-icons white-text waves-effect waves-teal active">settings</i><span class="" style="color:#263238">Perfil</span></a>
					<ul>
						<!--<li><a>Cambiar nombre de usuario</a></li>
						<li><a>Cambiar contrasena</a></li>-->
					</ul>
				</li>
				<li><a href=""> <i class="small material-icons white-text"  class="waves-effect waves-teal active">settings_power</i><span class="">Cerrar sesión</span></a></li>
			</ul>
		</ul><!--Fin del slide out-->



<!--INICIO DEL BOTON FLOTANTE PARA AGREGAR AGREGAR-->
		<div title="Ingreso Directo a Formularios de Registro" class="fixed-action-btn vertical click-to-toggle hide-on-large-only">
				<a class="btn-floating btn-small teal darken-4">
					<i class=" material-icons teal darken-4">add</i>
				</a>
				<ul>
					<li><a href="index.php?c=Visitacion&a=agregarRegistro" title="Registrar Visitación" class="btn-floating green"><i class="material-icons">assignment</i></a></li>
					<li><a href="index.php?c=Reportes&a=agregarReporte" title="Registrar Reportes" class="btn-floating brown"><i class="material-icons">description</i></a></li>
					<li><a href="index.php?c=Usuario&a=agregarRegistro" title="Registrar Usuarios" class="btn-floating brown darken-4 "><i class="material-icons">supervisor_account</i></a></li>
					<li><a href="index.php?c=Sector&a=agregarRegistro" title="Registrar Sectores" class="btn-floating grey"><i class="material-icons">view_quilt</i></a></li>
					<li><a href="index.php?c=Sendero&a=agregarRegistro" title="Registrar Senderos" class="btn-floating blue-grey darken-4"><i class="material-icons">swap_calls</i></a></li>
					<li><a href="index.php?c=ASP&a=agregarRegistro" title="Registrar Areas Protegidas" class="btn-floating blue"><i class="material-icons">terrain</i></a></li>

				</ul>
			</div>




</header>
	<!--============================= Fin de la lista de links para informacion ===========================================================-->
