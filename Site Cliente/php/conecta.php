<?php
	$conecta = mysqli_connect("127.0.0.1","Bolinho","adm","bd_bolinho") or print(mysqli_error());

	mysqli_set_charset($conecta, "utf8");
?>