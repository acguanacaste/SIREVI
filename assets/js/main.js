$(buscar_datos());

function buscar_datos(consulta){
  $.ajax({
    url:'view/visitacion/buscar.php',
    type: 'POST',
    dataType: 'html',
    data: {consulta : consulta}//La consulta es igual al parametro que ingresa llamado de igual manera "consulta"
  })
  .done(function(respuesta){
    $("#datos").html(respuesta);
  })
  .fail(function(){
  console.log("error");
  })
}


$(document).on('keyup', '#caja_busqueda', function(){
  var valor = $(this).val();
  if(valor != ""){
    buscar_datos(valor);
  }
  else {
    buscar_datos();

  }

});
