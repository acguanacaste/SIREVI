<main>
  <div class="container">
    <div class="">

      <div class="col s12 m12 l12">

<!--====================================================================================================================-->
<div class="">
  <form id="frm-visitacion" action="?c=Visitacion&a=Guardar" method="post" enctype="multipart/form-data">
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
                                <option value="Visita por el dia">Visita  por el dia</option>
                                <option value="Acampando por varios dias">Acampando por varios dias</option>
                                <option value="Hospedado en estacion biologica">Hospedado estación biológica.</option>

                              </select>
                              <label><i class="small material-icons" >info_outline</i></label>
                            </div>

              </fieldset>
            </div>

              <div class="input-field col s6 m4 l2">
                <fieldset><legend>Numero diario</legend>
                  <div class="btn teal lighten-2 right-align "> #&nbsp;00 </div>
                </fieldset>
              </div>

              <div class="input-field col s6 m4 l3 hide-on-med-and-down">
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

                  <div class="row">
                  <div class="input-field col s12 m4 l4">
                    <fieldset>
                      <legend>Seleccione la fecha que desea</legend>
                      <div class="input-field col s12 m12 l12">
                        <label for="fecha"> <i class="small material-icons">event</i><span class="hide-on-small-only">Fecha ingreso</span></label>
                         <input  type="text" class="datepicker" id="fecha" name="fecha" value="" required>

                      </div>
                    </fieldset>
                  </div>
                  <div class="input-field col s12 m4 l4 ">

                  </div>
                    <div class="input-field  col s12 m4 l4">
                      <fieldset>
                        <legend>Seleccione la hora que desea</legend>
                        <div class="input-field col s12 m12 l12">
                          <label for="time"> <i class="small material-icons"></i><span class="hide-on-small-only">Hora ingreso</span></label>
                           <input class="timepicker"  id="time" name="fecha" value="" required>



                        </div>
                      </fieldset>
                    </div>
                  </div>

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
                      <option value="Expontaneamente en ruta"<?php echo $visit->referencia_visita=="Expontaneamente en ruta"?"selected":null; ?>>Expontaneamente en ruta</option>
                      <option value="Referencia de alguien mas"<?php echo $visit->referencia_visita=="Referencia de alguien mas"?"selected":null; ?>>Referencia de alguien mas</option>
                      <option value="Recomendación por amigos"<?php echo $visit->referencia_visita=="Recomendación por amigos"?"selected":null; ?>>Recomendación por amigos</option>
                      <option value="Visita reiterada"<?php echo $visit->referencia_visita=="Visita reiterada"?"selected":null; ?>>Visita reiterada</option>
                      <option value="Selección directa personal (Check list)"<?php echo $visit->referencia_visita=="Selección directa personal (Check list)"?"selected":null; ?>>Selección directa personal (Check list)</option>
                      <option value="Operadora turística"<?php echo $visit->referencia_visita=="Operadora turística"?"selected":null; ?>>Operadora turística</option>
                      <option value="Medio de comunicación"<?php echo $visit->referencia_visita=="Medio de comunicación"?"selected":null; ?>>Medio de comunicación</option>
                      <option value="Guías impresas"<?php echo $visit->referencia_visita=="Guías impresas"?"selected":null; ?>>Guías impresas</option>
                      <option value="Grupo comunal organizado"<?php echo $visit->referencia_visita=="Grupo comunal organizado"?"selected":null; ?>>Grupo comunal organizado</option>
                      <option value="Empresa privada"<?php echo $visit->referencia_visita=="Empresa privada"?"selected":null; ?>>Empresa privada</option>
                      <option value="ONGs en proyectos de investigación y conservación"<?php echo $visit->referencia_visita=="ONGs en proyectos de investigación y conservación"?"selected":null; ?>>ONGs en proyectos de investigación y conservación</option>
                      <option value="Institución pública"<?php echo $visit->referencia_visita=="Institución pública"?"selected":null; ?>>Institución pública</option>
                      <option value="Otro"<?php echo $visit->referencia_visita=="Otro"?"selected":null; ?>>Otro</option>

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
              <p class="input-field col s12 m6 l6">
                <input class="with-gap " value="<?php echo $visit->tipo_pago; ?>" name="tipo_pago" type="radio"  id="indeterminate-checkbox" checked="default"  />
                <label for="indeterminate-checkbox">Efectivo</label>
              </p>
              <p class="input-field col s12 m6 l6">
                <input class="with-gap" value="<?php echo $visit->tipo_pago; ?>" name="tipo_pago" type="radio" id="indeterminate-checkbox" />
                <label for="indeterminate-checkbox">Tarjeta</label>
              </p>
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
