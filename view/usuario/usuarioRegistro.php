<?php if ($_SESSION['usuario']['puesto'] == 1 || $_SESSION['usuario']['puesto'] == 2 ):?>
<main>
  <div class="container">
    <div class="row">
      <div class="col s12 m10 l10">
<!-- Inicio de mi codigo -->
        <div id="search-docs" class="section scrollspy">
          <hr>
<!--===========================================================================================================-->
<fieldset>
  <legend><h5>Modulo Usuarios</h5>
   <h6>Utilice los campos habilitados para completar información </h6></legend>
    <div class=" contact">
      <br>
      <hr>
      <br>
      <div class="row">
        <div class="col s12 m12 l11">
          <div class="row">
            <form id="frm-usuario" action="?c=Usuario&a=Guardar" method="post" enctype="multipart/form-data">
              <input type="hidden" name="id" value="" />


                <div class=""><!---INICIO DE LA PRIMERA FILA-->
                  <div class="input-field col s12 m4 l4  ">
                    <input  id="name" type="text" name="nombre" value="" class="validate" class="form-control" data-validacion-tipo="requerido|min:10"  required>
                    <label  for="name" >  <i class="small material-icons">face</i><span class="hide-on-small-only">Nombre</span></label>
                  </div>

                 <!--INICIO DE COLUMNA APELLIDO-->
                <div class="input-field col s12 m4 l4  ">
                  <input  id="last_name" type="text" name="apellido" value="" class="validate" class="form-control" data-validacion-tipo="requerido|min:10"  required>
                  <label for="last_name" >  <i class="small material-icons">recent_actors</i><span class="hide-on-small-only">Apellido</span></label>
                </div>

                <div class="input-field col s12 m4 l4">
                  <select id="estado" name="estado">
                    <option id="estado" value="" disabled selected>Elija una opción</option>
                    <option value="0">Activo</option>
                    <option value="1">Inactivo</option>
                  </select>
                  <label for="estado">Seleccione estado</label>
                </div>
              </div><!--FIN DEL DIV DE LA PRIMERA FILA -->

     <!--INICIO DE LA FILA 2-->
     <!--INICION DE COLUMNA DEL CEDULA-->
                   <div class=""><!--INICIO DEL DIV DE LA SEGUNDA FILA-->
                     <div class="input-field col s6 m6 l6 ">
                       <input  id="cedula" type="text" name="cedula" value=""   class="validate form-control" data-validacion-tipo="requerido|min:15"  required>
                       <label for="cedula"> <i class="small material-icons">picture_in_picture</i><span class="hide-on-small-only">Cédula</span></label>
                     </div>

                   <!--INICIO DE COLUMNA CONTRASENA-->
                   <div class="input-field col s6 m6 l6  ">
                   <input  id="contrasena" type="password" name="contrasena"  value=""  class="validate form-control" data-validacion-tipo="requerido|min:10"  required>
                   <label for="contrasena" >  <i class="small material-icons">vpn_key</i><span class="hide-on-small-only">Contraseña</span></label>
                   </div>
               </div><!--FIN DEL DIV DE LA SEGUNDA FILA-->

<!--=========================Block DIV temporal ===========================================-->
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
<!--
               <php
               $conexion = mysqli_connect("localhost","root","","sirevi");
               $query_puesto = mysqli_query($conexion, "select * from puestos_institucion order by nombre ASC");
               ?>
    <!--======================Inicio del codigo para el select y final de codigo PHP ====================--

         <div class="">
            <div class="input-field col s12 m12 l12">
             <select  id="puesto" name="puesto">
               <option id="puesto" value="" disabled selected>Elija una opcion</option>
               <php while ($arreglo = mysqli_fetch_array($query_puesto)) {  ?>
               <option value="<php echo $arreglo['id']?>" ><php echo $arreglo['nombre_puesto'] ?></option>
               <php } ?>

             </select>
             <label for="puesto">Seleccione puesto en institución</label>
           </div>
          </div> -->

 <!--INICIO DE LINEAS PARA EL CORREO-->
       <div class="">
         <div class="col s12 m12 l12">
           Escriba su correo electrónico correctamente:
                 <div class="">
                   <div class="input-field">
              <input id="email" type="email" name="email" value="<?php echo $user->email; ?>"
              class="validate" class="form-control" data-validacion-tipo="requerido|email" required>
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
           <input name="foto" name="foto" id="foto" class="file-path validate" type="text">
         </div>
       </div>
   </div>

       <!--BOTON QUE ME ENVIA EL FORMULARIO-->
<br>
<center>
       <button title="Enviar" class="btn waves-effect waves-light teal darken-4"
         value="enviar"  type="submit" name="action"><span class="hide-on-small-only">Enviar</span>
              <i class="mdi-content-send material-icons right">done</i>
       </button>

     <!--BOTON QUE ME BORRA LO QUE ESCRIBI EN EL FORMULARIO-->
     <button title="Limpiar Pantalla" class="btn waves-effect waves-light teal darken-4"
       value="reset"  type="reset" name="action"><span class="hide-on-small-only">Limpiar</span>
            <i class="mdi-content-send material-icons right">delete</i>
     </button>
</center>

             </div>
           </form>
             </div>

           </div>
         </div>
</fieldset>

<br>
<div class="right hide-on-large-only">
  <a href="index.php?c=Usuario"><i style="color:#00b0ff" class="small material-icons blue-grey darken-2  btn-floating pulse">arrow_back</i>&nbsp;Página anterior</a>
</div>
<!--================================================================================================================================-->
        </div>
      </div><!-- Div de los tamanos -->

        <div class="input-field col m2 l2 hide-on-med-and-down">
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
                      <li><a  href="?c=Usuario" >
                        <i style="color:#00b0ff" title="Página Anterior" class=" small material-icons">arrow_back</i>Página anterior</a></li>
                      <li>
                  <hr>
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
