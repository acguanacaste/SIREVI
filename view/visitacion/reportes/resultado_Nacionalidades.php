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
      <a href="#">Resultado de las Nacionalidades</a></h4>
    <!-- Busqueda Avanzada -->
      <div class="row">
        <div class="col s12 m12 l12">
          <ul class="collapsible" data-collapsible="accordion">
        <li>
          <div class=""><i class="material-icons">search</i>Filtro de busqueda</div>
          <div class=""><span><div class="row">
            <div class="col s12 m12 l12">

              <fieldset>
                <ul class="input-field col s12 m12 l12 popout z-depth-3" data-collapsible="accordion">
                <li>
                  <div class="header"><i class="material-icons">info_outline</i>Utilice los campos habilitados para realizar la busqueda de registro</div>
                  <div class="body "><span >
                    <form action="?c=Visitacion&a=Resultado_Nacionalidades" method="post">


                      <div class="z-depth-2"><!--INICIO DEL DIV DE LA FILA-->
                        <div class="input-field col s12 m4 l4">
                           <i class="material-icons prefix">event_note</i>
                          <input placeholder="Fecha Inicio"  type="text" class="datepicker" id="fechaInicio" name="fechaInicio" required>
                        </div>

           <!--INICIO DE COLUMNA-->

                      <div class="input-field col s12 m4 l4  " >
                        <i class="material-icons prefix">event_note</i>
                        <input placeholder="Fecha Final" type="text" class="datepicker" id="fechaFinal" name="fechaFinal"  value="" required>
                      </div>


                      <div class="row">
                        <div class="center"><span class="flow-text">
                          <div class="input-field col s12 m12 l12">
                          <fieldset class="z-depth-2">
                            <button title="Enviar" class="small btn waves-effect waves-light teal darken-4"
                              value="Buscar"  type="submit" name="action"><span class="hide-on-small-only "><font size=3>Consultar</font></span>
                              <i class=" small material-icons right">pageview</i>
                            </button>
                          </fieldset>
                          </div></span>
                        </div>
                      </div>
                      </div>
                     </div>
                    </div>

                    <!--<input type="submit" name="pais" value="Buscar" class="teal darken-4 waves-effect waves-light btn">-->
                  </form><!--FORM end-->
                </span></div>
                <hr>
               </li>
              </ul>
              </fieldset>
            </div>
          </div>
      </span>
      </div>
<!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
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
    $pais = (int)$_POST['pais'];
  /*  $n = (isset($_POST['n'] && !empty($_POST['n'])))?$_POST['n']:null;//revisar que en el form halla algo diferente al vacio o date_default_timezone_set

    $select = "select * from table ";
    $where = "";
    if ($n){
      $where .=!empty($where)?" and ":"";// defina todo por and o por cada condicion ponga para seleccionar el conector logico
      $where .=" n = $n "
    }
    $select.=!empty($where)?" where ".$where:null; */
    //@todo: meter igual para el order by
/*echo "<pre>";
var_dump($_POST);
echo "</pre>";*/

  if ($pais>1) {
    $sql = "select * from visitacion inner join pais on visitacion.pais = pais.id
      where (visitacion.pais = :pai) and (visitacion.fecha between :fecha1 and :fecha2)";

      $stmt = $con->prepare($sql);
      $result = $stmt->execute(array(':fecha1'=>$fecha1,':fecha2'=>$fecha2,':pai'=>$pais));

  } else{
    $sql ="select * from visitacion inner join pais on visitacion.pais = pais.id
      where (visitacion.fecha between :fecha1 and :fecha2)";

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

      <td colspan="8" class="text-center">
              <a href="?c=Visitacion&a=Excel">Exportar a Excel</a>
          </td>

    </div>
  </div>
</div>
</main>
<?php endif; ?>
