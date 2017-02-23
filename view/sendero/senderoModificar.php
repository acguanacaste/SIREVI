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
                    <label for="name" >  <i class="small material-icons">face</i>Nombre del Sendero</label>
                  </div>

                 <!--INICIO DE COLUMNA -->
                 <div class="input-field col s6 m5 l6  ">
                   <input  id="distancia" type="text" name="distancia" value="<?php echo $sendero->distancia; ?>" class="validate" class="form-control" data-validacion-tipo="requerido|min:10" >
                   <label for="distancia" >  <i class="small material-icons">recent_actors</i>Distancia</label>
                 </div>
               </div><!--FIN DEL DIV DE LA PRIMERA FILA -->

               <div class="">
                 <div class="input-field col s6 m5 l6  ">
                   <input  id="longitud" type="text" name="longitud" value="<?php echo $sendero->longitud; ?>" class="validate" class="form-control" data-validacion-tipo="requerido|min:10" >
                   <label for="longitud" >  <i class="small material-icons">recent_actors</i>Longitud</label>
                 </div>

                 <div class="input-field col s6 m5 l6  ">
                   <input  id="latitud" type="text" name="latitud" value="<?php echo $sendero->latitud; ?>" class="validate" class="form-control" data-validacion-tipo="requerido|min:10" >
                   <label for="latitud" >  <i class="small material-icons">recent_actors</i>Latitud</label>
                 </div>
               </div>


               <!--BOTON QUE ME ENVIA EL FORMULARIO-->
               <button title="Enviar" class="btn waves-effect waves-light teal darken-4"
                 value="enviar"  type="submit" name="action"><span class="hide-on-small-only">Enviar</span>
                      <i class="mdi-content-send material-icons right">done</i>
               </button>

             <!--BOTON QUE ME BORRA LO QUE ESCRIBI EN EL FORMULARIO-->
             <button title="Limpiar Pantalla" class="btn waves-effect waves-light teal darken-4"
               value="reset"  type="reset" name="action"><span class="hide-on-small-only">Limpiar</span>
                    <i class="mdi-content-send material-icons right">delete</i>
             </button>


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

      <div class="col hide-on-small-only m3 l2">
        <div class="toc-wrapper pin-top" style="top: -15px;">
          <div class="buysellads hide-on-small-only">
            <!-- CarbonAds Zone Code -->
            <script async="" type="text/javascript"
            src="" id="_carbonads_js"></script>

        <!--    <div id="carbonads">
              <span>
                <span class="carbon-wrap">
                  <a href="" class="carbon-img" target="_blank">

                    <img src="" alt="" style="max-width: 130px;" height="100" border="0" width="130"></a>
                    <br>
              <!--      <a href="" class="carbon-text" target="_blank">Algo mas de texto</a></span> -
                    <br>
                <!--    <a href="" class="carbon-poweredby" target="_blank">Un texto mas...</a></span></div> -
              </div>  -->
                <div style="height: 1px;">
                  <ul class="section table-of-contents">

                    <hr>
                    <li><a  href="index.php?c=Sendero" ><i style="color:#00b0ff" title="regresar" class=" small material-icons">refresh</i></a></li>
                    <hr>
                    <hr>

                    <div class="">

                      <a style="color:#00b0ff" href="index.php?c=Sendero&a=agregarRegistro">
                         <i style="color:#00b0ff" class="small material-icons">playlist_add</i>Agregar Sendero</a>

                      <hr>
                    </div>
                    <li>Puedo poner lista de items</li>
                    <li>Otro link por aqui...</li>
                    <li><h5>Senderos...</h5></li>

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
