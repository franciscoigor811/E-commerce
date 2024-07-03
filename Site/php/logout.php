<?php
	session_start();
	include("redirect.php");
	session_destroy();
	redirect('../login/login.php');
?>