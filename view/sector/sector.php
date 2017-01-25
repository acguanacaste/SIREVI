
<main>
  <div class="container">

            <h4 class="header left">Módulo de Sectores</h4>
            <div class="right">
                <a href="index.php?c=Sector&a=agregarRegistro"> <i class="small material-icons">playlist_add</i>Nuevo Sector</a>
            </div>

    </div>
    <div class="container">
    <div class="row">

        <div class="col s12 m12 l12">
            <!-- Inicio de mi codigo -->
            <div id="search-docs" class="section scrollspy">
                <section class="col-lg-18 sector">
                    <table class="responsive-table striped">
                        <thead>
                        <tr>

                            <th>Nombre</th>
                            <th style="width:40px;"></th>
                            <th>Capacidad Diaria</th>
                            <th>Capacidad Camping</th>
                            <th>Area Silviestre</th>
                            <th style="width:40px;"></th>
                            <th colspan="2">Accion</th>

                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($this->model->Listar() as $r): ?>
                            <tr>

                                <td><?php echo $r->nombre; ?></td>
                                <th style="width:40px;"></th>
                                <td><?php echo $r->capacidad_diaria; ?></td>
                                <td><?php echo $r->capacidad_acampar; ?></td>
                                <td><?php echo $r->asp; ?></td>

                                <td>
                                    <a href="?c=Sector&a=Modificar&id=<?php echo $r->id; ?>"><i
                                                class="small material-icons right">edit</i></a>
                                </td>
                                <td>
                                    <a onclick="return confirm('¿Seguro de eliminar este registro?');"
                                       href="?c=Sector&a=Eliminar&id=<?php echo $r->id; ?>">
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
</body>
