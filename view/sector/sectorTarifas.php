<main>
  <div class="container">
    <div class="row">

      <div class="col s12 m12 l12">


    <div  class="">
<!--===========================================================================================================-->
    <legend><h5>Sectores</h5>
          <h6>Tarifas de los Sectores </h6></legend>
          <div class="">
            <br>
            <div class="">
              <div class="col s12 m12 l12">
                <div class="">
                  <div>

                      <div class=""><!---Inicio de la fila admision por el dia-->
                        <fieldset>
                          <legend>Admisión por el día</legend>
                          <div class="input-field col s12 m12 l6  ">
                            <fieldset>
                              <legend>Tarifas nacionales</legend>
                              <table class="responsive-table grey lighten-1 centered highlight z-depth-5">
                                <thead class="white-text teal darken-4 z-depth-2">
                                    <tr>
                                      <th>Sector</th>
                                      <th>Adultos </th>
                                      <th>Ninos </th>
                                      <th>Estudiantes</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                <?php foreach($this->model->ListadoTarifas() as $r ): ?>
                                      <tr>
                                        <td><?php echo $r->nombre; ?></td>
                                        <td><?php echo $r->adulto_nacional; ?></td>
                                        <td><?php echo $r->nino_nacional; ?></td>
                                        <td><?php echo $r->estudiantes; ?></td>
                                      </tr>
                                    <?php endforeach; ?>
                                  </tbody>
                                </table>

                            </fieldset>
                          </div>

                         <!---->
                         <div class="input-field col s12 m12 l6  ">
                          <fieldset>
                            <legend>Tarifas extranjeros</legend>
                            <table class="responsive-table grey lighten-1 centered highlight z-depth-5">
                              <thead class="white-text teal darken-4 z-depth-2">
                                  <tr>
                                    <th>Sector</th>
                                    <th>Adultos </th>
                                    <th>Ninos </th>

                                  </tr>
                                </thead>
                                <tbody>
                                  <?php foreach ($this->model->ListadoTarifas() as $r): ?>
                                    <tr>
                                      <td><?php echo $r->nombre ?></td>
                                      <td><?php echo $r->adulto_extranjero; ?></td>
                                      <td><?php echo $r->nino_extranjero; ?></td>
                                    </tr>
                                  <?php endforeach; ?>
                                </tbody>
                              </table>
                          </fieldset>
                         </div>

                        </div><!--Fin de la fila admision por el dia -->
                      </fieldset>
                   </div>


                    <div class="">
                      <fieldset>
                        <legend>Derecho de camping</legend>
                        <div class=""><!---Inicio de la fila camping-->

                          <div class="input-field col s12 m12 l6  ">
                            <fieldset>
                              <legend>Tarifas nacionales</legend>
                              <table class="responsive-table grey lighten-1 centered highlight z-depth-5">
                                 <thead class="white-text teal darken-4 z-depth-2">
                                     <tr>
                                       <th>Sector</th>
                                       <th>Adultos </th>
                                       <th>Ninos </th>
                                       <th>Estudiantes</th>

                                     </tr>
                                   </thead>
                                   <tbody>
                                     <?php foreach ($this->model->ListadoTarifas() as $r): ?>
                                       <tr>
                                         <td><?php echo $r->nombre; ?></td>
                                         <td><?php echo $r->camping_adulto_nacional; ?></td>
                                         <td><?php echo $r->camping_nino_nacional; ?></td>
                                         <td><?php echo $r->camping_estudiantes; ?></td>

                                       </tr>
                                     <?php endforeach; ?>
                                   </tbody>
                                 </table>
                            </fieldset>

                          </div>

                         <!---->
                         <div class="input-field col s12 m12 l6  ">
                          <fieldset>
                            <legend>Tarifas extranjeros</legend>
                            <table class="responsive-table grey lighten-1 centered highlight z-depth-5">
                              <thead class="white-text teal darken-4 z-depth-2">
                                  <tr>
                                    <th>Sector</th>
                                    <th>Adultos </th>
                                    <th>Ninos </th>

                                  </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($this->model->ListadoTarifas() as $r): ?>
                                    <tr>
                                      <td><?php echo $r->nombre; ?></td>
                                      <td><?php echo $r->camping_adulto_extranjero; ?></td>
                                      <td><?php echo $r->camping_nino_extranjero; ?></td>
                                    </tr>
                                  <?php endforeach; ?>
                                </tbody>
                              </table>
                          </fieldset>
                         </div>

                       </div><!--FIN DEL DIV DE LA SEGUNDA FILA -->
                      </fieldset>
                    </div>
                </div>
              </div>
            </div>
<!--================================================================================================================================-->
        </div>
      </div><!-- Div de los tamanos -->
    </div>
  </div>
</main>
