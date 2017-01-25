
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
            <form id="frm-asp" action="?c=ASP&a=Guardar" method="post" enctype="multipart/form-data">
              <input type="hidden" name="id" value="" />
              <div>
                <div class="row"><!---INICIO DE LA PRIMERA FILA-->
                  <div class="input-field col s6 m5 l6  ">
                    <input  id="name" type="text" name="nombre" value="" class="validate" class="form-control" data-validacion-tipo="requerido|min:10" >
                    <label for="name" ><i class="small material-icons">turned_in_not</i>Area Silvestre</label>
                  </div>

                 <!--INICIO DE COLUMNA APELLIDO-->
                 <div class="input-field col s6 m5 l6  ">
                   <input  id="last_name" type="text" name="tipo" value="" class="validate" class="form-control" data-validacion-tipo="requerido|min:10" >
                   <label for="last_name" >  <i class="small material-icons">receipt</i>Tipo ASP</label>
                 </div>
               </div><!--FIN DEL DIV DE LA PRIMERA FILA -->


        <div class="row"><!---INICIO DE LA SEGUNDA FILA-->
          <div class="input-field col s12 m5 l12  "><!--Lineas para la descripcion de area de conservacion a la que pertenece el area silvestre--->
            <input  id="last_name" type="text" name="area_conservacion" value="" class="validate" class="form-control" data-validacion-tipo="requerido|min:10" >
            <label for="last_name" >  <i class="small material-icons">location_on</i>Area de Conservacion</label>
          </div>
        </div><!--FIN DEL DIV DE LA SEGUNDA FILA -->

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
                    <li><a  href="index.php?c=ASP" ><i style="color:#00b0ff" title="regresar" class=" small material-icons">refresh</i></a></li>
                    <hr>
                    <hr>

                  
                    <li>Puedo poner lista de items</li>
                    <li>Otro link por aqui...</li>
                    <li>Area Protegida...</li>

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
