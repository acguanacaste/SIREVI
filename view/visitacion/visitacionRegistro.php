<main>
  <div class="container">
    <div class="">

      <div class="col s12 m12 l12">

<!--====================================================================================================================-->
        <div class="">
          <fieldset>
            <div class="">
              <div class="col s12 m12 l12">
                <div class="">
                    <div><!-- Inicio de las filas y columnas -->

                      <div class="row"><!---Inicio de dos columnas-->

                  <!--      <div class="input-field col s6 m4 l4">
                          <fieldset><legend>Proposito de visita</legend>
                          <div>
                           <div class="" name="proposito_visita">
                               <p class="input-field col s6 m6 l6">
                                 <input class="with-gap" value="Visita por el dia" name="proposito_visita" type="radio" selected id="indeterminate-checkbox" checked="default" />
                                 <label for="indeterminate-checkbox">Por el dia</label>
                               </p>

                               <p class="input-field col s6 m6 l6">
                                 <input class="with-gap" value="Acamapa por varios dias" name="proposito_visita" type="radio" id="indeterminate-checkbox" />
                                 <label for="indeterminate-checkbox">Acampando</label>
                               </p>
                             </div>
                           </div>
                      </fieldset>
                    </div> -->



                   <div class="input-field col s6 m4 l4">
                      <fieldset  class="z-depth-1 ">
                        <legend>&nbsp;Proposito de Visitacion&nbsp;</legend>
                        <p class="input-field col s12 m6 l6">
                          <input class="with-gap" value="Visita por el dia" name="proposito_visita" type="radio" selected id="indeterminate-checkbox" checked="default" />
                          <label for="indeterminate-checkbox">Por el dia</label>
                        </p>
                        <p class="input-field col s12 m6 l6">
                          <input class="with-gap" value="Acamapa por varios dias" name="proposito_visita" type="radio" id="indeterminate-checkbox" />
                          <label for="indeterminate-checkbox">Acampando</label>
                        </p>
                      </fieldset>

                    </div>
















                      <div class="input-field col s6 m4 l2">
                        <fieldset><legend>Numero diario</legend>
                          <div class="btn teal lighten-2 right-align "> #&nbsp;00 </div>
                        </fieldset>
                      </div>

                      <div class="input-field col s6 m4 l3">
                        <fieldset><legend>Capacidad de Sector</legend>
                            <div class="btn teal lighten-2 right-align "> 20/80 </div>
                        </fieldset>
                      </div>

                      <div class="input-field col s6 m4 l3">
                        <fieldset><legend>Sector</legend>
                            <div class="btn teal lighten-2 right-align ">Santa Rosa</div>
                            <br>

                        </fieldset>
                      </div>
                     </div><!--Fin de columnas -->
                   </div><!-- Fin de filas y columnas -->
                </div><!-- <!-- Fin del row -->
              </div><!-- Tamanos -->
            </div><!-- Fin del row -->
        <!--================================================================================================================================-->
      </fieldset>
    </div><!-- Fin del container -->
<!--=========================================================================================================================================-->
    <div id="" class="">
    <hr>
<!--===========================================================================================================-->
    <fieldset>
      <legend><h5>Formulario de Visitación </h5>
        <h6>Completar la información con los datos correspondientes</h6></legend>
        <div class="">
          <hr> <br>
          <div class="row"><!--la clase en este div me permite tener los elementos del formulario en orden y en las filas correspondientes-->
            <div class="col col s12 m12 l12">
              <div class="">
                <form id="frm-visitacion" action="?c=Visitacion&a=Guardar" method="post" enctype="multipart/form-data">
                  <input type="hidden" name="id" value="<?php echo $visit->id; ?>" />
                  <div><!--Inicio de la primera fila-->
                    <div class="input-field col s6 m6 l4  ">
                      <input  id="name" type="text" name="nombre" value="" class="validate" class="form-control"  required >
                      <label for="name" ><i class="small material-icons">face</i></span>&nbsp;Nombre</label>
                    </div>
                      <div class="input-field col s6 m6 l4  ">
                        <input  id="noIdentificacion" type="text" name="noIdentificacion" value="" class="validate" class="form-control"  required >
                        <label for="noIdentifiacion" >  <i class="small material-icons">subtitles</i>&nbsp;Número de identifiación</label>
                      </div>
                      <div  class="input-field col s6 m6 l4  ">
                        <input  id="placa_automovil" type="text" name="placa_automovil" value="" class="validate" class="form-control"   >
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
                  <div  class="input-field col s6 m6 l4">
                    <select name="pais">
                      <option value="" disabled selected>Elija un pais</option>
                      <?php while ($arreglo_pais = mysql_fetch_array($query_pais)) {  ?>
                      <option value="<?php echo $arreglo_pais['id']?>"><?php echo $arreglo_pais['nombre'] ?></option>
                      <?php } ?>
                    </select>
                    <label>País</label>
                  </div>
    <!--   <div class="input-field col s6 m6 l4">
           <div class="">
             <i class="material-icons prefix">textsms</i>
             <input type="text" name="pais" id="autocomplete-input" class="autocomplete">
             <label for="autocomplete-input">País</label>
           </div>
       </div> -->


<!--==============Cargando las cuidades============================================-->
      <?php
      $conexion = mysql_connect("localhost","root");
      mysql_select_db("sirevi",$conexion);
      $sentencia = "select * from provincia order by nombre ASC";
      $query = mysql_query($sentencia);
      ?>
      <div class="input-field col s6 m6 l4">
        <select name="provincia">
          <option value="" disabled selected>Elija una provincia</option>
            <?php while ($arreglo = mysql_fetch_array($query)) {  ?>
          <option value="<?php echo $arreglo['id']?>"><?php echo $arreglo['nombre'] ?></option>
            <?php } ?>
          </select>
        <label> Provincia</label>
      </div>
<!--=================Fin del codigo para ciudades ===============-->
      <div class="input-field col s6 m6 l4">
      <select name="referencia_visita">
          <option value="" disabled selected>&nbsp;Referencia de Visita</option>
                      <option value="Expontaneamente en ruta">Expontaneamente en ruta</option>
                      <option value="Referencia de alguien mas">Referencia de alguien mas</option>
                      <option value="Recomendación por amigos">Recomendación por amigos</option>
                      <option value="Visita reiterada">Visita reiterada</option>
                      <option value="Selección directa personal (Check list)">Selección directa personal (Check list)</option>
                      <option value="Operadora turística">Operadora turística</option>
                      <option value="Medio de comunicación">Medio de comunicación</option>
                      <option value="Guías impresas">Guías impresas</option>
                      <option value="Grupo comunal organizado">Grupo comunal organizado</option>
                      <option value="Empresa privada">Empresa privada</option>
                      <option value="ONGs en proyectos de investigación y conservación">ONGs en proyectos de investigación y conservación</option>
                      <option value="Institución pública">Institución pública</option>
                      <option value="Otro">Otro</option>

                    </select>
                    <label><i class="small material-icons" >info_outline</i></label>
                  </div>
                </div><!--Fin de la seegunda fila -->
<!--==================================================================================================================================-->
    <!--==================================================Lineas de codigo, respecto visitacion=========================================================-->

                <div class=""><!--Inicio de la tercera fila-->
                  <div class=""><!--Columna-->
                    <!--================Cargando los senderos==============================-->
                    <?php
                    $conexion = mysql_connect("localhost","root");
                    mysql_select_db("sirevi",$conexion);
                    $sentencia_sendero = "select * from sendero order by nombre ASC";
                    $query_sendero = mysql_query($sentencia_sendero);
                    ?>
                    <div class="">
                      <div class="input-field col s12 m8 l8"><!--vista small numero 12 araque abarque todo el ancho del dispositivo-->
                      <select name="sendero" multiple required>
                          <option value="" disabled selected>&nbsp;Seleccionar Senderos</option>
                           <?php while ($arreglo_sendero = mysql_fetch_array($query_sendero)) {  ?>
                           <option value="<?php echo $arreglo_sendero['id']?>"><?php echo $arreglo_sendero['nombre'] ?></option>
                           <?php } ?>
                        </select>
                      <label><span class="hide-on-small-only"><i class="small material-icons">swap_calls</i></span></label>
                    </div>
                  </div>
                </div>


                <div  class="input-field col s12 m4 l4"><!--Columna-->
                  <div class="">
                    <div>
                    <fieldset><legend>Personas acampando</legend>
                      <div>
                        <div class="input-field col s12 m12 l12  ">
                          <input  id="dias_camping" type="number" name="dias_camping" value="" class="validate" class="form-control" data-validacion-tipo="requerido|min:10" >
                          <label for="dias_camping" > <span class="hide-on-small-only"><i class="small material-icons">perm_contact_calendar</i></span>&nbsp;Dias acampando</label>
                        </div>
                      </div>
                    </fieldset>
                  </div>
                </div>
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
            <div class="input-field col s12 m6 l8">
              <fieldset class="z-depth-3">
                <legend>&nbsp;Nacionales&nbsp;</legend>
                <div class="input-field col s12 m6 l4  ">
                  <input  id="nacional_adult" type="text" name="nacional_adult" class="validate" onkeyup="sumaNacionales_Dia(); sumatoria_All(); monto_total_pagar();"  class="form-control" >
                  <label for="nacional_adult" ><span class="hide-on-small-only"><i class="small material-icons">offline_pin</i></span>&nbsp;Adultos </label>
               </div>

                <div class="input-field col s12 m6 l4  ">
                  <input  id="nacional_kid" type="text" name="nacional_kid" class="validate" onkeyup="sumaNacionales_Dia(); sumatoria_All(); monto_total_pagar();" class="form-control" >
                  <label for="nacional_kid" ><span class="hide-on-small-only"><i class="small material-icons">offline_pin</i></span>&nbsp;Niños </label>
              </div>

              <div class="input-field col s12 m6 l4  ">
                  <input  id="estudiantes" type="text" name="estudiantes"  class="validate" onkeyup="sumaNacionales_Dia(); sumatoria_All(); monto_total_pagar();" class="form-control" >
                  <label for="estudiantes" ><span class="hide-on-small-only"><i class="small material-icons">offline_pin</i></span>&nbsp;Estudiantes </label>
            </div>


            </fieldset>
          </div><!--Fin de columnas cantidad de ncionales por el dia-->

        <div class="input-field col s12 m6 l4">
          <fieldset class="z-depth-3">
            <legend>&nbsp;Extranjeros&nbsp;</legend>

            <div class="input-field col s12 m6 l6  ">
              <input  id="extranjero_adult" type="text" name="extranjero_adult" class="validate" onkeyup="sumaExtranjeros_Dia(); sumatoria_All(); monto_total_pagar();" class="form-control" data-validacion-tipo="requerido|min:10">
              <label for="extranjero_adult" ><span class="hide-on-small-only"><i class="small material-icons">offline_pin</i></span>&nbsp;Adultos </label>
            </div>

            <div class="input-field col s12 m6 l6  ">
              <input  id="extranjero_kid" type="text" name="extranjero_kid" class="validate" onkeyup="sumaExtranjeros_Dia(); sumatoria_All(); monto_total_pagar();" class="form-control" data-validacion-tipo="requerido|min:10">
              <label for="extranjero_kid" ><span class="hide-on-small-only"><i class="small material-icons">offline_pin</i></span>&nbsp;Niños </label>
            </div>
          </fieldset>
        </div>

      </div><!--Fin de la primera fila-->

        <div class="">

          <div class="input-field col s12 m6 l12">
            <fieldset class="z-depth-3">
              <div class=""><!--Inicio de la segunda fila-->
                <div class="input-field col s12 m6 l4  ">
                <input  id="personas_surf" type="number" name="personas_surf" value="" class="validate" class="form-control" data-validacion-tipo="requerido|min:10" >
                    <label for="personas_surf" >  <i class="small material-icons">supervisor_account</i>&nbsp;Cantidad Personas Surf</label>
                </div>

                 <div class="input-field col s12 m6 l4  ">
                   <input  id="prepago" type="number" name="prepago" value="" class="validate" class="form-control" data-validacion-tipo="requerido|min:10" >
                   <label for="prepago"><span class="hide-on-small-only"><i class="small material-icons">picture_in_picture</i></span>&nbsp;Prepago</label>
                 </div>

                 <div class="input-field col s12 m6 l4  ">
                   <input  id="exonerado" type="number" name="exonerado" value="" class="validate" class="form-control" data-validacion-tipo="requerido|min:10">
                  <label for="exonerado" > <span class="hide-on-small-only"><i class="small material-icons">perm_identity</i></span>&nbsp;Exonerado</label>
                </div>

              </div><!--Fin del div de la segunda fila -->
            </fieldset>
          </div>
        </div>
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

          <div class="input-field col s12 m6 l6">
            <fieldset  class="z-depth-1">
              <legend>&nbsp;Tipo de pago&nbsp;</legend>
              <p class="input-field col s12 m6 l4">
                <input class="with-gap " value="efectivo" name="tipo_pago" type="radio" selected id="indeterminate-checkbox" checked="default"  />
                <label for="indeterminate-checkbox">Efectivo</label>
              </p>
              <p class="input-field col s12 m6 l4">
                <input class="with-gap" value="tarjeta" name="tipo_pago" type="radio" id="indeterminate-checkbox" />
                <label for="indeterminate-checkbox">Tarjeta</label>

              </p>
              <!--<p class="input-field col s12 m6 l4">
                <input class="with-gap" value="tarjeta" name="tipo_pago" type="radio" id="indeterminate-checkbox" />
                <label for="indeterminate-checkbox">Transferencia</label>
              </p>-->
            </fieldset>
          </div>

          <div class="input-field col s12 m6 l6">
            <fieldset  class="z-depth-1 ">
              <legend>&nbsp;Tipo moneda&nbsp;</legend>
              <p class="input-field col s12 m6 l6">
                <input class="with-gap" value="colones" name="moneda" type="radio" selected id="indeterminate-checkbox" checked="default" />
                <label for="indeterminate-checkbox">Colones</label>
              </p>
              <p class="input-field col s12 m6 l6">
                <input class="with-gap" value="dolar" name="moneda" type="radio" id="indeterminate-checkbox" />
                <label for="indeterminate-checkbox">Dolares</label>
              </p>
            </fieldset>

            </div>
          </div><!--Fin del div de la fila ???-->
      </fieldset>

</div><br>
<!--============================ Fin de lineas de codigo para los pagos y su tipo ==========================================-->
<div class="input-field col s12 m12 l12">
  <fieldset>
    <div class="">
      <div class="col s12 m12 l12">
        <div class="">
            <div><!-- Inicio de las filas y columnas -->

              <div class="row"><!---Inicio de dos columnas-->

                <div class="input-field col s6 m4 l3">
                  <fieldset  class="z-depth-2 "><legend>Total Nacionales</legend>
                    <div>Colones*: <input class="teal darken-4 white-text" type="text" id="total_Nacionales_Dia"  disabled value="0">
                    </div>
              </fieldset>
            </div>

            <div class="input-field col s6 m4 l3">
              <fieldset  class="z-depth-2 "><legend>Total Extranjeros</legend>
                <div>Dolares*: <input class="teal darken-4 white-text"  type="text" id="total_Extranjeros_Dia" disabled value="0">
                </div>
          </fieldset>
        </div>

          <div class="input-field col s6 m4 l3">
            <fieldset class="z-depth-2 "><legend>Total de personas</legend>
                <div>Cant. Personas*: <input class="teal darken-4 white-text" type="text" id="total_All"   disabled value="0">
                </div>
            </fieldset>
        </div>

              <div class="input-field col s6 m4 l3">
                <fieldset class="z-depth-2 "><legend>Total a pagar</legend>
                    <div >Colones*: <input class="teal darken-4 white-text"  type="text" id="monto_total" disabled value="0"></div>
                </fieldset>
              </div>
<!--====================================  Fin de lineas para mostrar el total por nacionalidad   ==========================================================================-->
             </div><!--Fin de columnas -->
           </div><!-- Fin de filas y columnas -->
        </div><!-- <!-- Fin del row -->
      </div><!-- Tamanos -->
    </div><!-- Fin del row -->
<!--================================================================================================================================-->
</fieldset>
</div><!-- Fin del container -->

<!--===================================================================================================================================-->
<div class="center-align col s12">

  <fieldset >
    <legend>Tipo de cambio dollar</legend>
    <div style="" id="boton_dolar" class="btn teal lighten-2 right-align ">&nbsp;$550</div>
  </fieldset>

  <!--BOTON QUE ME ENVIA EL FORMULARIO-->
<fieldset>
  <button title="Enviar" class="btn waves-effect waves-light teal darken-4"
      value="enviar"  type="submit" name="action"><span class="hide-on-small-only">Enviar</span>
      <i class="mdi-content-send material-icons right">done</i>
  </button>

    <!--BOTON QUE ME BORRA LO QUE ESCRIBI EN EL FORMULARIO-->
  <button title="Limpiar Pantalla" class="btn waves-effect waves-light teal darken-4"
    value="reset"  type="reset" name="action"><span class="hide-on-small-only">Limpiar</span>
    <i class="mdi-content-send material-icons right">delete</i>
  </button>
</fieldset>


</div>
      </form>
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

      function sumaNacionales_Dia(){
          var valor1=verificar("nacional_adult");
          var valor2=verificar("nacional_kid");
          var valor3=verificar("estudiantes");

          document.getElementById("total_Nacionales_Dia").value=(parseFloat(valor1)*1500)+(parseFloat(valor2)*500)+(parseFloat(valor3)*500);
      }
/*=====================================================================================================================================*/
      function sumaExtranjeros_Dia(){
          var valor1=verificar("extranjero_adult");
          var valor2=verificar("extranjero_kid");

          document.getElementById("total_Extranjeros_Dia").value=(parseFloat(valor1)*15)+(parseFloat(valor2)*5);

}
/*=====================================================================================================================================*/
      function sumatoria_All(){
          var valor1=verificar("nacional_adult");
          var valor2=verificar("nacional_kid");
          var valor3=verificar("estudiantes");
          var valor4=verificar("extranjero_adult");
          var valor5=verificar("extranjero_kid");

document.getElementById("total_All").value=parseFloat(valor1)+parseFloat(valor2)+parseFloat(valor3)+parseFloat(valor4)+parseFloat(valor5);
        }
/*=====================================================================================================================================*/
function monto_total_pagar(){
  var valor1=verificar("nacional_adult");
  var valor2=verificar("nacional_kid");
  var valor3=verificar("estudiantes");
  var valor4=verificar("extranjero_adult");
  var valor5=verificar("extranjero_kid");
  var dolar=verificar("boton_dolar");

    document.getElementById("monto_total").value=(parseFloat(valor1)*1500)+(parseFloat(valor2)*500)+(parseFloat(valor3)*500)
                                            +((parseFloat(valor4)*15)*550)+((parseFloat(valor5)*5)*550);

}
/*=======================================================================================================================================*/
      function verificar(id){//Verifica que sean datos numericos
          var obj=document.getElementById(id);
          if(obj.value=="")
              value="0";
          else
              value=obj.value;
          if(validate_importe(value,1)){
              // marcamos como erroneo
              obj.style.borderColor="#808080";
              return value;
          }else{
              // marcamos como erroneo
              obj.style.borderColor="#f00";
              return 0;
          }
      }
//=========================================================================================================================================
      function validate_importe(value,decimal){
          if(decimal==undefined)
              decimal=0;
          if(decimal==1){
              // Permite decimales tanto por . como por ,
              var patron=new RegExp("^[0-9]+((,|\.)[0-9]{1,2})?$");
          }
          else{
              // Numero entero normal
              var patron=new RegExp("^([0-9])*$")
          }

          if(value && value.search(patron)==0){
              return true;
          }
          return false;
      }
  </script>
