<?php if ($_SESSION['usuario']['puesto'] == 1 || $_SESSION['usuario']['puesto'] == 3 ):?>
<div class="container">
  <a href="?c=Visitacion&a=Reporte"><span class="hide-on-med-and-up">
    <i class="small material-icons blue-grey darken-2 z-depth-1 btn-floating pulse">arrow_back</i>Página anterior</a>

  <div class="right hide-on-small-only">
    <a   href="?c=Visitacion&a=Reporte">
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

              <th colspan="2">Fecha</th>
              <th>Pais</th>
              <th>Identificacion</th>
          <!--    <th>Sector</th> -->
              <th>Sendero</th>
              <th>Tipo pago</th>
              <th>Moneda</th>
              <th>opcional</th>
          <!--    <th>opcional</th> -->
            </tr>
          </thead>
          <tbody>
<?php
   if ($_POST):
    require('model/conexion.php');
    $con = Conectar();
    $fecha1 = $_POST['fechaInicio'];
    $fecha2 = $_POST['fechaFinal'];
    $pais = $_POST['pais'];

  if ($pais!='') {
    $sql = "select * from visitacion inner join pais on visitacion.pais = pais.id
      where (visitacion.pais = :pai) and (visitacion.fecha between :fecha1 and :fecha2)";

      $stmt = $con->prepare($sql);
      $result = $stmt->execute(array(':fecha1'=>$fecha1,':fecha2'=>$fecha2,':pai'=>$pais));

  } else if ($pais==''){
    $sql ="select * from visitacion inner join pais on visitacion.pais = pais.id
      where (visitacion.fecha between :fecha1 and fecha2)";

      $stmt = $con->prepare($sql);
      $result = $stmt->execute(array(':fecha1'=>$fecha1, ':fecha2'=>$fecha2));
}

    $rows = $stmt->fetchAll(\PDO::FETCH_OBJ);

    foreach ($rows as $row): ?>
    <tr>
      <?php if(count($rows)): ?>
        <td colspan="2"> <?php echo $row->fecha;?> </td>
        <td> <?php echo $row->nombre;?> </td>
        <td><?php echo $row->noIdentificacion; ?></td>
        <td><?php echo $row->sendero; ?></td>
        <td><?php echo $row->tipo_pago; ?></td>
        <td><?php echo $row->moneda; ?></td>

      <?php else: ?>
     <td> Esta no existe </td>
   <?php endif;//ifCount ?>
                    </tr>
                  <?php endforeach; ?>
               <?php endif; //if $_POST ?>
          </tbody>
      </table>
    </div>
  </div>
</div>
</main>
<?php endif; ?>
