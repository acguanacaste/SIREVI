<!DOCTYPE html>
<html lang="es">
<?php
session_start();
if(!isset($_SESSION["email"])){
echo "<script type='text/javascript'>alert('Usuario Incorrecto');</script>";
header("Location:?c=login&a=index");
}
?>
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width= device-width, user-scale=no, initial-scale=1.0, minimum-scale=1.0">
	<title>Sistema de Información para Registro de Visitación</title>
	<script  src="assets/data-tables/data-tables-script.js"></script>
	<script type="text/javascript" src="assets/data-tables/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="aseets/data-tables/data-tables-script.js"></script>
	<link href="assets/js/jquery.dataTables.min.css" type="text/css" rel="stylesheet" media="screen,projection">
	<link href="http://cdn.datatables.net/1.10.6/css/jquery.dataTables.min.css" type="text/css" rel="stylesheet" media="screen,projection">


	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript">
/*================================================================================================*/
/*=================================================================================================*/
function pagoOnChange(sel) {
      if (sel.value=="Espontaneamente en ruta" || sel.value == "Referencia de alguien mas"
					|| sel.value=="Recomendación por amigos" || sel.value=="Selección directa personal"
				|| sel.value=="Visita reiterada" ){

           divC = document.getElementById("no_name_input");//Si se selecciona me muestra
           divC.style.display = "";

           divT = document.getElementById("nombre_referencia");
           divT.style.display = "none";

      }else{

           divC = document.getElementById("no_name_input");
           divC.style.display="none";

           divT = document.getElementById("nombre_referencia");
           divT.style.display = "";
      }
}
</script>
<!--El link y los scripts de boostrap son para el modal y los mennsajes de advertencia o error--
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!--Fin de lineas de codigo bootstrap-->

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


          $('select').material_select();
					$('.slider').slider({full_width: true});
					/*Para la funcionalidad de las fechas */
				  $('.datepicker').pickadate({
						format: "yyyy-mm-dd",
				  	 selectMonths: true, // Creates a dropdown to control month
				     selectYears: 15, // Creates a dropdown of 15 years to control year,
				     today: 'Hoy',
				     clear: 'Limpiar',
				     close: 'Ok',
						 autoClose : false,
				     closeOnSelect: true // Close upon selecting a date,
					});
					$('.tooltipped').tooltip({delay: 50});
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
	<header>
		<div class="container grey lighten-3"><!--aqui fue donde cambie el numero 1 por 12, 1/25/2018-->
			<nav class="brown top-nav z-depth-3">
				<div class="nav-wrapper">

			<!--		<a href="#" title="Menú"data-activates="slide-out" class="button-collapse"><i title="Menu" class=" small material-icons">menu</i></a>-->
<!--=========================================================================-->
<ul>
	<!--<li><a  href="?c=Perfil_imagen"  title="Perfil" class="hide-on-med-and-down"><i  class="small material-icons">settings</i><span class=""></span></a></li>-->
	<li><a href="?c=login&a=salir" title="Cerrar sesión" class="hide-on-med-and-down"> <i  class="small material-icons tooltipped hide-on-med-and-down"
		data-position="top" data-delay="50" data-tooltip="Cerrar sesión">settings_power</i><span class=""></span></a></li>

</ul>
<!--=========================================================================-->
					<a href="!#" class="brand-logo right ">SIREVI </a>
					<a href="!#" data-activates="slide-out"  class="button-collapse"><i style="color:white" class=" small material-icons tooltipped" data-position="top" data-delay="50" data-tooltip="Menú">toc</i></a>

					<ul id="nav-mobile" class="left hide-on-small-only">

						<li><a href="?c=login&a=AdminUser" ><i class="hide-on-large-only small material-icons  tooltipped"
							data-position="top" data-delay="50" data-tooltip="Inicio">home</i>
							<span class="hide-on-med-and-down">Inicio</span></a></li>

						<li><a href="?c=Dollar" ><i class="hide-on-large-only small material-icons tooltipped"
							data-position="top" data-delay="50" data-tooltip="Cambio dolar">tab</i>
							<span class="hide-on-med-and-down">Dolar</span></a></li>

						<li><a href="?c=Visitacion&a=AdminUser" ><i class="hide-on-large-only small material-icons tooltipped"
							data-position="top" data-delay="50" data-tooltip="Visitación">assignment</i>
							<span class="hide-on-med-and-down">Visitación</span></a></li>

						<li><a href="?c=Reportes&a=AdminUser" > <i class="hide-on-large-only small material-icons tooltipped"
							data-position="top" data-delay="50" data-tooltip="Reportes">description</i>
							<span class="hide-on-med-and-down">Reportes</span></a></li>

						<li><a href="?c=Usuario&a=AdminUser" ><i class="hide-on-large-only small material-icons tooltipped"
							data-position="top" data-delay="50" data-tooltip="Usuarios">supervisor_account</i>
							<span class="hide-on-med-and-down">Usuarios</span></a></li>

						<li><a href="?c=Sector" ><i class="hide-on-large-only small material-icons tooltipped"
							data-position="top" data-delay="50" data-tooltip="Sectores">view_quilt</i>
							<span class="hide-on-med-and-down">Sectores</span></a></li>

						<li><a href="?c=Sendero" ><i class="hide-on-large-only small material-icons tooltipped"
							data-position="top" data-delay="50" data-tooltip="Senderos">swap_calls</i>
							<span class="hide-on-med-and-down">Senderos</span></a></li>

						<li><a href="?c=ASP" > <i class="hide-on-large-only small material-icons tooltipped"
							data-position="top" data-delay="50" data-tooltip="Áreas Protegidas">terrain</i>
							<span class="hide-on-med-and-down">Áreas Protegidas</span></a></li>
				</ul>
			</div>
		</nav>
	</div>
	</div>

	<ul id="dropdownPrincipal" class="blue-grey dropdown-content">

		<li><a href="?c=login&a=AdminUser"><span class="" data-position="bottom" data-delay="50" >
		<li class="divider"></li>
				<i class="Tiny material-icons">home</i></span>&nbsp;Inicio</a></li>
				<!--<li ><a href="?c=Dollar" title="Cambio dolar"><i class="small material-icons">tab</i>
					<span class="white-text">Dolar</span></a></li>-->
		<li class="divider"></li>
		<li><a href="?c=Dollar"><span class="" data-position="bottom" data-delay="50" data-tooltip="">
			<i class="Tiny material-icons">tab</i></span>&nbsp;Cambio dolar</a></li>

		<li class="divider"></li>
		<li><a href="?c=login&a=salir"><span class="" data-position="bottom" data-delay="50" data-tooltip="">
				<i class="Tiny material-icons">settings_power</i></span>&nbsp;Cerrar sesión</a></li>

</ul>

<ul id="dropdownModulos" class="blue-grey dropdown-content">
		<li class="divider"></li>
						<li><a href="?c=Visitacion&a=AdminUser"><span class="" data-position="bottom" data-delay="50" data-tooltip="">
							<i class="Tiny material-icons white-text">assignment</i></span>&nbsp;Visitación</a></li>

		<li class="divider"></li>
						<li><a href="?c=Reportes&a=AdminUser"><span class="" data-position="bottom" data-delay="50" data-tooltip="">
							<i class="Tiny material-icons white-text">description</i></span>&nbsp;Reportes</a></li>

		<li class="divider"></li>
						<li><a href="?c=Usuario"><span class="" data-position="bottom" data-delay="50" data-tooltip="">
							<i class="Tiny material-icons white-text">supervisor_account</i></span>&nbsp;Usuarios</a></li>

		<li class="divider"></li>
					<li><a href="?c=Sector"><span class="" data-position="bottom" data-delay="50" data-tooltip="">
						<i class="Tiny material-icons white-text">view_quilt</i></span>&nbsp;Sectores</a></li>


		<li class="divider"></li>
					<li><a href="?c=Sendero"><span class="" data-position="bottom" data-delay="50" data-tooltip="">
						<i class="Tiny material-icons white-text">swap_calls</i></span>&nbsp;Senderos</a></li>

		<li class="divider"></li>
	 				<li><a href="?c=ASP"><span class="" data-position="bottom" data-delay="50" data-tooltip="">
						<i class="Tiny material-icons white-text">perm_media</i></span>&nbsp;Áreas Protegidas</a></li>
					<!--<li><a href="#"> <i class="small material-icons">settinwgs</i><span class="white-text">Perfil</span></a></li>-->
		<li class="divider"></li>

</ul>





<!--==================================   Inicio de la barra lateral y desplegable ===================================================-->
	<ul id="slide-out" class="side-nav fixed hide-on-large-only  teal lighten-3 ">
  	<li>
    	<div class="userView"><!-- Imagen avatar e informacion -->
				<img class="background" src="assets/img/CasonaSantaRosa.jpg">
  		<a href="#!user"><img class="circle" src="assets/img/yo.JPG"></a>
			<a href="#!name"><span class="white-text name">Alex M.Luna</span></a>
			<a href="#!email"><span class="white-text email">cheeto12@gmail.com</span></a></div>
		</li>
		<!--============================= Fin de la Barra del buscador ===========================================================-->
		<hr>
		<li class="divider"></li>
		<!--============================= Inicio de los modulos del sistemas ====================================================-->

			<li><a href="" class="dropdown-button tooltipped white-text" data-position="top"
								data-delay="50" data-tooltip="Principal" data-activates="dropdownPrincipal">
									<i class="material-icons right white-text">arrow_drop_down</i>
									 <i class="small material-icons hide-on-large-only">home</i>Principal</a></li>

			<li><a href="" class="dropdown-button tooltipped white-text" data-position="top"
				data-delay="50" data-tooltip="Módulos del sistema" data-activates="dropdownModulos">
					<i class="material-icons right white-text">arrow_drop_down</i>
			 			<i class="small material-icons hide-on-large-only">apps</i>Módulos del sistema</a></li>

	</ul><!--Fin del slide out-->
<!--============================= Fin de la lista de links para informacion ===========================================================-->
<!--================================Findel slide out ======================================================-->
</header>
