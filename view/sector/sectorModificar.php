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
                  </div>
                  </div><!--FIN DEL DIV DE LA PRIMERA FILA -->

                 <!--INICIO DE COLUMNA APELLIDO-->
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

               <div class="">
                 <fieldset>
                   <legend>Tarifas de admisión por el día</legend>
                   <div class=""><!--- Inicio de linea para las tarifas --->
                     <div class="input-field col s12 m12 l12">
                       <fieldset class="z-depth-2">
                         <legend>Nacionales</legend>
                         <div class="input-field col s6 m4 l3 ">
                           <input  id="adulto_nacional" type="number" name="adulto_nacional" value="<?php echo $sector->adulto_nacional; ?>" class="validate" class="form-control" data-validacion-tipo="requerido|min:10" required>
                           <label for="adulto_nacional" >  <i class="small material-icons"></i>Adultos</label>
                         </div>

                         <div class="input-field col s6 m4 l3">
                           <input  id="nino_nacional" type="number" name="nino_nacional" value="<?php echo $sector->nino_nacional; ?>" class="validate" class="form-control" data-validacion-tipo="requerido|min:10" required>
                           <label for="nino_nacional" >  <i class="small material-icons"></i>Niños</label>
                         </div>

                         <div class="input-field col s6 m4 l3">
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
               <div class="input-field col s12 m12 l12">
                <fieldset class="z-depth-2 input-field col s6 m5 l5">
                <legend>Tarifa acampar</legend>
                 <div class="">
                   <input  id="" type="number" name="tarifa_camping" value="<?php echo $sector->tarifa_camping; ?>" class="validate" class="form-control" data-validacion-tipo="requerido|min:10" required>
                 </div>
               </fieldset>

              <div class="input-field col s1 m1 l1"></div>
                <fieldset class="z-depth-2 input-field col s6 m5 l5">
                  <legend>Cambio dolar</legend>
                 <div class="">
                   <input  id="" type="number" name="cambio_dolar" value="<?php echo $sector->cambio_dolar; ?>" class="validate" class="form-control" data-validacion-tipo="requerido|min:10" required>

                 </div>
               </fieldset>
               </div>
              </fieldset>
             </div>

               <!--BOTON QUE ME ENVIA EL FORMULARIO-->
<br>
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
<br>
<div class="hide-on-large-only">
  <a href="index.php?c=Sector"><i style="color:#00b0ff" class="small material-icons blue-grey darken-2 z-depth-1 btn-floating pulse">arrow_back</i>&nbsp;Página anterior</a>
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
                    <li><a  href="?c=Sector" >
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
          $("#frm-pais").submit(function(){
              return $(this).validate();
          });
      })
  </script>
