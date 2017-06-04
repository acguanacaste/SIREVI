<main>
  <div class="container">
    <div class="row">

      <div class="col s12 m12 l12">
<!-- Inicio de mi codigo -->

    <div  class="">
<!--===========================================================================================================-->
      <fieldset>
        <legend><h5>Sectores</h5>
          <h6>Tarifas del Sector: <?php echo $sector->nombre; ?></h6></legend>
          <div class="">
            <br>
            <div class="">
              <div class="col s12 m12 l12">
                <div class="">
                  <div>

                      <div class=""><!---Inicio de la fila admision por el dia-->
                        <fieldset>
                          <legend>Admisión por el día</legend>
                          <div class="input-field col s6 m6 l6  ">
                            <fieldset>
                              <legend>Tarifas nacionales</legend>

                            </fieldset>
                          </div>

                         <!---->
                         <div class="input-field col s6 m6 l6  ">
                          <fieldset>
                            <legend>Tarifas extranjeros</legend>
                          </fieldset>
                         </div>

                        </div><!--Fin de la fila admision por el dia -->
                      </fieldset>
                   </div>
<div class="">
  <fieldset>
    <legend>Derecho de camping</legend>
    <div class=""><!---Inicio de la fila camping-->

      <div class="input-field col s6 m6 l6  ">
        <fieldset>
          <legend>Tarifas nacionales</legend>

        </fieldset>

      </div>

     <!---->
     <div class="input-field col s6 m6 l6  ">
      <fieldset>
        <legend>Tarifas extranjeros</legend>
      </fieldset>
     </div>

   </div><!--FIN DEL DIV DE LA SEGUNDA FILA -->
  </fieldset>
</div>
                </div>
              </div>
            </div>
      </fieldset>
<!--================================================================================================================================-->
        </div>
      </div><!-- Div de los tamanos -->
    </div>
    </div>
    </main>














<!--
<table class="responsive-table grey lighten-1 centered highlight z-depth-5">
  <thead class="white-text teal darken-4 z-depth-2">
      <tr>
        <th>Adultos extranjeros</th>
        <th>Ninos extranjeros</th>
        <th></th>

        <th style="width:40px;"></th>
        <th colspan="2">Acción</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($this->model->ListadoTarifas() as $r): ?>
        <tr>
          <td><?php echo $r->adulto_extranjero; ?></td>
          <td><?php echo $r->nino_extranjero; ?></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>









<table class="responsive-table grey lighten-1 centered highlight z-depth-5">
  <thead class="white-text teal darken-4 z-depth-2">
      <tr>
        <th>Adultos nacionales</th>
        <th>Ninos nacionales</th>
        <th>Estudiantes</th>

        <th style="width:40px;"></th>
        <th colspan="2">Acción</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($this->model->ListadoTarifas() as $r): ?>
        <tr>
          <td><?php echo $r->adulto_nacional; ?></td>
          <td><?php echo $r->nino_nacional; ?></td>
          <td><?php echo $r->estudiantes; ?></td>

        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>




<table class="responsive-table grey lighten-1 centered highlight z-depth-5">
  <thead class="white-text teal darken-4 z-depth-2">
      <tr>
        <th>Adultos extranjeros</th>
        <th>Ninos extranjeros</th>
        <th></th>

        <th style="width:40px;"></th>
        <th colspan="2">Acción</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($this->model->ListadoTarifas() as $r): ?>
        <tr>
          <td><?php echo $r->adulto_extranjero; ?></td>
          <td><?php echo $r->nino_extranjero; ?></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>




 <table class="responsive-table grey lighten-1 centered highlight z-depth-5">
    <thead class="white-text teal darken-4 z-depth-2">
        <tr>
          <th>Adultos nacionales</th>
          <th>Ninos nacionales</th>
          <th>Estudiantes</th>

          <th style="width:40px;"></th>
          <th colspan="2">Acción</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($this->model->ListadoTarifas() as $r): ?>
          <tr>
            <td><?php echo $r->adulto_nacional; ?></td>
            <td><?php echo $r->nino_nacional; ?></td>
            <td><?php echo $r->estudiantes; ?></td>

          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>-->
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
              <th>Nombre</th>
              <th>Pais</th>
              <th>Fecha ingreso</th>

              <th>Sector</th>
              <th>Dias </th>

              <th>Monto</th>
              <th>Moneda</th>
              <th>Tipo pago</th>
              <!--<th>Total</th>-->
              <th style="width:40px;"></th>
              <th colspan="2">Acción</th>
            </tr>
<!--================================================================================================================== -->
          </thead>
          <tbody>
            <?php foreach ($this->model->Listar() as $r): ?>
            <tr>
              <td><?php echo $r->Nombre; ?></td>
              <td><?php echo $r->Pais; ?></td>
              <td><?php echo $r->fecha_ingreso; ?></td>

              <td><?php echo $r->Sector; ?></td>
              <td><?php echo $r->Dias; ?></td>
              <td class="center"></td>

              <td><?php echo $r->monto;?></td>
              <td><?php echo $r->moneda;?></td>

              <td>
                <a  title="Editar Información"  href="?c=Visitacion&a=Modificar&id=<php echo $r->id; ?>"><i
                    class="small material-icons right">edit</i></a>
              </td>
              <td>
              <a title="Borrar Información" onclick="return confirm('¿Seguro de eliminar este registro?');"
                 href="?c=Visitacion&a=Eliminar&id=<php echo $r->id; ?>">
                  <i class="small material-icons right">delete</i></a>
              </td>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div><!-- Div de los tamanos -->
    </div>
  </div>
</main>
