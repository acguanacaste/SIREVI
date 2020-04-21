<?php if ($_SESSION['usuario']['puesto'] == 1 || $_SESSION['usuario']['puesto'] == 3 ):?>
<div class="container">
  <a href="?c=Visitacion&a=consultaIngresoSalidaDiario"><span class="hide-on-med-and-up">
    <i class="small material-icons blue-grey darken-2  btn-floating pulse">arrow_back</i>Página anterior</a>

  <div class="right hide-on-small-only">
    <a   href="?c=Visitacion&a=consultaIngresoSalidaDiario">
      <i class="small material-icons blue-grey darken-2  btn-floating pulse">arrow_back</i>Página anterior</a>
  </div>
</div>

<main>
  <div class="">
    <h4 class="header-left"><span>&nbsp;</span><i class="medium material-icons circle blue-text">people</i>
      <a href="#">Salidas del día de hoy</a></h4>

      <!--Inicio de las lineas para la consulta de ingreso y salida diario-->
      <div class="row">
        <div class="col s12 m12 l12">
          <ul class="collapsible" data-collapsible="accordion">
        <li>
          <div class="collapsible-header"><i class="material-icons">search</i>Consulta personas dentro y fuera del parque</div>
          <div class="collapsible-body"><span><div class="row">
            <div class="col s12 m12 l12">

              <fieldset>
                <ul class="input-field col s12 m12 l12 popout " data-collapsible="accordion">
                <li>
                  <div class="header"><i class="material-icons">info_outline</i>Seleccione la fecha de hoy para verificar visitantes dentro del parque</div>
                  <div class="body "><span >
                    <form action="?c=Visitacion&a=consultaIngresoSalidaDiario" method="post">

                      <div class="row">
                        <div class="input-field col s12 m5 l4">
                    <!--  <i class="small material-icons">contact_mail</i><input type="text" name="nombre" class="black-text" placeholder="Nombre" style="width:200px;">-->
                    </div>

                      <div class="input-field col s12 m5 l6">
                            <i class="small material-icons">event_note</i><input type="text" name="fecha" class="datepicker black-text" placeholder="Fecha" style="width:200px;">
                      </div>
      <br>
                  <div class="row">
                    <button title="Enviar" class="btn waves-effect waves-light teal darken-4"
                      value="Buscar"  type="submit" name="action"> <span class="hide-on-small-only">Consultar</span>
                        <i class="mdi-content-send material-icons right">pageview</i>
                    </button>
                  </div>

                </div>
                  </form><!--FORM end-->
                </span>
              </div>
                <hr>
               </li>
              </ul>
              </fieldset>
            </div>
          </div>
      </span>
      </div>
        </li>

      </ul>
        </div>
      </div>

      <!--Fin de las filas para consulta de ingreso salida diario-->
<!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
  <div class="">
    <div class="row">
      <div class="col s12 m12 l12">
       <table class="responsive-table grey lighten-1 centered highlight z-depth-5">
        <thead class="white-text teal darken-4 ">
            <tr>

              <th colspan="2">Fecha</th>
              <th>Pais</th>
              <th>Identificacion</th>
          <!--    <th>Sector</th> -->
              <th>Sendero</th>
              <th>Ingresos</th>
              <th>Tipo pago</th>
              <th>Moneda</th>

            </tr>
          </thead>
          <tbody>
<?php
   if ($_POST):
    require('model/conexion.php');
    $con = Conectar();
    $fecha1 = $_POST['fecha'];
    /*echo "<pre>";
    var_dump($_POST);
    echo "</pre>";*/

  if ($fecha1 = 'fecha') {
    $sql = "select * from visitacion inner join pais on visitacion.pais = pais.id
      where  (visitacion.fecha = :fecha1)";

      $stmt = $con->prepare($sql);
      $result = $stmt->execute(array(':fecha1'=>$fecha1));

  } else{
    $sql ="select * from visitacion inner join pais on visitacion.pais = pais.id
      where (visitacion.fecha = :fecha1 )";

      $stmt = $con->prepare($sql);
      $result = $stmt->execute(array(':fecha1'=>$fecha));
}

    $rows = $stmt->fetchAll(\PDO::FETCH_OBJ);

    foreach ($rows as $row): ?>
    <tr>
      <?php if(count($rows)): ?>
        <td colspan="2"> <?php echo $row->fecha;?> </td>
        <td> <?php echo $row->nombre;?> </td>
        <td><?php echo $row->noIdentificacion; ?></td>
        <td><?php echo $row->sendero; ?></td>
        <td><?php if($r->salida==0){
          echo "<a href='?c=Visitacion&a=Salida&id=".$r->id."'>
                  <i class='circle white darken-2 small material-icons tooltipped'
                    data-position='bottom' data-delay='50' data-tooltip='Dentro del parque'>directions_walk</i></a>";


              }
              elseif ($r->salida==1) {
                echo "<a   href='?c=Visitacion&a=Salida&id=".$r->id."'>
                        <i class='circle red darken-2 small material-icons tooltipped'
                          data-position='bottom' data-delay='50' data-tooltip='Fuera del parque'>do_not_disturb_off</i></>";
            }; ?></td>
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
