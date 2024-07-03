$(document).ready(function(){
  $('#botão').click(function(){
    var nome = $('#imagem').val();
    if (nome == '') {
      alert("Por-favor selecione uma imagem");
      return false;
    } else {
      var ext = $('#imagem').val().split('.').pop().toLowerCase();
      if (jQuery.inArray(ext, ['gif', 'png', 'jpg', 'jpeg']) == -1) {
        alert("Por-favor selecione uma imagem válida");
        $('#imagem').val('');
        return false;
      }
    }
  });
});