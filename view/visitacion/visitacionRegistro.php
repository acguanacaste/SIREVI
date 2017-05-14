<main>
  <div class="container">
    <div class="">

      <div class="col s12 m12 l12">
        <!-- Inicio de mi codigo -->
        <ul class="right-align">
          <li>

            <div class="btn teal lighten-4 right-align ">No. Diario:&nbsp;#00

          </div>
        </li>
      </ul>

    <div id="" class="">
    <hr>
<!--===========================================================================================================-->
    <fieldset>
      <legend><h5>Formulario de Visitación </h5>
        <h6>Completar la informacion con los datos correspondientes</h6></legend>
        <div class="">
          <hr> <br>
          <div class="row"><!--la clase en este div me permite tener los elementos del formulario en orden y en las filas correspondientes-->
            <div class="col col s12 m12 l12">
              <div class="">
                <form id="frm-visitacion" action="?c=Visitacion&a=Guardar" method="post" enctype="multipart/form-data">

                  <input type="hidden" name="id" value="<?php echo $visit->id; ?>" />

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
                        <label for="placa_automovil" >  <i class="small material-icons">settings_ethernet</i>&nbsp;Placa automovil</label>
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
                  $sentencia_cuidad = "select * from provincia order by nombre ASC";
                  $query_cuidad = mysql_query($sentencia_cuidad);
                  ?>
                  <div class="input-field col s6 m6 l4">
                    <select name="provincia">
                      <option value="" disabled selected>Elija una provincia</option>
                      <?php while ($arreglo_cuidad = mysql_fetch_array($query_cuidad)) {  ?>
                      <option value="<?php echo $arreglo_cuidad['id']?>"><?php echo $arreglo_cuidad['nombre'] ?></option>
                      <?php } ?>
                    </select>
                    <label> Provincia</label>
                  </div>
                  <!--=================Fin del codigo para ciudades ===============-->
                  <div class="input-field col s6 m6 l4">
                    <select name="referencia_visita">
                      <option value="" disabled selected>&nbsp;Referencia de Visita</option>
                      <option value="1">Visita reiterada</option>
                      <option value="2">Medios de comunicación</option>
                      <option value="3">Recomendación por amigos</option>
                      <option value="4">Option </option>
                      <option value="5">Option </option>
                      <option value="6">Option </option>
                      <option value="7">Option </option>
                      <option value="8">Option </option>
                      <option value="9">Option </option>
                    </select>
                    <label><i class="small material-icons" >info_outline</i></label>
                  </div>
                </div><!--Fin de la seegunda fila -->

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
                      <div class="input-field col s12 m6 l4"><!--vista small numero 12 araque abarque todo el ancho del dispositivo-->
                      <select multiple required>
                          <option value="" disabled selected>&nbsp;Seleccionar Sendero</option>
                           <?php while ($arreglo_sendero = mysql_fetch_array($query_sendero)) {  ?>
                           <option value="<?php echo $arreglo_sendero['id']?>"><?php echo $arreglo_sendero['nombre'] ?></option>
                           <?php } ?>
                        </select>
                      <label><span class="hide-on-small-only"><i class="small material-icons">swap_calls</i></span></label>
                    </div>
                  </div>
                </div>

                  <div  class="input-field col s12 m6 l8"><!--Columna-->
                  <ul class="collapsible" data-collapsible="accordion"><!--Inicio de las lineas para cantidad de personas-->
                     <li>
                       <div tabindex="0" class="collapsible-header teal darken-4 z-depth-3 white-text"><i class="material-icons">supervisor_account</i>Personas Acampando</div>
                       <div class="collapsible-body"><span><div class=""><div>
                         <fieldset>
                           <div>
                             <div class="input-field col s12 m6 l6  ">
                               <input  id="dias_camping" type="number" name="dias_camping" value="" class="validate" class="form-control" data-validacion-tipo="requerido|min:10" >
                               <label for="dias_camping" > <span class="hide-on-small-only"><i class="small material-icons">perm_contact_calendar</i></span>&nbsp;Dias acampando</label>
                             </div>

                          <div class="input-field col s6 m6 l6">
                            <fieldset class="">
                              <p class="input-field col s6 m6 l6">
                                <input tabindex="0" class="with-gap" value="no" name="acampa" type="radio" selected id="acampano" checked="default" />
                                <label for="acampano">No</label>
                              </p>

                              <p class="input-field col s6 m6 l6">
                                <input  tabindex="0" class="with-gap" value="si" name="acampa" type="radio" id="acampasi" />
                                <label for="acampasi">Si</label>
                              </p>
                            </fieldset>
                          </div>



                     </fieldset>
                   </div>
                 </div></span></div>
               </li>
             </ul>
           </div>
         </div>
      </div><!--Fin de la tercera fila-->
<!--================================================== Fin lineas de codigo, respecto visitacion========================================================-->

<div class="input-field col s12 m12 l12"><!--IInicio de lineas para cantidad de personas-->
<ul class="" data-collapsible="">
   <li>
     <div class="center-align collapsible-header teal darken-4  white-text z-depth-3"><i class=" material-icons">supervisor_account</i>Cantidad de personas</div>
     <div class="">
       <fieldset>
       <span>
         <div class="">

          <div class=""><!--Inicio de la primea fila dentro del collapsible-->
            <div class="input-field col s12 m6 l6">
              <fieldset class="z-depth-2">
                <legend>Nacionales</legend>
                <div class="input-field col s12 m6 l6  ">
                  <input  id="nacional_adult" type="number" name="nacional_adult" value="" class="validate" class="form-control" data-validacion-tipo="requerido|min:10">
                  <label for="nacional_adult" ><span class="hide-on-small-only"><i class="small material-icons">offline_pin</i></span>&nbsp;Adultos </label>
                </div>

                <div class="input-field col s12 m6 l6  ">
                  <input  id="nacional_kid" type="number" name="nacional_kid" value="" class="validate" class="form-control" data-validacion-tipo="requerido|min:10" >
                  <label for="nacional_kid" ><span class="hide-on-small-only"><i class="small material-icons">offline_pin</i></span>&nbsp;Niños </label>
                </div>

              </fieldset>
            </div>

        <div class="input-field col s12 m6 l6">
          <fieldset class="z-depth-2">
            <legend>Extranjeros</legend>

            <div class="input-field col s12 m6 l6  ">
              <input  id="extranjero_adult" type="number" name="extranjero_adult" value="" class="validate" class="form-control" data-validacion-tipo="requerido|min:10">
              <label for="extranjero_adult" ><span class="hide-on-small-only"><i class="small material-icons">offline_pin</i></span>&nbsp;Adultos </label>
            </div>

            <div class="input-field col s12 m6 l6  ">
              <input  id="extranjero_kid" type="number" name="extranjero_kid" value="" class="validate" class="form-control" data-validacion-tipo="requerido|min:10">
              <label for="extranjero_kid" ><span class="hide-on-small-only"><i class="small material-icons">offline_pin</i></span>&nbsp;Niños </label>
            </div>
          </fieldset>
        </div>

      </div><!--Fin de la primera fila-->

        <div class="">

          <div class="input-field col s12 m6 l12">
            <fieldset class="z-depth-2">
              <div class=""><!--Inicio de la segunda fila-->
                <div class="input-field col s12 m6 l4  ">
                  <input  id="cantidadPersonasSurf" type="text" name="cantidadPersonasSurf" value="" class="validate" class="form-control" data-validacion-tipo="requerido|min:10" >
                    <label for="cantidadPersonasSurf" >  <i class="small material-icons">supervisor_account</i>&nbsp;Cantidad Personas Surf</label>
                  </div>

                 <div class="input-field col s12 m6 l4  ">
                   <input  id="prepago" type="number" name="prepago" value="" class="validate" class="form-control" data-validacion-tipo="requerido|min:10" >
                   <label for="prepago" ><span class="hide-on-small-only"><i class="small material-icons">picture_in_picture</i></span>&nbsp;Prepago</label>
                 </div>

                 <div class="input-field col s12 m6 l4  ">
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
        <legend>Categorías de pago</legend>
        <div class=""><!--Inicio de la "?????" -->

          <div class="input-field col s12 m6 l6">
            <fieldset  class="z-depth-1">
              <legend>Tipo de pago</legend>
              <p class="input-field col s12 m6 l4">
                <input class="with-gap " value="efectivo" name="tipo_pago" type="radio" selected id="indeterminate-checkbox" checked="default" />
                <label for="indeterminate-checkbox">Efectivo</label>
              </p>
              <p class="input-field col s12 m6 l6">
                <input class="with-gap" value="tarjeta" name="tipo_pago" type="radio" id="indeterminate-checkbox" />
                <label for="indeterminate-checkbox">Tarjeta</label>
              </p>
            </fieldset>
          </div>

          <div class="input-field col s12 m6 l6">
            <fieldset  class="z-depth-1 ">
              <legend>Tipo moneda</legend>
              <p class="input-field col s12 m6 l6">
                <input class="with-gap" value="colones" name="moneda" type="radio" selected id="indeterminate-checkbox" checked="default" />
                <label for="indeterminate-checkbox">Colones</label>
              </p>
              <p class="input-field col s12 m6 l6">
                <input class="with-gap" value="dolar" name="moneda" type="radio" id="indeterminate-checkbox" />
                <label for="indeterminate-checkbox">Dolares</label>
              </p>
            </fieldset>

            </div>
          </div><!--Fin del div de la fila ???-->
      </fieldset>

</div><br>
<!--============================ Fin de lineas de codigo para los pagos y su tipo ==========================================-->

<div class="center-align col s12">
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
  </script>
