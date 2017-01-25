
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
            <form id="frm-asp" action="?c=Sector&a=Guardar" method="post" enctype="multipart/form-data">
              <input type="hidden" name="id" value="" />

              <div>

                <div class="row"><!---INICIO DE LA SEGUNDA FILA-->
                  <div class="input-field col s6 m5 l12  "><!--Lineas para la descripcion de area de conservacion a la que pertenece el area silvestre--->
                    <input  id="" type="text" name="capacidad_acampar" value="" class="validate" class="form-control" data-validacion-tipo="requerido|min:10" >
                    <label for="last_name" >  <i class="small material-icons">perm_media</i>Nombre del Sendero</label>
                  </div>
                </div><!--FIN DEL DIV DE LA SEGUNDA FILA -->



                <div class="row"><!---INICIO DE LA PRIMERA FILA-->
                  <div class="input-field col s6 m5 l6  ">
                    <input  id="sector" type="text" name="nombre" value="" class="validate" class="form-control" data-validacion-tipo="requerido|min:10" >
                    <label for="sector" >  <i class="small material-icons">supervisor_account</i> Capacidad acampar</label>
                  </div>


               <!--INICIO DE COLUMNA CODIGO-->
               <div class="input-field col s6 m5 l6  ">
                 <input  id="last_name" type="text" name="capacidad_diaria" value="" class="validate" class="form-control" data-validacion-tipo="requerido|min:10" >
                 <label for="last_name" >  <i class="small material-icons">supervisor_account</i>Capacidad diaria</label>
                </div>
              </div><!--FIN DEL DIV DE LA PRIMERA FILA -->

              <div class="">
                <div class="input-field col s12 m12 l12">
                 <select>
                   <option value="" disabled selected>Elija una opcion</option>
                   <option value="1">Opcion 1</option>
                   <option value="2">Opcion 2</option>
                   <option value="3">Opcion 3</option>
                 </select>
                 <label>Selecione Area Silvestre</label>
               </div>
              </div>



  <!--BOTON QUE ME ENVIA EL FORMULARIO-->
             <button class="btn waves-effect waves-light" value="enviar" type="submit" name="action">Enviar<i class="mdi-content-send right"></i></button>
             <button class="btn waves-effect waves-light" value="reset" type="reset" name="action">Limpiar<i class="mdi-content-send right"></i></button>

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
                  

                    <li>Puedo poner lista de items</li>
                    <li>Otro link por aqui...</li>
                    <li>Sendero...</li>

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
