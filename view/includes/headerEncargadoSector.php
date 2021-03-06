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
	<header>
		<div class="container grey lighten-3 col s12 m12 l1">
			<nav class="brown top-nav ">
				<div class="nav-wrapper">

			<!--		<a href="#" title="Menú"data-activates="slide-out" class="button-collapse"><i title="Menu" class=" small material-icons">menu</i></a>-->
<!--=========================================================================-->
<ul>
	<!--<li><a  href="?c=Perfil_imagen"  title="Perfil" class="hide-on-med-and-down"><i  class="small material-icons">settings</i><span class=""></span></a></li>-->
	<li><a href="?c=login&a=salir" class=""> <i  class="small material-icons tooltipped" data-position="top" data-delay="50" data-tooltip="Cerrar sesión">settings_power</i><span class=""></span></a></li>

</ul>
<!--=========================================================================-->

					<a href="#" class="brand-logo right ">SIREVI</a>
<a href="" data-activates="slide-out"  class="button-collapse"><i style="color:white" class=" small material-icons tooltipped" data-position="top" data-delay="50" data-tooltip="Menú" >toc</i></a>
					<ul id="nav-mobile" class="left hide-on-small-only">
						<li><a href="?c=login&a=SectorManagerUser" >
							<i class="small material-icons hide-on-large-only tooltipped" data-position="top" data-delay="50" data-tooltip="Inicio">home </i>
							 <span class="hide-on-med-and-down">Inicio</span></a></li>

						<li><a href="?c=Visitacion&a=SectorManagerUser" title="Visitacion"><i class="small material-icons hide-on-large-only tooltipped" data-position="top" data-delay="50" data-tooltip="Visitación">assignment</i> <span class="hide-on-med-and-down">Visitación</span></a></li>
<?php if ( $_SESSION['usuario']['puesto'] == 3 ):?>
						<li><a href="?c=Reportes&a=SectorManagerUser" > <i class="small material-icons hide-on-large-only tooltipped" data-position="top" data-delay="50" data-tooltip="Reportes">description</i><span class="hide-on-med-and-down">Reportes</span></a></li>
<?php endif; ?>
						<li><a href="?c=Usuario&a=SectorManagerUser" ><i class="small material-icons hide-on-large-only tooltipped" data-position="top" data-delay="50" data-tooltip="Usuarios">supervisor_account</i> <span class="hide-on-med-and-down">Usuarios</span></a></li>
						<li><a href="?c=Sector&a=SectorManagerUser" ><i class="small material-icons hide-on-large-only tooltipped" data-position="top" data-delay="50" data-tooltip="Sectores">view_quilt</i><span class="hide-on-med-and-down">Sectores</span></a></li>
						<li><a href="?c=Sendero&a=SectorManagerUser" ><i class="small material-icons hide-on-large-only tooltipped" data-position="top" data-delay="50" data-tooltip="Senderos">swap_calls</i> <span class="hide-on-med-and-down">Senderos</span></a></li>
						<li><a href="?c=ASP&a=SectorManagerUser"> <i class="small material-icons hide-on-large-only tooltipped" data-position="top" data-delay="50" data-tooltip="Áreas Protegidas">terrain</i><span class="hide-on-med-and-down">Áreas Protegidas</span></a></li>
				</ul>

			</div>
		</nav>
	</div>
	</div>
<!--==================================   Inicio de la barra lateral y desplegable ===================================================-->
	<ul id="slide-out" class="side-nav fixed hide-on-large-only  teal lighten-3 ">
  	<li>
			<div class="userView"><!-- Imagen avatar e informacion -->
				<img class="background" src="assets/img/CasonaSantaRosa.jpg">

			<a href="#!user"><?php echo'<img class="circle" src="'.$_SESSION["usuario"]["foto"].'" width="100" heigth="100">'; ?></a>
			<a href="#!name"><span class="white-text name"><?php echo $_SESSION['usuario']['nombre']; ?></span></a>
			<a href="#!email"><span class="white-text email"><?php echo $_SESSION['usuario']['email']; ?></span></a></div>
		</li>
		<!--============================= Fin de la Barra del buscador ===========================================================-->
		<hr>
		<li class="divider"></li>
		<!--============================= Inicio de los modulos del sistemas ====================================================-->
		<li><a href="?c=login&a=SectorManagerUser" ><i class="small material-icons">home</i> <span class="white-text">Inicio</span></a></li>
		<li><a href="?c=Visitacion&a=SectorManagerUser" title="Visitación"><i class="small material-icons">assignment</i> <span class="white-text">Visitación</span></a></li>

<?php if ($_SESSION['usuario']['puesto'] == 3 ):?>
		<li><a href="?c=Reportes&a=AdminUser" title="Reportes"> <i class="small material-icons ">description</i><span class="white-text">Reportes</span></a></li>
<?php endif; ?>

		<li><a href="?c=Usuario&a=SectorManagerUser" title="Usuarios"><i class="small material-icons">supervisor_account</i> <span class="white-text">Usuarios</span></a></li>
		<li><a href="?c=Sector&a=SectorManagerUser" title="Sectores"><i class="small material-icons">view_quilt</i><span class="white-text">Sectores</span></a></li>
		<li><a href="?c=Sendero&a=SectorManagerUser" title="Senderos"><i class="small material-icons">swap_calls</i> <span class="white-text">Senderos</span></a></li>
		<li><a href="?c=ASP&a=SectorManagerUser" title="Áreas Protegidas"> <i class="small material-icons">perm_media</i><span class="white-text">Áreas Protegidas</span></a></li>
		<!--<li><a href="#"> <i class="small material-icons">settings</i><span class="white-text">Perfil</span></a></li>-->
		<li><a href=""> <i class="small material-icons">settings_power</i><span class="white-text">Cerrar sesión</span></a></li>
	</ul><!--Fin del slide out-->
<!--============================= Fin de la lista de links para informacion ===========================================================-->
<!--================================Findel slide out ======================================================-->
</header>
