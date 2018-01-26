<?php if ($_SESSION['usuario']['puesto'] == 1 || $_SESSION['usuario']['puesto'] == 2 ):?>
<main>
  <h4 class="header-left"><span>&nbsp;</span><i class="medium material-icons circle blue-text">public</i>
    <a href="#">Nacionalidades located on visitacion view, belongs to reportes(reportesNacionalidaes view)</a></h4>

  <div class="container">
    <a href="?c=Reporte&a=AdminUser"><span class="hide-on-med-and-up">
      <i class="small material-icons blue-grey darken-2 z-depth-1 btn-floating pulse">playlist_add</i>Nuevo reporte</a>


      <div class="right hide-on-small-only">
        <a   href="?c=Reporte&a=AdminUser">
          <i class="small material-icons blue-grey darken-2 z-depth-1 btn-floating pulse">playlist_add</i>Nuevo reporte</a>
      </div>
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
            <div class="header"><i class="material-icons">info_outline</i>Utilice los campos habilitados para realizar la busqueda de registro</div>
            <div class="body "><span >
              <form action="?c=Visitacion&a=Resultado_Nacionalidades" method="post">

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

    <div class="row">
        <div class="col s12 m12 l12">
            <!-- Inicio de mi codigo -->
          <table class="responsive-table grey lighten-1 centered highlight z-depth-5">
            <thead class="white-text teal darken-4 z-depth-2">
       <tr>
         <th> ID</th>
         <th> Fecha visitación</th>
         <th> País</th>
         <th> Nombre</th>
         <th> Tipo pago</th>
         <th> Moneda</th>
         <th> Referencia visitacion</th>
 <!--        <th> Sector</th> -->
         <th> Sendero</th>
       </tr>
     </thead>

          <tbody>
        <?php foreach ($this->model->Nacionalidades() as $r): ?>
        <tr>

          <td><?php echo $r->id; ?></td>
          <td><?php echo $r->fecha; ?></td>
          <td><?php echo $r->Pais; ?></td>
          <td><?php echo $r->Nombre; ?></td>
          <td><?php echo $r->tipo_pago; ?></td>
          <td><?php echo $r->moneda; ?></td>
          <td><?php echo $r->referencia_visita ?></td>
        <!--  <td><?php echo $r->Sector; ?></td> -->
          <td><?php echo $r->Sendero; ?></td>


        </tr>
        <?php endforeach; ?>
      </tbody>

        </table>
      </div><!-- Div de los tamanos -->
    </div><!--Div del row-->
  </div><!--Div del container-->
</main>
<?php endif; ?>
