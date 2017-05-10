<main>
  <div class="container">
    <div class="row">

      <div class="col s12 m12 l10">
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

  <script>
      $(document).ready(function(){
          $("#frm-sendero").submit(function(){
              return $(this).validate();
          });
      })
  </script>
