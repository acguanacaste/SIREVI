<?php if ($_SESSION['usuario']['puesto'] == 1 || $_SESSION['usuario']['puesto'] == 2 ):?>
<main>
  <div class="container">
  <h4>Usuarios</h4>
  </div>

  <div class="container">
    <div class="row">
      <div class="col s12 m12 l12">
        <div class="right hide-on-small-only">
           <a   href="c=Usuario&a=AdminUser"><span class="tooltipped" data-position="top"
           data-delay="50" data-tooltip="Página anterior"><i class=" hide-on-med-and-down small material-icons" >arrow_back</i>Página anterior</span></a>
         </div>
        <table class="responsive-table grey lighten-1 centered highlight z-depth-5">
        <thead class="white-text teal darken-4 ">
            <tr>
              <th>ID</th>
              <th>Nombre</th>
              <th>Diario</th>
              <th>Camping</th>
              <th>Área</th>

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
