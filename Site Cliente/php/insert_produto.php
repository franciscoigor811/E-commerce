<?php
	include("conecta.php");
	include("redirect.php");
	$nome = $_POST['nome'];
	$unidade = $_POST['unidade'];
	$valor = $_POST['valor'];
	$tipo = $_POST['tipo'];
	$imagem = $_FILES["imagem"]["tmp_name"];
	$conteudo = addslashes(file_get_contents($imagem));

	if (isset($_POST["botão"])) {
		$arquivo = $conteudo;
		$sql="INSERT INTO tb_produto (nome, unidade, valor, img, tipo, ativo) values ('$nome', '$unidade', '$valor', '$arquivo', '$tipo', 'true')";
		if (mysqli_query($conecta,$sql)) {
	    	if ($tipo == "comida")
	    		redirect("../adm/table_comida.php");
	    	else
	    		redirect("../adm/table_bebida.php");
	  	}
	}

	mysqli_close($conecta);
?>