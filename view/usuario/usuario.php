<main>
  <div class="container">
    <h4 class="header left">Módulo de Usuarios</h4>
    <a href="index.php?c=Usuarios&a=agregarRegistro"><span class="hide-on-med-and-up"><i class="small material-icons">playlist_add</i>Nueva Visitación</a>


    <div class="right hide-on-small-only">
      <a   href="index.php?c=Usuario&a=agregarRegistro"><i class="small material-icons ">playlist_add</i>Agregar Usuario</a>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col s12 m12 l12">
      <!-- Inicio de mi codigo -->

      <table class="responsive-table grey lighten-1 centered highlight z-depth-5">
        <thead class="white-text teal darken-4 z-depth-2">
            <tr>
              <th>Nombre</th>
              <th>Apellido</th>
              <th>Cedula</th>
              <th>Puesto</th>
              <th>E-mail</th>
              <th>Imagen</th>
              <th style="width:40px;"></th>
              <th colspan="3">Acción</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($this->model->Listar() as $r): ?>
              <tr>
                <td><?php echo $r->nombre; ?></td>
                <td><?php echo $r->apellido; ?></td>
                <td><?php echo $r->cedula; ?></td>
                <td><?php echo $r->puesto; ?></td>
                <td><?php echo $r->email; ?></td>
                <td><?php echo $r->imagen; ?></td>

                <td>
                  <a title="Editar Información" href="?c=Usuario&a=Modificar&id=<?php echo $r->id; ?>">
                    <i class="circle small material-icons right z-depth-2">edit</i></a>
                </td>

                <td>

                  <a title="Deshabilitar Usuario" value="2" onchange="habilitar(this.value);" onclic="return confirm('¿Estas a un paso de desabilitar un registro, seguro deseas continuar?');"
                    href="<?php echo $r->id; ?>"><!--Se escribira el nombre del metodo desabilitar una
                                                                      vez este implementado en el sistema-->
                  <i class=" circle small material-icons right z-depth-2">error</i></a>
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

<script>
  function habilitar(value){
    if(value=="1" || value==true){
      // habilitamos
      document.getElementById(<?php $_REQUEST['id']?>).disabled=false;

    }else if(value=="2" || value==false){
      // deshabilitamos
      document.getElementById(<?php $_REQUEST['id']?>).disabled=true;
    }
  }
</script>
