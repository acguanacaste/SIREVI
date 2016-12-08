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
            $('.fixed-action-btn').openFAB();
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
           $(document).ready(function(){
              // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
              $('.modal').modal();
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
                  <li><a href=""><img class="circle" src="assets/img/sendero-indio-desnudo.jpg">Registro Sendero </a></li>
                  <li><a href="">Registro Pais </a></li>
                  <li><a href="">Registro Provincia </a></li>
                  <li><a href="">Registro Area Sivestre Protegida(ASP) </a></li>
                </ul>
              </div>
            </nav>
          </div><!--Fin de div bs=uscador-->
        <div class="input-field">
      </form>

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

                        <li class="bold"><a class="collapsible-header  waves-effect waves-teal">
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
<!-- Navbar goes here -->
<nav>
   <div class="nav-wrapper">

     <a href="#!" class="brand-logo">&nbsp; SIREVI</a>
     <ul class="right hide-on-med-and-down" class="fixed-action-btn toolbar">
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
             <li><a href="http://localhost/Registro_Responsive_usuarios_v2/view/menu_principal.php"><i class="material-icons right">view_module</i>Inicio</a></li>
           </ul>
             <a href="#" data-activates="slide-out" class="button-collapse"><i  style="color:white" class="medium material-icons">toc</i></a>
         </div>


 </nav>
    <!-- Page Layout here -->
    <div class="row">

      <div class="col s12 m4 l3"> <!-- Note that "m4 l3" was added -->
        <!-- Grey navigation panel

              This content will be:
          3-columns-wide on large screens,
          4-columns-wide on medium screens,
          12-columns-wide on small screens  -->

      </div>

      <div class="col s12 m8 l9"> <!-- Note that "m8 l9" was added -->
        <!-- Teal page content

              This content will be:
          9-columns-wide on large screens,
          8-columns-wide on medium screens,
          12-columns-wide on small screens  -->

      </div>

    </div>
    <fieldset style="width:480px" 	>
          <legend>Editar Empleado</legend>
          <form action="" method="post">
            <table>
              <tr>
                <td><label for="id">Id de empleado:</label></td>
                <td><input type="text" name="id" id="id"/ disabled="disabled" value="<?php echo $row['id_empleado'];?>"></td>
              </tr>
              <tr>
                <td><label for="nombre">Nombre:</label></td>
                <td><input type="text" name="nombre" id="nombre"/ value="<?php echo $row['nombre'];?>"></td>
              </tr>
              <tr>
                <td><label for="email">Email:</label></td>
                <td><input type="text" name="email" id="email" value="<?php echo $row['email'];?>"/></td>
              </tr>
              <tr>
                <td><label for="telefono">Telefono:</label></td>
                <td><input type="text" name="telefono" id="telefono" value="<?php echo $row['telefono'];?>"/></td>
              </tr>
              <tr>
                <td><input type="submit" name="update" value="Actualizar"/></td>
                <td><input type="submit" name="delete" value="Eliminar" disabled="disabled"/></td>
              </tr>
            </table>
          </form>
        </fieldset>
