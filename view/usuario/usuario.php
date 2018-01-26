<?php if ($_SESSION['usuario']['puesto'] == 1 || $_SESSION['usuario']['puesto'] == 2 ):?>
<main>
  <div class="container">
    <h4 class="header left">Módulo de Usuarios</h4>
<?php if ($_SESSION['usuario']['puesto'] == 1):?>
    <a href="?c=Usuario&a=agregarRegistro "><span class="hide-on-med-and-up">
      <i class="small material-icons blue-grey darken-2 z-depth-1 btn-floating pulse">playlist_add</i>Nuevo Usuario</a>

    <div class="right hide-on-small-only">
      <a   href="?c=Usuario&a=agregarRegistro">
        <i class="small material-icons blue-grey darken-2 z-depth-1 btn-floating pulse">playlist_add</i>Agregar Usuario</a>
    </div>
<?php endif; ?>
    <!--   buscar Usuario -->
  <br><br>
  <div class="">
  <form action="?c=Usuario&a=busquedaUsuario" method="post">
  <i class="small material-icons">book</i><input type="text" name="nombre" class="black-text" placeholder="Nombre" style="width:200px;" required>
  <input type="submit" name="name" value="Buscar" class="teal darken-4 waves-effect waves-light btn">
  </form>
  </div>
  <br>
  </div>
  <div class="container">
    <div class="row">
      <div class="col s12 m12 l12">
      <!-- Inicio de mi codigo -->

      <table class="responsive-table grey lighten-1 centered highlight z-depth-5">
        <thead class="white-text teal darken-4 z-depth-2">
            <tr>
              <th>&nbsp;Id </th>
              <th>Nombre</th>
              <th>Apellido</th>
              <th>Cédula</th>
              <th>Puesto</th>
              <th>E-mail</th>
              <th style="width:100px;">Imagen</th>
              <th>Estado</th>
            <th colspan="2">Acción</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($this->model->Listar() as $r): ?>
              <tr>
                <td><?php echo $r->id; ?></td>
                <td><?php echo $r->nombre; ?></td>
                <td><?php echo $r->apellido; ?></td>
                <td><?php echo $r->cedula; ?></td>
                <td><?php echo $r->Puesto; ?></td>
                <td><?php echo $r->email; ?></td>
              <td ><?php echo'<img src="'.$r->foto.'" width="100" heigth="100">'; ?></td>
              <?php if ($_SESSION['usuario']['puesto'] == 1):?>
                <td><?php if($r->estado==1){
                  echo "<a  title='Deshabilitado' href='?c=Usuario&a=CambiarEstado&id=".$r->id."'><i class=' circle red darken-2 small material-icons'>not_interested</i></>";
                }else{
                  echo "<a title='Habilitado' onclick='return confirm('¿Estas a un paso de desabilitar un registro, seguro deseas continuar?');' href='?c=Usuario&a=CambiarEstado&id=".$r->id."'><i class='circle green darken-2 small material-icons'>done</i></a>";
                }; ?></td>
                <td>
                  <center><a  title="Editar Información" href="?c=Usuario&a=Modificar&id=<?php echo $r->id; ?>">
                    <i style="center" class="center circle white small material-icons right z-depth-2">edit</i>
                  </a></center>
                </td>
              <?php endif; ?>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>

    </div><!-- Div de los tamanos -->
  </div>

<!--/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

<!--/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
  </div>
</main>
<?php endif; ?>
