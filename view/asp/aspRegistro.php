<<<<<<< refs/remotes/origin/master
=======

>>>>>>> add some changes for development
<main>
  <div class="container">
    <div class="row">

      <div class="col s12 m9 l10">
<!-- Inicio de mi codigo -->

       <div id="search-docs" class="section scrollspy">
       <hr>

<!--===========================================================================================================-->

<fieldset>
  <legend><h5>Áreas Protegidas</h5>
    <h6>Completar la información con los datos correspondientes</h6></legend>
    <div class="container contact">
      <hr>
      <br>
      <div class="row">
        <div class="col s12 m12 l11">
          <div class="row">
            <form id="frm-asp" action="?c=ASP&a=Guardar" method="post" enctype="multipart/form-data">
              <input type="hidden" name="id" value="" />
              <div>
<<<<<<< refs/remotes/origin/master


                <div class="input-field col s12">
                 <select  id="nombre" name="nombre" data-value="<?php echo $asp->nombre; ?>" required>
                   <option value="" disabled selected></option>
                   <option data-value="<?php echo $asp->nombre; ?>">Guanacaste (ACG)</option>
                   <option data-value="<?php echo $asp->nombre; ?>">Arenal Huetar-Norte (ACA-HN)</option>
                   <option data-value="<?php echo $asp->nombre; ?>">Arenal Tempisque (ACA-T)</option>
                   <option data-value="<?php echo $asp->nombre; ?>">Amistad Caribe (ACLA-C)</option>
                   <option data-value="<?php echo $asp->nombre; ?>">Amistad Pacifico (ACLA-P)</option>
                   <option data-value="<?php echo $asp->nombre; ?>">Cordilllera Volcánica Central (ACCVC)</option>
                   <option data-value="<?php echo $asp->nombre; ?>">Isla del Coco (ACMIC)</option>
                   <option data-value="<?php echo $asp->nombre; ?>">Osa (ACOSA)</option>
                   <option data-value="<?php echo $asp->nombre; ?>">Pacífico Central (ACOPAC)</option>
                   <option data-value="<?php echo $asp->nombre; ?>">Tempisque (ACT)</option>
                   <option data-value="<?php echo $asp->nombre; ?>">Tortuguero (ACTO)</option>
                 </select>
                 <label><i class="small material-icons">terrain</i> Área Conservación</label>
               </div>

                <div class="row"><!---INICIO DE LA SEGUNDA FILA-->
            <!--      <div class="input-field col s12 m12 l12  ">
                    <input  id="ubicacion" type="text" name="ubicacion" value="" class="validate" class="form-control" data-validacion-tipo="requerido|min:10" required >
                    <label for="ubicacion" ><i class="small material-icons">location_on</i><span class="hide-on-small-only">Ubicación geográfica</span></label>
                  </div> -->
                  <div class="row">
                    <form class="col s12 m12 l12">
                      <div class="row">
                        <div class="input-field col s12 m12 l12">
                          <textarea id="textarea1" name="ubicacion" class="materialize-textarea"></textarea>
                          <label for="textarea1"><i class="small material-icons">location_on</i><span class="hide-on-small-only">Ubicación geográfica</span></label>
                        </div>
                      </div>
                    </form>
                  </div>
                </div><!--FIN DEL DIV DE LA SEGUNDA FILA -->
                 <!--INICIO DE COLUMNA APELLIDO-->
                <div>
                 <div class="input-field col s12 m12 l12 ">
                   <input  id="tipo" type="text" name="tipo" value="" class="validate" class="form-control" data-validacion-tipo="requerido|min:10" required>
                   <label for="tipo" >  <i class="small material-icons">description</i><span class="hide-on-small-only">Tipo ASP</span></label>
=======
                <div class="row"><!---INICIO DE LA PRIMERA FILA-->
                  <div class="input-field col s6 m5 l6  ">
                    <input  id="name" type="text" name="nombre" value="" class="validate" class="form-control" data-validacion-tipo="requerido|min:10" >
                    <label for="name" ><i class="small material-icons">turned_in_not</i>Area Silvestre</label>
                  </div>

                 <!--INICIO DE COLUMNA APELLIDO-->
                 <div class="input-field col s6 m5 l6  ">
                   <input  id="last_name" type="text" name="tipo" value="" class="validate" class="form-control" data-validacion-tipo="requerido|min:10" >
                   <label for="last_name" >  <i class="small material-icons">receipt</i>Tipo ASP</label>
>>>>>>> add some changes for development
                 </div>
               </div><!--FIN DEL DIV DE LA PRIMERA FILA -->


<<<<<<< refs/remotes/origin/master

        <!--BOTON QUE ME ENVIA EL FORMULARIO-->
<center>
        <button title="Enviar" class="btn waves-effect waves-light teal darken-4"
          value="enviar"  type="submit" name="action"><span class="hide-on-small-only">Enviar</span>
               <i class="mdi-content-send material-icons right">done</i>
        </button>

      <!--BOTON QUE ME BORRA LO QUE ESCRIBI EN EL FORMULARIO-->
      <button title="Limpiar Pnatalla" class="btn waves-effect waves-light teal darken-4"
        value="reset"  type="reset" name="action"><span class="hide-on-small-only">Limpiar</span>
             <i class="mdi-content-send material-icons right">delete</i>
      </button>
</center>

=======
        <div class="row"><!---INICIO DE LA SEGUNDA FILA-->
          <div class="input-field col s12 m5 l12  "><!--Lineas para la descripcion de area de conservacion a la que pertenece el area silvestre--->
            <input  id="last_name" type="text" name="area_conservacion" value="" class="validate" class="form-control" data-validacion-tipo="requerido|min:10" >
            <label for="last_name" >  <i class="small material-icons">location_on</i>Area de Conservacion</label>
          </div>
        </div><!--FIN DEL DIV DE LA SEGUNDA FILA -->

    <!--BOTON QUE ME ENVIA EL FORMULARIO-->
               <button class="btn waves-effect waves-light" value="enviar" type="submit" name="action">Enviar<i class="mdi-content-send right"></i></button>
               <button class="btn waves-effect waves-light" value="reset" type="reset" name="action">Limpiar<i class="mdi-content-send right"></i></button>
>>>>>>> add some changes for development
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
<<<<<<< refs/remotes/origin/master
=======

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
>>>>>>> add some changes for development
                <div style="height: 1px;">
                  <ul class="section table-of-contents">

                    <hr>
<<<<<<< refs/remotes/origin/master
                    <li><a  href="?c=ASP" >
                      <i style="color:#00b0ff" title="Página Anterior" class=" small material-icons">arrow_back</i>Página anterior</a></li>
                    <li>
                    <hr>

=======
                    <li><a  href="index.php?c=ASP" ><i style="color:#00b0ff" title="regresar" class=" small material-icons">refresh</i></a></li>
                    <hr>
                    <hr>

                  
                    <li>Puedo poner lista de items</li>
                    <li>Otro link por aqui...</li>
                    <li>Area Protegida...</li>
>>>>>>> add some changes for development

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
