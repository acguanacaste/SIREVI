<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
</head>
<head>

		<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
		<link href="//estilos.php" rel="stylesheet" type="text/css" />
		<script type="text/javascript" src="assets/js/jquery.anexsoft-validator.js"></script>
		<script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min."></script>
	<link rel="stylesheet" type="text/css" href="assets/css/estilos.css" />
    <link rel="stylesheet" href="assets/css/style1.css" /> -->

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/react/15.3.1/react-dom.min.js"/>
		<link rel="stylesheet" href="https://cdn.rawgit.com/Dogfalo/materialize/master/dist/js/materialize.min.js"/>

		<!-- Compiled and minified CSS -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">
		<!-- Compiled and minified JavaScript -->
		<!--ME DA LA PROPIEDAD DE HACER MAS PEQUENO EL AREA DONDE ESCRIBO -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>
</head>
	<title>Login</title></head>
	<style>

.parra{
	font-style: oblique;
	font-weight: bolder;
}
	</style>
<body>

	<div class="container">
	    <div class="row">
	        <div class="col m6">
	            <h4>Bienvenido al Area de Conservacion Guanacaste </h4>
	            <p class="parra"> El Programa de Ecoturismo (PET) es el encargado de facilitar a los visitantes la exploración y disfrute de los atractivos
								 naturales y culturales dentro el ACG, promoviendo un uso no destructivo de los recursos,
								  y tratando que el impacto negativo sea el menor.</p><br>

							<h5>Objetivos del Programa de Ecoturismo </h5><br>
							<p class="parra">
							1.Dar la oportunidad al visitante de interactuar con la biodiversidad de los ecosistemas presentes en el ACG.<br><br>
							2.Facilitar la apreciación de los atractivos a través de la información e interpretación de la naturaleza.<br><br>
							3.Evaluar y organizar los sitios turísticos para minimizar los impactos y propiciar una mejor oferta turística en el área protegida del ACG.<br><br>
							4.Buscar mecanismos de generación de recursos para contribuir a la sostenibilidad financiera del ACG.<br><br>
							<p>
					</div>
	        <div class="col m6">
	            <h2 class="center-align">Login</h2>
	            <div class="row">
	                <form class="col s12" method="POST" action="validar.php">
	                    <div class="row">
	                        <div class="input-field col s12">
	                            <input id="email"  name="nnombre" type="email" class="validate">
	                            <label for="email" data-error="wrong" data-success="right" >Usuario@ejemplo.com</label>
	                        </div>
	                    </div>
	                    <div class="row">
	                        <div class="input-field col s12">
	                            <input id="pass" name="npassword" type="password" class="validate">
	                            <label for="pass">Contrasena</label>
	                        </div>
	                    </div>
	                    <div class="row">
	                        <div class="col s12">
	                            <p>
	                                <input type="checkbox" id="remember">
	                                <label for="remember">Recordar cocntrasena</label>
	                            </p>
	                        </div>
	                    </div>
	                    <div class="divider"></div>
	                    <div class="row">
	                        <div class="col m12">
	                            <p class="right-align">
	                                <button  class="btn btn-large waves-effect waves-light" type="submit" name="action">Login</button>
	                            </p>
	                        </div>
	                    </div>
	                </form>
	            </div>
	        </div>
	    </div>
	</div>

<!--<div>
	<center>
		<form method="POST" action="validar.php">
			<input type="text" name="nnombre" placeholder="Usuario" />
			<br />
			<input type="password" name="npassword" placeholder="Contraseña" />
			<br />
			<button type="submit">Inicar Sesion</button>
		</form>
	</center>
</div>-->
</body>
</html>
