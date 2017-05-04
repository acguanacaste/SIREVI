<main>
  <div class="container">
    <h4 class="header left">Módulo de Senderos</h4>
    <div class="right hide-on-small-only">
      <a href="index.php?c=Sendero&a=agregarRegistro">
        <i class="small material-icons">playlist_add</i>Agregar Sendero</a>
    </div>
</div>

<div class="container">
  <div class="row">
    <div class="col s12 m12 l12">
      <!--Inicio de mi codigo-->
      <table class="responsive-table grey lighten-1 centered highlight z-depth-5">
        <thead class="white-text teal darken-4 z-depth-2">
            <tr>
              <th>Nombre</th>
              <th>Distancia</th>
              <th>Longitud</th>
              <th>Latitud</th>
              <th>Sector</th>
              <th style="width:40px;"></th>
              <th colspan="2">Acción</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($this->model->Listar() as $r): ?>
              <tr>
                <td><?php echo $r->Sendero; ?></td>
                <td><?php echo $r->distancia; ?></td>
                <td><?php echo $r->longitud; ?></td>
                <td><?php echo $r->latitud; ?></td>
                <td><?php echo $r->Sector; ?></td>

                <td>
                  <a title="Editar Información" href="?c=Sendero&a=Modificar&id=<?php echo $r->id; ?>">
                    <i class="circle small material-icons right z-depth-2">edit</i></a>
                </td>

                <td>
                  <a title="Borrar Información" onclick="return confirm('¿Estas a un paso de borrar un registro, seguro deseas continuar?');"
                    href="?c=Sendero&a=Eliminar&id=<?php echo $r->id; ?>">
                  <i class=" circle small material-icons right z-depth-2">delete</i></a>
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
