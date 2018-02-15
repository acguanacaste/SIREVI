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
                     <fieldset  disabled class="z-depth-2">
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
  <fieldset class="z-depth-2 input-field col s12 m5 l5">
     <div class="">
    <fieldset  disabled class="z-depth-2">
      <legend>Distancia</legend>
      <div  class="col s12 m12 l12">
        <div>
          <div class="input-field col s12">
            <i class="material-icons prefix">transfer_within_a_station</i>
            <input id="" type="text" name="distancia" value="<?php echo $sendero->distancia; ?>" class="validate" class="form-control"  required >
            <label for="distancia"></label>
          </div>
        </div>
      </div>
    </fieldset>
    </div>
  </fieldset>


  <fieldset class="z-depth-2 input-field col s12 m5 l5">
     <div class="">
    <fieldset  disabled class="z-depth-2">
      <legend>Distancia</legend>
      <div  class="col s12 m12 l12">
        <div>
          <div class="input-field col s12">
            <i class="material-icons prefix">transfer_within_a_station</i>
            <input id="" type="text" name="distancia" value="<?php echo $sendero->distancia; ?>" class="validate" class="form-control"  required >
            <label for="distancia"></label>
          </div>
        </div>
      </div>
    </fieldset>
    </div>
  </fieldset>

<!--
  <fieldset class="z-depth-2 input-field col s12 m6 l3">
     <div class="input-field col s12 m12 l12  ">
       <input  id="tiempo_recorrido" type="text" name="tiempo_recorrido" value="<?php echo $sendero->tiempo_recorrido; ?>" class="validate" class="form-control" data-validacion-tipo="requerido|min:10" required >
       <label for="tiempo_recorrido" >  <i class="small material-icons">timer</i>Tiempo de recorrido</label>
      </div>
  </fieldset>

  <fieldset class="z-depth-2 input-field col s12 m6 l3">
      <div class="input-field col s12 m12 l12  ">
        <input  id="" type="text" name="punto_alto" value="<?php echo $sendero->punto_alto; ?>" class="validate" class="form-control" data-validacion-tipo="requerido|min:10" required >
        <label for="punto_alto" >  <i class="small material-icons">wallpaper</i>Punto mas alto</label>
       </div>
    </fieldset> -->

  </div>


<div class="row">
  <fieldset class="z-depth-2 input-field col s12 m6 l5">
     <div class="">
    <fieldset  disabled class="z-depth-2">
      <legend>Distancia</legend>
      <div  class="col s12 m12 l12">
        <div>
          <div class="input-field col s12">
            <i class="material-icons prefix">transfer_within_a_station</i>
            <input id="" type="text" name="distancia" value="<?php echo $sendero->distancia; ?>" class="validate" class="form-control"  required >
            <label for="distancia"></label>
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
              <fieldset  disabled><legend>Descripción del insidente en el activo</legend>
                <div  class="col s12 m12 l12">
                  <div>
                    <div class="input-field col s12">
                      <i class="material-icons prefix">textsms</i>
                      <input type="text" id="autocomplete-input" name="descripcion" value="<?php echo $ins->descripcion; ?>" class="autocomplete"required>
                      <label for="autocomplete-input">Descripción</label>
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
           <a   href="?c=Insidente"><i class="small material-icons white-text ">arrow_back</i>
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
