<?php if ($_SESSION['usuario']['puesto'] == 1 || $_SESSION['usuario']['puesto'] == 3 ):?>
<div class="container">
  <a href="?c=Visitacion&a=Reporte_SEMEC"><span class="hide-on-med-and-up">
    <i class="small material-icons blue-grey darken-2  btn-floating pulse">arrow_back</i>Página anterior</a>

  <div class="right hide-on-small-only">
    <a   href="?c=Visitacion&a=Reporte_SEMEC">
      <i class="small material-icons blue-grey darken-2  btn-floating pulse">arrow_back</i>Página anterior</a>
  </div>
</div>

<main>
  <div class="">
    <h4 class="header-left"><span>&nbsp;</span><i class="medium material-icons circle blue-text">account_balance</i>
      <a href="#">Resultado SEMEC</a></h4>
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
                    <form action="?c=Visitacion&a=Consulta_SEMEC_Controller" method="post">


                      <div class=""><!--INICIO DEL DIV DE LA FILA-->
                        <div class="col s8 offset-s2"><span class="flow-text">
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


                      <div class="row">
                        <div class="center"><span class="flow-text">
                          <div class="input-field col s12 m12 l12">
                          <fieldset class="">
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
          <thead class="white-text teal darken-4 ">
     <tr>
<th>Cantidad Registros</th>
       <th> AC</th>
       <th> Centro Operativo</th>
       <th> Tipo ASP</th>
       <th> Mes</th>
       <th> Nacional Pago</th>
       <th> Nacional Prepago</th>
       <th> Nacional Exonerado</th>
       <th> Total Nacionales</th>
       <th> Extranjeros Pago</th>
       <th> Extranjero Prepago</th>
       <th> Extranjero Exonerado</th>
       <th> Total Extranjeros</th>
       <th> Monto Total</th>
     </tr>
   </thead>

    <tbody>
      <?php foreach ($result as $a):?>
      <tr>
        <td><?php echo $a->Cant_Registros; ?></td>
        <td>        <?php echo $a->AC; ?></td>
        <td>        <?php echo $a->Centro_operativo; ?></td>
        <td>        <?php echo $a->Tipo_ASP; ?></td>
        <td>        <?php echo $a->Mes; ?></td>
        <td><center><?php echo $a->Nacionales_Pago; ?></center></td>
        <td><center><?php echo $a->Nac_Prepago; ?></center></td>
        <td><center><?php echo $a->Nacionales_Exonerado; ?></center></td>
        <td><center><?php echo $a->Total_Nacionales; ?></center></td>
        <td><center><?php echo $a->Extranjeros_Pago; ?></center></td>
        <td><center><?php echo $a->Extranjero_Prepago; ?></center></td>
        <td><center><?php echo $a->Extranjeros_Exonerados; ?></center></td>
        <td><center><?php echo $a->Total_Extranjeros; ?></center></td>
        <td><center><?php echo $a->Monto_Total; ?></center></td>

      </tr>
      <?php endforeach; ?>
    </tbody>

      </table>

      <td colspan="8" class="text-center">
              <a href="?c=Visitacion&a=Excel_SEMEC&fi=<?php echo $fechaStart;?> &ff=<?php echo $fechaEnd;?>">Exportar a Excel</a>
          </td>

    </div>
  </div>
</div>
</main>
<?php endif; ?>
