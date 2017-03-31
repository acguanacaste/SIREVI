<main>
  <div class="container">
    <h4 class="header left">Módulo de Visitacion</h4>
      <div class="right hide-on-small-only">
        <a href="index.php?c=Visitacion&a=agregarRegistro"> <i class="small material-icons">playlist_add</i>Nueva Visitacion</a>
      </div>
    </div>
    <div class="container">
    <div class="row">
        <div class="col s12 m12 l12">
            <!-- Inicio de mi codigo -->
          <table class="responsive-table grey lighten-1 centered highlight z-depth-5">
            <thead class="white-text teal darken-4 z-depth-2">
<!--==================================Los valores en la vista de visitacion aun estan por aclarar cuale se deben mostrar-->
            <tr>
              <th>Nombre</th>
              <th>Fecha ingreso</th>
              <th>Fecha salida</th>
              <th>Dias </th>
              <th>Numero diario</th>
              <th>Monto</th>
              <th>Moneda</th>
              <!--<th>Total</th>-->
              <th style="width:40px;"></th>
              <th colspan="2">Accion</th>
            </tr>
<!--================================================================================================================== -->
          </thead>
          <tbody>
            <?php foreach ($this->model->Listar() as $r): ?>
            <tr>
              <td><?php echo $r->nombre; ?></td>
              <td><?php echo $r->fecha_ingreso; ?></td>
              <td><?php echo $r->fecha_salida; ?></td>
              <td><?php echo $r->dias_camping; ?></td>
              <td class="center"><?php echo $r->numero_diario; ?></td>
              <td><?php echo $r->monto;?></td>
              <td><?php echo $r->moneda;?></td>
              <!--<td><?php echo $r->total;?></td>-->
              <td>
                <a  title="Editar Información"  href="?c=Visitacion&a=Modificar&id=<php echo $r->id; ?>"><i
                    class="small material-icons right">edit</i></a>
              </td>
              <td>
              <a title="Borrar Información" onclick="return confirm('¿Seguro de eliminar este registro?');"
                 href="?c=Visitacion&a=Eliminar&id=<php echo $r->id; ?>">
                  <i class="small material-icons right">delete</i></a>
              </td>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div><!-- Div de los tamanos -->
    </div>
  </div>
</main>
