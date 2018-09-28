<!DOCTYPE html>
<html>
<head>
<title>Log-in SIREVI</title>
<meta charset="utf-8"/>
<meta name="viewport" content="width= device-width, user-scale=no, initial-scale=1.0, minimum-scale=1.0">
		<link href="//estilos.php" rel="stylesheet" type="text/css" />

		<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min."></script>
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"><!--PARA LOS ICONOS-->

<!--    <link rel="stylesheet" href="assets/css/style1.css" /> -->

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/react/15.3.1/react-dom.min.js"/>
		<link rel="stylesheet" href="https://cdn.rawgit.com/Dogfalo/materialize/master/dist/js/materialize.min.js"/>

		<!-- Compiled and minified CSS -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">
		<!-- Compiled and minified JavaScript -->
		<!--ME DA LA PROPIEDAD DE HACER MAS PEQUENO EL AREA DONDE ESCRIBO -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>

</head>
<style>
form {
    border: 3px solid #f1f1f1;
}

button {
    width: 100%;
}

.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}
img.avatar {
    width: 40%;
    border-radius: 50%;
}
.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

</style>
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
			closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
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

});//Cierre de la llave principal (ready)


</script>

<body>
<!--======================================================================================================================-->
	<header>
		<nav  class="teal darken-4 top-nav z-depth-3" style="height: 75px;" >
			<div  class="container" >

					<div class="nav-wrapper">
						<a style="top: -7px;" href="#" class="brand-logo left"><img  class="circle" src="assets/img/acg_personalized.png">
							<span style="top:-15px;" class=""><a class="right hide-on-med-and-up" href="#"><h4>&nbsp;SIREVI </h4></a></span></a>

							<ul class="right hide-on-small-only">
			    			<li>
									<a><span class=" right hide-on-small-only">
										<h5>Área de Conservación Guanacaste (ACG)<h5></span>
									</a>
						 		</a>
							</li>
		       	</ul>
					</div>

			</div>
		</nav>
	</header>

<!--============================================================================================-->
	<div class="container contact black white-text"><!--Contenerdor principal del formulario de acceso-->
		<h5><span class="hide-on-small-only">Sistema de Información para el Registro de Visitación (SIREVI)</span> </h5>
			<div class="row col s10 m12 l10"><!--Inicio de el div que contiene el formulario-->

			<!--Lineas del background del formulario de acceso-->
				<div class="col s12 m12 l12  light-green darken-4">
					<hr>
				<!---INICIO DE LA PRIMERA FILA-->
					<div class="row blue-grey lighten-2">

						<div>
							<div class="">

								<!--Inicio de lineas de codigo para el lado izquierdo de la pantalla-->
								<div  class="input-field col m5 l3 hide-on-small-only" style="height:450px;">
								<div class="col m12 l9 " style="width:215px; height:450px;"><!--Div que contieneestan el ancho donde  las dos imaganes-->
									<div class=""><!--Div que contiene las dos imagenes-->

<!--==================================================================================================================================-->
										<div class=" hide-on-small-only "><!--Div que contiene la imagen del logo ACG-->
											<div id="" class="center">
												<ul>
													<li>
														<a class="center" href=""><img class="circle z-depth-2" src="assets/img/acgPrincipal.png"></a>
														<br>
													</li>
												</ul>
											</div>
										</div>
	<!--===================================================================================================================================-->
										<div class="" style="height:300px;"><!--Div que contiene un espacio entre las imagenes y tambien contiene imagen dl SINAC-->
											<hr>
											<ul class="">
											<!--Espacio entre imagenes altura=misma del fieldset-->
												<li style="height: 120px;" class=""></li>
													<hr class="">
													<div id="" class="center"><!--Div que contiene laa imagen del SINAC-->
														<ul>
															<li>
																<a class="center" href=""><img class="circle z-depth-2" src="assets/img/sinac.jpg"></a>
															<br>
														</li>
													</ul>
												</div>
											</ul>
										</div>

		<!--=====================================================================================================================================-->
									</div>
							</div>
						</div><!--Fin de codigo para lineas de la izquierda de la pantalla-->

			<!--=============================================================================================================-->
			<!--Inicio de lines para el formulario de acceso-->
						 <div class="input-field col s12 m6 l6 blue-grey lighten-5 z-depth-5 "  style="top: -7px;" ><!--Div que me contiene el formulario-->

							 <form id="frm-login"  class="col s12 black-text" method="POST" action="?c=login&a=Comprobar" enctype="multipart/form-data" >

							 	<div class="row "> <!--Div que me contiene los dotos de ingreso y el botn de login-->
								 	<fieldset style="width:100">
								  	<legend>&nbsp;Formulario de Acceso &nbsp;</legend>
								 		<div class=""><!--Div que me contiene las lineas del avatar-->

									 	<form action="action_page.php" class=""><!--Div que me contiene el fieldset de el avatar-->
						  		 		<div class="imgcontainer "><!--Div que me contiene la linea donde estara ubicada la imagen-->
										 		<a href="#"   class="circle waves-effect waves-teal active z-depth-3 " >
								 				<i class=" large material-icons blue-grey darken-4 ">account_circle</i></a>
				  				 		</div>

<!--===============================================================================================================================================-->
										 	<div class="container"><!--Contenerdor de las lineas para escribir informacion-->
											 <div class="input-field col s12 m12 l12 ">
												 <i class="material-icons prefix">account_circle</i>
						 					   <input id="usuario" name="login"  type="email" class="validate " required>
						 					 	 <label for="usuario"  data-error="wrong" data-success="right" >&nbsp;Usuario</label>
					 				 		 </div>

											 <div class="input-field col s12 m12 l12 ">
												 <i class="material-icons prefix">vpn_key</i>
												 <input id="pass" name="password" type="password" class="validate " required>
												 <label for="pass">&nbsp;Contraseña</label>
											</div>

							<div class="input-field col s12 m12 l12 ">
												<div class="input-field col s12">
									 				<select id="sector" name="sector">
												  	<option value="" disabled selected>Elija una opción</option>
												  	<option value="Santa Rosa">  1. Santa Rosa</option>
														<option value="Junquillal">  2. Junquillal</option>
												  	<option value="Pailas">      3. Pailas</option>
														<option value="Horizontez">  4.Horizontez</option>
														<option value="Santa Maria"> 5. Santa Maria</option>
														<option value="Murcielago">  6. Murcielago</option>
														<option value="Marino">      7. Marino</option>
												 	</select>
												 <label for="sector">Sector al que pertenece</label>
												</div>
										 	</div>



											<div class="input-field col s12 m12 l12">
												<button style="top:-15px;" class="btn waves-effect waves-light teal darken-4 z-depth-2" name="enviar" type="submit">Iniciar sesión</button>
											</div>
							  		</div>
	<!--=============================================================================================================================-->
					  				<div class="container col s12 m12 l12" style="background-color:#cfd8dc ">
											<span class="psw" style="height:50px;">Olvido <a href="#">contraseña?</a></span>
										</div>
									</form>
								</div>
								</fieldset>
							</div>
							</form>
						</div>


				<!--==================================================================================================================================-->
					<!--Inicio de codigo para las lineas e imagenes de la derecha de la pantalla-->
					  <div  class="input-field col l3 hide-on-med-and-down" style="height:450px;">
							<div class="col l9 " style="width:215px; height:450px;"><!--Div que contieneestan el ancho donde  las dos imaganes-->
								<div class=""><!--Div que contiene las dos imagenes-->
								<!--==================================================================================================================================-->
						 			<div class=""><!--Div que contiene la imagen del logo -->
									 	<div id="" class="center">
								 		<ul>
										 	<li>
											 	<a class="center" href=""><img class="circle z-depth-2" src="assets/img/acgPrincipal.png"></a>
								 		  </li>
								 		</ul>
									</div>
								</div>
	<!--===================================================================================================================================-->
								<div class="" style="height:300px;"><!--Div que contiene un espacio entre las imagenes y tambien contiene imagen dl SINAC-->
									<hr>
									<ul class="">
										<!--Espacio entre imagenes altura=misma del fieldset-->
										<li style="height: 120px;" class=""></li>
										 	<hr>
										 	<div id="" class="center"><!--Div que contiene laa imagen del MINAE-->
												<ul>
													<li>
														<a class="center" href=""><img class="circle z-depth-2" src="assets/img/MINAE.png"></a>
															<br>
													</li>
												</ul>
								 			</div>
										</ul>
									</div>
	<!--=====================================================================================================================================-->
								</div>
							</div>
						</div><!--Fin de codigo para lineas de la derecha de la pantalla-->
					</div>
				</div><!--Fin del blue grey lighten-4-->

			</div>
			<hr>
			</div><!--Fin del blue grey-->
		</div><!--FIN DE DIV QUE ME DECLARA EL TAMANO-->
	</div><!--FIN DE LA PREVISTA DE LOS DIV'S-->
</body>
</html>
