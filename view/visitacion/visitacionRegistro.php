<<<<<<< Updated upstream
=======
<<<<<<< refs/remotes/origin/master

>>>>>>> Stashed changes
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
=======
<main>
  <div class="container">
    <div class="row">

      <div class="col s12 m12 l12">
        <!-- Inicio de mi codigo -->
        <div id="search-docs" class="section scrollspy">
        <hr>


<!--===========================================================================================================-->

<fieldset>
  <legend><h5>Formulario para Registros</h5>
    <h6>Completar la informacion con los datos correspondientes</h6></legend>
    <div class="container contact">
      <hr>
      <br>
      <div class="row">
        <div class="col s14 m14 l11">
          <div class="row">
            <form id="frm-usuario" action="?c=Usuario&a=Guardar" method="post" enctype="multipart/form-data">
              <input type="hidden" name="id" value="" />

              <div class="row"><!--INICIO DE LA PRIMERA FILA-->
                <div class="input-field col s6 m5 l6  ">
                 <input  id="noIdentificacion" type="text" name="noIdentificacion" value="" class="validate" class="form-control" data-validacion-tipo="requerido|min:10" >
                 <label for="name" >  <i class="small material-icons">face</i>&nbsp;Numero de Identifiacion</label>
                 </div>

                 <div class="input-field col s6 m5 l6  ">
                  <input  id="numero_diario" type="text" name="numero_diario" value="" class="validate" class="form-control" data-validacion-tipo="requerido|min:10" >
                  <label for="numero_diario" >  <i class="small material-icons">picture_in_picture</i>&nbsp;Numero diario</label>
                  </div>
              </div><!--FIN DE LA PRIMERA FILA-->


                <div class="row"><!---INICIO DE LA SEGUNDA FILA-->
                  <div class="input-field col s6 m5 l6  ">
                   <input  id="name" type="text" name="nombre" value="" class="validate" class="form-control" data-validacion-tipo="requerido|min:10" >
                   <label for="name" >  <i class="small material-icons">face</i>&nbsp;Nombre</label>
                   </div>

               <!--INICIO DE COLUMNA FECHA DE SALIDA-->
              <div class="input-field col s6 m5 l6  ">
               <input  id="fecha_salida" type="text" name="fecha_salida" value="" class="validate" class="form-control" data-validacion-tipo="requerido|min:10" >
               <label for="fecha_salida" >  <i class="small material-icons">recent_actors</i>&nbsp;Fecha de salida</label>
               </div>
               </div><!--FIN DEL DIV DE LA PRIMERA FILA -->

               <div class="row"><!---INICIO DE LA TECERA FILA-->
                 <form action="#">
                   <fieldset>
                     <legend> Persona(s) Acampando</legend>
                     <p>
                       <input class="with-gap" name="acampa" type="radio" id="test1" />
                       <label for="test1">Si</label>
                     </p>
                     <p>
                       <input class="with-gap" name="acampa" type="radio" id="test2" />
                       <label for="test2">No</label>
                     </p>
                   </fieldset>
                 </form>

              <!--INICIO DE COLUMNA -->
             <div class="input-field col s6 m5 l6  ">
              <input  id="dias_camping" type="text" name="dias_camping" value="" class="validate" class="form-control" data-validacion-tipo="requerido|min:10" >
              <label for="dias_camping" >  <i class="small material-icons">recent_actors</i>&nbsp;Dias acampando</label>
              </div>


              <div class="input-field col s6 m5 l6  ">
               <input  id="cantidadPersonasSurf" type="text" name="cantidadPersonasSurf" value="" class="validate" class="form-control" data-validacion-tipo="requerido|min:10" >
               <label for="cantidadPersonasSurf" >  <i class="small material-icons">recent_actors</i>&nbsp;Cantidad Personas Surf</label>
               </div>
             </div><!--FIN DEL DIV DE LA TERCERA  FILA -->


                 <div class="row"><!--INICIO DE LA CUARTA FILA-->
                   <div class="input-field col s6 m5 l6  ">
                    <input  id="prepago" type="text" name="prepago" value="" class="validate" class="form-control" data-validacion-tipo="requerido|min:10" >
                    <label for="prepago" >  <i class="small material-icons">picture_in_picture</i>&nbsp;Prepago</label>
                    </div>

                 <!--INICIO DE COLUMNA-->
                 <div class="input-field col s6 m5 l6  ">
                 <input  id="exonerado" type="text" name="exonerado" value="" class="validate" class="form-control" data-validacion-tipo="requerido|min:10">
                 <label for="exonerado" >  <i class="small material-icons">perm_identity</i>&nbsp;Exonerado</label>
                 </div>
             </div><!--FIN DEL DIV DE LA CUARTA FILA-->


             <div class="row"><!--INICIO DEL DIV DE LA QUINTA FILA-->
             <!--INICIO DE COLUMNA -->
             <div class="input-field col s6 m5 l6  ">
             <input  id="placa_automovil" type="text" name="placa_automovil" value="" class="validate" class="form-control" data-validacion-tipo="requerido|min:10">
             <label for="placa_automovil" >  <i class="small material-icons">perm_identity</i>&nbsp;Placa Automovil</label>
             </div>

             <div class="input-field col s6 m5 l6">
               <input  id="tipo_automovil" type="text" name="tipo_automovil" value="" class="validate" class="form-control" data-validacion-tipo="requerido|min:10">
               <label for="tipo_automovil" >  <i class="small material-icons">description</i>&nbsp;Tipo de Automovil</label>
             </div>

         </div><!--FIN DEL DIV DE LA QUINTA FILA-->


           <div class="row"><!--INICIO DE SETIMA FILA-->

                 <div class="input-field col s4 m5 l4">
                   <input  id="monto" type="text" name="monto" value="" class="validate" class="form-control" data-validacion-tipo="requerido|min:10">
                   <label for="monto" >  <i class="small material-icons">description</i>&nbsp;Monto a pagar</label>
                 </div>


               <div class="">
                 <div class="input-field col s4 m5 l4">
                   <input  id="moneda" type="text" name="moneda" value="" class="validate" class="form-control" data-validacion-tipo="requerido|min:10">
                   <label for="moneda" >  <i class="small material-icons">description</i>&nbsp;Tipo de Moneda</label>
                 </div>


               <div class="">
                 <div class="input-field col s4 m5 l4">
                   <input  id="total" type="text" name="total" value="" class="validate" class="form-control" data-validacion-tipo="requerido|min:10">
                   <label for="total" >  <i class="small material-icons">description</i>&nbsp;Total a pagar</label>
                 </div>
               </div>
              </div>

             </div><!--FIN DE LA SETIMA FILA-->

             <div class="input-field col s4 m5 l4">
                <select>
                  <option value="" disabled selected>Elija una opcion</option>
                  <option value="1">Option 1</option>
                  <option value="2">Option 2</option>
                  <option value="3">Option 3</option>
                </select>
                <label>Seleccionar Pais</label>
              </div>

              <div class="input-field col s4 m5 l4">
   <select>
     <option value="" disabled selected>Elija una opcion</option>
     <option value="1">Option 1</option>
     <option value="2">Option 2</option>
     <option value="3">Option 3</option>
   </select>
   <label> Seleccionar Provincia</label>
 </div>

 <div class="input-field col s4 m5 l4">
    <select>
      <option value="" disabled selected>Elija una opcion</option>
      <option value="1">Option 1</option>
      <option value="2">Option 2</option>
      <option value="3">Option 3</option>
    </select>
    <label>Seleccionar Sector</label>
  </div>


  <div class="input-field col s4 m5 l4">
     <select>
       <option value="" disabled selected>Elija una opcion</option>
       <option value="1">Option 1</option>
       <option value="2">Option 2</option>
       <option value="3">Option 3</option>
     </select>
     <label> Seleccionar Sendero</label>
   </div>

   <div class="input-field col s4 m5 l4">
      <select>
        <option value="" disabled selected>Elija una opcion</option>
        <option value="1">Option 1</option>
        <option value="2">Option 2</option>
        <option value="3">Option 3</option>
      </select>
      <label> Seleccionar asp</label>
    </div>

    <div class="input-field col s4 m5 l4">
       <select>
         <option value="" disabled selected>Elija una opcion</option>
         <option value="1">Option 1</option>
         <option value="2">Option 2</option>
         <option value="3">Option 3</option>
       </select>
       <label> Seleccionar usuario</label>
     </div>


  <!--BOTON QUE ME ENVIA EL FORMULARIO-->
             <button class="btn waves-effect waves-light" value="enviar" type="submit" name="action">Enviar<i class="mdi-content-send right"></i></button>
             <button class="btn waves-effect waves-light" value="reset" type="reset" name="action">Limpiar<i class="mdi-content-send right"></i></button>
           </div>
         </form>
           </div>

         </div>
       </div>
</fieldset>
<hr>

<!--================================================================================================================================-->
        </div>
      </div><!-- Div de los tamanos -->


            </div>
          </div>
        </main>
  </body>
  <script>
      $(document).ready(function(){
>>>>>>> add some changes for development
          $("#frm-visitacion").submit(function(){
              return $(this).validate();
          });
      })
<<<<<<< refs/remotes/origin/master

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
=======
>>>>>>> add some changes for development
  </script>
