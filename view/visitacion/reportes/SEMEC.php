<?php if ($_SESSION['usuario']['puesto'] == 1 || $_SESSION['usuario']['puesto'] == 3 ):?>
<main>
  <h4 class="header-left"><span>&nbsp;</span><i class="medium material-icons circle blue-text">public</i>
    <a href="#">Reporte SEMEC </a></h4>

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
          <ul class="input-field col s12 m12 l12 popout" data-collapsible="accordion">
          <li>
            <div class="header"><i class="material-icons">info_outline</i>Utilice los campos habilitados para realizar la busqueda de registro</div>
            <div class="body "><span >
              <form action="?c=Visitacion&a=Consulta_SEMEC_Controller" method="post">

                <div class=" "><!--INICIO DEL DIV DE LA FILA-->
                  <center>
                  <div class="input-field col s12 m4 l4">
                     <i class="material-icons prefix">event_note</i>
                     <input type="date" name="fechaInicio" id="fechaInicio" required>

                  </div>

     <!--INICIO DE COLUMNA-->

                <div class="input-field col s12 m4 l4  " >
                  <i class="material-icons prefix">event_note</i>
                  <input type="date" name="fechaFinal" id="fechaFinal" required>
                </div>
              </center>
              </div>


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
         <th>AC</th>
         <th>Centro operativo</th>
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
