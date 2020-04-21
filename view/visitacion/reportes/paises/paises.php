<?php if ($_SESSION['usuario']['puesto'] == 1 || $_SESSION['usuario']['puesto'] == 3 ):?>
<main>
  <h4 class="header-left"><span>&nbsp;</span><i class="medium material-icons circle blue-text">public</i>
    <a href="#">Reporte Nacionales</a></h4>

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
            <div class="header"><i class="material-icons">info_outline</i>Utilice los campos habilitados para realizar la busqueda de registro</div>
            <div class="body "><span >

            <form action="?c=Visitacion&a=Consulta_Reporte_Paises_Controller" method="post">

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

  </div><!--Div del container-->
</main>
<?php endif; ?>
