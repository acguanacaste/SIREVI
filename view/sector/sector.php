
<main>
  <div class="container">
    <h4 class="header left">Módulo de Sectores</h4>
    <a href="index.php?c=Sector&a=agregarRegistro"><span class="hide-on-med-and-up"><i class="small material-icons">playlist_add</i>Nueva Visitación</a>


    <div class="right hide-on-small-only">
      <a href="index.php?c=Sector&a=agregarRegistro"><i class="small material-icons">playlist_add</i>Nuevo Sector</a>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col s12 m12 l12">
        <table class="responsive-table grey lighten-1 centered highlight z-depth-5">
          <thead class="white-text teal darken-4 z-depth-2">
              <tr>
                <th>Nombre</th>
                <th>Diario</th>
                <th>Camping</th>
                <th>Área</th>
                <th style="width:40px;"></th>
                <th colspan="2">Acción</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($this->model->Listar() as $r): ?>
                <tr>
                  <td><?php echo $r->Sector; ?></td>
                  <td ><?php echo $r->capacidad_diaria; ?></td>
                  <td><?php echo $r->capacidad_acampar; ?></td>
                  <td><?php echo $r->Area_Silvestre; ?></td>

                  <td>
                    <a title="Editar Información" href="?c=Sector&a=Modificar&id=<?php echo $r->id; ?>">
                      <i class="circle small material-icons right z-depth-2">edit</i></a>
                  </td>

                  <td>
                    <a title="Borrar Información" onclick="return confirm('¿Estas a un paso de borrar un registro, seguro deseas continuar?');"
                      href="?c=Sector&a=Eliminar&id=<?php echo $r->id; ?>">
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
