<?php
  session_start();
  include("conecta.php");
  include("redirect.php");
  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $telefone = $_POST['tel'];
  $mensagem = $_POST['msg'];

  $sql = "INSERT INTO tb_msg (nome, email, telefone, msg) 
  VALUES ('$nome', '$email', '$telefone', '$mensagem')";
  
  if (mysqli_query($conecta,$sql)) {
  	$msg = "success";

  } else {
  	$msg = "error";
  }

  $_SESSION['msg'] = $msg;
  redirect("../index.php#contact");

	mysqli_close($conecta);
?>
