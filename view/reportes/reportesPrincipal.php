<?php if ($_SESSION['usuario']['puesto'] == 1 || $_SESSION['usuario']['puesto'] == 3 ):?>
    <br>
<body class="body">
  <main>
    <div class="container">
      <h4 class="header-left"><span>&nbsp;</span><i class="medium material-icons circle blue-text">poll</i>
        <a href="#">Módulo Reportes</a></h4>

    </div>
    <div class="container">
      <div class="row">
        <div class="col s12 m12 l12">
        <!-- Inicio de mi codigo -->
        <table class="responsive-table grey lighten-1 centered highlight z-depth-5">
          <ul class="collection">

            <li class="collection-item avatar">
              <img src="assets/img/sectores.jpg" alt="Imagen no disponible" class="circle">
              <a><p><a href="?c=Visitacion&a=">Reporte Diario</a><br>
                <span class="hide-on-small-only">
                  A través de este enlace se realiza la creación de un reporte <br>
                  para consultar el total de ingresos a el sector </span>
                </p></a>
                <a href="?c=Visitacion&a=" class="secondary-content tooltipped " data-position="left" data-delay="50" data-tooltip="Reporte Sectores">
              <span class="hide-on-small-only"><i class="medium material-icons">description</i></span></a>
            </li>


            <li class="collection-item avatar">
              <img src="assets/img/paises.jpg" alt="Imagen no disponible" class="circle">
              <a><p><a href="?c=Visitacion&a=Reporte">Reporte Nacionales</a><br>
                <span class="hide-on-small-only">
                  A través de este enlace se realiza la creación del reporte <br>
                  de personas nacionales agrupadas por provincia</span>
                </p></a>
                <a href="?c=Visitacion&a=Reporte" class="secondary-content tooltipped " data-position="left" data-delay="50" data-tooltip="Reporte Nacionalidades">
              <span class="hide-on-small-only"><i class="medium material-icons">public</i></span></a>
            </li>



            <li class="collection-item avatar">
              <img src="assets/img/sectores.jpg" alt="Imagen no disponible" class="circle">
                <a><p><a href="?c=Visitacion&a=">Reporte Sectores</a><br>
                <span class="hide-on-small-only">
                A través de este enlace se realiza la creación de un reporte para consultar el total <br>
                de personas que ingreso en cada mes a cada uno de los sectores del A.C.G </span>
                </p></a>
                <a href="?c=Visitacion&a=" class="secondary-content tooltipped " data-position="left" data-delay="50" data-tooltip="Reporte Sectores">
              <span class="hide-on-small-only"><i class="medium material-icons">view_quilt</i></span></a>
            </li>

            <li class="collection-item avatar">
              <img src="assets/img/sectores.jpg" alt="Imagen no disponible" class="circle">
              <a><p><a href="?c=Visitacion&a=">Reporte Campistas</a><br>
                <span class="hide-on-small-only">
                  A través de este enlace se realiza la creación de un reporte para consultar el total <br>
                  de personas que se quedaron acampando en el sector</span>
                </p></a>
                <a href="?c=Visitacion&a=" class="secondary-content tooltipped " data-position="left" data-delay="50" data-tooltip="Reporte Sectores">
                <span class="hide-on-small-only"><i class="medium material-icons">view_quilt</i></span></a>
            </li>

          </ul>
        </table>
      </div><!-- Div de los tamanos -->
    </div>
    </div><!--Div container-->
  </main>
<?php endif; ?>
