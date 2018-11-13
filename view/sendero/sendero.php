<main>
<div class="container">
  <h4 class="header left">Módulo de Senderos</h4>


  <a href="index.php?c=Sendero&a=agregarRegistro">
    <span class="hide-on-med-and-up">
      <i class="small material-icons blue-grey darken-2 z-depth-1 btn-floating pulse">playlist_add</i>Agregar Sendero</a>

  <div class="right hide-on-small-only">
    <a href="index.php?c=Sendero&a=agregarRegistro"><i class="small material-icons blue-grey darken-2 z-depth-1 btn-floating pulse">playlist_add</i>Agregar Sendero</a>
  </div>
</div>


<div class="container">
  <div class="row">
    <div class="col s12 m12 l12">
      <!--Inicio de mi codigo-->
      <table class="responsive-table grey lighten-1 centered highlight z-depth-5">
        <thead class="white-text teal darken-4 z-depth-2">
            <tr>
              <th>Sendero</th>
              <th>Sector</th>
              <th>Caracterización</th>
              <th>Tipo</th>
              <th style="width:40px;"></th>
              <th colspan="3">Acción</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($this->model->Listar() as $r): ?>
              <tr>

                <td><?php echo $r->Sendero; ?></td>
                <td><?php echo $r->Sector; ?></td>
                <td><?php echo $r->caracterizacion_sendero; ?></td>
                <td><?php echo $r->tipo_sendero; ?></td>

                <td>
                  <a href="?c=Sendero&a=Descripcion&id=<?php echo $r->id; ?>">
                    <i class="circle white small material-icons right z-depth-2 tooltipped"
        							data-position="top" data-delay="50" data-tooltip="Descripción">description</i></a>
                </td>

                <td>
                  <a title="Editar Información" href="?c=Sendero&a=Modificar&id=<?php echo $r->id; ?>">
                    <i class="circle white small material-icons right z-depth-2 tooltipped"
        							data-position="top" data-delay="50" data-tooltip="Modificar">edit</i></a>
                </td>

                <td>
                  <a title="Borrar Información" onclick="return confirm('¿Estas a un paso de borrar un registro, seguro deseas continuar?');"
                    href="?c=Sendero&a=Eliminar&id=<?php echo $r->id; ?>">
                  <i class=" circle white small material-icons right z-depth-2 tooltipped"
                    data-position="top" data-delay="50" data-tooltip="Eliminar">delete</i></a>
                </td>
                <td>

                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
        </div><!-- Div de los tamanos -->
    </div>
  </div>
</main>
