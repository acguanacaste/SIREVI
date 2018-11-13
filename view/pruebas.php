<<<<<<< HEAD
<html>
<head>
<title>Untitled</title>
<script>
function habilitarCombo(valor){
    if(valor==2){
    document.getElementById("estado").disabled = false;
    document.getElementById("articulo").disabled = false;
}
else {
document.getElementById("departamento").disabled = true;
document.getElementById("articulo").disabled = true;
}
}
</script>
</head>
<body>
<label>Departamento
<span class="small">Departamento al que pertenece el equipo</span>
</label>
<select name="departamento" id="departamento" disabled="true">
<option selected="" value="">[Seleccione un departamento]</option>
<option value="op01">op01</option>
</select>

<label>Articulo
<span class="small">Articulo asignado al equipo</span>
</label>
<select name="articulo" id="articulo" disabled="true">
<option selected="" value="">[Seleccione un articulo]</option>
<option value="op22">op22</option>
</select>

<label>Estado
<span class="small">Status del equipo</span>
</label>
<select name="estado" id="estado" onchange="habilitarCombo(this.value);">
<option value="1">[Seleccione estado del equipo]</option>
<option value="2">En Uso</option>
<option value="3">Stock</option>
</select>
</body>
</html>
























<?php foreach ($this->model->Listar() as $r): ?>
  <tr>
    <td><?php echo $r->id; ?></td>
    <td><?php echo $r->proposito_visita; ?></td>
    <td><?php echo $r->fecha; ?></td>
    <td><?php echo $r->Nombre; ?></td>
    <td><?php echo $r->noIdentificacion; ?></td>
    <td><?php echo $r->placa_automovil; ?></td>
    <td><?php echo $r->Pais; ?></td>
    <td><?php echo $r->tipo_pago; ?></td>
    <td><?php echo $r->moneda; ?></td>

  <td ><?php if($r->salida ==0){
    echo "
    <a onclick='setTime()' href='?c=Visitacion&a=Salida&id=".$r->id."'>
            <i  class='circle white darken-2 small material-icons tooltipped'
              data-position='bottom' data-delay='50'
              data-tooltip='Dentro del parque'>directions_walk</i></a>
              <p  id='time'></p>";
        }

        elseif ($r->salida==1) {
          echo "
          <a onclick='setTime()'   href='?c=Visitacion&a=Salida&id=".$r->id."'>
                  <i  class='circle red darken-2 small material-icons tooltipped'
                    data-position='bottom' data-delay='50'
                    data-tooltip='Fuera del parque'>do_not_disturb_off</i></a>";
      };





<?php require_once "controller/pagination-controller.php"; ?>
<?php $page = (isset($_GET["page"])) ? $_GET["page"] : 1; ?>
<?php Pagination::config($page, 10, "visitacion", null , 2); ?>
<?php $data = Pagination::data(); ?>
<?php $active = ""; ?>
<?php if ($data["error"]): header("location: ruta/error.php"); endif;?>

<main>
  <h4 class="header left"><span>&nbsp;</span><a href="#">
    <i class="medium material-icons circle blue-grey darken-2">assignment</i>Módulo Visitación</a></h4>


  <div class="container">
    <a href="?c=Visitacion&a=agregarRegistro"><span class="hide-on-med-and-up">
      <i class="small material-icons blue-grey darken-2 z-depth-1 btn-floating pulse">playlist_add</i>Nuevo registro</a>


      <div class="right hide-on-small-only">
        <a   href="?c=Visitacion&a=agregarRegistro">
          <i class="small material-icons blue-grey darken-2 z-depth-1 btn-floating pulse">playlist_add</i>Nuevo registro</a>
      </div>
    </div>

<div class="left">

</div>

<div class="">
    <!--Busqueda avanzada-->
<div class="row">
  <div class="col s12 m12 l12">
    <ul class="collapsible" data-collapsible="accordion">
  <li>
    <div class="collapsible-header"><i class="material-icons">search</i>Filtro de busqueda</div>
    <div class="collapsible-body"><span><div class="row">
      <div class="col s12 m12 l12">

        <fieldset>
          <ul class="input-field col s12 m12 l12 popout z-depth-3" data-collapsible="accordion">
          <li>
            <div class="header"><i class="material-icons">info_outline</i>Utilice los campos habilitados para realizar la busqueda de registro(s)</div>
            <div class="body "><span >
              <form action="?c=Visitacion&a=busquedaVisitacion" method="post">

  <div class="col s11 offset-s1"><span class="flow-text">
                <div class="input-field col s12 m3 l3">
                  <i class="small material-icons">contact_mail</i>
                  <input type="text" name="nombre" class="black-text" placeholder="Nombre" style="width:200px;">
                </div>
<div class="col s1">

</div>
              <div class="input-field col s12 m3 l3">
                    <i class="small material-icons">picture_in_picture</i>
                    <input type="text" name="noIdentificacion" class="black-text" placeholder="Identificacion" style="width:200px;">
              </div>
<div class="col s1">

</div>
              <div class="input-field col s12 m3 l3">
            <i class="small material-icons">directions_car</i>
            <input type="text" name="placa_automovil" class="black-text" placeholder="No.Placa" style="width:200px;">
              </div>
</span></div>

              <center>
                <button title="Enviar" class="btn waves-effect waves-light teal darken-4"
                  value="Buscar"  type="submit" name="action"> <span class="hide-on-small-only">Consultar</span>
                    <i class="mdi-content-send material-icons right">pageview</i>
                </button>
              </center>


                </div>
              </form><!--FORM end-->
          </span></div>
          <hr>

         </li>
        </ul>
        </fieldset>
      </div>
    </div>
</span></div>
  </li>
</ul>
  </div>
</div>


    <div class="row">
        <div class="col s12 m12 l12">
            <!-- Inicio de mi codigo -->
          <table id="data-table-simple" class="responsive-table grey lighten-1 centered highlight z-depth-5">
            <thead class="white-text teal darken-4 z-depth-2">
<!--==================================Los valores en la vista de visitacion aun estan por aclarar cuale se deben mostrar-->
            <tr>
              <th>ID</th>
              <th>Proposito</th>
              <th>Fecha ingreso</th>
              <th>Nombre</th>
              <th>Identificación</th>
              <th>Placa automovil</th>
              <th>País</th>
              <th>Sendero</th>
              <th>Tipo pago</th>
              <th>Moneda</th>
              <th>Ingresos</th>
              <th>Salida</th>
              <th style=""></th>
              <th colspan="2">Acción</th>
            </tr>
<!--================================================================================================================== -->
          </thead>

          <tbody>
            <?php foreach (Pagination::show_rows("visitacion") as $row): ?>
        <tr>
            <td><?php echo $row["id"]; ?></td>
            <td><?php echo $row["proposito_visita"]; ?></td>
            <td><?php echo $row["fecha"]; ?></td>
            <td><?php echo $row["nombre"]; ?></td>
            <td><?php echo $row["noIdentificacion"]; ?></td>
            <td><?php echo $row["placa_automovil"]; ?></td>
            <td><?php echo $row["pais_id"]; ?></td>
            <td><?php echo $row["sendero"]; ?></td>
            <td><?php echo $row["tipo_pago"]; ?></td>


        </tr>
        <?php endforeach; ?>
          </tbody>
        </table>
        <nav>
		  	<ul class="pagination">
		  		<?php if ($data["actual-section"] != 1): ?>
		    		<li><a href="pagination-view.php?page=1">Inicio</a></li>
		    		<li><a href="pagination-view.php?page=<?php echo $data['previous']; ?>">&laquo;</a></li>
				<?php endif; ?>

				<?php for ($i = $data["section-start"]; $i <= $data["section-end"]; $i++): ?>
				<?php if ($i > $data["total-pages"]): break; endif; ?>
				<?php $active = ($i == $data["this-page"]) ? "active" : ""; ?>
			    	<li class="<?php echo $active; ?>">
					<a href="view/visitacion/pagination-view.php?page=<?php echo $i; ?>">
						<?php echo $i; ?>
					</a>
			    	</li>
			    	<?php endfor; ?>

				<?php if ($data["actual-section"] != $data["total-sections"]): ?>
			    	<li><a href="pagination-view.php?page=<?php echo $data['next']; ?>">&raquo;</a></li>
			    	<li><a href="pagination-view.php?page=<?php echo $data['total-pages']; ?>">Final</a></li>
		    		<?php endif; ?>
		  	</ul>
		</nav>

      </div><!-- Div de los tamanos -->
    </div><!--Div del row-->
  </div><!--Div del container-->
</main>




































<main>
  <div class="container">
    <div class="">

      <div class="col s12 m12 l12">

<!--====================================================================================================================-->
<div class="">
  <form id="frm-visitacion" action="?c=Visitacion&a=Guardar" method="post" enctype="multipart/form-data">
  <fieldset>
    <fieldset>
      <div class="">
        <div class="col s12 m12 l12">
          <div class="">
              <div><!-- Inicio de las filas y columnas -->

                <div class="row"><!---Inicio de dos columnas-->
<div class="col m1">

</div>
                <div class="input-field col s6 m4 l2">
                  <fieldset><center><legend>Numero diario</legend></center>
                    <center>
                      <div class="btn teal darken-4 right-align "><?php echo $this->model->Consecutivo(); ?></div>
                  </center>
                  </fieldset>
                </div>

                <div class="input-field col s6 m4 l3 hide-on-med-and-down">
                  <fieldset><center><legend>Capacidad de Sector</legend></center>
                    <center>
                      <div class="btn teal darken-4 right-align "> <?php echo $this->model->Cantidad_Personas_Dentro_Parque();?>&nbsp;/&nbsp;<?php echo $_SESSION['sector']['capacidadDiaria'] ?> </div>
                    </center>
                  </fieldset>
                </div>

                <div class="input-field col s6 m6 l3">
                  <fieldset><center><legend>Sector</legend></center>
                    <center>
                      <div class="btn teal darken-4 right-align" value="<?php echo $_SESSION['sector']['id_Sector']; ?>" name="sector"><?php echo $_SESSION['sector']['sectorNombre'];?></div>
                    </center>
                  </fieldset>
                </div>

                <div class="hide-on-med-and-down input-field col s6 m4 l3">
                  <fieldset><center><legend>Usuario</legend></center>
                    <center>
                      <div name="usuario" value="<?php echo $_SESSION['usuario']['id'];?>" class="btn teal darken-4 right-align "><?php echo $_SESSION['usuario']['nombre'];?></div>
                    </center>
                  </fieldset>
                </div>
               </div><!--Fin de columnas -->
             </div><!-- Fin de filas y columnas -->
          </div><!-- <!-- Fin del row -->
        </div><!-- Tamanos -->
      </div><!-- Fin del row -->
  <!--================================================================================================================================-->
</fieldset>
</div><!-- Fin de los fieldset -->
<!--=========================================================================================================================================-->
    <div id="" class="">
    <hr>
<!--===========================================================================================================-->
    <fieldset>
      <legend><h5>Formulario para modificar información </h5>
        <h6>Modificar registro, utilice los campos a disposicion</h6></legend>
        <div class="">
          <hr> <br>
          <div class="row"><!--la clase en este div me permite tener los elementos del formulario en orden y en las filas correspondientes-->
            <div class="col col s12 m12 l12">
              <div class="">

                  <input type="hidden" name="id" value="<?php echo $visit->id; ?>" />
                  <input type="hidden" name="sector" value="<?php echo $_SESSION['usuario']['id']; ?>">
                  <input type="hidden" name="usuario" value="<?php echo $_SESSION['sector']['id_Sector']; ?>">
                  <input type="hidden" name="asp" value="<?php echo $_SESSION['sector']['areaSilvestreProtegida']; ?>">
                  <input type="text" class="" name="montoCancelar"  value="<?php echo $visit->montoCancelar; ?>">
        <!--          <div class="row">
                  <div class="input-field col s12 m6 l4">
                    <fieldset>
                      <legend>Seleccione la fecha que desea</legend>
                      <div class="input-field col s12 m12 l12">
                        <input  type="text" class="datepicker" id="fecha" name="fecha" value="" required>
                        <label for="fecha"> <i class="small material-icons">event</i><span class="hide-on-small-only">Fecha ingreso</span></label>

                      </div>
                    </fieldset>
                  </div>

                  <div class="col l4">
                  </div>
                    <div class="input-field  col s12 m6 l4">
                      <fieldset>
                        <legend> <i class="small material-icons">access_time</i><span class="hide-on-small-only">Hora ingreso <br>  Formato 23:59:59</span></legend>
                        <div class="input-field col s12 m12 l12">
                           <input class="timepicker"  id="time" name="fecha" value="" required>
                        </div>
                      </fieldset>
                    </div>
                  </div> -->



<!--==========================================================================================================-->
<div class="">
<div class="input-field col s12 m6 l6">
 <fieldset  class="z-depth-1 ">
   <legend>&nbsp;Proposito de Visitación&nbsp;</legend>
     <div class="input-field col s12 m12 l12">
       <!--<input type="text" name="proposito_visita" value="<php echo $visit->proposito_visita; ?>">-->
       <select id="proposito_visita"  name="proposito_visita">
         <option value="" disabled selected>Elija una opción</option>
         <option value="Por el dia"                       >Por el dia </option>
         <option value="Acampando"  onemptied=""           >Acampando </option>
         <option value="Hospedado en Estacion Biologica"  >Hospedado en Estacion Biologica</option>
         </select>
       <label><i class="small material-icons" >info_outline</i></label>
     </div>
   </fieldset>
 </div>



<div class="input-field col s12 m6 l6 ">
  <fieldset>
    <legend>Sub sector al que se dirije</legend>
    <div class="input-field col s12 m12 l12">
      <label for="subSector"> <i class="small material-icons"></i><span class="hide-on-small-only">Sub Sector</span></label>
       <input  type="text" id="subSector" name="subSector" value="<?php echo $visit->subSector; ?>" required>
    </div>
  </fieldset>
</div>
<br>
<!--===========================================================================================================-->

                  <div><!--Inicio de la primera fila-->
                    <div class="input-field col s6 m6 l4  ">
                      <input  id="name" type="text" name="nombre" value="<?php echo $visit->nombre ?>" class="validate" class="form-control"  required >
                      <label for="name" ><i class="small material-icons">face</i></span>&nbsp;Nombre</label>
                    </div>
                      <div class="input-field col s6 m6 l4  ">
                        <input  id="noIdentificacion" type="text" name="noIdentificacion" value="<?php echo $visit->noIdentificacion ?>" class="validate" class="form-control"  required >
                        <label for="noIdentifiacion" >  <i class="small material-icons">subtitles</i>&nbsp;Número de identifiación</label>
                      </div>
                      <div  class="input-field col s6 m6 l4  ">
                        <input  id="placa_automovil" type="text" name="placa_automovil" value="<?php echo $visit->placa_automovil; ?>" class="validate" class="form-control"   >
                        <label for="placa_automovil" >  <i class="small material-icons">settings_ethernet</i>&nbsp;Placa automóvil</label>
                      </div>
                  </div><!--Fin de la primera fila -->
    <!--===================================================================================================================================================-->
    <!--===================================================================================================================================================-->
                <div class=""><!---Inicio de la segunda fila-->
                <!--==============Cargando los paices==============================-->
                  <?php
                  $conexion = mysql_connect("localhost","root");
                  mysql_select_db("sirevi",$conexion);
                  $sentencia_pais = "select * from pais order by nombre ASC";
                  $query_pais = mysql_query($sentencia_pais);
                  ?>
                  <div  class="input-field col s6 m4 l4">
                    <select name="pais">
                      <option value="" disabled selected>Elija un pais</option>
                      <?php while ($arreglo_pais = mysql_fetch_array($query_pais)) {  ?>
                      <option value="<?php echo $arreglo_pais['id']?>" <?php echo $visit->pais_id ==$arreglo_pais['id']?"selected":null; ?>> <?php echo $arreglo_pais['nombre'] ?></option>
                      <?php } ?>
                    </select>
                    <label>País</label>
                  </div>


<!--==============Cargando las cuidades============================================-->
      <div class="input-field col s6 m4 l4">
        <select name="provincia">
          <option value="" disabled selected>Elija una opción</option>
          <option value="1"<?php echo $visit->provincia_id==1?"selected":null; ?>>San Jose</option>
          <option value="2"<?php echo $visit->provincia_id==2?"selected":null; ?>>Alajuela</option>
          <option value="3"<?php echo $visit->provincia_id==3?"selected":null; ?>>Cartago</option>
          <option value="4"<?php echo $visit->provincia_id==4?"selected":null; ?>>Heredia</option>
          <option value="5"<?php echo $visit->provincia_id==5?"selected":null; ?>>Guanacaste</option>
          <option value="6"<?php echo $visit->provincia_id==6?"selected":null; ?>>Putarenas</option>
          <option value="7"<?php echo $visit->provincia_id==7?"selected":null; ?>>Limón</option>
          </select>
        <label> Provincia</label>
      </div>
<!--=================Fin del codigo para ciudades ===============-->

<div class=""><!--Columna-->
  <!--================Cargando los senderos==============================-->
  <?php
  $conexion = mysql_connect("localhost","root");
  mysql_select_db("sirevi",$conexion);
  $sentencia_sendero = "select * from sendero order by nombre ASC";
  $query_sendero = mysql_query($sentencia_sendero);
  ?>
  <div class="">
    <div class="input-field col s12 m4 l4"><!--vista small numero 12 araque abarque todo el ancho del dispositivo-->
    <select name="sendero" multiple required>
        <option value="" disabled selected>&nbsp;Seleccionar Senderos</option>
         <?php while ($arreglo_sendero = mysql_fetch_array($query_sendero)) {  ?>
         <option value="<?php echo $arreglo_sendero['id']?>" <?php echo $visit->sendero ==$arreglo_sendero['id']?"selected":null; ?>> <?php echo $arreglo_sendero['nombre'] ?></option>
         <?php } ?>
      </select>
    <label><span class="hide-on-small-only"><i class="small material-icons">swap_calls</i></span></label>
  </div>
  </div>
</div><!--Fin de la seegunda fila -->

<!--==================================================Lineas de codigo, respecto visitacion=========================================================-->

<fieldset class="input-field col s12 m7 l8 z-depth-2">
  <legend>Referencia de Visitación</legend>
        <div>
          <div>
               <SELECT id="referencia_visita" name="referencia_visita" onChange="pagoOnChange(this)">
                  <option value="" disabled selected>&nbsp;Elija una opción</option>
                  <option value="Espontaneamente en ruta"<?php echo $visit->referencia_visita=="Espontaneamente en ruta"?"selected":null; ?>>Espontaneamente en ruta</option>
                  <option value="Referencia de alguien más"<?php echo $visit->referencia_visita=="Referencia de alguien más"?"selected":null; ?>>Referencia de alguien más</option>
                  <option value="Recomendación por amigos"<?php echo $visit->referencia_visita=="Recomendación por amigos"?"selected":null; ?>>Recomendación por amigos</option>
                  <option value="Visita reiterada"<?php echo $visit->referencia_visita=="Visita reiterada"?"selected":null; ?>>Visita reiterada</option>
                  <option value="Selección directa personal"<?php echo $visit->referencia_visita=="Selección directa personal (Check list)"?"selected":null; ?>>Selección directa personal (Check list)</option>
                  <option value="Guías impresas"<?php echo $visit->referencia_visita=="Operadora turística"?"selected":null; ?>>Operadora turística</option>
                  <option value="Operadora turistica"<?php echo $visit->referencia_visita=="Medio de comunicación"?"selected":null; ?>>Medio de comunicación</option>
                  <option value="Medio de comunicación"<?php echo $visit->referencia_visita=="Guías impresas"?"selected":null; ?>>Guías impresas</option>
                  <option value="Grupo comunal organizado"<?php echo $visit->referencia_visita=="Grupo comunal organizado"?"selected":null; ?>>Grupo comunal organizado</option>
                  <option value="Empresa privada"<?php echo $visit->referencia_visita=="Empresa privada"?"selected":null; ?>>Empresa privada</option>
                  <option value="ONGs en proyectos de investigación y conservación"<?php echo $visit->referencia_visita=="ONGs en proyectos de investigación y conservación"?"selected":null; ?>>ONGs en proyectos de investigación y conservación</option>
                  <option value="Institución pública"<?php echo $visit->referencia_visita=="Institución pública"?"selected":null; ?>>Institución pública</option>
                  <option value="Otro"<?php echo $visit->referencia_visita=="Otro"?"selected":null; ?>>Otro</option>
               </SELECT>
          </div>

          <div id="no_name_input" style="display:none;"></div>

          <fieldset   id="nombre_referencia" style="display:;" class="z-depth-2">
            <div id="nombre_referencia" style="display:;">
               <br>
               Nombre*:
               <br>
             <input type='text' value="<?php echo $visit->nom_referencia_visita; ?>" name='nom_referencia_visita' size='20' maxLength='60'>

          </div>
        </fieldset>

</fieldset>
<!--=============================-->
<div  class="input-field col s12 m4 l3"><!--Columna-->
    <fieldset ><legend>Dias acampando</legend>

        <div class="input-field col s12 m12 l12  ">
          <input  id="dias_camping" type="number" value="<?php echo $visit->dias_camping; ?>" name="dias_camping" value="" class="validate" class="form-control" data-validacion-tipo="requerido|min:10" >
          <label for="dias_camping" > <span class="hide-on-small-only"><i class="small material-icons">perm_contact_calendar</i></span>&nbsp;Dias acampando</label>
        </div>

        <div class="input-field col s12 m12 l12">
        Personas*:
          <br>
          <input   id="dias_camping" type="number" name="personas_acampando" value="<?php echo $visit->personas_acampando;?>" class="validate" class="form-control" data-validacion-tipo="requerido|min:10" >
        </div>
    </fieldset>
</div><!--Fin de la tercera fila-->

<!--================================================== Fin lineas de codigo, respecto visitacion========================================================-->

<div class="input-field col s12 m12 l12"><!--IInicio de lineas para cantidad de personas-->
<ul class="" data-collapsible="">
   <li>
     <div class="center-align collapsible-header teal darken-4  white-text z-depth-3">
                          <i class=" material-icons">supervisor_account</i>Cantidad de personas</div>
  <div class="">
    <fieldset>
      <span>
        <div class="">
         <div class=""><!--Inicio de la primea fila dentro del collapsible-->
         <div class="input-field col s12 m12 l12">
         <fieldset class="z-depth-3">
           <legend>&nbsp;Nacionales&nbsp;</legend>
             <div class="input-field col s6 m6 l3  ">
           <input  id="nacional_adult"  value="<?php echo $visit->nacional_adult; ?>" type=number name="nacional_adult" class="validate" onkeyup="sumaNacionales_Dia(); sumatoria_All(); monto_total_pagar();"  class="form-control" >
           <label for="nacional_adult" ><span class="hide-on-small-only"><i class="small material-icons">offline_pin</i></span>&nbsp;Adultos </label>
          </div>

           <div class="input-field col s6 m6 l3  ">
             <input  id="nacional_kid" value="<?php echo $visit->nacional_kid; ?>" type="number" name="nacional_kid" class="validate" onkeyup="sumaNacionales_Dia(); sumatoria_All(); monto_total_pagar();" class="form-control" >
             <label for="nacional_kid" ><span class="hide-on-small-only"><i class="small material-icons">offline_pin</i></span>&nbsp;Niños </label>
           </div>

           <div class="input-field col s12 m6 l3  ">
             <input  id="estudiantes" value="<?php echo $visit->estudiantes; ?>" type="number" name="estudiantes"  class="validate" onkeyup="sumaNacionales_Dia(); sumatoria_All(); monto_total_pagar();" class="form-control" >
             <label for="estudiantes" ><span class="hide-on-small-only"><i class="small material-icons">offline_pin</i></span>&nbsp;Estudiantes </label>
             </div>


            <div class="input-field col s6 m6 l3  ">
               <input  id="nacional_exonerado" value="<?php echo $visit->nacional_exonerado; ?>" type="number" name="nacional_exonerado" value="" class="validate" onkeyup="sumatoria_All();" class="form-control" data-validacion-tipo="requerido|min:10">
              <label for="nacional_exonerado" > <span class="hide-on-small-only"><i class="small material-icons">perm_identity</i></span>&nbsp;Exonerado</label>
            </div>
          </fieldset>
       </div><!--Fin de columnas cantidad de ncionales por el dia-->
     </div><!--Fin de la primera fila-->

     <div class="">
       <div class="input-field col s12 m12 l12">
         <fieldset class="z-depth-3">
         <legend>&nbsp;Extranjeros&nbsp;</legend>

         <div class="input-field col s6 m4 l4  ">
           <input  id="extranjero_adult" value="<?php echo $visit->extranjero_adult; ?>" type="text" name="extranjero_adult" class="validate" onkeyup="sumaExtranjeros_Dia(); sumatoria_All(); monto_total_pagar();" class="form-control" data-validacion-tipo="requerido|min:10">
          <label for="extranjero_adult" ><span class="hide-on-small-only"><i class="small material-icons">offline_pin</i></span>&nbsp;Adultos </label>
        </div>

       <div class="input-field col s6 m4 l4  ">
         <input  id="extranjero_kid" value="<?php echo $visit->extranjero_kid; ?>"type="text" name="extranjero_kid" class="validate" onkeyup="sumaExtranjeros_Dia(); sumatoria_All(); monto_total_pagar();" class="form-control" data-validacion-tipo="requerido|min:10">
           <label for="extranjero_kid" ><span class="hide-on-small-only"><i class="small material-icons">offline_pin</i></span>&nbsp;Niños </label>
       </div>

       <div class="input-field col s6 m4 l4  ">
       <input  id="extranjero_exonerado" value="<?php echo $visit->extranjero_exonerado; ?>" type="number" name="extranjero_exonerado" value="" onkeyup="sumatoria_All();" class="validate" class="form-control" data-validacion-tipo="requerido|min:10">
      <label for="extranjero_exonerado" > <span class="hide-on-small-only"><i class="small material-icons">perm_identity</i></span>&nbsp;Exonerado</label>
      </div>
     </fieldset>
   </div>
   </div>
   <div class=""><!--Tercera fila-->
   <div class="input-field col s12 m12 l12">
     <fieldset class="z-depth-3">
     <div class=""><!--Inicio de la segunda fila-->
     <div class="input-field col s12 m6 l6  ">
     <input  id="personas_surf" value="<?php echo $visit->personas_surf; ?>"type="number" name="personas_surf" class="validate" onkeyup="sumaPersonasSurf(); monto_total_pagar();" >
       <label for="personas_surf" >  <i class="small material-icons">supervisor_account</i>&nbsp;Cantidad Personas Surf</label>
     </div>

      <div class="input-field col s6 m6 l6  ">
        <input  id="prepago" value="<?php echo $visit->prepago; ?>" type="number" name="prepago" value="" class="validate" onkeyup="sumatoria_All();" class="form-control" data-validacion-tipo="requerido|min:10" >
          <label for="prepago"><span class="hide-on-small-only"><i class="small material-icons">picture_in_picture</i></span>&nbsp;Prepago</label>
          </div>
        </div><!--Fin del div de la segunda fila -->
      </fieldset>
      </div>
    </div><!--Fin de la tercera Fila-->
<!--<h6>Preguntar sobre como se calcula el precio para hacer la funcion en javascript</h6>-->
    </div>
   </span>
    </fieldset>
    </div><!--collapsible body-->
    </li>
    </ul>
    </div>
  </div><!--Fin de lineas para cantidad de personas-->

<!--========================== Inicio de lineas de codigo para los pagos y su tipo =========================================-->
<div class="input-field col s12 m12 l12">

      <fieldset class="z-depth-3">
        <legend>&nbsp;Categorías de pago&nbsp;</legend>
        <div class=""><!--Inicio de la "" -->

          <div class="input-field col s12 m12 l5">
          <fieldset  class="z-depth-1">
              <legend>&nbsp;Tipo de pago&nbsp;</legend>
              <div class="col m1"></div>

              <p class="input-field col s12 m5 l5">
                <input class="with-gap " value="<?php echo $visit->tipo_pago; ?>" name="tipo_pago" type="radio"  id="indeterminate-checkbox" checked="default"  />
                <label for="indeterminate-checkbox">Efectivo</label>
              </p>

              <p class="input-field col s12 m5 l5">
                <input class="with-gap" value="<?php echo $visit->tipo_pago; ?>" name="tipo_pago" type="radio" id="indeterminate-checkbox" />
                <label for="indeterminate-checkbox">Tarjeta</label>
              </p>
            </fieldset>
          </div>

          <div class="input-field col s12 m12 l7">
            <fieldset  class="z-depth-1 ">
              <legend>&nbsp;Tipo moneda&nbsp;</legend>
              <p class="input-field col s12 m4 l4">
                <input class="with-gap" value="<?php echo $visit->moneda; ?>" name="moneda" type="radio"  id="indeterminate-checkbox" checked="default" />
                <label for="indeterminate-checkbox">Colones</label>
              </p>
              <p class="input-field col s12 m4 l4">
                <input class="with-gap" value="<?php echo $visit->moneda; ?>" name="moneda" type="radio" id="indeterminate-checkbox" />
                <label for="indeterminate-checkbox">Dolares</label>
              </p>
              <p class="input-field col s12 m4 l4">
                <input class="with-gap" value="<?php echo $visit->moneda; ?>" name="moneda" type="radio" id="indeterminate-checkbox" />
                <label for="indeterminate-checkbox">Ambas</label>
              </p>
            </fieldset>

            </div>
          </div><!--Fin del div de la fila ???-->
      </fieldset>

</div><br>

<!--============================ Fin de lineas de codigo para los pagos y su tipo ==========================================-->

<!--===================================================================================================================================-->
<div class="center-align col s12">
  <!--BOTON QUE ME ENVIA EL FORMULARIO-->
<fieldset>
  <button title="Enviar" class="btn waves-effect waves-light teal darken-4"
      value="enviar"  type="submit" name="action"><span class="hide-on-small-only">Enviar</span>
      <i class="mdi-content-send material-icons right">done</i>
  </button>
    <!--BOTON QUE ME BORRA LO QUE ESCRIBI EN EL FORMULARIO-->
</fieldset>


</div>
      </form>
      <div class="right hide-on-large-only">
        <a href="index.php?c=Visitacion"><i style="color:#00b0ff" class="small material-icons blue-grey darken-2 z-depth-1 btn-floating pulse">arrow_back</i>&nbsp;Página anterior</a>
      </div>
    </div>
<!--   <h5>El usuario, el ASP, Y EL SECTOR SON VARIABLES QUE SE INGRESARAN CON LA SESION, PENDIENTE DE IMPLEMANTAR</h5>
  -->   </div>
       </div>
     </fieldset>

<!--================================================================================================================================-->
      </div>
    </div><!-- Div de los tamanos -->
  </div>
</div>
</main>

<script>

  $(document).ready(function(){
    $("#frm-visitacion").submit(function(){
      return $(this).validate();
      });
  })
  var instance = M.Timepicker.getInstance(elem);
  </script>







<?php
public function  Resultado_busquedaSubSector($result){
    require_once 'view/includes/headerPrincipal.php';
    require_once 'view/visitacion/resultadoConsultaSubsector.php';
    require_once 'view/includes/footer.php';
}

/*=============================>> Para trabajar con la seccion de reporte SEMEC <<====================================*/
public function Reporte_SEMEC(){
  require_once 'view/includes/headerPrincipal.php';
  require_once 'view/visitacion/reportes/SEMEC/SEMEC.php';
  require_once 'view/includes/footer.php';
}

public function Resultado_SEMEC($result){
  require_once 'view/includes/headerPrincipal.php';
  require_once 'view/visitacion/reportes/SEMEC/resultado_SEMEC.php';
  require_once 'view/includes/footer.php';
}

public function Excel_SEMEC(){
   header("Content-type: application/vnd.ms-excel");
     header("Content-Disposition: attachment; filename=reporte.xls");
     header("Pragma: no-cache");
     header("Expires: 0");
     require_once 'view/visitacion/reportes/SEMEC/resultado_SEMEC.php';
 }
/*==========================================>>Para trabajar con la seccion de reporte Diario<<=========================*/

/*==================>> Para trabaar con la parte del reporte Nacionalidade Garupados por Provincia=========================*/

public function NacionalesAgrupadosXProvincia(){
  require_once 'view/includes/headerPrincipal.php';
  require_once 'view/visitacion/reportes/nacionales/NacionalesAgrupadosXProvincia.php';
  require_once 'view/includes/footer.php';
}

public function Resultado_Nacionalidades($response){
  require_once 'view/includes/headerPrincipal.php';
  require_once 'view/visitacion/reportes/nacionales/resultado_Nacionalidades.php';
  require_once 'view/includes/footer.php';
}

/*=====================Para trabajar con la seccionde reportes para los sectores individualmente===========*/
  public function Reporte_Totales_por_Sector(){
    require_once 'view/includes/headerPrincipal.php';
    require_once 'view/visitacion/reportes/totales_sector/Totales_por_Sector.php';
    require_once 'view/includes/footer.php';
  }

  public function Resultado_Reporte_Totales_por_Sector($response){
    require_once 'view/includes/headerPrincipal.php';
    require_once 'view/visitacion/reportes/totales_sector/resultado_Totales_por_Sector.php';
    require_once 'view/includes/footer.php';
  }

/*==============================Para trabajar con el reporte de campistass===========================================================*/
  public function Reporte_Campistas(){
    require_once 'view/includes/headerPrincipal.php';
    require_once 'view/visitacion/reportes/campistas/Campistas.php';
    require_once 'view/includes/footer.php';
  }

  public function Resultado_Reporte_Campistas($result){
    require_once 'view/includes/headerPrincipal.php';
    require_once 'view/visitacion/reportes/campistas/resultado_campistas.php';
    require_once 'view/includes/footer.php';
  }



 ?>
=======
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta content="text/html; charset=windows-1252" http-equiv="Content-Type" />
        <meta charset="utf-8" />

        <title>PROBANDO 1, 2, 3 ...</title>

        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>

        <script type="text/javascript">

            $(document).ready(function () {
                $('#cadena').attr("disabled", true);
                $('#comercio').attr("disabled", true);

                $('#compania').keyup(function () {
                    var value = $(this).val();
                    if (value.length == 0) {
                        $('#cadena').val('');
                        $('#comercio').val('');
                        $('#cadena').attr("disabled", true);
                        $('#comercio').attr("disabled", true);
                    }
                    else
                        $('#cadena').removeAttr("disabled");
                });

                $('#cadena').keyup(function () {
                    var value = $(this).val();
                    if (value.length == 0) {
                        $('#comercio').val('');
                        $('#comercio').attr("disabled", true);
                    }
                    else
                        $('#comercio').removeAttr("disabled");
                });
            });
        </script>

    </head>

  <body>
    <div id="body">
        <form name="formFiltro">
            <input type="text" id="compania"/>
            <input type="text" id="cadena" />
            <input type="text" id="comercio" />
        </form>
    </div>
  </body>
</html>







>>>>>>> master





























<main>
  <div class="container">
    <div class="">

      <div class="col s12 m12 l12">

<!--====================================================================================================================-->
<form id="frm-visitacion" action="?c=Visitacion&a=Guardar" method="post" enctype="multipart/form-data">
  <!--<input type="hidden" name="id" value="<php echo $visit->id; ?>" />-->
        <div class="">
          <fieldset>
            <div class="">
              <div class="col s12 m12 l12">
                <div class="">
                    <div><!-- Inicio de las filas y columnas -->

                      <div class="row"><!---Inicio de dos columnas-->

                   <div class="input-field col s12 m4 l4">
                      <fieldset  class="z-depth-1 ">
                        <legend>&nbsp;Proposito de Visitación&nbsp;</legend>
                        <div class="input-field col s12 m12 l12">
                        <select id="proposito_visita" name="proposito_visita">
                            <option id="proposito_visita" value="" disabled selected>&nbsp;Referencia de Visita</option>
                                        <option value="Visita por el dia">Por el dia</option>
                                        <option value="Acampando">Acampando</option>
                                        <option value="Hospedado en estacion biologica">Hospedado estación biológica.</option>

                                      </select>
                                      <label><i class="small material-icons" >info_outline</i></label>
                                    </div>
                          </fieldset>
                        </div>


                      <div class="input-field col s6 m4 l2">
                        <fieldset><legend>Numero diario</legend>
                          <div class="btn teal darken-4 right-align "> #&nbsp;00 </div>
                        </fieldset>
                      </div>

                      <div class="input-field col s6 m4 l3 hide-on-med-and-down">
                        <fieldset><legend>Capacidad de Sector</legend>
                            <div class="btn teal darken-4 right-align "> 20/80 </div>
                        </fieldset>
                      </div>

                      <div class="input-field col s6 m4 l3">
                        <fieldset><legend>Sector</legend>
                            <div class="btn teal darken-4 right-align ">Santa Rosa</div>
                            <br>

                        </fieldset>
                      </div>
                     </div><!--Fin de columnas -->
                   </div><!-- Fin de filas y columnas -->
                </div><!-- <!-- Fin del row -->
              </div><!-- Tamanos -->
            </div><!-- Fin del row -->
        <!--================================================================================================================================-->
      </fieldset>
    </div><!-- Fin de los fieldset -->
<!--=========================================================================================================================================-->
    <div id="" class="">
    <hr>
<!--===========================================================================================================-->
    <fieldset>
      <legend><h5>Formulario de Visitación </h5>
        <h6>Completar la información con los datos correspondientes</h6></legend>
        <div class="">
          <hr> <br>
          <div class="row"><!--la clase en este div me permite tener los elementos del formulario en orden y en las filas correspondientes-->
            <div class="col col s12 m12 l12">
              <div class="">
        <!--        <form id="frm-visitacion" action="?c=Visitacion&a=Guardar" method="post" enctype="multipart/form-data">-->
                  <input type="hidden" name="id" value="<?php echo $visit->id; ?>" />

                  <div class="row">
                  <div class="input-field col s12 m4 l4">
                  </div>
                  <div class="input-field col s12 m4 l4 ">
                    <fieldset>
                      <legend>Sub sector al que se dirije</legend>
                      <div class="input-field col s12 m12 l12">
                        <label for="subSector"> <i class="small material-icons"></i><span class="hide-on-small-only">Sub Sector</span></label>
                         <input  type="text" class="" id="subSector" name="subSector" value="" required>

                      </div>
                    </fieldset>
                  </div>
                    <div class="input-field  col s12 m4 l4">
                    </div>
                  </div>
                  <div><!--Inicio de la primera fila-->
                    <div class="input-field col s6 m6 l4  ">
                      <input  id="name" type="text" name="nombre" value="" class="validate" class="form-control"  required >
                      <label for="name" ><i class="small material-icons">face</i></span>&nbsp;Nombre</label>
                    </div>
                      <div class="input-field col s6 m6 l4  ">
                        <input  id="noIdentificacion" type="text" name="noIdentificacion" value="" class="validate" class="form-control"  required >
                        <label for="noIdentifiacion" >  <i class="small material-icons">subtitles</i>&nbsp;Número de identifiación</label>
                      </div>
                      <div  class="input-field col s6 m6 l4  ">
                        <input  id="placa_automovil" type="text" name="placa_automovil" value="" class="validate" class="form-control"   >
                        <label for="placa_automovil" >  <i class="small material-icons">settings_ethernet</i>&nbsp;Placa automóvil</label>
                      </div>
                  </div><!--Fin de la primera fila -->
    <!--===================================================================================================================================================-->
    <!--===================================================================================================================================================-->
                <div class=""><!---Inicio de la segunda fila-->
                <!--==============Cargando los paices==============================-->
                  <?php
                  $conexion = mysql_connect("localhost","root");
                  mysql_select_db("sirevi",$conexion);
                  $sentencia_pais = "select * from pais order by nombre ASC";
                  $query_pais = mysql_query($sentencia_pais);
                  ?>
                  <div  class="input-field col s6 m6 l4">
                    <select name="pais">
                      <option value="" disabled selected>Elija un pais</option>
                      <?php while ($arreglo_pais = mysql_fetch_array($query_pais)) {  ?>
                      <option value="<?php echo $arreglo_pais['id']?>"><?php echo $arreglo_pais['nombre'] ?></option>
                      <?php } ?>
                    </select>
                    <label>País</label>
                  </div>

<!--==============Cargando las cuidades============================================-->
      <?php
      $conexion = mysql_connect("localhost","root");
      mysql_select_db("sirevi",$conexion);
      $sentencia = "select * from provincia order by nombre ASC";
      $query = mysql_query($sentencia);
      ?>
      <div class="input-field col s6 m6 l4">
        <select name="provincia">
          <option value="" disabled selected>Elija una provincia</option>
            <?php while ($arreglo = mysql_fetch_array($query)) {  ?>
          <option value="<?php echo $arreglo['id']?>"><?php echo $arreglo['nombre'] ?></option>
            <?php } ?>
          </select>
        <label> Provincia</label>
      </div>
<!--=================Fin del codigo para ciudades ===============-->
<fieldset>
  <table>
  <tr>
    <td>Referencia de Visita: </td>
    <td colspan="3">
      <select name="referencia_visita" onChange="habilitar(this.form)">
        <option value="" disabled selected>&nbsp;Referencia de Visita</option>
        <option value="Expontaneamente en ruta">1. Expontaneamente en ruta</option>
        <option value="Referencia de alguien mas">2. Referencia de alguien mas</option>
        <option value="Recomendación por amigos">3. Recomendación por amigos</option>
        <option value="Visita reiterada">4. Visita reiterada</option>
        <option value="Selección directa personal (Check list)">5. Selección directa personal (Check list)</option>
        <option value="Guías impresas">6. Guías impresas</option>
        <option value="Operadora turistica">7. Operadora turística</option>
        <option value="Medio de comunicación">8. Medio de comunicación</option>
        <option value="Grupo comunal organizado">9. Grupo comunal organizado</option>
        <option value="Empresa privada">10. Empresa privada</option>
        <option value="ONGs en proyectos de investigación y conservación">11. ONGs en proyectos de investigación y conservación</option>
        <option value="Institución pública">12. Institución pública</option>
        <option value="Otro">Otro</option>
      </select>
      <label><i class="small material-icons" >info_outline</i></label>
    </td>
  </tr>
  <tr>
    <td>Nombre: </td>
      <td><input type="text" name="nombre_referenciaVisita" value="" disabled>
    </td>
  </tr>
</table>
</fieldset>
<!--==================================================================================================================================-->
    <!--==================================================Lineas de codigo, respecto visitacion=========================================================-->

                <div class=""><!--Inicio de la tercera fila-->
                  <div class=""><!--Columna-->
                    <!--================Cargando los senderos==============================-->
                    <?php
                    $conexion = mysql_connect("localhost","root");
                    mysql_select_db("sirevi",$conexion);
                    $sentencia_sendero = "select * from sendero order by nombre ASC";
                    $query_sendero = mysql_query($sentencia_sendero);
                    ?>
                    <div class="">
                      <div class="input-field col s12 m8 l8"><!--vista small numero 12 araque abarque todo el ancho del dispositivo-->
                      <select name="sendero" multiple required>
                          <option value="" disabled selected>&nbsp;Seleccionar Senderos</option>
                           <?php while ($arreglo_sendero = mysql_fetch_array($query_sendero)) {  ?>
                           <option value="<?php echo $arreglo_sendero['id']?>"><?php echo $arreglo_sendero['nombre'] ?></option>
                           <?php } ?>
                        </select>
                      <label><span class="hide-on-small-only"><i class="small material-icons">swap_calls</i></span></label>
                    </div>
                  </div>
                </div>


                <div  class="input-field col s12 m4 l4"><!--Columna-->
                  <div class="">
                    <div>
                    <fieldset><legend>Dias acampando</legend>
                      <div>
                        <div class="input-field col s12 m12 l12  ">
                          <input  id="dias_camping" type="number" name="dias_camping" value="" class="validate" class="form-control" data-validacion-tipo="requerido|min:10" >
                          <label for="dias_camping" > <span class="hide-on-small-only"><i class="small material-icons">perm_contact_calendar</i></span>&nbsp;Dias acampando</label>
                        </div>
                      </div>
                    </fieldset>
                  </div>
                </div>
              </div><!--Fin de la tercera fila-->


<!--================================================== Fin lineas de codigo, respecto visitacion========================================================-->

<div class="input-field col s12 m12 l12"><!--IInicio de lineas para cantidad de personas-->
<ul class="" data-collapsible="">
   <li>
     <div class="center-align collapsible-header teal darken-4  white-text z-depth-3">
                          <i class=" material-icons">supervisor_account</i>Cantidad de personas</div>
     <div class="">
       <fieldset>
       <span>
         <div class="">
          <div class=""><!--Inicio de la primea fila dentro del collapsible-->
            <div class="input-field col s12 m12 l8">
              <fieldset class="z-depth-3">
                <legend>&nbsp;Nacionales&nbsp;</legend>
                <div class="input-field col s6 m4 l4  ">
                  <input  id="nacional_adult" type="text" name="nacional_adult" class="validate" onkeyup="sumaNacionales_Dia(); sumatoria_All(); monto_total_pagar();"  class="form-control" >
                  <label for="nacional_adult" ><span class="hide-on-small-only"><i class="small material-icons">offline_pin</i></span>&nbsp;Adultos </label>
               </div>

                <div class="input-field col s6 m4 l4  ">
                  <input  id="nacional_kid" type="text" name="nacional_kid" class="validate" onkeyup="sumaNacionales_Dia(); sumatoria_All(); monto_total_pagar();" class="form-control" >
                  <label for="nacional_kid" ><span class="hide-on-small-only"><i class="small material-icons">offline_pin</i></span>&nbsp;Niños </label>
              </div>

              <div class="input-field col s12 m4 l4  ">
                  <input  id="estudiantes" type="text" name="estudiantes"  class="validate" onkeyup="sumaNacionales_Dia(); sumatoria_All(); monto_total_pagar();" class="form-control" >
                  <label for="estudiantes" ><span class="hide-on-small-only"><i class="small material-icons">offline_pin</i></span>&nbsp;Estudiantes </label>
            </div>


            </fieldset>
          </div><!--Fin de columnas cantidad de ncionales por el dia-->

        <div class="input-field col s12 m12 l4">
          <fieldset class="z-depth-3">
            <legend>&nbsp;Extranjeros&nbsp;</legend>

            <div class="input-field col s6 m6 l6  ">
              <input  id="extranjero_adult" type="text" name="extranjero_adult" class="validate" onkeyup="sumaExtranjeros_Dia(); sumatoria_All(); monto_total_pagar();" class="form-control" data-validacion-tipo="requerido|min:10">
              <label for="extranjero_adult" ><span class="hide-on-small-only"><i class="small material-icons">offline_pin</i></span>&nbsp;Adultos </label>
            </div>

            <div class="input-field col s6 m6 l6  ">
              <input  id="extranjero_kid" type="text" name="extranjero_kid" class="validate" onkeyup="sumaExtranjeros_Dia(); sumatoria_All(); monto_total_pagar();" class="form-control" data-validacion-tipo="requerido|min:10">
              <label for="extranjero_kid" ><span class="hide-on-small-only"><i class="small material-icons">offline_pin</i></span>&nbsp;Niños </label>
            </div>
          </fieldset>
        </div>

      </div><!--Fin de la primera fila-->

        <div class="">

          <div class="input-field col s12 m12 l12">
            <fieldset class="z-depth-3">
              <div class=""><!--Inicio de la segunda fila-->
                <div class="input-field col s12 m4 l4  ">
                <input  id="personas_surf" type="number" name="personas_surf" value="" class="validate" onkeyup="sumaPersonasSurf(); monto_total_pagar();" >
                    <label for="personas_surf" >  <i class="small material-icons">supervisor_account</i>&nbsp;Cantidad Personas Surf</label>
                </div>

                 <div class="input-field col s6 m4 l4  ">
                   <input  id="prepago" type="number" name="prepago" value="" class="validate" class="form-control" data-validacion-tipo="requerido|min:10" >
                   <label for="prepago"><span class="hide-on-small-only"><i class="small material-icons">picture_in_picture</i></span>&nbsp;Prepago</label>
                 </div>

                 <div class="input-field col s6 m4 l4  ">
                   <input  id="exonerado" type="number" name="exonerado" value="" class="validate" class="form-control" data-validacion-tipo="requerido|min:10">
                  <label for="exonerado" > <span class="hide-on-small-only"><i class="small material-icons">perm_identity</i></span>&nbsp;Exonerado</label>
                </div>

              </div><!--Fin del div de la segunda fila -->
            </fieldset>
          </div>
        </div>
<!--<h6>Preguntar sobre como se calcula el precio para hacer la funcion en javascript</h6>-->
       </div>
      </span>
     </fieldset>
   </div><!--collapsible body-->
   </li>
  </ul>
 </div>
</div><!--Fin de lineas para cantidad de personas-->

<!--========================== Inicio de lineas de codigo para los pagos y su tipo =========================================-->
<div class="input-field col s12 m12 l12">

      <fieldset class="z-depth-3">
        <legend>&nbsp;Categorías de pago&nbsp;</legend>
        <div class="center-align"><!--Inicio de la "" -->

          <div class="input-field col s12 m6 l6">
            <fieldset  class="z-depth-1 input-field col s12 m12 l12">
              <legend>&nbsp;Tipo de pago&nbsp;</legend>
              <p class="input-field col s5 m6 l6">
                <input class="with-gap " value="efectivo" name="tipo_pago"  type="radio"  id="indeterminate-checkbox" checked="default"   />
                <label for="indeterminate-checkbox">Efectivo</label>


                <input class="with-gap" value="tarjeta" name="tipo_pago" type="radio" id="indeterminate-checkbox" />
                <label for="indeterminate-checkbox">Tarjeta</label>

              </p>
              <!--<p class="input-field col s12 m6 l4">
                <input class="with-gap" value="tarjeta" name="tipo_pago" type="radio" id="indeterminate-checkbox" />
                <label for="indeterminate-checkbox">Transferencia</label>
              </p>-->
            </fieldset>
          </div>

          <div class="input-field col s12 m6 l6">
            <fieldset  class="z-depth-1 input-field col s12 m12 l12">
              <legend>&nbsp;Tipo moneda&nbsp;</legend>
              <p class="input-field col s6 m6 l6">
                <input class="with-gap" value="colones" name="moneda" type="radio" selected id="indeterminate-checkbox" checked="default" />
                <label for="indeterminate-checkbox">Colones</label>

                <input class="with-gap" value="dolar" name="moneda" type="radio" id="indeterminate-checkbox" />
                <label for="indeterminate-checkbox">Dolares</label>

                <input class="with-gap" value="dolar" name="moneda" type="radio" id="indeterminate-checkbox" />
                <label for="indeterminate-checkbox">Ambos</label>
              </p>
            </fieldset>

            </div>
          </div><!--Fin del div de la fila ???-->
      </fieldset>

</div><br>
<!--============================ Fin de lineas de codigo para los pagos y su tipo ==========================================-->
<!--Inicio de lineas para la parte de muestra de cantda personas y montos totales-->
<div class="input-field col s12 m12 l12">
  <fieldset>
    <div class="">
      <div class="col s12 m12 l12">
        <div class="">
            <div><!-- Inicio de las filas y columnas -->

              <div class="row"><!---Inicio de dos columnas-->

                <div class="input-field col s6 m3 l4">
                  <fieldset  class="z-depth-2 "><legend>Total Nacionales</legend>
                    <div>Colones*: <input class="teal darken-4 white-text" type="text" id="total_Nacionales_Dia"  disabled value="0">
                    </div>
              </fieldset>
            </div>

            <div class="input-field col s6 m3 l4">
              <fieldset  class="z-depth-2 "><legend>Total Extranjeros</legend>
                <div>Dolares*: <input class="teal darken-4 white-text"  type="text" id="total_Extranjeros_Dia" disabled value="0">
                </div>
          </fieldset>
        </div>

            <div class="input-field col s6 m3 l4">
              <fieldset  class="z-depth-2 "><legend>Personas Surf</legend>
                <div>Dolares*: <input class="teal darken-4 white-text"  type="text" id="total_PersonasSurf" disabled value="0">
                </div>
          </fieldset>
        </div>


        <div class="row">

              <div class="col s6 offset-s3"><span>

                <div class="input-field col s12 m5 l6">
                  <fieldset class="z-depth-2 "><legend>Total de personas</legend>
                      <div>Personas*: <input class="teal darken-4 white-text" type="text" id="total_All"  disabled value="0">
                      </div>
                  </fieldset>
              </div>

              <div class="input-field col s12 m5 l6">
                <fieldset class="z-depth-2 "><legend>Monto a cancelar</legend>
                    <div >Colones*: <input class="teal darken-4 white-text" name="montoCancelar" type="text" id="montoCancelar" value="0"></div>
                </fieldset>
              </div>

            </span></div>
          </div>

<!--====================================  Fin de lineas para mostrar el total por nacionalidad   ==========================================================================-->
             </div><!--Fin de columnas -->
           </div><!-- Fin de filas y columnas -->
        </div><!-- <!-- Fin del row -->
      </div><!-- Tamanos -->
    </div><!-- Fin del row -->
<!--================================================================================================================================-->
</fieldset>
</div><!-- Fin del lineas para los montos y cant personas -->

<!--===================================================================================================================================-->
<div class="center-align col s12">

  <fieldset >
    <legend>Tipo de cambio dollar</legend>
    <div style="" id="boton_dolar" value="<?php echo"aqui va el valor del dollar"?>" class="btn teal darken-4 right-align ">&nbsp;$550</div>
  </fieldset>

  <!--BOTON QUE ME ENVIA EL FORMULARIO-->
<fieldset>
  <button title="Enviar" class="btn waves-effect waves-light teal darken-4"
      value="enviar"  type="submit" name="action"><span class="hide-on-small-only">Enviar</span>
      <i class="mdi-content-send material-icons right">done</i>
  </button>

    <!--BOTON QUE ME BORRA LO QUE ESCRIBI EN EL FORMULARIO-->
  <button title="Limpiar Pantalla" class="btn waves-effect waves-light teal darken-4"
    value="reset"  type="reset" name="action"><span class="hide-on-small-only">Limpiar</span>
    <i class="mdi-content-send material-icons right">delete</i>
  </button>
</fieldset>


</div>
      </form>
    </div>
<!--   <h5>El usuario, el ASP, Y EL SECTOR SON VARIABLES QUE SE INGRESARAN CON LA SESION, PENDIENTE DE IMPLEMANTAR</h5>
  -->   </div>
       </div>
     </fieldset>
<!--================================================================================================================================-->
      </div>
    </div><!-- Div de los tamanos -->
  </div>
</div>
</main>

<script>
    $(document).ready(function(){
          $("#frm-visitacion").submit(function(){
              return $(this).validate();
          });
      })

      function sumaNacionales_Dia(){/*Calcula el total a pagar por personas nacionales*/
          var valor1=verificar("nacional_adult");
          var valor2=verificar("nacional_kid");
          var valor3=verificar("estudiantes");

          document.getElementById("total_Nacionales_Dia").value=(parseFloat(valor1)*1500)+(parseFloat(valor2)*500)+(parseFloat(valor3)*500);
      }
/*=====================================================================================================================================*/
      function sumaExtranjeros_Dia(){/*Calcula el monto  pagar para personas extranjeros*/
          var valor1=verificar("extranjero_adult");
          var valor2=verificar("extranjero_kid");

          document.getElementById("total_Extranjeros_Dia").value=(parseFloat(valor1)*15)+(parseFloat(valor2)*5);

}
/*=====================================================================================================================================*/
      function sumatoria_All(){/*Sumatoria del total de personas que van incluidas en un solo registro de visitacion*/
          var valor1=verificar("nacional_adult");
          var valor2=verificar("nacional_kid");
          var valor3=verificar("estudiantes");
          var valor4=verificar("extranjero_adult");
          var valor5=verificar("extranjero_kid");


          document.getElementById("total_All").value=parseFloat(valor1)+parseFloat(valor2)+parseFloat(valor3)+parseFloat(valor4)+parseFloat(valor5);
      }
/*=====================================================================================================================================*/
      function monto_total_pagar(){/*Calcula el total a pagr inluyendo el derecho de surfing en playa naranjo*/
        var valor1=verificar("nacional_adult");
        var valor2=verificar("nacional_kid");
        var valor3=verificar("estudiantes");
        var valor4=verificar("extranjero_adult");
        var valor5=verificar("extranjero_kid");

        var valor6=verificar("personas_surf");

        var dolar=verificar("boton_dolar");

          document.getElementById("montoCancelar").value=(parseFloat(valor1)*1500)+(parseFloat(valor2)*500)+(parseFloat(valor3)*500)
                                                  +((parseFloat(valor4)*15)*550)+((parseFloat(valor5)*5)*550)+((parseFloat(valor6)*15)*550);

      }
/*=======================================================================================================================================*/
function sumaPersonasSurf(){
    var valor1=verificar("personas_surf");

    document.getElementById("total_PersonasSurf").value=(parseFloat(valor1)*15);

}
/*=======================================================================================================================================*/
      function verificar(id){//Verifica que sean datos numericos
          var obj=document.getElementById(id);
          if(obj.value=="")
              value="0";
          else
              value=obj.value;
          if(validate_importe(value,1)){
              // marcamos como erroneo
              obj.style.borderColor="#808080";
              return value;
          }else{
              // marcamos como erroneo
              obj.style.borderColor="#f00";
              return 0;
          }
      }
//=========================================================================================================================================
      function validate_importe(value,decimal){
          if(decimal==undefined)
              decimal=0;
          if(decimal==1){
              // Permite decimales tanto por . como por ,
              var patron=new RegExp("^[0-9]+((,|\.)[0-9]{1,2})?$");
          }
          else{
              // Numero entero normal
              var patron=new RegExp("^([0-9])*$")
          }

          if(value && value.search(patron)==0){
              return true;
          }
          return false;
      }
  </script>


<option value="" disabled selected>&nbsp;Referencia de Visita</option>







<main>
  <h4 class="header left"><span>&nbsp;</span><a href="#">
    <i class="medium material-icons circle blue-grey darken-2">assignment</i>Módulo Visitación</a></h4>

  <div class="container">
    <a href="?c=Visitacion&a=agregarRegistro"><span class="hide-on-med-and-up">
      <i class="small material-icons blue-grey darken-2 z-depth-1 btn-floating pulse">playlist_add</i>Nuevo registro</a>


      <div class="right hide-on-small-only">
        <a   href="?c=Visitacion&a=agregarRegistro">
          <i class="small material-icons blue-grey darken-2 z-depth-1 btn-floating pulse">playlist_add</i>Nuevo registro</a>
      </div>
    </div>


<div class="">
    <!--Busqueda avanzada-->
<div class="row">
  <div class="col s12 m12 l12">
    <ul class="collapsible" data-collapsible="accordion">
  <li>
    <div class="collapsible-header"><i class="material-icons">search</i>Filtro de busqueda</div>
    <div class="collapsible-body"><span><div class="row">
      <div class="col s12 m12 l12">

        <fieldset>
          <ul class="input-field col s12 m12 l12 popout z-depth-3" data-collapsible="accordion">
          <li>
            <div class="header"><i class="material-icons">info_outline</i>Utilice los campos habilitados para realizar la busqueda de registro(s)</div>
            <div class="body "><span >
              <form action="?c=Visitacion&a=busquedaVisitacion" method="post">

                <div class="input-field col s12 m5 l4">
              <i class="small material-icons">contact_mail</i>
              <input type="text" name="nombre" class="black-text" placeholder="Nombre" style="width:200px;">
                </div>

              <div class="input-field col s12 m5 l4">
                    <i class="small material-icons">picture_in_picture</i>
                    <input type="text" name="noIdentificacion" class="black-text" placeholder="Identificacion" style="width:200px;">
              </div>

              <!--==============Cargando los paices==============================-->
<div class="row">
  <?php
  $conexion = mysql_connect("localhost","root");
  mysql_select_db("sirevi",$conexion);
  $sentencia_pais = "select * from pais order by nombre ASC";
  $query_pais = mysql_query($sentencia_pais);
  ?>
  <div  class="input-field col s6 m12 l3">
    <select name="pais">
      <option value="" selected>Elija un pais</option>
      <?php while ($arreglo_pais = mysql_fetch_array($query_pais)) {  ?>
      <option value="<?php echo $arreglo_pais['id']?>"><?php echo $arreglo_pais['nombre'] ?></option>
      <?php } ?>
    </select>
    <label>País</label>
  </div>

</div>


              <center>
                <button title="Enviar" class="btn waves-effect waves-light teal darken-4"
                  value="Buscar"  type="submit" name="action"> <span class="hide-on-small-only">Consultar</span>
                    <i class="mdi-content-send material-icons right">pageview</i>
                </button>
              </center>
              <!--<input type="submit" name="pais" value="Buscar" class="teal darken-4 waves-effect waves-light btn">-->
              </form><!--FORM end-->
          </span></div>
          <hr>


          <!--Inicio de las lineas para la consulta de ingreso y salida diario-->
    <!--      <div class="row center-align">

<div class="input-field col s12 m6 l3">

</div>

            <div class="input-field col s12 m6 l6 center">
              <ul class="collapsible" data-collapsible="accordion">
            <li>
              <div class=""><i class="material-icons">search</i>Consulta personas dentro y fuera del parque</div>
              <div class=""><span><div class="row">
                <div class="col s12 m12 l12">

                  <fieldset>
                    <ul class="input-field col s12 m12 l12 popout z-depth-3" data-collapsible="accordion">
                    <li>
                      <div class="header"><i class="material-icons">info_outline</i>Seleccione la fecha de hoy para verificar visitantes dentro del parque</div>
                      <div class="body "><span >
                        <form action="?c=Visitacion&a=consultaIngresoSalidaDiario" method="post">

                          <div class="row">
                            <div class="input-field col s12 m5 l2">
                        <!--  <i class="small material-icons">contact_mail</i><input type="text" name="nombre" class="black-text" placeholder="Nombre" style="width:200px;">--
                        </div>

                          <div class="input-field col s12 m5 l7">
                                <i class="small material-icons">event_note</i><input type="text" name="fecha" class="datepicker black-text" placeholder="Fecha" style="width:200px;">
                          </div>
          <br>
                      <div class="row">
                        <button title="Enviar" class="btn waves-effect waves-light teal darken-4"
                          value="Buscar"  type="submit" name="action"> <span class="hide-on-small-only">Consultar</span>
                            <i class="mdi-content-send material-icons right">pageview</i>
                        </button>
                      </div>
                      </div>
                    </form><!--FORM end--
                    </span>
                  </div>
                    <hr>
                   </li>
                  </ul>
                  </fieldset>
                </div>
              </div>
          </span>
          </div>
            </li>

          </ul>
            </div>

          </div> -->

          <!--Fin de las filas para consulta de ingreso salida diario-->


         </li>
        </ul>
        </fieldset>
      </div>
    </div>
</span></div>
  </li>

</ul>
  </div>
</div>




    <div class="row">
        <div class="col s12 m12 l12">
            <!-- Inicio de mi codigo -->
          <table class="responsive-table grey lighten-1 centered highlight z-depth-5">
            <thead class="white-text teal darken-4 z-depth-2">
<!--==================================Los valores en la vista de visitacion aun estan por aclarar cuale se deben mostrar-->
            <tr>
              <th>ID</th>
              <th>Proposito</th>
              <th>Fecha ingreso</th>
              <th>Nombre</th>
              <th>Identificación</th>
              <th>Placa automovil</th>
              <th>País</th>
              <!--<th>Provincia</th>-->
              <th>Sendero</th>
              <th>Tipo pago</th>
              <th>Moneda</th>
              <!--<th>Total pago</th> -->
              <!--<th>Total</th>-->
              <th>Ingresos</th>
              <th style="width:40px;"></th>
              <th colspan="">Acción</th>
            </tr>
<!--================================================================================================================== -->
          </thead>

          <tbody>
            <?php foreach ($this->model->Listar() as $r): ?>
            <tr>

              <td><?php echo $r->id; ?></td>
              <td><?php echo $r->proposito_visita; ?></td>
              <td><?php echo $r->fecha; ?></td>
              <td><?php echo $r->Nombre; ?></td>
              <td><?php echo $r->noIdentificacion; ?></td>
              <td><?php echo $r->placa_automovil; ?></td>

              <td><?php echo $r->Pais; ?></td>
            <!--  <td><?php echo $r->Provincia; ?></td> -->
          <!--    <td><?php echo $r->referencia_visita ?></td>-->

              <td><?php echo $r->Sendero; ?></td>
              <td><?php echo $r->tipo_pago; ?></td>
              <td><?php echo $r->moneda; ?></td>

              <td><?php if($r->salida==0){
                echo "<a href='?c=Visitacion&a=Salida&id=".$r->id."'>
                        <i class='circle white darken-2 small material-icons tooltipped'
                          data-position='bottom' data-delay='50' data-tooltip='Dentro del parque'>directions_walk</i></a>";


                    }
                    elseif ($r->salida==1) {
                      echo "<a   href='?c=Visitacion&a=Salida&id=".$r->id."'>
                              <i class='circle red darken-2 small material-icons tooltipped'
                                data-position='bottom' data-delay='50' data-tooltip='Fuera del parque'>do_not_disturb_off</i></>";
                  }; ?></td>
              <td>
                <a  title="Editar Información"  href="?c=Visitacion&a=Modificar&id=<?php echo $r->id; ?>"><i
                    class="white circle z-depth-3 small material-icons right">edit</i></a>
              </td>
              <td>
              <a title="Borrar Información"  onclick="return confirm('¿Seguro de eliminar este registro?');"
                 href="?c=Visitacion&a=Eliminar&id=<?php echo $r->id; ?>">
                  <i class="white circle z-depth-3 small material-icons right">delete</i></a>
              </td>
            </tr>
          <?php endforeach; ?>
          </tbody>
        </table>
      </div><!-- Div de los tamanos -->
    </div><!--Div del row-->
  </div><!--Div del container-->
</main>


<!--///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
<html>
<head>
<title>Untitled</title>

<script>
function habilitarCombo(valor){
if(valor==2){
document.getElementById("departamento").disabled = true;
document.getElementById("articulo").disabled = false;
}
else {
document.getElementById("departamento").disabled = true;
document.getElementById("articulo").disabled = true;
}
}
</script>

</head>
<body>
<label>

  <br>
  <br>
  <hr>
<span class="small">Departamento al que pertenece el equipo</span>
</label>
<select name="departamento" id="departamento" disabled="true">
<option selected="" value="">[Seleccione un departamento]</option>
<option value="op01">op01</option>
<option value="op01">op02</option>
<option value="op01">op03</option>
</select>

<label>Articulo
<span class="small">Articulo asignado al equipo</span>
</label>
<select name="articulo" id="articulo" disabled="true">
<option selected="" value="">[Seleccione un articulo]</option>
<option value="op22">op22</option>
<option value="op22">op23</option>
<option value="op22">op24</option>
</select>

<label>Estado
<span class="small">Status del equipo</span>
</label>
<select name="estado" id="estado" onchange="habilitarCombo(this.value);">
<option value="-1">[Seleccione estado del equipo]</option>
<option value="2">En Uso</option>
<option value="3">Stock</option>
</select>
</body>
</html>

<!--//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->









































































<body class="body" >
  <!--OPCIONES PARA EL MENU LATERAL DEL RESPONSIVE-->
<!--INFORMACION DENTRO DEL SIDENAV-->
<!--============================================================================================-->
  <div>
   <br>
   <h5>&nbsp;Área de Conservación Guanacaste</h5>
   <h6>&nbsp;Módulo de reportes, seleccione cualquiera de las opciones disponibles para crear un reporte</h6>
   <hr>

         <div class><!--INICIO DE LA PREVISTA DE DIV'S-->
           <div class="col s12 m12 l12"><!--Div que me ceclara el tamano general de toda la pagina-->
             <div class>

 <!--INICIO DE PRIMERA COLUMNA-->
               <div class="row"><!---INICIO DE LA PRIMERA FILA-->
                   <div  class="input-field col s12 m4 l4">
                     <div class="card">
                       <div class="card-image waves-effect waves-block waves-light">
                         <img class="activator" src="assets/img/paises.jpg">
                       </div>

                       <div class="card-content">
                         <span class="card-title activator grey-text text-darken-4">Reporte Nacionalidades<i class="material-icons right">more_vert</i></span>
                         <p><a href="#">Haga click aquí</a></p>
                       </div>

                       <div class="card-reveal">
                         <span class="card-title grey-text text-darken-4">Reporte Nacionalidades<i class="material-icons right">close</i></span>
                         <div class="container">
                            <div class="row">
                              <div class="col s12 m12 l12">
                              <!-- Inicio de mi codigo -->
                              <table class="responsive-table grey lighten-1 centered highlight z-depth-5">
                                <ul class="collection">
                                  <li class="collection-item avatar">
                                    <img src="assets/img/paises.jpg" alt="Imagen no disponible" class="circle">
                                    <a><span class="title"></span>
                                      <p><a href="?c=Visitacion&a=Reporte">Para crear reporte <br> Click aquí</a><br></p></a>

                                      <a href="?c=Visitacion&a=Reporte" class="secondary-content tooltipped "
                                            data-position="left" data-delay="50" data-tooltip="Nacionalidades">

                                      <span class="hide-on-small-only"><i class="medium material-icons">public</i></span></a>
                                  </li>
                                </ul>
                              </table>

                            </div><!-- Div -->
                          </div>
                        </div><!--div container interno-->
                      </div><!-- end of card reveal-->
                     </div>
                   </div>



 <!--INICIO DE SEGUNDA COLUMNA-->
               <div class="input-field col s12 m4 l4">
                 <div class="card">
                   <div class="card-image waves-effect waves-block waves-light">
                     <img class="activator" src="assets/img/sectores.jpg">
                   </div>
                   <div class="card-content">
                     <span class="card-title activator grey-text text-darken-4">Reporte Sectores<i class="material-icons right">more_vert</i></span>
                     <p><a href="#">Haga click aquí</a></p>
                   </div>
                   <div class="card-reveal">
                     <span class="card-title grey-text text-darken-4">Reporte Sectores<i class="material-icons right">close</i></span>
                     <div class="container">
                        <div class="row">
                          <div class="col s12 m12 l12">
                          <!-- Inicio de mi codigo -->
                          <table class="responsive-table grey lighten-1 centered highlight z-depth-5">
                            <ul class="collection">
                              <li class="collection-item avatar">
                                <img src="assets/img/sectores.jpg" alt="Imagen no disponible" class="circle">
                                <a><span class="title"></span>
                                  <p><a href="?c=Visitacion&a=Reporte">Para crear reporte <br> Click aquí</a><br></p></a>

                                  <a href="?c=Visitacion&a=" class="secondary-content tooltipped "
                                        data-position="left" data-delay="50" data-tooltip="Sectores">

                                  <span class="hide-on-small-only"><i class="medium material-icons">view_quilt</i></span></a>
                              </li>
                            </ul>
                          </table>

                        </div><!-- Div -->
                      </div>
                    </div><!--div container interno-->
                  </div><!-- end of card reveal-->
                 </div>
                </div>

<!--INICIO DE LA TERCERA COLUMNA-->
            <div class="input-field col s12 m4 l4">
              <div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                  <img class="activator" src="assets/img/paises.jpg">
                </div>
                <div class="card-content">
                  <span class="card-title activator grey-text text-darken-4">Reporte <i class="material-icons right">more_vert</i></span>
                  <p><a href="#">Haga click aquí</a></p>
                </div>
                <div class="card-reveal">
                  <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                  <p>La realizacion del reporte </p>
                </div>
              </div>
            </div><!--FIN DEL DIV DE LA PRIMERA FILA -->
</div><!--FIN DEL DIV QUE ME DECLARA EL TAMANO DE LA CARTA-->

 <!--INICIO DE LA FILA 2-->
 <!--INICION DE PRIMERA COLUMNA-->
  <hr>
                 <div class="row"><!--INICIO DEL DIV DE LA SEGUNDA FILA-->
                   <div class="input-field col s4">
                     <div class="card">
                       <div class="card-image waves-effect waves-block waves-light">
                         <img class="activator" src="assets/img/.jpg">
                       </div>
                       <div class="card-content">
                         <span class="card-title activator grey-text text-darken-4">Reporte<i class="material-icons right">more_vert</i></span>
                         <p><a href="#">Crear consulta para reporte</a></p>
                       </div>
                       <div class="card-reveal">
                         <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                         <p>La realizacion del reporte </p>
                       </div>
                     </div>
                  </div><!--FIN DEL DIV QUE ME DECLARA EL TAMANO-->

 <!--INICIO DE SEGUNDA COLUMNA-->
               <div class="input-field col s4">
                 <ul class="popout collapsible" class="popout" data-collapsible="accordion">
                  <li>
                    <div class="collapsible-header"><i class="material-icons">filter_drama</i>First</div>
                    <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
                  </li>
                  <li>
                    <div class="collapsible-header"><i class="material-icons">place</i>Second</div>
                    <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
                  </li>
                  <li>
                    <div class="collapsible-header"><i class="material-icons">whatshot</i>Third</div>
                    <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
                  </li>
                </ul>
               </div>

<!--INICIO DE TERCER COLUMNA-->
              <div class="input-field col s4">
                <div class="row">
                  <div class="row">
                          <div >
                            <div class="card blue-grey darken-1">
                              <div class="card-content white-text">
                                <span class="card-title">Card Title</span>
                                <p>I am a very simple card. I am good at containing small bits of information.
                                I am convenient because I require little markup to use effectively.</p>
                              </div>
                              <div class="card-action">
                                <a href="#">This is a link</a>
                                <a href="#">This is a link</a>
                              </div>
                            </div>
                          </div>
                        </div>
              </div>
       </div><!--FIN DEL DIV DE LA SEGUNDA FILA-->


 <!--INICIO DE LA TERCERA FILA-->
 <!--INICIO DE LA COLUMNA PUESTO EN INSTITUCION-->
           <div class="row"><!--INICIO DE TERCERA FILA-->
               <div class="row">
                 <div class="input-field col s12">
                   <input id="puesto" type="text"  class="form-control" class="validate">
                   <label for="puesto"><i class="small material-icons"></i>&nbsp;AQUI VA ALGO </label>
                 </div>
               </div>
             </div><!--Fin de la tercera fila-->

 <!--INICIO DE LINEAS PARA EL CORREO-->
               <div class="row">
              soy un div a la espera de un elemento
               </div>
             </div>
           </div><!--Fin del div de la segunda fila-->
         </div><!--Fin del div que me declara el tamano-->
       </div><!--Fin de la prevista de los div's-->

 <!--INICIO DE LOS-->
       <div class="col-lg-12">

           <hr/>
       </div>

 </div><!--FIN DE container-contact-->



























<?php
  $mysqli  = new mysqli("localhost","root","","sirevi");

    $salida= "";
    $query= "SELECT * FROM visitacion ORDER BY id ASC";

    if (isset($_POST['consulta'])) {
      $q = mysql_real_escape_string($_POST['consulta']);
      $query = "SELECT id, nombre, noIdentificacion, pais, tipo_pago, moneda
      FROM visitacion  WHERE nombre  LIKE '%".$q."%' ";

    }
      $resultado = mysqli_query($query);

      if ($resultado > 0) {
        $salida.="<table class='responsive-table grey lighten-1 centered highlight z-depth-5'>
      		<thead class'white-text brown z-depth-2'>
      			<tr>
      				<th>ID</th>
      				<th>Proposito</th>
      				<th>Nombre</th>
      				<th>Identificacion</th>
      				<th>Pais</th>
      				<th>Pago</th>
      				<th>Moneda</th>
      			</tr>
      			</thead>
    			  <tbody>";
            while ($fila = $resultado->fetch_assoc()) {
              $salida.="<tr>
                          <td>".$fila['id']."</td>
                          <td>".$fila['nombre']."</td>
                          <td>".$fila['noIdentificacion']."</td>
                          <td>".$fila['pais']."</td>
                          <td>".$fila['tipo_pago']."</td>
                          <td>".$fila['moneda']."</td>
              </tr>";
            }

            $salida.="</tbody></table>";
      }
      else{
        $salida.="No hay datos";
      }

      echo $salida;

      $mysqli->close();
 ?>
<!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->





<main>
  <div class="container">
    <div class="row">

      <div class="col s12 m12 l10">
        <!-- Inicio de mi codigo -->
        <div id="search-docs" class="section scrollspy">
          <hr>
<!--===========================================================================================================-->


<fieldset>
  <legend><h5>Formulario para modificar información</h5>
    <h6>Esta es la pagina para la descripcion</h6></legend>
    <div class="">
      <hr>
      <br>
      <div class="">
        <div class="col col s12 m12 l12">
          <div class="">
            <form id="frm-asp" action="?c=Sendero&a=Guardar" method="post" enctype="multipart/form-data">
              <input type="hidden" name="id" value="<?php echo $sendero->id; ?>" />



              <div class=""><!---INICIO DE LA SEGUNDA FILA-->
                <div class="input-field col s12 m12 l12  "><!----->
                  <input  id="" type="text" name="atractivo" value="<?php echo $sendero->atractivo; ?>" class="validate" class="form-control"  required >
                  <label for="atractivo" >  <i class="small material-icons">assignment_late</i><span class="hide-on-small-only">Atractivos del sendero</label>
                </div>





                <!---Inicio de la tercera fila *columna1-->
                  <div class="">
                    <div class="input-field col s12 m6 l4  ">
                      <input  id="distancia" type="text" name="distancia" value="<?php echo $sendero->distancia; ?>" class="validate" class="form-control" required >
                      <label for="distancia" >  <i class="small material-icons">transfer_within_a_station</i>Distancia ida y vuelta</label>
                 </div>

                 <!--Columna2 fila3-->
                 <div class="input-field col s12 m6 l4  ">
                   <input  id="tiempo_recorrido" type="text" name="tiempo_recorrido" value="<?php echo $sendero->tiempo_recorrido; ?>" class="validate" class="form-control" data-validacion-tipo="requerido|min:10" required >
                   <label for="tiempo_recorrido" >  <i class="small material-icons">timer</i>Tiempo de recorrido</label>
                  </div>

                   <!--Columna3 fila3-->
                   <div class="input-field col s12 m6 l4  ">
                     <input  id="" type="text" name="punto_alto" value="<?php echo $sendero->punto_alto; ?>" class="validate" class="form-control" data-validacion-tipo="requerido|min:10" required >
                     <label for="punto_alto" >  <i class="small material-icons">wallpaper</i>Punto mas alto</label>
                    </div>
                  </div><!--Fin de la segunda fila -->







            <fieldset>
              <!---Inicio de la cuarta fila-->
                  <div class="">
                    <div class="input-field col s6 m6 l6  ">
                      <input  id="punto_inicio" type="text" name="punto_inicio" value="<?php echo $sendero->punto_inicio; ?>"  class="form-control validate" data-validacion-tipo="requerido|min:10" required >
                      <label for="punto_inicio" >  <i class="small material-icons">directions_walk</i>Punto inicio</label>
                 </div>

                 <!--columna-->
                   <div class="input-field col s6 m6 l6  ">
                     <input  id="punto_llegada" type="text" name="punto_llegada" value="<?php echo $sendero->punto_llegada; ?>" class="validate" class="form-control" data-validacion-tipo="requerido|min:10" required >
                     <label for="punto_llegada" >  <i class="small material-icons">directions_walk</i>Punto llegada</label>
                    </div>
                  </div><!--Fin de la cuarta fila -->
            </fieldset>


          <!---Inicio de la cuarta fila-->
              <div class="">
                <div class="input-field col s6 m6 l6  ">
                  <input  id="punto_inicio" type="text" name="punto_inicio" value="<?php echo $sendero->punto_inicio; ?>"  class="form-control validate" data-validacion-tipo="requerido|min:10" required >
                  <label for="punto_inicio" >  <i class="small material-icons">directions_walk</i>Punto inicio</label>
             </div>

             <!--columna-->
               <div class="input-field col s6 m6 l6  ">
                 <input  id="punto_llegada" type="text" name="punto_llegada" value="<?php echo $sendero->punto_llegada; ?>" class="validate" class="form-control" data-validacion-tipo="requerido|min:10" required >
                 <label for="punto_llegada" >  <i class="small material-icons">directions_walk</i>Punto llegada</label>
                </div>
              </div><!--Fin de la cuarta fila -->



<fieldset>
  <!--Inicio de la quinta fila-->
  <div class="">
  <!--columna-->
   <div class="input-field col s12 m12 l12  ">
     <input  id="descripcion" type="text" name="descripcion" value="<?php echo $sendero->descripcion; ?>" class="validate" class="form-control" data-validacion-tipo="requerido|min:10" required >
     <label for="descripcion" >  <i class="small material-icons">info_outline</i>Descripción del sendero</label>
    </div>
  </div><!--Fin de la quinta fila -->
</fieldset>



<fieldset>
  <!--Inicio de la quinta fila-->
  <div class="">
  <!--columna-->
   <div class="input-field col s12 m12 l12  ">
     <input  id="regulaciones" type="text" name="regulaciones" value="<?php echo $sendero->regulaciones; ?>" class="validate" class="form-control" data-validacion-tipo="requerido|min:10" required >
     <label for="regulaciones" >  <i class="small material-icons">report_problem</i>Regulaciones</label>
    </div>
  </div><!--Fin de la quinta fila -->
</fieldset>




              <!--BOTON QUE ME ENVIA EL FORMULARIO-
              <button title="Enviar" class="btn waves-effect waves-light teal darken-4"
                value="enviar"  type="submit" name="action"><span class="hide-on-small-only">Enviar</span>
                     <i class="mdi-content-send material-icons right">done</i>
              </button>

            <!--BOTON QUE ME BORRA LO QUE ESCRIBI EN EL FORMULARIO--
            <button title="Limpiar Pnatalla" class="btn waves-effect waves-light teal darken-4"
              value="reset"  type="reset" name="action"><span class="hide-on-small-only">Limpiar</span>
                   <i class="mdi-content-send material-icons right">delete</i>
            </button> -->

					 </div>
         </form>
           </div>

         </div>
       </div>
</fieldset>


<!--================================================================================================================================-->
        </div>
      </div><!-- Div de los tamanos -->
      </div>
      </div>
    </main>

  <script>
      $(document).ready(function(){
          $("#frm-sendero").submit(function(){
              return $(this).validate();
          });
      })
  </script>








































<fieldset>
  <legend><h5>Formulario para Registros</h5>
    <h6>Completar la informacion con los datos correspondientes</h6></legend>
    <div class="container contact">
      <hr>
      <br>
      <div class="row">
        <div class="col col s12 m12 l12">
          <div class="row">
            <form id="frm-asp" action="?c=Sendero&a=Guardar" method="post" enctype="multipart/form-data">
              <input type="hidden" name="id" value="" />

              <div>
                <div class="row"><!---INICIO DE LA SEGUNDA FILA-->
                  <div class="input-field col s6 m5 l6  "><!--Lineas para la descripcion de area de conservacion a la que pertenece el area silvestre--->
                    <input  id="nombre" type="text" name="nombre" value="" class="validate" class="form-control" data-validacion-tipo="requerido|min:10" required >
                    <label for="nombre" >  <i class="small material-icons">swap_calls</i><span class="hide-on-small-only">Nombre del Sendero</label>
                  </div>


                <!--INICIO DE COLUMNA -->
                <div class="input-field col s6 m5 l6  ">
                  <input  id="distancia" type="number" name="distancia" value="<?php echo $sendero->distancia; ?>" class="validate" class="form-control" data-validacion-tipo="requerido|min:10" required >
                  <label for="distancia" >  <i class="small material-icons">settings_backup_restore</i>Distancia</label>
                </div>
              </div>
            </div>


              <div class="row"><!---INICIO DE LA PRIMERA FILA-->
                <div class="input-field col s6 m6 l6  ">
                  <input  id="latitud" type="text" name="latitud"  class="form-control validate" data-validacion-tipo="requerido|min:10" required >
                  <label for="latitud" >  <i class="small material-icons">language</i>Latitud</label>
             </div>


               <!--INICIO DE COLUMNA CODIGO-->
               <div class="input-field col s6 m6 l6  ">
                 <input  id="longitud" type="text" name="longitud" value="" class="validate" class="form-control" data-validacion-tipo="requerido|min:10" required >
                 <label for="longitud" >  <i class="small material-icons">language</i>Longitud</label>
                </div>
              </div><!--FIN DEL DIV DE LA PRIMERA FILA -->



              <?php
              $conexion = mysql_connect("localhost","root");
              mysql_select_db("sirevi",$conexion);
              $sentencia = "select * from sector order by nombre ASC";
              $query = mysql_query($sentencia);
              ?>
              <div class="row">
                 <div class="input-field col s12 m12 l12">
                  <select name="sector">
                     <option value="" disabled selected>Elija una opcion</option>
                    <?php while ($arreglo = mysql_fetch_array($query)) {  ?>
                    <option value="<?php echo $arreglo['id']?>"><?php echo $arreglo['nombre'] ?></option>
                    <?php } ?>
                  </select>

                  <label><i class="small material-icons">view_quilt</i>Sector al que Pertenece</label>
                </div>
               </div>


              <!--BOTON QUE ME ENVIA EL FORMULARIO-->
              <button title="Enviar" class="btn waves-effect waves-light teal darken-4"
                value="enviar"  type="submit" name="action"><span class="hide-on-small-only">Enviar</span>
                     <i class="mdi-content-send material-icons right">done</i>
              </button>

            <!--BOTON QUE ME BORRA LO QUE ESCRIBI EN EL FORMULARIO-->
            <button title="Limpiar Pnatalla" class="btn waves-effect waves-light teal darken-4"
              value="reset"  type="reset" name="action"><span class="hide-on-small-only">Limpiar</span>
                   <i class="mdi-content-send material-icons right">delete</i>
            </button>

					 </div>
         </form>
           </div>

         </div>
       </div>
</fieldset>




































<tbody>
  <?php
    if ($_POST):
      require('model/conexion.php');
      $con = Conectar();
      $fecha1 = $_POST['fechaInicio'];
      $fecha2 = $_POST['fechaFinal'];
      $eti = $_POST['etiqueta'];

      if ($eti!='') {
        $sql = "select insidente.fecha, activo.etiqueta, activo.tipo, insidente.ubicacion, insidente.prioridad,
          insidente.descripcion, insidente.usuario, insidente.foto from insidente inner join activo on insidente.activo = activo.id
          where (activo.etiqueta = :eti) and (insidente.fecha between :fecha1 and :fecha2)";

          $stmt = $con->prepare($sql);
          $result = $stmt->execute(array(':fecha1'=>$fecha1,':fecha2'=>$fecha2,':eti'=>$eti));

      } else if ($eti==''){
        $sql = "select insidente.fecha, activo.etiqueta, activo.tipo, insidente.ubicacion, insidente.prioridad,
          insidente.descripcion, insidente.usuario, insidente.foto from insidente inner join activo on insidente.activo = activo.id
          where insidente.fecha between :fecha1 and :fecha2";

          $stmt = $con->prepare($sql);
          $result = $stmt->execute(array(':fecha1'=>$fecha1,':fecha2'=>$fecha2));
}

      $rows = $stmt->fetchAll(\PDO::FETCH_OBJ);

      foreach ($rows as $row): ?>
      <tr>
        <?php if(count($rows)): ?>
          <td colspan="2"> <?php echo $row->fecha;?> </td>
          <td> <?php echo $row->etiqueta;?> </td>
          <td> <?php echo $row->ubicacion;?> </td>
          <td> <?php echo $row->prioridad;?> </td>
          <td> <?php echo $row->descripcion;?> </td>
          <td><?php echo'<img src="'.$row->foto.'" width="100" heigth="100">'; ?></td>

    <?php else: ?>
      <td> Esta no existe </td>
    <?php endif;//ifCount?>
   </tr>
  <?php endforeach; ?>
 <?php endif; //if $_POST ?>
</tbody>


























<!--/////////////////////////////////////////////Logica para la creacion de los reportes//////////////////////////////////////////////////////////////////////-->

<!--    <tbody>
  <php
   if ($_POST):

            require('model/conexion.php');
            $con = Conectar();
            $fecha1 = $_POST['fechaInicio'];
            $fecha2 = $_POST['fechaFinal'];
            $eti = $_POST['etiqueta'];
            if ($eti!='') {
$sql = "select insidente.fecha, activo.etiqueta, activo.tipo, insidente.ubicacion, insidente.prioridad,
        insidente.descripcion, insidente.usuario, insidente.foto from insidente inner join activo on insidente.activo = activo.id
        where (activo.etiqueta = :eti) and (insidente.fecha between :fecha1 and :fecha2)";

$stmt = $con->prepare($sql);
$result = $stmt->execute(array(':fecha1'=>$fecha1,':fecha2'=>$fecha2,':eti'=>$eti));

            } else if ($eti==''){
$sql = "select insidente.fecha, activo.etiqueta, activo.tipo, insidente.ubicacion, insidente.prioridad,
        insidente.descripcion, insidente.usuario, insidente.foto from insidente inner join activo on insidente.activo = activo.id
        where insidente.fecha between :fecha1 and :fecha2";
$stmt = $con->prepare($sql);
$result = $stmt->execute(array(':fecha1'=>$fecha1,':fecha2'=>$fecha2));
            }

            $rows = $stmt->fetchAll(\PDO::FETCH_OBJ);

          foreach ($rows as $row):
?>
              <tr>
                <php
 if(count($rows)): ?>
                <td colspan="2"> <php echo $row->fecha;?> </td>
                <td> <php echo $row->etiqueta;?> </td>
                <td> <php echo $row->ubicacion;?> </td>
                <td> <php echo $row->prioridad;?> </td>
                <td> <php echo $row->descripcion;?> </td>
                <td><php echo'<img src="'.$row->foto.'" width="100" heigth="100">'; ?></td>

  <php else: ?>
 <td> Esta no existe </td>
 <php
  endif;//ifCount
 ?>
            </tr>
            <php endforeach; ?>
             <php endif; //if $_POST ?>
        </tbody>
-->

<!--/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->



























/*
    public function CambioContrasena(){
      $user = new Usuario();

      if(isset($_REQUEST['id'])){
          $user = $this->model->Obtener($_REQUEST['id']);/*Se esta llamndo desde model Usuarios
      }

      require_once 'view/includes/headerPrincipal.php';
      require_once 'view/usuario/contrasena.php';
      require_once 'view/includes/footer.php';

    } */








<main>
  <div class="container">
    <div class="row">
      <div class="col s12 m10 l10">
<!-- Inicio de mi codigo -->
        <div id="search-docs" class="section scrollspy">
          <hr>
<!--===========================================================================================================-->
<fieldset>
  <legend><h5> Usuario: <?php echo $user->email; ?></h5>
   <h6>Utilice los campos habilitados para modificar información </h6></legend>
    <div class="container contact">
      <br>
      <hr>
      <br>
      <div class="row">
        <div class="col s12 m12 l11">
          <div class="row">
            <form id="frm-usuario" action="?c=Usuario&a=Guardar" method="post" enctype="multipart/form-data">
              <input type="hidden" name="id" value="<?php echo $user->id; ?>" />


                <div class="row"><!---INICIO DE LA PRIMERA FILA-->
                  <div class="input-field col s6 m5 l6  ">
                    <input  id="name" type="text" name="nombre" value="<?php echo $user->nombre; ?>" class="validate" class="form-control" data-validacion-tipo="requerido|min:10" >
                    <label  for="name" >  <i class="small material-icons">face</i><span class="hide-on-small-only">Nombre</span></label>
                  </div>

                 <!--INICIO DE COLUMNA APELLIDO-->
                <div class="input-field col s6 m5 l6  ">
                  <input  id="last_name" type="text" name="apellido" value="<?php echo $user->apellido; ?>" class="validate" class="form-control" data-validacion-tipo="requerido|min:10" >
                  <label for="last_name" >  <i class="small material-icons">recent_actors</i><span class="hide-on-small-only">Apellido</span></label>
                </div>
              </div><!--FIN DEL DIV DE LA PRIMERA FILA -->

     <!--INICIO DE LA FILA 2-->
     <!--INICION DE COLUMNA DEL CEDULA-->
                   <div class="row"><!--INICIO DEL DIV DE LA SEGUNDA FILA-->
                     <div class="input-field col s6 m5 l6 ">
                       <input  id="cedula" type="text" name="cedula" disabled value="<?php echo $user->cedula; ?>" value="<?php echo $user->cedula; ?>"   class="validate form-control" data-validacion-tipo="requerido|min:15">
                       <label for="cedula"> <i class="small material-icons">picture_in_picture</i><span class="hide-on-small-only">Cédula</span></label>
                     </div>
                   <!--INICIO DE COLUMNA CONTRASENA-->
                   <div class="input-field col s6 m5 l6  ">
                   <input  id="contrasena" type="password" name="contrasena"  value="<?php echo $user->contrasena; ?>"  class="validate form-control" data-validacion-tipo="requerido|min:10">
                   <label for="contrasena" >  <i class="small material-icons">perm_identity</i><span class="hide-on-small-only">Contraseña</span></label>
                   </div>
               </div><!--FIN DEL DIV DE LA SEGUNDA FILA-->

     <!--INICIO DE LA TERCERA FILA-->
     <!--INICIO DE LA COLUMNA PUESTO EN INSTITUCION-->
     <div class="row"><!--INICIO DE TERCERA FILA-->
       <div class="input-field col s12 m10 l12" >
         <select id="puesto" name="puesto" data-value="<?php echo $user->puesto; ?>" required>
           <option value="" disabled selected>Elija una opción</option>
           <option value="Administrador" <?php echo $user->puesto=="Administrador"?"selected":null; ?>>Administrador</option>
           <option value="Encargado de sector"<?php echo $user->puesto=="Encargado de sector"?"selected":null;?>>Encargado de sector</option>
           <option value="Reportes"<?php echo $user->puesto=="Reportes"?"selected":null; ?>>Reportes</option>
         </select>
         <label for="puesto">Puesto en la Institución</label>
       </div>

 <!--INICIO DE LINEAS PARA EL CORREO-->
       <div class="row">
         <div class="col s12">
           Escriba su correo electrónico correctamente:
                 <div class="row">
                   <div class="input-field">
              <input id="email" type="email" name="email" value="<?php echo $user->email; ?>" class="validate"
              class="form-control" data-validacion-tipo="requerido|email">
              <label for="email" data-error="wrong" data-success="right"><i class="small material-icons"> email </i></label>
            </div>
          </div>
        </div>
       </div>

<!--
       <div class="row"><!--INICIO DEL DIV PARA LA IMAGEN--
         <div class="file-field input-field">
           <div class="btn waves-effect waves-light teal darken-4" title="Subir imagenes">
             <i class="mdi-content-send material-icons right">perm_media</i>
             <span class="hide-on-small-only ">Subir Imagen</span>
             <input type="file" name="foto" id="foto">
           </div>
           <div class="file-path-wrapper">
             <input id="foto" name="foto" value="echo'<img src="'.$r->foto.'" width="100" heigth="100">';"
              value="<?php echo'<img src="'.$r->foto.'" width="100" heigth="100">'; ?>" class="file-path validate validate" type="text">
           </div>
         </div>
      </div>
-->





       <!--BOTON QUE ME ENVIA EL FORMULARIO-->
       <button title="Enviar" class="btn waves-effect waves-light teal darken-4"
         value="enviar"  type="submit" name="action"><span class="hide-on-small-only">Enviar</span>
              <i class="mdi-content-send material-icons right">done</i>
       </button>

     <!--BOTON QUE ME BORRA LO QUE ESCRIBI EN EL FORMULARIO-->
             </div>
           </form>
             </div>

           </div>
         </div>
</fieldset>

<!--================================================================================================================================-->
        </div>
      </div><!-- Div de los tamanos -->

        <div class="col m3 l2 hide-on-small-only">
          <div class="toc-wrapper pin-top" style="top: -15px;">
            <div class="buysellads hide-on-small-only">
              <!-- CarbonAds Zone Code -->
              <script async="" type="text/javascript"
              src="" id="_carbonads_js"></script>
          <!--    <div id="carbonads">
                <span>
                  <span class="carbon-wrap">
                    <a href="" class="carbon-img" target="_blank">

                      <img src="" alt="" style="max-width: 130px;" height="100" border="0" width="130"></a>
                      <br>
                <!--      <a href="" class="carbon-text" target="_blank">Algo mas de texto</a></span> -
                      <br>
                  <!--    <a href="" class="carbon-poweredby" target="_blank">Un texto mas...</a></span></div> -
                </div>  -->
                  <div style="height: 1px;">
                    <ul class="section table-of-contents">

                      <hr>
                      <li><a  href="index.php?c=Usuario" >
                        <i style="color:#00b0ff" title="Página Anterior" class=" small material-icons">refresh</i>Pagina anterior</a></li>
                      <li>
                        <hr>

                      </li>

                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </main>

  <script>
      $(document).ready(function(){
          $("#frm-usuario").submit(function(){
              return $(this).validate();
          });
      })
  </script>




























































































<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <style>
    .error {font-weight: bold; color:red;}
    .mensaje {color:#030;}
    .listadoImagenes img {float:left;border:1px solid #ccc; padding:2px;margin:2px;}
    </style>
</head>
<!--http://www.lawebdelprogramador.com/codigo/PHP/70-Guardar-y-mostrar-una-imagen-de-una-base-de-datos-MySQL.html-->
<body>

<?php
# Conectamos con MySQL
$mysqli=new mysqli("localhost","root","123456","imagen");
if (mysqli_connect_errno()) {
    die("Error al conectar: ".mysqli_connect_error());
}

// Los posible valores que puedes obtener de la imagen son:

//echo "<BR>".$_FILES["userfile"]["name"];      //nombre del archivo

//echo "<BR>".$_FILES["userfile"]["type"];      //tipo

//echo "<BR>".$_FILES["userfile"]["tmp_name"];  //nombre del archivo de la imagen temporal

//echo "<BR>".$_FILES["userfile"]["size"];      //tamaño



# Comprovamos que se haya subido un fichero

if (is_uploaded_file($_FILES["userfile"]["tmp_name"])){
    # verificamos el formato de la imagen
    if ($_FILES["userfile"]["type"]=="image/jpeg" || $_FILES["userfile"]["type"]=="image/pjpeg" || $_FILES["userfile"]["type"]=="image/gif" || $_FILES["userfile"]["type"]=="image/bmp" || $_FILES["userfile"]["type"]=="image/png")
    {
        # Cogemos la anchura y altura de la imagen
        $info=getimagesize($_FILES["userfile"]["tmp_name"]);
        //echo "<BR>".$info[0]; //anchura
        //echo "<BR>".$info[1]; //altura
        //echo "<BR>".$info[2]; //1-GIF, 2-JPG, 3-PNG
        //echo "<BR>".$info[3]; //cadena de texto para el tag <img
        # Escapa caracteres especiales
        $imagenEscapes=$mysqli->real_escape_string(file_get_contents($_FILES["userfile"]["tmp_name"]));
        # Agregamos la imagen a la base de datos
        $sql="INSERT INTO `imagephp` (anchura,altura,tipo,imagen) VALUES (".$info[0].",".$info[1].",'".$_FILES["userfile"]["type"]."','".$imagenEscapes."')";
        $mysqli->query($sql);
        # Cogemos el identificador con que se ha guardado
        $id=$mysqli->insert_id;
        # Mostramos la imagen agregada
        echo "<div class='mensaje'>Imagen agregada con el id ".$id."</div>";
    }else{
        echo "<div class='error'>Error: El formato de archivo tiene que ser JPG, GIF, BMP o PNG.</div>";
    }
}
?>
<h2>Selecciona una imagen</h2>
<form enctype="multipart/form-data" action="<?php echo $_SERVER["PHP_SELF"]?>" method="POST">
    <input name="userfile" type="file">
    <p><input type="submit" value="Guardar Imagen">
</form>
<h2>Listado de las imagenes añadidas a la base de datos</h2>
<div class="listadoImagenes">
    <?php
    $result=$mysqli->query("SELECT * FROM imagephp ORDER BY id DESC");
    if($result)
    {
        while($row=$result->fetch_array(MYSQLI_ASSOC))
        {
            echo "<img src='imagen_mostrar.php?id=".$row["id"]."' width='".$row["anchura"]."' height='".$row["aaltura"]."'>";
        }
    }
    ?>
</div>
  <?php
      ########## imagen_mostrar.php ##########
      # debe recibir el id de la imagen a mostrar
      # Conectamos con MySQL
      $mysqli=new mysqli("localhost","root","123456","imagen");
      if (mysqli_connect_errno()) {
          die("Error al conectar: ".mysqli_connect_error());
      }
      # Buscamos la imagen a mostrar
      $result=$mysqli->query("SELECT * FROM `imagephp` WHERE id=".$_GET["id"]);
      $row=$result->fetch_array(MYSQLI_ASSOC);
      # Mostramos la imagen
      header("Content-type:".$row["tipo"]);
      echo $row["imagen"];
      ?>

<?php # Conectamos con MySQL
$mysqli=new mysqli("localhost","root","","imagenes");
if (mysqli_connect_errno()) {
die("Error al conectar: ".mysqli_connect_error());
}

# Buscamos la imagen a mostrar
$result=$mysqli->query("SELECT * FROM `imagephp` WHERE id=".$_GET["id"]);
$row=$result->fetch_array(MYSQLI_ASSOC);

# Mostramos la imagen
header("Content-type:".$row["tipo"]);
echo $row["imagen"];
?>



</body>
</html>
