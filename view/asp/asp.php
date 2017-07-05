<main>
  <div class="container">
    <h4 class="header left"> Áreas Protegidas</h4>
    <a href="index.php?c=ASP&a=agregarRegistro"><span class="hide-on-med-and-up"><i class="small material-icons">playlist_add</i>Área Protegida</a>



      <div class="right right hide-on-small-only">
        <a href="index.php?c=ASP&a=agregarRegistro" ><i class="small material-icons">playlist_add</i>Agregar Área Silvestre</a>
    </div>
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
              <th>Ubicacion geografica</th>
              <th style="width:30px;"></th>
              <th colspan="2">Acción</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($this->model->Listar() as $r): ?>
              <tr>
                <td><?php echo $r->nombre; ?></td>
                <td><?php echo $r->tipo; ?></td>
                <td><?php echo $r->ubicacion; ?></td>
                <td>
                  <a title="Editar Información" href="?c=ASP&a=Modificar&id=<?php echo $r->id; ?>"><i
                    class="circle small material-icons right z-depth-2">edit</i></a>
                  </td>
                  <td>
                    <a title="Borrar Información" onclick="return confirm('Estas a un paso de borrar un registro, seguro deseas continuar?');"
                    href="?c=ASP&a=Eliminar&id=<?php echo $r->id; ?>">
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
