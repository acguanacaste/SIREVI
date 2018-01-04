<main>
  <div class="container">
    <h4 class="header left">Módulo Visitación</h4>
    <a href="index.php?c=Visitacion&a=agregarRegistro"><span class="hide-on-med-and-up"><i class="small material-icons">playlist_add</i>Nueva Visitación</a>

      <div class="right hide-on-small-only">
        <a href="index.php?c=Visitacion&a=agregarRegistro"> <i class="small material-icons">playlist_add</i><span>Nueva Visitación</span></a>
      </div>
    </div>


    <div class="container">

<div class="row">
  <div class="col s12 m12 l12">
    <ul class="collapsible" data-collapsible="accordion">
  <li>
    <div class="collapsible-header"><i class="material-icons">search</i>Filtro de busqueda</div>
    <div class="collapsible-body"><span><div class="row">
      <div class="col s12 m12 l12">

        <fieldset>
          <ul class="input-field col s12 m12 l12 popout z-depth-3" data-collapsible="accordion">
          <li>
            <div class="header"><i class="material-icons">search</i>Utilice los campos habilitados para realizar la busqueda de registro</div>
            <div class="body "><span >
              <form action="?c=Visitacion&a=busquedaVisitacion" method="post">

                <div class="input-field col s12 m4 l4">
              <i class="small material-icons">contact_mail</i><input type="text" name="nombre" class="black-text" placeholder="Nombre" style="width:200px;">
                </div>

              <div class="input-field col s12 m4 l4">
                    <i class="small material-icons">picture_in_picture</i><input type="text" name="noIdentificacion" class="black-text" placeholder="Identificacion" style="width:200px;">
              </div>

              <div class="input-field col s12 m4 l4">
                <i class="small material-icons">public</i><input type="text" name="pais" class="black-text" placeholder="Pais" style="width:200px;" >
              </div>
              <center>
                <button title="Enviar" class="btn waves-effect waves-light teal darken-4"
                  value="Buscar"  type="submit" name="action"> <span class="hide-on-small-only">Consultar</span>
                    <i class="mdi-content-send material-icons right">pageview</i>
                </button>
              </center>
              <!--<input type="submit" name="pais" value="Buscar" class="teal darken-4 waves-effect waves-light btn">-->
              </form><!--FORM end-->
          </span></div>
          <hr>
         </li>
        </ul>
        </fieldset>
      </div>
    </div>
</span></div>
  </li>

</ul>
  </div>
</div>

    <!--Busqueda avanzada-->

    <div class="row">
        <div class="col s12 m12 l12">
            <!-- Inicio de mi codigo -->
          <table class="responsive-table grey lighten-1 centered highlight z-depth-5">
            <thead class="white-text teal darken-4 z-depth-2">
<!--==================================Los valores en la vista de visitacion aun estan por aclarar cuale se deben mostrar-->
            <tr>
              <th>ID</th>
              <th>proposito</th>
              <th>Nombre</th>
              <th>Identificacion</th>
              <th>placa_automovil</th>
              <th>Pais</th>
              <th>provincia</th>
        <!--      <th>referencia_visita</th> -->

              <th>sendero</th>
          <!--    <th>Dias </th> -->

          <!--    <th>nacional_adult</th>
              <th>nacional_kid</th>
              <th>estudiantes</th>
              <th>extranjero_adult</th>
              <th>extranjero_kid</th>

              <th>personas_surf</th>
              <th>exonerado</th>
              <th>prepago</th> -->

              <th>tipo_pago</th>
              <th>moneda</th>
              <!--<th>Total pago</th> -->
              <!--<th>Total</th>-->
              <th style="width:40px;"></th>
              <th colspan="2">Acción</th>
            </tr>
<!--================================================================================================================== -->
          </thead>

          <tbody>
            <?php foreach ($this->model->Listar() as $r): ?>
            <tr>

              <td><?php echo $r->id; ?></td>
              <td><?php echo $r->proposito_visita; ?></td>

              <td><?php echo $r->Nombre; ?></td>
              <td><?php echo $r->noIdentificacion; ?></td>
              <td><?php echo $r->placa_automovil; ?></td>

              <td><?php echo $r->Pais; ?></td>
              <td><?php echo $r->Provincia; ?></td>
          <!--    <td><?php echo $r->referencia_visita ?></td>-->

              <td><?php echo $r->Sendero; ?></td>

            <!--    <td><?php echo $r->Dias; ?></td>

            <td><?php echo $r->nacional_adult ?></td>
              <td><?php echo $r->nacional_kid ?></td>
              <td><?php echo $r->estudiantes ?></td>
              <td><?php echo $r->extranjero_adult ?></td>
              <td><?php echo $r->extranjero_kid ?></td>

              <td><?php echo $r->personas_surf ?></td>
              <td><?php echo $r->exonerado ?></td>
              <td><?php echo $r->prepago ?></td> -->


              <td><?php echo $r->tipo_pago; ?></td>
              <td><?php echo $r->moneda; ?></td>
          <!--    <td><php echo $r->total_colones; ?></td> -->



          <!--  <td><php echo $r->fecha_ingreso; ?></td>--

              <td><php echo $r->Sector; ?></td>
              <td><php echo $r->Dias; ?></td>
              <td class="center"></td>

              <td><php echo $r->monto;?></td>
              <td><php echo $r->moneda;?></td>
-->
              <td>
                <a  title="Editar Información"  href="?c=Visitacion&a=Modificar&id=<?php echo $r->id; ?>"><i
                    class="white circle z-depth-3 small material-icons right">edit</i></a>
              </td>
              <td>
              <a title="Borrar Información" onclick="return confirm('¿Seguro de eliminar este registro?');"
                 href="?c=Visitacion&a=Eliminar&id=<?php echo $r->id; ?>">
                  <i class="white circle z-depth-3 small material-icons right">delete</i></a>
              </td>
            </tr>
          <?php endforeach; ?>
          </tbody>
        </table>
      </div><!-- Div de los tamanos -->
    </div><!--Div del row-->
  </div><!--Div del container-->
</main>
