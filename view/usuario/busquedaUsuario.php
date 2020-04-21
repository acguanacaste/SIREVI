<?php if ($_SESSION['usuario']['puesto'] == 1 || $_SESSION['usuario']['puesto'] == 2 ):?>
<main>

  <div class="container">
    <div class="right hide-on-small-only">
      <a href="index.php?c=Usuario"><i style="color:#00b0ff" class="small material-icons blue-grey darken-2  btn-floating pulse">arrow_back</i>&nbsp;Página anterior</a>
    </div>
  <h4>Usuarios</h4>
  </div>

  <div class="container">
    <div class="row">
      <div class="col s12 m12 l12">

        <table class="responsive-table grey lighten-1 centered highlight z-depth-5">
        <thead class="white-text teal darken-4 ">
            <tr>
              <th>ID</th>
              <th>Nombre</th>
              <th>Apellido</th>
              <th>Cédula</th>
              <th>Puesto</th>
              <th>Email</th>
              <th>Estado</th>
              <th>Accion</th>
            </tr>
          </thead>
          <tbody>
<?php
   if ($_POST):
            require('model/conexion.php');
            $con = Conectar();
            $nombre = $_POST['nombre'];
           /* echo "valor enviado es ".$_POST['etiqueta']." y ".$etiqueta;*/
            $sql = 'SELECT * FROM usuarios WHERE nombre = :nom';
            $stmt = $con->prepare($sql);
            $result = $stmt->execute(array(':nom'=>$nombre));
            $rows = $stmt->fetchAll(\PDO::FETCH_OBJ);
          foreach ($rows as $row):
?>
              <tr>
              	<?php
 if(count($rows)): ?>
                <td> <?php echo $row->id;?> </td>
                <td> <?php echo $row->nombre;?> </td>
                <td> <?php echo $row->apellido;?> </td>
                <td> <?php echo $row->cedula;?> </td>
                <!--<td> <php echo $row->estado;?> </td>-->
                <td> <?php echo $row->puesto;?> </td>
                <td> <?php echo $row->email;?> </td>
                <?php if ($_SESSION['usuario']['puesto'] == 1):?>
                  <td><?php if($row->estado==1){
                    echo "<a  title='Deshabilitado' href='?c=Usuario&a=CambiarEstado&id=".$row->id."'><i class=' circle red darken-2 small material-icons'>not_interested</i></>";
                  }else{
                    echo "<a title='Habilitado'
                    onclick='return confirm('¿Estas a un paso de desabilitar un registro, seguro deseas continuar?');' href='?c=Usuario&a=CambiarEstado&id=".$row->id."'><i class='circle green darken-2 small material-icons'>done</i></a>";
                  }; ?></td>
                  <td>
                    <center><a  title="Editar Información" href="?c=Usuario&a=Modificar&id=<?php echo $row->id; ?>">
                      <i style="center" class="center circle white small material-icons right ">edit</i>
                    </a></center>
                  </td>
                <?php endif; ?>

  <?php else: ?>
 <td> Esta no existe </td>
 <?php
  endif;
 ?>
            </tr>
            <?php endforeach; ?>
             <?php endif; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
</main>
<?php endif; ?>
