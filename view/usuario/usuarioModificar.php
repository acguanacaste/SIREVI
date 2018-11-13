<?php if ($_SESSION['usuario']['puesto'] == 1 || $_SESSION['usuario']['puesto'] == 2 ):?>
<main>
  <div class="container">
    <div class="row">
      <div class="col s12 m12 l10">
<!-- Inicio de mi codigo -->
        <div id="search-docs" class="section scrollspy">
          <hr>
<!--===========================================================================================================-->
<fieldset>
  <legend><h5>Formulario para modificar información <br>
     Usuario: <?php echo $user->email; ?></h5>
   <h6>Utilice los campos habilitados para modificar información </h6></legend>
    <div class="">
      <br>
      <hr>
      <br>

        <div class="col s12 m12 l12">
          <div class="row">
            <form id="frm-usuario" action="?c=Usuario&a=Guardar" method="post" enctype="multipart/form-data">
              <input type="hidden" name="id" value="<?php echo $user->id; ?>" />


                <div class=""><!---INICIO DE LA PRIMERA FILA-->
                  <div class="input-field col s12 m4 l4  ">
                    <input  id="name" type="text" name="nombre" value="<?php echo $user->nombre; ?>" class="validate" class="form-control" data-validacion-tipo="requerido|min:10" >
                    <label  for="name" >  <i class="small material-icons">face</i><span class="hide-on-small-only">Nombre</span></label>
                  </div>

                 <!--INICIO DE COLUMNA APELLIDO-->
                <div class="input-field col s12 m4 l4  ">
                  <input  id="last_name" type="text" name="apellido" value="<?php echo $user->apellido; ?>" class="validate" class="form-control" data-validacion-tipo="requerido|min:10" >
                  <label for="last_name" >  <i class="small material-icons">recent_actors</i><span class="hide-on-small-only">Apellido</span></label>
                </div>

                <div class="input-field col s12 m4 l4">
                  <select id="estado" name="estado">
                    <option id="estado" data-value="<?php echo $user->estado;?>" disabled selected>Elija una opción</option>
                    <option value="0" <?php echo $user->estado==0?"selected":null; ?>>Activo</option>
                    <option value="1" <?php echo $user->estado==1?"selected":null; ?>>Inactivo</option>
                  </select>
                  <label for="puesto">Seleccione estado</label>
                </div>

              </div><!--FIN DEL DIV DE LA PRIMERA FILA -->

     <!--INICIO DE LA FILA 2-->
     <!--INICION DE COLUMNA DEL CEDULA-->
                   <div class=""><!--INICIO DEL DIV DE LA SEGUNDA FILA-->
                     <div class="input-field col s6 m6 l6 ">
                       <input name="cedula" value="<?php echo $user->cedula; ?>" id="disabled" type="text"  class="validate form-control" data-validacion-tipo="requerido|min:15">
                       <label for="cedula"> <i class="small material-icons">picture_in_picture</i><span class="hide-on-small-only">Cédula</span></label>
                     </div>
                   <!--INICIO DE COLUMNA CONTRASENA-->
                   <div class="input-field col s6 m6 l6  ">
                   <input  id="contrasena" type="password" name="contrasena"  value="<?php echo $user->contrasena; ?>"  class="validate form-control" data-validacion-tipo="requerido|min:10">
                   <label for="contrasena" >  <i class="small material-icons">perm_identity</i><span class="hide-on-small-only">Contraseña</span></label>
                   </div>
               </div><!--FIN DEL DIV DE LA SEGUNDA FILA-->

     <!--INICIO DE LA TERCERA FILA-->
     <!--INICIO DE LA COLUMNA PUESTO EN INSTITUCION-->
     <div class=""><!--INICIO DE TERCERA FILA-->
       <div class="input-field col s12 m11 l12" >
         <select id="puesto" name="puesto" value="<?php echo $user->puesto; ?>" required>
           <option value="" disabled selected>Elija una opción</option>
           <option value="1" <?php echo $user->puesto==1?"selected":null; ?>>Administrador</option>
           <option value="2"<?php echo $user->puesto==2?"selected":null;?>>Encargado de sector</option>
           <option value="3"<?php echo $user->puesto==3?"selected":null; ?>>Reportes</option>
           <option value="4"<?php echo $user->puesto==4?"selected":null; ?>>Voluntario</option>
         </select>
         <label for="puesto">Puesto en la Institución</label>
       </div>

 <!--INICIO DE LINEAS PARA EL CORREO-->
       <div class="">
         <div class="col s12">
           Escriba su correo electrónico correctamente:
                 <div class="row">
                   <div class="input-field">
              <input id="email" type="email" name="email" value="<?php echo $user->email; ?>" class="validate"
              class="form-control" data-validacion-tipo="requerido|email" required>
              <label for="email" data-error="wrong" data-success="right"><i class="small material-icons"> email </i></label>
            </div>
          </div>
        </div>
       </div>

       <div class=""><!--INICIO DE LA CUARTA FILA-->
       <div class="file-field input-field col s12 m12 l12">
         <div class="btn waves-effect waves-light teal darken-4 ">
           <i class="mdi-content-send material-icons right">perm_media</i>
           <span class="hide-on-small-only ">Subir Imagen</span>
           <input type="file" name="foto" id="foto">
         </div>
         <div class="file-path-wrapper">
           <input name="foto" value="<?php echo $user->foto; ?>" name="foto" id="foto" class="file-path validate" type="text">
         </div>
       </div>
   </div>

       <!--BOTON QUE ME ENVIA EL FORMULARIO-->
      <center> <button title="Enviar" class="btn waves-effect waves-light teal darken-4"
         value="enviar"  type="submit" name="action"><span class="hide-on-small-only">Enviar</span>
              <i class="mdi-content-send material-icons right">done</i>
       </button></center>

     <!--BOTON QUE ME BORRA LO QUE ESCRIBI EN EL FORMULARIO-->
             </div>
           </form>
             </div>

           </div>

</fieldset>
<br>
<div class="right hide-on-large-only">
  <a href="index.php?c=Usuario"><i style="color:#00b0ff" class="small material-icons blue-grey darken-2 z-depth-1 btn-floating pulse">arrow_back</i>&nbsp;Página anterior</a>
</div>
<!--================================================================================================================================-->
</div>
</div><!-- Div de los tamanos -->

        <div class="col l2 hide-on-med-and-down">
          <div class="toc-wrapper pin-top" style="top: -15px;">
            <div class="buysellads hide-on-small-only">
              <!-- CarbonAds Zone Code -->
              <script async="" type="text/javascript"
              src="" id="_carbonads_js"></script>

                  <div style="height: 1px;">
                    <ul class="section table-of-contents">

                      <hr>
                      <li><a  href="?c=Usuario" >
                        <i style="color:#00b0ff" title="Página Anterior" class=" small material-icons">arrow_back</i>Página anterior</a></li>
                      <li>
                        <hr>

                      </li>

                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </main>
<?php endif; ?>
  <script>
      $(document).ready(function(){
          $("#frm-usuario").submit(function(){
              return $(this).validate();
          });
      })
  </script>
