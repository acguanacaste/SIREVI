<?php if ($_SESSION['usuario']['puesto'] == 1 || $_SESSION['usuario']['puesto'] == 2 ):?>
<main>
  <div class="container">
  <h4>Visitación</h4>
  </div>

  <div class="container">
    <div class="row">
      <div class="col s12 m12 l12">

        <table class="responsive-table grey lighten-1 centered highlight z-depth-5">
        <thead class="white-text teal darken-4 z-depth-2">
            <tr>
              <th>ID</th>
              <th>Proposito</th>
              <th>Fecha</th>
              <th>Nombre</th>
              <th>Identificación</th>
              <th>Placa</th>
              <th>Pais</th>
              <th>Pago</th>
              <th>Moneda</th>
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
            $sql = 'SELECT * FROM visitacion WHERE nombre = :nom OR noIdentificacion = :id OR pais = :pai';
            $stmt = $con->prepare($sql);
            $result = $stmt->execute(array(':nom'=>$nombre,':id'=>$noIdentificacion,':pai'=>$pais));
            $rows = $stmt->fetchAll(\PDO::FETCH_OBJ);
          foreach ($rows as $row): ?>
              <tr>
              	<?php if(count($rows)): ?>
                <td> <?php echo $row->id;?> </td>
                <td> <?php echo $row->proposito_visita;?> </td>
                <td><?php echo $row->fecha; ?></td>
                <td> <?php echo $row->nombre;?> </td>
                <td> <?php echo $row->noIdentificacion;?> </td>
                <!--<td> <php echo $row->estado;?> </td>-->
                <td> <?php echo $row->placa_automovil;?> </td>
                <td> <?php echo $row->pais;?> </td>
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
      <hr>

       <div class=" right hide-on-small-only">
         <a   href="?c=Visitacion&a=AdminUser"><span class="tooltipped" data-position="top"
         data-delay="50" data-tooltip="Página anterior">
           <i class="small material-icons blue-grey darken-2 z-depth-2 btn-floating pulse">arrow_back</i>&nbsp;Página anterior</span></a>
       </div>
    </div>
  </div>
</div>
</main>
<?php endif; ?>
