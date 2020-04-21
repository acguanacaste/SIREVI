<?php if ($_SESSION['usuario']['puesto'] == 1 || $_SESSION['usuario']['puesto'] == 3 ):?>
<div class="container">
  <a href="?c=Visitacion&a=Reporte"><span class="hide-on-med-and-up">
    <i class="small material-icons blue-grey darken-2  btn-floating pulse">arrow_back</i>Página anterior</a>

  <div class="right hide-on-small-only">
    <a   href="?c=Visitacion&a=Reporte">
      <i class="small material-icons blue-grey darken-2  btn-floating pulse">arrow_back</i>Página anterior</a>
  </div>
</div>

<main>
  <div class="">
    <h4 class="header-left"><span>&nbsp;</span><i class="medium material-icons circle blue-text">public</i>
      <a href="#">Resultado de Ingresos</a></h4>
    <!-- Busqueda Avanzada -->
      <div class="row">
        <div class="col s12 m12 l12">
          <ul class="collapsible" data-collapsible="accordion">
        <li>
          <div class=""><i class="material-icons">search</i>Filtro de busqueda</div>
          <div class=""><span><div class="row">
            <div class="col s12 m12 l12">

              <fieldset>
                <ul class="input-field col s12 m12 l12 popout " data-collapsible="accordion">
                <li>
                  <div class="header"><i class="material-icons">info_outline</i>Utilice los campos habilitados para realizar la busqueda de registro</div>
                  <div class="body "><span >
                    <form action="?c=Visitacion&a=Consulta_ReporteDiario_Controller" method="post">

            <div class="col s6 offset-s3"><span class="flow-text">
                      <div class=" "><!--INICIO DEL DIV DE LA FILA-->
                        <center>

                          <fieldset class="input-field col s12 m5 l5">
                              <legend><h6>Fecha Inicio</h6></legend>
                          <div class="">
                             <i class="material-icons prefix">event_note</i>
                            <input type="date" name="fechaInicio" id="fechaInicio" required>
                          </div>
                          </fieldset>
           <!--INICIO DE COLUMNA-->

                     <fieldset class="input-field col s12 m5 l5">
                  <legend><h6>Fecha Final</h6></legend>
                       <div class="" >
                         <i class="material-icons prefix">event_note</i>
                         <input type="date" name="fechaFinal" id="fechaFinal" required>

                       </div>

                         </fieldset>
                      </center>
                    </div>
                  </span></div>


                <div class="col s6 offset-s4"><span class="flow-text">
                  <fieldset class="input-field col s12 m6 l6 ">
                    <div class=""><!---Inicio de la segunda fila-->
                    <!--==============Cargando los paices==============================-->
                      <?php
                      $conexion = mysql_connect("localhost","root");
                      mysql_select_db("sirevi",$conexion);
                      $sentencia = "select nombre from sector order by nombre ASC";
                      $query = mysql_query($sentencia);
                      ?>
                      <div  class="input-field col s6 m6 l12">
                        <select name="sector">
                          <option value="" disabled selected>Elija un Sector</option>
                          <?php while ($arreglo = mysql_fetch_array($query)) {  ?>
                          <option value="<?php echo $arreglo['id']?>"><?php echo $arreglo['nombre'] ?></option>
                          <?php } ?>
                        </select>
                        <label>Sectores</label>
                      </div>
                    </fieldset>
                  </span></div>


                      <div class="row">
                        <div class="center"><span class="flow-text">
                          <div class="input-field col s12 m12 l12">
                          <fieldset class="">
                            <button title="Enviar" class=" right small btn waves-effect waves-light teal darken-4"
                              value="Buscar"  type="submit" name="action"><span class="hide-on-small-only "><font size=3>Consultar</font></span>
                              <i class=" small material-icons right">pageview</i>
                            </button>
                          </fieldset>
                          </div></span>
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
          <thead class="white-text teal darken-4 ">
     <tr>
       <th>Ingreso</th>
       <th>Salida</th>
       <th>Nombre</th>
       <th>Cedula/Pasaporte</th>
       <th>Placa vehiculo</th>
       <th>SubSector</th>
       <th>Sector</th>
       <th>Nacionales</th>
       <th>Extranjeros</th>
       <th>Exonerados</th>
       <th>Prepagos</th>
       <th>Monto Cancelado</th>


     </tr>
   </thead>

    <tbody>
        <?php foreach ($result as $r):?>
      <tr>

        <td><?php echo $r->Hora_Entrada; ?></td>
        <td><?php echo $r->Hora_Salida; ?></td>
        <td><?php echo $r->Nombre; ?></td>
        <td><?php echo $r->noIdentificacion; ?></td>
        <td><?php echo $r->placa_automovil; ?></td>
        <td><?php echo $r->SubSector; ?></td>
        <td><?php echo $r->Sector; ?></td>
        <td><?php echo $r->Nacionales; ?></td>
        <td><?php echo $r->Extranjeros; ?></td>
        <td><?php echo $r->Total_exonerados; ?></td>
        <td><?php echo $r->Prepago; ?></td>
        <td><?php echo $r->Total_Pago ?></td>

      </tr>
      <?php endforeach; ?>
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
