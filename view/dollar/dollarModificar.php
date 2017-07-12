<main>
  <div class="container">
    <div class="row">

      <div class="col s12 m12 l10">
        <!-- Inicio de mi codigo -->
        <div id="search-docs" class="section scrollspy">
          <hr>
<!--===========================================================================================================-->


<fieldset>
  <legend><h5>Formulario modificar</h5></legend>
    <div class="container">
      <hr>
      <br>
      <div class="row">
        <div class="col col s12 m12 l12">
          <div class="row">
            <form id="frm-dollar" action="?c=Dollar&a=Guardar" method="post" enctype="multipart/form-data">
              <input type="hidden" name="id" value="<?php echo $dollar->id; ?>" />

              <div>

                <div class="row"><!---INICIO DE LA SEGUNDA FILA-->
                  <div class="input-field col s6 m5 l6 "><!--Lineas para la descripcion de area de conservacion a la que pertenece el area silvestre--->
                    <input  id="valor_dolar" type="text" name="valor_dolar" value="<?php echo $dollar->valor_dolar; ?>" class="center-align validate" class="form-control" data-validacion-tipo="requerido|min:10" required >
                    <label for="valor_dolar" >  <i class="small material-icons">class</i><span class="hide-on-small-only">Valor actual de dolar</label>
                  </div>


                <!--INICIO DE COLUMNA -->
                <div class="input-field col s6 m5 l6  ">
                  <input  id="fecha_cambio" type="text" name="fecha_cambio" value="<?php echo $dollar->fecha_cambio; ?>" class="validate" class="form-control" data-validacion-tipo="requerido|min:10" required >
                  <label for="fecha_cambio" >  <i class="small material-icons">assignment</i>Fecha de cambio</label>
                </div>
              </div><!--FIN DEL DIV DE LA PRIMERA FILA -->
        <!--    </div><!--FIN DEL DIV DE LA SEGUNDA FILA -->


              <div class="row"><!---INICIO DE LA PRIMERA FILA-->
                <!--<div class="input-field col s6 m6 l6  ">
                  <input  id="latitud" type="text" name="latitud"  class="form-control validate" data-validacion-tipo="requerido|min:10" required >
                  <label for="latitud" >  <i class="small material-icons">language</i>Fecha de cambio</label>-->
             </div>

              <!--BOTON QUE ME ENVIA EL FORMULARIO-->
              <button title="Enviar" class="btn waves-effect waves-light teal darken-4"
                value="enviar"  type="submit" name="action"><span class="hide-on-small-only">Enviar</span>
                     <i class="mdi-content-send material-icons right">done</i>
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
                    <li><a  href="index.php?c=Dollar" ><i style="color:#00b0ff" title="regresar" class=" small material-icons">refresh</i></a></li>
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
          $("#frm-dollar").submit(function(){
              return $(this).validate();
          });
      })
  </script>
