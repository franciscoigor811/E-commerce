<?php
	session_start();
	include("conecta.php");
	include("redirect.php");
	$nome = $_POST['nome'];	
	$email = $_POST['email'];
	$telefone = $_POST['telefone'];
	$mensagem = $_POST['mensagem'];

	$sql = "INSERT INTO tb_msg (nome, email, telefone, mensagem) 
			VALUES ('$nome', '$email', '$telefone', '$mensagem')";


	if(mysqli_query($conecta,$sql))
		$msg="ok";
	else
		$msg="er";

	$_SESSION['msg'] = $msg;

	redirect('../index.php#contact');
	mysqli_close($conecta);
?>