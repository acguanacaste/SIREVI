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

              <img src="assets/img/semec.png" alt="Imagen no disponible" class="circle">
              <a><p><a href="?c=Visitacion&a=Reporte_SEMEC">Reporte SEMEC</a><br>
                <span class="hide-on-small-only">
                  A través de este enlace se realiza la creación de un reporte <br>
                  para consultar el total de ingresos a el sector </span>
                </p></a>
                <a href="?c=Visitacion&a=Reporte_SEMEC" class="secondary-content tooltipped " data-position="left" data-delay="50" data-tooltip="Reporte SEMEC">
              <span class="hide-on-small-only"><i class="medium material-icons">account_balance</i></span></a>
            </li>

            <li class="collection-item avatar">
              <img src="assets/img/sectores.jpg" alt="Imagen no disponible" class="circle">
              <a><p><a href="?c=Visitacion&a=Reporte_Diario">Reporte Diario</a><br>
              <img src="assets/img/sectores.jpg" alt="Imagen no disponible" class="circle">
                <span class="hide-on-small-only">
                  A través de este enlace se realiza la creación de un reporte <br>
                  para consultar el total de ingresos a el sector </span>
                </p></a>
                <a href="?c=Visitacion&a=Reporte_Diario" class="secondary-content tooltipped " data-position="left" data-delay="50" data-tooltip="Reporte Diario">
                <span class="hide-on-small-only"><i class="medium material-icons">description</i></span></a>
            </li>


            <li class="collection-item avatar">
              <img src="assets/img/paises.jpg" alt="Imagen no disponible" class="circle">
              <a ><p><a href="?c=Visitacion&a=NacionalesAgrupadosXProvincia">Reporte Paises</a><br>
                <span class="hide-on-small-only">
                  A través de este enlace se realiza la creación del reporte <br>
                  de personas nacionales agrupadas por provincia y de los  <br>
                  personas de otros paises </span>
                </p></a>
                <a href="?c=Visitacion&a=NacionalesAgrupadosXProvincia" class="secondary-content tooltipped " data-position="left" data-delay="50" data-tooltip="Reporte Nacionalidades">
                <span class="hide-on-small-only"><i class="medium material-icons">public</i></span></a>
            </li>

            <li class="collection-item avatar">
              <img src="assets/img/sectores.jpg" alt="Imagen no disponible" class="circle">
                <a><p><a href="?c=Visitacion&a=Reporte_Totales_por_Sector">Reporte Totales por Sector </a><br>
                <span class="hide-on-small-only">
                  Este reporte es el que me muestra los totales <br>
                  correspondientes a un mes completo o al rango <br>
                  seleccionado por usuario para cada uno de los sectores </span>
                </p></a>
                <a href="?c=Visitacion&a=Reporte_Totales_por_Sector" class="secondary-content tooltipped " data-position="left" data-delay="50" data-tooltip="Totales por Sector">
                <span class="hide-on-small-only"><i class="medium material-icons">view_quilt</i></span></a>
            </li>

            <li class="collection-item avatar">
              <img src="assets/img/sectores.jpg" alt="Imagen no disponible" class="circle">
              <a><p><a href="?c=Visitacion&a=Reporte_Campistas">Reporte Campistas</a><br>
                <span class="hide-on-small-only">
                  A través de este enlace se realiza la creación de un reporte<br>
                  para consultar el total de personas <br> que se acampando en el sector</span>
                </p></a>
                <a href="?c=Visitacion&a=Reporte_Campistas" class="secondary-content tooltipped " data-position="left" data-delay="50" data-tooltip="Reporte Campistas">
                <span class="hide-on-small-only"><i class="medium material-icons">people</i></span></a>
            </li>

            <li class="collection-item avatar">
              <img src="assets/img/Totales_ACG.pNg" alt="Imagen no disponible" class="circle">
                <a><p><a href="?c=Visitacion&a=">Reporte Totales ACG </a><br>
                <span class="hide-on-small-only">
                  Este reporte es el que me muestra los totales <br>
                  correspondientes a TODOS LOS SECTORES <br>
                  en un rango de fecha establecido por usuario </span>
                </p></a>
                <a href="?c=Visitacion&a=" class="secondary-content tooltipped " data-position="left" data-delay="50" data-tooltip="Totales por Sector">
                <span class="hide-on-small-only"><i class="medium material-icons">satellite</i></span></a>
            </li>

          </ul>
        </table>
      </div><!-- Div de los tamanos -->
    </div>
    </div><!--Div container-->
  </main>
<?php endif; ?>
