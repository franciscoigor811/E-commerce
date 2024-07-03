<?php
	include("../php/conecta.php");
	include("../php/redirect.php");
	$email = $_POST['email'];
	$senha = $_POST['senha'];
	session_start();
	error_reporting(0);

	$sql ="SELECT id,senha FROM tb_cliente WHERE email='$email' ";

	$result=mysqli_query($conecta,$sql);
	$consulta=mysqli_fetch_array($result);

	if(empty($result) == false){
		if($consulta['senha'] == $senha){
			$_SESSION['id']=$consulta['id'];
			redirect("../cardapio.php");
		}
		else{
			$_SESSION['id']="er";
			redirect("login.php");
		}
	} else {
		$_SESSION['id']="er";
		redirect("login.php");
	}
		
?>