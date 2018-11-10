
<main>
  <div class="container">
    <div class="row">


      <div class="col s12 m12 l10">
        <!-- Inicio de mi codigo -->
        <div id="search-docs" class="section scrollspy">
          <hr>
<!--===========================================================================================================-->


<fieldset>
  <legend><h5>Formulario para Registros</h5>
    <h6>Completar la informacion con los datos correspondientes</h6></legend>
    <div class="">
      <hr>
      <br>
      <div class="">
        <div class="col col s12 m12 l12">
          <div class="">
            <form id="frm-asp" action="?c=Sendero&a=Guardar" method="post" enctype="multipart/form-data">
              <input type="hidden" name="id" value="" />


                <div class=""><!---Inicio de la primera fila columnA1-->
                  <div class="input-field col s12 m4 l4  "><!--Lineas para la descripcion de area de conservacion a la que pertenece el area silvestre--->
                    <input  id="nombre" type="text" name="nombre" value="" class="validate" class="form-control"  required >
                    <label for="nombre" >  <i class="small material-icons">swap_calls</i><span class="hide-on-small-only">Nombre del Sendero</label>
                  </div>

              <!--Inicio de la columna2-->
                  <div class="input-field col s12 m4 l4  ">
                    <input  id="caracterizacion_sendero" type="text" name="caracterizacion_sendero" value="" class="validate"  required >
                    <label for="caracterizacion_sendero" >  <i class="small material-icons">art_track</i>Caracteristicas</label>
                  </div>

                <!--Inicio de la columna3-->
                <div class="input-field col s12 m4 l4  ">
                  <input  id="" type="text" name="tipo_sendero" value="<?php echo $sendero->distancia; ?>" class="validate" class="form-control"  required >
                  <label for="tipo_sendero" >  <i class="small material-icons">nature_people</i>Tipo Sendero</label>
                </div>
              </div>

              <div class=""><!---INICIO DE LA SEGUNDA FILA-->
                <div class="input-field col s12 m8 l8  "><!----->
                  <input  id="" type="text" name="atractivo" value="" class="validate" class="form-control"  required >
                  <label for="atractivo" >  <i class="small material-icons">assignment_late</i><span class="hide-on-small-only">Atractivos del sendero</label>
                </div>

                <div class="row">
                   <div class="input-field col s12 m4 l4">
                    <select name="sector">
                     <option value="" disabled selected>Elija una opcion</option>
                      <?php while ($arreglo = mysqli_fetch_array($query_sector)) {  ?>
                      <option value="<?php echo $arreglo['id']?>"><?php echo $arreglo['nombre'] ?></option>
                      <?php } ?>
                    </select>

                    <label><i class="small material-icons">view_quilt</i>Sector al que Pertenece</label>
                  </div>
                 </div>
            </div>

            <!---Inicio de la tercera fila *columna1-->
              <div class="">
                <div class="input-field col s12 m4 l4  ">
                  <input  id="distancia" type="text" name="distancia" value="" class="validate" class="form-control" required >
                <label for="distancia" >  <i class="small material-icons">transfer_within_a_station</i>Distancia ida y vuelta</label>
             </div>

             <!--Columna2 fila3-->
             <div class="input-field col s12 m4 l4  ">
               <input  id="tiempo_recorrido" type="text" name="tiempo_recorrido" value="" class="validate" class="form-control" data-validacion-tipo="requerido|min:10" required >
               <label for="tiempo_recorrido" >  <i class="small material-icons">timer</i>Tiempo de recorrido</label>
              </div>

               <!--Columna3 fila3-->
               <div class="input-field col s12 m4 l4  ">
                 <input  id="" type="text" name="punto_alto" value="" class="validate" class="form-control" data-validacion-tipo="requerido|min:10" >
                 <label for="punto_alto" >  <i class="small material-icons">wallpaper</i>Punto mas alto</label>
                </div>
              </div><!--Fin de la segunda fila -->

          <!---Inicio de la cuarta fila-->
              <div class="">
                <div class="input-field col s6 m6 l6  ">
                  <input  id="punto_inicio" type="text" name="punto_inicio"  class="form-control validate" data-validacion-tipo="requerido|min:10" >
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

            <!--BOTON QUE ME BORRA LO QUE ESCRIBI EN EL FORMULARIO-->
            <button title="Limpiar Pnatalla" class="btn waves-effect waves-light teal darken-4"
              value="reset"  type="reset" name="action"><span class="hide-on-small-only">Limpiar</span>
                   <i class="mdi-content-send material-icons right">delete</i>
              </button>
            </center>
          </form>
        </div>
      </div>
    </div>
  </fieldset>
<div class="right hide-on-large-only">
  <a href="index.php?c=Sendero"><i style="color:#00b0ff" class="small material-icons blue-grey darken-2 z-depth-1 btn-floating pulse">arrow_back</i>&nbsp;Página anterior</a>
</div>

<!--================================================================================================================================-->
        </div>
      </div><!-- Div de los tamanos -->

      <div class="input-field col l2 hide-on-med-and-down">
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
