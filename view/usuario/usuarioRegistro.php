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
            <form id="frm-usuario" action="?c=Usuario&a=Guardar" method="post" enctype="multipart/form-data">
              <input type="hidden" name="id" value="" />

              <div>
                <div class="row"><!---INICIO DE LA PRIMERA FILA-->
                  <div class="input-field col s6 m5 l6  ">
                   <input  id="name" type="text" name="nombre" value="" class="validate" class="form-control" data-validacion-tipo="requerido|min:10" >
                   <label for="name" >  <i class="small material-icons">face</i>&nbsp;Nombre</label>
                   </div>

               <!--INICIO DE COLUMNA APELLIDO-->
              <div class="input-field col s6 m5 l6  ">
               <input  id="last_name" type="text" name="apellido" value="" class="validate" class="form-control" data-validacion-tipo="requerido|min:10" >
               <label for="last_name" >  <i class="small material-icons">recent_actors</i>&nbsp;Apellido</label>
               </div>
               </div><!--FIN DEL DIV DE LA PRIMERA FILA -->

   <!--INICIO DE LA FILA 2-->
   <!--INICION DE COLUMNA DEL CEDULA-->
                 <div class="row"><!--INICIO DEL DIV DE LA SEGUNDA FILA-->
                   <div class="input-field col s6 m5 l6  ">
                    <input  id="cedula" type="text" name="cedula" value="" class="validate" class="form-control" data-validacion-tipo="requerido|min:10" >
                    <label for="cedula" >  <i class="small material-icons">picture_in_picture</i>&nbsp;Cédula</label>
                    </div>

                 <!--INICIO DE COLUMNA CONTRASENA-->
                 <div class="input-field col s6 m5 l6  ">
                 <input  id="contrasena" type="text" name="contrasena" value="" class="validate" class="form-control" data-validacion-tipo="requerido|min:10">
                 <label for="contrasena" >  <i class="small material-icons">perm_identity</i>&nbsp;Contraseña</label>
                 </div>
             </div><!--FIN DEL DIV DE LA SEGUNDA FILA-->


             <!--INICIO DE LA TERCERA FILA-->
             <!--INICIO DE LA COLUMNA PUESTO EN INSTITUCION-->
             <div class="row">
               <div class="input-field col s12 m12 l12" >
                 <select name="puesto">
                   <option value="" disabled selected>Elija una opción</option>
                   <option data-value="Administrador">Administrador</option>
                   <option data-value="Encargado de sector">Encargado de sector</option>
                   <option data-value="Reportes">Reportes</option>
                 </select>
                 <label>Puesto en la Institución</label>
               </div>
             </div><!--FIN DE LA TERCERA FILA-->

           <!--INICIO DE LINEAS PARA EL CORREO-->
             <div class="row">
               <div class="col s12">
                 Escriba su correo electronico correctamente:
                       <div class="row">
                         <div class="input-field">
                    <input id="email" type="email" name="email" value="" class="validate" class="form-control" data-validacion-tipo="requerido|email">
                    <label for="email" data-error="wrong" data-success="right"><i class="small material-icons"> email </i></label>
                  </div>
                </div>
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
                  <li><a  href="index.php?c=Usuario" ><i style="color:#00b0ff" title="regresar" class=" small material-icons">refresh</i></a></li>


                  <li>
                    <hr>


                  </li>

                  <li>Puedo poner lista de items</li>
                  <li>Otro link por aqui...</li>
                  <li>Usuarios...</li>


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
          $("#frm-usuario").submit(function(){
              return $(this).validate();
          });
      })
  </script>
