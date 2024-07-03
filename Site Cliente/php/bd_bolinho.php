<?php
	session_start();
	include("conecta.php");
	include("redirect.php");
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$senha = $_POST['senha'];
	$cpf = $_POST['cpf'];
	$cep = $_POST['cep'];
	$rua = $_POST['rua'];
	$numero = $_POST['numero'];
	$complemento = $_POST['complemento'];
	$bairro = $_POST['bairro'];
	$cidade = $_POST['cidade'];
	$estado = $_POST['estado'];

	$sql="INSERT INTO tb_cliente(nome, email, senha, cpf, cep, rua, numero, complemento, bairro, cidade, estado)
	 		VALUES ('$nome','$email','$senha','$cpf','$cep','$rua','$numero','$complemento','$bairro','$cidade','$estado')";

	if(mysqli_query($conecta,$sql)) {
		$_SESSION['id'] = "ok";
		redirect("../Login_v2/login.php");
	}else{
		$_SESSION['msg'] = "er";
		redirect("../cadastro/index.php");
	}

	mysqli_close($conecta);
?>