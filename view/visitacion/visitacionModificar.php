<main>
  <div class="container">
    <div class="">

      <div class="col s12 m12 l12">

<!--====================================================================================================================-->
<div class="">
  <form id="frm-visitacion" action="?c=Visitacion&a=Guardar" method="post" enctype="multipart/form-data">
  <fieldset>
    <fieldset>
      <div class="">
        <div class="col s12 m12 l12">
          <div class="">
              <div><!-- Inicio de las filas y columnas -->

                <div class="row"><!---Inicio de dos columnas-->
<div class="col m1">

</div>
                <div class="input-field col s6 m4 l2">
                  <fieldset><center><legend>Numero diario</legend></center>
                    <center>
                      <div class="btn teal darken-4 right-align "><?php echo $this->model->Consecutivo(); ?></div>
                  </center>
                  </fieldset>
                </div>

                <div class="input-field col s6 m4 l3 hide-on-med-and-down">
                  <fieldset><center><legend>Capacidad de Sector</legend></center>
                    <center>
                      <div class="btn teal darken-4 right-align "> <?php echo $this->model->Cantidad_Personas_Dentro_Parque();?>&nbsp;/&nbsp;<?php echo $_SESSION['sector']['capacidadDiaria'] ?> </div>
                    </center>
                  </fieldset>
                </div>

                <div class="input-field col s6 m6 l3">
                  <fieldset><center><legend>Sector</legend></center>
                    <center>
                      <div class="btn teal darken-4 right-align" value="<?php echo $_SESSION['sector']['id_Sector']; ?>" name="sector"><?php echo $_SESSION['sector']['sectorNombre'];?></div>
                    </center>
                  </fieldset>
                </div>

                <div class="hide-on-med-and-down input-field col s6 m4 l3">
                  <fieldset><center><legend>Usuario</legend></center>
                    <center>
                      <div name="usuario" value="<?php echo $_SESSION['usuario']['id'];?>" class="btn teal darken-4 right-align "><?php echo $_SESSION['usuario']['nombre'];?></div>
                    </center>
                  </fieldset>
                </div>
               </div><!--Fin de columnas -->
             </div><!-- Fin de filas y columnas -->
          </div><!-- <!-- Fin del row -->
        </div><!-- Tamanos -->
      </div><!-- Fin del row -->
  <!--================================================================================================================================-->
</fieldset>
</div><!-- Fin de los fieldset -->
<!--=========================================================================================================================================-->
    <div id="" class="">
    <hr>
<!--===========================================================================================================-->
    <fieldset>
      <legend><h5>Formulario para modificar información </h5>
        <h6>Modificar registro, utilice los campos a disposicion</h6></legend>
        <div class="">
          <hr> <br>
          <div class="row"><!--la clase en este div me permite tener los elementos del formulario en orden y en las filas correspondientes-->
            <div class="col col s12 m12 l12">
              <div class="">

                  <input type="hidden" name="id" value="<?php echo $visit->id; ?>" />
                  <input type="hidden" name="sector" value="<?php echo $_SESSION['usuario']['id']; ?>">
                  <input type="hidden" name="usuario" value="<?php echo $_SESSION['sector']['id_Sector']; ?>">
                  <input type="hidden" name="asp" value="<?php echo $_SESSION['sector']['areaSilvestreProtegida']; ?>">

        <!--          <div class="row">
                  <div class="input-field col s12 m6 l4">
                    <fieldset>
                      <legend>Seleccione la fecha que desea</legend>
                      <div class="input-field col s12 m12 l12">
                        <input  type="text" class="datepicker" id="fecha" name="fecha" value="" required>
                        <label for="fecha"> <i class="small material-icons">event</i><span class="hide-on-small-only">Fecha ingreso</span></label>

                      </div>
                    </fieldset>
                  </div>

                  <div class="col l4">
                  </div>
                    <div class="input-field  col s12 m6 l4">
                      <fieldset>
                        <legend> <i class="small material-icons">access_time</i><span class="hide-on-small-only">Hora ingreso <br>  Formato 23:59:59</span></legend>
                        <div class="input-field col s12 m12 l12">
                           <input class="timepicker"  id="time" name="fecha" value="" required>
                        </div>
                      </fieldset>
                    </div>
                  </div> -->



<!--==========================================================================================================-->
<div class="">
<div class="input-field col s12 m6 l6">
 <fieldset  class="z-depth-1 ">
   <legend>&nbsp;Proposito de Visitación&nbsp;</legend>
     <div class="input-field col s12 m12 l12">
       <select id="proposito_visita" name="proposito_visita">
         <option value="" disabled selected>Elija una opción</option>
         <option  value="Por el dia"<?php echo $visit->proposito_visita=="Por el dia"?"selected":null; ?>>Por el dia</option>
         <option  value="Acampando"<?php echo $visit->proposito_visita=="Acampando"?"selected":null; ?>>Acampando</option>
         <option  value="3"<?php echo $visit->proposito_visita=="Hospedado en Estacion Biologica"?"selected":null; ?>>Hospedado en Estacion Biologica</option>
         </select>
       <label><i class="small material-icons" >info_outline</i></label>
     </div>
   </fieldset>
 </div>
</div>

<div class="input-field col s12 m6 l6 ">
  <fieldset>
    <legend>Sub sector al que se dirije</legend>
    <div class="input-field col s12 m12 l12">
      <label for="subSector"> <i class="small material-icons"></i><span class="hide-on-small-only">Sub Sector</span></label>
       <input  type="text" id="subSector" name="subSector" value="<?php echo $visit->subSector; ?>" required>
    </div>
  </fieldset>
</div>
<br>
<!--===========================================================================================================-->

                  <div><!--Inicio de la primera fila-->
                    <div class="input-field col s6 m6 l4  ">
                      <input  id="name" type="text" name="nombre" value="<?php echo $visit->nombre ?>" class="validate" class="form-control"  required >
                      <label for="name" ><i class="small material-icons">face</i></span>&nbsp;Nombre</label>
                    </div>
                      <div class="input-field col s6 m6 l4  ">
                        <input  id="noIdentificacion" type="text" name="noIdentificacion" value="<?php echo $visit->noIdentificacion ?>" class="validate" class="form-control"  required >
                        <label for="noIdentifiacion" >  <i class="small material-icons">subtitles</i>&nbsp;Número de identifiación</label>
                      </div>
                      <div  class="input-field col s6 m6 l4  ">
                        <input  id="placa_automovil" type="text" name="placa_automovil" value="<?php echo $visit->placa_automovil; ?>" class="validate" class="form-control"   >
                        <label for="placa_automovil" >  <i class="small material-icons">settings_ethernet</i>&nbsp;Placa automóvil</label>
                      </div>
                  </div><!--Fin de la primera fila -->
    <!--===================================================================================================================================================-->
    <!--===================================================================================================================================================-->
                <div class=""><!---Inicio de la segunda fila-->
                <!--==============Cargando los paices==============================-->
                  <?php
                  $conexion = mysql_connect("localhost","root");
                  mysql_select_db("sirevi",$conexion);
                  $sentencia_pais = "select * from pais order by nombre ASC";
                  $query_pais = mysql_query($sentencia_pais);
                  ?>
                  <div  class="input-field col s6 m4 l4">
                    <select name="pais">
                      <option value="" disabled selected>Elija un pais</option>
                      <?php while ($arreglo_pais = mysql_fetch_array($query_pais)) {  ?>
                      <option value="<?php echo $arreglo_pais['id']?>"><?php echo $arreglo_pais['nombre'] ?></option>
                      <?php } ?>
                    </select>
                    <label>País</label>
                  </div>


<!--==============Cargando las cuidades============================================-->
      <div class="input-field col s6 m4 l4">
        <select name="provincia">
          <option value="" disabled selected>Elija una opción</option>
          <option value="1"<?php echo $visit->provincia_id==1?"selected":null; ?>>San Jose</option>
          <option value="2"<?php echo $visit->provincia_id==2?"selected":null; ?>>Alajuela</option>
          <option value="3"<?php echo $visit->provincia_id==3?"selected":null; ?>>Cartago</option>
          <option value="4"<?php echo $visit->provincia_id==4?"selected":null; ?>>Heredia</option>
          <option value="5"<?php echo $visit->provincia_id==5?"selected":null; ?>>Guanacaste</option>
          <option value="6"<?php echo $visit->provincia_id==6?"selected":null; ?>>Putarenas</option>
          <option value="7"<?php echo $visit->provincia_id==7?"selected":null; ?>>Limón</option>
          </select>
        <label> Provincia</label>
      </div>
<!--=================Fin del codigo para ciudades ===============-->

<div class=""><!--Columna-->
  <!--================Cargando los senderos==============================-->
  <?php
  $conexion = mysql_connect("localhost","root");
  mysql_select_db("sirevi",$conexion);
  $sentencia_sendero = "select * from sendero order by nombre ASC";
  $query_sendero = mysql_query($sentencia_sendero);
  ?>
  <div class="">
    <div class="input-field col s12 m4 l4"><!--vista small numero 12 araque abarque todo el ancho del dispositivo-->
    <select name="sendero" multiple required>
        <option value="" disabled selected>&nbsp;Seleccionar Senderos</option>
         <?php while ($arreglo_sendero = mysql_fetch_array($query_sendero)) {  ?>
         <option value="<?php echo $arreglo_sendero['id']?>"><?php echo $arreglo_sendero['nombre'] ?></option>
         <?php } ?>
      </select>
    <label><span class="hide-on-small-only"><i class="small material-icons">swap_calls</i></span></label>
  </div>
  </div>
</div><!--Fin de la seegunda fila -->

<!--==================================================Lineas de codigo, respecto visitacion=========================================================-->

<fieldset class="input-field col s12 m7 l8 z-depth-2">
  <legend>Referencia de Visitación</legend>
        <div>
          <div>
               <SELECT id="referencia_visita" name="referencia_visita" onChange="pagoOnChange(this)">
                  <option value="" disabled selected>&nbsp;Elija una opción</option>
                  <option value="1"<?php echo $visit->referencia_visita=="Espontaneamente en ruta"?"selected":null; ?>>Espontaneamente en Ruta</option>
                  <option value="2"<?php echo $visit->referencia_visita=="Espontaneamente en ruta"?"selected":null; ?>>Espontaneamente en ruta</option>
                  <option value="3"<?php echo $visit->referencia_visita=="Referencia de alguien mas"?"selected":null; ?>>Referencia de alguien mas</option>
                  <option value="4"<?php echo $visit->referencia_visita=="Recomendación por amigos"?"selected":null; ?>>Recomendación por amigos</option>
                  <option value="5"<?php echo $visit->referencia_visita=="Visita reiterada"?"selected":null; ?>>Visita reiterada</option>
                  <option value="6"<?php echo $visit->referencia_visita=="Selección directa personal (Check list)"?"selected":null; ?>>Selección directa personal (Check list)</option>
                  <option value="7"<?php echo $visit->referencia_visita=="Operadora turística"?"selected":null; ?>>Operadora turística</option>
                  <option value="8"<?php echo $visit->referencia_visita=="Medio de comunicación"?"selected":null; ?>>Medio de comunicación</option>
                  <option value="9"<?php echo $visit->referencia_visita=="Guías impresas"?"selected":null; ?>>Guías impresas</option>
                  <option value="10"<?php echo $visit->referencia_visita=="Grupo comunal organizado"?"selected":null; ?>>Grupo comunal organizado</option>
                  <option value="11"<?php echo $visit->referencia_visita=="Empresa privada"?"selected":null; ?>>Empresa privada</option>
                  <option value="12"<?php echo $visit->referencia_visita=="ONGs en proyectos de investigación y conservación"?"selected":null; ?>>ONGs en proyectos de investigación y conservación</option>
                  <option value="13"<?php echo $visit->referencia_visita=="Institución pública"?"selected":null; ?>>Institución pública</option>
                  <option value="14"<?php echo $visit->referencia_visita=="Otro"?"selected":null; ?>>Otro</option>
               </SELECT>
          </div>

          <div id="no_name_input" style="display:none;"></div>

          <fieldset   id="nombre_referencia" style="display:;" class="z-depth-2">
            <div id="nombre_referencia" style="display:;">
               <br>
               Nombre*:
               <br>
             <input type='text' value="<?php echo $visit->nom_referencia_visita; ?>" name='nom_referencia_visita' size='20' maxLength='60'>

          </div>
        </fieldset>

</fieldset>
<!--=============================-->
<div  class="input-field col s12 m4 l3"><!--Columna-->
    <fieldset ><legend>Dias acampando</legend>

        <div class="input-field col s12 m12 l12  ">
          <input  id="dias_camping" type="number" value="<?php echo $visit->dias_camping; ?>" name="dias_camping" value="" class="validate" class="form-control" data-validacion-tipo="requerido|min:10" >
          <label for="dias_camping" > <span class="hide-on-small-only"><i class="small material-icons">perm_contact_calendar</i></span>&nbsp;Dias acampando</label>
        </div>

        <div class="input-field col s12 m12 l12">
        Personas*:
          <br>
          <input   id="dias_camping" type="number" name="personas_acampando" value="<?php echo $visit->personas_acampando;?>" class="validate" class="form-control" data-validacion-tipo="requerido|min:10" >
        </div>
    </fieldset>
</div><!--Fin de la tercera fila-->

<!--================================================== Fin lineas de codigo, respecto visitacion========================================================-->

<div class="input-field col s12 m12 l12"><!--IInicio de lineas para cantidad de personas-->
<ul class="" data-collapsible="">
   <li>
     <div class="center-align collapsible-header teal darken-4  white-text z-depth-3">
                          <i class=" material-icons">supervisor_account</i>Cantidad de personas</div>
  <div class="">
    <fieldset>
      <span>
        <div class="">
         <div class=""><!--Inicio de la primea fila dentro del collapsible-->
         <div class="input-field col s12 m12 l12">
         <fieldset class="z-depth-3">
           <legend>&nbsp;Nacionales&nbsp;</legend>
             <div class="input-field col s6 m6 l3  ">
           <input  id="nacional_adult"  value="<?php echo $visit->nacional_adult; ?>" type=number name="nacional_adult" class="validate" onkeyup="sumaNacionales_Dia(); sumatoria_All(); monto_total_pagar();"  class="form-control" >
           <label for="nacional_adult" ><span class="hide-on-small-only"><i class="small material-icons">offline_pin</i></span>&nbsp;Adultos </label>
          </div>

           <div class="input-field col s6 m6 l3  ">
             <input  id="nacional_kid" value="<?php echo $visit->nacional_kid; ?>" type="number" name="nacional_kid" class="validate" onkeyup="sumaNacionales_Dia(); sumatoria_All(); monto_total_pagar();" class="form-control" >
             <label for="nacional_kid" ><span class="hide-on-small-only"><i class="small material-icons">offline_pin</i></span>&nbsp;Niños </label>
           </div>

           <div class="input-field col s12 m6 l3  ">
             <input  id="estudiantes" value="<?php echo $visit->estudiantes; ?>" type="number" name="estudiantes"  class="validate" onkeyup="sumaNacionales_Dia(); sumatoria_All(); monto_total_pagar();" class="form-control" >
             <label for="estudiantes" ><span class="hide-on-small-only"><i class="small material-icons">offline_pin</i></span>&nbsp;Estudiantes </label>
             </div>


            <div class="input-field col s6 m6 l3  ">
               <input  id="nacional_exonerado" value="<?php echo $visit->nacional_exonerado; ?>" type="number" name="nacional_exonerado" value="" class="validate" onkeyup="sumatoria_All();" class="form-control" data-validacion-tipo="requerido|min:10">
              <label for="nacional_exonerado" > <span class="hide-on-small-only"><i class="small material-icons">perm_identity</i></span>&nbsp;Exonerado</label>
            </div>
          </fieldset>
       </div><!--Fin de columnas cantidad de ncionales por el dia-->
     </div><!--Fin de la primera fila-->

     <div class="">
       <div class="input-field col s12 m12 l12">
         <fieldset class="z-depth-3">
         <legend>&nbsp;Extranjeros&nbsp;</legend>

         <div class="input-field col s6 m4 l4  ">
           <input  id="extranjero_adult" value="<?php echo $visit->extranjero_adult; ?>" type="text" name="extranjero_adult" class="validate" onkeyup="sumaExtranjeros_Dia(); sumatoria_All(); monto_total_pagar();" class="form-control" data-validacion-tipo="requerido|min:10">
          <label for="extranjero_adult" ><span class="hide-on-small-only"><i class="small material-icons">offline_pin</i></span>&nbsp;Adultos </label>
        </div>

       <div class="input-field col s6 m4 l4  ">
         <input  id="extranjero_kid" value="<?php echo $visit->extranjero_kid; ?>"type="text" name="extranjero_kid" class="validate" onkeyup="sumaExtranjeros_Dia(); sumatoria_All(); monto_total_pagar();" class="form-control" data-validacion-tipo="requerido|min:10">
           <label for="extranjero_kid" ><span class="hide-on-small-only"><i class="small material-icons">offline_pin</i></span>&nbsp;Niños </label>
       </div>

       <div class="input-field col s6 m4 l4  ">
       <input  id="extranjero_exonerado" value="<?php echo $visit->extrajero_exonerado; ?>" type="number" name="extranjero_exonerado" value="" onkeyup="sumatoria_All();" class="validate" class="form-control" data-validacion-tipo="requerido|min:10">
      <label for="extranjero_exonerado" > <span class="hide-on-small-only"><i class="small material-icons">perm_identity</i></span>&nbsp;Exonerado</label>
      </div>
     </fieldset>
   </div>
   </div>
   <div class=""><!--Tercera fila-->
   <div class="input-field col s12 m12 l12">
     <fieldset class="z-depth-3">
     <div class=""><!--Inicio de la segunda fila-->
     <div class="input-field col s12 m6 l6  ">
     <input  id="personas_surf" value="<?php echo $visit->personas_surf; ?>"type="number" name="personas_surf" class="validate" onkeyup="sumaPersonasSurf(); monto_total_pagar();" >
       <label for="personas_surf" >  <i class="small material-icons">supervisor_account</i>&nbsp;Cantidad Personas Surf</label>
     </div>

      <div class="input-field col s6 m6 l6  ">
        <input  id="prepago" value="<?php echo $visit->prepago; ?>" type="number" name="prepago" value="" class="validate" onkeyup="sumatoria_All();" class="form-control" data-validacion-tipo="requerido|min:10" >
          <label for="prepago"><span class="hide-on-small-only"><i class="small material-icons">picture_in_picture</i></span>&nbsp;Prepago</label>
          </div>
        </div><!--Fin del div de la segunda fila -->
      </fieldset>
      </div>
    </div><!--Fin de la tercera Fila-->
<!--<h6>Preguntar sobre como se calcula el precio para hacer la funcion en javascript</h6>-->
    </div>
   </span>
    </fieldset>
    </div><!--collapsible body-->
    </li>
    </ul>
    </div>
  </div><!--Fin de lineas para cantidad de personas-->

<!--========================== Inicio de lineas de codigo para los pagos y su tipo =========================================-->
<div class="input-field col s12 m12 l12">

      <fieldset class="z-depth-3">
        <legend>&nbsp;Categorías de pago&nbsp;</legend>
        <div class=""><!--Inicio de la "" -->

          <div class="input-field col s12 m12 l5">
          <fieldset  class="z-depth-1">
              <legend>&nbsp;Tipo de pago&nbsp;</legend>
              <div class="col m1"></div>

              <p class="input-field col s12 m5 l5">
                <input class="with-gap " value="<?php echo $visit->tipo_pago; ?>" name="tipo_pago" type="radio"  id="indeterminate-checkbox" checked="default"  />
                <label for="indeterminate-checkbox">Efectivo</label>
              </p>

              <p class="input-field col s12 m5 l5">
                <input class="with-gap" value="<?php echo $visit->tipo_pago; ?>" name="tipo_pago" type="radio" id="indeterminate-checkbox" />
                <label for="indeterminate-checkbox">Tarjeta</label>
              </p>
            </fieldset>
          </div>

          <div class="input-field col s12 m12 l7">
            <fieldset  class="z-depth-1 ">
              <legend>&nbsp;Tipo moneda&nbsp;</legend>
              <p class="input-field col s12 m4 l4">
                <input class="with-gap" value="<?php echo $visit->moneda; ?>" name="moneda" type="radio"  id="indeterminate-checkbox" checked="default" />
                <label for="indeterminate-checkbox">Colones</label>
              </p>
              <p class="input-field col s12 m4 l4">
                <input class="with-gap" value="<?php echo $visit->moneda; ?>" name="moneda" type="radio" id="indeterminate-checkbox" />
                <label for="indeterminate-checkbox">Dolares</label>
              </p>
              <p class="input-field col s12 m4 l4">
                <input class="with-gap" value="<?php echo $visit->moneda; ?>" name="moneda" type="radio" id="indeterminate-checkbox" />
                <label for="indeterminate-checkbox">Ambas</label>
              </p>
            </fieldset>

            </div>
          </div><!--Fin del div de la fila ???-->
      </fieldset>

</div><br>
<!--============================ Fin de lineas de codigo para los pagos y su tipo ==========================================-->

<!--===================================================================================================================================-->
<div class="center-align col s12">
  <!--BOTON QUE ME ENVIA EL FORMULARIO-->
<fieldset>
  <button title="Enviar" class="btn waves-effect waves-light teal darken-4"
      value="enviar"  type="submit" name="action"><span class="hide-on-small-only">Enviar</span>
      <i class="mdi-content-send material-icons right">done</i>
  </button>
    <!--BOTON QUE ME BORRA LO QUE ESCRIBI EN EL FORMULARIO-->
</fieldset>


</div>
      </form>
      <div class="right hide-on-large-only">
        <a href="index.php?c=Visitacion"><i style="color:#00b0ff" class="small material-icons blue-grey darken-2 z-depth-1 btn-floating pulse">arrow_back</i>&nbsp;Página anterior</a>
      </div>
    </div>
<!--   <h5>El usuario, el ASP, Y EL SECTOR SON VARIABLES QUE SE INGRESARAN CON LA SESION, PENDIENTE DE IMPLEMANTAR</h5>
  -->   </div>
       </div>
     </fieldset>

<!--================================================================================================================================-->
      </div>
    </div><!-- Div de los tamanos -->
  </div>
</div>
</main>

<script>

  $(document).ready(function(){
    $("#frm-visitacion").submit(function(){
      return $(this).validate();
      });
  })
  var instance = M.Timepicker.getInstance(elem);
  </script>
