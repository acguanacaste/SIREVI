<main>
  <div class="container">

            <h4 class="header left">Módulo de Visitacion</h4>
            <div class="right">
                <a href="index.php?c=Visitacion&a=agregarRegistro"> <i class="small material-icons">playlist_add</i>Nueva Visitacion</a>
            </div>

    </div>
    <div class="container">
    <div class="row">

        <div class="col s12 m12 l12">
            <!-- Inicio de mi codigo -->
            <div id="search-docs" class="section scrollspy">
                <section class="col-lg-18 usuario">
                    <table class="responsive-table striped z-depth-5">
                      <!--  <thead class="z-depth-2">
<==================================Los valores en la vista de visitacion aun estan por aclarar cuale se deben mostrar-->
<!--
                        <tr>

                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Cedula</th>
                            <th>Puesto</th>
                            <th>E-mail</th>
                            <th style="width:40px;"></th>
                            <th colspan="2">Accion</th>

                        </tr>
<==================================================================================================================

                        </thead>
                        <tbody>
                        <php foreach ($this->model->Listar() as $r): ?>
                            <tr>

                                <td><php echo $r->nombre; ?></td>
                                <td><php echo $r->apellido; ?></td>
                                <td><php echo $r->cedula; ?></td>
                                <td><php echo $r->puesto; ?></td>
                                <td><php echo $r->email; ?></td>
                                <td>
                                    <a href="?c=Usuario&a=Crud&id=<php echo $r->id; ?>"><i
                                                class="small material-icons right">edit</i></a>
                                </td>
                                <td>
                                    <a onclick="return confirm('¿Seguro de eliminar este registro?');"
                                       href="?c=Usuario&a=Eliminar&id=<php echo $r->id; ?>">
                                        <i class="small material-icons right">delete</i></a>
                                </td>
                            </tr>
                        <php endforeach; ?>
                        </tbody>
                      -->
                    </table>
                </section>
                <hr>
            </div><!-- search-docs -->
        </div><!-- Div de los tamanos -->
    </div>
    </div>
        </main>
