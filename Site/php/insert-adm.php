<?php
	include("conecta.php");
	include("redirect.php");
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
	$acesso = $_POST['acesso'];
	$uf = $_POST['uf'];

	$sql = "INSERT INTO tb_cadastrar 
			(nome,email,senha,CPF,CEP,rua,numero,complemento,bairro,cidade,uf,acesso,ativo) values 
			('$nome','$email',md5('$senha'),'$CPF','$CEP','$rua','$numero','$complemento','$bairro','$cidade','$uf','$acesso','true')";

	if(mysqli_query($conecta,$sql)==true)
		$msg="ok";
	else
		$msg="er";

	$_SESSION['msg'] = $msg;

	redirect('../dash/table-adm.php');
	mysqli_close($conecta);
?>