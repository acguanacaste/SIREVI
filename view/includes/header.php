<!DOCTYPE html>

<html lang="es">
<head>
	<meta charset="utf-8"/>
		<meta name="viewport" content="width= device-width, user-scale=no, initial-scale=1.0, minimum-scale=1.0">
	<title>Sistema de Informacion para Registro de Visitacion</title>
<!--	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" type="text/css" /> -->
	<link href="//estilos.php" rel="stylesheet" type="text/css" />

<!--	<script type="text/javascript" src="../assets/js/jquery.anexsoft-validator.js"></script> -->

	<script type="text/javascript" src="/assets/js//indexUsuarios.js"></script>
<!--    <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script> -->
	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<!--        <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min."></script> -->
<link rel="stylesheet" type="text/css" href="assets/css/estilos.css" />
<!--    <link rel="stylesheet" href="assets/css/style1.css" /> -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/react/15.3.1/react-dom.min.js"/>
	<link rel="stylesheet" href="https://cdn.rawgit.com/Dogfalo/materialize/master/dist/js/materialize.min.js"/>

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
 					});

				$( document ).ready(function(){
					$(".button-collapse").sideNav({
		      //		menuWidth: 400, // Ancho del sideNav
		    //  		edge: 'right', // Se elije que extremo de la ppantalla se abre el sideNav
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
					});

					$(document).ready(function(){
					 	$('.collapsible').collapsible({
						 accordion : false // A setting that changes the collapsible behavior to expandable instead of the default accordion style
					 });
				 });

				</script>
<body>

<div class="container">
