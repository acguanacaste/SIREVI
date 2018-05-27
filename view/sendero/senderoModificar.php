<main>
  <div class="container">
    <div class="row">

<<<<<<< refs/remotes/origin/master
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
                  <input  id="distancia" type="text" name="distancia" value="<?php echo $sendero->distancia; ?>" class="validate" class="form-control" required >
                  <label for="distancia" >  <i class="small material-icons">transfer_within_a_station</i>Distancia ida y vuelta</label>
             </div>

             <!--Columna2 fila3-->
             <div class="input-field col s12 m6 l4  ">
               <input  id="tiempo_recorrido" type="text" name="tiempo_recorrido" value="<?php echo $sendero->tiempo_recorrido; ?>" class="validate" class="form-control" data-validacion-tipo="requerido|min:10" required >
               <label for="tiempo_recorrido" >  <i class="small material-icons">timer</i>Tiempo de recorrido</label>
              </div>

               <!--Columna3 fila3-->
               <div class="input-field col s12 m6 l4  ">
                 <input  id="" type="text" name="punto_alto" value="<?php echo $sendero->punto_alto; ?>" class="validate" class="form-control" data-validacion-tipo="requerido|min:10" required >
                 <label for="punto_alto" >  <i class="small material-icons">wallpaper</i>Punto mas alto</label>
                </div>
              </div><!--Fin de la segunda fila -->

          <!---Inicio de la cuarta fila-->
              <div class="">
                <div class="input-field col s6 m6 l6  ">
                  <input  id="punto_inicio" type="text" name="punto_inicio" value="<?php echo $sendero->punto_inicio; ?>"  class="form-control validate" data-validacion-tipo="requerido|min:10" required >
                  <label for="punto_inicio" >  <i class="small material-icons">directions_walk</i>Punto inicio</label>
             </div>

             <!--columna-->
               <div class="input-field col s6 m6 l6  ">
                 <input  id="punto_llegada" type="text" name="punto_llegada" value="<?php echo $sendero->punto_llegada; ?>" class="validate" class="form-control" data-validacion-tipo="requerido|min:10" required >
                 <label for="punto_llegada" >  <i class="small material-icons">directions_walk</i>Punto llegada</label>
                </div>
              </div><!--Fin de la cuarta fila -->

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

					 </div>
         </form>
           </div>

         </div>
       </div>
</fieldset>

=======
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
            <form id="frm-usuario" action="?c=Sendero&a=Guardar" method="post" enctype="multipart/form-data">
              <input type="hidden" name="id" value="<?php echo $sendero->id; ?>" />
              <div>

                <div class="row"><!---INICIO DE LA PRIMERA FILA-->
                  <div class="input-field col s6 m5 l6  ">
                    <input  id="name" type="text" name="nombre" value="<?php echo $sendero->nombre; ?>" class="validate" class="form-control" data-validacion-tipo="requerido|min:10" >
                    <label for="name" >  <i class="small material-icons">face</i>Nombre del Sendero</label>
                  </div>

                 <!--INICIO DE COLUMNA -->
                 <div class="input-field col s6 m5 l6  ">
                   <input  id="last_name" type="text" name="codigo" value="<?php echo $sendero->distancia; ?>" class="validate" class="form-control" data-validacion-tipo="requerido|min:10" >
                   <label for="last_name" >  <i class="small material-icons">recent_actors</i>Distancia</label>
                 </div>
               </div><!--FIN DEL DIV DE LA PRIMERA FILA -->

               <div class="">
                 <div class="input-field col s6 m5 l6  ">
                   <input  id="last_name" type="text" name="codigo" value="<?php echo $sendero->longitud; ?>" class="validate" class="form-control" data-validacion-tipo="requerido|min:10" >
                   <label for="last_name" >  <i class="small material-icons">recent_actors</i>Longitud</label>
                 </div>

                 <div class="input-field col s6 m5 l6  ">
                   <input  id="last_name" type="text" name="codigo" value="<?php echo $sendero->latitud; ?>" class="validate" class="form-control" data-validacion-tipo="requerido|min:10" >
                   <label for="last_name" >  <i class="small material-icons">recent_actors</i>Latitud</label>
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

                <div style="height: 1px;">
                  <ul class="section table-of-contents">
                    <hr>
                    <li><a  href="?c=Sendero" >
                      <i style="color:#00b0ff" title="Página Anterior" class=" small material-icons">arrow_back</i>Página anterior</a></li>
                    <li>
                    <hr>
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
                <div style="height: 1px;">
                  <ul class="section table-of-contents">

                    <hr>
                    <li><a  href="index.php?c=Usuario" ><i style="color:#00b0ff" title="regresar" class=" small material-icons">refresh</i></a></li>
                    <hr>
                    <hr>
            
                    <div class="">

                      <a style="color:#00b0ff" href="index.php?c=Sendero&a=agregarRegistro"> <i style="color:#00b0ff" class="small material-icons">playlist_add</i>Agregar Sector</a>

                      <hr>
                    </div>
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
<<<<<<< refs/remotes/origin/master

  <script>
      $(document).ready(function(){
          $("#frm-sendero").submit(function(){
=======
  </body>
  <script>
      $(document).ready(function(){
          $("#frm-pais").submit(function(){
>>>>>>> add some changes for development
              return $(this).validate();
          });
      })
  </script>
<<<<<<< refs/remotes/origin/master
=======


<!--=======================================>> Inicio del navegador layteral slideout <<==========================================-->
<div class="row">
    <div class="col s4">
    <div  class="z-depth-3">
      <ul id="slide-out" class="side-nav">
        <ul id="nav-mobile" class="side-nav fixed" style="transform: translateX(0px);"  style="width:390px">
          <li><div class="userView">
            <img class="background" src="assets/img/CasonaSantaRosa.jpg">
            <a href="#!user"><img class="circle" src="assets/img/yo.JPG"></a>
            <a href="#!name"><span class="white-text name">Alex M.Luna</span></a>
            <a href="#!email"><span class="white-text email">cheeto12@gmail.com</span></a></div>
          </li>

  <!--===============================>> INICIO DE LA BARRA DE BUSCADOR side nav <<==========================================-->
    <li class="search">
      <nav>
        <div class="nav-wrapper">
          <form class="z-depth-2" >
            <div class="input-field">
              <input id="search" type="search" required>
              <label for="search"><i href="#!" class="material-icons">search</i></label>
              <i class="material-icons">close</i>
            </div>
          </form>
        </div>
      </nav>
    </li>
    <li>&nbsp; </li>
  <!--============================= Fin de la Barra del buscador ===========================================================-->

    <li class="no-padding">
      <ul class="collapsible collapsible-accordion">
        <li class="bold"><a class="collapsible-header  waves-effect waves-teal">
          <img class="circle" src="assets/img/opcionesModulos.png"> Modulos del sistema</a>

          <div class="collapsible-body" style="display: block;">
            <ul>
              <li><a href="index.php?c=Usuario"  > Modulo Usuarios</a></li>
              <li><a href="index.php?c=Pais"     > Modulo Pais</a></li>
              <li><a href="index.php?c=Provincia"> Modulo Provincia</a></li>
              <li><a href="index.php?c=Sector"   > Modulo Sector</a></li>
              <li><a href="index.php?c=Sendero"  > Modulo Sendero</a></li>
              <li><a href="index.php?c=ASP"      > Modulo Area Silvestre(asp)</a></li>
            </ul>
          </div>
        </li>
      </ul>
    </li>
    <li class="bold"><a href="http://www.acguanacaste.ac.cr/" class="waves-effect waves-teal">
      <img class="circle" src="assets/img/logoACG.png"> Area Conservacion Guanacaste</a> </a></li>
      <ul class="collapsible" data-collapsible="accordion">
        <li>
          <li class="bold"><a href="http://www.acguanacaste.ac.cr/turismo/sector-santa-rosa" class="waves-effect waves-teal">
            <img class="circle" src="assets/img/SantaRosaLogo.jpg"> Informacion del Sector</a></a></li>

            <li class="no-padding">
              <ul class="collapsible collapsible-accordion">
                <li class="bold"><a class="collapsible-header  waves-effect waves-teal">
                  <img class="circle" src="assets/img/logoSitio.png"> Sitios Turisticos</a></a>

                  <div class="collapsible-body" style="display: block;">
                    <ul>
                      <li><a href="http://www.acguanacaste.ac.cr/turismo/sector-santa-rosa">Sector Santa Rosa</a></li>
                      <li><a href="">Sector Junquillal</a></li>
                      <li><a href="">Sector Santa Maria</a></li>
                      <li><a href="">Sector Horizontes</a></li>
                      <li><a href="">Sector Pailas</a></li>
                      <li><a href="">Sector Murcielago</a></li>
                      <li><a href="">Sector Marino</a></li>
                    </ul>
                  </div>
                </li>
                <li class="bold"><a href="http://www.acguanacaste.ac.cr/biodesarrollo/programa-de-ecoturismo"
                class="collapsible-header  waves-effect waves-teal"><img class="circle" src="assets/img/tortuga.jpg"> Programa Ecoturismo</a></a>
                <li class="active"><a class="collapsible-header active waves-effect waves-teal">
                  <i class="small material-icons">perm_identity</i>Sesion</a>
                  <div class="collapsible-body" style="display: block;">
                    <ul>
                      <li><a href="Index.php"> Pagina inicio</a></li>
                      <li><a href=""> Cerrar sesion</a></li>
                    </ul>
                  </div>
                </li>
                <li> &nbsp;</li>
              </ul>
            </li>
          </ul>
        </div><!-- Fin del area sombreada-->
      </div><!-- Fin de los tamanos -->
    </div><!-- Fin del row -->

<!--============================================================================================================================-->
<!--============================================================================================================================-->
<!--============================================================================================================================-->
>>>>>>> add some changes for development
