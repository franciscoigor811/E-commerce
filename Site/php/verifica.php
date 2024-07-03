<?php
	session_start();
	include("conecta.php");
	include("redirect.php");
	$email = $_POST['email'];
	$senha = md5($_POST['senha']);

	$sql = "SELECT id,senha,ativo FROM `tb_cadastrar` WHERE email='$email'";

	$result = mysqli_query($conecta,$sql);
	$consulta = mysqli_fetch_array($result);

	if (empty($result) == false) {
		if ($consulta['ativo'] == "true") {
			if ($consulta['senha'] == $senha) {
				$_SESSION['id'] = $consulta['id'];
				redirect('../dash/table-msg.php');
			} else {
				$_SESSION['id'] = "ER";
				redirect('../login/login.php');
			}
		} else {
			$_SESSION['id'] = "ER";
			redirect('../login/login.php');
		}
	} else {
		$_SESSION['id'] = "ER";
		redirect('../login/login.php');
	}

?>