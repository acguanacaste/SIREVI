<main>
  <div class="container">
    <div class="row">
      <div class="col s12 m12 l12">
        <!-- Inicio de mi codigo -->
        <div id="search-docs" class="section scrollspy">
        <hr>
<!--===========================================================================================================-->
        <fieldset>
          <legend><h5>Formulario para Registros</h5>
            <h6>Completar la informacion con los datos correspondientes</h6></legend>
            <div class="container contact">
            <hr>
            <br>
            <div class="row">
              <div class="col s12 m12 l11">
                <div class="row">
                  <form id="frm-visitacion" action="?c=Visitacion&a=Guardar" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="" />
                    <div class="row"><!--INICIO DE LA PRIMERA FILA-->
                      <div class="input-field col s6 m5 l6  ">
                        <input  id="noIdentificacion" type="text" name="noIdentificacion" value="" class="validate" class="form-control" data-validacion-tipo="requerido|min:10" >
                        <label for="name" >  <i class="small material-icons">face</i>&nbsp;Numero de Identifiacion</label>
                      </div>

                      <div class="input-field col s6 m5 l6  ">
                        <input  id="numero_diario" type="text" name="numero_diario" value="" class="validate" class="form-control" data-validacion-tipo="requerido|min:10" >
                        <label for="numero_diario" >  <i class="small material-icons">picture_in_picture</i>&nbsp;Numero diario</label>
                      </div>
                    </div><!--FIN DE LA PRIMERA FILA-->

                    <div class="row"><!---INICIO DE LA SEGUNDA FILA-->
                      <div class="input-field col s6 m5 l6  ">
                        <input  id="name" type="text" name="nombre" value="" class="validate" class="form-control" data-validacion-tipo="requerido|min:10" >
                        <label for="name" >  <i class="small material-icons">face</i>&nbsp;Nombre</label>
                      </div>

                      <!--INICIO DE COLUMNA FECHA DE SALIDA-->
                      <div class="input-field col s6 m5 l6  ">
                        <button class="btn waves-effect waves-light datepicker teal darken-4" type="date" name="fecha_salida">Fecha salida</button>
                      </div>
                    </div><!--FIN DEL DIV DE LA SEGUNDA FILA -->

                    <div class="row"><!---INICIO DE LA TECERA FILA-->
                      <form action="#">
                        <fieldset>
                          <legend> Persona(s) Acampando</legend>
                          <p>
                            <input class="with-gap" name="acampa" type="radio" id="acampa" />
                            <label for="acampa">Si</label>
                          </p>
                          <p>
                            <input class="with-gap" name="acampa" type="radio" id="acampa" />
                            <label for="acampa">No</label>
                          </p>
                        </fieldset>
                      </form>

                      <!--INICIO DE COLUMNA -->
                      <div class="input-field col s6 m5 l6  ">
                        <input  id="dias_camping" type="text" name="dias_camping" value="" class="validate" class="form-control" data-validacion-tipo="requerido|min:10" >
                        <label for="dias_camping" >  <i class="small material-icons">recent_actors</i>&nbsp;Dias acampando</label>
                      </div>

                      <div class="input-field col s6 m5 l6  ">
                        <input  id="cantidadPersonasSurf" type="text" name="cantidadPersonasSurf" value="" class="validate" class="form-control" data-validacion-tipo="requerido|min:10" >
                        <label for="cantidadPersonasSurf" >  <i class="small material-icons">recent_actors</i>&nbsp;Cantidad Personas Surf</label>
                      </div>
                    </div><!--FIN DEL DIV DE LA TERCERA  FILA -->


                    <div class="row"><!--INICIO DE LA CUARTA FILA-->
                      <div class="input-field col s6 m5 l6  ">
                        <input  id="prepago" type="text" name="prepago" value="" class="validate" class="form-control" data-validacion-tipo="requerido|min:10" >
                        <label for="prepago" >  <i class="small material-icons">picture_in_picture</i>&nbsp;Prepago</label>
                    </div>

                    <!--INICIO DE COLUMNA-->
                    <div class="input-field col s6 m5 l6  ">
                      <input  id="exonerado" type="text" name="exonerado" value="" class="validate" class="form-control" data-validacion-tipo="requerido|min:10">
                      <label for="exonerado" >  <i class="small material-icons">perm_identity</i>&nbsp;Exonerado</label>
                    </div>
                  </div><!--FIN DEL DIV DE LA CUARTA FILA-->


                  <div class="row"><!--INICIO DEL DIV DE LA QUINTA FILA-->
                    <!--INICIO DE COLUMNA -->
                    <div class="input-field col s6 m5 l6  ">
                      <input  id="placa_automovil" type="text" name="placa_automovil" value="" class="validate" class="form-control" data-validacion-tipo="requerido|min:10">
                      <label for="placa_automovil" >  <i class="small material-icons">perm_identity</i>&nbsp;Placa Automovil</label>
                    </div>

                    <div class="input-field col s6 m5 l6">
                      <input  id="tipo_automovil" type="text" name="tipo_automovil" value="" class="validate" class="form-control" data-validacion-tipo="requerido|min:10">
                      <label for="tipo_automovil" >  <i class="small material-icons">description</i>&nbsp;Tipo de Automovil</label>
                    </div>
                  </div><!--FIN DEL DIV DE LA QUINTA FILA-->

                  <div class="row"><!--INICIO DE SETIMA FILA-->
                    <div class="input-field col s4 m5 l4">
                      <input  id="monto" type="text" name="monto" value="" class="validate" class="form-control" data-validacion-tipo="requerido|min:10">
                      <label for="monto" >  <i class="small material-icons">description</i>&nbsp;Monto a pagar</label>
                    </div>

                    <div class="">
                      <div class="input-field col s4 m5 l4">
                        <input  id="moneda" type="text" name="moneda" value="" class="validate" class="form-control" data-validacion-tipo="requerido|min:10">
                        <label for="moneda" >  <i class="small material-icons">description</i>&nbsp;Tipo de Moneda</label>
                      </div>

                      <div class="">
                        <div class="input-field col s4 m5 l4">
                          <input  id="total" type="text" name="total" value="" class="validate" class="form-control" data-validacion-tipo="requerido|min:10">
                          <label for="total" >  <i class="small material-icons">description</i>&nbsp;Total a pagar</label>
                        </div>
                      </div>
                    </div>
                  </div><!--FIN DE LA SETIMA FILA-->

                  <div class="input-field col s4 m5 l4">
                    <select>
                      <option value="" disabled selected>Elija una opcion</option>
                      <option value="1">Option 1</option>
                      <option value="2">Option 2</option>
                      <option value="3">Option 3</option>
                    </select>
                    <label>Seleccionar Pais</label>
                  </div>

                  <div class="input-field col s4 m5 l4">
                    <select>
                      <option value="" disabled selected>Elija una opcion</option>
                      <option value="1">Option 1</option>
                      <option value="2">Option 2</option>
                      <option value="3">Option 3</option>
                    </select>
                    <label> Seleccionar Provincia</label>
                  </div>

                  <div class="input-field col s4 m5 l4">
                    <select>
                      <option value="" disabled selected>Elija una opcion</option>
                      <option value="1">Option 1</option>
                      <option value="2">Option 2</option>
                      <option value="3">Option 3</option>
                    </select>
                    <label>Seleccionar Sector</label>
                  </div>

                  <div class="input-field col s4 m5 l4">
                    <select>
                      <option value="" disabled selected>Elija una opcion</option>
                      <option value="1">Option 1</option>
                      <option value="2">Option 2</option>
                      <option value="3">Option 3</option>
                    </select>
                    <label> Seleccionar Sendero</label>
                  </div>

                  <div class="input-field col s4 m5 l4">
                    <select>
                      <option value="" disabled selected>Elija una opcion</option>
                      <option value="1">Option 1</option>
                      <option value="2">Option 2</option>
                      <option value="3">Option 3</option>
                    </select>
                    <label> Seleccionar asp</label>
                  </div>

                  <div class="input-field col s4 m5 l4">
                    <select>
                      <option value="" disabled selected>Elija una opcion</option>
                      <option value="1">Option 1</option>
                      <option value="2">Option 2</option>
                      <option value="3">Option 3</option>
                    </select>
                    <label> Seleccionar usuario</label>
                  </div>
  <!--BOTON QUE ME ENVIA EL FORMULARIO-->
                  <button class="btn waves-effect waves-light teal darken-4" value="enviar" type="submit" name="action">Enviar<i class="mdi-content-send right"></i></button>
                  <button class="btn waves-effect waves-light teal darken-4" value="reset" type="reset" name="action">Limpiar<i class="mdi-content-send right"></i></button>
                </div>
              </form>
           </div>
         </div>
       </div>
     </fieldset>
     <hr>
<!--================================================================================================================================-->
  </div>
  </div><!-- Div de los tamanos -->
  </div>
  </div>
  </main>
</body>
<script>
    $(document).ready(function(){
          $("#frm-visitacion").submit(function(){
              return $(this).validate();
          });
      })
  </script>
