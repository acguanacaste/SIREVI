<?php if ($_SESSION['usuario']['puesto'] == 1 || $_SESSION['usuario']['puesto'] == 3 ):?>
  <div class="container">
    <a href="?c=Reportes&a=AdminUser"><span class="hide-on-med-and-up">
      <i class="small material-icons blue-grey darken-2 z-depth-1 btn-floating pulse">arrow_back</i>Página anterior</a>

    <div class="right hide-on-small-only">
      <a   href="?c=Reportes&a=AdminUser">
        <i class="small material-icons blue-grey darken-2 z-depth-1 btn-floating pulse">arrow_back</i>Página anterior</a>
    </div>
  </div>

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
          <ul class="input-field col s12 m12 l12 popout z-depth-3" data-collapsible="accordion">
          <li>
            <div class="header"><i class="material-icons">info_outline</i>Seleccione el dia que requiere y un sector para proceder con la busqueda.</div>
            <div class="body "><span >
              <form action="?c=Visitacion&a=Consulta_ReporteDiario_Controller" method="post">
                <div class="col s9 offset-s2"><span class="flow-text">
                          <div class="z-depth-2 "><!--INICIO DEL DIV DE LA FILA-->
                            <center>

                              <fieldset class="input-field col s12 m5 l5">
                                  <legend><h6>Fecha requerida</h6></legend>
                              <div class="">
                                 <i class="material-icons prefix">event_note</i>
                                <input placeholder="Fecha requerida"  type="text" class="datepicker" id="fechaInicio" name="fechaInicio" required>
                              </div>
                              </fieldset>
               <div class="col s1"></div>

                         <fieldset class="input-field col s12 m5 l5">
                      <legend><h6>Sectores</h6></legend>
                           <div class="" >
                             <select name="sector" >
                               <option value="" disabled selected>Elija un Sector</option>
                               <option value="1">Santa Rosa</option>
                               <option value="2">Pailas</option>
                               <option value="3">Junquillal</option>
                               <option value="4">Murcielago</option>
                               <option value="5">Santa Maria</option>
                               <option value="6">Horizontes</option>
                               <option value="7">Marino</option>
                             </select>
                           </div>
                           </fieldset>
                          </center>
                        </div>
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
  </li>

</ul>
  </div>
</div>

    <div class="row">
        <div class="col s12 m12 l12">
            <!-- Inicio de mi codigo -->
          <table class="responsive-table grey lighten-1 centered highlight z-depth-5">
            <thead class="white-text teal darken-4 z-depth-2">
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
