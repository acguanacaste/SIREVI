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
                    <hr>
                    <hr>
            
                    <div class="">

                      <a style="color:#00b0ff" href="index.php?c=Sendero&a=agregarRegistro"> <i style="color:#00b0ff" class="small material-icons">playlist_add</i>Agregar Sector</a>

                      <hr>
                    </div>
                    <li>Puedo poner lista de items</li>
                    <li>Otro link por aqui...</li>
                    <li>Sendero...</li>

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
