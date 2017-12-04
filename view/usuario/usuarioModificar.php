<main>
  <div class="container">

    <div class="row">

      <div class="col s12 m9 l10">
<!-- Inicio de mi codigo -->
        <div id="search-docs" class="section scrollspy">
          <hr>


<!--===========================================================================================================-->

<fieldset>
  <legend><h5> Usuario: <?php echo $user->email; ?></h5>
   <h6>Utilice los campos habilitados para modificar información </h6></legend>
    <div class="container contact">
      <br>
      <hr>
      <br>
      <div class="row">
        <div class="col s14 m14 l11">
          <div class="row">
            <form id="frm-usuario" action="?c=Usuario&a=Guardar" method="post" enctype="multipart/form-data">
              <input type="hidden" name="id" value="<?php echo $user->id; ?>" />


                <div class="row"><!---INICIO DE LA PRIMERA FILA-->
                  <div class="input-field col s6 m5 l6  ">
                    <input  id="name" type="text" name="nombre" value="<?php echo $user->nombre; ?>" class="validate" class="form-control" data-validacion-tipo="requerido|min:10" >
                    <label  for="name" >  <i class="small material-icons">face</i><span class="hide-on-small-only">Nombre</span></label>
                  </div>

                 <!--INICIO DE COLUMNA APELLIDO-->
                <div class="input-field col s6 m5 l6  ">
                  <input  id="last_name" type="text" name="apellido" value="<?php echo $user->apellido; ?>" class="validate" class="form-control" data-validacion-tipo="requerido|min:10" >
                  <label for="last_name" >  <i class="small material-icons">recent_actors</i><span class="hide-on-small-only">Apellido</span></label>
                </div>
              </div><!--FIN DEL DIV DE LA PRIMERA FILA -->

     <!--INICIO DE LA FILA 2-->
     <!--INICION DE COLUMNA DEL CEDULA-->
                   <div class="row"><!--INICIO DEL DIV DE LA SEGUNDA FILA-->
                     <div class="input-field col s6 m5 l6 ">
                       <input  id="cedula" type="text" name="cedula" disabled value="<?php echo $user->cedula; ?>" value="<?php echo $user->cedula; ?>"   class="validate form-control" data-validacion-tipo="requerido|min:15">
                       <label for="cedula"> <i class="small material-icons">picture_in_picture</i><span class="hide-on-small-only">Cédula</span></label>
                     </div>
                   <!--INICIO DE COLUMNA CONTRASENA-->
                   <div class="input-field col s6 m5 l6  ">
                   <input  id="contrasena" type="password" name="contrasena"  value="<?php echo $user->contrasena; ?>"  class="validate form-control" data-validacion-tipo="requerido|min:10">
                   <label for="contrasena" >  <i class="small material-icons">perm_identity</i><span class="hide-on-small-only">Contraseña</span></label>
                   </div>
               </div><!--FIN DEL DIV DE LA SEGUNDA FILA-->

     <!--INICIO DE LA TERCERA FILA-->
     <!--INICIO DE LA COLUMNA PUESTO EN INSTITUCION-->
     <div class="row"><!--INICIO DE TERCERA FILA-->
       <div class="input-field col s12 m10 l12" >
         <select id="puesto" name="puesto" data-value="<?php echo $user->puesto; ?>" required>
           <option value="" disabled selected>Elija una opción</option>
           <option value="Administrador" <?php echo $user->puesto=="Administrador"?"selected":null; ?>>Administrador</option>
           <option value="Encargado de sector"<?php echo $user->puesto=="Encargado de sector"?"selected":null;?>>Encargado de sector</option>
           <option value="Reportes"<?php echo $user->puesto=="Reportes"?"selected":null; ?>>Reportes</option>
         </select>
         <label for="puesto">Puesto en la Institución</label>
       </div>

 <!--INICIO DE LINEAS PARA EL CORREO-->
       <div class="row">
         <div class="col s12">
           Escriba su correo electrónico correctamente:
                 <div class="row">
                   <div class="input-field">
              <input id="email" type="email" name="email" value="<?php echo $user->email; ?>" class="validate"
              class="form-control" data-validacion-tipo="requerido|email">
              <label for="email" data-error="wrong" data-success="right"><i class="small material-icons"> email </i></label>
            </div>
          </div>
        </div>
       </div>

<!--
       <div class="row"><!--INICIO DEL DIV PARA LA IMAGEN--
         <div class="file-field input-field">
           <div class="btn waves-effect waves-light teal darken-4" title="Subir imagenes">
             <i class="mdi-content-send material-icons right">perm_media</i>
             <span class="hide-on-small-only ">Subir Imagen</span>
             <input type="file" name="foto" id="foto">
           </div>
           <div class="file-path-wrapper">
             <input id="foto" name="foto" value="echo'<img src="'.$r->foto.'" width="100" heigth="100">';"
              value="<?php echo'<img src="'.$r->foto.'" width="100" heigth="100">'; ?>" class="file-path validate validate" type="text">
           </div>
         </div>
      </div>
-->





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

        <div class="col m3 l2 hide-on-small-only">
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
                      <li><a  href="index.php?c=Usuario" >
                        <i style="color:#00b0ff" title="Página Anterior" class=" small material-icons">refresh</i></a></li>
                      <li>
                        <hr>
                        <div class="right">
                          <a style="color:#00b0ff" href="index.php?c=Usuario&a=agregarRegistro">
                             <i style="color:#00b0ff" class="small material-icons">playlist_add</i>Nuevo Usuario</a>
                          <hr>
                        </div>
                        <hr>
                      </li>

                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </main>

  <script>
      $(document).ready(function(){
          $("#frm-usuario").submit(function(){
              return $(this).validate();
          });
      })
  </script>
