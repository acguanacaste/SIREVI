<?php if ($_SESSION['usuario']['puesto'] == 1 || $_SESSION['usuario']['puesto'] == 3 ):?>
<div class="container">
  <a href="?c=Reporte&a=AdminUser "><span class="hide-on-med-and-up">
    <i class="small material-icons blue-grey darken-2 z-depth-1 btn-floating pulse">arrow_back</i>Página anterior</a>

  <div class="right hide-on-small-only">
    <a   href="?c=Reporte&a=AdminUser">
      <i class="small material-icons blue-grey darken-2 z-depth-1 btn-floating pulse">arrow_back</i>Página anterior</a>
  </div>
</div>
<main>
  <div class="">
    <h4 class="header-left"><span>&nbsp;</span><i class="medium material-icons circle blue-text">public</i>
      <a href="#">Nacionalidades located on visitacion view, belongs to reportes(resultado nacionalidades view)</a></h4>

  <div class="">
    <div class="row">
      <div class="col s12 m12 l12">
       <table class="responsive-table grey lighten-1 centered highlight z-depth-5">
        <thead class="white-text teal darken-4 z-depth-2">
            <tr>
              <th>ID</th>
              <th>Fecha</th>
              <th>Pais</th>
              <th>identificacion</th>
              <th>Nombre</th>
              <th>Tipo pago</th>
              <th>Moneda</th>
              <th>opcional</th>
              <th>opcional</th>
            </tr>
          </thead>
          <tbody>
<?php
   if ($_POST):
            require('model/conexion.php');
            $con = Conectar();
            $nombre = $_POST['nombre'];
            $noIdentificacion = $_POST['noIdentificacion'];
            $pais = $_POST['pais'];

           /* echo "valor enviado es ".$_POST['etiqueta']." y ".$etiqueta;*/
            $sql = 'SELECT * FROM visitacion WHERE nombre = :nom OR noIdentificacion = :id OR pais = :pais';
            $stmt = $con->prepare($sql);
            $result = $stmt->execute(array(':nom'=>$nombre,':id'=>$noIdentificacion,':pais'=>$pais));
            $rows = $stmt->fetchAll(\PDO::FETCH_OBJ);
          foreach ($rows as $row): ?>
              <tr>
              	<?php if(count($rows)): ?>
                <td> <?php echo $row->id;?> </td>
                <td> <?php echo $row->fecha;?> </td>
                <td> <?php echo $row->pais;?> </td>
                <td> <?php echo $row->noIdentificacion;?> </td>
                <!--<td> <php echo $row->estado;?> </td>-->
                <td> <?php echo $row->nombre;?> </td>
              <!--  <td> <php echo $row->;?> </td>-->
                <td><?php echo $row->tipo_pago; ?></td>
                <td><?php echo $row->moneda; ?></td>
  <?php else: ?>
 <td> Esta no existe </td>
 <?php endif;?>
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
