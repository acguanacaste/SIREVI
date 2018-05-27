<main>
<<<<<<< refs/remotes/origin/master
<div class="container">
  <h4 class="header left">Módulo de Senderos</h4>


  <a href="index.php?c=Sendero&a=agregarRegistro">
    <span class="hide-on-med-and-up">
      <i class="small material-icons blue-grey darken-2 z-depth-1 btn-floating pulse">playlist_add</i>Agregar Sendero</a>

  <div class="right hide-on-small-only">
    <a href="index.php?c=Sendero&a=agregarRegistro"><i class="small material-icons blue-grey darken-2 z-depth-1 btn-floating pulse">playlist_add</i>Agregar Sendero</a>
  </div>
</div>








<div class="container">
  <div class="row">
    <div class="col s12 m12 l12">
      <!--Inicio de mi codigo-->
      <table class="responsive-table grey lighten-1 centered highlight z-depth-5">
        <thead class="white-text teal darken-4 z-depth-2">
            <tr>
              <th>Sendero</th>
              <th>Sector</th>
              <th>Caracterización</th>
              <th>Tipo</th>
              <th style="width:40px;"></th>
              <th colspan="3">Acción</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($this->model->Listar() as $r): ?>
              <tr>

                <td><?php echo $r->Sendero; ?></td>
                <td><?php echo $r->Sector; ?></td>
                <td><?php echo $r->caracterizacion_sendero; ?></td>
                <td><?php echo $r->tipo_sendero; ?></td>

                <td>
                  <a href="?c=Sendero&a=Descripcion&id=<?php echo $r->id; ?>">
                    <i class="circle white small material-icons right z-depth-2 tooltipped"
        							data-position="top" data-delay="50" data-tooltip="Descripción">description</i></a>
                </td>

                <td>
                  <a title="Editar Información" href="?c=Sendero&a=Modificar&id=<?php echo $r->id; ?>">
                    <i class="circle white small material-icons right z-depth-2 tooltipped"
        							data-position="top" data-delay="50" data-tooltip="Modificar">edit</i></a>
                </td>

                <td>
                  <a title="Borrar Información" onclick="return confirm('¿Estas a un paso de borrar un registro, seguro deseas continuar?');"
                    href="?c=Sendero&a=Eliminar&id=<?php echo $r->id; ?>">
                  <i class=" circle white small material-icons right z-depth-2 tooltipped"
                    data-position="top" data-delay="50" data-tooltip="Eliminar">delete</i></a>
                </td>
                <td>

                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
        </div><!-- Div de los tamanos -->
    </div>
  </div>
</main>
=======
  <div class="container">
    <div class="row">

      <div class="col s12 m9 l10">
<!-- Inicio de mi codigo -->
        <div id="search-docs" class="section scrollspy">
          <section class="col-lg-18 usuario" style="height:400px;overflow-y:scroll;">

            <table class="responsive-table">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Nombre</th>
                  <th>Distancia</th>
                  <th>Longitud</th>
                  <th>Latitud</th>
                  <th>Sector</th>
                  <th style="width:30px;"></th>
                  <th>Accion</th>
                  <th></th>
                  <th style="width:60px;"></th>
                </tr>
              </thead>
              <tbody>
                <?php foreach($this->model->Listar() as $r): ?>
                  <tr>
                    <td><?php echo $r->id; ?></td>
                    <td><?php echo $r->nombre; ?></td>
                    <td><?php echo $r->distancia; ?></td>
                    <td><?php echo $r->longitud; ?></td>
                    <td><?php echo $r->latitud; ?></td>
                    <td><?php echo $r->sector; ?></td>
                    <td>
                      <a href="?c=Sendero&a=Modificar&id=<?php echo $r->id; ?>"><i class="small material-icons right">edit</i></a>
                    </td>
                    <td>
                      <a onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=Sendero&a=Eliminar&id=<?php echo $r->id; ?>">
                        <i class="small material-icons right">delete</i></a>
                      </td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </section>
            <hr>
          </div>
        </div><!-- Div de los tamanos -->

        <div class="col hide-on-small-only m3 l2">
          <div class="toc-wrapper pin-top" style="top: -15px;">
            <div class="buysellads hide-on-small-only">
              <!-- CarbonAds Zone Code -->
              <script async="" type="text/javascript"
              src="" id="_carbonads_js"></script>

          <!--    <div id="carbonads">
                <span>
                  <span class="carbon-wrap">
                    <a href="" class="carbon-img" target="_blank">

                      <img src="" alt="" style="max-width: 130px;" height="100" border="0" width="130"></a>
                      <br>
                <!--      <a href="" class="carbon-text" target="_blank">Algo mas de texto</a></span> -
                      <br>
                  <!--    <a href="" class="carbon-poweredby" target="_blank">Un texto mas...</a></span></div> -
                </div>  -->
                  <div style="height: 1px;">
                    <ul class="section table-of-contents">

                      <hr>
                      <li><a  href="index.php?c=Usuario" ><i style="color:#00b0ff" title="regresar" class=" small material-icons">refresh</i></a></li>
                      <hr>
                      <hr>
                      <li><a  href="Index.php?" ><i style="color:#00b0ff" title="inicio" class="small material-icons">home</i></a></li>
                      <hr>
                      <div class="">

                        <a style="color:#00b0ff" href="index.php?c=Sector&a=agregarRegistro"> <i style="color:#00b0ff" class="small material-icons">playlist_add</i>Agregar Sector</a>

                        <hr>
                      </div>
                      <li>Puedo poner lista de items</li>
                      <li>Otro link por aqui...</li>
                      <li>Sectores...</li>

                    </ul>
                  </div>
                </div>
              </div>
            </div>
            </div>
          </div>
        </main>


  </body>
>>>>>>> add some changes for development
