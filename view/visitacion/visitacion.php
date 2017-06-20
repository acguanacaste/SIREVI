<!--<div class="container">
  <div class="row">
    <div class="input-field col s12 m6 l4">
      <fieldset>
        <legend>Buscar visitación</legend>
        <form class="input-field col s12 m12 l12" action="busqueda.php" name="form1" id="cdr" method="post">
        <input type="text" class="" name="busca" id="busqueda" >
        <input type="submit" class="left-align" name="submit" value="Buscar">
        </form>
      </fieldset>
    </div><!--Fin de los tamanyos--
  </div><!--Fin del row--
</div><!--Fin del container-->
<!--
<php

$busca='';
$busca=$_POST['busca'];

mysql_connect("localhost","root");
mysql_select_db("sirevi");

if($busca != ""){
  $busqueda=mysql_query("SELECT * FROM visitacion where id like '%".$busca."%'");
}

?>
<php
while ($muestra=mysql_fetch_array($busqueda)) {
echo "<tr>";
echo "<td>".$muestra["id"].'</td>';
echo "<td>".$muestra["Nombre"].'</td>';
echo "<td>".$muestra["fecha_ingreso"].'</td>';
echo "<td>".$muestra["noIdentificacion"].'</td>';


}
?>
-->
<main>
  <div class="container">
    <h4 class="header left">Módulo Visitación</h4>
    <a href="index.php?c=Visitacion&a=agregarRegistro"><span class="hide-on-med-and-up"><i class="small material-icons">playlist_add</i>Nueva Visitación</a>

      <div class="right hide-on-small-only">
        <a href="index.php?c=Visitacion&a=agregarRegistro"> <i class="small material-icons">playlist_add</i><span>Nueva Visitación</span></a>
      </div>

    </div>


    <div class="container">
    <div class="row">
        <div class="col s12 m12 l12">
            <!-- Inicio de mi codigo -->
          <table class="responsive-table grey lighten-1 centered highlight z-depth-5">
            <thead class="white-text teal darken-4 z-depth-2">
<!--==================================Los valores en la vista de visitacion aun estan por aclarar cuale se deben mostrar-->
            <tr>
              <th>Nombre</th>
              <th>Pais</th>
              <th>Fecha ingreso</th>

              <th>Sector</th>
              <th>Dias </th>

              <th>Monto</th>
              <th>Moneda</th>
              <th>Tipo pago</th>
              <!--<th>Total</th>-->
              <th style="width:40px;"></th>
              <th colspan="2">Acción</th>
            </tr>
<!--================================================================================================================== -->
          </thead>
          <tbody>
            <?php foreach ($this->model->Listar() as $r): ?>
            <tr>
              <td><?php echo $r->Nombre; ?></td>
              <td><?php echo $r->noIdentificacion ?></td>
              <td><?php echo $r->placa_automovil ?></td>
              <td><?php echo $r->Pais ?></td>
              <td><?php echo $r->Provincia ?></td>

              <td><?php echo $r->referencia_visita ?></td>
              <td><?php echo $r->Dias ?></td>
              <td><?php echo $r->nacional_adult ?></td>
              <td><?php echo $r->nacional_kid ?></td>
              <td><?php echo $r->estudiantes ?></td>
              <td><?php echo $r->extranjero_adult ?></td>
              <td><?php echo $r->extranjero_kid ?></td>
              <td><?php echo $r->exonerado ?></td>
              <td><?php echo $r->prepago ?></td>
              <td><?php echo $r->Sendero ?></td>

              <td><?php echo $r->tipo_pago ?></td>
              <td><?php echo $r->moneda ?></td>



          <!--  <td><php echo $r->fecha_ingreso; ?></td>--

              <td><php echo $r->Sector; ?></td>
              <td><php echo $r->Dias; ?></td>
              <td class="center"></td>

              <td><php echo $r->monto;?></td>
              <td><php echo $r->moneda;?></td>
-->
              <td>
                <a  title="Editar Información"  href="?c=Visitacion&a=Modificar&id=<php echo $r->id; ?>"><i
                    class="small material-icons right">edit</i></a>
              </td>
              <td>
              <a title="Borrar Información" onclick="return confirm('¿Seguro de eliminar este registro?');"
                 href="?c=Visitacion&a=Eliminar&id=<php echo $r->id; ?>">
                  <i class="small material-icons right">delete</i></a>
              </td>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div><!-- Div de los tamanos -->
    </div>
  </div>
</main>
