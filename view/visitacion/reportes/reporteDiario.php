<?php if ($_SESSION['usuario']['puesto'] == 1 || $_SESSION['usuario']['puesto'] == 3 ):?>
<main>
  <h4 class="header-left"><span>&nbsp;</span><i class="medium material-icons circle blue-text">public</i>
    <a href="#">Reporte Diario(Gestion para el dia de trabajo)</a></h4>

<div class="">

    <!--Busqueda avanzada-->
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
            <div class="header"><i class="material-icons">info_outline</i>La fecha de inicio debe ser menor que la fecha final</div>
            <div class="body "><span >
              <form action="?c=Visitacion&a=Consulta_ReporteDiario_Controller" method="post">

      <div class="col s6 offset-s3"><span class="flow-text">
                <div class=" "><!--INICIO DEL DIV DE LA FILA-->
                  <center>

                    <fieldset class="input-field col s12 m5 l5">
                      <legend><h6>Fecha Inicio</h6></legend>
                    <div class="">
                       <i class="material-icons prefix">event_note</i>
 <input type="date" name="fechaInicio" id="fechaInicio" required>                    </div>
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

                $sentencia = "select nombre from sector order by nombre ASC";
                $query = $query_provincia = mysqli_query($conexion,$sentencia);
                ?>
                <div  class="input-field col s6 m6 l12">
                  <select name="sector">
                    <option value="" disabled selected>Elija un Sector</option>
                    <?php while ($arreglo = mysqli_fetch_array($query)) {  ?>
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
  </li>

</ul>
  </div>
</div>

    <div class="row">
        <div class="col s12 m12 l12">
            <!-- Inicio de mi codigo -->
          <table class="responsive-table grey lighten-1 centered highlight z-depth-5">
            <thead class="white-text teal darken-4 ">
       <tr>
         <th>Entrada</th>
         <th>Salida</th>
         <th>Tipo ASP</th>
         <th>ASP</th>
         <th>Mes</th>
         <th>Nac. Pagos</th>
         <th>Exonerdado</th>
         <th>Total Nac.</th>
         <th>Ext. Pagos</th>
         <th>Total Ext</th>
         <th>Monto Total</th>
       </tr>
     </thead>

      <tbody>

      </tbody>

        </table>
      </div><!-- Div de los tamanos -->
    </div><!--Div del row-->
  </div><!--Div del container-->
</main>
<?php endif; ?>
