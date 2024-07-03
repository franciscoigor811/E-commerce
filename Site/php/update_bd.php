<?php
	session_start();
	include("conecta.php");
	include("redirect.php");
	$id = $_POST['id'];
	$nome = $_POST['nome'];	
	$email = $_POST['email'];
	$senha = $_POST['senha'];
	$CPF = $_POST['CPF'];
	$CEP = $_POST['CEP'];
	$rua = $_POST['rua'];
	$numero = $_POST['numero'];
	$complemento = $_POST['complemento'];
	$bairro = $_POST['bairro'];
	$cidade = $_POST['cidade'];
	$uf = $_POST['uf'];
	$acesso = $_POST['acesso'];
	$ativo = $_POST['ativo'];

	if ($senha == NULL) {
		$SQL_Update = "UPDATE tb_cadastrar
						SET nome = '$nome', email = '$email', CPF = '$CPF', CEP = '$CEP', rua = '$rua', 
						numero = '$numero', complemento = '$complemento', bairro = '$bairro', cidade = '$cidade', 
						uf = '$uf', acesso = '$acesso', ativo = '$ativo'
						WHERE id = '$id'";
	} else {
		$SQL_Update = "UPDATE tb_cadastrar
						SET nome = '$nome', email = '$email', senha = md5('$senha'), CPF = '$CPF', CEP = '$CEP', 
						rua = '$rua', numero = '$numero', complemento = '$complemento', bairro = '$bairro', 
						cidade = '$cidade', uf = '$uf', acesso = '$acesso', ativo = '$ativo'
						WHERE id = '$id'";
	}

	mysqli_query($conecta,$SQL_Update);
	if ($id == $_SESSION['id']) {
		redirect('updateur.php');
	} else {
		redirect('../dash/table-adm.php');
	}
?>