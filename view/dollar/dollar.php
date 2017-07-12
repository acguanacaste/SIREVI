<main>
  <div class="container">
    <h4 class="header left">Tipo cambio actual de dolar</h4>
    <a href="index.php?c=Dollar&a=agregarRegistro"><span class="hide-on-med-and-up"><i class="small material-icons">playlist_add</i>Agregar precio dolar</a>
  </div>
  <div class="container">
  <div class="row">
      <div class="col s12 m12 l12">
      <!-- Inicio de mi codigo -->
        <table class="responsive-table grey lighten-1 centered highlight z-depth-5">
          <thead class="white-text teal darken-4 z-depth-2">
            <tr>
              <th>Código</th>
              <th>Valor actual</th>
              <th>Último cambio</th>
              <th style="width:40px;"></th>
              <th colspan="3">Acción</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($this->model->Listar() as $r): ?>
              <tr>
                <td>000_<?php echo $r->id; ?></td>
                <td><?php echo $r->valor_dolar; ?></td>
                <td><?php echo $r->fecha_cambio; ?></td>
                <td>
                  <a title="Editar Información" href="?c=Dollar&a=Modificar&id=<?php echo $r->id; ?>"><i
                    class="circle small material-icons right z-depth-2">edit</i></a>
                  </td>
                  <td>
                  <a title="Nuevo registro" href="?c=Dollar&a=agregarRegistro"><i
                    class="circle small material-icons right z-depth-2">receipt</i></a>
                  </td>
                  <td>
                    <a title="Borrar Información" onclick="return confirm('Estas a un paso de borrar un registro, seguro deseas continuar?');"
                    href="?c=Dollar&a=Eliminar&id=<?php echo $r->id; ?>">
                    <i class=" circle small material-icons right z-depth-2">delete</i></a>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>

      </div><!-- Div de los tamanos -->
    </div><!--Div row -->
  </div><!--div del container-->
</main>
