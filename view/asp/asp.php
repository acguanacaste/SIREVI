
<main>
  <div class="container">

            <h4 class="header left"> Areas Protegidas</h4>
            <div class="right">
                <a href="index.php?c=ASP&a=agregarRegistro"> <i class="small material-icons">playlist_add</i>Agregar Area Silvestre</a>
            </div>

    </div>
    <div class="container">
    <div class="row">

        <div class="col s12 m12 l12">
            <!-- Inicio de mi codigo -->
            <div id="search-docs" class="section scrollspy">
                <section class="col-lg-18 ASP">
                    <table class="responsive-table striped">
                        <thead>
                        <tr>

                            <th>ASP</th>
                            <th>Tipo</th>
                            <th>Area </th>
                            <th style="width:40px;"></th>
                            <th colspan="2">Accion</th>

                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($this->model->Listar() as $r): ?>
                            <tr>

                                <td><?php echo $r->nombre; ?></td>
                                <td><?php echo $r->tipo; ?></td>
                                <td><?php echo $r->area_conservacion; ?></td>

                                <td>
                                    <a href="?c=ASP&a=Modificar&id=<?php echo $r->id; ?>"><i
                                                class="small material-icons right">edit</i></a>
                                </td>
                                <td>
                                    <a onclick="return confirm('¿Seguro de eliminar este registro?');"
                                       href="?c=ASP&a=Eliminar&id=<?php echo $r->id; ?>">
                                        <i class="small material-icons right">delete</i></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </section>
                <hr>
            </div><!-- search-docs -->
        </div><!-- Div de los tamanos -->
    </div>
    </div>
    </main>
