
<div class="container">
  <a href="?c=Usuario&a=agregarRegistro "><span class="hide-on-med-and-up">
    <i class="small material-icons blue-grey darken-2 z-depth-1 btn-floating pulse">arrow_back</i>Página anterior</a>

  <div class="right hide-on-small-only">
    <a   href="?c=Usuario&a=agregarRegistro">
      <i class="small material-icons blue-grey darken-2 z-depth-1 btn-floating pulse">arrow_back</i>Página anterior</a>
  </div>
</div>
<main>
  <div class="">
    <h4 class="header-left"><span>&nbsp;</span><i class="medium material-icons circle blue-text">public</i><a href="#">Nacionalidades located on visitacion view, belongs to reportes</a></h4>

    <div class="row">
      <div class="col s12 m12 l12">
<!-- Inicio de mi codigo -->
        <div id="" class="">
<!--===========================================================================================================-->
<fieldset>
  <legend><h6>Realice los reportes ingresando un rango de fecha y la nacionalidad</h6></legend>
    <div class="">
      <div class="">
        <div class="col s12 m12 l12">
          <div class="row">
            <div class="row">
            <div class="col s12 m12 l12">
            <ul class="collapsible" data-collapsible="accordion">
            <li>
            <div class="collapsible-header"><i class="material-icons">search</i>Filtro de busqueda</div>
            <div class="collapsible-body"><span><div class="row">
              <div class="col s12 m12 l12">

                <fieldset>
                  <legend><div class="header"><i class="material-icons light-blue accent-3 circle">info_outline</i>
                    &nbsp;Utilice los campos habilitados para ingresar datos</div></legend>
                  <ul class="input-field col s12 m12 l12 popout z-depth-3" data-collapsible="accordion">
                  <li>
                    <div class="header"><i class="material-icons"></i></div>
                    <div class="body "><span >
                      <form action="?c=Visitacion&a=Reporte" method="post">

                    <div class="row">
                       <div class="input-field col s12 m5 l6  ">
                         <input  id="fechaInicio" type="text" name="fechaInicio" class="datepicker" required>
                         <label  for="fechaInicio" >  <i class="small material-icons">event</i><span class="hide-on-small-only">Fecha inicio</span></label>
                       </div>

                      <div class="input-field col s12 m5 l6  ">
                        <input  id="fechaFinal" type="text" name="fechaFinal"  class="datepicker" required>
                        <label  for="fechaFinal" >  <i class="small material-icons">event</i><span class="hide-on-small-only">Fecha final</span></label>
                      </div>

                      <div class="input-field col s12 m4 l4  ">
                        <input  id="autocomplete-input" type="text" name="pais"  class="validate autocomplete" class="form-control" data-validacion-tipo="requerido|min:10"  required>
                        <label  for="autocomplete-input" >  <i class="small material-icons">public</i><span class="hide-on-small-only">País</span></label>
                      </div>

                  </div>

                      <center>
                        <button title="Enviar" class="btn waves-effect waves-light teal darken-4"
                          value="Buscar"  type="submit" name="action"> <span class="hide-on-small-only">Consultar</span>
                            <i class="mdi-content-send material-icons right">pageview</i>
                        </button>
                      </center>
                      <!--<input type="submit" name="pais" value="Buscar" class="teal darken-4 waves-effect waves-light btn">-->
                      </form><!--FORM end-->
                  </span>
                </div>
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

<div class=""><!--INICIO DEL DIV DE LA SEGUNDA FILA-->
<div class="input-field col s12 m12 l12 ">
  <table class="responsive-table grey lighten-1 centered highlight z-depth-5">
  <thead class="white-text teal darken-4 z-depth-2">
      <tr>
        <th> ID</th>
        <th> Fecha visitación</th>
        <th> País</th>
        <th> Nombre</th>
        <th> Tipo pago</th>
        <th> Moneda</th>
        <th> Referencia visitacion</th>
<!--        <th> Sector</th> -->
        <th> Sendero</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($this->model->Nacionalidades() as $r): ?>
      <tr>

        <td><?php echo $r->id; ?></td>
        <td><?php echo $r->fecha; ?></td>
        <td><?php echo $r->Pais; ?></td>
        <td><?php echo $r->Nombre; ?></td>
        <td><?php echo $r->tipo_pago; ?></td>
        <td><?php echo $r->moneda; ?></td>
        <td><?php echo $r->referencia_visita ?></td>
      <!--  <td><?php echo $r->Sector; ?></td> -->
        <td><?php echo $r->Sendero; ?></td>


      </tr>
      <?php endforeach; ?>
    </tbody>
           </table>
          </div>
         </div><!--FIN DEL DIV DE LA SEGUNDA FILA-->
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
