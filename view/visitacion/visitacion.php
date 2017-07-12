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
              <th>Total pago</th>
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
              <td><?php echo $r->total_colones; ?></td>



          <!--  <td><php echo $r->fecha_ingreso; ?></td>--

              <td><php echo $r->Sector; ?></td>
              <td><php echo $r->Dias; ?></td>
              <td class="center"></td>

              <td><php echo $r->monto;?></td>
              <td><php echo $r->moneda;?></td>
-->
              <td>
                <a  title="Editar Información"  href="?c=Visitacion&a=Modificar&id=<?php echo $r->id; ?>"><i
                    class="small material-icons right">edit</i></a>
              </td>
              <td>
              <a title="Borrar Información" onclick="return confirm('¿Seguro de eliminar este registro?');"
                 href="?c=Visitacion&a=Eliminar&id=<?php echo $r->id; ?>">
                  <i class="small material-icons right">delete</i></a>
              </td>
            </tr>
          <?php endforeach; ?>
          </tbody>
        </table>
      </div><!-- Div de los tamanos -->
    </div><!--Div del row-->
  </div><!--Div del container-->
</main>
