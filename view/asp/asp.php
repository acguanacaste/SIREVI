<main>
  <div class="container">
    <h4 class="header left hide-on-med-and-down"> Áreas Protegidas</h4>
    <h4 class="header left hide-on-large-only"> Áreas <br> Protegidas</h4>
<?php if ($_SESSION['usuario']['puesto'] == 1):?>
    <a href="index.php?c=ASP&a=agregarRegistro"><span class="hide-on-med-and-up">
      <i class="small material-icons blue-grey darken-2  btn-floating pulse">playlist_add</i>Área Protegida</a>

      <div class="right right hide-on-small-only">
        <a href="index.php?c=ASP&a=agregarRegistro" >
          <i class="small material-icons blue-grey darken-2  btn-floating pulse">playlist_add</i>Agregar Área Silvestre</a>
    </div>
  <?php endif; ?>
  </div>
  <div class="container">
  <div class="row">
      <div class="col s12 m12 l12">
      <!-- Inicio de mi codigo -->
        <table class="responsive-table grey lighten-1 centered highlight z-depth-5">
          <thead class="white-text teal darken-4 ">
            <tr>
              <th>Área Conservación</th>
              <th>Tipo</th>
              <th style="width:80px;">Ubicación geográfica</th>
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
                      class="circle white small material-icons right  tooltipped"
                        data-position="top" data-delay="50" data-tooltip="Ubicación geográfica">art_track</i></a>
                </td>

<?php if ($_SESSION['usuario']['puesto'] == 1):?>
                <td style="height:55px;">
                  <a title="Editar Información" href="?c=ASP&a=Modificar&id=<?php echo $r->id; ?>"><i
                    class="circle white small material-icons right  tooltipped"
                      data-position="top" data-delay="50" data-tooltip="Modificar Información">edit</i></a>
                  </td>
                  <td>
                    <a title="Borrar Información" onclick="return confirm('Estas a un paso de borrar un registro, seguro deseas continuar?');"
                    href="?c=ASP&a=Eliminar&id=<?php echo $r->id; ?>">
                    <i class=" circle white small material-icons right  tooltipped"
                      data-position="top" data-delay="50" data-tooltip="Eliminar Información">delete</i></a>
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
