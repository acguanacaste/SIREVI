
<main>
  <div class="container">
    <div class="">

      <div class="col s12 m12 l12">

<!--====================================================================================================================-->
<form id="frm-visitacion" action="?c=Visitacion&a=Guardar" method="post" enctype="multipart/form-data">
  <!--<input type="hidden" name="id" value="<php echo $visit->id; ?>" />-->
        <div class="">
          <fieldset>
            <div class="">
              <div class="col s12 m12 l12">
                <div class="">
                    <div><!-- Inicio de las filas y columnas -->

                      <div class="row"><!---Inicio de dos columnas-->


                      <div class="input-field col s6 m4 l2">
                        <fieldset><center><legend>Numero diario</legend></center>
                          <center>
                          <div class="btn teal darken-4 right-align "> #&nbsp;00 </div>
                        </center>
                        </fieldset>
                      </div>

                      <div class="input-field col s6 m4 l3 hide-on-med-and-down">
                        <fieldset><center><legend>Capacidad de Sector</legend></center>
                          <center>
                            <div class="btn teal darken-4 right-align "> AquiSesh/<?php echo $_SESSION['sector']['capacidadDiaria'] ?> </div>
                          </center>
                        </fieldset>
                      </div>

                      <div class="input-field col s6 m4 l3">
                        <fieldset><center><legend>Sector</legend></center>
                          <center>
                            <div class="btn teal darken-4 right-align "><?php echo $_SESSION['sector']['sectorNombre'];?></div>
                          </center>
                        </fieldset>
                      </div>

                      <div class="input-field col s6 m4 l3">
                        <fieldset><center><legend>Usuario</legend></center>
                          <center>
                            <div name="usuario" value="<?php echo $_SESSION['usuario']['nombre'];?>" class="btn teal darken-4 right-align "><?php echo $_SESSION['usuario']['nombre'];?></div>
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
      <legend><h5>Formulario de Visitación </h5>
        <h6>Completar la información con los datos correspondientes</h6></legend>
        <div class="">
          <hr> <br>
          <div class="row"><!--la clase en este div me permite tener los elementos del formulario en orden y en las filas correspondientes-->
            <div class="col col s12 m12 l12">
              <div class="">
        <!--        <form id="frm-visitacion" action="?c=Visitacion&a=Guardar" method="post" enctype="multipart/form-data">-->
                  <input type="hidden" name="id" value="<?php echo $visit->id; ?>" />
                  <input type="hidden" name="asp" value="<?php echo $_SESSION['sector']['areaSilvestreProtegida']; ?>" />
                  <input type="hidden" name="sector" value="<?php echo $_SESSION['sector']['id_Sector']; ?>" />
                  <input type="hidden" name="usuario" value="<?php echo $_SESSION['usuario']['id']; ?>">


                  <div class="">
                  <div class="input-field col s12 m4 l6">
                   <fieldset  class="z-depth-1 ">
                     <legend>&nbsp;Proposito de Visitación&nbsp;</legend>
                       <div class="input-field col s12 m12 l12">
                         <select id="proposito_visita" name="proposito_visita">
                             <option id="proposito_visita" value="" disabled selected>&nbsp;Proposito de Visita</option>
                             <option value="Visita por el dia">Por el dia</option>
                             <option value="Acampando">Acampando</option>
                             <option value="Hospedado en estacion biologica">Hospedado estación biológica.</option>
                           </select>
                         <label><i class="small material-icons" >info_outline</i></label>
                       </div>
                     </fieldset>
                   </div>
                  </div>



                  <div class="input-field col s12 m4 l6 ">
                    <fieldset>
                      <legend>Sub sector al que se dirije</legend>
                      <div class="input-field col s12 m12 l12">
                        <label for="subSector"> <i class="small material-icons"></i><span class="hide-on-small-only">Sub Sector</span></label>
                         <input  type="text" class="" id="subSector" name="subSector" value="" required>

                      </div>
                    </fieldset>
                  </div>

                  </div>

                <div class="input-field col s12 m12 l12"><br></div>

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
                </div>
              </div>

              <fieldset class="input-field col s12 m6 l8 z-depth-2">
                <legend>Referencia de Visitacion</legend>
                      <div>
                        <div>
                             <SELECT name="referencia_visita" onChange="pagoOnChange(this)">
                                <!--<OPTION VALUE="transferencia">Transferencia</OPTION>-->
                                <option value="" disabled selected>&nbsp;Elija una opción</option>
                                <option value="Espontaneamente en ruta">1. Espontaneamente en ruta</option>
                                <option value="Referencia de alguien mas">2. Referencia de alguien mas</option>
                                <option value="Recomendación por amigos">3. Recomendación por amigos</option>
                                <option value="Visita reiterada">4. Visita reiterada</option>
                                <option value="Selección directa personal">5. Selección directa personal (Check list)</option>
                                <option value="Guías impresas">6. Guías impresas</option>
                                <option value="Operadora turistica">7. Operadora turística</option>
                                <option value="Medio de comunicación">8. Medio de comunicación</option>
                                <option value="Grupo comunal organizado">9. Grupo comunal organizado</option>
                                <option value="Empresa privada">10. Empresa privada</option>
                                <option value="ONGs en proyectos de investigación y conservación">11. ONGs en proyectos de investigación y conservación</option>
                                <option value="Institución pública">12. Institución pública</option>
                                <option value="Otro">Otro</option>

                             </SELECT>
                        </div>

                        <div id="no_name_input" style="display:none;"></div>

                        <fieldset   id="nombre_referencia" style="display:;" class="z-depth-2">
                          <div id="nombre_referencia" style="display:;">
                             <br>
                             Nombre*:
                             <br>
                           <input type='text' name='nom_referencia_visita' size='20' maxLength='60'>

                        </div>
                      </fieldset>

              </fieldset>

                <div  class="input-field col s12 m4 l3"><!--Columna-->
                    <fieldset ><legend>Dias acampando</legend>
                      <div>
                        <div class="input-field col s12 m12 l12  ">
                          <input  id="dias_camping" type="number" name="dias_camping" value="" class="validate" class="form-control" data-validacion-tipo="requerido|min:10" >
                          <label for="dias_camping" > <span class="hide-on-small-only"><i class="small material-icons">perm_contact_calendar</i></span>&nbsp;Dias acampando</label>
                        </div>
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
                <div class="input-field col s6 m4 l3  ">
                  <input  id="nacional_adult" type="text" name="nacional_adult" class="validate" onkeyup="sumaNacionales_Dia(); sumatoria_All(); monto_total_pagar();"  class="form-control" >
                  <label for="nacional_adult" ><span class="hide-on-small-only"><i class="small material-icons">offline_pin</i></span>&nbsp;Adultos </label>
               </div>

                <div class="input-field col s6 m4 l3  ">
                  <input  id="nacional_kid" type="text" name="nacional_kid" class="validate" onkeyup="sumaNacionales_Dia(); sumatoria_All(); monto_total_pagar();" class="form-control" >
                  <label for="nacional_kid" ><span class="hide-on-small-only"><i class="small material-icons">offline_pin</i></span>&nbsp;Niños </label>
              </div>

              <div class="input-field col s12 m4 l3  ">
                  <input  id="estudiantes" type="text" name="estudiantes"  class="validate" onkeyup="sumaNacionales_Dia(); sumatoria_All(); monto_total_pagar();" class="form-control" >
                  <label for="estudiantes" ><span class="hide-on-small-only"><i class="small material-icons">offline_pin</i></span>&nbsp;Estudiantes </label>
            </div>

            <div class="input-field col s6 m4 l3  ">
              <input  id="nacional_exonerado" type="number" name="nacional_exonerado" value="" class="validate" onkeyup="sumatoria_All();" class="form-control" data-validacion-tipo="requerido|min:10">
             <label for="nacional_exonerado" > <span class="hide-on-small-only"><i class="small material-icons">perm_identity</i></span>&nbsp;Exonerado</label>
           </div>

            </fieldset>
          </div><!--Fin de columnas cantidad de ncionales por el dia-->

        </div><!--Fin de la primera fila-->

        <div class="">
          <div class="input-field col s12 m12 l12">
            <fieldset class="z-depth-3">
              <legend>&nbsp;Extranjeros&nbsp;</legend>

              <div class="input-field col s6 m6 l4  ">
                <input  id="extranjero_adult" type="text" name="extranjero_adult" class="validate" onkeyup="sumaExtranjeros_Dia(); sumatoria_All(); monto_total_pagar();" class="form-control" data-validacion-tipo="requerido|min:10">
                <label for="extranjero_adult" ><span class="hide-on-small-only"><i class="small material-icons">offline_pin</i></span>&nbsp;Adultos </label>
              </div>

              <div class="input-field col s6 m6 l4  ">
                <input  id="extranjero_kid" type="text" name="extranjero_kid" class="validate" onkeyup="sumaExtranjeros_Dia(); sumatoria_All(); monto_total_pagar();" class="form-control" data-validacion-tipo="requerido|min:10">
                <label for="extranjero_kid" ><span class="hide-on-small-only"><i class="small material-icons">offline_pin</i></span>&nbsp;Niños </label>
              </div>

              <div class="input-field col s6 m4 l4  ">
                <input  id="extranjero_exonerado" type="number" name="extranjero_exonerado" value="" onkeyup="sumatoria_All();" class="validate" class="form-control" data-validacion-tipo="requerido|min:10">
               <label for="extranjero_exonerado" > <span class="hide-on-small-only"><i class="small material-icons">perm_identity</i></span>&nbsp;Exonerado</label>
             </div>

            </fieldset>
          </div>

        </div>

        <div class=""><!--Tercera fila-->
          <div class="input-field col s12 m12 l12">
            <fieldset class="z-depth-3">
              <div class=""><!--Inicio de la segunda fila-->
                <div class="input-field col s12 m4 l6  ">
                <input  id="personas_surf" type="number" name="personas_surf" value="" class="validate" onkeyup="sumaPersonasSurf(); monto_total_pagar();" >
                    <label for="personas_surf" >  <i class="small material-icons">supervisor_account</i>&nbsp;Cantidad Personas Surf</label>
                </div>

                 <div class="input-field col s6 m4 l6  ">
                   <input  id="prepago" type="number" name="prepago" value="" class="validate" onkeyup="sumatoria_All();" class="form-control" data-validacion-tipo="requerido|min:10" >
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
        <div class="center-align"><!--Inicio de la "" -->

          <div class="input-field col s12 m6 l6">
            <fieldset  class="z-depth-1 input-field col s12 m12 l12">
              <legend>&nbsp;Tipo de pago&nbsp;</legend>
              <p class="input-field col s5 m6 l6">
                <input class="with-gap " value="efectivo" name="tipo_pago"  type="radio"  id="indeterminate-checkbox" checked="default"   />
                <label for="indeterminate-checkbox">Efectivo</label>


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
            <fieldset  class="z-depth-1 input-field col s12 m12 l12">
              <legend>&nbsp;Tipo moneda&nbsp;</legend>
              <p class="input-field col s6 m6 l6">
                <input class="with-gap" value="colones" name="moneda" type="radio" selected id="indeterminate-checkbox" checked="default" />
                <label for="indeterminate-checkbox">Colones</label>

                <input class="with-gap" value="dolar" name="moneda" type="radio" id="indeterminate-checkbox" />
                <label for="indeterminate-checkbox">Dolares</label>

                <input class="with-gap" value="dolar" name="moneda" type="radio" id="indeterminate-checkbox" />
                <label for="indeterminate-checkbox">Ambos</label>
              </p>
            </fieldset>

            </div>
          </div><!--Fin del div de la fila ???-->
      </fieldset>

</div><br>
<!--============================ Fin de lineas de codigo para los pagos y su tipo ==========================================-->
<!--Inicio de lineas para la parte de muestra de cantda personas y montos totales-->
<div class="input-field col s12 m12 l12">
  <fieldset>
    <div class="">
      <div class="col s12 m12 l12">
        <div class="">
            <div><!-- Inicio de las filas y columnas -->

              <div class="row"><!---Inicio de dos columnas-->

                <div class="input-field col s6 m3 l4">
                  <fieldset  class="z-depth-2 "><legend>Total Nacionales</legend>
                    <div>Colones*: <input class="teal darken-4 white-text" type="text" id="total_Nacionales_Dia"  disabled value="0">
                    </div>
              </fieldset>
            </div>

            <div class="input-field col s6 m3 l4">
              <fieldset  class="z-depth-2 "><legend>Total Extranjeros</legend>
                <div>Dolares*: <input class="teal darken-4 white-text"  type="text" id="total_Extranjeros_Dia" disabled value="0">
                </div>
          </fieldset>
        </div>

            <div class="input-field col s6 m3 l4">
              <fieldset  class="z-depth-2 "><legend>Personas Surf</legend>
                <div>Dolares*: <input class="teal darken-4 white-text"  type="text" id="total_PersonasSurf" disabled value="0">
                </div>
          </fieldset>
        </div>


        <div class="row">

              <div class="col s6 offset-s3"><span>

                <div class="input-field col s12 m5 l6">
                  <fieldset class="z-depth-2 "><legend>Total de personas</legend>
                      <div>Personas*: <input class="teal darken-4 white-text" type="text" id="total_All"  disabled value="0">
                      </div>
                  </fieldset>
              </div>

              <div class="input-field col s12 m5 l6">
                <fieldset class="z-depth-2 "><legend>Monto a cancelar</legend>
                    <div >Colones*: <input class="teal darken-4 white-text" name="montoCancelar" type="text" id="montoCancelar" value="0"></div>
                </fieldset>
              </div>

            </span></div>
          </div>

<!--====================================  Fin de lineas para mostrar el total por nacionalidad   ==========================================================================-->
             </div><!--Fin de columnas -->
           </div><!-- Fin de filas y columnas -->
        </div><!-- <!-- Fin del row -->
      </div><!-- Tamanos -->
    </div><!-- Fin del row -->
<!--================================================================================================================================-->
</fieldset>
</div><!-- Fin del lineas para los montos y cant personas -->

<!--===================================================================================================================================-->
<div class="center-align col s12">

  <fieldset >
    <legend>Tipo de cambio dollar</legend>
    <div style="" id="boton_dolar"
       class="btn teal darken-4 right-align "><?php echo $_SESSION['sector']['cambioDolar']; ?></div>
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

      function sumaNacionales_Dia(){/*Calcula el total a pagar por personas nacionales*/
          var valor1=verificar("nacional_adult");
          var valor2=verificar("nacional_kid");
          var valor3=verificar("estudiantes");

          document.getElementById("total_Nacionales_Dia").value=(parseFloat(valor1)*1500)+(parseFloat(valor2)*500)+(parseFloat(valor3)*500);
      }
/*=====================================================================================================================================*/
      function sumaExtranjeros_Dia(){/*Calcula el monto  pagar para personas extranjeros*/
          var valor1=verificar("extranjero_adult");
          var valor2=verificar("extranjero_kid");

          document.getElementById("total_Extranjeros_Dia").value=(parseFloat(valor1)*15)+(parseFloat(valor2)*5);

}
/*=====================================================================================================================================*/
      function sumatoria_All(){/*Sumatoria del total de personas que van incluidas en un solo registro de visitacion*/
          var valor1=verificar("nacional_adult");
          var valor2=verificar("nacional_kid");
          var valor3=verificar("estudiantes");
          var valor4=verificar("extranjero_adult");
          var valor5=verificar("extranjero_kid");
          var valor6=verificar("nacional_exonerado");
          var valor7=verificar("extranjero_exonerado");
          var valor8=verificar("prepago");


          document.getElementById("total_All").value=parseFloat(valor1)+parseFloat(valor2)+parseFloat(valor3)
          +parseFloat(valor4)+parseFloat(valor5)+parseFloat(valor6)+parseFloat(valor7)+parseFloat(valor8);

      }
/*=====================================================================================================================================*/
      function monto_total_pagar(){/*Calcula el total a pagr inluyendo el derecho de surfing en playa naranjo*/
        var valor1=verificar("nacional_adult");
        var valor2=verificar("nacional_kid");
        var valor3=verificar("estudiantes");
        var valor4=verificar("extranjero_adult");
        var valor5=verificar("extranjero_kid");

        var valor6=verificar("personas_surf");

        var dolar=verificar("boton_dolar");

          document.getElementById("montoCancelar").value=(parseFloat(valor1)*1500)+(parseFloat(valor2)*500)+(parseFloat(valor3)*500)
                                                  +((parseFloat(valor4)*15)*550)+((parseFloat(valor5)*5)*550)+((parseFloat(valor6)*15)*550);

      }
/*=======================================================================================================================================*/
function sumaPersonasSurf(){
    var valor1=verificar("personas_surf");

    document.getElementById("total_PersonasSurf").value=(parseFloat(valor1)*15);

}
/*=======================================================================================================================================*/
function sumaPersonasDentroParque(){
    var valor1=verificar("cant_personas_camping");
//El monto a cobrar esta en dolares para mas agilidad, a los nacionales se les cobre en colones 2000 por persona
    document.getElementById("total_personas_camping").value=(parseFloat(valor1)*4);

}
/*================================================================================================================================*/



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
