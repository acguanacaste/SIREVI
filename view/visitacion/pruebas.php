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
            <h6 style="display:">Completar la informacion con los datos correspondientes
            </h6></legend>
            <div class="">
            <br>
              <div class="">
                <div class="col s12 m12 l12">
                  <div class="row">
                  <form id="frm-visitacion" action="?c=Visitacion&a=Guardar" method="post" enctype="multipart/form-data">
                  <input type="hidden" name="id" value="" />
                  <input type="hidden" name="numero_diario" value="10<?php echo $numero_diario; /*@todo hacer la consulta para esto, por dia si el max es 0ponerle 1 select max(numero_diario) from visita where fecha = hoy */?> >" />


                <div><!--Inicio de la primera fila-->
                  <div class="">
                    <div class="input-field col s6 m6 l4">
                      <select name="referencia_visita">
                        <option value="" disabled selected></option>
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
                      <label><i class="small material-icons" >info_outline</i> Referencia de Visita</label>
                    </div>

                    <div class="input-field col s6 m6 l4  ">
                      <input  id="noIdentificacion" type="text" name="noIdentificacion" value="" class="validate" class="form-control" data-validacion-tipo="requerido|min:10" requiere >
                      <label for="name" >  <i class="small material-icons">subtitles</i>&nbsp;Numero de Identifiación</label>
                    </div>

                    <div class="input-field col s6 m5 l4  ">
                      <input  id="name" type="text" name="nombre" value="" class="validate" class="form-control" data-validacion-tipo="requerido|min:10" >
                      <label for="name" >  <i class="small material-icons">face</i>&nbsp;Nombre</label>
                    </div>
                  </div>
                </div><!--Fin de la primera fila -->


              <div class=""><!---Inicio de la segunda fila-->
                <div class="">
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
              <div class="input-field col s6 m6 l4  ">
                <input  id="placa_automovil" type="text" name="placa_automovil" value="" class="validate" class="form-control" data-validacion-tipo="requerido|min:10">
                <label for="placa_automovil" >  <i class="small material-icons">settings_ethernet</i>&nbsp;Placa Automovil</label>
              </div>
            </div>
          </div><!--Fin de la segunda fila-->

          <div class="input-field col s12 m12 l12"><!---Inicio de informacion relacionada a la visitacion-->
          <div class=""><!---Inicio de la primera fila-->
            <form action="#">
              <fieldset>
                <legend> Informacion de Visitacion</legend>
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
                      <option value="" disabled selected>Seleccionar un Sendero</option>
                       <?php while ($arreglo_sendero = mysql_fetch_array($query_sendero)) {  ?>
                       <option value="<?php echo $arreglo_sendero['id']?>"><?php echo $arreglo_sendero['nombre'] ?></option>
                       <?php } ?>
                    </select>
                  <label><i class="small material-icons">swap_calls</i></label>
                </div>
              </div>

            <div class="aside">
                <p>
                  <input class="with-gap" name="acampa" type="radio" selected id="acampano" />
                  <label for="acampano">No</label>

                  <input class="with-gap" name="acampa" type="radio" id="acampasi" />
                  <label for="acampasi">Si</label>
                </p>

              <div>
                  <div class="input-field col s6 m6 l4  ">
                    <input  id="dias_camping" type="text" name="dias_camping" value="" class="validate" class="form-control" data-validacion-tipo="requerido|min:10" >
                    <label for="dias_camping" >  <i class="small material-icons">perm_contact_calendar</i>&nbsp;Dias acampando</label>
                  </div>

                  <div class="input-field col s6 m6 l4  ">
                    <input  id="cantidadPersonasSurf" type="text" name="cantidadPersonasSurf" value="" class="validate" class="form-control" data-validacion-tipo="requerido|min:10" >
                      <label for="cantidadPersonasSurf" >  <i class="small material-icons">supervisor_account</i>&nbsp;Cantidad Personas Surf</label>
                    </div>
              </div>
            </div>
      <!--INICIO DE COLUMNA FECHA DE SALIDA esto se rellena automaticamnte, hoy + dias acamapando
      <div class="input-field col s6 m5 l6">
      <input name="fecha_salida" type="date" placeholder="Seleccione la fecha de salida" class="datepicker right">
      <label for="name" ><i class="small material-icons"></i></label>
    </div>
    </div><!--FIN DEL DIV DE LA SEGUNDA FILA -->
              </fieldset>

            </form>
          </div>
        </div>


          <div class="">
            <div class=""><!--INICIO DE LA CUARTA FILA-->
              <div class="input-field col s6 m5 l6  ">
                <input  id="prepago" type="text" name="prepago" value="" class="validate" class="form-control" data-validacion-tipo="requerido|min:10" >
                <label for="prepago" >  <i class="small material-icons">picture_in_picture</i>&nbsp;Prepago</label>
              </div>

              <div class="input-field col s6 m5 l6  ">
                <input  id="exonerado" type="text" name="exonerado" value="" class="validate" class="form-control" data-validacion-tipo="requerido|min:10">
                <label for="exonerado" >  <i class="small material-icons">perm_identity</i>&nbsp;Exonerado</label>
              </div>
            </div>
        </div><!--Fin del div de la cuarta fila-->


          <div class="input-field  col s6 m6 l12"><!--Inicio de la ultima fila -->
            <div class="">
              <div class="input-field col s6 m6 l4">
              <input  id="tipo_pago" type="text" name="tipo_pago" value="" class="validate" class="form-control" data-validacion-tipo="requerido|min:10">
              <label for="tipo_pago" >  <i class="small material-icons">description</i>&nbsp;Tipo de Pago</label>
            </div>
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
      </div><!--Fin del div de la  fila-->


      <!--==========================================================-->
      <!--=======================Cargando areas silvestres protegidas=========================-->
                        <?php
                         $conexion = mysql_connect("localhost","root");
                         mysql_select_db("sirevi",$conexion);
                         $sentencia_asp = "select * from asp order by nombre ASC";
                         $query_asp = mysql_query($sentencia_asp);
                        ?>
                        <div class="input-field col s4 m5 l4">
                          <select>
                            <option value="" disabled selected>Elija una opcion</option>
                            <?php while ($arreglo_asp = mysql_fetch_array($query_asp)) {  ?>
                            <option value="<?php echo $arreglo_asp['id']?>"><?php echo $arreglo_asp['nombre'] ?></option>
                            <?php } ?>
                          </select>
                        <label> Seleccionar asp</label>
                      </div>
      <!--========================Cargando los sectore=========================================-->
                          <?php
                          $conexion = mysql_connect("localhost","root");
                          mysql_select_db("sirevi",$conexion);
                          $sentencia_sector = "select * from sector order by nombre ASC";
                          $query_sector = mysql_query($sentencia_sector);
                          ?>
                        <div class="input-field col s4 m5 l4">
                          <select>
                            <option value="" disabled selected>Elija una opcion</option>
                             <?php while ($arreglo_sector = mysql_fetch_array($query_sector)) {  ?>
                             <option value="<?php echo $arreglo_sector['id']?>"><?php echo $arreglo_sector['nombre'] ?></option>
                             <?php } ?>
                          </select>
                          <label>Seleccionar Sector</label>
                        </div>


      <!--======================Cargando usuarios=====================================-->
                        <?php
                        $conexion = mysql_connect("localhost","root");
                        mysql_select_db("sirevi",$conexion);
                        $sentencia_user = "select * from usuarios order by nombre ASC";
                        $query_user = mysql_query($sentencia_user);
                        ?>
                        <div class="input-field col s4 m5 l4">
                          <select>
                            <option value="" disabled selected>Elija una opcion</option>
                             <?php while ($arreglo_sector = mysql_fetch_array($query_user)) {  ?>
                             <option value="<?php echo $arreglo_sector['id']?>"><?php echo $arreglo_sector['nombre'] ?></option>
                             <?php } ?>
                          </select>
                          <label> Seleccionar usuario</label>
                        </div>

                        <!--BOTON QUE ME ENVIA EL FORMULARIO-->
                        <div class="center row">
                          <hr>
                        <button title="Enviar" class="btn waves-effect waves-light teal darken-4"
                          value="enviar"  type="submit" name="action"><span class="hide-on-small-only">Enviar</span>
                               <i class="mdi-content-send material-icons right">done</i>
                        </button>

                      <!--BOTON QUE ME BORRA LO QUE ESCRIBI EN EL FORMULARIO-->
                      <button class="btn waves-effect waves-light teal darken-4"
                        value="reset" type="reset"  name="action"><span class="hide-on-small-only">Limpiar</span>
                        <i class="mdi-content-send right"></i>
                      </button>
                    </div>

                  </form>
                  </div>
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
          $("#frm-visitacion").submit(function(){
              return $(this).validate();
          });
      })
  </script>



























  <main>
    <div class="container">
      <div class="row">

        <div class="col s12 m9 l10">
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
                </div><!--FIN DEL DIV DE LA PRIMERA FILA -->
              </div><!--FIN DEL DIV DE LA SEGUNDA FILA -->


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


  <!--================================================================================================================================-->
          </div>
        </div><!-- Div de los tamanos -->

        <div class="col hide-on-small-only m3 l2">
          <div class="toc-wrapper pin-top" style="top: -15px;">
            <div class="buysellads hide-on-small-only">
              <!-- CarbonAds Zone Code -->
              <script async="" type="text/javascript"
              src="" id="_carbonads_js"></script>


                  <div style="height: 1px;">
                    <ul class="section table-of-contents">

                      <hr>
                      <li><a  href="index.php?c=Sendero" ><i style="color:#00b0ff" title="regresar" class=" small material-icons">refresh</i></a></li>
                      <hr>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
              </div>
            </div>
          </main>










































          <main>
            <div class="container">

              <div class="">

                <div class="col s12 m12 l12">
                  <!-- Inicio de mi codigo -->
          <ul class="right-align">
            <li>
                  <div class="btn teal lighten-4 right-align ">No. Diario: 10</div>
                </li>
              </ul>
                  <div id="" class="">
                  <hr>

          <!--===========================================================================================================-->
                  <fieldset>
                    <legend><h5>Registro de Visitación</h5>
                      <h6 style="display:">Completar la informacion con los datos correspondientes
                      </h6></legend>


                      <div class="">
                      <br>
                      <div class="">
                        <div class="col s12 m12 l12">
                          <div class="row">
                            <form id="frm-visitacion" action="?c=Visitacion&a=Guardar" method="post" enctype="multipart/form-data">
                              <input type="hidden" name="id" value="" />
                              <input type="hidden" name="numero_diario" value="10<?php echo $numero_diario; /*@todo hacer la consulta para esto, por dia si el max es 0ponerle 1 select max(numero_diario) from visita where fecha = hoy */?> >" />


                              <div class=""><!--Inicio de la primera fila-->
                                <div class="input-field col s6 m6 l4">
                                  <select name="referencia_visita">
                                    <option value="" disabled selected></option>
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
                                  <label><i class="small material-icons" >info_outline</i> Referencia de Visita</label>
                                </div>


                                <div class="input-field col s6 m6 l4  ">
                                  <input  id="noIdentificacion" type="text" name="noIdentificacion" value="" class="validate" class="form-control" data-validacion-tipo="requerido|min:10" requiere >
                                  <label for="name" >  <i class="small material-icons">subtitles</i>&nbsp;Numero de Identifiación</label>
                                </div>
                                <div class="input-field col s6 m5 l4  ">
                                  <input  id="name" type="text" name="nombre" value="" class="validate" class="form-control" data-validacion-tipo="requerido|min:10" >
                                  <label for="name" >  <i class="small material-icons">face</i>&nbsp;Nombre</label>
                                </div>
                              </div><!--FIN DE LA PRIMERA FILA-->


                                <div class=""><!--Inicio de la segunda fila-->
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

                                      <div class="input-field col s6 m6 l4  ">
                                        <input  id="placa_automovil" type="text" name="placa_automovil" value="" class="validate" class="form-control" data-validacion-tipo="requerido|min:10">
                                        <label for="placa_automovil" >  <i class="small material-icons">settings_ethernet</i>&nbsp;Placa Automovil</label>
                                    </div>

                                    </div><!--Fin de la segunda fila-->


                                        <div class=""><!--Inicio de la tercera fila-->
                                          <!--<div class="input-field col s6 m5 l6  ">
                                            <input  id="placa_automovil" type="text" name="placa_automovil" value="" class="validate" class="form-control" data-validacion-tipo="requerido|min:10">
                                            <label for="placa_automovil" >  <i class="small material-icons">settings_ethernet</i>&nbsp;Placa Automovil</label>
                                        </div>-->

                                        <!--  <div class="input-field col s6 m5 l6">
                                            <input  id="tipo_automovil" type="text" name="tipo_automovil" value="" class="validate" class="form-control" data-validacion-tipo="requerido|min:10">
                                              <label for="tipo_automovil" >  <i class="small material-icons">announcement</i>&nbsp;Tipo de Automovil</label>
                                            </div>
                                        </div>-->
                                      </div><!--Fin de la tercera fila-->


                              <div class="container"><!---Inicio de informacion relacionada a la visitacion-->
                              <div class=""><!---Inicio de la primera fila-->
                                <form action="#">
                                  <fieldset>
                                    <legend> Informacion de Visitacion</legend>
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
                                          <option value="" disabled selected>Elija una opcion</option>
                                           <?php while ($arreglo_sendero = mysql_fetch_array($query_sendero)) {  ?>
                                           <option value="<?php echo $arreglo_sendero['id']?>"><?php echo $arreglo_sendero['nombre'] ?></option>
                                           <?php } ?>
                                        </select>
                                      <label> Seleccionar Sendero</label>
                                    </div>
                                  </div>
                                  <br>
                                  <div class="">
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
                                  </div><!--FIN DEL DIV DE LA SEGUNDA FILA -->



                                </fieldset>
                              </form>
                            </div>
                          </div>



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




                            <div class="row"><!--Inicio de la -->
                              <div class="input-field col s6 m5 l6">
                                <input  id="monto" type="text" name="monto" value="" class="validate" class="form-control" data-validacion-tipo="requerido|min:10">
                                <label for="monto" >  <i class="small material-icons">receipt</i>&nbsp;Monto a pagar</label>
                              </div>

                              <div class="">
                                <div class="input-field col s6 m5 l6">
                                  <input  id="moneda" type="text" name="moneda" value="" class="validate" class="form-control" data-validacion-tipo="requerido|min:10">
                                  <label for="moneda" >  <i class="small material-icons">description</i>&nbsp;Tipo de Moneda</label>
                                </div>
                              </div>
                            </div><!--Fin del div de la quinta fila-->


          <!--=======================Cargando areas silvestres protegidas=========================-->
                            <?php
                             $conexion = mysql_connect("localhost","root");
                             mysql_select_db("sirevi",$conexion);
                             $sentencia_asp = "select * from asp order by nombre ASC";
                             $query_asp = mysql_query($sentencia_asp);
                            ?>
                            <div class="input-field col s4 m5 l4">
                              <select>
                                <option value="" disabled selected>Elija una opcion</option>
                                <?php while ($arreglo_asp = mysql_fetch_array($query_asp)) {  ?>
                                <option value="<?php echo $arreglo_asp['id']?>"><?php echo $arreglo_asp['nombre'] ?></option>
                                <?php } ?>
                              </select>
                            <label> Seleccionar asp</label>
                          </div>
          <!--========================Cargando los sectore=========================================-->
                              <?php
                              $conexion = mysql_connect("localhost","root");
                              mysql_select_db("sirevi",$conexion);
                              $sentencia_sector = "select * from sector order by nombre ASC";
                              $query_sector = mysql_query($sentencia_sector);
                              ?>
                            <div class="input-field col s4 m5 l4">
                              <select>
                                <option value="" disabled selected>Elija una opcion</option>
                                 <?php while ($arreglo_sector = mysql_fetch_array($query_sector)) {  ?>
                                 <option value="<?php echo $arreglo_sector['id']?>"><?php echo $arreglo_sector['nombre'] ?></option>
                                 <?php } ?>
                              </select>
                              <label>Seleccionar Sector</label>
                            </div>


          <!--======================Cargando usuarios=====================================-->
                            <?php
                            $conexion = mysql_connect("localhost","root");
                            mysql_select_db("sirevi",$conexion);
                            $sentencia_user = "select * from usuarios order by nombre ASC";
                            $query_user = mysql_query($sentencia_user);
                            ?>
                            <div class="input-field col s4 m5 l4">
                              <select>
                                <option value="" disabled selected>Elija una opcion</option>
                                 <?php while ($arreglo_sector = mysql_fetch_array($query_user)) {  ?>
                                 <option value="<?php echo $arreglo_sector['id']?>"><?php echo $arreglo_sector['nombre'] ?></option>
                                 <?php } ?>
                              </select>
                              <label> Seleccionar usuario</label>
                            </div>



                          <!--BOTON QUE ME ENVIA EL FORMULARIO-->
                          <button title="Enviar" class="btn waves-effect waves-light teal darken-4"
                            value="enviar"  type="submit" name="action"><span class="hide-on-small-only">Enviar</span>
                                 <i class="mdi-content-send material-icons right">done</i>
                          </button>

                            <button class="btn waves-effect waves-light teal darken-4"  type="reset" name="action">Limpiar<i class="mdi-content-send right"></i></button>
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
