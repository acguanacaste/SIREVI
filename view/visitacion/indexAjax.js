$(document).ready(function(){
  $.ajax({
    type: 'POST',
    url: 'view/php/cargar_paises.php',
    data: {'peticion' : 'cargar_paises'}
  })
  .done(function(listas_rep){
    $('#lista_pais').html(listas_rep)
  })
  .fail(function(){
    alert('Hubo un errror al cargar las listas_rep')
  })

  $('#lista_pais').on('change', function(){
    var id = $('#lista_pais').val()
    $.ajax({
      type: 'POST',
      url: 'view/php/cargar_provincias.php',
      data: {'id': id}
    })
    .done(function(listas_rep){
      $('#provincias').html(listas_rep)
    })
    .fail(function(){
      alert('Hubo un errror al cargar los vídeos')
    })
  })

  $('#enviar').on('click', function(){
    var resultado = 'Pais elejido: ' + $('#lista_pais option:selected').text() +'<br>'+
    'Provincia elegida: ' + $('#provincias option:selected').text()

    $('#resultado1').html(resultado)
  })

})
