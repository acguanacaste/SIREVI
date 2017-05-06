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
        <div class="col s14 m14 l11">
          <div class="row">
            <form id="frm-usuario" action="?c=Sendero&a=Guardar" method="post" enctype="multipart/form-data">
              <input type="hidden" name="id" value="<?php echo $sendero->id; ?>" />
              <div>

                <div class="row"><!---INICIO DE LA PRIMERA FILA-->
                  <div class="input-field col s6 m5 l6  ">
                    <input  id="name" type="text" name="nombre" value="<?php echo $sendero->nombre; ?>" class="validate" class="form-control" data-validacion-tipo="requerido|min:10" >
                    <label for="name" >  <i class="small material-icons">swap_calls</i>Nombre del Sendero</label>
                  </div>

                 <!--INICIO DE COLUMNA -->
                 <div class="input-field col s6 m5 l6  ">
                   <input  id="distancia" type="text" name="distancia" value="<?php echo $sendero->distancia; ?>" class="validate" class="form-control" data-validacion-tipo="requerido|min:10" >
                   <label for="distancia" >  <i class="small material-icons">settings_backup_restore</i>Distancia</label>
                 </div>
               </div><!--FIN DEL DIV DE LA PRIMERA FILA -->

               <div class="row">
                 <div class="input-field col s6 m5 l6  ">
                   <input  id="longitud" type="text" name="longitud" value="<?php echo $sendero->longitud; ?>" class="validate" class="form-control" data-validacion-tipo="requerido|min:10" >
                   <label for="longitud" >  <i class="small material-icons">language</i>Longitud</label>
                 </div>

                 <div class="input-field col s6 m5 l6  ">
                   <input  id="latitud" type="text" name="latitud" value="<?php echo $sendero->latitud; ?>" class="validate" class="form-control" data-validacion-tipo="requerido|min:10" >
                   <label for="latitud" >  <i class="small material-icons">language</i>Latitud</label>
                 </div>
               </div>

               <!--INICIO DE COLUMNA -->
                     <div class="row">
                       <div class="input-field col s12 m10 l12 ">
                         <input  id="asp" type="text" name="asp"  value="<?php echo $sendero->sector; ?>" value="<?php echo $sendero->sector; ?>"   class="validate form-control" data-validacion-tipo="requerido|min:15">
                         <label for="asp"> <i class="small material-icons">view_quilt</i><span class="hide-on-small-only">Sector al que pertenece</span></label>
                       </div>
                 </div><!--FIN DEL DIV DE FILA-->

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
                  

                    <div class="">

                      <a style="color:#00b0ff" href="index.php?c=Sendero&a=agregarRegistro">
                         <i style="color:#00b0ff" class="small material-icons">playlist_add</i>Agregar Sendero</a>

                      <hr>
                    </div>
                  </ul>
                </div>
              </div>
            </div>
          </div>
            </div>
          </div>
        </main>
  </body>
  <script>
      $(document).ready(function(){
          $("#frm-pais").submit(function(){
              return $(this).validate();
          });
      })
  </script>
