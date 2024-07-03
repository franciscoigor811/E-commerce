<?php
	if (!isset($_SESSION['id'])) {
		$_SESSION['id'] = "ER";
		redirect("../Login_v1/login.php");
	}

	$sql = "SELECT nome,acesso FROM tb_adm WHERE id='$_SESSION[id]'";
	$result = mysqli_query($conecta,$sql);
	$consulta = mysqli_fetch_array($result);

	$nome = $consulta['nome'];
	$acesso = $consulta['acesso'];

	if ($acesso == 1) {
		$cargo = "Administrador";
	} else {
		$cargo = "Funcionário";
	}
?>