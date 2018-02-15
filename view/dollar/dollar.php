<main>
  <div class="container">
    <h4 class="header left">Tipo cambio actual de dolar</h4>
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
                  <a class="tooltipped" data-position="top" data-delay="50" data-tooltip="Modificar"
                   href="?c=Dollar&a=Modificar&id=<?php echo $r->id; ?>">
                   <i class="circle white small material-icons right z-depth-2">edit</i></a>
                  </td>

                  <td>
                  <a class="tooltipped" data-position="top" data-delay="50" data-tooltip="Registrar"
                   href="?c=Dollar&a=agregarRegistro"><i
                    class="circle white small material-icons right z-depth-2">receipt</i></a>
                  </td>
                  <td>
                    <a class="tooltipped" data-position="top" data-delay="50" data-tooltip="Borrar"
                    onclick="return confirm('Estas a un paso de borrar un registro, seguro deseas continuar?');"
                    href="?c=Dollar&a=Eliminar&id=<?php echo $r->id; ?>">
                    <i class=" circle white small material-icons right z-depth-2">delete</i></a>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>

      </div><!-- Div de los tamanos -->
    </div><!--Div row -->
  </div><!--div del container-->
</main>
