<?php if ($_SESSION['usuario']['puesto'] == 1 || $_SESSION['usuario']['puesto'] == 3 ):?>
<div class="container">
  <a href="?c=Visitacion&a=Reporte_Campistas"><span class="hide-on-med-and-up">
    <i class="small material-icons blue-grey darken-2  btn-floating pulse">arrow_back</i>Página anterior</a>

  <div class="right hide-on-small-only">
    <a   href="?c=Visitacion&a=Reporte_Campistas">
      <i class="small material-icons blue-grey darken-2  btn-floating pulse">arrow_back</i>Página anterior</a>
  </div>
</div>

<main>
  <div class="">
    <h4 class="header-left"><span>&nbsp;</span><i class="medium material-icons circle blue-text">public</i>
      <a href="#">Resultado consulta Campistas</a></h4>
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
                    <form action="?c=Visitacion&a=Consulta_Campistas_Controller" method="post">

            <div class="col s9 offset-s2"><span class="flow-text">
                      <div class=" "><!--INICIO DEL DIV DE LA FILA-->
                        <center>

                          <fieldset class="input-field col s12 m5 l5">
                              <legend><h6>Fecha Inicio</h6></legend>
                          <div class="">
                             <i class="material-icons prefix">event_note</i>
                            <input type="date" name="fechaInicio" id="fechaInicio" required>
                          </div>
                          </fieldset>
           <div class="col s1"></div>

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
                    <fieldset class="input-field col s12 m9 l6 ">
                      <div class="input-field col s12">
                          <select name="sector">
                            <option value="" disabled selected>Elija un Sector</option>
                            <option value="1">Santa Rosa</option>
                            <option value="2">Pailas</option>
                            <option value="3">Junquillal</option>
                            <option value="4">Murcielago</option>
                            <option value="5">Santa Maria</option>
                            <option value="6">Horizontes</option>
                            <option value="7">Marino</option>
                          </select>
                          <label>Sectores ACG</label>
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
    </div>
<!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
  <div class="">
    <div class="row">
      <div class="col s12 m12 l12">
        <table class="responsive-table grey lighten-1 centered highlight z-depth-5">
          <thead class="white-text teal darken-4 ">
     <tr>
       <th>Mes</th>
       <th>Dia</th>
       <th>Ingreso</th>
       <th>Acampando</th>
       <th>Proposito Visita</th>
       <th>Sector</th>
       <th>SubSector</th>
       <th>Nacionales</th>
       <th>Extranjeros</th>
       <th>Prepagos</th>

     </tr>
   </thead>
   <tbody>
     <?php foreach ($result as $a):?>
     <tr>
       <td><?php echo $a->Mes;?></td>
       <td><?php echo $a->Dia; ?></td>
       <td><?php echo $a->Hora_Ingreso; ?></td>
       <td><?php echo $a->Dias_Acampando; ?> dia/s</td>
       <td><?php echo $a->proposito_visita; ?></td>
       <td><?php echo $a->Sector; ?></td>
       <td><?php echo $a->SubSector; ?></td>
       <td><?php echo $a->Nacionales; ?></td>
       <td><?php echo $a->Extranjeros; ?></td>
       <td><?php echo $a->Prepagos; ?></td>
     </tr>
     <?php endforeach; ?>
   </tbody>
</table>

      <td colspan="8" class="text-center">
              <a href="?c=Visitacion&a=Excel_CAMPISTAS&fi=<?php echo $fechaStart;?> &ff=<?php echo $fechaEnd;?> &sec=<?php echo $pSector ?>">Exportar a Excel</a>
          </td>

    </div>
  </div>
</div>
</main>
<?php endif; ?>
