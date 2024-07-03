<?php
	include("redirect.php");
	session_start();
	session_destroy();
	redirect("../cardapio.php");
?>