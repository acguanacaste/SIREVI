<header>
  <nav class="top-nav">
    <div class="container">
      <div class="nav-wrapper"><a class="page-title"></a>
        <a href="#!"  class="brand-logo">Areas (asp)</a>
          <ul class="right hide-on-med-and-down" class="fixed-action-btn toolbar">

          <li><a href="Index.php"><i class="material-icons right">home</i>Inicio</a></li>

        </ul>
      </div>
      <a href="#" data-activates="slide-out"  class="button-collapse"><i class=" small material-icons">toc</i></a>
    </div>
  </nav>


<!--==================================   Inicio de la barra lateral y desplegable ===================================================-->
      <ul id="slide-out" class="side-nav fixed">
        <li><div class="userView"><!-- Imagen avatar e informacion -->
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

  <!--============================= Fin de la Barra del buscador ===========================================================-->
          <hr>
          <li class="divider"> </li>

  <!--============================= Inicio de los modulos del sistemas ====================================================-->
        <li class="no-padding">
          <ul class="collapsible collapsible-accordion">
            <li><a href="index.php?c=ASP&a=agregarRegistro">  <i class="small material-icons">playlist_add</i>Realizar Registro</a></li>

            <li class="bold"><a class="collapsible-header  waves-effect waves-teal">
              <img class="circle" src="assets/img/opcionesModulos.png"> Modulos del sistema</a>

                <div class="collapsible-body" style="display: block;">
                <ul>

                  <li><a href="index.php?c=Usuario"   > Modulo Usuarios</a></li>
                  <li><a href="index.php?c=Pais"      > Modulo Pais</a></li>
                  <li><a href="index.php?c=Provincia" > Modulo Provincia</a></li>
                  <li><a href="index.php?c=Sector"    > Modulo Sector</a></li>
                  <li><a href="index.php?c=Sendero"   > Modulo Sendero</a></li>
                  <li><a href="index.php?c=ASP"       > Modulo Area Silvestre(asp)</a></li>
                </ul>
              </div>
            </li>
          </ul>
        </li>
<!--============================= Fin de la Barra del buscador ===========================================================-->

<!--============================= Inicio de lista de links para informacion ===========================================================-->
    <li class="bold"><a href="http://www.acguanacaste.ac.cr/" class="waves-effect waves-teal">
      <img class="circle" src="assets/img/logoACG.png"> Area Conservacion Guanacaste</a>
    </li>

    <li class="bold"><a href="http://www.acguanacaste.ac.cr/turismo/sector-santa-rosa" class="waves-effect waves-teal">
      <img class="circle" src="assets/img/SantaRosaLogo.jpg"> Informacion del Sector</a></a>
    </li>

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
      </ul>
    </li>

    <li class="bold"><a href="http://www.acguanacaste.ac.cr/biodesarrollo/programa-de-ecoturismo" class="collapsible-header  waves-effect waves-teal">
      <img class="circle" src="assets/img/tortuga.jpg"> Programa Ecoturismo</a></a>
      <li class="active"><a class="collapsible-header active waves-effect waves-teal">
        <i class="small material-icons">perm_identity</i>Sesion</a>
        <div class="collapsible-body" style="display: block;">
          <ul>
            <li><a href="Index.php"> Pagina inicio</a></li>
            <li><a href="">Cerrar sesion</a></li>
          </ul>
        </div>
      </li>
    <li> &nbsp;</li>
  </li>


    </ul><!--Fin del slide out-->
<!--============================= Fin de la lista de links para informacion ===========================================================-->

</header>
<main>
  <div class="container">
    <div class="row">

      <div class="col s12 m5 l10">
<!-- Inicio de mi codigo -->
        <div id="search-docs" class="section scrollspy">
          <section class="col-lg-18 provincia" style="height:400px;overflow-y:scroll;">

            <table class="responsive-table">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Nombre</th>
                  <th>Tipo</th>
                  <th>Area Conservacion</th>
                  <th style="width:30px;"></th>
                  <th>Accion</th>
                  <th></th>
                  <th style="width:60px;"></th>
                </tr>
              </thead>
              <tbody>
                <?php foreach($this->model->Listar() as $r): ?>
                  <tr>
                    <td><?php echo $r->id; ?>                </td>
                    <td><?php echo $r->nombre; ?>            </td>
                    <td><?php echo $r->tipo; ?>              </td>
                    <td><?php echo $r->area_conservacion; ?> </td>

                    <td>
                      <a href="?c=ASP&a=Modificar&id=<?php echo $r->id; ?>"><i class="small material-icons right">edit</i></a>
                    </td>
                    <td>
                      <a onclick="javascript:return confirm('¿Seguro de eliminar este registro ?');" href="?c=ASP&a=Eliminar&id=<?php echo $r->id; ?>">
                        <i class="small material-icons right">delete</i></a>
                      </td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </section>
            <hr>
          </div>
        </div><!-- Div de los tamanos -->

        <div class="col hide-on-small-only m3 l2">
          <div class="toc-wrapper pin-top" style="top: 0px;">
            <div class="buysellads hide-on-small-only">
              <!-- CarbonAds Zone Code -->
              <script async="" type="text/javascript"
              src="" id="_carbonads_js"></script>
              <div id="carbonads">
                <span>
                  <span class="carbon-wrap">
                    <a href="" class="carbon-img" target="_blank">
                      <img src="" alt="Imagen no disponible" style="max-width: 130px;" height="100" border="0" width="130"></a>
                      <br>
                      <a href="" class="carbon-text" target="_blank">Algo mas de texto</a></span>
                      <br>
                      <a href="http://carbonads.net/" class="carbon-poweredby" target="_blank">Un texto mas...</a></span></div>
                  </div>
                  <div style="height: 1px;">
                    <ul class="section table-of-contents">
                      <li>Puedo poner lista de items</li>

<!--===============================================================================================================-->
                    </ul>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </main>
</body>
