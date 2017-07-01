<?php
  $mysqli  = new mysqli("localhost","root","","sirevi");

    $salida= "";
    $query= "SELECT * FROM visitacion ORDER BY id ASC";

    if (isset($_POST['consulta'])) {
      $q = mysql_real_escape_string($_POST['consulta']);
      $query = "SELECT id, nombre, noIdentificacion, pais, tipo_pago, moneda
      FROM visitacion  WHERE nombre  LIKE '%".$q."%' ";

    }
      $resultado = mysqli_query($query);

      if ($resultado > 0) {
        $salida.="<table class='responsive-table grey lighten-1 centered highlight z-depth-5'>
      		<thead class'white-text brown z-depth-2'>
      			<tr>
      				<th>ID</th>
      				<th>Proposito</th>
      				<th>Nombre</th>
      				<th>Identificacion</th>
      				<th>Pais</th>
      				<th>Pago</th>
      				<th>Moneda</th>
      			</tr>
      			</thead>
    			  <tbody>";
            while ($fila = $resultado->fetch_assoc()) {
              $salida.="<tr>
                          <td>".$fila['id']."</td>
                          <td>".$fila['nombre']."</td>
                          <td>".$fila['noIdentificacion']."</td>
                          <td>".$fila['pais']."</td>
                          <td>".$fila['tipo_pago']."</td>
                          <td>".$fila['moneda']."</td>
              </tr>";
            }

            $salida.="</tbody></table>";
      }
      else{
        $salida.="No hay datos";
      }

      echo $salida;

      $mysqli->close();
 ?>
