<<<<<<< refs/remotes/origin/master
<main>
  <div class="container">
    <h4 class="header left hide-on-med-and-down"> Áreas Protegidas</h4>
    <h4 class="header left hide-on-large-only"> Áreas <br> Protegidas</h4>
<?php if ($_SESSION['usuario']['puesto'] == 1):?>
    <a href="index.php?c=ASP&a=agregarRegistro"><span class="hide-on-med-and-up">
      <i class="small material-icons blue-grey darken-2 z-depth-1 btn-floating pulse">playlist_add</i>Área Protegida</a>

      <div class="right right hide-on-small-only">
        <a href="index.php?c=ASP&a=agregarRegistro" >
          <i class="small material-icons blue-grey darken-2 z-depth-1 btn-floating pulse">playlist_add</i>Agregar Área Silvestre</a>
    </div>
  <?php endif; ?>
  </div>
  <div class="container">
  <div class="row">
      <div class="col s12 m12 l12">
      <!-- Inicio de mi codigo -->
        <table class="responsive-table grey lighten-1 centered highlight z-depth-5">
          <thead class="white-text teal darken-4 z-depth-2">
            <tr>
              <th>Área Conservación</th>
              <th>Tipo</th>
              <th colspan="2">Ubicación geográfica</th>
              <th style="height:75px;" colspan="2">Acción</th>
            </tr>
          </thead>
          <tbody >
            <?php foreach ($this->model->Listar() as $r): ?>
              <tr >
                <td><?php echo $r->nombre; ?></td>
                <td><?php echo $r->tipo; ?></td>
                <td>
                    <a  href="?c=ASP&a=UbicacionASP&id=<?php echo $r->id; ?>"><i
                      class="circle white small material-icons right z-depth-2 tooltipped"
                        data-position="top" data-delay="50" data-tooltip="Ubicación geográfica">art_track</i></a>
                </td>

<?php if ($_SESSION['usuario']['puesto'] == 1):?>
                <td>
                  <a title="Editar Información" href="?c=ASP&a=Modificar&id=<?php echo $r->id; ?>"><i
                    class="circle white small material-icons right z-depth-2">edit</i></a>
                  </td>
                  <td>
                    <a title="Borrar Información" onclick="return confirm('Estas a un paso de borrar un registro, seguro deseas continuar?');"
                    href="?c=ASP&a=Eliminar&id=<?php echo $r->id; ?>">
                    <i class=" circle white small material-icons right z-depth-2">delete</i></a>
                  </td>
                <?php endif; ?>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>

      </div><!-- Div de los tamanos -->
    </div><!--Div row -->
  </div><!--div del container-->
</main>
=======

<main>
  <div class="container">

            <h4 class="header left"> Areas Protegidas</h4>
            <div class="right">
                <a href="index.php?c=ASP&a=agregarRegistro"> <i class="small material-icons">playlist_add</i>Agregar Area Silvestre</a>
            </div>

    </div>
    <div class="container">
    <div class="row">

        <div class="col s12 m12 l12">
            <!-- Inicio de mi codigo -->
            <div id="search-docs" class="section scrollspy">
                <section class="col-lg-18 ASP">
                    <table class="responsive-table striped">
                        <thead>
                        <tr>

                            <th>ASP</th>
                            <th>Tipo</th>
                            <th>Area </th>
                            <th style="width:40px;"></th>
                            <th colspan="2">Accion</th>

                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($this->model->Listar() as $r): ?>
                            <tr>

                                <td><?php echo $r->nombre; ?></td>
                                <td><?php echo $r->tipo; ?></td>
                                <td><?php echo $r->area_conservacion; ?></td>

                                <td>
                                    <a href="?c=ASP&a=Modificar&id=<?php echo $r->id; ?>"><i
                                                class="small material-icons right">edit</i></a>
                                </td>
                                <td>
                                    <a onclick="return confirm('¿Seguro de eliminar este registro?');"
                                       href="?c=ASP&a=Eliminar&id=<?php echo $r->id; ?>">
                                        <i class="small material-icons right">delete</i></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </section>
                <hr>
            </div><!-- search-docs -->
        </div><!-- Div de los tamanos -->
    </div>
    </div>
    </main>
>>>>>>> add some changes for development
