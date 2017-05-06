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
              <div class="col s12 m12 l12">
                <div class="row">
                  <form id="frm-visitacion" action="?c=Visitacion&a=Guardar" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="" />

                    <div class="input-field col s12 m12 l12">
                      <select>
                        <option value="" disabled selected></option>
                        <option value="1">Visita reiterada</option>
                        <option value="2">Medios de comunicacion</option>
                        <option value="3">Recomendacion por amigos</option>
                        <option value="4">Option </option>
                        <option value="5">Option </option>
                        <option value="6">Option </option>
                        <option value="7">Option 1</option>
                        <option value="8">Option 2</option>
                        <option value="9">Option 3</option>

                      </select>
                      <label> <i class="small material-icons">info_outline</i> Referencia de Visita</label>
                    </div>

                    <div class="row"><!--INICIO DE LA PRIMERA FILA-->
                      <div class="input-field col s6 m5 l6  ">
                        <input  id="noIdentificacion" type="text" name="noIdentificacion" value="" class="validate" class="form-control" data-validacion-tipo="requerido|min:10" >
                        <label for="name" >  <i class="small material-icons">subtitles</i>&nbsp;Numero de Identifiacion</label>
                      </div>

                      <div class="input-field col s6 m5 l6  ">
                        <input  id="numero_diario" type="text" name="numero_diario" value="" class="validate" class="form-control" data-validacion-tipo="requerido|min:10" >
                        <label for="numero_diario" >  <i class="small material-icons">class</i>&nbsp;Numero diario</label>
                      </div>
                    </div><!--FIN DE LA PRIMERA FILA-->

                    <div class="row"><!---INICIO DE LA SEGUNDA FILA-->
                      <div class="input-field col s6 m5 l6  ">
                        <input  id="name" type="text" name="nombre" value="" class="validate" class="form-control" data-validacion-tipo="requerido|min:10" >
                        <label for="name" >  <i class="small material-icons">face</i>&nbsp;Nombre</label>
                      </div>

                      <!--INICIO DE COLUMNA FECHA DE SALIDA-->
                      <div class="input-field col s6 m5 l6">
                        <input name="fecha_salida" type="date" class="datepicker">
                        <label for="name" ><i class="small material-icons">today</i>&nbsp;Fecha salida</label>
                      </div>
                    </div><!--FIN DEL DIV DE LA SEGUNDA FILA -->

                    <div class="row"><!---INICIO DE LA TECERA FILA-->
                      <form action="#">
                        <fieldset>
                          <legend> Persona(s) Acampando</legend>
                          <p>
                            <input class="with-gap" name="acampa" type="radio" id="acampa" />
                            <label for="acampa">Si</label>
                          </p>
                          <p>
                            <input class="with-gap" name="acampa" type="radio" id="acampa" />
                            <label for="acampa">No</label>
                          </p>
                        </fieldset>
                      </form>

                      <!--INICIO DE COLUMNA -->
                      <div class="input-field col s6 m5 l6  ">
                        <input  id="dias_camping" type="text" name="dias_camping" value="" class="validate" class="form-control" data-validacion-tipo="requerido|min:10" >
                        <label for="dias_camping" >  <i class="small material-icons">perm_contact_calendar</i>&nbsp;Dias acampando</label>
                      </div>

                      <div class="input-field col s6 m5 l6  ">
                        <input  id="cantidadPersonasSurf" type="text" name="cantidadPersonasSurf" value="" class="validate" class="form-control" data-validacion-tipo="requerido|min:10" >
                        <label for="cantidadPersonasSurf" >  <i class="small material-icons">supervisor_account</i>&nbsp;Cantidad Personas Surf</label>
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
                      <label for="placa_automovil" >  <i class="small material-icons">settings_ethernet</i>&nbsp;Placa Automovil</label>
                    </div>

                    <div class="input-field col s6 m5 l6">
                      <input  id="tipo_automovil" type="text" name="tipo_automovil" value="" class="validate" class="form-control" data-validacion-tipo="requerido|min:10">
                      <label for="tipo_automovil" >  <i class="small material-icons">announcement</i>&nbsp;Tipo de Automovil</label>
                    </div>
                  </div><!--FIN DEL DIV DE LA QUINTA FILA-->

                  <div class="row"><!--INICIO DE SETIMA FILA-->
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
                  </div><!--FIN DE LA SETIMA FILA-->


<!--==============Cargando los paices==============================-->
                    <?php
                    $conexion = mysql_connect("localhost","root");
                    mysql_select_db("sirevi",$conexion);
                    $sentencia_pais = "select * from pais order by nombre ASC";
                    $query_pais = mysql_query($sentencia_pais);
                    ?>
                  <div class="input-field col s4 m5 l4">
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
                    $conexion = mysql_connect("localhost","root");
                    mysql_select_db("sirevi",$conexion);
                    $sentencia_cuidad = "select * from provincia order by nombre ASC";
                    $query_cuidad = mysql_query($sentencia_cuidad);
                    ?>
                  <div class="input-field col s4 m5 l4">
                    <select>
                      <option value="" disabled selected>Elija una opcion</option>
                     <?php while ($arreglo_cuidad = mysql_fetch_array($query_cuidad)) {  ?>
                     <option value="<?php echo $arreglo_cuidad['id']?>"><?php echo $arreglo_cuidad['nombre'] ?></option>
                     <?php } ?>
                    </select>
                    <label> Seleccionar Provincia</label>
                  </div>


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

<!--================Cargando los senderos==============================-->
                  <?php
                  $conexion = mysql_connect("localhost","root");
                  mysql_select_db("sirevi",$conexion);
                  $sentencia_sendero = "select * from sendero order by nombre ASC";
                  $query_sendero = mysql_query($sentencia_sendero);
                  ?>
                  <div class="input-field col s4 m5 l4">
                    <select>
                      <option value="" disabled selected>Elija una opcion</option>
                       <?php while ($arreglo_sendero = mysql_fetch_array($query_sendero)) {  ?>
                       <option value="<?php echo $arreglo_sendero['id']?>"><?php echo $arreglo_sendero['nombre'] ?></option>
                       <?php } ?>
                    </select>
                    <label> Seleccionar Sendero</label>
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
</body>
<script>
    $(document).ready(function(){
          $("#frm-visitacion").submit(function(){
              return $(this).validate();
          });
      })
  </script>
