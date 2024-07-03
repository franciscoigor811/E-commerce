<?php
	include("conecta.php");
	include("redirect.php");
	$id = $_POST['id'];
	$nome = $_POST['nome'];
	$unidade = $_POST['unidade'];
	$valor = $_POST['valor'];
	$tipo = $_POST['tipo'];
	if(is_uploaded_file($_FILES['imagem']['tmp_name'])) {
		$conteudo = addslashes(file_get_contents($_FILES["imagem"]["tmp_name"]));
	} else {
		$conteudo = NULL;
	}

	if (isset($_POST["botão"])) {
	  	$arquivo = $conteudo;
	  	if($arquivo == NULL)
			$SQL_Update = "UPDATE tb_produto
						   SET nome = '$nome', valor = '$valor', tipo = '$tipo'
						   WHERE id = '$id'";
		else
			$SQL_Update = "UPDATE tb_produto
						   SET nome = '$nome', valor = '$valor', tipo = '$tipo', img = '$arquivo'
						   WHERE id = '$id'";

		if (mysqli_query($conecta,$SQL_Update)) {
			echo "<script> alert('Produto atualizado com sucesso!'); </script>";
			if ($tipo == "comida")
		    	redirect("../adm/table_comida.php");
			else
		    	redirect("../adm/table_bebida.php");
		}
		else {
			echo "<script> alert('Ocorreu um erro ao atualizar o produto!'); </script>";
			redirect("../adm/update-produto.php?id=$id");
		}
	}

	mysqli_close($conecta);
?>