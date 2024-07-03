<?php
	session_start();
	require("conecta.php");
	require("redirect.php");
	$condicao = $_GET['condicao'];
	$total = $_GET['total'];
	$sql = "INSERT INTO tb_venda (idcliente,idpagto,valor) values ('".$_SESSION['id']."', '".$condicao."', '".$total."')";

	$result = mysqli_query($conecta,$sql);

	$last_id = mysqli_insert_id($conecta);

	foreach($_SESSION['carrinho'] as $id => $qtd) {
		$sql = "INSERT INTO tb_produtovenda (id,idproduto,quantidade,valor) values ($last_id,$id,$qtd,".$_SESSION['subtotal'][$id].")";
		$result = mysqli_query($conecta,$sql);
	}

	echo "<script> alert('Compra finalizada com êxito'); </script>";
	unset($_SESSION['carrinho']);
	unset($_SESSION['subtotal']);
	mysqli_close($conecta);
	redirect("../cardapio.php");
?>