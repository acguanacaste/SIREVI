<?php if ($_SESSION['usuario']['puesto'] == 1 || $_SESSION['usuario']['puesto'] == 3 ):?>
<main>
  <h4 class="header-left"><span>&nbsp;</span><i class="medium material-icons circle blue-text">public</i>
    <a href="#">Reporte Nacionalidades</a></h4>

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
<<<<<<< HEAD
              <form action="?c=Visitacion&a=ConsultaNacionalesController_2" method="post">
=======
              <form action="?c=Visitacion&a=ConsultaNacionalesController" method="post">
>>>>>>> 5dcb12cff601f083d8d8057e37f4b8b93f3ef03d


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
      </div><!-- Div de los tamanos -->
    </div><!--Div del row-->
  </div><!--Div del container-->
</main>
<?php endif; ?>
