<main>
  <div class="container">
  <h4>Nacionalidades</h4>
  </div>

  <div class="container">
    <div class="row">
      <div class="col s12 m12 l12">
        <div class="right hide-on-small-only">
           <a   href="?c=Reporte&a="><span class="tooltipped" data-position="top"
           data-delay="50" data-tooltip="Página anterior"><i class=" hide-on-med-and-down small material-icons" >arrow_back</i>Página anterior</span></a>
         </div>
        <table class="responsive-table grey lighten-1 centered highlight z-depth-5">
        <thead class="white-text teal darken-4 z-depth-2">
            <tr>
              <th>Fecha</th>
              <th>Pais</th>
              <th>Nombre</th>
              <th>Tipo pago</th>
              <th>Moneda</th>
              <th>columna</th>
              <th>columna</th>
              <th>columna</th>
            </tr>
          </thead>
          <tbody>
<?php
   if ($_POST):
            require('model/conexion.php');
            $con = Conectar();
            $fecha1 = $_POST['fechaInicio'];
            $fecha2 = $_POST['fechaFinal'];
            $pai = $_POST['pais'];

           /* echo "valor enviado es ".$_POST['etiqueta']." y ".$etiqueta;*/
            $sql = 'select visitacion.fecha, visitacion.pais, visitacion.nombre, visitacion.tipo_pago,visitacion.moneda
            from visitacion inner join pais on visitacion.pais = pais.id where (visitacion.fecha between :fecha1 and :fecha2) and (pais.nombre = :pai)';
            $stmt = $con->prepare($sql);
            $result = $stmt->execute(array(':fechaInicio'=>$fecha1,':fechaFinal'=>$fecha2,':pais'=>$pai));
            $rows = $stmt->fetchAll(\PDO::FETCH_OBJ);
          foreach ($rows as $row): ?>
              <tr>
              	<?php if(count($rows)): ?>
                <td> <?php echo $row->fecha;?> </td>
                <td> <?php echo $row->Pais;?> </td>
                <td> <?php echo $row->nombre;?> </td>
                <td> <?php echo $row->tipo_pago;?> </td>
                <!--<td> <php echo $row->estado;?> </td>-->
                <td> <?php echo $row->moneda;?> </td>
                <td> <?php echo $row->fecha;?> </td>
                <td> <?php echo $row->fecha;?></td>
                <td> <?php echo $row->fecha; ?></td>
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
