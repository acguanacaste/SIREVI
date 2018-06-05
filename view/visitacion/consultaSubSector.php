<?php if ($_SESSION['usuario']['puesto'] == 1 || $_SESSION['usuario']['puesto'] == 3 ):?>
<div class="container">
  <a href="?c=Visitacion&a=busquedaSubSector"><span class="hide-on-med-and-up">
    <i class="small material-icons blue-grey darken-2 z-depth-1 btn-floating pulse">arrow_back</i>Página anterior</a>

  <div class="right hide-on-small-only">
    <a   href="?c=Visitacion&a=busquedaSubSector">
      <i class="small material-icons blue-grey darken-2 z-depth-1 btn-floating pulse">arrow_back</i>Página anterior</a>
  </div>
</div>

<main>
  <div class="">
    <h4 class="header-left"><span>&nbsp;</span><i class="medium material-icons circle blue-text">public</i>
      <a href="#">Consultar SubSector</a></h4>
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
                    <form action="?c=Visitacion&a=resultadoBusquedaSubSector" method="post">

            <div class="col s9 offset-s2"><span class="flow-text">
                      <div class="z-depth-2 "><!--INICIO DEL DIV DE LA FILA-->
                        <center>

                          <fieldset class="input-field col s12 m5 l5">
                              <legend><h6>Fecha Inicio</h6></legend>
                          <div class="">
                             <i class="material-icons prefix">event_note</i>
                            <input placeholder="Fecha Inicio"  type="text" class="datepicker" id="fechaInicio" name="fechaInicio" required>
                          </div>
                          </fieldset>
           <div class="col s1"></div>

                     <fieldset class="input-field col s12 m5 l5">
                  <legend><h6>Fecha Final</h6></legend>
                       <div class="" >
                         <i class="material-icons prefix">event_note</i>
                         <input placeholder="Fecha Final" type="text" class="datepicker" id="fechaFinal" name="fechaFinal"  value="" required>

                       </div>

                         </fieldset>
                      </center>
                    </div>
                  </span></div>


                <div class="col s6 offset-s4"><span class="flow-text">
                  <fieldset class="input-field col s12 m9 l6 ">
                    <div class=""><!---Inicio de la segunda fila-->
                    <!--==============Cargando los paices==============================-->
                      <?php
                      $conexion = mysql_connect("localhost","root");
                      mysql_select_db("sirevi",$conexion);
                      $sentencia = "select nombre from sector order by id ASC";
                      $query = mysql_query($sentencia);
                      ?>
                      <div  class="input-field col s6 m12 l12">
                        <select name="subSector">
                          <option value="" disabled selected>Elija un SubSector</option>
                          <option>
                        </select>
                        <label>Sectores</label>
                      </div>
                    </fieldset>
                  </span></div>


                      <div class="row">
                        <div class="center"><span class="flow-text">
                          <div class="input-field col s12 m12 l12">
                          <fieldset class="z-depth-2">
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
          <thead class="white-text teal darken-4 z-depth-2">
     <tr>
       <th>Nombre</th>
       <th>Sector</th>
       <th>SubSector</th>
       <th>Fecha</th>
       <th>Hora</th>
       <th>Salida</th>
       <th>Proposito Visita</th>

     </tr>
   </thead>

</table>

      <td colspan="8" class="text-center">
              <a href="?c=Visitacion&a=Excel">Exportar a Excel</a>
          </td>

    </div>
  </div>
</div>
</main>
<?php endif; ?>
