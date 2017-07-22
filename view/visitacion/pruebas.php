




<?php

/*LOGICA PARA LOS ACCESOS DE USUARIO
					$sql_puesto="SELECT clave_puesto FROM usuarios WHERE email= :login AND contrasena= :password "; // realizo la comparación con la base de datos
							$res=mysql_query($sql_puesto,$password);
							///$_SESSION["email"]=$_POST["login"];

							if($row=mysql_fetch_array($res)){

							$ns=$row['clave_puesto']; // descargo el niver de usuario

							if ($ns == 1) {
								header("Location:?c=login&a=AdminUser");
							}
							elseif ($ns == 2) {
								header("Location:?c=login&a=SectorManagerUser");
							}

							elseif ($ns == 3) {
								header("Location:?c=login&a=ReportsUser");
							}

							elseif ($ns == 4) {
								header("Location:?c=login&a=VolunteeringUser");
							}

==============================================================================================================================================*/

















  $mysqli  = new mysqli("localhost","root","","sirevi");

    $salida= "";
    $query= "SELECT * FROM visitacion ORDER BY id ASC";

    if (isset($_POST['consulta'])) {
      $q = mysql_real_escape_string($_POST['consulta']);
      $query = "SELECT id, nombre, noIdentificacion, pais, tipo_pago, moneda
      FROM visitacion  WHERE nombre  LIKE '%".$q."%' ";

    }
      $resultado = mysql_query($query);

      if ($resultado > 0) {
        $salida.="<table class='tabla_datos'>
      		<thead class'white-text brown z-depth-2'>
      			<tr>
      				<th>ID</th>
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


































<main>
  <div class="container">
    <div class="">

      <div class="col s12 m12 l12">

<!--====================================================================================================================-->
        <div class="">
          <fieldset>
            <div class="">
              <div class="col s12 m12 l12">
                <div class="">
                    <div><!-- Inicio de las filas y columnas -->

                      <div class="row"><!---Inicio de dos columnas-->

                   <div class="input-field col s6 m4 l4">
                      <fieldset  class="z-depth-1 ">
                        <legend>&nbsp;Proposito de Visitacion&nbsp;</legend>
                        <p class="input-field col s12 m6 l6">
                          <input class="with-gap" value="Visita por el dia" name="proposito_visita" type="radio" selected id="indeterminate-checkbox" checked="default" />
                          <label for="indeterminate-checkbox">Por el dia</label>
                        </p>
                        <p class="input-field col s12 m6 l6">
                          <input class="with-gap" value="Acamapa por varios dias" name="proposito_visita" type="radio" id="indeterminate-checkbox" />
                          <label for="indeterminate-checkbox">Acampando</label>
                        </p>
                      </fieldset>

                    </div>


                      <div class="input-field col s6 m4 l2">
                        <fieldset><legend>Numero diario</legend>
                          <div class="btn teal lighten-2 right-align "> #&nbsp;00 </div>
                        </fieldset>
                      </div>

                      <div class="input-field col s6 m4 l3">
                        <fieldset><legend>Capacidad de Sector</legend>
                            <div class="btn teal lighten-2 right-align "> 20/80 </div>
                        </fieldset>
                      </div>

                      <div class="input-field col s6 m4 l3">
                        <fieldset><legend>Sector</legend>
                            <div class="btn teal lighten-2 right-align ">Santa Rosa</div>
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
    </div><!-- Fin del container -->
<!--=========================================================================================================================================-->
    <div id="" class="">
    <hr>
<!--===========================================================================================================-->
    <fieldset>
      <legend><h5>Formulario modificar datos </h5>
        <h6>Modificar registro, utilice los campos q disposicion</h6></legend>
        <div class="">
          <hr> <br>
          <div class="row"><!--la clase en este div me permite tener los elementos del formulario en orden y en las filas correspondientes-->
            <div class="col col s12 m12 l12">
              <div class="">
                <form id="frm-visitacion" action="?c=Visitacion&a=Guardar" method="post" enctype="multipart/form-data">
                  <input type="hidden" name="id" value="<?php echo $visit->id; ?>" />
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
                  <div  class="input-field col s6 m6 l4">
                    <select name="pais">
                      <option value="" disabled selected>Elija un pais</option>
                      <?php while ($arreglo_pais = mysql_fetch_array($query_pais)) {  ?>
                      <option value="<?php echo $arreglo_pais['id']?>"><?php echo $arreglo_pais['nombre'] ?></option>
                      <?php } ?>
                    </select>
                    <label>País</label>
                  </div>
    <!--   <div class="input-field col s6 m6 l4">
           <div class="">
             <i class="material-icons prefix">textsms</i>
             <input type="text" name="pais" id="autocomplete-input" class="autocomplete">
             <label for="autocomplete-input">País</label>
           </div>
       </div> -->


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
      <div class="input-field col s6 m6 l4">
      <select name="referencia_visita">
          <option value="" disabled selected>&nbsp;Referencia de Visita</option>
                      <option value="Expontaneamente en ruta">Expontaneamente en ruta</option>
                      <option value="Referencia de alguien mas">Referencia de alguien mas</option>
                      <option value="Recomendación por amigos">Recomendación por amigos</option>
                      <option value="Visita reiterada">Visita reiterada</option>
                      <option value="Selección directa personal (Check list)">Selección directa personal (Check list)</option>
                      <option value="Operadora turística">Operadora turística</option>
                      <option value="Medio de comunicación">Medio de comunicación</option>
                      <option value="Guías impresas">Guías impresas</option>
                      <option value="Grupo comunal organizado">Grupo comunal organizado</option>
                      <option value="Empresa privada">Empresa privada</option>
                      <option value="ONGs en proyectos de investigación y conservación">ONGs en proyectos de investigación y conservación</option>
                      <option value="Institución pública">Institución pública</option>
                      <option value="Otro">Otro</option>

                    </select>
                    <label><i class="small material-icons" >info_outline</i></label>
                  </div>
                </div><!--Fin de la seegunda fila -->
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
                    <fieldset><legend>Personas acampando</legend>
                      <div>
                        <div class="input-field col s12 m12 l12  ">
                          <input  id="dias_camping" type="number" name="dias_camping" value="<?php echo $visit->dias_camping; ?>" class="validate" class="form-control" data-validacion-tipo="requerido|min:10" >
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
            <div class="input-field col s12 m6 l8">
              <fieldset class="z-depth-3">
                <legend>&nbsp;Nacionales&nbsp;</legend>
                <div class="input-field col s12 m6 l4  ">
                  <input  id="nacional_adult" type="text" value="<?php echo $visit->nacional_adult; ?>" name="nacional_adult" class="validate" onkeyup="sumaNacionales_Dia(); sumatoria_All(); monto_total_pagar();"  class="form-control" >
                  <label for="nacional_adult" ><span class="hide-on-small-only"><i class="small material-icons">offline_pin</i></span>&nbsp;Adultos </label>
               </div>

                <div class="input-field col s12 m6 l4  ">
                  <input  id="nacional_kid" type="text" value="<?php echo $visit->nacional_kid; ?>" name="nacional_kid" class="validate" onkeyup="sumaNacionales_Dia(); sumatoria_All(); monto_total_pagar();" class="form-control" >
                  <label for="nacional_kid" ><span class="hide-on-small-only"><i class="small material-icons">offline_pin</i></span>&nbsp;Niños </label>
              </div>

              <div class="input-field col s12 m6 l4  ">
                  <input  id="estudiantes" type="text" value="<?php echo $visit->estudiantes; ?>" name="estudiantes"  class="validate" onkeyup="sumaNacionales_Dia(); sumatoria_All(); monto_total_pagar();" class="form-control" >
                  <label for="estudiantes" ><span class="hide-on-small-only"><i class="small material-icons">offline_pin</i></span>&nbsp;Estudiantes </label>
            </div>


            </fieldset>
          </div><!--Fin de columnas cantidad de ncionales por el dia-->

        <div class="input-field col s12 m6 l4">
          <fieldset class="z-depth-3">
            <legend>&nbsp;Extranjeros&nbsp;</legend>

            <div class="input-field col s12 m6 l6  ">
              <input  id="extranjero_adult" type="text" value="<?php echo $visit->extranjero_adult; ?>" name="extranjero_adult" class="validate" onkeyup="sumaExtranjeros_Dia(); sumatoria_All(); monto_total_pagar();" class="form-control" data-validacion-tipo="requerido|min:10">
              <label for="extranjero_adult" ><span class="hide-on-small-only"><i class="small material-icons">offline_pin</i></span>&nbsp;Adultos </label>
            </div>

            <div class="input-field col s12 m6 l6  ">
              <input  id="extranjero_kid" type="text" value="<?php echo $visit->extranjero_kid; ?>" name="extranjero_kid" class="validate" onkeyup="sumaExtranjeros_Dia(); sumatoria_All(); monto_total_pagar();" class="form-control" data-validacion-tipo="requerido|min:10">
              <label for="extranjero_kid" ><span class="hide-on-small-only"><i class="small material-icons">offline_pin</i></span>&nbsp;Niños </label>
            </div>
          </fieldset>
        </div>

      </div><!--Fin de la primera fila-->

        <div class="">

          <div class="input-field col s12 m6 l12">
            <fieldset class="z-depth-3">
              <div class=""><!--Inicio de la segunda fila-->
                <div class="input-field col s12 m6 l4  ">
                <input  id="personas_surf" type="number"  name="personas_surf" value="<?php echo $visit->personas_surf; ?>" class="validate" class="form-control" data-validacion-tipo="requerido|min:10" >
                    <label for="personas_surf" >  <i class="small material-icons">supervisor_account</i>&nbsp;Cantidad Personas Surf</label>
                </div>

                 <div class="input-field col s12 m6 l4  ">
                   <input  id="prepago" type="number" name="prepago" value="<?php echo $visit->prepago; ?>" class="validate" class="form-control" data-validacion-tipo="requerido|min:10" >
                   <label for="prepago"><span class="hide-on-small-only"><i class="small material-icons">picture_in_picture</i></span>&nbsp;Prepago</label>
                 </div>

                 <div class="input-field col s12 m6 l4  ">
                   <input  id="exonerado" type="number" name="exonerado" value="<?php echo $visit->exonerado; ?>" class="validate" class="form-control" data-validacion-tipo="requerido|min:10">
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
        <div class=""><!--Inicio de la "" -->

          <div class="input-field col s12 m6 l6">
            <fieldset  class="z-depth-1">
              <legend>&nbsp;Tipo de pago&nbsp;</legend>
              <p class="input-field col s12 m6 l4">
                <input class="with-gap " value="<?php echo $visit->tipo_pago; ?>" name="tipo_pago" type="radio"  id="indeterminate-checkbox" checked="default"  />
                <label for="indeterminate-checkbox">Efectivo</label>
              </p>
              <p class="input-field col s12 m6 l4">
                <input class="with-gap" value="<?php echo $visit->tipo_pago; ?>" name="tipo_pago" type="radio" id="indeterminate-checkbox" />
                <label for="indeterminate-checkbox">Tarjeta</label>

              </p>
              <!--<p class="input-field col s12 m6 l4">
                <input class="with-gap" value="tarjeta" name="tipo_pago" type="radio" id="indeterminate-checkbox" />
                <label for="indeterminate-checkbox">Transferencia</label>
              </p>-->
            </fieldset>
          </div>

          <div class="input-field col s12 m6 l6">
            <fieldset  class="z-depth-1 ">
              <legend>&nbsp;Tipo moneda&nbsp;</legend>
              <p class="input-field col s12 m6 l6">
                <input class="with-gap" value="<?php echo $visit->moneda; ?>" name="moneda" type="radio"  id="indeterminate-checkbox" checked="default" />
                <label for="indeterminate-checkbox">Colones</label>
              </p>
              <p class="input-field col s12 m6 l6">
                <input class="with-gap" value="<?php echo $visit->moneda; ?>" name="moneda" type="radio" id="indeterminate-checkbox" />
                <label for="indeterminate-checkbox">Dolares</label>
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
  </script>






































<main>
  <div class="container">
    <div class="row">

      <div class="col s12 m12 l12">
<!-- Inicio de mi codigo -->

    <div  class="">
<!--===========================================================================================================-->
      <fieldset>
        <legend><h5>Sectores</h5>
          <h6>Tarifas del Sector: <?php echo $sector->nombre; ?></h6></legend>
          <div class="">
            <br>
            <div class="">
              <div class="col s12 m12 l12">
                <div class="">
                  <div>

                      <div class=""><!---Inicio de la fila admision por el dia-->
                        <fieldset>
                          <legend>Admisión por el día</legend>
                          <div class="input-field col s6 m6 l6  ">
                            <fieldset>
                              <legend>Tarifas nacionales</legend>

                            </fieldset>
                          </div>

                         <!---->
                         <div class="input-field col s6 m6 l6  ">
                          <fieldset>
                            <legend>Tarifas extranjeros</legend>
                          </fieldset>
                         </div>

                        </div><!--Fin de la fila admision por el dia -->
                      </fieldset>
                   </div>
<div class="">
  <fieldset>
    <legend>Derecho de camping</legend>
    <div class=""><!---Inicio de la fila camping-->

      <div class="input-field col s6 m6 l6  ">
        <fieldset>
          <legend>Tarifas nacionales</legend>

        </fieldset>

      </div>

     <!---->
     <div class="input-field col s6 m6 l6  ">
      <fieldset>
        <legend>Tarifas extranjeros</legend>
      </fieldset>
     </div>

   </div><!--FIN DEL DIV DE LA SEGUNDA FILA -->
  </fieldset>
</div>
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














<!--
<table class="responsive-table grey lighten-1 centered highlight z-depth-5">
  <thead class="white-text teal darken-4 z-depth-2">
      <tr>
        <th>Adultos extranjeros</th>
        <th>Ninos extranjeros</th>
        <th></th>

        <th style="width:40px;"></th>
        <th colspan="2">Acción</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($this->model->ListadoTarifas() as $r): ?>
        <tr>
          <td><?php echo $r->adulto_extranjero; ?></td>
          <td><?php echo $r->nino_extranjero; ?></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>









<table class="responsive-table grey lighten-1 centered highlight z-depth-5">
  <thead class="white-text teal darken-4 z-depth-2">
      <tr>
        <th>Adultos nacionales</th>
        <th>Ninos nacionales</th>
        <th>Estudiantes</th>

        <th style="width:40px;"></th>
        <th colspan="2">Acción</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($this->model->ListadoTarifas() as $r): ?>
        <tr>
          <td><?php echo $r->adulto_nacional; ?></td>
          <td><?php echo $r->nino_nacional; ?></td>
          <td><?php echo $r->estudiantes; ?></td>

        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>




<table class="responsive-table grey lighten-1 centered highlight z-depth-5">
  <thead class="white-text teal darken-4 z-depth-2">
      <tr>
        <th>Adultos extranjeros</th>
        <th>Ninos extranjeros</th>
        <th></th>

        <th style="width:40px;"></th>
        <th colspan="2">Acción</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($this->model->ListadoTarifas() as $r): ?>
        <tr>
          <td><?php echo $r->adulto_extranjero; ?></td>
          <td><?php echo $r->nino_extranjero; ?></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>




 <table class="responsive-table grey lighten-1 centered highlight z-depth-5">
    <thead class="white-text teal darken-4 z-depth-2">
        <tr>
          <th>Adultos nacionales</th>
          <th>Ninos nacionales</th>
          <th>Estudiantes</th>

          <th style="width:40px;"></th>
          <th colspan="2">Acción</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($this->model->ListadoTarifas() as $r): ?>
          <tr>
            <td><?php echo $r->adulto_nacional; ?></td>
            <td><?php echo $r->nino_nacional; ?></td>
            <td><?php echo $r->estudiantes; ?></td>

          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>-->
<main>
  <div class="container">
    <h4 class="header left">Módulo Visitación</h4>
    <a href="index.php?c=Visitacion&a=agregarRegistro"><span class="hide-on-med-and-up"><i class="small material-icons">playlist_add</i>Nueva Visitación</a>

      <div class="right hide-on-small-only">
        <a href="index.php?c=Visitacion&a=agregarRegistro"> <i class="small material-icons">playlist_add</i><span>Nueva Visitación</span></a>
      </div>

    </div>


    <div class="container">
    <div class="row">
        <div class="col s12 m12 l12">
            <!-- Inicio de mi codigo -->
          <table class="responsive-table grey lighten-1 centered highlight z-depth-5">
            <thead class="white-text teal darken-4 z-depth-2">
<!--==================================Los valores en la vista de visitacion aun estan por aclarar cuale se deben mostrar-->
            <tr>
              <th>Nombre</th>
              <th>Pais</th>
              <th>Fecha ingreso</th>

              <th>Sector</th>
              <th>Dias </th>

              <th>Monto</th>
              <th>Moneda</th>
              <th>Tipo pago</th>
              <!--<th>Total</th>-->
              <th style="width:40px;"></th>
              <th colspan="2">Acción</th>
            </tr>
<!--================================================================================================================== -->
          </thead>
          <tbody>
            <?php foreach ($this->model->Listar() as $r): ?>
            <tr>
              <td><?php echo $r->Nombre; ?></td>
              <td><?php echo $r->Pais; ?></td>
              <td><?php echo $r->fecha_ingreso; ?></td>

              <td><?php echo $r->Sector; ?></td>
              <td><?php echo $r->Dias; ?></td>
              <td class="center"></td>

              <td><?php echo $r->monto;?></td>
              <td><?php echo $r->moneda;?></td>

              <td>
                <a  title="Editar Información"  href="?c=Visitacion&a=Modificar&id=<php echo $r->id; ?>"><i
                    class="small material-icons right">edit</i></a>
              </td>
              <td>
              <a title="Borrar Información" onclick="return confirm('¿Seguro de eliminar este registro?');"
                 href="?c=Visitacion&a=Eliminar&id=<php echo $r->id; ?>">
                  <i class="small material-icons right">delete</i></a>
              </td>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div><!-- Div de los tamanos -->
    </div>
  </div>
</main>
