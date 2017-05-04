<main>
  <div class="container">
    <div class="row">

      <div class="col s12 m9 l10">
<!-- Inicio de mi codigo -->
        <div id="search-docs" class="section scrollspy">
          <hr>


<!--===========================================================================================================-->

<fieldset>
  <legend><h5>Sector: <?php echo $sector->nombre; ?></h5>
   <h6>Utilice los campos habilitados para modificar información</h6></legend>
    <div class="container contact">
      <br>
      <hr>
      <br>
      <div class="row">
        <div class="col s12 m12 l12">
          <div class="row">
            <form id="frm-sector" action="?c=Sector&a=Guardar" method="post" enctype="multipart/form-data">
              <input type="hidden" name="id" value="<?php echo $sector->id; ?>" />


                <div class="row"><!---INICIO DE LA PRIMERA FILA-->
                  <div class="input-field col s12 m12 l12  ">
                    <input  id="name" type="text" name="nombre" value="<?php echo $sector->nombre; ?>" class="validate" class="form-control" data-validacion-tipo="requerido|min:10" >
                    <label for="name" >  <i class="small material-icons"></i>Nombre sector</label>
                  </div>
                  </div><!--FIN DEL DIV DE LA PRIMERA FILA -->

                 <!--INICIO DE COLUMNA APELLIDO-->
                 <div>
                <div class="input-field col s6 m6 l6  ">
                  <input  id="capacidad_diaria" type="text" name="capacidad_diaria" value="<?php echo $sector->capacidad_diaria; ?>" class="validate" class="form-control" data-validacion-tipo="requerido|min:10" >
                  <label for="capacidad_diaria" >  <i class="small material-icons"></i>Capaciddad Diaria</label>
                </div>
              </div>




     <!--INICIO DE LA FILA 2-->
     <!--INICION DE COLUMNA DEL CEDULA-->
                   <div class="row"><!--INICIO DEL DIV DE LA SEGUNDA FILA-->
                     <div class="input-field col s6 m6 l6 ">
                       <input  id="capacidad_acampar" type="text" name="capacidad_acampar"  value="<?php echo $sector->capacidad_acampar; ?>" value="<?php echo $sector->capacidad_acampar; ?>" class="form-control"  class="validate" data-validacion-tipo="requerido|min:15">
                       <label for="capacidad_acampar"> <i class="small material-icons">picture_in_picture</i>Capacidad Campistas</label>
                     </div>


                   <!--INICIO DE COLUMNA CONTRASENA-->
                   <div class="">
                     <div class="input-field col s12 m12 l12">
                      <select  id="asp" type="text" name="asp" value=<?php echo $sector->asp ?>>
                        <option value="" disabled selected>Elija una opcion</option>
                        <option value="1">Opcion 1</option>
                        <option value="2">Opcion 2</option>
                        <option value="3">Opcion 3</option>
                      </select>
                      <label>Selecione Area Silvestre</label>
                    </div>
                   </div>
               </div><!--FIN DEL DIV DE LA SEGUNDA FILA-->



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
                    <li><a  href="index.php?c=Sector" ><i style="color:#00b0ff" title="regresar" class=" small material-icons">refresh</i></a></li>
                    <hr>
                    <hr>

                    <div class="">

                      <a style="color:#00b0ff" href="index.php?c=Sector&a=agregarRegistro"> <i style="color:#00b0ff" class="small material-icons">playlist_add</i>Agregar Sector</a>

                      <hr>
                    </div>
                    <li>Puedo poner lista de items</li>
                    <li>Otro link por aqui...</li>
                    <li><h5>Sectores...</h5></li>

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
