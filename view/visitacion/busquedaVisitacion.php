<?php if ($_SESSION['usuario']['puesto'] == 1 || $_SESSION['usuario']['puesto'] == 2 )
|| $_SESSION['usuario']['puesto'] == 3 ) || $_SESSION['usuario']['puesto'] == 4 ) :?>
<main>
  <div class="">
    <h4 class="header left"><span>&nbsp;</span><a href="#">
      <i class="medium material-icons circle blue-grey darken-2">assignment</i>Visitación</a></h4>
  </div>
  <!--Busqueda avanzada-->
<div class="row">
<div class="col s12 m12 l12">
  <ul class="collapsible" data-collapsible="accordion">
<li>
  <div class="collapsible-header"><i class="material-icons">search</i>Filtro de busqueda</div>
  <div class="collapsible-body"><span><div class="row">
    <div class="col s12 m12 l12">

      <fieldset>
        <ul class="input-field col s12 m12 l12 popout z-depth-3" data-collapsible="accordion">
        <li>
          <div class="header"><i class="material-icons">info_outline</i>Utilice los campos habilitados para realizar la busqueda de registro(s)</div>
          <div class="body "><span >
            <form action="?c=Visitacion&a=busquedaVisitacion" method="post">


                <div class="col s11 offset-s1"><span class="flow-text">
                              <div class="input-field col s12 m3 l3">
                                <i class="small material-icons">contact_mail</i>
                                <input type="text" name="nombre" class="black-text" placeholder="Nombre" style="width:200px;">
                              </div>
              <div class="col s1">

              </div>
                            <div class="input-field col s12 m3 l3">
                                  <i class="small material-icons">picture_in_picture</i>
                                  <input type="text" name="noIdentificacion" class="black-text" placeholder="Identificacion" style="width:200px;">
                            </div>
              <div class="col s1">

              </div>
                            <div class="input-field col s12 m3 l3">
                          <i class="small material-icons">directions_car</i>
                          <input type="text" name="placa_automovil" class="black-text" placeholder="No.Placa" style="width:200px;">
                            </div>
              </span></div>


            <!--==============Cargando los paices==============================-->
<!--<div class="row">
<php
$conexion = mysql_connect("localhost","root");
mysql_select_db("sirevi",$conexion);
$sentencia_pais = "select * from pais order by nombre ASC";
$query_pais = mysql_query($sentencia_pais);
?>
<div  class="input-field col s6 m12 l3">
  <select name="pais">
    <option value="" selected>Elija un pais</option>
    <php while ($arreglo_pais = mysql_fetch_array($query_pais)) {  ?>
    <option value="<php echo $arreglo_pais['id']?>"><php echo $arreglo_pais['nombre'] ?></option>
    <php } ?>
  </select>
  <label>País</label>
</div>
</div>-->


            <center>
              <button title="Enviar" class="btn waves-effect waves-light teal darken-4"
                value="Buscar"  type="submit" name="action"> <span class="hide-on-small-only">Consultar</span>
                  <i class="mdi-content-send material-icons right">pageview</i>
              </button>
            </center>
            <!--<input type="submit" name="pais" value="Buscar" class="teal darken-4 waves-effect waves-light btn">-->
            </form><!--FORM end-->
           </span></div>
        <hr>
        </li>
        </ul>
        </fieldset>
      </div>
    </div></span></div>
  </li>
</ul>

</div>
</div>

  <div class="">
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
              <th>Pago</th>
              <th>Moneda</th>
              <th>Estado</th>
            </tr>
          </thead>
          <tbody>
<?php
if ($_POST):
         require('model/conexion.php');
         $con = Conectar();
         $nombre = $_POST['nombre'];
         $noIdentificacion = $_POST['noIdentificacion'];
         $placa_automovil  = $_POST['placa_automovil'];
      //   $pais = $_POST['pais'];//Cuando incluyo el input para el pais este no me esta realizando la accion y revienta la consulta.

         $sql = 'SELECT * FROM visitacion WHERE nombre = :nom OR noIdentificacion = :identificacion OR placa_automovil = :placa';
         $stmt = $con->prepare($sql);
       $result = $stmt->execute(array(':nom'=>$nombre, 'identificacion'=>$noIdentificacion,':placa'=>$placa_automovil/*, ':country'=>$pais*/));
         $rows = $stmt->fetchAll(\PDO::FETCH_OBJ);

       foreach ($rows as $row):
?>            <tr>
              	<?php if(count($rows)): ?>
                <td> <?php echo $row->id;?> </td>
                <td> <?php echo $row->proposito_visita;?> </td>
                <td><?php echo $row->fecha; ?></td>
                <td> <?php echo $row->nombre;?> </td>
                <td> <?php echo $row->noIdentificacion;?> </td>
                <!--<td> <php echo $row->estado;?> </td>-->
                <td> <?php echo $row->placa_automovil;?> </td>
          <!--      <td> <php echo $row->pais;?> </td> -->
                <td><?php echo $row->tipo_pago; ?></td>
                <td><?php echo $row->moneda; ?></td>

                <td><?php if($row->salida==0){
                  echo "<a href='?c=Visitacion&a=Salida&id=".$row->id."'>
                          <i class='circle white darken-2 small material-icons tooltipped'
                            data-position='bottom' data-delay='50' data-tooltip='Dentro del parque'>directions_walk</i></a>";


                      }
                      elseif ($row->salida==1) {
                        echo "<a   href='?c=Visitacion&a=Salida&id=".$row->id."'>
                                <i class='circle red darken-2 small material-icons tooltipped'
                                  data-position='bottom' data-delay='50' data-tooltip='Fuera del parque'>do_not_disturb_off</i></>";
                    }; ?></td>
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
