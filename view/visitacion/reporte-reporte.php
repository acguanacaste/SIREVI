<main>
  <div class="container">
    <h4 class="header left">Módulo Nacionalidades</h4>
    <div class="row">
      <div class="col s12 m12 l12">
<!-- Inicio de mi codigo -->
        <div id="" class="">
<!--===========================================================================================================-->
<fieldset>
  <legend><h6>Realice la busqueda ingresando el rango de fecha y la nacionalidad</h6></legend>
    <div class="">
      <br>
      <hr>
      <br>
      <div class="row">
        <div class="col s12 m12 l10">
          <div class="row">

  <ul class="input-field col s12 m12 l12 popout z-depth-3" data-collapsible="accordion">
  <li>
    <div class="header"><i class="material-icons">search</i>Filtro de busqueda</div>

    <div class="body "><span >
      <form class="z-depth-4" action="?c=Visitacion&a=Reporte" method="post" id="formulario">

        <!--INICIO DE LA FILA 2-->
    <!--INICION DE COLUMNA DEL CEDULA-->
        <div class="z-depth-2"><!--INICIO DEL DIV DE LA FILA-->

              <div class="input-field col s12 m6 l6 ">
               <input  type="text" class="datepicker" id="fechaInicio" name="fechaInicio" value="" required>
              <!--<input type="date" class="timepicker" id="fechaInicio" name="fechaInicio" value="" required/>-->
               <label for=""> <i class="small material-icons">event</i><span class="hide-on-small-only">Fecha inicio</span></label>
             </div>
           <!--INICIO DE COLUMNA MODELO-->

           <div class="input-field col s12 m6 l6  " >
           <input type="text" class="datepicker" id="fechaFinal" name="fechaFinal"  value="" required="true">
           <!--<input type="date" class="timepicker" id="fechaFinal" name="fechaFinal" value="" required/>-->
           <label for="" >  <i class="small material-icons">event</i><span class="hide-on-small-only">Fecha Final</span></label>
           </div>

       </div><!--FIN DEL DIV DE LA FILA-->

       <button title="Enviar" style="center" class="btn waves-effect waves-light teal darken-4"
         value="enviar"  type="submit" name="action"> <span class="hide-on-small-only">Consultar</span>
              <i class="mdi-content-send material-icons right">pageview</i>
       </button>

       <br>
<center>

<center><input type="text" name="etiqueta" placeholder="Etiqueta" style="width:200px;"></center>

</form><!--FORM end-->
</span></div>
  </li>
</ul>
<!--<input type="text" id="fechaInicio">
<button onclick="Enviar();">Enviar</button>-->
<!--<a href="view/reportes/Reporte PDF/reporte.php" class="btn waves-effect waves-light teal darken-4" role="button" target="_blank">PDF</a>
<a href="view/reportes/Reporte EXCEL/reporteexcel.php" class="btn waves-effect waves-light teal darken-4" role="button">Excel</a>
<br>
<form method="post" action="view/reportes/Reporte Excel/ejemplo.php">
<input type="hidden" name="set-fechaInicio-picker"  class="set-date-from">
<input type="hidden" name="fechaFinal" >
<button class="btn waves-effect waves-light teal darken-4">Excel2</button>
</form> -->
<div class=""><!--INICIO DEL DIV DE LA SEGUNDA FILA-->
<div class="input-field col s12 m12 l12 ">
  <table class="responsive-table grey lighten-1 centered highlight z-depth-5">
  <thead class="white-text teal darken-4 z-depth-2">
      <tr>
        <th colspan="2">Fecha reporte</th>
        <th>Etiqueta</th>
        <th>Tipo activo</th>
        <th>Ubicacion</th>
        <th>Prioridad</th>
        <th>Descripción</th>
        <th>Foto</th>
      </tr>
    </thead>
    <tbody>
  <?php
   if ($_POST):
            require('model/conexion.php');
            $con = Conectar();
            $fecha1 = $_POST['fechaInicio'];
            $fecha2 = $_POST['fechaFinal'];
            $eti = $_POST['pais'];
            if ($eti!='') {
$sql = "select visitacion.fecha, (visitacion.fecha between :fecha1 and :fecha2)";
$stmt = $con->prepare($sql);
$result = $stmt->execute(array(':fecha1'=>$fecha1,':fecha2'=>$fecha2,':pais'=>$eti));
            } else if ($eti==''){
$sql = "select visitacion.fecha, activo on insidente.activo = activo.id where insidente.fecha between :fecha1 and :fecha2";
$stmt = $con->prepare($sql);
$result = $stmt->execute(array(':fecha1'=>$fecha1,':fecha2'=>$fecha2));
            }
/*echo "valores enviados fecha inicio: ".$_POST['fechaInicio']." y fecha final: ".$fecha2." Etiqueta: ".$eti."";*/
            $rows = $stmt->fetchAll(\PDO::FETCH_OBJ);
            /*if(count($rows)){
              echo 'Si existe';

            }else{
          echo 'No se encuentran incidencias dentro de este rango de fechas';
            }*/
  /*}IF POST*/
          foreach ($rows as $row):
?>
              <tr>
                <?php
 if(count($rows)): ?>
                <td colspan="2"> <?php echo $row->fecha;?> </td>
                <td> <?php echo $row->etiqueta;?> </td>
                <td> <?php echo $row->ubicacion;?> </td>
                <td> <?php echo $row->prioridad;?> </td>
                <td> <?php echo $row->descripcion;?> </td>
                <td><?php echo'<img src="'.$row->foto.'" width="100" heigth="100">'; ?></td>

  <?php else: ?>
 <td> Esta no existe </td>
 <?php
  endif;//ifCount
 ?>
            </tr>
            <?php endforeach; ?>
             <?php endif; //if $_POST ?>
        </tbody>
      </table>
  <!--<div class="btn teal darken-4 z-depth-2">
    <a href="?c=Reporte&a=Excel"><span class="white-text">Exportar a excel</span></a>
  </div>-->
</div>
</div><!--FIN DEL DIV DE LA SEGUNDA FILA-->
<!--======================Inicio del codigo para el select y final de codigo PHP ====================-->

       <!--BOTON QUE ME ENVIA EL FORMULARIO-->
             </div>
          <!-- </form>-->
             </div>

           </div>
         </div>
</fieldset>
<!--================================================================================================================================-->
        </div>
      </div><!-- Div de los tamanos -->
    </div>
  </main>
