<main>
  <div class="container">
    <div class="row">

      <div class="col s12 m12 l10">
        <!-- Inicio de mi codigo -->
        <div id="search-docs" class="section scrollspy">
          <hr>
<!--===========================================================================================================-->

<fieldset>
  <legend><h5>Formulario para Registros de Sectores</h5>
    <h6>Completar la informacion con los datos correspondientes</h6></legend>
    <div class="">
      <hr>
      <br>
      <div class="">
        <div class="col s12 m12 l11">
          <div class="">
            <form id="frm-sector" action="?c=Sector&a=Guardar" method="post" enctype="multipart/form-data">
              <input type="hidden" name="id" value="" />

              <div>

                <div class=""><!---INICIO DE LA SEGUNDA FILA-->
                  <div class="input-field col s12 m12 l12  "><!--Lineas para la descripcion de area de conservacion a la que pertenece el area silvestre--->
                    <input  id="nombre" type="text" name="nombre" value="" class="validate" class="form-control" data-validacion-tipo="requerido|min:10" required>
                    <label for="nombre" >  <i class="small material-icons">perm_media</i>Nombre del Sector</label>
                  </div>
                </div><!--FIN DEL DIV DE LA SEGUNDA FILA -->

                <div class=""><!---INICIO DE LA PRIMERA FILA-->

                  <div class="input-field col s6 m6 l6  ">
                    <input  id="capacidad_acampar" type="text" name="capacidad_acampar" value="" class="validate" class="form-control" data-validacion-tipo="requerido|min:10" required>
                    <label for="capacidad_acampar" >  <i class="small material-icons">supervisor_account</i> Capacidad acampar</label>
                  </div>


               <!--INICIO DE COLUMNA CODIGO-->
               <div class="input-field col s6 m6 l6  ">
                 <input  id="capacidad_diaria" type="text" name="capacidad_diaria" value="" class="validate" class="form-control" data-validacion-tipo="requerido|min:10" required>
                 <label for="capacidad_diaria" >  <i class="small material-icons">supervisor_account</i>Capacidad diaria</label>
                </div>
              </div><!--FIN DEL DIV DE LA PRIMERA FILA -->


<!--===========Codigo PHP para cargar el select con la informacionde la base de datos==========================-->
              <?php
              $conexion = mysql_connect("localhost","root");
              mysql_select_db("sirevi",$conexion);
              $sentencia = "select * from ASP order by nombre ASC";
              $query = mysql_query($sentencia);
              ?>
<!--======================Inicio del codigo para el select y final de codigo PHP ====================-->

             <div class="">
                <div class="input-field col s12 m12 l12">
                 <select name="asp">
                    <option value="" disabled selected>Elija una opcion</option>
                   <?php while ($arreglo = mysql_fetch_array($query)) {  ?>
                   <option value="<?php echo $arreglo['id']?>" ><?php echo $arreglo['nombre'] ?></option>
                   <?php } ?>

                 </select>
                 <label>Selecione Área Protegida</label>
               </div>
              </div>


                <div class="">
                  <fieldset>
                    <legend>Tarifas de admisión por el día</legend>
                    <div class=""><!--- Inicio de linea para las tarifas --->
                      <div class="input-field col s12 m12 l12">
                        <fieldset class="z-depth-2">
                          <legend>Nacionales</legend>
                          <div class="input-field col s6 m4 l4 ">
                            <input  id="adulto_nacional" type="number" name="adulto_nacional" value="" class="validate" class="form-control" data-validacion-tipo="requerido|min:10" required>
                            <label for="adulto_nacional" >  <i class="small material-icons"></i>Adultos</label>
                          </div>

                          <div class="input-field col s6 m4 l4">
                            <input  id="nino_nacional" type="number" name="nino_nacional" value="" class="validate" class="form-control" data-validacion-tipo="requerido|min:10" required>
                            <label for="nino_nacional" >  <i class="small material-icons"></i>Niños</label>
                          </div>

                          <div class="input-field col s6 m4 l4">
                            <input  id="estudiantes" type="number" name="estudiantes" value="" class="validate" class="form-control" data-validacion-tipo="requerido|min:10" required>
                            <label for="estudiantes" >  <i class="small material-icons"></i>Estudiantes</label>
                          </div>
                        </fieldset>
                      </div>


                    <div class="input-field col s12 m12 l12">
                      <fieldset class="z-depth-2">
                        <legend>Extranjeros</legend>
                        <div class="input-field col s6 m6 l6  ">
                          <input  id="adulto_extranjero" type="number" name="adulto_extranjero" value="" class="validate" class="form-control" data-validacion-tipo="requerido|min:10" required>
                          <label for="adulto_extranjero" >  <i class="small material-icons"></i>Adultos</label>
                        </div>

                        <div class="input-field col s6 m6 l6  ">
                          <input  id="nino_extranjero" type="number" name="nino_extranjero" value="" class="validate" class="form-control" data-validacion-tipo="requerido|min:10" required>
                          <label for="nino_extranjero" >  <i class="small material-icons"></i>Niños</label>
                        </div>
                      </fieldset>
                    </div>
                  </div><!--Fin de lineas para las tarifas -->
                  </fieldset>
                </div>

                <div class="">
                  <fieldset>
                    <div class="input-field col s12 m12 l12">
                        <fieldset class="z-depth-2 input-field col s6 m5 l5">
                          <div class="">
                            <input  id="" type="number" name="tarifa_camping" value="" class="validate" class="form-control" data-validacion-tipo="requerido|min:10" required>
                            <label for="" ><i class="small material-icons"></i>Tafira Acampar</label>
                          </div>
                       </fieldset>

                       <div class="input-field col s1 m1 l1"></div>

                      <fieldset class="z-depth-2 input-field col s6 m5 l5">
                        <div class="">
                          <input  id="" type="number" name="cambio_dolar" value="" class="validate" class="form-control" data-validacion-tipo="requerido|min:10" required>
                          <label for="" ><i class="small material-icons"></i>Cambio dolar</label>
                        </div>
                      </fieldset>
                    </div>
                  </fieldset>
                </div>
              <br>
              <!--BOTON QUE ME ENVIA EL FORMULARIO-->
            <center>
              <button title="Enviar" class="btn waves-effect waves-light teal darken-4"
                value="enviar"  type="submit" name="action"><span class="hide-on-small-only">Enviar</span>
                     <i class="mdi-content-send material-icons right">done</i>
              </button>

            <!--BOTON QUE ME BORRA LO QUE ESCRIBI EN EL FORMULARIO-->
            <button title="Limpiar Pantalla" class="btn waves-effect waves-light teal darken-4"
              value="reset"  type="reset" name="action"><span class="hide-on-small-only">Limpiar</span>
                   <i class="mdi-content-send material-icons right">delete</i>
            </button>
          </center>
					 </div>
         </form>
        </div>

       </div>
     </div>
</fieldset>
<br>
<div class=" right hide-on-large-only">
  <a href="index.php?c=Sector"><i style="color:#00b0ff" class="small material-icons blue-grey darken-2 z-depth-1 btn-floating pulse">arrow_back</i>&nbsp;Página anterior</a>
</div>
<!--================================================================================================================================-->
        </div>
      </div><!-- Div de los tamanos -->

      <div class="col hide-on-med-and-down l2">
        <div class="toc-wrapper pin-top" style="top: -15px;">
          <div class="buysellads hide-on-small-only">
            <script async="" type="text/javascript"
            src="" id="_carbonads_js"></script>
                <div style="height: 1px;">
                  <ul class="section table-of-contents">

                    <hr>
                    <li><a  href="?c=Sector" >
                      <i style="color:#00b0ff" title="Página Anterior" class=" small material-icons">arrow_back</i>Página anterior</a></li>
                    <li>
                    <hr>
                  </ul>
                </div>
              </div>
            </div>
          </div>
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
