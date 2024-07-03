<?php
	include("redirect.php");
	echo "<script>alert('Sua conta foi atualizada com sucesso! Agora logue novamente.')</script>";
	redirect("logout.php");
?>