<main>
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
