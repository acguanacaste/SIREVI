<header>
    <div class="slider">
        <ul class="slides">
            <li>
                <img class="background"src="assets/img/mapaACG.jpg"> <!-- Imagen tomada de la pagina oficial de el ACG -->

            </li>
            <!--===============================================================================================================-->
            <li>
                <img class="background" src="assets/img/Santa_Rosa2.jpg"> <!-- random image -->
                <div class="caption center-align">
                    <h3>Sector Santa Rosa</h3>
                    <h5 class="light grey-text text-lighten-3"><p>El Sector Santa Rosa del Área de Conservación Santa Rosa está en el corazón del bosque tropical seco,
                            cuna de historia y tradiciones que guarda el Museo de La Casona de Santa Rosa,
                            hogar del Centro de Investigación del ACG y las oficinas administrativas del ACG.<p></h5>
                </div>
            </li>
            <!--===============================================================================================================-->

            <li>
                <img src="assets/img/pailas3.jpg"> <!-- random image -->
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
                <img src="assets/img/junquillal3.jpg"> <!-- random image -->
                <div class="caption right-align">
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
                <img src="assets/img/sector_Murcielago.jpg"> <!-- random image -->
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
                <img src="assets/img/santamaria3.jpg"> <!-- random image -->
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
                <img src="assets/img/horizontes.jpg"> <!-- random image -->
                <div class="caption center-align">
                    <h3>Estación Experimental Forestal Horizontes </h3>
                    <h5 class="light grey-text text-lighten-3"><p>En Horizontes el visitante podrá encontrar variedad de atractivos dentro del bosque seco tropical
                            entre ellos senderos con distancias que van desde los 600 m hasta los 6 km, con diferentes niveles de dificultad,
                            idóneos para la observación de aves, especies forestales propias de estos bosques,
                            caminatas de aventura y práctica de ciclismo de montaña.</p></h5>
                </div>
            </li>
        </ul>
        <nav class="blue-grey darken-4">

        </nav>
    </div>
</header>
<?php if ($_SESSION['usuario']['puesto'] == 1 || $_SESSION['usuario']['puesto'] == 3 ):?>
    <body class="body" >
      <!--OPCIONES PARA EL MENU LATERAL DEL RESPONSIVE-->
    <!--INFORMACION DENTRO DEL SIDENAV-->
    <!--============================================================================================-->
      <div>
       <br>
       <h5>&nbsp;Área de Conservación Guanacaste</h5>
       <h6>&nbsp;Módulo de reportes, seleccione cualquiera de las opciones disponibles para crear un reporte</h6>
       <hr>

             <div class><!--INICIO DE LA PREVISTA DE DIV'S-->
               <div class="col s12 m12 l12"><!--Div que me ceclara el tamano general de toda la pagina-->
                 <div class>

     <!--INICIO DE PRIMERA COLUMNA-->
                   <div class="row"><!---INICIO DE LA PRIMERA FILA-->
                       <div  class="input-field col s12 m6 l4">
                         <div class="card">
                           <div class="card-image waves-effect waves-block waves-light">
                             <img class="activator" src="assets/img/paises.jpg">
                           </div>

                           <div class="card-content">
                             <span class="card-title activator grey-text text-darken-4">Reporte Nacionalidades<i class="material-icons right">more_vert</i></span>
                             <p><a href="#">Haga click aquí</a></p>
                           </div>

                           <div class="card-reveal">
                             <span class="card-title grey-text text-darken-4">Reporte Nacionalidades<i class="material-icons right">close</i></span>
                             <div class="container">
                                <div class="row">
                                  <div class="col s12 m12 l12">
                                  <!-- Inicio de mi codigo -->
                                  <table class="responsive-table grey lighten-1 centered highlight z-depth-5">
                                    <ul class="collection">
                                      <li class="collection-item avatar">
                                        <img src="assets/img/paises.jpg" alt="Imagen no disponible" class="circle">
                                        <a><span class="title"></span>
                                          <p><a href="?c=Visitacion&a=Reporte">Para crear reporte <br> Click aquí</a><br></p></a>

                                          <a href="?c=Visitacion&a=Reporte" class="secondary-content tooltipped "
                                                data-position="left" data-delay="50" data-tooltip="Nacionalidades">

                                          <span class="hide-on-small-only"><i class="medium material-icons">public</i></span></a>
                                      </li>
                                    </ul>
                                  </table>

                                </div><!-- Div de los tamanos -->
                              </div>
                            </div><!--Div container-->
                           </div>
                         </div>
                       </div>



     <!--INICIO DE SEGUNDA COLUMNA-->
                   <div class="input-field col s12 m6 l4">
                     <div class="card">
                       <div class="card-image waves-effect waves-block waves-light">
                         <img class="activator" src="">
                       </div>
                       <div class="card-content">
                         <span class="card-title activator grey-text text-darken-4">Reporte<i class="material-icons right">more_vert</i></span>
                         <p><a href="#">Haga click aquí</a></p>
                       </div>
                       <div class="card-reveal">
                         <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                         <p>La realizacion del reporte</p>
                       </div>
                     </div>
                    </div>

    <!--INICIO DE LA TERCERA COLUMNA-->
                <div class="input-field col s12 m6 l4">
                  <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                      <img class="activator" src="assets/img/paises.jpg">
                    </div>
                    <div class="card-content">
                      <span class="card-title activator grey-text text-darken-4">Reporte <i class="material-icons right">more_vert</i></span>
                      <p><a href="#">Haga click aquí</a></p>
                    </div>
                    <div class="card-reveal">
                      <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                      <p>La realizacion del reporte </p>
                    </div>
                  </div>
                </div><!--FIN DEL DIV DE LA PRIMERA FILA -->
   </div><!--FIN DEL DIV QUE ME DECLARA EL TAMANO DE LA CARTA-->

     <!--INICIO DE LA FILA 2-->
     <!--INICION DE PRIMERA COLUMNA-->
      <hr>
                     <div class="row"><!--INICIO DEL DIV DE LA SEGUNDA FILA-->
                       <div class="input-field col s4">
                         <div class="card">
                           <div class="card-image waves-effect waves-block waves-light">
                             <img class="activator" src="assets/img/.jpg">
                           </div>
                           <div class="card-content">
                             <span class="card-title activator grey-text text-darken-4">Reporte<i class="material-icons right">more_vert</i></span>
                             <p><a href="#">Crear consulta para reporte</a></p>
                           </div>
                           <div class="card-reveal">
                             <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                             <p>La realizacion del reporte </p>
                           </div>
                         </div>
                      </div><!--FIN DEL DIV QUE ME DECLARA EL TAMANO-->

     <!--INICIO DE SEGUNDA COLUMNA-->
                   <div class="input-field col s4">
                     <ul class="popout collapsible" class="popout" data-collapsible="accordion">
                      <li>
                        <div class="collapsible-header"><i class="material-icons">filter_drama</i>First</div>
                        <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
                      </li>
                      <li>
                        <div class="collapsible-header"><i class="material-icons">place</i>Second</div>
                        <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
                      </li>
                      <li>
                        <div class="collapsible-header"><i class="material-icons">whatshot</i>Third</div>
                        <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
                      </li>
                    </ul>
                   </div>

    <!--INICIO DE TERCER COLUMNA-->
                  <div class="input-field col s4">
                    <div class="row">
                      <div class="row">
                              <div >
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
           </div><!--FIN DEL DIV DE LA SEGUNDA FILA-->


     <!--INICIO DE LA TERCERA FILA-->
     <!--INICIO DE LA COLUMNA PUESTO EN INSTITUCION-->
               <div class="row"><!--INICIO DE TERCERA FILA-->
                   <div class="row">
                     <div class="input-field col s12">
                       <input id="puesto" type="text"  class="form-control" class="validate">
                       <label for="puesto"><i class="small material-icons"></i>&nbsp;AQUI VA ALGO </label>
                     </div>
                   </div>
                 </div><!--Fin de la tercera fila-->

     <!--INICIO DE LINEAS PARA EL CORREO-->
                   <div class="row">
                  soy un div a la espera de un elemento
                   </div>
                 </div>
               </div><!--Fin del div de la segunda fila-->
             </div><!--Fin del div que me declara el tamano-->
           </div><!--Fin de la prevista de los div's-->

     <!--INICIO DE LOS-->
           <div class="col-lg-12">

               <hr/>
           </div>

     </div><!--FIN DE container-contact-->
<?php endif; ?>
