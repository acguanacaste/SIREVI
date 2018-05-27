<<<<<<< refs/remotes/origin/master
=======

>>>>>>> add some changes for development
<main>
  <div class="container">
    <div class="row">

<<<<<<< refs/remotes/origin/master

      <div class="col s12 m12 l10">
        <!-- Inicio de mi codigo -->
        <div id="search-docs" class="section scrollspy">
          <hr>
=======
      <div class="col s12 m9 l10">
<!-- Inicio de mi codigo -->
        <div id="search-docs" class="section scrollspy">
          <hr>


>>>>>>> add some changes for development
<!--===========================================================================================================-->


<fieldset>
  <legend><h5>Formulario para Registros</h5>
    <h6>Completar la informacion con los datos correspondientes</h6></legend>
<<<<<<< refs/remotes/origin/master
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

                <?php
                $conexion = mysql_connect("localhost","root");
                mysql_select_db("sirevi",$conexion);
                $sentencia = "select * from sector order by nombre ASC";
                $query = mysql_query($sentencia);
                ?>
                <div class="row">
                   <div class="input-field col s12 m4 l4">
                    <select name="sector">
                       <option value="" disabled selected>Elija una opcion</option>
                      <?php while ($arreglo = mysql_fetch_array($query)) {  ?>
                      <option value="<?php echo $arreglo['id']?>"><?php echo $arreglo['nombre'] ?></option>
                      <?php } ?>
                    </select>

                    <label><i class="small material-icons">view_quilt</i>Sector al que Pertenece</label>
                  </div>
                 </div>
            </div>


            <!---Inicio de la tercera fila *columna1-->
              <div class="">
                <div class="input-field col s12 m6 l4  ">
                  <input  id="distancia" type="text" name="distancia" value="" class="validate" class="form-control" required >
                  <label for="distancia" >  <i class="small material-icons">transfer_within_a_station</i>Distancia ida y vuelta</label>
             </div>

             <!--Columna2 fila3-->
             <div class="input-field col s12 m6 l4  ">
               <input  id="tiempo_recorrido" type="text" name="tiempo_recorrido" value="" class="validate" class="form-control" data-validacion-tipo="requerido|min:10" required >
               <label for="tiempo_recorrido" >  <i class="small material-icons">timer</i>Tiempo de recorrido</label>
              </div>

               <!--Columna3 fila3-->
               <div class="input-field col s12 m6 l4  ">
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

             <!--columna-->
               <div class="input-field col s6 m6 l6  ">
                 <input  id="punto_llegada" type="text" name="punto_llegada" value="" class="validate" class="form-control" data-validacion-tipo="requerido|min:10" >
                 <label for="punto_llegada" >  <i class="small material-icons">directions_walk</i>Punto llegada</label>
                </div>
              </div><!--Fin de la cuarta fila -->

              <!--Inicio de la quinta fila-->
              <div class="">
              <!--columna-->
               <div class="input-field col s12 m12 l12  ">
                 <input  id="descripcion" type="text" name="descripcion" value="" class="validate" class="form-control" data-validacion-tipo="requerido|min:10" required >
                 <label for="descripcion" >  <i class="small material-icons">info_outline</i>Descripción del sendero</label>
                </div>
              </div><!--Fin de la quinta fila -->

              <!--Inicio de la quinta fila-->
              <div class="">
              <!--columna-->
               <div class="input-field col s12 m12 l12  ">
                 <input  id="regulaciones" type="text" name="regulaciones" value="" class="validate" class="form-control" data-validacion-tipo="requerido|min:10" >
                 <label for="regulaciones" >  <i class="small material-icons">report_problem</i>Regulaciones</label>
                </div>
              </div><!--Fin de la quinta fila -->


              <!--BOTON QUE ME ENVIA EL FORMULARIO-->
              <button title="Enviar" class="btn waves-effect waves-light teal darken-4"
                value="enviar"  type="submit" name="action"><span class="hide-on-small-only">Enviar</span>
                     <i class="mdi-content-send material-icons right">done</i>
              </button>

            <!--BOTON QUE ME BORRA LO QUE ESCRIBI EN EL FORMULARIO-->
            <button title="Limpiar Pnatalla" class="btn waves-effect waves-light teal darken-4"
              value="reset"  type="reset" name="action"><span class="hide-on-small-only">Limpiar</span>
                   <i class="mdi-content-send material-icons right">delete</i>
            </button>
=======
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
>>>>>>> add some changes for development

					 </div>
         </form>
           </div>

         </div>
       </div>
</fieldset>
<<<<<<< refs/remotes/origin/master

=======
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
                    <li><a  href="?c=Sendero" >
                      <i style="color:#00b0ff" title="Página Anterior" class=" small material-icons">arrow_back</i>Página anterior</a></li>
                    <li>
                    <hr>
=======
                    <li><a  href="index.php?c=Sendero" ><i style="color:#00b0ff" title="regresar" class=" small material-icons">refresh</i></a></li>
                    <hr>
                    <hr>
                  

                    <li>Puedo poner lista de items</li>
                    <li>Otro link por aqui...</li>
                    <li>Sendero...</li>

>>>>>>> add some changes for development
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
