<main>
  <div class="container">
    <div class="row">

      <div class="col s12 m12 l10">
        <!-- Inicio de mi codigo -->
        <div id="search-docs" class="section scrollspy">
          <hr>
<!--===========================================================================================================-->


<fieldset>
  <legend><h5>Formulario para modificar información</h5>
    <h6>Modifique los datos que necesite en los campos habilitados</h6></legend>
    <div class="">
      <hr>
      <br>
      <div class="">
        <div class="col col s12 m12 l12">
          <div class="">
            <form id="frm-asp" action="?c=Sendero&a=Guardar" method="post" enctype="multipart/form-data">
              <input type="hidden" name="id" value="<?php echo $sendero->id; ?>" />


                <div class=""><!---Inicio de la primera fila columnA1-->
                  <div class="input-field col s12 m4 l4  "><!--Lineas para la descripcion de area de conservacion a la que pertenece el area silvestre--->
                    <input  type="text" name="nombre" value="<?php echo $sendero->nombre; ?>" class="validate" class="form-control"  required >
                    <label for="nombre" >  <i class="small material-icons">swap_calls</i><span class="hide-on-small-only">Nombre del Sendero</label>
                  </div>

              <!--Inicio de la columna2-->
                  <div class="input-field col s12 m4 l4  ">
                    <input  id="caracterizacion_sendero" type="text" name="caracterizacion_sendero" value="<?php echo $sendero->caracterizacion_sendero; ?>" class="validate"  required >
                    <label for="caracterizacion_sendero" >  <i class="small material-icons">art_track</i>Caracteristicas</label>
                  </div>

                <!--Inicio de la columna3-->
                <div class="input-field col s12 m4 l4  ">
                  <input  id="" type="text" name="tipo_sendero" value="<?php echo $sendero->tipo_sendero; ?>" class="validate" class="form-control"  required >
                  <label for="tipo_sendero" >  <i class="small material-icons">nature_people</i>Tipo Sendero</label>
                </div>
              </div>

              <div class=""><!---INICIO DE LA SEGUNDA FILA-->
                <div class="input-field col s12 m8 l8  "><!----->
                  <input  id="" type="text" name="atractivo" value="<?php echo $sendero->atractivo; ?>" class="validate" class="form-control"  required >
                  <label for="atractivo" >  <i class="small material-icons">assignment_late</i><span class="hide-on-small-only">Atractivos del sendero</label>
                </div>

                <div class="input-field col s12 m4 l4" >
                  <select id="sector" name="sector" value="<?php echo $sendero->sector; ?>" required>
                    <option value="" disabled selected>Elija una opción</option>
                    <option value="1"<?php echo $sendero->sector==1?"selected":null; ?>>Santa Rosa</option>
                    <option value="2"<?php echo $sendero->sector==2?"selected":null; ?>>Pailas</option>
                    <option value="3"<?php echo $sendero->sector==3?"selected":null; ?>>Junquillal</option>
                    <option value="4"<?php echo $sendero->sector==4?"selected":null; ?>>Murcielago</option>
                    <option value="5"<?php echo $sendero->sector==5?"selected":null; ?>>Santa Maria</option>
                    <option value="6"<?php echo $sendero->sector==6?"selected":null; ?>>Horizontez</option>
                    <option value="7"<?php echo $sendero->sector==7?"selected":null; ?>>Marino</option>
                  </select>
                  <label for="sector">Sector al que pertenece</label>
                </div>
            </div>


            <!---Inicio de la tercera fila *columna1-->
              <div class="">
                <div class="input-field col s12 m4 l4  ">
                  <input  id="distancia" type="text" name="distancia" value="<?php echo $sendero->distancia; ?>" class="validate" class="form-control" required >
                  <label for="distancia" >  <i class="small material-icons">transfer_within_a_station</i>Distancia ida y vuelta</label>
             </div>

             <!--Columna2 fila3-->
             <div class="input-field col s12 m4 l4  ">
               <input  id="tiempo_recorrido" type="text" name="tiempo_recorrido" value="<?php echo $sendero->tiempo_recorrido; ?>" class="validate" class="form-control" data-validacion-tipo="requerido|min:10" required >
               <label for="tiempo_recorrido" >  <i class="small material-icons">timer</i>Tiempo de recorrido</label>
              </div>

               <!--Columna3 fila3-->
               <div class="input-field col s12 m4 l4  ">
                 <input  id="" type="text" name="punto_alto" value="<?php echo $sendero->punto_alto; ?>" class="validate" class="form-control" data-validacion-tipo="requerido|min:10" >
                 <label for="punto_alto" >  <i class="small material-icons">wallpaper</i>Punto mas alto</label>
                </div>
              </div><!--Fin de la segunda fila -->

          <!---Inicio de la cuarta fila-->
              <div class="">
                <div class="input-field col s6 m6 l6  ">
                  <input  id="punto_inicio" type="text" value="<?php echo $sendero->punto_inicio; ?>" name="punto_inicio"  class="form-control validate" data-validacion-tipo="requerido|min:10" >
                  <label for="punto_inicio" >  <i class="small material-icons">directions_walk</i>Punto inicio</label>
             </div>
             <div class="input-field col s6 m6 l6  ">
               <input  id="punto_llegada" type="text" name="punto_llegada" value="<?php echo $sendero->punto_llegada; ?>" class="validate" class="form-control" data-validacion-tipo="requerido|min:10" required >
               <label for="punto_llegada" >  <i class="small material-icons">directions_walk</i>Punto llegada</label>
              </div>
            </div>
      <!--Fin de la cuarta fila -->

      <!--Inicio de la quinta fila-->
      <div class="">
      <!--columna-->
      <div class="input-field col s12 m12 l12  ">
      <input  id="descripcion" type="text" name="descripcion" value="<?php echo $sendero->descripcion; ?>" class="validate" class="form-control" data-validacion-tipo="requerido|min:10" required >
      <label for="descripcion" >  <i class="small material-icons">info_outline</i>Descripción del sendero</label>
      </div>
      </div><!--Fin de la quinta fila -->

      <!--Inicio de la quinta fila-->
      <div class="">
      <!--columna-->
      <div class="input-field col s12 m12 l12  ">
      <input  id="regulaciones" type="text" name="regulaciones" value="<?php echo $sendero->regulaciones; ?>" class="validate" class="form-control" data-validacion-tipo="requerido|min:10" required >
      <label for="regulaciones" >  <i class="small material-icons">report_problem</i>Regulaciones</label>
      </div>
      </div><!--Fin de la quinta fila -->

      </div>

              <!--BOTON QUE ME ENVIA EL FORMULARIO-->
            <center>
              <button title="Enviar" class="btn waves-effect waves-light teal darken-4"
                value="enviar"  type="submit" name="action"><span class="hide-on-small-only">Enviar</span>
                     <i class="mdi-content-send material-icons right">done</i>
              </button>
            </center>
					 </div>
         </form>
           </div>

         </div>
       </div>
</fieldset>
<div class="right hide-on-large-only">
  <a href="index.php?c=Sendero"><i style="color:#00b0ff" class="small material-icons blue-grey darken-2 z-depth-1 btn-floating pulse">arrow_back</i>&nbsp;Página anterior</a>
</div>

<!--================================================================================================================================-->

</div><!-- Div de los tamanos -->


      <div class="hide-on-med-and-down input-field col l2">
        <div class="toc-wrapper pin-top" style="top: -15px;">
          <div class="buysellads hide-on-small-only">
            <!-- CarbonAds Zone Code -->
            <script async="" type="text/javascript"
            src="" id="_carbonads_js"></script>


                <div style="height: 1px;">
                  <ul class="section table-of-contents">
                    <hr>
                    <li><a  href="?c=Sendero" >
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

  <script>
      $(document).ready(function(){
          $("#frm-sendero").submit(function(){
              return $(this).validate();
          });
      })
  </script>
