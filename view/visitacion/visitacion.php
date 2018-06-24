
<main>
  <h4 class="header left"><span>&nbsp;</span><a href="#">
    <i class="medium material-icons circle blue-grey darken-2">assignment</i>Módulo Visitación</a></h4>


  <div class="container">
    <a href="?c=Visitacion&a=agregarRegistro"><span class="hide-on-med-and-up">
      <i class="small material-icons blue-grey darken-2 z-depth-1 btn-floating pulse">playlist_add</i>Nuevo registro</a>


      <div class="right hide-on-small-only">
        <a   href="?c=Visitacion&a=agregarRegistro">
          <i class="small material-icons blue-grey darken-2 z-depth-1 btn-floating pulse">playlist_add</i>Nuevo registro</a>
      </div>
    </div>

<div class="left">

</div>

<div class="">
    <!--Busqueda avanzada-->
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
            <div class="header"><i class="material-icons">info_outline</i>Utilice los campos habilitados para realizar la busqueda de registro(s)</div>
            <div class="body "><span >
              <form action="?c=Visitacion&a=busquedaVisitacion" method="post">

  <div class="col s11 offset-s1"><span class="flow-text">
                <div class="input-field col s12 m3 l3">
                  <i class="small material-icons">contact_mail</i>
                  <input type="text" name="nombre" class="black-text" placeholder="Nombre" style="width:200px;">
                </div>
<div class="col s1">

</div>
              <div class="input-field col s12 m3 l3">
                    <i class="small material-icons">picture_in_picture</i>
                    <input type="text" name="noIdentificacion" class="black-text" placeholder="Identificacion" style="width:200px;">
              </div>
<div class="col s1">

</div>
              <div class="input-field col s12 m3 l3">
            <i class="small material-icons">directions_car</i>
            <input type="text" name="placa_automovil" class="black-text" placeholder="No.Placa" style="width:200px;">
              </div>
</span></div>
              <!--==============Cargando los paices==============================-->
<!--<div class="row">
  <php
  $conexion = mysql_connect("localhost","root");
  mysql_select_db("sirevi",$conexion);
  $sentencia_pais = "select * from pais order by nombre ASC";
  $query_pais = mysql_query($sentencia_pais);
  ?>
  <div  class="input-field col s6 m12 l3">
    <select name="pais">
      <option value="" selected>Elija un pais</option>
      <php while ($arreglo_pais = mysql_fetch_array($query_pais)) {  ?>
      <option value="<php echo $arreglo_pais['id']?>"><php echo $arreglo_pais['nombre'] ?></option>
      <php } ?>
    </select>
    <label>País</label>
  </div>

</div> -->


              <center>
                <button title="Enviar" class="btn waves-effect waves-light teal darken-4"
                  value="Buscar"  type="submit" name="action"> <span class="hide-on-small-only">Consultar</span>
                    <i class="mdi-content-send material-icons right">pageview</i>
                </button>
              </center>

              <!--<div>
              <div class="">
                <a href="?c=Visitacion&a=busquedaSubSector"><span class="hide-on-med-and-up">
                  <i class="small material-icons blue-grey darken-2 z-depth-1 btn-floating pulse">art_track</i>Consultar SubSector</a>
              </div>

                  <div class="right hide-on-small-only">
                    <a   href="?c=Visitacion&a=busquedaSubSector">
                      <i class="small material-icons blue-grey darken-2 z-depth-1 btn-floating pulse">art_track</i>Consultar SubSector</a>
                  </div>
                </div>-->

                </div>

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


    <div class="row">
        <div class="col s12 m12 l12">
            <!-- Inicio de mi codigo -->
          <table id="data-table-simple" class="responsive-table grey lighten-1 centered highlight z-depth-5">
            <thead class="white-text teal darken-4 z-depth-2">
<!--==================================Los valores en la vista de visitacion aun estan por aclarar cuale se deben mostrar-->
            <tr>
              <th>ID</th>
              <th>Proposito</th>
              <th>Fecha ingreso</th>
              <th>Nombre</th>
              <th>Identificación</th>
              <th>Placa automovil</th>
              <th>País</th>
              <th>Sendero</th>
              <th>Tipo pago</th>
              <th>Moneda</th>
              <th>Ingresos</th>
              <th>Salida</th>
              <th style=""></th>
              <th colspan="2">Acción</th>
            </tr>
<!--================================================================================================================== -->
          </thead>

          <tbody>
            <?php foreach ($this->model->Listar() as $r): ?>
            <tr>

              <td><?php echo $r->id; ?></td>
              <td><?php echo $r->proposito_visita; ?></td>
              <td><?php echo $r->fecha; ?></td>
              <td><?php echo $r->Nombre; ?></td>
              <td><?php echo $r->noIdentificacion; ?></td>
              <td><?php echo $r->placa_automovil; ?></td>

              <td><?php echo $r->Pais; ?></td>

              <td><?php echo $r->Sendero; ?></td>
              <td><?php echo $r->tipo_pago; ?></td>
              <td><?php echo $r->moneda; ?></td>


              <td ><?php if($r->salida==0){
                echo "
                <a onclick='setTime()' href='?c=Visitacion&a=Salida&id=".$r->id."'>
                        <i  class='circle white darken-2 small material-icons tooltipped'
                          data-position='bottom' data-delay='50'
                          data-tooltip='Dentro del parque'>directions_walk</i></a>
                          <p  id='time'></p>";
                    }

                    elseif ($r->salida==1) {
                      echo "
                      <a onclick='setTime()'   href='?c=Visitacion&a=Salida&id=".$r->id."'>
                              <i  class='circle red darken-2 small material-icons tooltipped'
                                data-position='bottom' data-delay='50'
                                data-tooltip='Fuera del parque'>do_not_disturb_off</i></a>";
                  }; ?>

                </td>
                <td class="center"><?php echo $r->horaSalida; ?></td> <!--Esta es la variable cuando se cambia estado de ingreso a salida del parque-->

              <td>
                <a  title="Editar Información"  href="?c=Visitacion&a=Modificar&id=<?php echo $r->id; ?>"><i
                    class="white circle z-depth-3 small material-icons right">edit</i></a>
              </td>

            <?php if($_SESSION['usuario']['puesto']== 1 || $_SESSION['usuario']['puesto']== 2 || $_SESSION['usuario']['puesto']== 3): ?>
              <td>
              <a title="Borrar Información"  onclick="return confirm('¿Seguro de eliminar este registro?');"
                 href="?c=Visitacion&a=Eliminar&id=<?php echo $r->id; ?>">
                  <i class="white circle z-depth-3 small material-icons right">delete</i></a>
              </td>
            <?php endif;?>
            </tr>
          <?php endforeach; ?>
          </tbody>
        </table>
      </div><!-- Div de los tamanos -->
    </div><!--Div del row-->
  </div><!--Div del container-->
</main>
