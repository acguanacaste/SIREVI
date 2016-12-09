<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width= device-width, user-scale=no, initial-scale=1.0, minimum-scale=1.0">
        <title>SIREVI Principal</title>
        <link href="//estilos.php" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="../assets/js/jquery.anexsoft-validator.js"></script>
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min."></script>
    <!--  <link rel="stylesheet" type="text/css" href="assets/css/estilos.css" />
    <!--    <link rel="stylesheet" href="assets/css/style1.css" /> -->

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/react/15.3.1/react-dom.min.js"/>
        <link rel="stylesheet" href="https://cdn.rawgit.com/Dogfalo/materialize/master/dist/js/materialize.min.js"/>

        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"><!--PARA LOS ICONOS-->
        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">
        <!-- Compiled and minified JavaScript -->
        <!--ME DA LA PROPIEDAD DE HACER MAS PEQUENO EL AREA DONDE ESCRIBO -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>

    </head>
    <script>
    $( document ).ready(function(){
      $(".button-collapse").sideNav();
      $('.slider').slider({full_width: true});
      $('.carousel').carousel();
      $('.collapsible').collapsible();

    })
    $( document ).ready(function(){
    $('.fixed-action-btn').openFAB();
    $('.fixed-action-btn').closeFAB();
    $('.fixed-action-btn.toolbar').openToolbar();
    $('.fixed-action-btn.toolbar').closeToolbar();

      })
      $(document).ready(function(){
          // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
          $('.#modal1').modal();
        });

    </script>
    <header>
      <div class="slider">
         <ul class="slides">
           <li>
             <img src="../assets/img/xmapa-portada.jpg.pagespeed.ic.DA9ta5PMEg.jpg"> <!-- Imagen tomada de la pagina oficial de el ACG -->
             <div class="caption center-align">
               <h3>Bienvenido Area de Conservacion Guanacaste</h3>
               <h5 class="light grey-text ">Sistema Registro de Visitacion</h5>
             </div>
           </li>
           <!--===============================================================================================================-->
           <li>
          <img class="background" src="../assets/img/Santa_Rosa2.jpg"> <!-- random image -->
             <div class="caption center-align">
               <h3>Sector Santa Rosa</h3>
               <h5 class="light grey-text text-lighten-3"><p>El Sector Santa Rosa del Área de Conservación Santa Rosa está en el corazón del bosque tropical seco,
                  cuna de historia y tradiciones que guarda el Museo de La Casona de Santa Rosa,
                   hogar del Centro de Investigación del ACG y las oficinas administrativas del ACG.<p></h5>
             </div>
           </li>
           <!--===============================================================================================================-->

           <li>
             <img src="../assets/img/pailas3.jpg"> <!-- random image -->
             <div class="caption left-align">
               <h3>Sector Pailas</h3>
               <h5 ><p class="white-text text-darken-3">Sitio donde se combina el componente volcánico, con sus fumarolas, lagunas y Pailas de Barro,
                  con la gran variedad de ecosistemas y paisajes impresionantes, en donde es posible observar el cráter activo del volcán, cataratas,
                   zonas de pastizales en regeneración, y bosques primarios, a través de senderos 100% naturales, con muchas probabilidades de avistar aves,
                    mamíferos y reptiles.</p></h5>
             </div>
           </li>
           <!--===============================================================================================================-->

           <li>
             <img src="../assets/img/junquillal3.jpg"> <!-- random image -->
             <div class="caption left-align">
               <h3>Refugio Nacional de Vida Silvestre Bahía Junquillal</h3>
               <h5 class="light grey-text text-lighten-3">
                 <p>Sitio rodeado de una gran riqueza biológica al contar con 7 diferentes ecosistemas costeros,
                   en donde el agua está presente.
                 La propiedad conocida como Junquillal fue donada en 1988 por la compañía Ranchos Horizontes,
                  con el objetivo de que fuera dedicada a la conservación del medio ambiente como parte del Área de Conservación Guanacaste (ACG).
                     Además comprende una playa de gran belleza escénica que cuenta con la categoría de Bandera Azul Ecológica con tres estrellas.
                      Su extensión total es de 2 kilómetros de largo.</p>
              </h5>
             </div>
           </li>
           <!--======================================================================================================================-->
           <li>
             <img src="../assets/img/sector_Murcielago.jpg"> <!-- random image -->
             <div class="caption left-align">
               <h3>Sector Murcielago</h3>
               <h5 class="light grey-text text-lighten-3"><p>Sitio especial para disfrutar de la naturaleza y las características
                  singulares que brinda el bosque seco, sus playas, sus senderos, ríos de agua dulce y manglar,
                   así como también su importancia geológica donde se puede apreciar los cerros de la península de Santa Elena,
                    las tierras más antiguas de Costa Rica; su flora y fauna harán de su visita motivo de satisfacción y relajación.</p></h5>
             </div>
           </li>
         <!--======================================================================================================================-->
           <li>
             <img src="../assets/img/santamaria3.jpg"> <!-- random image -->
             <div class="caption right-align">
               <h3>Sector Santa Maria</h3>
               <h5><p class="white-text text-darken-3">El Sector Santa María del Área de Conservación Guanacaste,
                  ubicado en la parte sureste del Volcán Rincón de la Vieja,
                  es un busque húmedo donde se pueden apreciar varrias cataratas y ríos,
                   así como unas aguas tarmales y un sendero que comunica con el Sector Pailas.<p></h5>
             </div>
           </li>
           <!--=======================================================================================================================-->
           <li>
             <img src="../assets/img/horizontes.jpg"> <!-- random image -->
             <div class="caption center-align">
               <h3>Estación Experimental Forestal Horizontes </h3>
               <h5 class="light grey-text text-lighten-3"><p>En Horizontes el visitante podrá encontrar variedad de atractivos dentro del bosque seco tropical
                  entre ellos senderos con distancias que van desde los 600 m hasta los 6 km, con diferentes niveles de dificultad,
                   idóneos para la observación de aves, especies forestales propias de estos bosques,
                    caminatas de aventura y práctica de ciclismo de montaña.</p></h5>
             </div>
           </li>
         </ul>
       </div>
    </header>
    <body class="body" >
      <!--INICIO DEL side nav-->
      <!--==============================================MENU HORIZONTAL BOTON ROJA=================================================================-->
      <nav>
         <div class="nav-wrapper">

           <a href="#!" class="brand-logo">&nbsp; SIREVI</a>
           <ul class="right hide-on-med-and-down" >
             <div class="fixed-action-btn toolbar">
               <a class="btn-floating btn-large red">
                 <i class="large material-icons ">add</i><!--BOTON FLOTANTE-->
               </a>
               <ul>
                 <li class="waves-effect waves-light"><a href="#!"><i class="material-icons">insert_chart</i></a></li>
                 <li class="waves-effect waves-light"><a href="#!"><i class="material-icons">format_quote</i></a></li>
                 <li class="waves-effect waves-light"><a href="#!"><i class="material-icons">publish</i></a></li>
                 <li class="waves-effect waves-light"><a href="#!"><i class="material-icons">attach_file</i></a></li>
               </ul>
             </div>
             <!-- Dropdown Trigger -->
 <a class=' dropdown-button btn' href='#' data-activates='dropdown1' > Menu Registros</a>

       <!-- Dropdown Structure -->
           <ul id='dropdown1' class='dropdown-content' >
             <li><a href=""> Registrar Usuarios</a></li><!--Recordar la ortografia-->
             <li class="divider"></li>
             <li><a href=""> Registar Pais</a></li><!--Recordar la ortografia-->
             <li><a href="#!">Registrar Provincia</a></li>
             <li><a href="#!">Registrar Sector</a></li>
             <li><a href="#!"> Registro Sendero </a></li>
             <li><a href="#!"> Registrar Area Silvestre Protegida(asp)</a></li>
           </ul>
        <!--  <li><a href=""><i class="material-icons right">view_module</i>Inicio</a></li> -->
          </ul>
                <a href="#" data-activates="slide-out" class="button-collapse"><i  style="color:red" class="medium material-icons">toc</i></a>
         </div>


       </nav>
      <!--======================================================================================================================-->


      <!--==========================================================OPCIONES PARA EL MENU LATERAL DEL RESPONSIVE-->
      <!--================================== MENU LATERAL DESPLEGABLE <> INFORMACION DENTRO DEL SIDENAV-->
      <div  class="z-depth-2">
           <ul id="slide-out" class="side-nav" >
             <ul id="nav-mobile" class="side-nav fixed" style="transform: translateX(0px);">
               <li><div class="userView">
                 <img class="background" src="assets/img/CasonaSantaRosa.jpg">
                 <a href="#!user"><img class="circle" src="assets/img/yo.JPG"></a>
                 <a href="#!name"><span class="white-text name">Alex M.Luna</span></a>
                 <a href="#!email"><span class="white-text email">cheeto12@gmail.com</span></a></div>
               </li>

      <!--============================================>> INICIO DE LA BARRA DE BUSCADOR side nav <<===================================================================-->
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
                       <li><a href="http://www.acguanacaste.ac.cr/turismo/sector-pailas">Sector Pailas</a></li>
                       <li><a href="http://www.acguanacaste.ac.cr/turismo/sector-junquillal">Sector Junquillal</a></li>
                        <li><a href="http://www.acguanacaste.ac.cr/turismo/sector-murcielago">Sector Murcielago</a></li>
                       <li><a href="http://www.acguanacaste.ac.cr/turismo/sector-santa-maria">Sector Santa Maria</a></li>
                       <li><a href="http://www.acguanacaste.ac.cr/turismo/sector-santa-maria">Sector Horizontes</a></li>
                       <li><a href="">Sector Marino</a></li>
                     </ul>
                   </div>
                 </li>

                 <li class="bold"><a href="http://www.acguanacaste.ac.cr/biodesarrollo/programa-de-ecoturismo"
                     class="collapsible-header  waves-effect waves-teal"><img class="circle" src="assets/img/tortuga.jpg"> Programa Ecoturismo</a></a>

                 <li class="bold active"><a class="collapsible-header active waves-effect waves-teal">
                                                                        <i class="small material-icons">perm_identity</i>Sesion</a>

                   <div class="collapsible-body" style="display: block;">
                 </div>
                 </li>
               </ul>
             </li>
           <li class="bold"><a href="#" class="waves-effect waves-teal">Opcion Registros*</a></li>
           </ul>

         </div>
            <ul id="dropdown1" class="dropdown-content">
              <li><a href="#!">Reiniciar</a></li>
              <li class="divider"></li>
              <li><a href="REFERENCIA A LOGIN"></i>Cerrar</a></li>
            </ul>

  <a href="#" data-activates="slide-out" class="button-collapse"><i  style="color:White" class="medium material-icons">toc</i></a>
           </div>

         </nav>

    <!--OPCIONES PARA EL MENU LATERAL DEL RESPONSIVE-->
    <!--INFORMACION DENTRO DEL SIDENAV-->
    <div  class="z-depth-2">
         <ul id="slide-out" class="side-nav">
           <li><div class="userView">
             <img class="background" src="assets/img/CasonaSantaRosa.jpg">
             <a href="#!user"><img class="circle" src="assets/img/yo.JPG"></a>
             <a href="#!name"><span class="white-text name">Alex M.Luna</span></a>
             <a href="#!email"><span class="white-text email">cheeto12@gmail.com</span></a></div></li>

           <li><img class="circle" src="assets/img/logoACG.webp"></a></i>&nbsp;Sector Santa Rosa</a></li>
           <li><a href="http://www.acguanacaste.ac.cr/">Area Conservacion Guanacaste</a></li>
           <li><div class="divider"></div></li>
           <li><a href="http://www.acguanacaste.ac.cr/biodesarrollo/programa-de-ecoturismo">Informacion Ecoturismo</a></li>

           <li><div class="divider"></div></li>
           <li><a class="subheader">Visitenos</a></li>
           <li><a class="waves-effect" href="Referencia a pagina principal sirevi">Pagina Inicio</a></li>

           <li><a class="waves-effect" href="http://www.acguanacaste.ac.cr/turismo">Sitios Turisticos</a></li>

           <li><div class="divider"></div></li>
           <li><a class="subheader">Sesion</a></li>
         </ul>

    </div>

    <!--============================================================================================-->
      <div class="container contact">
       <br>
       <h5>Area de Conservacion Guanacaste </h5>
       <h6></h6>


             <div class><!--INICIO DE LA PREVISTA DE DIV'S-->
               <div class="col s14 m6 l6"><!--DIV QUE ME DECLARA EL TAMANO DE ANCHO DEL CUERPO DE LA PREVISTA DE LAS DIVICIONES-->
                <hr>
                 <div >


                   <div class="row"><!---INICIO DE LA PRIMERA FILA-->
                   <div class="input-field col s4"><!--INICIO DE LA PRIMERA COLUMNA-->
                  Estoy flotando!!



<!--======================================================================================================================-->
<!--=====================================================================================================================-->
    <!-- Modal Trigger -->
    <a class="modal-trigger waves-effect waves-light btn" href="#modal1">Modal</a>

    <!-- Modal Structure -->
    <div id="modal1" class="modal modal-fixed-footer">
      <div class="modal-content">
        <h4>Modal Header</h4>
        <p>A bunch of text</p>
      </div>
      <div class="modal-footer">
        <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Agree</a>
      </div>
    </div>
                 </div><!--FIN DEL DIV QUE ME DECLARA EL TAMANO DE LA CARTA-->

<!--=============================================================================================================-->









                   <div class="input-field col s4"><!--INICIO DE SEGUNDA COLUMNA-->
                    <div class="row">
                    <div class=>
                      <div class="large card" >
                        <div class="card-image">
                          <img src="../assets/img/junquillal.jpg">
                          <span class="card-title">Foto con un titulo</span>
                        </div>
                        <div class="card-content">
                          <p>Esta es una carta muy simple.Soy muy buena conteniendo pequena informacion.
                         Soy conveniente porque reuiqero una pequeno margen para ser usada eficientemente.</p>
                        </div>
                        <div class="card-action">
                          <a href="#">LINK</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div><!--Fin de la segunda columna-->

    <!--INICIO DE LA TERCERA COLUMNA-->
        <div  class="input-field col s4">
          <table class="striped">
          <thead>
              <tr data-field="schedule"><b>Horarios y Tarifas de Sectores Turisticos </b></tr>
            <tr>
                <th data-field="id">Sector </th>
                <th data-field="name">Horario</th>
                <th data-field="price">Tarifas</th>
            </tr>
          </thead>

          <tbody>
            <tr style="height=">
              <td><a href="">Santa Rosa</td>
              <td>L-D: 8-4pm</td>
              <td><b>Nacionales:</b>₡1100<br><b>Extranjeros:</b> $15</td>
            </tr>

            <tr>
              <td><a href="">Pailas</td>
              <td>K-D: 7-3pm</td>
              <td><b>Nacionales:</b>₡1100<br><b>Extranjeros:</b> $15</td>
            </tr>
            <tr>
              <td><a href="">Junquillal</td>
              <td>L-D: 8-4pm</td>
              <td>Nacionales:₡2000<br>Niños(6-12):₡1000<br>Extranjeros: $19</td>
            </tr>
            <tr>
              <td><a href="">Murcielago</td>
              <td>L-D: 8-4pm</td>
              <td><b>Nacionales:</b>₡1100<br><b>Extranjeros:</b> $15</td>
            </tr>
            <tr>
              <td><a href="">Santa Maria</td>
              <td>L-D: 8-4pm</td>
              <td><b>Nacionales:</b>₡1100<br><b>Extranjeros:</b> $15</td>
            </tr>
            <tr>
              <td><a href="">Horizontes</td>
              <td>L-D: 7-4pm</td>
              <td><b>Nacionales:</b>₡1100<br><b>Extranjeros:</b> $15</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div><!--FIN DEL DIV DE LA PRIMERA FILA -->


     <!--INICIO DE LA FILA 2-->
     <!--INICION DE PRIMERA COLUMNA-->
      <hr>
        <div class="row"><!--INICIO DE LA SEGUNDA FILA-->
         <div class="input-field col s4">
          Soy un "div" y estoy flotando!!
        </div><!--FIN DEL DIV QUE ME DECLARA EL TAMANO-->

     <!--INICIO DE SEGUNDA COLUMNA-->
         <div class="input-field col s4">
        Soy un "div" y estoy flotando!!
         </div>

    <!--INICIO DE TERCER COLUMNA-->
      <div class="input-field col s4">
        <div class="row">
          <div>
            <div>
              <div class="card blue-grey darken-1">
                <div class="card-content white-text">
                  <span class="card-title">Card Title</span>
                  <p>I am a very simple card. I am good at containing small bits of information.
                    I am convenient because I require little markup to use effectively.</p>
                </div>
                <div class="card-action">
                    <a href="#">This is a link</a>
                    <a href="#">This is a link</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div><!--FIN DEL DIV DE LA SEGUNDA FILA-->


     <!--INICIO DE LA TERCERA FILA-->
     <!--INICIO DE LA COLUMNA PUESTO EN INSTITUCION-->
               <div class="row"><!--INICIO DE TERCERA FILA-->
            Soy un "div" del ancho de pantalla grande col12
                 </div><!--FIN DE LA TERCERA FILA-->


<!--=============================================================================================================================================-->

<!--===========================================================================================================================================-->
                <textarea class="materialize-textarea" placeholder="Your Message" required></textarea>

              </div>
             </div><!--FIN DE DIV QUE ME DECLARA EL TAMANO-->
           </div><!--FIN DE LA PREVISTA DE LOS DIV'S-->

     </div><!--FIN DE container-contact-->

    <footer class="page-footer">
         <div class="container">
           <div class="row">
             <div class="col l6 s12">
               <h5 class="white-text">INFORMACION PARA EL FOOTER</h5>
               <p class="grey-text text-lighten-4">Puedo usar columnas y otras cosas aqui para hacer mejor el footer</p>
             </div>
             <div class="col l4 offset-l2 s12">
               <h5 class="white-text">Links</h5>
               <ul>
                 <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                 <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                 <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                 <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
               </ul>
             </div>
           </div>
         </div>
         <div style="align-items:left"class="footer-copyright">
           <div style="align=left"class="container">
           © 2016 Copyright<br> Sistema Registro Visitacion, Area Conservacion Guanacaste
           <a class="grey-text text-lighten-4 right" href="#!">Mas Links</a>
           </div>
         </div>
       </footer>

  </body>
</html>
