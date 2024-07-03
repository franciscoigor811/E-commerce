<?php
  session_start();

  //Envio de mensagem
  function showMessage() {
    if (!isset($_SESSION['msg'])) {
      $_SESSION['msg'] = "DEFAULT";
    }
    if ($_SESSION['msg']=="ok"){
      $texto = ("<div class='success'><b>Sucesso!</b> Sua mensagem foi enviada com sucesso.</div>");
    }
    elseif ($_SESSION['msg']=="er") {
      $texto = ("<div class='error'><b>Erro!</b> Ocorreu um erro ao tentar enviar a mensagem.</div>");
    }
    else{
      $texto = NULL;
    }
    return $texto;
  }
  

  //Mensagem de login
  if (!isset($_SESSION['id'])) {
    $_SESSION['id'] = "DEFAULT";
  }
  if ($_SESSION['id']=="ER"){
    $texto = ("<div class='error'><b>Erro!</b> Ocorreu um erro ao tentar se conectar ao servidor.</div>");
  } else {
    $texto = NULL;
  }

  session_destroy();
?>