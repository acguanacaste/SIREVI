<main>
  <div class="container">
    <div class="">

      <div class="col s12 m12 l12">
        <!-- Inicio de mi codigo -->
        <ul class="right-align">
          <li>
            <div class="btn teal lighten-4 right-align ">No. Diario: #003</div>
        </li>
      </ul>
      <div id="" class="">
    <hr>
<!--===========================================================================================================-->
    <fieldset>
      <legend><h5>Formulario de Visitación</h5>
        <h6>Completar la informacion con los datos correspondientes</h6></legend>
        <div class="">
        <hr> <br>
          <div class="row"><!--la clase en este div me permite tener los elementos del formulario en orden y en las filas correspondientes-->
            <div class="col col s12 m12 l12">
              <div class="">
                <form id="frm-asp" action="?c=Visitacion&a=Guardar" method="post" enctype="multipart/form-data">
                  <input type="hidden" name="id" value="" />

                  <div><!--Inicio de la primera fila-->
                      <div class="input-field col s6 m6 l4  ">
                        <input  id="noIdentificacion" type="text" name="noIdentificacion" value="" class="validate" class="form-control"  required >
                        <label for="noIdentifiacion" >  <i class="small material-icons">subtitles</i>&nbsp;Numero de Identifiación</label>
                      </div>

                      <div class="input-field col s6 m6 l4  ">
                        <input  id="name" type="text" name="nombre" value="" class="validate" class="form-control"  required >
                        <label for="name" >  <i class="small material-icons">face</i>&nbsp;Nombre</label>
                      </div>

                      <div class="input-field col s6 m6 l4  ">
                        <input  id="placa_automovil" type="text" name="placa_automovil" value="" class="validate" class="form-control"   >
                        <label for="placa_automovil" >  <i class="small material-icons">settings_ethernet</i>&nbsp;Placa Automovil</label>
                      </div>
                  </div><!--Fin de la primera fila -->
    <!--===================================================================================================================================================-->
    <!--===================================================================================================================================================-->

                  <div class="row"><!---Inicio de la segunda fila-->
                <!--==============Cargando los paices==============================-->
                  <?php
                  $conexion = mysql_connect("localhost","root");
                  mysql_select_db("sirevi",$conexion);
                  $sentencia_pais = "select * from pais order by nombre ASC";
                  $query_pais = mysql_query($sentencia_pais);
                  ?>
                  <div class="input-field col s6 m6 l4">
                    <select>
                      <option value="" disabled selected>Elija una opcion</option>
                      <?php while ($arreglo_pais = mysql_fetch_array($query_pais)) {  ?>
                      <option value="<?php echo $arreglo_pais['id']?>"><?php echo $arreglo_pais['nombre'] ?></option>
                      <?php } ?>
                    </select>
                    <label>Seleccionar Pais</label>
                  </div>
                  <!--==============Cargando las cuidades============================================-->
                  <?php
                  $sentencia_cuidad = "select * from provincia order by nombre ASC";
                  $query_cuidad = mysql_query($sentencia_cuidad);
                  ?>
                  <div class="input-field col s6 m6 l4">
                    <select>
                      <option value="" disabled selected>Elija una opcion</option>
                      <?php while ($arreglo_cuidad = mysql_fetch_array($query_cuidad)) {  ?>
                      <option value="<?php echo $arreglo_cuidad['id']?>"><?php echo $arreglo_cuidad['nombre'] ?></option>
                      <?php } ?>
                    </select>
                    <label> Seleccionar Provincia</label>
                  </div>
                  <!--=================Fin del codigo para ciudades ===============-->
                  <div class="input-field col s6 m6 l4">
                    <select name="referencia_visita">
                      <option value="" disabled selected>&nbsp;Referencia de Visita</option>
                      <option value="1">Visita reiterada</option>
                      <option value="2">Medios de comunicacion</option>
                      <option value="3">Recomendacion por amigos</option>
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

                <div class="">
                  <div class="">
                    <!--================Cargando los senderos==============================-->
                    <?php
                    $conexion = mysql_connect("localhost","root");
                    mysql_select_db("sirevi",$conexion);
                    $sentencia_sendero = "select * from sendero order by nombre ASC";
                    $query_sendero = mysql_query($sentencia_sendero);
                    ?>
                    <div class="">
                      <div class="input-field col s6 m6 l4">
                      <select>
                          <option value="" disabled selected>&nbsp;Seleccionar Sendero</option>
                           <?php while ($arreglo_sendero = mysql_fetch_array($query_sendero)) {  ?>
                           <option value="<?php echo $arreglo_sendero['id']?>"><?php echo $arreglo_sendero['nombre'] ?></option>
                           <?php } ?>
                        </select>
                      <label><i class="small material-icons">swap_calls</i></label>
                    </div>
                  </div>
                  </div>

                  <div class="input-field col s6 m6 l8"><!---->
                  <ul class="collapsible" data-collapsible="accordion">
                     <li>
                       <div class="collapsible-header"><i class="material-icons">supervisor_account</i>Personas Acampando</div>
                       <div class="collapsible-body"><span><div class=""><div>
                         <fieldset>
                           <div>
                             <p>
                               <input class="with-gap" name="acampa" type="radio" selected id="acampano" />
                               <label for="acampano">No</label>

                               <input class="with-gap" name="acampa" type="radio" id="acampasi" />
                               <label for="acampasi">Si</label>
                             </p>

                             <div class="input-field col s6 m6 l4  ">
                               <input  id="dias_camping" type="text" name="dias_camping" value="" class="validate" class="form-control" data-validacion-tipo="requerido|min:10" >
                               <label for="dias_camping" >  <i class="small material-icons">perm_contact_calendar</i>&nbsp;Dias acampando</label>
                             </div>

                             <div class="input-field col s6 m6 l4  ">
                               <input  id="cantidadPersonasSurf" type="text" name="cantidadPersonasSurf" value="" class="validate" class="form-control" data-validacion-tipo="requerido|min:10" >
                               <label for="cantidadPersonasSurf" >  <i class="small material-icons">supervisor_account</i>&nbsp;Cantidad Personas Surf</label>
                             </div>
                           </div>
                       <!--INICIO DE COLUMNA FECHA DE SALIDA esto se rellena automaticamnte, hoy + dias acamapando
                       <div class="input-field col s6 m5 l6">
                         <input name="fecha_salida" type="date" placeholder="Seleccione la fecha de salida" class="datepicker right">
                         <label for="name" ><i class="small material-icons"></i></label>
                       </div>
                     </div><!FIN DEL DIV DE LA SEGUNDA FILA -->
                     </fieldset>
                   </div>
                 </div></span></div>
               </li>
             </ul>
           </div>
         </div>
<!--================================================== Fin lineas de codigo, respecto visitacion========================================================-->

<!--================================Lineas de codigo para las categorias de pago==================================-->

      <div class="row"><!--Inicio de la  "????" fila-->
        <div class="input-field col s6 m5 l6  ">
          <input  id="prepago" type="text" name="prepago" value="" class="validate" class="form-control" data-validacion-tipo="requerido|min:10" >
          <label for="prepago" >  <i class="small material-icons">picture_in_picture</i>&nbsp;Prepago</label>
      </div>

      <!--INICIO DE COLUMNA-->
      <div class="input-field col s6 m5 l6  ">
        <input  id="exonerado" type="text" name="exonerado" value="" class="validate" class="form-control" data-validacion-tipo="requerido|min:10">
        <label for="exonerado" >  <i class="small material-icons">perm_identity</i>&nbsp;Exonerado</label>
      </div>
    </div><!--Fin del div de la "????"  fila -->
<!--========================= Fin de linea de codigo para las categorias de pago ==========================================-->


<!--========================== Inicio de lineas de codigo para los pagos y su tipo =========================================-->
  <div class=""><!--Inicio de la "?????" -->

    <div class="input-field col s6 m6 l4">
      <select name="referencia_visita">
        <option value="" disabled selected>&nbsp;Tipo de Pago</option>
        <option value="1">Pago en Efectivo</option>
        <option value="2">Pago con Tarjeta</option>
        
      </select>
      <label><i class="small material-icons" >info_outline</i></label>
    </div>


      <div class="input-field col s6 m6 l4">
        <input  id="monto" type="text" name="monto" value="" class="validate" class="form-control" data-validacion-tipo="requerido|min:10">
        <label for="monto" >  <i class="small material-icons">receipt</i>&nbsp;Monto a pagar</label>
      </div>

      <div class="">
        <div class="input-field col s6 m6 l4">
          <input  id="moneda" type="text" name="moneda" value="" class="validate" class="form-control" data-validacion-tipo="requerido|min:10">
          <label for="moneda" >  <i class="small material-icons">description</i>&nbsp;Tipo de Moneda</label>
        </div>
      </div>
    </div><!--Fin del div de la quinta fila-->

<!--============================ Fin de lineas de codigo para los pagos y su tipo ==========================================-->










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
