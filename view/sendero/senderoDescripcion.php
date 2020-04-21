<main>
  <div class="container">
    <div class="row">
      <div class="col s12 m12 l12">

        <div id="search-docs" class="section scrollspy">
          <hr>
<!--===========================================================================================================-->
<fieldset>
  <legend><h5>Descripción Sendero</h5>
   <h6>Página para mostrar la descripcion y ubicación del activo reportado</h6></legend>
    <div class="container contact">
      <br>
      <hr>
      <br>
      <div class="row">
        <div class="col s12 m12 l12">
          <div class="row">
            <form id="frm-sendero" action="" method="post" enctype="multipart/form-data">
              <input type="hidden" name="id" value="<?php echo $sendero->id; ?>" />

<!--Inicio de la fila para el campo atraccion-->
                  <div class="row">
                    <fieldset>
                      <div class="">
                     <fieldset  disabled class="">
                       <legend>Atractivo del sendero</legend>
                       <div  class="col s12 m12 l12">
                         <div>
                           <div class="input-field col s12">
                             <i class="material-icons prefix">assignment_late</i>
                             <input id="" type="text" name="atractivo" value="<?php echo $sendero->atractivo; ?>" class="validate" class="form-control"  required >
                             <label for="atractivo"></label>
                           </div>
                         </div>
                       </div>
                     </fieldset>
                     </div>
                    </fieldset>
               </div>
               <!--Fin de la fila para el atraccion-->


<div class="row">
  <fieldset disabled class="">

            <div class="input-field col s12 m5 l6">
              <i class="material-icons prefix">transfer_within_a_station</i>
              <input id="" type="text" name="distancia" value="<?php echo $sendero->distancia; ?>" class="validate" class="form-control"  required >
              <label for="distancia">Distancia</label>
           </div>

           <div class="">
              <div class="input-field col s12 m5 l6">
                <i class="material-icons prefix">timer</i>
                <input id="" type="text" name="distancia" value="<?php echo $sendero->tiempo_recorrido; ?>" class="validate" class="form-control"  required >
                <label for="distancia">Tiempo recorrido</label>
              </div>
          </div>

  </fieldset>
</div><!--Final del row-->


            <div class="row">
              <fieldset>
                <div class="">
               <fieldset  disabled class="">
                 <legend>Punto inicio</legend>
                 <div  class="col s12 m12 l12">
                   <div >
                     <div class="input-field col s12">
                       <i class="material-icons prefix">directions_walk</i>
                       <input id="" type="text" name="atractivo" value="<?php echo $sendero->punto_inicio; ?>" class="validate" class="form-control"  required >
                       <label for="atractivo"></label>
                     </div>
                   </div>
                 </div>
               </fieldset>
               </div>
              </fieldset>
         </div>


         <div class="row">
           <fieldset>
             <div class="">
            <fieldset  disabled class="">
              <legend>Punto llegada</legend>
              <div  class="col s12 m12 l12">
                <div>
                  <div class="input-field col s12">
                    <i class="material-icons prefix">assignment_late</i>
                    <input id="" type="text" name="atractivo" value="<?php echo $sendero->punto_llegada; ?>" class="validate" class="form-control"  required >
                    <label for="atractivo"></label>
                  </div>
                </div>
              </div>
            </fieldset>
            </div>
           </fieldset>
        </div>



               <div class="row"><!--INICIO DEL DIV DE LA TERCERA FILA-->
               <!--INICIO DE COLUMNA CONTRASENA-->
               <div class="">
              <fieldset  disabled><legend>Descripción del sendero</legend>
                <div  class="col s12 m12 l12">
                  <div>
                    <div class="input-field col s12">
                      <i class="material-icons prefix">chrome_reader_mode</i>
                      <input type="text" id="" name="descripcion" value="<?php echo $sendero->descripcion; ?>"required>
                      <label for="">Descripción</label>
                    </div>
                  </div>
                </div>
              </fieldset>
              </div>
            </div><!--FIN DEL DIV DE LA SEGUNDA FILA-->

<!--======================Inicio del codigo para el select y final de codigo PHP ====================-->

 <!--INICIO DE LINEAS PARA EL CORREO-->
       <div class="row">
         <div class="col s12">

        </div>
       </div>

       <!--BOTON QUE ME ENVIA EL FORMULARIO-->
         <div class="btn blue-grey darken-3 z-depth 4 right hide-on-small-only">
           <a   href="?c=Sendero"><i class="small material-icons white-text ">arrow_back</i>
             <span class="white-text">Pagina Anterior</span></a>
         </div>
         </div>
        </form>
       </div>
      </div>
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
          $("#frm-insidente").submit(function(){
              return $(this).validate();
          });
      })
  </script>
