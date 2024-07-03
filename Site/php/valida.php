<?php
	session_start();
	include("conecta.php");
	include("redirect.php");

	error_reporting(0);

	if (!isset($_SESSION['id'])) {
		$_SESSION['id'] = "ER";
		redirect('../login/login.php');
	}

	$sql = "SELECT nome,ativo,acesso FROM `tb_cadastrar` WHERE id='$_SESSION[id]'";
	$result = mysqli_query($conecta,$sql);
	$consulta = mysqli_fetch_array($result);
	$nome = $consulta[nome];
	$acesso = $consulta[acesso];
?>