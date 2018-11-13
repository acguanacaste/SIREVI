
<main>
  <div class="container">
    <div class="row">

      <div class="col s12 m9 l10">
<!-- Inicio de mi codigo -->
        <div id="search-docs" class="section scrollspy">
          <hr>


<!--===========================================================================================================-->


<fieldset>
  <legend><h5>Formulario para modificar información</h5>
    <h6>Completar la informacion con los datos correspondientes</h6></legend>
    <div class=" contact">
      <hr>
      <br>
      <div class="">
        <div class="col s12 m12 l11">
          <div class="row">
            <form id="frm-asp" action="?c=ASP&a=Guardar" method="post" enctype="multipart/form-data">
              <input type="hidden" name="id" value="<?php echo $asp->id; ?>" />

              <div>
                <div class=""><!---INICIO DE LA PRIMERA FILA-->
                  <div class="input-field col s12 m12 l12  ">
                    <input  id="name" type="text" name="nombre" value="<?php echo $asp->nombre; ?>" requiered >
                    <label for="name" ><i class="small material-icons">location</i>Área Conservación</label>
                  </div>
                </div>

                 <!--INICIO DE COLUMNA APELLIDO-->

                   <div class=""><!---INICIO DE LA SEGUNDA FILA-->
                     <div class="input-field col s12 m6 l6  "><!--Lineas para la descripcion de area de conservacion a la que pertenece el area silvestre--->
                       <input  id="ubicacion" type="text" name="ubicacion" value="<?php echo $asp->ubicacion; ?>" requiered>
                       <label for="ubicacion" >  <i class="small material-icons">location_on</i>Ubicación geográfica</label>
                     </div>

                     <div class="input-field col s12 m6 l6  ">
                       <input  id="tipo" type="text" name="tipo" value="<?php echo $asp->tipo; ?>" requiered >
                       <label for="tipo" >  <i class="small material-icons">description</i>Tipo ASP</label>
                     </div>

                   </div><!--FIN DEL DIV DE LA SEGUNDA FILA -->

               </div><!--FIN DEL DIV DE LA PRIMERA FILA -->

        <!--BOTON QUE ME ENVIA EL FORMULARIO-->
      <center>
        <button title="Enviar" class="btn waves-effect waves-light teal darken-4"
          value="enviar"  type="submit" name="action"><span class="hide-on-small-only">Enviar</span>
               <i class="mdi-content-send material-icons right">done</i>
        </button>
      </center>
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
                    <li><a  href="?c=ASP" >
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
  </body>
  <script>
      $(document).ready(function(){
          $("#frm-asp").submit(function(){
              return $(this).validate();
          });
      })
  </script>
