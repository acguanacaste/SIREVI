<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
          <meta name="viewport" content="width= device-width, user-scale=no, initial-scale=1.0, minimum-scale=1.0">
        <title>Registro Usuarios</title>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="//estilos.php" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="../assets/js/jquery.anexsoft-validator.js"></script>
        <script type="text/javascript" src="/assets/js//indexUsuarios.js"></script>
    <!--    <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script> -->
        <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<!--        <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min."></script> -->
      <link rel="stylesheet" type="text/css" href="assets/css/estilos.css" />
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
            $('.fixed-action-btn').openFAB('toolbar');
            $('.fixed-action-btn').closeFAB();
            $('.fixed-action-btn.toolbar').openToolbar();
            $('.fixed-action-btn.toolbar').closeToolbar();
               $('.slider').slider({full_width: true});
          /*   $(".dropdown-button").dropdown(hover:false);*/
          })

          $(document).ready(function(){
             $('.collapsible').collapsible({
               accordion : false // A setting that changes the collapsible behavior to expandable instead of the default accordion style
             });

           });
           </script>
           <header>
                <div class="container"><a href="#" data-activates="nav-mobile"
                  class="button-collapse top-nav waves-effect waves-light circle hide-on-large-only">
                  </a></div>

                <ul style="transform: translateX(0%);" id="nav-mobile" class="side-nav fixed">

<!--=====AQUI ES DONDE SE PONE LA FOTO DE USUARIO=======-->
                  <li><div class="userView">
                    <img class="background" src="assets/img/CasonaSantaRosa.jpg">
                    <a href="#!user"><img class="circle" src="assets/img/yo.JPG"></a>
                    <a href="#!name"><span class="white-text name">Alex M.Luna</span></a>
                    <a href="#!email"><span class="white-text email">cheeto12@gmail.com</span></a></div>
                  </li>
<!--========================FIN DE LINEA FOTO DE USUARIO=======================================-->


<!--===============================INICIO PARA EL BUSCADOR========-->

  <li class="search">
    <nav >
      <div class="nav-wrapper">
        <form class="z-depth-2" id="buscador" name="buscador" method="post" action="">
          <div class="buscador">
            <nav>
              <div class="nav-wrapper">
                <a href="#" data-activates="mobile-demo" class="button-collapse">
                  <i class="medium material-icons" style="color:white">menu</i>Menu</a>
                <!--   <input id="buscar" style="color:white" name="buscar" type="search" placeholder="Seccion Registros" autofocus >-->
                <ul class="side-nav" id="mobile-demo">
                  <li><div class="userView">
                    <img class="background" src="assets/img/CasonaSantaRosa.jpg">
                    <a href="#!user"><img class="circle" src="assets/img/yo.JPG"></a>
                    <a href="#!name"><span class="white-text name">Alex M.Luna</span></a>
                    <a href="#!email"><span class="white-text email">cheeto12@gmail.com</span></a></div>
                  </li>
                  <hr>
                  <a><b>Lista de opciones para los registros*:</b></a>
                  <li><a href="">Registro Sector </a></li>
                  <li><a href="">Registro Sendero </a></li>
                  <li><a href="">Registro Pais </a></li>
                  <li><a href="">Registro Provincia </a></li>
                  <li><a href="">Registro Area Sivestre Protegida(ASP) </a></li>
                </ul>
              </div>
            </nav>
          </div><!--Fin de div bs=uscador-->
      </form>
  <div class="input-field">
        </div>
    </div>
  </nav>
</li>
<!--FIN DE BUSCADOR MENU LATERAL-->
<!--=====================================FIN DE LINEA PARA BUSCADOR==============================================================-->

<!--=========================================INICIO DE LINEAS PARA LAS OPCIONES DEL MENU=======================================-->
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

                        <li class="bold ative"><a class="collapsible-header  waves-effect waves-teal">
                                                                                <i class="small material-icons">perm_identity</i>Sesion</a>
                          <div class="collapsible-body" style="display: block;">
                            <ul>
                              <li><a href="http://localhost/Registro_Responsive_usuarios_v2/view/menu_principal.php"> Pagina inicio</a></li>

                              <li><a href="">Cerrar sesion</a></li>
                            </ul>
                          </div>
                        </li>
                      </ul>
                    </li>
                </ul>
              </header>

<body class="body" >

<!--INICIO DEL side nav-->
<!--==============================================MENU HORIZONTAL BOTON ROJA=================================================================-->
<nav>
   <div class="nav-wrapper">

     <a href="#!" class="brand-logo">&nbsp; SIREVI</a>
     <ul class="right hide-on-med-and-down" class="fixed-action-btn toolbar">

      <!--Estructura de dropdown-->
            <ul id="dropdown1"  class="dropdown-content"   >

            <li><a href="#" >Seleccionar opcion</a></li>
            <li class="divider"></li>
            <li><a href="#" data-activates="slide-out_2" class="button-collapse">Registrar Usuario</a></li>
            <li><a href="Referencia de la pagina de modificar usuario">Modificar Usuario</a></li>

          </ul>
          <ul class="right hide-on-med-and-down">

           <!-- Dropdown Trigger -->
           <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Modulos Usuario<i class="material-icons right">arrow_drop_down</i></a></li>
         </ul>
            <li><a href=""><i class="material-icons right">view_module</i>Inicio</a></li>

           </ul>
             <a href="#" data-activates="slide-out" class="button-collapse"><i  style="color:white" class="medium material-icons">toc</i></a>
         </div>


 </nav>
 <!--<li><a href="#" data-activates="slide-out_2" class="button-collapse"><i  style="color:white" class="material-icons">menu</i>Registrar Usuario</a></li>
-->
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
                 <li><a href="/SIREVI/view/menu_principal.php"> Pagina inicio</a></li>
                 <li><a href="">Cerrar sesion</a></li>
               </ul>
             </div>
           </li>
         </ul>
       </li>
       <li class="no-padding">
         <ul class="collapsible collapsible-accordion">
           <li class="bold"><a class="collapsible-header  waves-effect waves-teal">
              <i class="small material-icons">input</i>Opciones de Registro</a>

             <div class="collapsible-body" style="display: block;">
               <ul>

                 <li><a href="#!" data-activates="slide-out_2" class="button-collapse" >Registrar Usuario</a></li>
                 <li><a href="#!">Registrar ...</a></li>
                 <li><a href="#!">Registrar ...</a></li>
                 <li><a href="#!">Registrar ...</a></li>
                 <li><a href="#!">Registrar ...</a></li>
                 <li><a href="#!">Registrar ...</a></li>
               </ul>
             </div>
           </li>
           <li></li>
   </ul>
 </div>
<!--     <a href="#" data-activates="slide-out" class="button-collapse"><i  style="color:red" class="medium material-icons">toc</i></a> -->
<!--=====================================FIN DE MENU LATERAL DESPLEGABLE RESPONSIVE ==================================================-->




<!--======================================INICIO DEL EL CUERPO DEL REGISTRO =========================================================-->



<!--==========Inicio de el sideNav para el Registro de usuarios ==========================================-->
<ul id="slide-out_2"  class="side-nav" style="width:800px" >

  <li>
    <div class="userView" class="col s6 m7 l12">
       <div class="background" class="col s6 m7 l12">
         <img src="assets/img/bannerRegistro1.jpg">
       </div>
<!--Las dos lineas siguientes es para colocar el nombre de usurio en sesion-->
       <a href="#!name"><span class="white-text name">Alex M.Luna</span></a>
       <a href="#!email"><span class="white-text email">cheeto12@gmail.com</span></a>
     </div></li>
     <nav>
        <div class="nav-wrapper">
          <a href="#!" class="brand-logo" >Logo</a>
          <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
          <ul class="right hide-on-med-and-down">
            <li><a href="sass.html">Sass</a></li>
            <li><a href="badges.html">Components</a></li>
            <li><a href="collapsible.html">Javascript</a></li>
            <li><a href="mobile.html">Mobile</a></li>
          </ul>
          <ul class="side-nav" id="mobile-demo">
            <li><a href="sass.html">Sass</a></li>
            <li><a href="badges.html">Components</a></li>
            <li><a href="collapsible.html">Javascript</a></li>
            <li><a href="mobile.html">Mobile</a></li>
          </ul>
        </div>
      </nav>
    <div  class="container contact">

     <br>
     <h5>Registro Usuarios </h5>
     <h6>Completar con los datos correspondientes</h6>
     <hr>

         <div class="row">
           <div class="col s6 m10 l9">
             <div class="row">

             <form id="formulario" action="<?php echo $helper->url("usuarios","crear"); ?>" method="post" class="col s7 m10 l9" >
             <div >
                 <div class="row"><!---INICIO DE LA PRIMERA FILA-->
                   <div class="input-field col s6 m5 l6 ">
                     <input id="first_name" type="text" name="nombre" class="form-control"  class="validate">
                     <label for="first_name"> <i class="small material-icons">face</i> &nbsp;Nombre</label>
                   </div>

   <!--INICIO DE COLUMNA APELLIDO-->
               <div class="input-field col s6 m5 l6  ">
                 <input  id="last_name" type="text" name="apellido" class="validate" class="form-control">
                 <label for="last_name" >  <i class="small material-icons">recent_actors</i>&nbsp;Apellido</label>
               </div>
             </div><!--FIN DEL DIV DE LA PRIMERA FILA -->

   <!--INICIO DE LA FILA 2-->
   <!--INICION DE COLUMNA DEL CEDULA-->
                 <div class="row"><!--INICIO DEL DIV DE LA SEGUNDA FILA-->
                   <div class="input-field col s6 m5 l6 ">
                     <input id="cedula"  type="text" name="cedula" class="validate"  class="form-control"/>
                     <label for="cedula"  ><i class="small material-icons">picture_in_picture</i>&nbsp; Cedula</label>
                   </div>

   <!--INICIO DE COLUMNA CONTRASENA-->
               <div class="input-field col s6 m5 l6 ">
                 <input id="password" type="password" name="contrasena" class="form-control" class="validate">
                 <label for="password" > <i class="small material-icons">perm_identity</i>&nbsp; Contraseña</label> </label>
               </div>
             </div><!--FIN DEL DIV DE LA SEGUNDA FILA-->

   <!--INICIO DE LA TERCERA FILA-->
   <!--INICIO DE LA COLUMNA PUESTO EN INSTITUCION-->
           <div class="row"><!--INICIO DE TERCERA FILA-->
               <div class="row">
                 <div class="input-field col s12 m10 l12">
                   <input id="puesto" type="text" name="puesto" class="form-control" class="validate">
                   <label for="puesto"><i class="small material-icons">description</i>&nbsp;Puesto en institucion </label>
                 </div>
               </div>
             </div><!--FIN DE LA TERCERA FILA-->

   <!--INICIO DE LINEAS PARA EL CORREO-->
     <div class="row">
       <div class="col s12 m10 l12">
         Escriba su correo electronico correctamente:
               <div class="row">
                 <div class="input-field">
            <input id="email" type="email" name="email" class="validate" class="form-control">
            <label for="email" data-error="wrong" data-success="right"><i class="small material-icons"> email </i></label>
          </div>
        </div>
      </div>
     </div>


  <!--BOTON QUE ME ENVIA EL FORMULARIO-->
             <button class="waves-effect waves-light btn" value="enviar" type="submit" name="action">Enviar<i class="mdi-content-send right"></i></button>

             <button  class="waves-effect waves-light btn " value="reset" type="reset" name="action">Limpiar<i class="mdi-content-send right"></i></button>


           </div>

         </form>
           </div>

         </div>
       </div>

  </div><!--FIN DE container-contact-->
  </ul>

<!--======================= Fin de lineas de Registro Usuarios  ==========================================================-->






<!--========================================= Inicio del listado de Usuarios ================================-->
    <div class="container contact">
        <div class="collection">


    <a href="" class="collection-item">
      <!--===posible prevista para generar un numero que me indica cuantos usuarios hay registrados en la base de datos =====-->
      <h5><i class="tiny material-icons">visibility</i><span class="new badge">4</span> Lista de Usuarios </h5></a>
    </div>
    <section class="z-depth-5" class="col-lg-18 usuario" style="height:400px;overflow-y:scroll;">
     <br>

     <div class="row">
     <div class="col s12">
       <ul class="tabs">
         <li class="tab col s1"><a href="#test1">ID</a></li>
         <li class="tab col s2"><a class="active" href="#test2">Nombre y Apellido</a></li>
         <li class="tab col s2"><a href="#test3">Cedula/Pasaporte</a></li>
         <li class="tab col s2"><a href="#test4">Email</a></li>
       </ul>
     </div>
  <!--   <div id="test1" class="col s12">Test 1</div>
     <div id="test2" class="col s12">Test 2</div>
     <div id="test3" class="col s12">Test 3</div>
     <div id="test4" class="col s12">Test 4</div> -->
   </div>

    <?php foreach($allusers as $user) { //RECORREMOS EL ARRAY DE OBJETOS Y OBTENEMOS EL VALOR DE LAS PROPIEADES ?>
      &nbsp;&nbsp;<?php echo $user->id; ?> -------
      <?php echo $user->nombre; ?>
      <?php echo $user->apellido; ?> -------
      <?php echo $user->cedula; ?> -------
      <?php echo $user->email; ?>
        <a href="<?php echo $helper->url("usuarios","borrar"); ?>&id=<?php echo $user->id; ?>"><i class="small material-icons right">delete</i></a>
    <hr>
      <?php } ?>
    </section>
</div><!--fin del contenedor de los usuarios-->

<!--============================================= Fin del cuerpo del codigo =======================================================-->

<!--============================================= PROBANDO TABLA CON DATOS =======================================================-->
<table class="responsive-table">
        <thead>
          <tr>
              <th data-field="id">ID</th>
              <th data-field="name"> Nombre </th>
              <th data-field="last name"> Apellido</th>
              <th data-field="identity"> Cedula/Pasaporte</th>
              <th data-field="email"> Email</th>
          </tr>
        </thead>
<?php
require_once ('core/Conectar.php');
$query=("SELECT * FROM usuarios ORDER BY id DESC");
$result = mysql_query($query);

while($registro = mysql_fetch_array($result)){
  echo"
  <tr>
    <td>".$registro['id']."</td>
    <td>".$registro['nombre']."</td>
    <td>".$registro['apellido']."</td>
    <td>".$registro['cedula']."</td>
    <td>".$registro['email']."</td>
  </tr>
";
}
?>
<?php
$numero = mysql_num_rows($result);
echo"
  <thead>
    <th>
      Usuarios registrados actualmente: $numero.
    </th>
  </thead>
";
 ?>
<!--
        <tbody>
          <tr>
            <td>123</td>
            <td>Nombre</td>
            <td>Apellido</td>
            <td>Cedula/Pasaporte</td>
            <td>Email</td>
          </tr>
          <tr>
            <td>124</td>
            <td>Nombre</td>
            <td>Apellido</td>
            <td>Cedula/Pasaporte</td>
            <td>Email</td>
          </tr>
          <tr>
            <td>125</td>
            <td>Nombre</td>
            <td>Apellido</td>
            <td>Cedula/Pasaporte</td>
            <td>Email</td>
          </tr>
        </tbody>
      </table>-->
<!--============================================= PROBANDO TABLA CON DATOS =======================================================-->

<footer class="page-footer">
     <div class="container">
       <div class="row">
         <div class="col s12 m7 l6 ">
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
     <div style="align-items:center" class="footer-copyright">
       <div style=""class="container">
       © 2016 Copyright Sistema Registro Visitacion, Area Conservacion Guanacaste
       <a class="grey-text text-lighten-4 right" href="#!">Mas Links</a>
       </div>
     </div>
   </footer>
  </body>
</html>


<!--  <footer class="page-footer">
        <div class="container">
          <div class="row">
            <div class="col l4 s12">
              <h5 class="white-text">Ayuda a crecer a Materialize</h5>
              <p class="grey-text text-lighten-4">We hope you have enjoyed using Materialize! If you feel Materialize has helped you out and want to support the team, send us over a donation! Any amount would help support and continue development on this project and is greatly appreciated.</p>
              <form id="paypal-donate" action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
  <input name="cmd" value="_s-xclick" type="hidden">
  <input name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----
  " type="hidden">
  <button class="btn waves-effect waves-light red lighten-3" type="submit" name="action" alt="PayPal - The safer, easier way to pay online!">Done Ahora</button>
  </form>

            </div>
            <div class="col l4 s12">
              <h5 class="white-text">Únete al debate</h5>
              <p class="grey-text text-lighten-4">We have a Gitter chat room set up where you can talk directly with us. Come in and discuss new features, future goals, general problems or questions, or anything else you can think of.</p>
              <a class="btn waves-effect waves-light red lighten-3" target="_blank" href="https://gitter.im/Dogfalo/materialize">Chat</a>
            </div>
            <div class="col l4 s12" style="overflow: hidden;">
              <h5 class="white-text">Conectar</h5>
              <iframe src="http://ghbtns.com/github-btn.html?user=dogfalo&amp;repo=materialize&amp;type=watch&amp;count=true&amp;size=large" allowtransparency="true" scrolling="0" width="170" height="30" frameborder="0"></iframe>
              <br>
              <iframe id="twitter-widget-0" scrolling="no" allowtransparency="true" class="twitter-follow-button twitter-follow-button-rendered" style="position: static; visibility: visible; width: 302px; height: 28px;" title="Twitter Follow Button" src="http://platform.twitter.com/widgets/follow_button.2dbd32894063b53338de1c1d4a747ea9.es.html#dnt=true&amp;id=twitter-widget-0&amp;lang=es&amp;screen_name=MaterializeCSS&amp;show_count=true&amp;show_screen_name=true&amp;size=l&amp;time=1479336236270" data-screen-name="MaterializeCSS" frameborder="0"></iframe>
              <br>
              <div style="text-indent: 0px; margin: 0px; padding: 0px; background: transparent none repeat scroll 0% 0%; border-style: none; float: none; line-height: normal; font-size: 1px; vertical-align: baseline; display: inline-block; width: 145px; height: 24px;" id="___follow_0"><iframe hspace="0" marginheight="0" marginwidth="0" scrolling="no" style="position: static; top: 0px; width: 145px; margin: 0px; border-style: none; left: 0px; visibility: visible; height: 24px;" tabindex="0" vspace="0" id="I0_1479336235318" name="I0_1479336235318" src="https://apis.google.com/u/0/_/widget/render/follow?usegapi=1&amp;annotation=bubble&amp;height=24&amp;rel=publisher&amp;origin=http%3A%2F%2Fmaterializecss.com&amp;url=https%3A%2F%2Fplus.google.com%2F108619793845925798422&amp;gsrc=3p&amp;ic=1&amp;jsh=m%3B%2F_%2Fscs%2Fapps-static%2F_%2Fjs%2Fk%3Doz.gapi.es.8XNlBfHAFiM.O%2Fm%3D__features__%2Fam%3DAQ%2Frt%3Dj%2Fd%3D1%2Frs%3DAGLTcCNM9ZXi3lf3fI5DITzHrzLPb70ebQ#_methods=onPlusOne%2C_ready%2C_close%2C_open%2C_resizeMe%2C_renderstart%2Concircled%2Cdrefresh%2Cerefresh%2Conload&amp;id=I0_1479336235318&amp;parent=http%3A%2F%2Fmaterializecss.com&amp;pfname=&amp;rpctoken=13852913" data-gapiattached="true" width="100%" frameborder="0"></iframe></div>
            </div>
          </div>
        </div>
        <div class="footer-copyright">
          <div class="container">© 2014-2016 Materialize, All rights reserved. <a class="grey-text text-lighten-4 right" href="https://github.com/Dogfalo/materialize/blob/master/LICENSE">MIT License</a> </div>
        </div>
      </footer>-->
