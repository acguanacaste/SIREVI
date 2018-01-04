/*
    public function CambioContrasena(){
      $user = new Usuario();

      if(isset($_REQUEST['id'])){
          $user = $this->model->Obtener($_REQUEST['id']);/*Se esta llamndo desde model Usuarios
      }

      require_once 'view/includes/headerPrincipal.php';
      require_once 'view/usuario/contrasena.php';
      require_once 'view/includes/footer.php';

    } */








<main>
  <div class="container">
    <div class="row">
      <div class="col s12 m10 l10">
<!-- Inicio de mi codigo -->
        <div id="search-docs" class="section scrollspy">
          <hr>
<!--===========================================================================================================-->
<fieldset>
  <legend><h5> Usuario: <?php echo $user->email; ?></h5>
   <h6>Utilice los campos habilitados para modificar información </h6></legend>
    <div class="container contact">
      <br>
      <hr>
      <br>
      <div class="row">
        <div class="col s12 m12 l11">
          <div class="row">
            <form id="frm-usuario" action="?c=Usuario&a=Guardar" method="post" enctype="multipart/form-data">
              <input type="hidden" name="id" value="<?php echo $user->id; ?>" />


                <div class="row"><!---INICIO DE LA PRIMERA FILA-->
                  <div class="input-field col s6 m5 l6  ">
                    <input  id="name" type="text" name="nombre" value="<?php echo $user->nombre; ?>" class="validate" class="form-control" data-validacion-tipo="requerido|min:10" >
                    <label  for="name" >  <i class="small material-icons">face</i><span class="hide-on-small-only">Nombre</span></label>
                  </div>

                 <!--INICIO DE COLUMNA APELLIDO-->
                <div class="input-field col s6 m5 l6  ">
                  <input  id="last_name" type="text" name="apellido" value="<?php echo $user->apellido; ?>" class="validate" class="form-control" data-validacion-tipo="requerido|min:10" >
                  <label for="last_name" >  <i class="small material-icons">recent_actors</i><span class="hide-on-small-only">Apellido</span></label>
                </div>
              </div><!--FIN DEL DIV DE LA PRIMERA FILA -->

     <!--INICIO DE LA FILA 2-->
     <!--INICION DE COLUMNA DEL CEDULA-->
                   <div class="row"><!--INICIO DEL DIV DE LA SEGUNDA FILA-->
                     <div class="input-field col s6 m5 l6 ">
                       <input  id="cedula" type="text" name="cedula" disabled value="<?php echo $user->cedula; ?>" value="<?php echo $user->cedula; ?>"   class="validate form-control" data-validacion-tipo="requerido|min:15">
                       <label for="cedula"> <i class="small material-icons">picture_in_picture</i><span class="hide-on-small-only">Cédula</span></label>
                     </div>
                   <!--INICIO DE COLUMNA CONTRASENA-->
                   <div class="input-field col s6 m5 l6  ">
                   <input  id="contrasena" type="password" name="contrasena"  value="<?php echo $user->contrasena; ?>"  class="validate form-control" data-validacion-tipo="requerido|min:10">
                   <label for="contrasena" >  <i class="small material-icons">perm_identity</i><span class="hide-on-small-only">Contraseña</span></label>
                   </div>
               </div><!--FIN DEL DIV DE LA SEGUNDA FILA-->

     <!--INICIO DE LA TERCERA FILA-->
     <!--INICIO DE LA COLUMNA PUESTO EN INSTITUCION-->
     <div class="row"><!--INICIO DE TERCERA FILA-->
       <div class="input-field col s12 m10 l12" >
         <select id="puesto" name="puesto" data-value="<?php echo $user->puesto; ?>" required>
           <option value="" disabled selected>Elija una opción</option>
           <option value="Administrador" <?php echo $user->puesto=="Administrador"?"selected":null; ?>>Administrador</option>
           <option value="Encargado de sector"<?php echo $user->puesto=="Encargado de sector"?"selected":null;?>>Encargado de sector</option>
           <option value="Reportes"<?php echo $user->puesto=="Reportes"?"selected":null; ?>>Reportes</option>
         </select>
         <label for="puesto">Puesto en la Institución</label>
       </div>

 <!--INICIO DE LINEAS PARA EL CORREO-->
       <div class="row">
         <div class="col s12">
           Escriba su correo electrónico correctamente:
                 <div class="row">
                   <div class="input-field">
              <input id="email" type="email" name="email" value="<?php echo $user->email; ?>" class="validate"
              class="form-control" data-validacion-tipo="requerido|email">
              <label for="email" data-error="wrong" data-success="right"><i class="small material-icons"> email </i></label>
            </div>
          </div>
        </div>
       </div>

<!--
       <div class="row"><!--INICIO DEL DIV PARA LA IMAGEN--
         <div class="file-field input-field">
           <div class="btn waves-effect waves-light teal darken-4" title="Subir imagenes">
             <i class="mdi-content-send material-icons right">perm_media</i>
             <span class="hide-on-small-only ">Subir Imagen</span>
             <input type="file" name="foto" id="foto">
           </div>
           <div class="file-path-wrapper">
             <input id="foto" name="foto" value="echo'<img src="'.$r->foto.'" width="100" heigth="100">';"
              value="<?php echo'<img src="'.$r->foto.'" width="100" heigth="100">'; ?>" class="file-path validate validate" type="text">
           </div>
         </div>
      </div>
-->





       <!--BOTON QUE ME ENVIA EL FORMULARIO-->
       <button title="Enviar" class="btn waves-effect waves-light teal darken-4"
         value="enviar"  type="submit" name="action"><span class="hide-on-small-only">Enviar</span>
              <i class="mdi-content-send material-icons right">done</i>
       </button>

     <!--BOTON QUE ME BORRA LO QUE ESCRIBI EN EL FORMULARIO-->
             </div>
           </form>
             </div>

           </div>
         </div>
</fieldset>

<!--================================================================================================================================-->
        </div>
      </div><!-- Div de los tamanos -->

        <div class="col m3 l2 hide-on-small-only">
          <div class="toc-wrapper pin-top" style="top: -15px;">
            <div class="buysellads hide-on-small-only">
              <!-- CarbonAds Zone Code -->
              <script async="" type="text/javascript"
              src="" id="_carbonads_js"></script>
          <!--    <div id="carbonads">
                <span>
                  <span class="carbon-wrap">
                    <a href="" class="carbon-img" target="_blank">

                      <img src="" alt="" style="max-width: 130px;" height="100" border="0" width="130"></a>
                      <br>
                <!--      <a href="" class="carbon-text" target="_blank">Algo mas de texto</a></span> -
                      <br>
                  <!--    <a href="" class="carbon-poweredby" target="_blank">Un texto mas...</a></span></div> -
                </div>  -->
                  <div style="height: 1px;">
                    <ul class="section table-of-contents">

                      <hr>
                      <li><a  href="index.php?c=Usuario" >
                        <i style="color:#00b0ff" title="Página Anterior" class=" small material-icons">refresh</i>Pagina anterior</a></li>
                      <li>
                        <hr>

                      </li>

                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </main>

  <script>
      $(document).ready(function(){
          $("#frm-usuario").submit(function(){
              return $(this).validate();
          });
      })
  </script>




























































































<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <style>
    .error {font-weight: bold; color:red;}
    .mensaje {color:#030;}
    .listadoImagenes img {float:left;border:1px solid #ccc; padding:2px;margin:2px;}
    </style>
</head>
<!--http://www.lawebdelprogramador.com/codigo/PHP/70-Guardar-y-mostrar-una-imagen-de-una-base-de-datos-MySQL.html-->
<body>

<?php
# Conectamos con MySQL
$mysqli=new mysqli("localhost","root","123456","imagen");
if (mysqli_connect_errno()) {
    die("Error al conectar: ".mysqli_connect_error());
}

// Los posible valores que puedes obtener de la imagen son:

//echo "<BR>".$_FILES["userfile"]["name"];      //nombre del archivo

//echo "<BR>".$_FILES["userfile"]["type"];      //tipo

//echo "<BR>".$_FILES["userfile"]["tmp_name"];  //nombre del archivo de la imagen temporal

//echo "<BR>".$_FILES["userfile"]["size"];      //tamaño



# Comprovamos que se haya subido un fichero

if (is_uploaded_file($_FILES["userfile"]["tmp_name"])){
    # verificamos el formato de la imagen
    if ($_FILES["userfile"]["type"]=="image/jpeg" || $_FILES["userfile"]["type"]=="image/pjpeg" || $_FILES["userfile"]["type"]=="image/gif" || $_FILES["userfile"]["type"]=="image/bmp" || $_FILES["userfile"]["type"]=="image/png")
    {
        # Cogemos la anchura y altura de la imagen
        $info=getimagesize($_FILES["userfile"]["tmp_name"]);
        //echo "<BR>".$info[0]; //anchura
        //echo "<BR>".$info[1]; //altura
        //echo "<BR>".$info[2]; //1-GIF, 2-JPG, 3-PNG
        //echo "<BR>".$info[3]; //cadena de texto para el tag <img
        # Escapa caracteres especiales
        $imagenEscapes=$mysqli->real_escape_string(file_get_contents($_FILES["userfile"]["tmp_name"]));
        # Agregamos la imagen a la base de datos
        $sql="INSERT INTO `imagephp` (anchura,altura,tipo,imagen) VALUES (".$info[0].",".$info[1].",'".$_FILES["userfile"]["type"]."','".$imagenEscapes."')";
        $mysqli->query($sql);
        # Cogemos el identificador con que se ha guardado
        $id=$mysqli->insert_id;
        # Mostramos la imagen agregada
        echo "<div class='mensaje'>Imagen agregada con el id ".$id."</div>";
    }else{
        echo "<div class='error'>Error: El formato de archivo tiene que ser JPG, GIF, BMP o PNG.</div>";
    }
}
?>
<h2>Selecciona una imagen</h2>
<form enctype="multipart/form-data" action="<?php echo $_SERVER["PHP_SELF"]?>" method="POST">
    <input name="userfile" type="file">
    <p><input type="submit" value="Guardar Imagen">
</form>
<h2>Listado de las imagenes añadidas a la base de datos</h2>
<div class="listadoImagenes">
    <?php
    $result=$mysqli->query("SELECT * FROM imagephp ORDER BY id DESC");
    if($result)
    {
        while($row=$result->fetch_array(MYSQLI_ASSOC))
        {
            echo "<img src='imagen_mostrar.php?id=".$row["id"]."' width='".$row["anchura"]."' height='".$row["aaltura"]."'>";
        }
    }
    ?>
</div>
  <?php
      ########## imagen_mostrar.php ##########
      # debe recibir el id de la imagen a mostrar
      # Conectamos con MySQL
      $mysqli=new mysqli("localhost","root","123456","imagen");
      if (mysqli_connect_errno()) {
          die("Error al conectar: ".mysqli_connect_error());
      }
      # Buscamos la imagen a mostrar
      $result=$mysqli->query("SELECT * FROM `imagephp` WHERE id=".$_GET["id"]);
      $row=$result->fetch_array(MYSQLI_ASSOC);
      # Mostramos la imagen
      header("Content-type:".$row["tipo"]);
      echo $row["imagen"];
      ?>

<?php # Conectamos con MySQL
$mysqli=new mysqli("localhost","root","","imagenes");
if (mysqli_connect_errno()) {
die("Error al conectar: ".mysqli_connect_error());
}

# Buscamos la imagen a mostrar
$result=$mysqli->query("SELECT * FROM `imagephp` WHERE id=".$_GET["id"]);
$row=$result->fetch_array(MYSQLI_ASSOC);

# Mostramos la imagen
header("Content-type:".$row["tipo"]);
echo $row["imagen"];
?>



</body>
</html>
