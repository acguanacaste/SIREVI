<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8"/>
		<meta name="viewport" content="width= device-width, user-scale=no, initial-scale=1.0, minimum-scale=1.0">
	<title>Sistema de Informacion para Registro de Visitacion</title>
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
          $(".button-collapse").sideNav({
            //		menuWidth: 400, // Ancho del sideNav
            //  		edge: 'right', // Se elije que extremo de la ppantalla se abre el sideNav
 					});

					$('.derecha').sideNav({
						 menuWidth: 500,	 // Default is 300
							edge: 'right', // Choose the horizontal origin
			//				closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
			//				draggable: true, // Choose whether you can drag to open on touch screens,
			//				onOpen: function(el) { /* Do Stuff* / }, // A function to be called when sideNav is opened
			//				onClose: function(el) { /* Do Stuff* / }, // A function to be called when sideNav is closed
						}
					);


          $('select').material_select();
					$('.slider').slider({full_width: true});
					/*Para la funcionalidad de las fechas */
				  $('.datepicker').pickadate({
						selectMonths: true, // Creates a dropdown to control month
						selectYears: 15 // Creates a dropdown of 15 years to control year
					});
						/*$(".dropdown-button").dropdown(hover:false);*/
          $('.collapsible').collapsible({
                      accordion : false // A setting that changes the collapsible behavior to expandable instead of the default accordion style
                    });

/*=======================================================================================================================================*/
					$('input.autocomplete').autocomplete({
				     data: {
				       "Argentina": null, "Australia":null, "Austria":null,
							 "Bélgica":null,"Bielorrusia":null,"Brasil":null,
							 "Canadá":null,"China":null,"Colombia":null,
							 "Dinamarca":null,
							 "Ecuador":null, "El Salvador":null, "Escocia":null, "España":null, "Estados Unidos":null, "Estonia":null,
							 "Finlandia":null, "Francia":null,
							 "Guatemala":null,
							 "Holanda":null, "Honduras":null,
							 "Inglaterra":null, "Israel":null, "Italia":null,
							 "Japón":null,
							 "Líbano":null,
							 "México":null,
							 "Nicaragua":null,
							 "Panamá":null,	 "Portugal":null,
							 "R. Checa":null, "Rusia":null,
							 "Suecia":null, "Suiza":null,
				       "Venezuela": null,
				       "Costa Rica": 'http://placehold.it/250x250'
				     },
				     limit: 3, // The max amount of results that can be shown at once. Default: Infinity.
				     onAutocomplete: function(val) {
				       // Callback function when value is autcompleted.
				     },
				     minLength: 4, // The minimum length of the input for the autocomplete to start. Default: 1.
				   });

/*==========================================================================================================================================*/

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

<div class="container" >

	<header >
		<div>
	  <nav  class="top-nav teal darken-4 z-depth-3">
	    <div  class="container" >
	      <div class="nav-wrapper"><a  class="page-title"></a>
					<ul>
					<li><a href="#" title="Perfil" class="hide-on-med-and-down"><i  class="small material-icons">settings</i><span class=""></span></a></li>
					<li><a href="" title="Cerrar sesión" class="hide-on-med-and-down"> <i  class="small material-icons">settings_power</i><span class=""></span></a></li>

			<!--		<li><a href="#"><span class=""><i class="icon icon-home">home </i></span></a></li>-->


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
		            <li><a href="index.php?c=ASP" title="Áreas Protegidas"> <i class="small material-icons hide-on-large-only">perm_media</i><span class="hide-on-med-and-down">Áreas Protegidas</span></a></li>
		          </ul></span>


	      </div>
	      <a href="#" data-activates="slide-out" title="Menú"  class="button-collapse"><i title="Menu" style="color:white" class=" small material-icons">toc</i></a>
	    </div>

	  </nav>
</div>
	<!--===============================================================================================================-->


	<!--==================================   Inicio de la barra lateral y desplegable ===================================================-->
	  <ul id="slide-out" class="side-nav fixed blue-grey darken-2 ">
	        <li><div class="userView"><!-- Imagen avatar e informacion -->
	          <img class="background" src="assets/img/CasonaSantaRosa.jpg">
	          <a href="#!user"><img class="circle" src="assets/img/yo.JPG"></a>
	          <a href="#!name"><span class="white-text name">Alex M.Luna</span></a>
	          <a href="#!email"><span class="white-text email">cheeto12@gmail.com</span></a></div>
	        </li>

	        <!--===============================>> Link para la pagina del inicio <<==========================================-->

			  		<!--============================= Fin de la Barra Inicio ===========================================================-->

	  	<hr>
	  	<li class="divider"></li>
	  	<!--============================= Inicio de los modulos del sistemas ====================================================-->
			<li><a href="index.php" title="Inicio"><i class="small material-icons white-text">home</i> <span class="white-text">Inicio</span></a></li>
	  	<li><a href="index.php?c=Visitacion" title="Visitación"><i class="small material-icons white-text">assignment</i> <span class="white-text">Visitación</span></a></li>
	  	<li><a href="#" title="Reportes"> <i class="small material-icons white-text">description</i><span class="white-text">Reportes</span></a></li>
	  	<li><a href="index.php?c=Usuario" title="Usuarios"><i class="small material-icons white-text">supervisor_account</i> <span class="white-text">Usuarios</span></a></li>
	  	<li><a href="index.php?c=Sector" title="Sectores"><i class="small material-icons white-text">view_quilt</i><span class="white-text">Sectores</span></a></li>
	  	<li><a href="index.php?c=Sendero" title="Senderos"><i class="small material-icons white-text">swap_calls</i> <span class="white-text">Senderos</span></a></li>
	  	<li><a href="index.php?c=ASP" title="Áreas Protegidas"> <i class="small material-icons white-text">terrain</i><span class="white-text">Áreas Protegidas</span></a></li>

		</ul><!--Fin del slide out-->

	</header>
	<!--============================= Fin de la lista de links para informacion ===========================================================-->