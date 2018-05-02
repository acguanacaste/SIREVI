$(document).ready(function(){
$('#search').focus()

$('#search').on('keyup', function(){
    var search = $('#search').val()
  //  console.log(search)//estoy buscando el valir con esta variable
    $.ajax({
      type: 'POST',
      url: 'php/search.php',
      data: {'search': search}

    })
    .done(function(resultado){
      $('#result').html(resultado)
    })
    .fail(function(){
      alert('Hubo un error')
    })
  })
})
