<main>
  <div class="container">
    <div class="row">
<<<<<<< refs/remotes/origin/master

      <div class="col s12 m10 l10">
=======
      <div class="col s12 m9 l10">
>>>>>>> add some changes for development
<!-- Inicio de mi codigo -->
        <div id="search-docs" class="section scrollspy">
          <hr>

<<<<<<< refs/remotes/origin/master

<!--===========================================================================================================-->

<fieldset>
  <legend><h5>Formulario para modificar información <br>
     Sector: <?php echo $sector->nombre; ?></h5>
   <h6>Utilice los campos habilitados para modificar información</h6></legend>
    <div class="">
      <br>
      <hr>
      <br>
      <div class="">
        <div class="col s12 m12 l12">
          <div class="">
            <form id="frm-sector" action="?c=Sector&a=Guardar" method="post" enctype="multipart/form-data">
              <input type="hidden" name="id" value="<?php echo $sector->id; ?>" />

                <div class=""><!---INICIO DE LA PRIMERA FILA-->
                  <div class="input-field col s12 m12 l12  ">
                    <input  id="name" type="text" name="nombre" value="<?php echo $sector->nombre; ?>" class="validate" class="form-control" data-validacion-tipo="requerido|min:10" >
                    <label for="name" >  <i class="small material-icons">view_quilt</i>Nombre sector</label>
=======
<!--===========================================================================================================-->

<fieldset>
  <legend><h5>Formulario para Registros</h5>
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
>>>>>>> add some changes for development
                  </div>
                  </div><!--FIN DEL DIV DE LA PRIMERA FILA -->

                 <!--INICIO DE COLUMNA APELLIDO-->
<<<<<<< refs/remotes/origin/master
                 <div class="">
                <div class="input-field col s6 m5 l6  ">
                  <input  id="capacidad_diaria" type="text" name="capacidad_diaria" value="<?php echo $sector->capacidad_diaria; ?>" class="validate" class="form-control" data-validacion-tipo="requerido|min:10" >
                  <label for="capacidad_diaria" >  <i class="small material-icons">supervisor_account</i>Capaciddad Diaria</label>
                </div>
         <!--INICIO DE LA FILA 2-->
     <!--INICION DE COLUMNA DEL CEDULA-->

                     <div class="input-field col s6 m5 l6 ">
                       <input  id="capacidad_acampar" type="text" name="capacidad_acampar"  value="<?php echo $sector->capacidad_acampar; ?>" value="<?php echo $sector->capacidad_acampar; ?>" class="form-control"  class="validate" data-validacion-tipo="requerido|min:15">
                       <label for="capacidad_acampar"> <i class="small material-icons">work</i>Capacidad Campistas</label>
                     </div>
                   </div>

                   <!--INICIO DE COLUMNA -->
                   <div class="">
                     <div class="input-field col s12 m10 l12 ">
                       <input  id="asp" type="text" name="asp" value="<?php echo $sector->asp; ?>"   class="validate form-control" data-validacion-tipo="requerido|min:15">
                       <label for="asp"> <i class="small material-icons">location_on</i><span class="hide-on-small-only">Área Silvestre Protegida</span></label>
                     </div>
               </div><!--FIN DEL DIV DE FILA-->

<!--///////////////////////////////////////////////////////////////////////////////////////////////-
<div class="input-field col s12 m10 l12" >
  <select id="asp" type="text" name="asp" value="<php echo $sector->asp; ?>" required>
    <option value=""  disabled selected>Elija una opción</option>
    <option value="1" <php echo $sector->asp==1?"selected":null; ?>>Santa Rosa</option>
    <option value="2"<php echo $sector->asp==2?"selected":null;?>>Pailas</option>
    <option value="3"<php echo $sector->asp==3?"selected":null; ?>>Junquillal</option>
    <option value="4"<php echo $sector->asp==4?"selected":null; ?>>Otro sector</option>
  </select>
  <label for="puesto">Área Silvestre Protegida</label>
</div>
<!--////////////////////////////////////////////////////////////////////////////////////////////////-->


=======
                 <div>
                <div class="input-field col s6 m6 l6  ">
                  <input  id="capacidad_diaria" type="text" name="capacidad_diaria" value="<?php echo $sector->capacidad_diaria; ?>" class="validate" class="form-control" data-validacion-tipo="requerido|min:10" >
                  <label for="capacidad_diaria" >  <i class="small material-icons"></i>Capaciddad Diaria</label>
                </div>
              </div>
>>>>>>> add some changes for development




<<<<<<< refs/remotes/origin/master
               <div class="">
                 <fieldset>
                   <legend>Tarifas de admisión por el día</legend>
                   <div class=""><!--- Inicio de linea para las tarifas --->
                     <div class="input-field col s12 m12 l12">
                       <fieldset class="z-depth-2">
                         <legend>Nacionales</legend>
                         <div class="input-field col s6 m6 l4 ">
                           <input  id="adulto_nacional" type="number" name="adulto_nacional" value="<?php echo $sector->adulto_nacional; ?>" class="validate" class="form-control" data-validacion-tipo="requerido|min:10" required>
                           <label for="adulto_nacional" >  <i class="small material-icons"></i>Adultos</label>
                         </div>

                         <div class="input-field col s6 m6 l4">
                           <input  id="nino_nacional" type="number" name="nino_nacional" value="<?php echo $sector->nino_nacional; ?>" class="validate" class="form-control" data-validacion-tipo="requerido|min:10" required>
                           <label for="nino_nacional" >  <i class="small material-icons"></i>Niños</label>
                         </div>

                         <div class="input-field col s6 m6 l4">
                           <input  id="estudiantes" type="number" name="estudiantes" value="<?php echo $sector->estudiantes; ?>" class="validate" class="form-control" data-validacion-tipo="requerido|min:10" required>
                           <label for="estudiantes" >  <i class="small material-icons"></i>Estudiantes</label>
                         </div>
                       </fieldset>
                     </div>


                   <div class="input-field col s12 m12 l12">
                     <fieldset class="z-depth-2">
                       <legend>Extranjeros</legend>
                       <div class="input-field col s6 m6 l6  ">
                         <input  id="adulto_extranjero" type="number" name="adulto_extranjero" value="<?php echo $sector->adulto_extranjero; ?>" class="validate" class="form-control" data-validacion-tipo="requerido|min:10" required>
                         <label for="adulto_extranjero" >  <i class="small material-icons"></i>Adultos</label>
                       </div>

                       <div class="input-field col s6 m6 l6  ">
                         <input  id="nino_extranjero" type="number" name="nino_extranjero" value="<?php echo $sector->nino_extranjero; ?>" class="validate" class="form-control" data-validacion-tipo="requerido|min:10" required>
                         <label for="nino_extranjero" >  <i class="small material-icons"></i>Niños</label>
                       </div>
                     </fieldset>
                   </div>
                 </div><!--Fin de lineas para las tarifas -->
                 </fieldset>
               </div>

               <div class="">
                 <fieldset>
                   <legend>Tarifas derecho de acampar</legend>
                   <div class=""><!--- Inicio de linea para las tarifas --->
                     <div class="input-field col s12 m12 l12">
                       <fieldset class="z-depth-2">
                         <legend>Nacionales</legend>
                         <div class="input-field col s6 m6 l4 ">
                           <input  id="camping_adulto_nacional" type="number" name="camping_adulto_nacional" value="<?php echo $sector->camping_adulto_nacional;  ?>" class="validate" class="form-control" data-validacion-tipo="requerido|min:10" required>
                           <label for="camping_adulto_nacional" >  <i class="small material-icons"></i>Adultos</label>
                         </div>

                         <div class="input-field col s6 m6 l4">
                           <input  id="camping_nino_nacional" type="number" name="camping_nino_nacional" value="<?php echo $sector->camping_nino_nacional; ?>" class="validate" class="form-control" data-validacion-tipo="requerido|min:10" required>
                           <label for="camping_nino_nacional" >  <i class="small material-icons"></i>Niños</label>
                         </div>

                         <div class="input-field col s6 m6 l4">
                           <input  id="camping_estudiantes" type="number" name="camping_estudiantes" value="<?php echo $sector->camping_estudiantes; ?>" class="validate" class="form-control" data-validacion-tipo="requerido|min:10" required>
                           <label for="camping_estudiantes" >  <i class="small material-icons"></i>Estudiantes</label>
                         </div>
                       </fieldset>
                     </div>


                   <div class="input-field col s12 m12 l12">
                     <fieldset class="z-depth-2">
                       <legend>Extranjeros</legend>
                       <div class="input-field col s6 m6 l6 ">
                         <input  id="camping_adulto_extranjero" type="number" name="camping_adulto_extranjero" value="<?php echo $sector->camping_adulto_extranjero; ?>" class="validate" class="form-control" data-validacion-tipo="requerido|min:10" required>
                         <label for="camping_nino_extrajero" >  <i class="small material-icons"></i>Adultos</label>
                       </div>

                       <div class="input-field col s6 m6 l6 ">
                         <input  id="camping_nino_extrajero" type="number" name="camping_nino_extranjero" value=<?php echo $sector->camping_nino_extranjero; ?> class="validate" class="form-control" data-validacion-tipo="requerido|min:10" required>
                         <label for="camping_nino_extranjero" >  <i class="small material-icons"></i>Niños</label>
                       </div>
                     </fieldset>
                   </div>
                 </div><!--Fin de lineas para las tarifas -->
                 </fieldset>
               </div>


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

=======
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
               <button class="btn waves-effect waves-light" value="enviar" type="submit" name="action">Enviar<i class="mdi-content-send right"></i></button>
               <button class="btn waves-effect waves-light" value="reset" type="reset" name="action">Limpiar<i class="mdi-content-send right"></i></button>
             </div>
           </form>
             </div>

           </div>
         </div>
</fieldset>
<hr>
>>>>>>> add some changes for development

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

                    <li><a  href="?c=Sector" >
                      <i style="color:#00b0ff" title="Página Anterior" class=" small material-icons">arrow_back</i>Página anterior</a></li>
                    <li>
                    <hr>

=======
                    <li><a  href="index.php?c=Sector" ><i style="color:#00b0ff" title="regresar" class=" small material-icons">refresh</i></a></li>
                    <hr>
                    <hr>

                    <div class="">

                      <a style="color:#00b0ff" href="index.php?c=Sector&a=agregarRegistro"> <i style="color:#00b0ff" class="small material-icons">playlist_add</i>Agregar Sector</a>

                      <hr>
                    </div>
                    <li>Puedo poner lista de items</li>
                    <li>Otro link por aqui...</li>
                    <li>Sectores...</li>

>>>>>>> add some changes for development
                  </ul>
                </div>
              </div>
            </div>
          </div>
            </div>
          </div>
        </main>
<<<<<<< refs/remotes/origin/master
  </body>
  <script>
      $(document).ready(function(){
          $("#frm-pais").submit(function(){
=======

  <script>
      $(document).ready(function(){
          $("#frm-sector").submit(function(){
>>>>>>> add some changes for development
              return $(this).validate();
          });
      })
  </script>
