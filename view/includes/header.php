<!DOCTYPE html>

<html lang="es">
<head>
	<meta charset="utf-8"/>
		<meta name="viewport" content="width= device-width, user-scale=no, initial-scale=1.0, minimum-scale=1.0">
	<title>Sistema de Informacion para Registro de Visitacion</title>
	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"><!--PARA LOS ICONOS-->

	<link rel="stylesheet" href="/assets/style.css" >
	<!-- Compiled and minified CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">
	<!-- Compiled and minified JavaScript -->
	<!--ME DA LA PROPIEDAD DE HACER MAS PEQUENO EL AREA DONDE ESCRIBO -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>
	</head>
	<script>
	$(document).ready(function() {
		$('select').material_select('destroy');

		$('.collapsible').collapsible({
		 accordion : false // A setting that changes the collapsible behavior to expandable instead of the default accordion style
	 	});

		$(".button-collapse").sideNav({
		//		menuWidth: 400, // Ancho del sideNav
	//  		edge: 'right', // Se elije que extremo de la ppantalla se abre el sideNav
			}
		);
		$('select').material_select();

		$('.slider').slider({full_width: true});
	});



	</script>
<body>

<div class="container" >

	<header >
		<div>
	  <nav  class="z-depth-3" class="top-nav" >
	    <div  class="container" >
	      <div class="nav-wrapper"><a  class="page-title"></a>
					<ul>
					<li><a href="#" title="Perfil" class="hide-on-med-and-down"><i  class="small material-icons">settings</i><span class=""></span></a></li>
					<li><a href="" title="Cerrar sesión" class="hide-on-med-and-down"> <i  class="small material-icons">settings_power</i><span class=""></span></a></li>

					<li><a href="#"><span class=""><i class="icon icon-home">home </i></span></a></li>


				</ul>
					<a href="#" class="brand-logo right"><span >SIREVI</span></a>
					<span class="hide-on-large-only">
						<ul id="nav-mobile" class="left hide-on-small-only">



							<li><a href="index.php" title="Inicio"><i class="small material-icons hide-on-large-only">home</i> <span class="hide-on-med-and-down">Inicio</span></a></li>
		            <li><a href="index.php?c=Visitacion" title="Visitacion"><i class="small material-icons hide-on-large-only">assignment</i> <span class="hide-on-med-and-down">Visitación</span></a></li>
		            <li><a href="#" title="Reportes"> <i class="small material-icons hide-on-large-only">description</i><span class="hide-on-med-and-down">Reportes</span></a></li>
		            <li><a href="index.php?c=Usuario" title="Usuarios"><i class="small material-icons hide-on-large-only">supervisor_account</i> <span class="hide-on-med-and-down">Usuarios</span></a></li>
		            <li><a href="index.php?c=Sector" title="Sectores"><i class="small material-icons hide-on-large-only">view_quilt</i><span class="hide-on-med-and-down">Sectores</span></a></li>
		            <li><a href="index.php?c=Sendero" title="Senderos"><i class="small material-icons hide-on-large-only">swap_calls</i> <span class="hide-on-med-and-down">Senderos</span></a></li>
		            <li><a href="index.php?c=ASP" title="Áreas Protegidas"> <i class="small material-icons hide-on-large-only">perm_media</i><span class="hide-on-med-and-down">Áreas Protegidas</span></a></li>
		          </ul></span>


	      </div>
	      <a href="#" data-activates="slide-out" title="Menú"  class="button-collapse"><i title="Menu" style="color:white" class=" small material-icons">toc</i></a>
	    </div>

	  </nav>
</div>
	<!--===============================================================================================================-->


	<!--==================================   Inicio de la barra lateral y desplegable ===================================================-->
	  <ul id="slide-out" class="side-nav fixed">
	        <li><div class="userView"><!-- Imagen avatar e informacion -->
	          <img class="background" src="assets/img/CasonaSantaRosa.jpg">
	          <a href="#!user"><img class="circle" src="assets/img/yo.JPG"></a>
	          <a href="#!name"><span class="white-text name">Alex M.Luna</span></a>
	          <a href="#!email"><span class="white-text email">cheeto12@gmail.com</span></a></div>
	        </li>

	        <!--===============================>> Link para la pagina del inicio <<==========================================-->

					<li>&nbsp;</li>
	  		<!--============================= Fin de la Barra Inicio ===========================================================-->

	  	<hr>
	  	<li class="divider"></li>
	  	<!--============================= Inicio de los modulos del sistemas ====================================================-->
			<li><a href="index.php" title="Inicio"><i class="small material-icons">home</i> <span class="">Inicio</span></a></li>
	  	<li><a href="index.php?c=Visitacion" title="Visitación"><i class="small material-icons">assignment</i> <span class="">Visitación</span></a></li>
	  	<li><a href="#" title="Reportes"> <i class="small material-icons ">description</i><span class="">Reportes</span></a></li>
	  	<li><a href="index.php?c=Usuario" title="Usuarios"><i class="small material-icons">supervisor_account</i> <span class="">Usuarios</span></a></li>
	  	<li><a href="index.php?c=Sector" title="Sectores"><i class="small material-icons">view_quilt</i><span class="">Sectores</span></a></li>
	  	<li><a href="index.php?c=Sendero" title="Senderos"><i class="small material-icons">swap_calls</i> <span class="">Senderos</span></a></li>
	  	<li><a href="index.php?c=ASP" title="Áreas Protegidas"> <i class="small material-icons">terrain</i><span class="">Áreas Protegidas</span></a></li>
	  	<li><a href="#"> <i class="small material-icons">settings</i><span class="">Perfil</span></a></li>
	  	<li><a href=""> <i class="small material-icons">settings_power</i><span class="">Cerrar sesión</span></a></li>
		</ul><!--Fin del slide out-->

	</header>
	<!--============================= Fin de la lista de links para informacion ===========================================================-->
